<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    @vite('resources/js/app.js')
</head>
<body>
  <div class="container">
    @include('home')
    <div class="row g-5">
      <div class="d-flex justify-content-center">
        @include('autoForm')   
      </div>
      <div class="d-flex justify-content-center">
        @include('autoList')
      </div>
    </div>
  </div>
    
<script>

$(document).ready(function (){
    $("#btnSave").on("click", function(){

        $("#form1").validate({
            rules:{
                mark:{
                    required: true,
                    maxlength: 50
                },
                model:{
                    required: true,
                    maxlength: 100
                },
                number:{
                    required: {
                        depends: function(element){
                            let pattern = new RegExp('^[а-я]\d{3}[а-я]{2}\d{2,3}$');
                            let result = pattern.test($(element).val());
                            return result;
                        }
                    },
                    maxlength: 20
                },
                color:{
                    required: true
                }
            }
        });

        if($("#form1").valid())
        {
            $.ajax({
                url: "{{url('store-data')}}",
                type: "POST",
                data: $('#form1').serialize(),
                success: function( response ) {
                    alert('Ajax form has been submitted successfully');
                    document.getElementById("form1").reset();
                    window.location.reload();
                }
            });
        }
    });

    $("#btnCancel").on("click", function(){
        $('#form1')[0].reset();
        window.location.reload();
    });

})

</script>

</body>
</html>