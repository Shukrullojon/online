<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => '1 - dars',
                'info' => '30 -> vocabulary, 1 -> Grammer, 2 -> audio, 1 -> speaking',
                'cource_id' => 1,
                'status' => 1,
            ],
            [
                'name' => '2 - dars',
                'info' => '30 -> vocabulary, 1 -> Grammer, 2 -> audio, 1 -> speaking',
                'cource_id' => 1,
                'status' => 1,
            ],
            [
                'name' => '3 - dars',
                'info' => '30 -> vocabulary, 1 -> Grammer, 2 -> audio, 1 -> speaking',
                'cource_id' => 1,
                'status' => 1,
            ],
            [
                'name' => '4 - dars',
                'info' => '30 -> vocabulary, 1 -> Grammer, 2 -> audio, 1 -> speaking',
                'cource_id' => 1,
                'status' => 1,
            ],
            [
                'name' => '5 - dars',
                'info' => '30 -> vocabulary, 1 -> Grammer, 2 -> audio, 1 -> speaking',
                'cource_id' => 1,
                'status' => 1,
            ],
            [
                'name' => '1 - dars',
                'info' => '30 -> vocabulary, 1 -> Grammer, 2 -> audio, 1 -> speaking',
                'cource_id' => 2,
                'status' => 1,
            ],
            [
                'name' => '2 - dars',
                'info' => '30 -> vocabulary, 1 -> Grammer, 2 -> audio, 1 -> speaking',
                'cource_id' => 2,
                'status' => 1,
            ],
            [
                'name' => '3 - dars',
                'info' => '30 -> vocabulary, 1 -> Grammer, 2 -> audio, 1 -> speaking',
                'cource_id' => 2,
                'status' => 1,
            ],
            [
                'name' => '4 - dars',
                'info' => '30 -> vocabulary, 1 -> Grammer, 2 -> audio, 1 -> speaking',
                'cource_id' => 2,
                'status' => 1,
            ],
            [
                'name' => '5 - dars',
                'info' => '30 -> vocabulary, 1 -> Grammer, 2 -> audio, 1 -> speaking',
                'cource_id' => 2,
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Lesson::create($data);
        }
    }
}
