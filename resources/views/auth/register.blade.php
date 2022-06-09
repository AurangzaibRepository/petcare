<!DOCTYPE html>
<html>

<head>
    <title>{{$pageTitle}}</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </link>
</head>

<body>

    <div class="d-flex align-items-center dv-base">
        {{Form::open(['class' => 'form-register'])}}
        <div class="row dv-base">
            <div class="col-md-4 d-flex justify-content-center">
                <img src="/images/petcare-logo.png" id="img-logo" />
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class="col-md-12 mb-3">
                        {{Form::label('first_name', 'First Name')}}
                        {{Form::text('first_name', '', ['class' => 'form-control'])}}
                    </div>
                    <div class="col-md-12 mb-3">
                        {{Form::label('last_name', 'Last Name')}}
                        {{Form::text('last_name', '', ['class' => 'form-control'])}}
                    </div>
                    <div class="col-md-12 mb-3">
                        {{Form::label('email', 'Email')}}
                        {{Form::text('email', '', ['class' => 'form-control'])}}
                    </div>
                    <div class="col-md-12 mb-3">
                        {{Form::label('phone_no', 'Phone Number')}}
                        {{Form::text('phone_no', '', ['class' => 'form-control'])}}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class="col-md-12 mb-3">
                        {{Form::label('country_id', 'Country')}}
                        {{Form::select('country_id', [], '', ['class' => 'form-select'])}}
                    </div>
                    <div class="col-md-12 mb-3">
                        {{Form::label('role', 'Role')}}
                        {{Form::select('role', [], '', ['class' => 'form-select'])}}
                    </div>
                    <div class="col-md-12 mb-3">
                        {{Form::label('password', 'Password')}}
                        {{Form::password('password', ['class' => 'form-control'])}}
                    </div>
                    <div class="col-md-12 mb-3">
                        {{Form::label('confirm_password', 'Confirm Password')}}
                        {{Form::password('password', ['class' => 'form-control'])}}
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                {{Form::submit('Register', ['class' => 'btn btn-primary'])}}
            </div>
            <div class="col-md-4">
                {{Form::submit('Reset', ['class' => 'btn btn-secondary'])}}
            </div>
        </div>
        {{Form::close()}}
    </div>
</body>

</html>