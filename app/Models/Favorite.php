<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    //タイムスタンプ無効に←いらないから
    public $timestamps = false;

    // いいねしているかどうかの判定処理
    public function isFavorite(Int $user_id, Int $greet_id)
    {
        return (bool) $this->where('user_id', $user_id)->where('greet_id', $greet_id)->first();
    }
    //いいね
    public function storeFavorite(Int $user_id, Int $greet_id)
    {
        $this->user_id = $user_id;
        $this->greet_id = $greet_id;
        $this->save();

        return;
    }

    //いいね消す
    public function destroyFavorite(Int $favorite_id)
    {
        return $this->where('id', $favorite_id)->delete();
    }
}
