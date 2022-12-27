<?php

namespace App\Http\Controllers;

use App\Data\getContent;

class BankController extends Controller
{
    public function index()
    {
        $jsonData = getContent::fromJsonfile();


    }
}
