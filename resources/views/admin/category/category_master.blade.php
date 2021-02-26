<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      {{Form::label('name','Category Name')}}
      <div class="form-group {{$errors->has('name') ? 'has-error' : ''}} "></div>
      {{Form::text('name', null,['class' => 'form-control','id' => 'name', 'placeholder' => 'Enter Category Name'])}}
    </div>
  </div>

  <div class="col-md-12">
    {{Form::button(isset($model)? 'Update' : 'Save', ['class' => 'btn btn-dark','type' => 'submit'])}}
  </div>
</div>
                          
                          