<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Greet extends Model
{
    use HasFactory;

    //これは消してもDB上には残る仕組み。
    use SoftDeletes;

    //登録できるカラムの設定　ホワイトリスト
    protected $fillable = [
        'name',
        'greet',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //hasMany結合！
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    //ユーザーページ関連
    public function getUserTimeLine(Int $user_id)
    {
        return $this->where('user_id', $user_id)->orderBy('created_at', 'DESC')->paginate(50);
    }
    //ユーザーページ関連
    public function getGreetCount(Int $user_id)
    {
        return $this->where('user_id', $user_id)->count();
    }
}
