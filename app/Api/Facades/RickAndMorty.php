<?php 

namespace App\Api\Facades;

use Illuminate\Support\Facades\Facade;

class RickAndMorty extends Facade
{
	protected static function getFacadeAccessor(){
        return 'rickandmorty';
    }
	
}
