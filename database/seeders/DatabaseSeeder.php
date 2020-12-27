<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $data = array(
            array('title' => 'Героический'),
            array('title' => 'Детектив'),
            array('title' => 'Классические детективы'),
            array('title' => 'Наука'),
            array('title' => 'Научная фантастика'),
            array('title' => 'Педагогика и воспитание'),
            array('title' => 'Проза'),
            array('title' => 'Спорт'),
            array('title' => 'Тёмное фэнтези'),
            array('title' => 'Фэнтези'),
        );
        DB::table('genres')->insert($data);


        $data = array(
            array('title' => 'Детское море', 'author' => 'Николай Варухин'),
            array('title' => 'Владычица Озера', 'author' => 'Анджей Сапковский'),
            array('title' => 'Ловец человеков', 'author' => 'Надежда Попова'),
            array('title' => 'Болтливый мертвец', 'author' => 'Макс Фрай'),
            array('title' => 'Меч Предназначения', 'author' => 'Анджей Сапковский'),
            array('title' => 'Герцог де Л\'Омлет', 'author' => 'Эдгар Алан По'),
            array('title' => 'На байдарке', 'author' => 'Феликс Квадригин'),
            array('title' => 'Тубурская игра', 'author' => 'Макс Фрай'),
            array('title' => 'Маяк', 'author' => 'Эдгар Алан По'),
            array('title' => 'Последнее желание', 'author' => 'Анджей Сапковский'),
        );
        DB::table('books')->insert($data);



        $data = array(
            array('book_id' => '1', 'genre_id' => '4'),
            array('book_id' => '1', 'genre_id' => '6'),
            array('book_id' => '1', 'genre_id' => '8'),
            array('book_id' => '2', 'genre_id' => '10'),
            array('book_id' => '3', 'genre_id' => '2'),
            array('book_id' => '3', 'genre_id' => '5'),
            array('book_id' => '3', 'genre_id' => '9'),
            array('book_id' => '4', 'genre_id' => '10'),
            array('book_id' => '5', 'genre_id' => '1'),
            array('book_id' => '5', 'genre_id' => '10'),
            array('book_id' => '6', 'genre_id' => '3'),
            array('book_id' => '6', 'genre_id' => '7'),
            array('book_id' => '7', 'genre_id' => '8'),
            array('book_id' => '8', 'genre_id' => '2'),
            array('book_id' => '8', 'genre_id' => '10'),
            array('book_id' => '9', 'genre_id' => '3'),
            array('book_id' => '9', 'genre_id' => '7'),
            array('book_id' => '10', 'genre_id' => '1'),
            array('book_id' => '10', 'genre_id' => '10'),
        );
        DB::table('book_genre')->insert($data);





//        \App\Models\Genre::factory(10)->create();
//
//        \App\Models\Books::factory(50)->create();

    }
}
