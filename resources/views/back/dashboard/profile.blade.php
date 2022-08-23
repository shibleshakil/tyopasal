@extends('layouts.back')
@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Update Profile</h3>
        </div>
        <div class="content-header-right col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top ">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="#">Update Profile</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- users edit start -->
        <section class="users-edit">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-6">
                                <form class="form" method="post" action="{{ route ('back.profile.update') }}"
                                    enctype="multipart/form-data">@csrf
                                    @include('alerts.alerts')
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Current Image</label>
                                            <div class="col-lg-12">
                                                <img class="admin-img"
                                                    src="{{ $data->photo ? asset('assets/images/'.$data->photo) : asset ('public/back/app-assets/images/portrait/small/avatar-s-1.png') }}"
                                                    alt="No Image Found">
                                            </div>
                                        </div>
                                        <p>Image Size Should Be 40 x 40.</p>
                                    </div>
                                    <div class="form-group position-relative text-center">
                                        <label class="file">
                                            <input type="file" accept="image/*" class="upload-photo" name="photo" id="file"
                                                aria-label="File browser example">
                                            <span class="file-custom text-left">Upload Image...</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>User Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" placeholder="User name"
                                                value="{{$data->name}}" required
                                                data-validation-required-message="This username field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>E-mail <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" placeholder="Email"
                                                value="{{$data->email}}" required
                                                data-validation-required-message="This email field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Phone Number</label>
                                            <input type="number" name="phone" class="form-control phone"
                                                placeholder="Phone Number" value="{{$data->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="submitBtn" class="btn btn-primary btn-block">{{ __('Submit') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- users edit account form ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- users edit ends -->
    </div>
</div>
@endsection
@section('script')
@endsection