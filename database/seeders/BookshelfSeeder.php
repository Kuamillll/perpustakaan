<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\bookshelf;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $bookshelves = ([
            ([
                "bookshelf" => "1A"
            ]),
            ([
                "bookshelf" => "1B"
            ])
        ]);

        Bookshelf::insert($bookshelves);
    }
}
