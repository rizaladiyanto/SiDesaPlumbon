<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Filament\Resources\ProfileResource\RelationManagers;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Profil';

    protected static ?string $pluralLabel = 'Profil';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('sejarah')    
                    ->label('Sejarah')
                    ->placeholder('Masukkan sejarah desa')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\RichEditor::make('visi')
                    ->label('Visi')
                    ->placeholder('Masukkan visi desa')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\RichEditor::make('misi')
                    ->label('Misi')
                    ->placeholder('Masukkan misi desa')
                    ->required()
                    ->columnSpanFull(),
            ]);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sejarah')
                    ->label('Sejarah')
                    ->html()         
                    ->wrap()
                    ->lineClamp(3)        
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('visi')
                    ->label('Visi')
                    ->html()
                    ->wrap()
                    ->lineClamp(2)
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('misi')
                    ->label('Misi')
                    ->html()
                    ->wrap()
                    ->lineClamp(2)
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
