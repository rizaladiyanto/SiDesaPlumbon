<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $judul
 * @property string $konten
 * @property string|null $gambar
 * @property string|null $kategori
 * @property string $status
 * @property \Illuminate\Support\Carbon $tanggal_publikasi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read bool $is_archived
 * @property-read bool $is_draft
 * @property-read bool $is_published
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita archived()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita draft()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita published()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita whereKategori($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita whereKonten($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita whereTanggalPublikasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Berita whereUpdatedAt($value)
 */
	class Berita extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $nama_umkm
 * @property string $alamat
 * @property string $no_hp
 * @property string|null $foto
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Umkm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Umkm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Umkm query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Umkm whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Umkm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Umkm whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Umkm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Umkm whereNamaUmkm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Umkm whereNoHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Umkm whereUpdatedAt($value)
 */
	class Umkm extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

