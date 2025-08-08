<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property int $id
 * @property string $judul
 * @property string $konten
 * @property string|null $gambar
 * @property string|null $kategori
 * @property string $status
 * @property \Carbon\Carbon|null $tanggal_publikasi
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'konten',
        'gambar',
        'kategori',
        'status',
        'tanggal_publikasi',
    ];

    protected $casts = [
        'tanggal_publikasi' => 'datetime',
    ];

    // Define the status constants for better type checking
    public const STATUS_DRAFT = 'draft';
    public const STATUS_PUBLISHED = 'published';
    public const STATUS_ARCHIVED = 'archived';

    // Scope untuk mengambil berita yang sudah dipublish
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    // Scope untuk mengambil berita draft
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    // Scope untuk mengambil berita yang diarsipkan
    public function scopeArchived($query)
    {
        return $query->where('status', 'archived');
    }

    // Accessor untuk mengecek apakah berita sudah dipublish
    public function getIsPublishedAttribute(): bool
    {
        return $this->status === 'published';
    }

    // Accessor untuk mengecek apakah berita masih draft
    public function getIsDraftAttribute(): bool
    {
        return $this->status === 'draft';
    }

    // Accessor untuk mendapatkan kategori sebagai string (untuk display)
   public function getKategoriStringAttribute(): string
    {
        return $this->kategori ?? '';
    }


    // Accessor untuk mendapatkan kategori pertama
    public function getFirstKategoriAttribute(): ?string
    {
        if (is_array($this->kategori) && !empty($this->kategori)) {
            return $this->kategori[0]['kategori'] ?? null;
        }
        return null;
    }

    // Accessor untuk mendapatkan konten tanpa HTML tags
    public function getKontenPlainAttribute(): string
    {
        return strip_tags($this->konten);
    }

    // Method untuk mendapatkan excerpt konten
    public function getExcerpt(int $limit = 100): string
    {
        return Str::limit(strip_tags($this->konten), $limit);
    }
}