<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> {{ config('app.name') }} </title>

    <style>
        .text-over {
        position: relative;
        text-align: center;
        color: white;
        }


        .top-right {
        position: absolute;
        top: 8px;
        right: 16px;
        background-color: #454545;
        }

    </style>
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Adda Theme -->
    <meta name="robots" content="noindex, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bicon.min.css') }}">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/flaticon.css') }}">
    <!-- audio & video player CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/plyr.css') }}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/slick.min.css') }}">
    <!-- nice-select CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins/nice-select.css') }}">
    <!-- perfect scrollbar css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/perfect-scrollbar.css') }}">
    <!-- light gallery css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/lightgallery.min.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- /.Adda Theme -->

    <!-- Toast Message -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">


    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
