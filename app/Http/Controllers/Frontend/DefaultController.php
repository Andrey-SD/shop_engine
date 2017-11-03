<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductsHasOrder;

class DefaultController extends Controller
{
	public function index()
	{
		$temp = ProductsHasOrder::all();
		dd($temp);
		return view('default.index');
	}
}
