<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('genres')->insert([
            ['name' => 'Action', 'status' => 0],
            ['name' => 'Animation', 'status' => 0 ],
            ['name' => 'Crime', 'status' => 0],
            ['name' => 'Family', 'status' => 0],
            ['name' => 'Horror', 'status' => 0],
            ['name' => 'Mystrey', 'status' => 0],
            ['name' => 'Romance', 'status' => 0],
            ['name' => 'Soap', 'status' => 0],
            ['name' => 'TV Movie', 'status' => 0],
            ['name' => 'Westren', 'status' => 0],
            ['name' => 'Action & Adventure', 'status' => 0],
            ['name' => 'Biography', 'status' => 0],
            ['name' => 'Documentary', 'status' => 0],
            ['name' => 'Fantasy', 'status' => 0],
            ['name' => 'Kids', 'status' => 0],
            ['name' => 'News', 'status' => 0],
            ['name' => 'Sci-Fi & Fantasy', 'status' => 0],
            ['name' => 'Talk', 'status' => 0],
            ['name' => 'War', 'status' => 0],
            ['name' => 'Adventure', 'status' => 0],
            ['name' => 'Comedy', 'status' => 0],
            ['name' => 'Drama', 'status' => 0],
            ['name' => 'History', 'status' => 0],
            ['name' => 'Music', 'status' => 0],
            ['name' => 'Reality', 'status' => 0],
            ['name' => 'Science Fiction', 'status' => 0],
            ['name' => 'Thriller', 'status' => 0],
            ['name' => 'War & Politics', 'status' => 0],
        ]);
    }
}
