<?php

namespace App\Filament\Resources;

use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $label = 'Berita';

    protected static ?string $pluralLabel = 'Berita';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\RichEditor::make('konten')
                    ->required()
                    ->columnSpanFull(),
                
                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->directory('berita-images')
                    ->nullable(),
                
                Forms\Components\TextInput::make('kategori')
                    ->label('Nama Kategori')
                    ->required() 
                    ->maxLength(255)
                    ->placeholder('Masukkan nama kategori') 
                    ->columnSpanFull(),
                
                Forms\Components\Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ])
                    ->default('draft')
                    ->required(),
                
                Forms\Components\DateTimePicker::make('tanggal_publikasi')
                    ->label('Tanggal Publikasi')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('kategori')
                    ->searchable()
                    ->sortable()
                    ->badge(),
                
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'gray',
                        'published' => 'success',
                        'archived' => 'warning',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'draft' => 'heroicon-o-pencil',
                        'published' => 'heroicon-o-eye',
                        'archived' => 'heroicon-o-archive-box',
                    }),
                
                Tables\Columns\TextColumn::make('tanggal_publikasi')
                    ->dateTime()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ]),
                
                Tables\Filters\SelectFilter::make('kategori')
                    ->options(function () {
                        return Berita::whereNotNull('kategori')
                            ->distinct()
                            ->pluck('kategori', 'kategori')
                            ->toArray();
                    }),
            ])
            ->actions([
                // Tombol Publish (hanya muncul jika status draft)
                Action::make('publish')
                    ->label('Publish')
                    ->icon('heroicon-o-eye')
                    ->color('success')
                    ->visible(fn (Berita $record): bool => $record->status === 'draft')
                    ->requiresConfirmation()
                    ->modalHeading('Publish Berita')
                    ->modalDescription('Apakah Anda yakin ingin mempublikasikan berita ini?')
                    ->action(function (Berita $record) {
                        $record->update([
                            'status' => 'published',
                            'tanggal_publikasi' => now(),
                        ]);
                        
                        Notification::make()
                            ->title('Berita berhasil dipublikasikan!')
                            ->success()
                            ->send();
                    }),
                
                // Tombol Archive (hanya muncul jika status published)
                Action::make('archive')
                    ->label('Archive')
                    ->icon('heroicon-o-archive-box')
                    ->color('warning')
                    ->visible(fn (Berita $record): bool => $record->status === 'published')
                    ->requiresConfirmation()
                    ->modalHeading('Archive Berita')
                    ->modalDescription('Apakah Anda yakin ingin mengarsipkan berita ini?')
                    ->action(function (Berita $record) {
                        $record->update([
                            'status' => 'archived',
                        ]);
                        
                        Notification::make()
                            ->title('Berita berhasil diarsipkan!')
                            ->success()
                            ->send();
                    }),
                
                // Tombol Republish (hanya muncul jika status archived)
                Action::make('republish')
                    ->label('Republish')
                    ->icon('heroicon-o-arrow-path')
                    ->color('info')
                    ->visible(fn (Berita $record): bool => $record->status === 'archived')
                    ->requiresConfirmation()
                    ->modalHeading('Republish Berita')
                    ->modalDescription('Apakah Anda yakin ingin mempublikasikan ulang berita ini?')
                    ->action(function (Berita $record) {
                        $record->update([
                            'status' => 'published',
                            'tanggal_publikasi' => now(),
                        ]);
                        
                        Notification::make()
                            ->title('Berita berhasil dipublikasikan ulang!')
                            ->success()
                            ->send();
                    }),
                
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    
                    // Bulk Action untuk Publish
                    Tables\Actions\BulkAction::make('bulk_publish')
                        ->label('Publish Selected')
                        ->icon('heroicon-o-eye')
                        ->color('success')
                        ->requiresConfirmation()
                        ->action(function ($records) {
                            $count = 0;
                            foreach ($records as $record) {
                                if ($record->status === 'draft') {
                                    $record->update([
                                        'status' => 'published',
                                        'tanggal_publikasi' => now(),
                                    ]);
                                    $count++;
                                }
                            }
                            
                            Notification::make()
                                ->title("{$count} berita berhasil dipublikasikan!")
                                ->success()
                                ->send();
                        }),
                    
                    // Bulk Action untuk Archive
                    Tables\Actions\BulkAction::make('bulk_archive')
                        ->label('Archive Selected')
                        ->icon('heroicon-o-archive-box')
                        ->color('warning')
                        ->requiresConfirmation()
                        ->action(function ($records) {
                            $count = 0;
                            foreach ($records as $record) {
                                if ($record->status === 'published') {
                                    $record->update(['status' => 'archived']);
                                    $count++;
                                }
                            }
                            
                            Notification::make()
                                ->title("{$count} berita berhasil diarsipkan!")
                                ->success()
                                ->send();
                        }),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}