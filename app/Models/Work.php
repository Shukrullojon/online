<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $table = "works";

    protected $guarded = [];

    static $work_type_status = [
        1 => "To'liq Kunlik Ish",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
