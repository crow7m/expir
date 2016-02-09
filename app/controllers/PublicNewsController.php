<?php
class PublicNewsController extends BaseController{

    public function publicNews(){
   $news = News::where('publishCheck', '=', 1)->take(8)->get();

    return View::make('index')->with('news',$news);
}

public function public_news ($id){
 $news = News::findOrFail($id);
 return View::make('detail_new')->with('news',$news);
}


};