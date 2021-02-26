@extends('admin.layouts.app')

@section('content_header')
    <div class="row mb-2">
      <div class="col-sm-6">
          <h1 class="m-0 text-dark">Admin Dashboard</h1>
      </div>
    </div>
@endsection('content_header')


@section('content_body')
<div class="row">

  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>#</h3>
        <strong></strong>
      </div>
      <div class="icon">
        <i class="fas fa-chart-bar"></i>
      </div>
      <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>#</h3>

        <strong></strong>
      </div>
      <div class="icon">
        <i class="fas fa-book"></i>
      </div>
      <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>#</h3>
        <strong></strong>
      </div>
      <div class="icon">
        <i class="fas fa-child"></i>
      </div>
      <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>#</h3>
        <strong></strong>
      </div>
      <div class="icon">
        <i class="fas fa-user-tie"></i>
      </div>
      <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

</div>

@endsection('content_body')
