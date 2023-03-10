

<title>{{ __('dashboard.home page')}}</title>



@include('layouts.links')

@extends('layouts.header')

@include('layouts.side_nav')

  <!-- /.content-wrapper -->


 @section('content')

     <div class="col-sm-6">
         <ol class="breadcrumb ">
             <li class="breadcrumb-item"> <a href=""> <i class="fal fa-home-lg-alt"></i> {{ __('dashboard.home page') }}   </a> </li>
         </ol>
     </div>


 @endsection

 @include('layouts.javascript')



