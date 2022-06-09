<!DOCTYPE html>
<html>

<head>
    <title>{{$pageTitle}}</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </link>
</head>

<body>

    <div class="d-flex align-items-center dv-base">
        @include('auth.form-register')
    </div>
</body>

</html>