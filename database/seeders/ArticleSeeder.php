<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Pemanfaatan Teknologi di Dunia Pendidikan',
            'content' => <<<TEXT
                        Dalam kehidupan suatu negara, pendidikan memegang peranan yang amat penting...
                        (TEXT lengkap dari artikel)
                        TEXT
        ]);
    }
}
