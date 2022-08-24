@extends('layouts.back')
@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">{{__('Create Category')}}</h3>
        </div>
        <div class="content-header-right col-md-6 col-12 mb-2">
            <div class="row ">
                <div class="col-12 text-right">
                    <a href="{{ route ('back.category.index') }}" class="btn btn-primary btn-icon"> <i class="fa fa-chevron-left"></i> Back</a>
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
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <form class="admin-form form" action="{{ route('back.category.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @include('alerts.alerts')

                                    <div class="form-group">
                                        <label for="name">{{ __('Set Image') }} *</label>
                                        <br>
                                        <img class="admin-img" src="{{  asset('assets/images/placeholder.png') }}"
                                            alt="No Image Found">
                                        <br>
                                        <span class="mt-1">{{ __('Image Size Should Be 60 x 60.') }}</span>
                                    </div>

                                    <div class="form-group position-relative">
                                        <label class="file">
                                            <input type="file" accept="image/*" class="upload-photo" name="photo" id="file"
                                                aria-label="File browser example">
                                            <span class="file-custom text-left">{{ __('Upload Image...') }}</span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }} *</label>
                                        <input type="text" name="name" class="form-control item-name" id="name"
                                            placeholder="{{ __('Enter Name') }}" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">{{ __('Slug') }} *</label>
                                        <input type="text" name="slug" class="form-control" id="slug"
                                            placeholder="{{ __('Enter Slug') }}" value="{{ old('slug') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_keywords">{{ __('Meta Keywords') }}
                                        </label>
                                        <input type="text" name="meta_keywords" class="tags" id="meta_keywords"
                                            placeholder="{{ __('Enter Meta Keywords') }}" value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_description">{{ __('Meta Description') }}
                                        </label>
                                        <textarea name="meta_descriptions" id="meta_description" class="form-control" rows="5"
                                            placeholder="{{ __('Enter Meta Description') }}"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="serial">{{ __('Serial') }} *</label>
                                        <input type="number" name="serial" class="form-control" id="serial"
                                            placeholder="{{ __('Enter Serial Number') }}" value="0">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" id="submitBtn" class="btn btn-secondary ">{{ __('Submit') }}</button>
                                    </div>

                                    <div>
                                </form>
                            </div>
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