<?php

namespace Database\Seeders;

use App\Models\book;
use App\Models\category;
use App\Models\booksdetail;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $books = book::all();
        $categories = category::all();

        for ($i = 0; $i < 20; $i++) {
            $book = $books->random();
            $category = $categories->random();

            $exists = booksdetail::where('book_id', $book->id)->where('category_id', $category->id)->exists();


            if (!$exists) {
                booksdetail::create([
                    'book_id' => $book->id,
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
