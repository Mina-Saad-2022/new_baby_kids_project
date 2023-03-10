<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
{{--<head>--}}

{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    links for dashboard Admin LTE--}}

{{--<!-- Google Font: Source Sans Pro -->--}}
{{--    <link rel="stylesheet"--}}
{{--          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">--}}
{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">--}}
{{--    <!-- Ionicons -->--}}
{{--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
{{--    <!-- Tempusdominus Bootstrap 4 -->--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">--}}
{{--    <!-- iCheck -->--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">--}}
{{--    <!-- JQVMap -->--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">--}}
{{--    <!-- Theme style -->--}}
{{--    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">--}}
{{--    <!-- overlayScrollbars -->--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">--}}
{{--    <!-- Daterange picker -->--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">--}}
{{--    <!-- summernote -->--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">--}}


{{--    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/6756/6756802.png">--}}

{{--    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css')}}">--}}

{{--    --}}{{-------------    fontawesome   -------------}}

{{--    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"--}}
{{--          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>--}}

{{--    <link rel="stylesheet" href="{{asset('My_work/style.css')}}">--}}

{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}


{{--    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">--}}



    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | DataTables</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">


        <link rel="stylesheet" href="{{asset('My_work/style.css')}}">





























    {{-------------    when user used arabic lan    -------------}}

    @if(app()->getlocale() =='ar')
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/6756/6756802.png">
        {{--        <link rel="stylesheet" href="{{asset('dist/css/rtl/bootstrap-rtl.min.css')}}">--}}
        <link rel="stylesheet" href="{{asset('dist/css/rtl/rtl.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/rtl/adminlte.rtl.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

        <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
              integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
              crossorigin="anonymous"/>

        <link rel="stylesheet" href="{{asset('dist/css/rtl/My_work.css')}}">

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endif

{{-------------    links page create   -------------}}

{{--<!-- Icons font CSS-->--}}
{{--    <link href="{{asset('create_user_page/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet"--}}
{{--          media="all">--}}
{{--    <link href="{{asset('create_user_page/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet"--}}
{{--          media="all">--}}
{{--    <!-- Font special for pages-->--}}
{{--    <link--}}
{{--        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"--}}
{{--        rel="stylesheet">--}}

{{--    <!-- Vendor CSS-->--}}
{{--    <link href="{{asset('create_user_page/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">--}}
{{--    <link href="{{asset('create_user_page/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">--}}

{{--    <!-- Main CSS-->--}}
{{--    <link href="{{asset('create_user_page/css/main.css')}}" rel="stylesheet" media="all">--}}

</head>


    <!-- Google Font: Source Sans Pro -->
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">--}}

