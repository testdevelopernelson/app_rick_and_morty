<?php

namespace App\Http\Controllers;

use App\Api\Facades\RickAndMorty;
use App\Models\User;
use App\Models\Favorite;

class FrontController extends Controller{
    protected $apiRickAndMorty;

    public function __construct(RickAndMorty $apiRickAndMorty){
        $this->apiRickAndMorty = $apiRickAndMorty;
    }

    public function home(){
        $params= request()->input();
        $page= (isset($params['page']) && $params['page'] > 0) 
            ? $params['page'] 
            : 1;

        $favorites= $this->getFavoritesByUser();
        $titleInHome= 'Listado de personajes';
        $response= RickAndMorty::getAllCharacters($page);
        $characters= $response->results;
        $settingsPaginate= $response->info;
        if($settingsPaginate->prev){
            $settingsPaginate->page_prev= explode('=',$settingsPaginate->prev)[1];
        }

        if($settingsPaginate->next){
            $settingsPaginate->page_next= explode('=',$settingsPaginate->next)[1];
        }
        
        return view('home', compact('characters', 'settingsPaginate', 'titleInHome', 'favorites'));
    }

    public function character($id){
        $character= RickAndMorty::getCharacter($id);

        return view('character', compact('character'));
    }

    public function favorites(){
        $favorites= $this->getFavoritesByUser();
        if(!$favorites){
            return redirect()->route('home');
        }
        $titleInHome= 'Mis favoritos';
        if(count($favorites) == 1){
            $characters[0]= RickAndMorty::getCharacter(implode(',', $favorites));
        }else{
            $characters= RickAndMorty::getCharacter(implode(',', $favorites));
        }        

        return view('home', compact('characters', 'titleInHome', 'favorites'));
    }

    public function addToFavorite($id){
        Favorite::create(['id_usuario' => auth()->user()->id, 'ref_api' => $id]);

        return redirect()->route('favorites');
    }

    public function deleteFromFavorite($id){
        Favorite::where('ref_api', $id)->where('id_usuario', auth()->user()->id)->delete();

        return redirect()->route('favorites');
    }

    private function getFavoritesByUser(){
        $user= User::with('favorites')->find(auth()->user()->id);

        return $user->favorites->pluck('ref_api', 'ref_api')->toArray();
    }

}