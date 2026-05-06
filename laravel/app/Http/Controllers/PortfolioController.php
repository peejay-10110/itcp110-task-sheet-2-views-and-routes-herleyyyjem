<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index() { return view('index'); }
    public function about() { return view('about'); }
    public function education() { return view('education'); }
    public function services() { return view('services'); }
    public function projects() { return view('projects'); }
    public function skills() { return view('skills'); }
    public function contact() { return view('contact'); }
    public function grades() { return view('grades'); }
    public function journal() { return view('journal'); }

}
