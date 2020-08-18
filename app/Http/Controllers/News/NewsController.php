<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Model\TravelNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
  public function listNews(){  
      $newsAll = DB::table('travel_news')->paginate(20);
      // dd($newsAll);
      return view('admin.news.news', compact('newsAll'));
  }
  public function addNews(){
    return view('admin.news.add');
}
}
