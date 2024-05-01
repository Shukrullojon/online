<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    static $statuses = [
        1 => 'Active ✅',
        0 => 'Arxive ❌',
    ];

    protected $table = 'lessons';

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
        if (isset($filters['cource_id'])) {
            $query->where('cource_id', $filters['cource_id']);
        }
        return $query;
    }

    public function cource()
    {
        return $this->belongsTo(Cource::class);
    }
}
