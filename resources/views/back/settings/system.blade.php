@extends('layouts.back')
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">{{ __('Basic Information') }}</h3>
        </div>
        <div class="content-header-right col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top ">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Manage Site</a></li>
                        <li class="breadcrumb-item active"><a href="#">{{ __('Basic Information') }}</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12">

                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body ">
                        <!-- Nested Row within Card Body -->
                        <form class="admin-form form" action="{{ route('back.setting.update') }}" method="POST"
                            enctype="multipart/form-data">@csrf

                            @include('alerts.alerts')

                            <div class="row">
                                <div class="col-xl-3 col-lg-3">
                                    <div class="nav flex-column m-3 nav-pills nav-secondary" id="v-pills-tab"
                                        role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" data-toggle="pill" href="#basic">{{ __('Basic Information') }}</a>
                                        <a class="nav-link" data-toggle="pill" href="#media">{{ __('Media') }}</a>
                                        <!-- <a class="nav-link" data-toggle="pill" href="#basic">{{ __('Basic
                                            Information') }}</a> -->
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9">
                                    <input type="hidden" name="is_validate" value="1">

                                    <div class="">
                                        <div id="tabs">
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div id="basic" class="tab-pane active"><br>
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                                <label for="title">{{ __('App Name') }} *</label>
                                                                <input type="text" name="title" class="form-control"
                                                                    id="title"
                                                                    placeholder="{{ __('Enter Website Title') }}"
                                                                    value="{{ $setting->title }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                                <label for="home_page_title">{{ __('Home Page Title') }}
                                                                    *</label>
                                                                <input type="text" name="home_page_title"
                                                                    class="form-control" id="home_page_title"
                                                                    placeholder="{{ __('Enter Home Page Title') }}"
                                                                    value="{{ $setting->home_page_title }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                                <label for="currency_direction">{{ __('Currency
                                                                    Direction') }} *</label>
                                                                <select name="currency_direction"
                                                                    id="currency_direction" class="form-control">
                                                                    <option value="1" {{$setting->currency_direction ==
                                                                        1 ? 'selected' : ''}}>{{__('Left ($100.00)')}}
                                                                    </option>
                                                                    <option value="0" {{$setting->currency_direction ==
                                                                        0 ? 'selected' : ''}}>{{__('Right (100.00$)')}}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                                <label for="decimal_separator">{{ __('Decimal
                                                                    Separator') }} *</label>
                                                                <select name="decimal_separator" id="decimal_separator"
                                                                    class="form-control">
                                                                    <option value="," {{$setting->decimal_separator ==
                                                                        ',' ? 'selected' : ''}}>{{__('Comma (,)')}}
                                                                    </option>
                                                                    <option value="." {{$setting->decimal_separator ==
                                                                        '.' ? 'selected' : ''}}>{{__('Dot (.)')}}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                                <label for="thousand_separator">{{ __('Thousand
                                                                    Separator') }} *</label>
                                                                <select name="thousand_separator"
                                                                    id="thousand_separator" class="form-control">
                                                                    <option value="," {{$setting->thousand_separator ==
                                                                        ',' ? 'selected' : ''}}>{{__('Comma (,)')}}
                                                                    </option>
                                                                    <option value="." {{$setting->thousand_separator ==
                                                                        '.' ? 'selected' : ''}}>{{__('Dot (.)')}}
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div id="media" class="tab-pane"><br>
                                                    <div class="row justify-content-center">

                                                        <div class="col-lg-8">

                                                            <ul class="nav nav-pills nav-justified nav-secondary nav-pills-no-bd">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-toggle="pill" href="#logo">{{ __('Logo') }}</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="pill" href="#favicon">{{ __('Favicon') }}</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-toggle="pill" href="#loader">{{ __('Loader') }}</a>
                                                                </li>
                                                            </ul>

                                                            <div class="tab-content">

                                                                <div id="logo" class="container tab-pane active"><br>
                                                                    <div class="row justify-content-center">

                                                                        <div class="col-lg-12 ">

                                                                            <div class="form-group">
                                                                                <label for="name">{{ __('Current Image') }}</label>
                                                                                <div class="col-lg-12 pb-1">
                                                                                    <img class="admin-setting-img"
                                                                                        src="{{ $setting->logo ? asset('assets/images/'.$setting->logo) : asset('assets/images/placeholder.png') }}"
                                                                                        alt="No Image Found">
                                                                                </div>
                                                                                <span>{{ __('Image Size Should Be 140 x 40.') }}</span>
                                                                            </div>

                                                                            <div class="form-group position-relative ">
                                                                                <label class="file">
                                                                                    <input type="file" accept="image/*" class="upload-photo" name="logo" id="file"
                                                                                        aria-label="File browser example">
                                                                                    <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                                                                </label>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div id="favicon" class="container tab-pane"><br>
                                                                    <div class="row justify-content-center">

                                                                        <div class="col-lg-12">

                                                                            <div class="form-group">
                                                                                <label for="name">{{ __('Current Image') }}</label>
                                                                                <div class="col-lg-12 pb-1">
                                                                                    <img class="admin-setting-img my-mw-100"
                                                                                        src="{{ $setting->favicon ? asset('assets/images/'.$setting->favicon) : asset('assets/images/placeholder.png') }}"
                                                                                        alt="No Image Found">
                                                                                </div>
                                                                                <span>{{ __('Image Size Should Be 16 x 16.') }}</span>
                                                                            </div>

                                                                            <div class="form-group position-relative ">
                                                                                <label class="file">
                                                                                    <input type="file" accept="image/*" class="upload-photo" name="favicon" id="file"
                                                                                        aria-label="File browser example">
                                                                                    <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                                                                </label>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div id="loader" class="container tab-pane"><br>
                                                                    <div class="row justify-content-center">

                                                                        <div class="col-lg-12">
                                                                            <div class="form-group">
                                                                                <label class="switch-primary">
                                                                                    <input type="checkbox" class="switch switch-bootstrap " name="is_loader" value="1"
                                                                                        {{ $setting->is_loader == 1 ? 'checked' : '' }}>
                                                                                    <span class="switch-body"></span>
                                                                                    <span class="switch-text">{{ __('Display Loader') }}</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="name">{{ __('Current Image') }}</label>
                                                                                <div class="col-lg-12 pb-1">
                                                                                    <img class="admin-setting-img my-mw-100"
                                                                                        src="{{ $setting->loader ? asset('assets/images/'.$setting->loader) : asset('assets/images/placeholder.png') }}"
                                                                                        alt="No Image Found">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group position-relative ">
                                                                                <label class="file">
                                                                                    <input type="file" accept="image/*" class="upload-photo" name="loader" id="file"
                                                                                        aria-label="File browser example">
                                                                                    <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                                                                </label>
                                                                            </div>



                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex justify-content-center">
                                        <button type="submit" id="submitBtn" class="btn btn-secondary ">{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
@endsection