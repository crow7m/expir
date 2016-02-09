<?php
class LanguageController extends BaseController{

    public function lang() {
        Session::set('locale',Input::get('locale'));
        return "true";


    }
}