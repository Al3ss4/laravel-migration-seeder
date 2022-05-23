<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{

 public function index(){
     $trains=Train::all();
     //return view ( "trains", ["trains"=> $trains]);
     $data = Train::where('giorno_di_partenza', '=' , '2022-05-23 00:00:00')->get();
     return view ("trains", ['trains' => $trains, 'data' => $data]);
 }

}
