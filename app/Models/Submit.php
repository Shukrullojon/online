<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    use HasFactory;

    static $status_list = [
        0 => "Новый",
        1 => "Ожидающий",
        2 => "Отменено",
        4 => "Успех",
    ];

    protected $table = "submits";

    protected $guarded = [];

    public function work()
    {
        return $this->belongsTo(Work::class);
    }
}
