@extends('layouts.back')
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Change Password</h3>
        </div>
        <div class="content-header-right col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top ">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="#">Change Password</a></li>
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
                                <form class="form" method="post" action="{{ route ('back.password.update') }}"
                                    enctype="multipart/form-data">@csrf
                                    @include('alerts.alerts')

                                    <div class="form-group">
                                        <label for="current_password">{{ __('Current Password') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="password" name="current_password" class="form-control"
                                            id="current_password" placeholder="{{ __('Enter Your Current Password') }}"
                                            value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password">{{ __('New Password') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="password" name="new_password" class="form-control"
                                            id="new_password" placeholder="{{ __('Enter Your New Password') }}" value=""
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="renew_password">{{ __('Re-Type New Password') }} <span
                                                class="text-danger">*</span></label>
                                        <input type="password" name="renew_password" class="form-control"
                                            id="renew_password" placeholder="{{ __('Re-Type Your New Password') }}"
                                            value="" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="submitBtn" class="btn btn-primary btn-block">{{
                                            __('Submit') }}</button>
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