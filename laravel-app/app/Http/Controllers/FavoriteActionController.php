<?php

namespace App\Http\Controllers;

use App\Services\FavoriteService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FavoriteActionController extends Controller
{
    private $favorite;
    public function __construct(FavoriteService $favorite)
    {
        $this -> favorite=$favorite;
    }
    public function switchFavorite(Request $request)
    {
        $this->favorite->switchFavorite(
            (int)$request->get('book_id'),
            (int)$request->get('user_id',1),
            Carbon::now()->toDateTimeString()
        );
        return response('',Response::HTTP_OK);
    }
}
