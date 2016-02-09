<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

    <!-- Core CSS - Include with every page -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="/css/plugins/timeline/timeline.css" rel="stylesheet">
    <script src="/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/js/saveMultilanguage.js"></script>
    <!-- SB Admin CSS - Include with every page -->
    <link href="/css/sb-admin.css" rel="stylesheet">
<script type="text/javascript" src="/tinymce/js/tinymce/tinymce.min.js"></script>

    <script src="/js/bootstrap.min.js"></script>
    <script src="/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="/demo/dashboard-demo.js"></script>


    <script>

tinymce.init({
    selector: "textarea",
    theme: "modern",
    width: 800,
    height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 });
</script>
</head>


<body>


<div id="wrapper">

<div class="container">

    <div id="LangSel">
    <div class="form-group">
    {{ Form::open(array('route' => 'language')) }}
    {{Form::select('locale',['en'=>'en','ru'=>'ru','ua'=>'ua'],'ru')}}
    {{Form::token()}}
    {{ Form::close()}}
        </div>
    </div>
    {{Form::model($news,array('route' => array('PostNews'),'files' => true))}}
    {{Form::token();}}

    {{ Form::hidden('id',$news->id);}}

    <div class="form-group">
        {{Form::label('Опубликовать','')}}
        {{Form::checkbox('publishCheck', '1', true);}}
    </div>

 <div class="form-group ru">
       {{ Form::text('title',null,array('placeholder'=>'Title')) }}
  </div>
    <div class="form-group ru">
        {{Form::file('image') }}
</div>
    <div class="form-group en " style="display: none">
        {{ Form::text('title_en',null,array('placeholder'=>'Title')) }}
    </div>

    <div class="form-group ua" style="display: none">
        {{ Form::text('title_ua',null,array('placeholder'=>'Title')) }}
    </div>

  <div class="form-group ">
       {{ Form::text('slug',null,array('placeholder'=>'URL')) }}
  </div>

  <div class="form-group ">
       {{ Form::text('keywords',null,array('placeholder'=>'keywords')) }}
  </div>
  <div class="form-group ru">
       {{Form::text('description',null,array('placeholder'=>'Description',)) }}
  </div>

    <div class="form-group ua" style="display: none">
        {{Form::text('description_ua',null,array('placeholder'=>'Description')) }}
    </div>

    <div class="form-group en" style="display: none">
        {{Form::text('description_en',null,array('placeholder'=>'Description')) }}
    </div>

    <div class="form-group ru">
        {{ Form::textarea('body',null,array('placeholder'=>'Content')) }}
    </div>

    <div class="form-group en" style="display: none">
        {{ Form::textarea('body_en',null,array('placeholder'=>'Content')) }}
    </div>

    <div class="form-group ua" style="display: none">
        {{ Form::textarea('body_ua',null,array('placeholder'=>'Content')) }}
    </div>


    <div class="form-group ">
       {{Form::submit('Сохранить!', array('class' => 'btn btn-success','route'=>'PostNews'));}}

       {{ Form::close() }}

</div>

    <a  href="{{URL::action('news')}}">Вернуться к новостям</a>
</div>
</div>

</body>

 </html>
