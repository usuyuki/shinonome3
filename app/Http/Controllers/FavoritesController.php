<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;


class FavoritesController extends Controller
{
    public function store(Request $request, Favorite $favorite)
    {
        $user = auth()->user();
        $greet_id = $request->greet_id;
        $is_favorite = $favorite->isFavorite($user->id, $greet_id);

        //いいねしてなかったら
        if (!$is_favorite) {
            $favorite->storeFavorite($user->id, $greet_id);
            return back();
        }
        return back();
    }

    public function destroy(Favorite $favorite)
    {
        $user_id = $favorite->user_id;
        $greet_id = $favorite->greet_id;
        $favorite_id = $favorite->id;
        $is_favorite = $favorite->isFavorite($user_id, $greet_id);
        //いいねしてたら
        if ($is_favorite) {
            $favorite->destroyFavorite($favorite_id);
            return back();
        }
        return back();
    }
}
