
$(function(){
    $('#arrows').click(function(){
        var scrollTop=$('#SliderId').offset().top-63 ;
        $(document).scrollTop(scrollTop);



    });

   $(".zoom_image").lightBox();

    $('#timePicker').timepicker({
        hours: { starts: 9, ends: 19 },
        minutes: { interval: 30 },
        rows: 3,
        showPeriodLabels: true,
        minuteText: 'Min'
    });

    $("#datepicker").datepicker();

    $('.bxslider').bxSlider({
        minSlides: 4,
        maxSlides: 8,
        slideWidth: 110,
        slideMargin: 20,
        pager:false
    });

    $('.lang').click(function(){
        $.post('/language',{locale:this.id}, function(data){
            location.reload();
        });
        return false;
    });

    $("#eventForm").submit(function (e) {
        //e.preventDefault();//остановка действия
        var form = $(this);//
        $.ajax({
            type: 'GET',
            cache: false,
            dataType: 'json',
            url: form.attr('action'),//куда сабмитеть екшн формы
            data: form.serializeArray(),//выгребаем
            success: function (data) {

                form.find('input[type="text"], input[type="email"]').val('');//находит поля

            }
        });
        return false;
    });

    $('#ShowPanelBtn').click(function(){
        $('#panelNews').slideToggle(1000);

    });


    $('#LangSel select').change(function(){
        $('#LangSel').submit();

    });

});















