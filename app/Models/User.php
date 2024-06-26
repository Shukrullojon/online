<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['firstname'])) {
            $query->where('firstname', 'like', "%{$filters['firstname']}%");
        }
        if (isset($filters['lastname'])) {
            $query->where('lastname', 'like', "%{$filters['lastname']}%");
        }
        if (isset($filters['email'])) {
            $query->where('email', 'like', "%{$filters['email']}%");
        }
        if (isset($filters['fio'])) {
            $query->where('fio', 'like', "%{$filters['fio']}%");
        }
        if (isset($filters['position_id'])) {
            $query->where('position_id', $filters['position_id']);
        }
        if (isset($filters['department_id'])) {
            $query->where('department_id', $filters['department_id']);
        }
        if (isset($filters['date_entry'])) {
            $query->where('date_entry', $filters['date_entry']);
        }
        if(isset($filters['role_id'])){
            $query = $query->whereHas('roles', function ($query) use ($filters) {
                $query->where('id', $filters['role_id']);
            });
        }
        return $query;
    }
}
