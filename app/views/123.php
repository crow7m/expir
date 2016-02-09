<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>


{{HTML::style('css/bootstrap.css')}}
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
       <script src="js/jquery-1.11.2.js"></script>
       <script type="text/javascript" src="js/jquery-1.11.2.js"></script>
          <script src="js/bootstrap.min.js"></script>
             <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

   </head>
          <body>

             <div class="container" id="hi">


<?php
              echo Form::open(array('url'=>'Send','class' => 'form-group','id'=>'hi'));
              echo Form::text('name',null, array('class'=>'form-control','placeholder'=>'Enter Name'));
              echo Form::text('lastName',null, array('class'=>'form-control','placeholder'=>'Enter Last Name'));
   ?>
                  <div class="input-group input-append date" id="dateRangePicker">
             <?php echo Form::text('date', '', array('class'=>'form-control','placeholder'=>'Select Date')) ?>
   <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>

              <?php
              echo Form::text('email',null, array('class'=>'form-control','placeholder'=>'Enter Email'));
              echo Form::submit('Send',array('id'=>'formsubmit','class'=>'btn btn-primary','onclick'=>'hello()'));
             echo Form::token() . Form::close();
              ?>


        <div id="successMessage"></div>


     <div class="form-group">


        <label class="col-xs-3 control-label"></label>
    <div class="col-xs-5 date">
    </div>
    </div>
    </div>
    </div>

            <script>
            $(document).ready(function() {
                $('#dateRangePicker')
                    .datepicker({
                        format: 'mm/dd/yyyy/',
                        startDate: '01/01/2014',
                        endDate: '12/30/2018'
                    })
                    .on('changeDate', function(e) {
                        // Revalidate the date field
                        $('#dateRangeForm').formValidation('revalidateField', 'date');
                    });

                $('#dateRangeForm').formValidation({
                    framework: 'bootstrap',
                   icon: {
                        valid: 'glyphicon glyphicon-ok',
                       invalid: 'glyphicon glyphicon-remove',
                       validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        date: {
                            validators: {
                               notEmpty: {
                                    message: 'The date is required'
                                },
                                date: {
                                    format: 'MM/DD/YYYY',
                                    min: '01/01/2010',
                                    max: '12/30/2020',
                                    message: 'The date is not a valid'
                                }
                            }
                        }
                    }
                });
            });

</script>


















      </body>

</html>




