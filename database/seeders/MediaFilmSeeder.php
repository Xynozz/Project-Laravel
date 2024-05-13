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
            'url_media' => 'O_9m6YEhMiA',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => '100 Fakta Kratos',
            'url_media' => 'sSIPpA5eLVY',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Podcast',
            'url_media' => 'fp2aEGuCbKM',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Boboboy Galaxy',
            'url_media' => 'zMjSIjOqARc',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'The Spider',
            'url_media' => '1-tc2YlCqCk',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'End Of Beginning',
            'url_media' => 'Ek4fancdwPk',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Review Laptop 70 juta',
            'url_media' => 'Up5kkJ0hEU0',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Review Skin Nolan',
            'url_media' => 'wEP940Ieta4',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Bantai Bermuda',
            'url_media' => 'gwhESUBmMfY',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Rakit Pc 700Ribu',
            'url_media' => '9XVlqgtkn4U',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Gacha Skin PUBG',
            'url_media' => 'aQFe2NkV4TA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Kebodohan Bermain',
            'url_media' => 'TQv68wtddMw&t=506s&pp=ygUHbWlseWh5YQ%3D%3D',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Iphone 15 HDC',
            'url_media' => 'D8n0apF7EhM',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Main OmeTv',
            'url_media' => 'vNsMda2xSjo',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Poto',
            'url_media' => 'https://cdn.idntimes.com/content-images/community/2023/09/f5oq18vbmaavfmh-11daa12e95da990912787dab019b27d6-d1e9b0cb78a3decaeceb972885ce5bc4.jpg',
        ]);
    }
}
