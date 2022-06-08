<!DOCTYPE html>
<html>

<head>
    <title>{{$pageTitle}}</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </link>
</head>

<body>
    <div class="row dv-base d-flex align-items-center">
        <div class="col-md-6 d-flex justify-content-center">
            <img src="/images/petcare-logo.png" id="img-logo"></img>
        </div>
        <div class="col-md-6">
            <div class="row justify-content-center">

                {{Form::open(['class' => 'form-login'])}}
                <div class="col-md-12 mb-3">
                    {{Form::label('email', 'Email')}}
                    {{Form::text('email', '', ['class' => 'form-control'])}}
                </div>
                <div class="col-md-12 mb-3">
                    {{Form::label('password', 'Password')}}
                    {{Form::password('password', ['class' => 'form-control'])}}
                </div>
                <div class="col-md-12">
                    {{Form::submit('Login', ['class' => 'btn btn-primary'])}}
                </div>
                {{Form::close()}}

            </div>
        </div>
    </div>
</body>

</html>