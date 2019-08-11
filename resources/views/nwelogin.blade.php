<!DOCTYPE html>
<html>
<link>
<title>Simple Login to laravel</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></link>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .box{
        width: 600px;
        margin: 0 auto;
        border: 1px solid #ff0;

    }
</style>
</head>
<body>
<br></br>
<div class="container box">
    <h3>Simple login to laravel</h3>
    @if(isset(Auth::user()->email))
        <script>window.location="main/successlogin"</script>
    @endif
    @if($message=Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
            <strong>{{$message}}</strong>

        </div>
    @endif
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{url('/main/checklogin')}}">
        <div class="form-group">
            @csrf
            <label>Enter Email: </label>
            <input type="email" name="email" class="form-control"></input>
        </div>
        <div class="form-group">
            <label>Enter password: </label>
            <input type="password" name="passwords" class="form-control"></input>
        </div>
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary" value="login"></input>
        </div>
    </form>
</div>
</body>
</html>
