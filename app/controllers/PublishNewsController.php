<?php
use App\Helper\MetalFileHelper;


Class PublishNewsController extends BaseController{


    public function createNews(){
        if (Auth::check()) {

        $news= new News();
        return View::make('Admin/edit')->with('news',$news);
    }
        return View::make('/Admin/login');
    }


    public function  PublishNews()
    {
        $id = Input::get('id');
        if (empty($id)) {
            $news = new News();
        } else {

            $news = News::where('id', $id)->first();
        }

        if (Input::hasFile('image'))

        {
            $name = Input::file('image')->getClientOriginalName();
            Input::file('image')->move('uploads',$name);

           $news->image = $_SERVER['HTTP_HOST'] . '/uploads/' . $name;
        }


        $news->title = Input::get('title');
        $news->title_en = Input::get('title_en');
        $news->title_ua = Input::get('title_ua');
        $news->keywords = Input::get('keywords');
        $news->description = Input::get('description');
        $news->description_en = Input::get('description_en');
        $news->description_ua = Input::get('description_ua');
        $news->body = Input::get('body');
        $news->body_en = Input::get('body_en');
        $news->body_ua = Input::get('body_ua');
        $news->slug = Input::get('slug');
        $news->publishCheck = Input::get('publishCheck', 0);
        $news->save();
        return Redirect::route('news');
    }}




