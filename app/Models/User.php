<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //値の変更許可リスト
    protected $fillable = [
        'name',
        'email',
        'explain',
        'password',
        'profile_photo_path',
        'twitter_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //テーブルとの関連付け
    //belong to はhasManyと違って従テーブルから関連付けている主テーブルのレコード取り出す
    public function followers()
    {
        return $this->belongsToMany(self::class, 'followers', 'followed_id', 'following_id');
    }

    public function follows()
    {
        return $this->belongsToMany(self::class, 'followers', 'following_id', 'followed_id');
    }


    //ログインしているユーザーを除くユーザーを５人ずつ取得(ページネーション)
    public function getAllUsers(Int $user_id)
    {
        return $this->Where('id', '<>', $user_id)->paginate(5);
    }



    //参考→https://qiita.com/namizatork/items/0c81b0a94a1084cda6de#%E3%83%A6%E3%83%BC%E3%82%B6%E4%B8%80%E8%A6%A7%E8%A1%A8%E7%A4%BA%E7%94%BB%E9%9D%A2
    // フォローする
    public function follow(Int $user_id)
    {
        return $this->follows()->attach($user_id);
    }

    // フォロー解除する
    public function unfollow(Int $user_id)
    {
        return $this->follows()->detach($user_id);
    }

    // フォローしているか
    public function isFollowing(Int $user_id)
    {
        return (bool) $this->follows()->where('followed_id', $user_id)->first(['id']);
    }

    // フォローされているか
    public function isFollowed(Int $user_id)
    {
        return (bool) $this->followers()->where('following_id', $user_id)->first(['id']);
    }


    //ユーザー編集画面の画像処理など
    public function updateProfile(array $params)
    {
        if (isset($params['profile_photo_path'])) {
            $file_name = $params['profile_photo_path']->store('public/profile_photo_path/');

            $this::where('id', $this->id)
                ->update([
                    'profile_photo_path'   => $params['profile_photo_path'],
                    'name'          => $params['name'],
                    'profile_photo_path' => basename($file_name),
                    'explain'         => $params['explain'],
                ]);
        } else {
            $this::where('id', $this->id)
                ->update([

                    'name'          => $params['name'],
                    'explain'         => $params['explain'],
                ]);
        }

        return;
    }
}
