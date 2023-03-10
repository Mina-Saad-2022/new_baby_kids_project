<title>{{ __('dashboard.admins')}}</title>


@include('layouts.links')

@extends('layouts.header')

@include('layouts.side_nav')

<!-- /.content-wrapper -->


@section('content')
    <div class="col-sm-6 p-0">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{route('dashboard.view_home_page')}}"> <i
                        class="fal fa-home-lg-alt"></i> {{ __('dashboard.home page') }}   </a></li>

            <li class="breadcrumb-item"><a href="{{route('dashboard.view_admin_page')}}"> <i
                        class="far fa-user-shield"></i> {{ __('dashboard.admin') }} </a></li>
        </ol>
    </div>


    {{--------------------- to show all admins in project ---------------------}}
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover text-center">
                                <thead>
                                <tr>
                                    <th> #</th>
                                    <th>{{ __('dashboard.name') }} </th>
                                    <th>{{ __('dashboard.email') }} </th>
                                    <th>{{ __('dashboard.phone') }} </th>
                                    <th>{{ __('dashboard.gender') }} </th>
                                                                        <th>{{ __('dashboard.password') }} </th>
                                    <th>{{ __('dashboard.photo') }} </th>
                                                                        <th>{{ __('dashboard.action') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $admin)
                                    <tr>
                                        <td class="line_40">{{$admin['id']}}</td>
                                        <td class="line_40">{{$admin['name']}}</td>
                                        <td class="line_40">{{$admin['email']}}</td>
                                        <td class="line_40">{{$admin['phone']}}</td>
                                        <td class="line_40">{{$admin['gender']}}</td>
                                                                            <td class="line_40">{{$admin['password']}}</td>
                                        <td class="line_40">
                                            @if (!isset($admin->photo))
                                                @if($admin->gender === 'Male')
                                                    <img class="user_photo"
                                                         src="{{asset('images/default_image_user/male.png')}}">
                                                @else
                                                    <img class="user_photo"
                                                         src="{{asset('images/default_image_user/female.png')}}">
                                                @endif

                                            @else
                                                <img class="user_photo"
                                                     src="{{asset('images/avatar_user/'.$admin->photo)}}">
                                            @endif
                                        </td>


                                        <td class="line_40">
                                            <div class="d-flex justify-content-center ">
                                                <div>
                                                    <form action="{{route('dashboard.delete_admin')}}" method="post"
                                                          class="text-center mx-3">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input name="user_delete_id" type="hidden"
                                                               value="{{$admin->id}} ">
                                                        <button type="submit"
                                                                class="btn btn-danger btn_action_admin text-center m-auto">{{ __('dashboard.delete_admin') }}</button>
                                                    </form>
                                                </div>
                                                <div>
                                                    <a href="{{route('dashboard.edit_admin',$admin->id)}}">
                                                        <button type="submit"
                                                                class=" btn btn-primary btn_action_admin text-center m-auto">{{ __('dashboard.edit_admin') }}</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>



                                @endforeach
                                </tbody>
                            </table>

            </div>
        </div>
    </section>



@endsection


