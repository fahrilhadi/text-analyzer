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
                        SISKO mampu memberikan kemudahan pihak pengelola menjalankan kegiatannya dan meningkatkan kredibilitas dan akuntabilitas sekolah dimata siswa, orang tua siswa, dan masyakat umumnya. Penerapan teknologi informasi untuk menunjang proses pendidikan telah menjadi kebutuhan bagi lembaga pendidikan di Indonesia. Pemanfaatan teknologi informasi ini sangat dibutuhkan untuk meningkatkan efisiensi dan produktivitas bagi manajemen pendidikan. Keberhasilan dalam peningkatan efisiensi dan produktivitas bagi manajemen pendidikan akan ikut menentukan kelangsungan hidup lembaga pendidikan itu sendiri. Dengan kata lain menunda penerapan teknologi informasi dalam lembaga pendidikan berarti menunda kelancaran pendidikan dalam menghadapi persaingan global.
                        TEXT
        ]);
    }
}
