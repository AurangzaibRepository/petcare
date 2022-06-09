{{Form::open(['route' => 'registerUser', 'class' => 'form-register'])}}

@include('partials.errors')

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
                {{Form::select('country_id', $countries, '', ['class' => 'form-select'])}}
            </div>
            <div class="col-md-12 mb-3">
                {{Form::label('role', 'Role')}}
                {{Form::select('role', $roles, '', ['class' => 'form-select'])}}
            </div>
            <div class="col-md-12 mb-3">
                {{Form::label('password', 'Password')}}
                {{Form::password('password', ['class' => 'form-control'])}}
            </div>
            <div class="col-md-12 mb-3">
                {{Form::label('password_confirmation', 'Confirm Password')}}
                {{Form::password('password_confirmation', ['class' => 'form-control'])}}
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