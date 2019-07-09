<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Lib\API\Wikipedia;

class View extends Controller
{
    public function index($id)
    {
        $wikipedia = new Wikipedia();
        $page = $wikipedia->getPageById((int)$id);
        return view('view', ['pageTitle' => "View", "page" => $page]);
    }
}
