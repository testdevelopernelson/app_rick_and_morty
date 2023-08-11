<?php

namespace App\Api;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Client as GuzzleClient;

class RickAndMorty{

	protected $URL_BASE;

	public function __construct() {
		$this->URL_BASE = 'http://rickandmortyapi.com/api/';
	}    

	public function getAllCharacters($page){
		$url = $this->URL_BASE . 'character?page=' . $page;
		
		$response = $this->executeApi($url, 'get');

		return $response->content ?? null;
	}

	public function getCharacter($id){
		$url = $this->URL_BASE . 'character/' . $id;
		
		$response = $this->executeApi($url, 'get');

		return $response->content ?? null;
	}

	private function executeApi($url, $method, $data = []){
		$error = false;
		$headers = [
			'Content-Type' 	=> 'application/json'
		];
		$client = new GuzzleClient([
			'headers' => $headers,
			'verify' => false
		]);

		if ($method == 'post') {
			try{
				$request = $client->request('POST', $url,
					[
						'body' => json_encode($data)
					]
				);				
			}catch(ClientException $errorException){
				$error  = $errorException;
			}
		}else{
			try {
				$request =  $client->request('GET', $url, $data);
			} catch (ClientException $e) {
				$error = true;
			}			
		}

		$response['error'] = $error;
		$response['content'] = !$error ? json_decode($request->getBody()->getContents()) : $error;

		return (Object) $response;
	}

	
}