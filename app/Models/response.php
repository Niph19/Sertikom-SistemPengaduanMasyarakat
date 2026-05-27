<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class response extends Model
{
    protected $fillable = [
        'complaint_id',
        'admin_id',
    'response',
        'created_at',
        'updated_at',
    ];

    public function complaint()
    {
        return $this->belongsTo(Complaint::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
