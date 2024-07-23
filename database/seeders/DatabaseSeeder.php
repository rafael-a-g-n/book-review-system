<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Review;
use Exception;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @throws Exception
     */
    public function run(): void
    {
        Book::factory(33)->create()->each(function ($book){
            $numReviews = random_int(5,30);

            Review::factory()->count($numReviews)
                ->goodReview()
                ->for($book)
                ->create();
        });

        Book::factory(33)->create()->each(function ($book){
            $numReviews = random_int(5,30);

            Review::factory()->count($numReviews)
                ->averageReview()
                ->for($book)
                ->create();
        });

        Book::factory(34)->create()->each(function ($book){
            $numReviews = random_int(5,30);

            Review::factory()->count($numReviews)
                ->badReview()
                ->for($book)
                ->create();
        });
    }
}
