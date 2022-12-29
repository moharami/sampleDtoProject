<?php

namespace App\Http\Controllers;

use App\Data\getContent;
use App\Data\Source;
use App\DataTransferObjects\BankDTO;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index(Request $request)
    {
        $data = Source::getData($request->source);
        $object = BankDTO::make($data);
        dd($object);
    }
}
