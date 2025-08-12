<?php

namespace Database\Seeders;

use App\Models\home;
use App\Models\profile;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin Desa Plumbon',
            'email' => 'admin@desaplumbon-sukoharjo.com', 
            'password' => Hash::make('ExtraSecurePassword'),
            'is_admin' => true,
            'email_verified_at' => now(),
        ]);

        home::create(
            [
                'about' => 'Selamat datang di Desa Plumbon, sebuah kawasan dinamis di Kecamatan Mojolaban, Sukoharjo, yang secara unik memadukan ketenangan pedesaan dengan aksesibilitas perkotaan. Berada tepat di gerbang timur Kota Surakarta (Solo), desa kami menikmati posisi strategis yang didukung oleh jalur rel kereta api vital penghubung Surakarta dan Wonogiri. Konektivitas ini menjadi urat nadi bagi mobilitas penduduk dan roda perekonomian lokal, yang denyutnya berpusat pada sektor agraris. Hamparan hijau persawahan yang subur mendominasi lebih dari separuh total wilayah, menjadikan produksi padi bukan hanya sebagai sumber utama mata pencaharian, melainkan juga identitas dan kebanggaan kami sebagai desa agraris yang penting di Kabupaten Sukoharjo. Dengan potensi besar di bidang pertanian dan agribisnis, kami terus berkomitmen untuk meningkatkan kualitas hidup masyarakat melalui program pembangunan berkelanjutan yang menyentuh sektor pertanian, infrastruktur, serta kesejahteraan sosial.',
            ]
        );

        profile::create(
            [
                'sejarah' => 'Setiap nama memiliki cerita, begitu pula dengan Desa Plumbon. Menurut kisah yang diwariskan secara turun-temurun oleh para sesepuh, asal-usul nama desa kami tidak terlepas dari perjalanan seorang abdi dalem Keraton Surakarta bernama Raden Tumenggung Honggowongso.Pada tahun 1741, R.T. Honggowongso diutus untuk menyeberangi Sungai Bengawan Solo ke arah timur. Misinya adalah "hanitik bumi," atau menilik tanah yang cocok untuk kemungkinan perpindahan keraton. Namun, setelah tujuh hari perjalanan yang berat, ia belum juga mendapatkan petunjuk. Dalam keadaan letih, haus, dan lapar, takdir membawanya pada sebuah peristiwa tak terduga.Ia terperosok ke dalam sebuah balumbang (cekungan berair) yang besar dan rimbun, yang dipenuhi oleh tanaman talas dan lumbu. Di tengah situasi itu, R.T. Honggowongso pun bersabda dalam bahasa Jawa:"Ora nyono yen aku biso kejeglong ing kene, papan kang kebak wit tales lan lumbu. Duh Gusti, mugi kinabulno ing benjang wonten rejane papan ngriki kanamekno: DESA PALUMBON."Ucapan tersebut memiliki arti: "Tidak kusangka aku bisa jatuh di sini, sebuah tempat yang penuh dengan pohon talas dan lumbu. Ya Tuhan, semoga terkabul, kelak jika tempat ini menjadi ramai dan makmur, akan dinamakan Desa Palumbon."Dari peristiwa dan sabda yang terucap di tempat yang penuh dengan tanaman lumbu itulah nama Palumbon lahir. Seiring berjalannya waktu dan pelafalan masyarakat, nama tersebut kini dikenal luas sebagai Desa Plumbon.',
            ]
        );
    }
}
