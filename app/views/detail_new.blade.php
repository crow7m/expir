<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expir</title>

    <!-- Bootstrap -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href="http://expir/css/jquery.ui.timepicker.css" rel="stylesheet">
    <link href="http://expir/css/jquery.bxslider.css" rel="stylesheet">
    <script src="http://expir/js/jquery.lightbox-0.5.js"></script>
    <link href="http://expir/css/style.css" rel="stylesheet">
    <link href="http://expir/css/jquery.lightbox-0.5.css" rel="stylesheet">
    <link href="http://expir/css/normalize.css" rel="stylesheet">
    <link href="http://expir/css/global.css" rel="stylesheet">
    <link href="http://expir/css/bootstrap.css" rel="stylesheet">
    <link href="http://expir/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://expir/css/bootstrap.responsive.css" rel="stylesheet">
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script src="http://expir/js/jquery.bxslider.js"></script>
    <!--<script src="http://expir/js/jquery-1.8.3.js"></script>-->
    <script src="http://expir/js/jquery-ui-1.9.2.custom.min.js"> </script>
    <script src="http://expir/js/jquery.ui.timepicker.js"> </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://expir/js/bootstrapValidator.js"></script>
    <!--<script src="http://expir/js/bootstrap.min.js"></script>-->
    <!-- Include Bootstrap Datepicker -->
    <!--<script src="http://expir/js/bootstrap-datetimepicker.js"></script>-->
    <link rel="stylesheet" href="http://expir/css/ui-lightness/jquery-ui-1.9.2.custom.min.css"/>
    <script src="http://expir/js/veniamin_custom.js"></script>
    <link href="http://expir/css/ImageIcon.css" rel="stylesheet">
</head>
<body>
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
<article>
    @if(Session::get('locale')=='ru')
    <h1><?=$news['title']?></h1>
    <p><?=$news['body']?></p>
       @else
        <h1><?=$news['title_'.Session::get('locale')]?></h1>
        <p><?=$news['body_'.Session::get('locale')]?></p>
    @endif
     <img src="http://<?=$news['image']?>"style="width: 100px;height: 100px" />
    <a href="{{URL::action('publicNews',$news->id)}}">Назад</a>
 </article>
</div>
    </div>

</body>
</html>
