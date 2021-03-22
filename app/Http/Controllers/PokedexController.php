<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use GuzzleHttp\Message\Request as APIRequest;
use GuzzleHttp\Message\Response;

class PokedexController extends Controller
{
    public function index()
    {
        $pokemons = $this->getAll();
        foreach ($pokemons as $p) {
            $p->data    = $this->getDataByUrl($p->url);
            $p->color   = $this->setColorByType($p->data['type']);
        }
        return view('dex')->with(compact('pokemons'));
    }

    public function pokemon($name){
        $pokemon = $this->getPokemon($name);
        $pokemon->pic = object_get($pokemon->sprites->other, 'official-artwork');
        return view('pokemon')->with(compact('pokemon'));
    }

    public function getPokemon($name)
    {
        //Pokemon by Name
        $call = $this->getData("https://pokeapi.co/api/v2/pokemon/" . $name);

        return $call;
    }

    public function getAll()
    {
        //All
        $call = $this->getData("https://pokeapi.co/api/v2/pokemon/?limit=151");
        return $call->results;
    }

    public function getDataByUrl($url)
    {
        $call = $this->getData($url);
        $data['image'] = object_get($call->sprites->other, 'official-artwork');
        foreach ($call->types as $ct) {
            $data['type'][] = $ct->type->name;
        }
        return $data;
    }

    public function setColorByType($type)
    {
        foreach ($type as $t) {
            switch ($t) {
                case 'grass':
                    $color[] = "#DEFDE0";
                    break;
                case 'poison':
                    $color[] = "#98d7a5";
                    break;
                case 'electric':
                    $color[] = "#FCF7DE";
                    break;
                case 'normal':
                    $color[] = "#F5F5F5";
                    break;
                case 'fire':
                    $color[] = "#FDDFDF";
                    break;
                case 'fighting':
                    $color[] = "#E6E0D4";
                    break;
                case 'water':
                    $color[] = "#DEF3FD";
                    break;
                case 'flying':
                    $color[] = "#F5F5F5";
                    break;
                case 'fairy':
                    $color[] = "#fceaff";
                    break;
                case 'ground':
                    $color[] = "#f4e7da";
                    break;
                case 'psychic':
                    $color[] = "#eaeda1";
                    break;
                case 'rock':
                    $color[] = "#d5d5d4";
                    break;
                case 'ice':
                    $color[] = "#DEFDE0";
                    break;
                case 'bug':
                    $color[] = "#f8d5a3";
                    break;
                case 'dragon':
                    $color[] = "#97b3e6";
                    break;
                case 'ghost':
                    $color[] = "#DEFDE0";
                    break;
                case 'dark':
                    $color[] = "#DEFDE0";
                    break;
                case 'steel':
                    $color[] = "#DEFDE0";
                    break;
                default:
                    break;
            }
        }
        return $color;
    }

    public static function getData($url)
    {
        //Adicionar em um helper
        $client = new Client();
        $request = $client->request('GET', $url);
        $response = json_decode($request->getBody());
        return $response;
    }
}
