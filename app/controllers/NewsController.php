<?php
Class NewsController extends BaseController{
    public function getNews(){
        $news=News::get();
        if (Auth::check()) {
            return View::make('/Admin/news',compact('news'));
        }
         return View::make('/Admin/login');

    }
   public function getNew($id){

        $news = News::findOrFail($id);
     if (Auth::check()) {
        return View::make('Admin/edit',compact('news'));
     }
        return View::make('/Admin/login');
    }

public function delete($id){

    $news=News::findOrFail($id);

    $news->delete();
    if (Auth::check()) {

return Redirect::route('news');

}
    return View::make('/Admin/login');
}};
