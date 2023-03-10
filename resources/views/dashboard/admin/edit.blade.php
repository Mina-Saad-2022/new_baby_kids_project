<title>{{ __('dashboard.edit_user')}}</title>


@include('layouts.links')

@extends('layouts.header')

@include('layouts.side_nav')

<!-- /.content-wrapper -->


@section('content')

    <div class="col-sm-6">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a href="{{route('dashboard.view_home_page')}}"> <i
                        class="fal fa-home-lg-alt"></i> {{ __('dashboard.home page') }}   </a></li>

            <li class="breadcrumb-item"><a href="{{route('dashboard.view_admin_page')}}"> <i
                        class="far fa-user-shield"></i> {{ __('dashboard.admin') }} </a></li>

            <li class="breadcrumb-item"><a href="{{route('dashboard.view_create_page')}}"> <i
                        class="far fa-user-plus"></i> {{ __('dashboard.create') }}   </a></li>


            <li class="breadcrumb-item"><a href="{{route('dashboard.view_create_page')}}"> <i
                        class="far fa-user-plus"></i> {{ __('dashboard.edit_user') }}   </a></li>


        </ol>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('dashboard.edit_user') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('dashboard.done_edit') }}" enctype=multipart/form-data>
                            @csrf
                            @method('put')
                            <input type="hidden" name="id" value="{{$admin->id}}">

                            <div class="row mb-3">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-end">{{ __('dashboard.name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" value="{{$admin->name}}" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{--*******************************  user phone  *******************************--}}

                            <div class="row mb-3">
                                <label for="phone"
                                       class="col-md-4 col-form-label text-md-end">{{ __('dashboard.phone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" value="{{$admin->phone}}" type="text"
                                           class="form-control @error('phone') is-invalid @enderror" name="phone"
                                           value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{--********************* user password & repeat password  *********************--}}

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('dashboard.password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" value="{{$admin->password}}" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">{{ __('dashboard.repeat_password_user') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" value="{{$admin->password}}" type="password"
                                           class="form-control" name="password_confirmation" required
                                           autocomplete="new-password">
                                </div>
                            </div>
                            {{--*******************************  user email *******************************--}}

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('dashboard.email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" value="{{$admin->email}}" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{--******************************* user gender *******************************--}}

                            <div class="row mb-3">
                                <label for="gender"
                                       class="col-md-4 col-form-label text-md-end">{{ __('dashboard.gender') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="gender">
                                        <option>{{ __('dashboard.male') }}</option>
                                        <option>{{ __('dashboard.female') }}</option>
                                    </select>
                                </div>
                            </div>

                            {{--******************************* user photo *******************************--}}

                            <div class="row mb-3">
                                <label for="photo"
                                       class="col-md-4 col-form-label text-md-end">{{ __('dashboard.photo') }}</label>

                                <div class="col-md-6">
                                    <input id="photo" type="file" class="form-control" name="photo"
                                           value="{{ old('photo') }}">
                                </div>
                            </div>
                            <div class="row mb-6">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('dashboard.Edit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection



@include('layouts.javascript')

