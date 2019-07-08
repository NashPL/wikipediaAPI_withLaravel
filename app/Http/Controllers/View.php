<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Lib\API\Wikipedia;

class View extends Controller
{
    public function index()
    {
        $wikipedia = new Wikipedia();
        $articles = $wikipedia->getRandomArticlesList(6);

        return view('view', ['pageTitle' => "View"]);
    }
}
