<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel; 
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Di dalam class User di app/Models/User.php
    public function canAccessPanel(Panel $panel): bool
    {
        // Izinkan akses jika user memiliki kolom 'is_admin' yang bernilai true (1)
        // atau jika email user adalah email super admin.
        if ($this->is_admin || $this->email === 'admin@contoh.com') {
            return true;
        }

        // Atau contoh lain: jika email user berakhiran @domainanda.com
        // return str_ends_with($this->email, '@domainanda.com');

        return false;
    }
}
