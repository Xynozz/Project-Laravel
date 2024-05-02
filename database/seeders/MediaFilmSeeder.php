<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Nyobain Barang Aneh',
            'url_media' => 'https://www.youtube.com/watch?v=O_9m6YEhMiA',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => '100 Fakta Kratos',
            'url_media' => 'https://www.youtube.com/watch?v=sSIPpA5eLVY',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Podcast',
            'url_media' => 'https://www.youtube.com/watch?v=fp2aEGuCbKM',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Boboboy Galaxy',
            'url_media' => 'https://www.youtube.com/watch?v=zMjSIjOqARc',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'The Spider',
            'url_media' => 'https://www.youtube.com/watch?v=1-tc2YlCqCk',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'End Of Beginning',
            'url_media' => 'https://www.youtube.com/watch?v=Ek4fancdwPk',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Review Laptop 70 juta',
            'url_media' => 'https://www.youtube.com/watch?v=Up5kkJ0hEU0',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Review Skin Nolan',
            'url_media' => 'https://www.youtube.com/watch?v=wEP940Ieta4',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Bantai Bermuda',
            'url_media' => 'https://www.youtube.com/watch?v=gwhESUBmMfY',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Rakit Pc 700Ribu',
            'url_media' => 'https://www.youtube.com/watch?v=9XVlqgtkn4U',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Gacha Skin PUBG',
            'url_media' => 'https://www.youtube.com/watch?v=aQFe2NkV4TA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Kebodohan Bermain',
            'url_media' => 'https://www.youtube.com/watch?v=TQv68wtddMw&t=506s&pp=ygUHbWlseWh5YQ%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Iphone 15 HDC',
            'url_media' => 'https://www.youtube.com/watch?v=D8n0apF7EhM',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Main OmeTv',
            'url_media' => 'https://www.youtube.com/watch?v=vNsMda2xSjo',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Akhir Tak Bahagia',
            'url_media' => 'https://www.youtube.com/watch?v=cyjrL-WQlDE',
        ]);
    }
}
