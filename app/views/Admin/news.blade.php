

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

    <!-- SB Admin CSS - Include with every page -->
    <link href="/css/sb-admin.css" rel="stylesheet">
</head>

<div class="container">

@extends('Admin/SideBar')
    @section('SideBar')
    @stop

</div>
<div class="container">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Title_En</th>
            <th>Title_Ua</th>
            <th>Body</th>
            <th>Body_En</th>
            <th>Body_Ua</th>
            <th>Description</th>
            <th>Description_En</th>
            <th>Description_Ua</th>
            <th>Keyword</th>
            <th>Slug</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        </thead>
        <tbody>

        @if ($news->count())
            @foreach($news as $new)
                <tr>
                    <td> <img src="http://<?=$new['image']?>" style="width: 100px; width: 100px"/></td>
                    <td> <?=$new['title']?></td>
                    <td> <?=$new['title_en']?></td>
                    <td> <?=$new['title_ua']?></td>
                    <td> <?=Str::limit($new->body,50)?></td>
                    <td> <?=Str::limit($new->body_en,50)?></td>
                    <td> <?=Str::limit($new->body_ua,50)?></td>
                    <td> <?=$new['description']?></td>
                    <td> <?=$new['description_en']?></td>
                    <td> <?=$new['description_ua']?></td>
                    <td> <?=$new['keyword']?></td>
                    <td> <?=$new['slug']?></td>
                     <td> <a href="{{URL::action('get-New',$new->id)}}"> <img src="http://expir/images/kedit.png" width="15" height="15"></a></td>
                    <td> <a href="{{URL::action('delete_news',$new->id)}}"onClick="return window.confirm('Вы уверены что хотите удалить эту новость?!')"><img src="http://expir/images/delete.png" width="15" height="15"></a> </td>

                    @endforeach
                    @endif

                    <td> <a href="{{URL::action('Create_news')}}"><img src="http://expir/images/create.png" width="15" height="15"></a> </td>
                </tr>


        </tbody>
    </table>
    <a href="{{URL::action('Admin/admin')}}">Вернуться в кабинет</a>

</div>
</div>






</html>

