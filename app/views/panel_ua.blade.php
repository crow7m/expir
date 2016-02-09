
    @if($news->count())
        @foreach($news as $new)
            <div class="span3 hilightPanel " style="height: 75px; position: relative;margin-top: 10px;" >
                <img src="http://<?=$new['image'];?> " style="width: 80px; height: 65px;float: left;"/>
               <div style="float: left;padding-left: 5px;">
                    <p class="news"><?=Str::limit($new->title_ua,10)?></p>
                    <p class="news"><?=Str::limit($new->body_ua,25)?></p>
                <a href="{{URL::action('get_public_news',$new->id)}}" style="color: #ffffff;float: right;"><?= Lang::get('string.detail')?></a>
               </div>
            </div>
        @endforeach
    @endif

