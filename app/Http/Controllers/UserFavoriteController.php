<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoriteController extends Controller
{
    //ユーザがお気に入り登録するアクション
    public function store($id)
    {
        \Auth::user()->favorite($id);
        return back();
    }
    
    //ユーザがお気に入り登録解除するアクション
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        return back();
    }
    
}
