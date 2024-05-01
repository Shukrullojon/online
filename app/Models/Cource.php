<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cource extends Model
{
    use HasFactory;

    static $statuses = [
        1 => 'Active ✅',
        0 => 'Arxive ❌',
    ];

    protected $table = 'cources';

    protected $guarded = [];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['name'])) {
            $query->where('name',"LIKE" ,"{$filters['name']}");
        }
        if (isset($filters['info'])) {
            $query->where('info',"LIKE" ,"{$filters['info']}");
        }
        if (isset($filters['status'])) {
            $query->where('status', $filters['status']);
        }
        if (isset($filters['price'])) {
            $query->where('price', $filters['price']);
        }
        return $query;
    }

}
