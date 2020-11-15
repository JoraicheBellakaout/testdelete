<?php

namespace App\Http\Controllers;
use App\Models\News;
use Auth;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function LNews(){

        $nieuws = News::all();
        return view('news', ['news'=>$nieuws]);
    }

    public function addNews(Request $req){
        $idUser = Auth::user()->id;
        $news = new News;
        $news->Title=$req->Title;
        $news->newsBody=$req->newsBody;
        $news->user_id=$idUser;
        $news->save();

        return redirect('news');
    }


    public function DeleteN($id){

    $deleteNews = News::find($id);
    $deleteNews->delete();
    return redirect('news');
    }


    public function seeEdittedNews($id){

        $editNews = News::find($id);
        return view('layouts.editNews',['news'=>$editNews]);

    }

    public function editionNews(Request $req){
        $newsToEdit = News::find($req->idnEdit);
        $newsToEdit->Title=$req->newsTedit;
        $newsToEdit->newsBody=$req->newsBodyEdit;
        $newsToEdit->save();
        return redirect('news');
    }


   




}
