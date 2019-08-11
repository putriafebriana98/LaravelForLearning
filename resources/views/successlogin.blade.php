
<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></link>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    .box{
        width: 600px;
        margin: 0 auto;
        border: 1px solid #ccc;
    }
    </style>
</head>
<body>
<br/>
<div class="container box">
    <h3>Simple Login System in Laravel</h3>
    @if(isset(Auth::user()->email))
        <div class="alert alert-danger success-block">
            <strong>Welcome {{Auth::user()->email}}</strong>
            <br/>
            <a href="{{url('/main/logout')}}">logout</a>
        </div>
        @else
        <script>window.location="/main";</script>
        @endif
</div>
</body>
</html>
