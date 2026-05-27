<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Response;

class complaint extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'location',
        'photo',
        'status',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function response()
    {
        return $this->hasMany(Response::class, 'complaint_id');
    }
}
