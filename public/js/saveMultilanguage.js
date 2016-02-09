$(function(){
    $('div#LangSel select').change(function(){
   var langvalue=this.value;
        $('.ru, .ua, .en ').css('display','none');
        $('.'+langvalue).css('display','block');



    })
})