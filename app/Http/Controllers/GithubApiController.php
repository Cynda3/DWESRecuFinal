<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GithubApiController extends Controller
{
     public function getstate()
    {
        $client = new Client(['base_uri' => 'https://api.github.com/']);  
        $response = $client->request('GET', 'users/Cynda3'); 
        $body = $response->getBody();
        $content =$body->getContents();
        
        $arr = json_decode($content,TRUE);
        $nombre = $arr['name'];
        $repositorios = $arr['public_repos'];
        $seguidores = $arr['followers'];


        // Seguidores
        $responseSeguidores = $client->request('GET', 'users/Cynda3/followers');
        $bodySeguidores = $responseSeguidores->getBody();
        $contentSeguidores = $bodySeguidores->getContents();

        $arrSeguidores = json_decode($contentSeguidores,TRUE);

		$arrLoginSeguidores = array();

        for ($i=0; $i < count($arrSeguidores); $i++) { 
        	array_push($arrLoginSeguidores, $arrSeguidores[$i]['login']);
        }
        
        
      //return $arrLoginSeguidores;
    return view('github/mostrar')->with(['user'=>$nombre, 'repositorios' =>$repositorios, 'seguidores' => $seguidores, 'seguidoresLogin'=>$arrLoginSeguidores]); 
   
  
     
    }
}
