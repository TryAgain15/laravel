<?php
namespace App\Http\Controllers;

use App\Models\people;
use Illuminate\View\View;


use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(): View{
        $peoples = people::latest()->paginate(5);

        return view('website.index', compact('peoples'));
    }    
}
