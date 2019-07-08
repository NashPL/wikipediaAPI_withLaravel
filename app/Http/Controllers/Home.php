<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Lib\API\Wikipedia;

class Home extends Controller
{
    public function index()
    {
        $wikipedia = new Wikipedia();
        $articles = $wikipedia->getRandomArticlesList(6);
        return view('home', ['pageTitle' => 'Wikipedia Articles', 'articles' => $articles]);
    }
}
