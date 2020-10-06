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

    //hasOne結合で使うための関数
    public function getData()
    {
        $data = [
            'date' => $this->created_at,
            'greet' => $this->greet,
            'user_id' => $this->user_id,
        ];
        return $data;
    }
}
