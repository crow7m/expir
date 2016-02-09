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

<div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Body</th>
                    </tr>
                </thead>
                    <tbody>

                         @if ($news->count())
                         @foreach($news as $new)
                    <tr>
                    <td><?=$new['title']?></td>
                    <td><?=Str::limit($new->body,100)?></td>
                    <td> <a href="{{URL::action('get_public_news',$new->id)}}">Подробно</a></td>
                        @endforeach
                        @endif
                  </tr>
                   </tbody>
        </table>

</div>




</html>
<script src="/js/jquery-1.10.2.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- Page-Level Plugin Scripts - Dashboard -->
<script src="/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="/plugins/morris/morris.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="/js/sb-admin.js"></script>

<!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
<script src="/demo/dashboard-demo.js"></script>


