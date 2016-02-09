<?php

class BaseController extends Controller {

	public function __construct(){
		$this->localeSetting();
	}

	public function localeSetting(){

		if (!Session::has('locale')){

			Session::set('locale','ua');
		}


	}


		protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
