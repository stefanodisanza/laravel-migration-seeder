<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $trains = Train::where('Orario di partenza', '>', $now)->get();
        return view('home', ['trains' => $trains]);
    }
}
