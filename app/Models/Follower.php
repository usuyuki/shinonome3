<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

    //プライマリーキーの設定
    protected $primaryKey = [
        'following_id',
        'followed_id'
    ];
    //変更可能に
    protected $fillable = [
        'following_id',
        'followed_id'
    ];
    //タイムスタンプとid廃止
    public $timestamps = false;
    public $incrementing = false;
}
