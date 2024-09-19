<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "name" => "Texnik bo'lim",
                "price" => "1 500 000 - 4 000 000 so'm"
            ],
            [
                "name" => "Xodimlar",
                "price" => "2 500 000 - 8 000 000 so'm"
            ],
            [
                "name" => "Katta Xodimlar",
                "price" => "5 500 000 - 12 000 000 so'm"
            ],
            [
                "name" => "Backend Dasturchi",
                "price" => "10 000 000 - 25 000 000 so'm"
            ],
        ];
        foreach ($datas as $data){
            Category::create($data);
        }
    }
}
