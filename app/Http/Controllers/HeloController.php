<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class HeloController extends Controller
{
public function getIndex(Request $request)
{
$res = 'URL : ' . $request->url()
. '<br>Long URL : ' . $request->fullUrl()
. '<br>PATH : ' . $request->path();
return view('helo', ['message' => $res]);    }
}	   