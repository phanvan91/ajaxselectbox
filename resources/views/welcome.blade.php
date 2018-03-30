<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="wrapper" style="margin-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="form-group">
                        <label for="category">Catagory</label>
                        <select name="category" id="category" class="form-control">
                            <option value="">Choose</option>
                            @foreach($cate as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="trademake" >Trademake</label>
                        <select name="trademake" id="trademake" class="form-control">
                            <option value="">Lựa chọn danh mục</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#category").on('change',function(){
               var cate = $("select[name='category']").val();
               var op='';
               $.ajax({
                  type: 'GET',
                    url: '{{URL::to('findproductname')}}',
                   data: { 'id': cate },
                   success: function(data){
                        op+= '<option value="" selected disabled> choose product  </option>';
                        for(var i = 0; i < data.length ; i ++)
                        {
                            op+= '<option value="'+data[i].id+'"> '+data[i].name+' </option>'
                        }
                        console.log(op);
                       $("select[name='trademake']").html(" ");
                       $("select[name='trademake']").append(op);
                   },
                   error:function(){

                   }


               });
            });
        });
    </script>
</body>
</html>