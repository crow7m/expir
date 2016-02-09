<?php
   class Features extends BaseController
   {
       public function Send(){

           Feature::create(array(
               'name' => Input::get('name'),
               'telephone' => Input::get('telephone'),
               'time' => Input::get('time'),
               'date' => Input::get('date')
           ));

           $response = array(
               'status' => 'success',
               'msg' => 'Appointment created successfully',
           );

           return 'true';
       }






   };








