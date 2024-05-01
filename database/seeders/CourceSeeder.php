<?php

namespace Database\Seeders;

use App\Models\Cource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => '6 oylik Ingliz tili',
                'info' => "Kurs atiga 6 oy davom etadiHar bir yo’nalishdah aloha-alohida dars bo’ladi. KOORDINATOR nazorat qilib, qo’llab turadi. O'quvchilar istalgancha qo’shimcha mashg’ulotlarga qatnashadi. Har bir yo’nalishda aloha-alohida dars bo’ladi.",
                'price' => 99000,
                'status' => 1,
            ],
            [
                'name' => 'Speaking online',
                'info' => "Eng so‘nggi tendensiyalar, vositalar va texnikalar yordamidami darslarni o‘tib, eng muhim ko‘nikmalar bilan ta’minlanadi. Amaliy mashqlar, real misollar va hamkorlikdagi loyihalar shaklida shug‘ullaniladi. O‘zingiz uchun qulay bo‘lgan vaqtda va joyda, o‘zimizga mos tezlikda o‘qishini imkonini beradi. Bizning resurslarga kirib, keng manbalar kutubxonamizdan foydalanish huquqiga ega bo‘lasiz.",
                'price' => 99000,
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            Cource::create($data);
        }
    }
}
