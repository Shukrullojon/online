<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "category_id" => 1,
                "name" => "Bino nazoratchisi",
                "work_type" => 1,
                "experence" => "Har qanday tajriba",
                "salary" => "3 000 000 - 6 000 000 So'm",
                "info" => "25 - 40 yosh",
                "requir" => "-Mas’uliyat hissi bo‘lishi zarur",
                "offer" => "-Belgilangan vaqtda ishda bo'lishi kerak",
            ],
            [
                "category_id" => 1,
                "name" => "Bino Boshqaruvi",
                "work_type" => 1,
                "experence" => "Har qanday tajriba",
                "salary" => "5 000 000 - 12 000 000 So'm",
                "info" => "30 - 50 yosh",
                "requir" => "-Mas’uliyat hissi bo‘lishi zarur",
                "offer" => "-Belgilangan vaqtda ishda bo'lishi kerak",
            ],
            [
                "category_id" => 1,
                "name" => "Texnik Xodim",
                "work_type" => 1,
                "experence" => "Har qanday tajriba",
                "salary" => "3 000 000 - 15 000 000 So'm",
                "info" => "18 - 30 yosh",
                "requir" => "-Mas’uliyat hissi bo‘lishi zarur",
                "offer" => "-Belgilangan vaqtda ishda bo'lishi kerak",
            ],
            [
                "category_id" => 2,
                "name" => "Strong Xodim",
                "work_type" => 1,
                "experence" => "Har qanday tajriba",
                "salary" => "3 000 000 - 15 000 000 So'm",
                "info" => "18 - 30 yosh",
                "requir" => "-Mas’uliyat hissi bo‘lishi zarur",
                "offer" => "-Belgilangan vaqtda ishda bo'lishi kerak",
            ],
            [
                "category_id" => 2,
                "name" => "Strong Xodim 2",
                "work_type" => 1,
                "experence" => "Har qanday tajriba",
                "salary" => "3 000 000 - 15 000 000 So'm",
                "info" => "18 - 30 yosh",
                "requir" => "-Mas’uliyat hissi bo‘lishi zarur",
                "offer" => "-Belgilangan vaqtda ishda bo'lishi kerak",
            ],
            [
                "category_id" => 3,
                "name" => "Mutaxassis",
                "work_type" => 1,
                "experence" => "Har qanday tajriba",
                "salary" => "3 000 000 - 15 000 000 So'm",
                "info" => "18 - 30 yosh",
                "requir" => "-Mas’uliyat hissi bo‘lishi zarur",
                "offer" => "-Belgilangan vaqtda ishda bo'lishi kerak",
            ],
            [
                "category_id" => 4,
                "name" => "Laravel Dasturchi",
                "work_type" => 1,
                "experence" => "Har qanday tajriba",
                "salary" => "3 000 000 - 15 000 000 So'm",
                "info" => "18 - 30 yosh",
                "requir" => "-Mas’uliyat hissi bo‘lishi zarur",
                "offer" => "-Belgilangan vaqtda ishda bo'lishi kerak",
            ],
        ];
        foreach ($datas as $data){
            Work::create($data);
        }
    }
}
