<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      {{Form::label('name','Name')}}
      <div class="form-group {{$errors->has('name') ? 'has-error' : ''}} "></div>
      {{Form::text('name', null,['class'=>'form-control','id'=>'name','placeholder'=>'Enter Name'])}}              
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {{Form::label('username','Username')}}
      <div class="form-group {{$errors->has('username') ? 'has-error' : ''}} "></div>
      {{Form::text('username', null,['class'=>'form-control','id'=>'username','placeholder'=>'Enter Username'])}}          
    </div>
  </div>  
  <div class="col-md-4">
    <div class="form-group">
      {{Form::label('email','Email')}}
      <div class="form-group {{$errors->has('email') ? 'has-error' : ''}} "></div>
      {{Form::text('email', null,['class' => 'form-control','id' => 'email','placeholder' => 'Enter Email'])}}          
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {{Form::label('birthdate','Date of Birth')}}
      <div class="form-group {{$errors->has('birthdate') ? 'has-error' : ''}} "></div>
      {{Form::date('birthdate', null,['class' => 'form-control','id' => 'birthdate','placeholder' => 'Enter Birthdate'])}}          
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {{Form::label('image','User Image')}}
      <div class="form-group {{$errors->has('image') ? 'has-error' : ''}} "></div>
        <input type="file" name="image">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {{Form::label('followers','No of Followers')}}
      <div class="form-group {{$errors->has('followers') ? 'has-error' : ''}} "></div>
        {{Form::number('followers', null,['class' => 'form-control','id' => 'followers', 'placeholder' => 'Enter No. of Followers'])}}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {{Form::label('following','No. of Following')}}
      <div class="form-group {{$errors->has('following') ? 'has-error' : ''}} "></div>
        {{Form::number('following', null,['class' => 'form-control','id' => 'following', 'placeholder' => 'Enter No. of Following'])}}
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      {{Form::label('no_of_blogs','No. of Blogs')}}
      <div class="form-group {{$errors->has('no_of_blogs') ? 'has-error' : ''}} "></div>
        {{Form::number('no_of_blogs', null,['class' => 'form-control','id' => 'no_of_blogs', 'placeholder' => 'Enter No. of Blogs'])}}
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group">
      {{Form::label('description','Description')}}
      <div class="form-group {{$errors->has('description') ? 'has-error' : ''}} "></div>
      {{Form::textarea('description', null,['class' => 'form-control','id' => 'description','placeholder' => 'Enter Description', 'rows' => '3'])}} 
    </div>
  </div>

  <div class="col-md-12">
    {{Form::button(isset($model)? 'Update' : 'Save', ['class' => 'btn btn-dark','type' => 'submit'])}}
  </div>   
</div>