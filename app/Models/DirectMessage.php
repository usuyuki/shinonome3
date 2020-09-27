<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'receive_user_id',
        'send_user_id',
        'message',
    ];
}
