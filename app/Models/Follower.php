<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

    //プライマリーキーの設定←プライマリーキーとはデータベースにおいてデータの出席番号として使われる項目、名前だと完全一致がゼロじゃないが、出席番号だと検索でかぶることがない的な感じ
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
    //ユーザーページ
    public function getFollowCount($user_id)
    {
        return $this->where('following_id', $user_id)->count();
    }
    //ユーザーページ
    public function getFollowerCount($user_id)
    {
        return $this->where('followed_id', $user_id)->count();
    }



    //あいさつページ
    // フォローしているユーザのIDを取得
    public function followingIds(Int $user_id)
    {
        return $this->where('following_id', $user_id)->get('followed_id');
    }
}
