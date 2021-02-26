<div class="row">
    <div class="col-md-6">
        <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name', Auth::user()->name,['class' => 'form-control','id' => 'name', 'placeholder' => 'Enter Your Name', 'required'])}}
        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}} "></div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
        {{Form::label('username','Username')}}
        {{Form::text('username', Auth::user()->username,['class' => 'form-control','id' => 'username', 'placeholder' => 'Enter Username'])}}
        <div class="form-group {{$errors->has('username') ? 'has-error' : ''}} "></div>        
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::text('email', Auth::user()->email,['class' => 'form-control','id' => 'email', 'placeholder' => 'Enter Email Address', 'required'])}}
        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}} "></div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
        {{Form::label('birthdate','Date of Birth')}}
        {{Form::date('birthdate', Auth::user()->birthdate,['class' => 'form-control','id' => 'birthdate','placeholder' => 'Enter Birthdate', 'required'])}}          
        <div class="form-group {{$errors->has('birthdate') ? 'has-error' : ''}} "></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description', Auth::user()->description,['class' => 'form-control','id' => 'description','placeholder' => 'Enter Description', 'rows' => '3', 'required'])}} 
        <div class="form-group {{$errors->has('description') ? 'has-error' : ''}} "></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
        {{Form::label('password','Password')}}
        {{Form::password('password', ['class' => 'form-control','id' => 'password', 'placeholder' => 'Enter Current Password to Save Changes', 'required'])}}
        <div class="form-group {{$errors->has('password') ? 'has-error' : ''}} "></div>
        </div>
    </div>

    <div class="col-md-12">
        {{Form::button(isset($model)? 'Update' : 'Save', ['class' => 'btn btn-dark','type' => 'submit'])}}
    </div>
</div>