<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
    <style>
        html,
        body{
           height: 100%;
        }

        body{
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;

            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #dedede;
        }

        .form-signin{
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox{
            font-weight: 400;
        }

        .form-signin .form-control{
             position: relative;
             box-sizing: border-box;
             height: auto;
             padding: 10px;
             font-size: 16px; 
        }

        .form-signin .form-control:focus{
             z-index: 2;
        }

        .form-signin input[type="email"]{
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;  
        }

        .form-signin input[type="password"]{
            margin-bottom: 10px;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;  
        }

        img{
            max-width: 100%;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
   
    <form class="form-signin" method="post" action="{{ route('admin.login.do')}}">
        @csrf
        <img src="{{ asset('image/openhome.png')}}" alt="" width="250px">

        @if($errors->all())
           @foreach($errors->all() as $error)
              <div class="alert alert-danger" role="alert">
                  {{ $error }}
              </div>
           @endforeach
        @endif

        <label for="email" class="sr-only">Email</label>
        <input type="text" name="email" id="email" class="form-control" value="rafael@teste.com" placeholder="Seu email" require>

        <label for="email" class="sr-only">Senha</label>
        <input type="password" name="password" id="senha" class="form-control" placeholder="Senha" require>

        <button class="btn btn-lg btn-primary btn-block">Login</button>
    </form>
  
    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>