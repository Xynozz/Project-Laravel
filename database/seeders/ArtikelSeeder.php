<?php

namespace Database\Seeders;

use App\models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::insert(
            [
                'judul' => 'Analisis Penyebab Kenakalan Remaja dan Solusi untuk Mengatasinya',
                'foto' => 'https://cdn.slidesharecdn.com/ss_thumbnails/pptkenakalanremajaputranandapxiimipa5-221215115609-6c86af0c-thumbnail.jpg?width=640&height=640&fit=bounds',
                'kategori' => 'Artikel Penelitian',
                'konten' => 'Artikel ini mencakup berbagai bentuk kenakalan remaja, termasuk tawuran, narkoba, pergaulan bebas, tindakan kriminal, dan lainnya',
                'Penulis' => 'Hilyatun Najiyah',
            ]
        );
        Artikel::insert(
            [
                'judul' => 'Pengaruh Sex Education terhadap Tingkat Pernikahan Dini',
                'foto' => 'https://unair.ac.id/wp-content/uploads/2022/08/foto-1-1.jpeg',
                'kategori' => 'Artikel Penelitian',
                'konten' => 'Pernikahan dini merupakan masalah serius yang terjadi di berbagai negara, termasuk di Indonesia. Pernikahan pada usia yang terlalu muda dapat memiliki dampak negatif pada kesejahteraan individu, terutama perempuan. Salah satu cara untuk mengurangi angka pernikahan dini adalah melalui pendidikan seks yang komprehensif.',
                'Penulis' => 'Hilyatun Najiyah',
            ]
        );
        Artikel::insert(
            [
                'judul' => 'Pengaruh Perubahan Iklim Terhadap Keanekaragaman Hayati',
                'foto' => 'https://incocycle.com/wp-content/uploads/2023/04/25.jpg
',
                'kategori' => 'Ilmiah',
                'konten' => 'Spesies Ranges: Perubahan iklim dapat mempengaruhi persebaran geografis spesies. Beberapa spesies mungkin mengalami perubahan habitat karena suhu dan kondisi lingkungan yang berubah',
                'Penulis' => 'Dr. Maria Wijaya, Ahli Ekologi',
            ]
        );
        Artikel::insert(
            [
                'judul' => 'Manfaat Minum Teh Hijau untuk Kesehatan',
                'foto' => 'https://asset.kompas.com/crop/0x0:0x0/720x360/data/photo/2019/07/16/5d2d97b438652.jpg',
                'kategori' => 'Fakta dan Opini',
                'konten' => 'Mengandung Antioksidan Tinggi: Teh hijau mengandung zat antioksidan yang dapat menolak racun yang akan masuk ke tubuh. Antioksidan ini membantu melawan radikal bebas yang dapat merusak sel-sel tubuh, mencegah penuaan dini, dan bahkan mengurangi risiko kanker',
                'Penulis' => 'Fitriani Putri, Blogger Kesehatan',
            ]
        );
    }
}
