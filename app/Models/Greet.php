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
        'user_id',
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

    // あいさつ一覧画面
    public function getTimeLines(Int $user_id, array $follow_ids)
    {
        // 自身とフォローしているユーザIDを結合する
        $follow_ids[] = $user_id;
        return $this->whereIn('user_id', $follow_ids)->orderBy('created_at', 'DESC')->paginate(50);
    }



    //あいさつをDBに保存
    public function GreetStore(Int $user_id, array $data)
    {
        $this->user_id = $user_id;
        $this->text = $data['text'];
        $this->save();

        return;
    }
}
