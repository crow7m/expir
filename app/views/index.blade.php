<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expir</title>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="http://expir/js/jquery.bxslider.js"></script>
      <!--<script src="http://expir/js/jquery-1.8.3.js"></script>-->
      <script src="http://expir/js/jquery-ui-1.9.2.custom.min.js"> </script>
      <script src="http://expir/js/jquery.ui.timepicker.js"> </script>
    <!-- Bootstrap -->
   <link href="http://expir/css/style.css" rel="stylesheet">
    <link href="http://expir/css/jquery.lightbox-0.5.css" rel="stylesheet">
    <link href="http://expir/css/normalize.css" rel="stylesheet">
    <link href="http://expir/css/global.css" rel="stylesheet">
    <link href="http://expir/css/bootstrap.css" rel="stylesheet">
    <link href="http://expir/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://expir/css/bootstrap.responsive.css" rel="stylesheet">
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
      <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://expir/js/bootstrapValidator.js"></script>
     <!--<script src="http://expir/js/bootstrap.min.js"></script>-->
      <!-- Include Bootstrap Datepicker -->
      <!--<script src="http://expir/js/bootstrap-datetimepicker.js"></script>-->
     <link rel="stylesheet" href="http://expir/css/ui-lightness/jquery-ui-1.9.2.custom.min.css"/>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <link href="http://expir/css/jquery.ui.timepicker.css" rel="stylesheet">
      <link href="http://expir/css/jquery.bxslider.css" rel="stylesheet">
      <script src="http://expir/js/jquery.lightbox-0.5.js"></script>
      <script src="http://expir/js/veniamin_custom.js"></script>
    <![endif]-->
      <link href="http://expir/css/ImageIcon.css" rel="stylesheet">
  </head>
  <body class="video">
<div class="header">

    <nav class="navbar navbar-inverse navbar-fixed-top">
                  <div class="navbar-header">

                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
</div>


             <div id="navbar" class="collapse navbar-collapse">

                      <ul class="nav navbar-nav" style="margin-left: 100px;">
                          <li class="practiceGli"> <a class="navbar-brand" href="/" style="height: 62px;"><img class="brandLogo" src="http://expir/images/logo.png"></a></li>
                          <li class="langPanel"><a href="" id="en" class="lang">En</a>
                          <a href="" id="ru" class="lang">Ru</a>
                          <a href="" id="ua" class="lang">Ua</a></li>
                          <li class="practiceGli" ><a class="NavMenu"  href="/"><?= Lang::get('string.home')?></a></li>
                          <li class="practiceGli" id="ShowPanelBtn"><div><a class="btn NavPractice "  href="#practice"><?= Lang::get('string.practice')?></a></div><div><i class="glyphicon glyphicon-align-justify"></i></div></li>
                          <li class="practiceGli"><a class="NavMenu" href="#about"><?= Lang::get('string.about')?></a></li>
                          <li class="practiceGli"><a class="NavMenu" href="#plans"><?= Lang::get('string.plans')?></a></li>
                          <li class="practiceGli"><a class="NavMenu" href="#contact"><?= Lang::get('string.contact')?></a></li>
                      </ul>
             </div>

          </nav>
    <div class="container">
                      <div style=" position:absolute;top: 50px; ;opacity: 0.8;margin-top: 25px;" >
                          <div class="panel panel-default" style="display: none; width: 1205px; margin-left: -50px;"  id="panelNews">
                          @include('panel_'.Session::get('locale'),['$news' => '$news']);
                              </div>
                       </div>
    </div>
      <div class="container parent">

          <div class="col-xs-10 col-md-10 col-lg-10  col-lg-offset-1 col-md-offset-1 col-xs-offset-1 vcenter panel panel-default content"style="height: 100px;">
              <div class="panel-body"style="position: absolute;margin-top: 225px;">


                  {{ Form::open(array('method'=>'get','class'=>'form-inline','id'=>'eventForm','route'=>'SendForm')) }}
                  <div class="input-group btn-group input-group-md">
                      {{ Form::text('name','', array('placeholder'=>Lang::get('string.name')  ,'class' => 'form-control','style'=>'width:150px','required','pattern'=>'[A-Za-zА-Яа-яЁё]+')) }}
                      {{ Form::text('telephone', '', array('placeholder'=>'(050)111-11-11', 'class' => 'form-control','style'=>'width:150px','pattern'=>'([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}','required'))}}
                      {{ Form::text('date', '', array('id'=>'datepicker','placeholder'=>Lang::get('string.date'), 'class' => 'form-control timePicker','style'=>'width:150px','required','pattern'=>'(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d'))}}
                      {{ Form::text('time', '', array('id'=>'timePicker','placeholder'=>Lang::get('string.time'), 'class' => 'form-control timePicker','style'=>'width:150px','required'))}}
                      {{Form::submit(Lang::get('string.appointments'), array('class'=>'send-ajax btn btn-warning', 'id'=>'submitBtn'))}}
                      {{ Form::token() . Form::close() }}

                  </div>
              </div>
          </div>
      </div>

      <div style="position:absolute; z-index: -99; width: 100%; height: 100%; top: 0;">
          <iframe frameborder="0" height="100%" width="100%"
                  src="https://www.youtube.com/embed/20zshmYxhLw?autoplay=1&controls=1&showinfo=0&autohide=1">
          </iframe>

      </div>
    <div class="arrows" id="arrows"><img src="images/arrows.png"></div>
               </div>

    <div class="container">
        <div class="slider" id="SliderId">
          <ul class="bxslider">
              @foreach($news as $new)
              <li><a class="zoom_image" href="http://<?=$new['image'];?>"> <img class="SliderImage" src="http://<?=$new['image'];?>" /></a></li>
              @endforeach
          </ul>
        </div>
    </div>

<div class="container content ">
    <h3 class="ourPractice">Наши послуги </h3>
    <p class="text-muted ourPractice">Дізнайтеся більше про нашу діяльність </p>
</div>

    <div class="container">
                                  <div class="container row-fluid"style="  ">
                                         <div class="span3 practice"><img class="imageIcon" src="images/xirurgiya.png"><h4 class="text-muted practice-text"style=";">Хірургія</h4><p class="practice-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p></div>
                                         <div class="span3  practice"><img class="imageIcon" src="images/diagnostika.png"><h4 class="text-muted practice-text"style=";">Діагностика</h4><p class="practice-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p></div>
                                         <div class="span3  practice"><img class="imageIcon" src="images/sterilizaciya.png"><h4 class="text-muted practice-text"style="">Стерилізація</h4><p class="practice-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p></div>
                                         <div class="span3  practice"><img class="imageIcon" src="images/laboratoriya.png"><h4 class="text-muted practice-text"style="">Лабораторія</h4><p class="practice-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p></div>
                                  </div>

                                <div class="container  row-fluid " style="  ">
                                        <div class="span3  practice"><img class="imageIcon" src="images/ortopediya.png"><h4 class="text-muted practice-text"style=" ">Ортопедія</h4><p class="practice-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p></div>
                                        <div class="span3  practice"><img class="imageIcon" src="images/terapiya.png"><h4 class="text-muted practice-text"style="">Терапія</h4><p class="practice-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p></div>
                                        <div class="span3  practice"><img class="imageIcon" src="images/ortodont.png"><h4 class="text-muted practice-text"style="">Ортодонтія</h4><p class="practice-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p></div>
                                        <div class="span3 practice"><img class="imageIcon" src="images/anesteziologiya.png"><h4 class="text-muted practice-text"style="">Анестезіологія</h4><p class="practice-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p></div>
                                </div>
    </div>
<hr/>

<div class="background">
      <div class="oral_pediatrics ">
        <div class="row-fluid" style="background-color:#fbfbfb;">
                  <div class="span4"><img style="float: left; width:68px;" src="images/oral.png"> <h3>НАША МІСІЯ</h3><p class="mission">Місією медичного центру "Експір" є допомогти кожному члену Вашої родини виглядати та почуватися як найкраще-з яскравою,здоровую посмішкою на все життя.</p>
                  </div>
                  <div class="span8" style="  margin-left: -30px;"><img style="float: left; width: 63px;" src="images/pediatrics.png"><h3 style="margin-left:85px; margin-top: 20px;">НАШІ ПРАГНЕННЯ</h3><p class="aristotel">Арістотель зауважив,що кожна людина за своєю природою прагне знань.Навчання наших пацієнтів-це те,що ми прагнемо забезпечувати у нашому медичному центрі.Нашою метою є настачання Вас інформіцією не лише про лікування,що Ви отримуєте,але й про загальний догляд за ротовою порожниноюта здоров`ям.Іноді буває важко зрозуміти,що мав на увазі медичний професіонал,а тому ми прагнемо,щоб покидаючи медичний центр "Експір" Ви отримали нові знання,які дадуть Вам користь у майбутньому.</p>
                  </div>
        </div>
      </div>
</div >
<div class="footer">

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20321.704317229738!2d30.495649669311526!3d50.45575745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1427193880153" width="100%" height="350px" frameborder="0" style="border:0;position: absolute;top: 0;left: 0;"></iframe>
<div class="formBlock">

    {{ Form::open(array('route'=>'feed_back_form','class'=>'form-horizontal form-group formFeedback'))}}
    <div class="control-group">
        <div class="controls">
    {{ Form::text('name','', array('placeholder'=>'Ім`я' ,'class' => 'form-group','style'=>'width:250px','required')) }}
            </div>
        </div>
    <div class="control-group">
        <div class="controls">
            {{ Form::text('email','', array('placeholder'=>'email' ,'class' => 'form-group','style'=>'width:250px','required')) }}
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
    {{Form::textarea('message','',array('placeholder'=>'Повідомлення','class'=>'form-group','style'=>'width:250px','required','rows'=>'3'))}}
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
    {{Form::submit('',array('class'=>'ButtonFeedback', 'id'=>'submitBtn'))}}
        </div>
    </div>
    {{ Form::close() }}

</div>
</div>
     </body>
   </html>