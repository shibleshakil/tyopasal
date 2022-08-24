@extends('layouts.back')
@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">{{__('Update Brand')}}</h3>
        </div>
        <div class="content-header-right col-md-6 col-12 mb-2">
            <div class="row ">
                <div class="col-12 text-right">
                    <a href="{{ route ('back.brand.index') }}" class="btn btn-primary btn-icon"> <i class="fa fa-chevron-left"></i> Back</a>
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
								<form class="admin-form form" action="{{ route('back.brand.update',$brand->id) }}"
									method="POST" enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')

									@include('alerts.alerts')

                                    <div class="form-group">
										<label for="name">{{ __('Current Image') }} *</label>
										<br>
											<img class="admin-img"
												src="{{ $brand->photo ? asset('assets/images/'.$brand->photo) : asset('assets/images/placeholder.png') }}"
												alt="No Image Found">
										<br>
										<span class="mt-1">{{ __('Image Size Should Be 110 x 81.') }}</span>
									</div>

									<div class="form-group position-relative">
										<label class="file">
											<input type="file"  accept="image/*"  class="upload-photo" name="photo" id="file"
												aria-label="File browser example">
											<span class="file-custom text-left">{{ __('Upload Image...') }}</span>
										</label>
                                    </div>

									<div class="form-group">
										<label for="name">{{ __('Name') }} *</label>
										<input type="text" name="name" class="form-control item-name" id="name"
											placeholder="{{ __('Enter Name') }}" value="{{ $brand->name }}">
									</div>

									<div class="form-group">
										<label for="slug">{{ __('Slug') }} *</label>
										<input type="text" name="slug" class="form-control" id="slug"
											placeholder="{{ __('Enter Slug') }}" value="{{ $brand->slug }}">
									</div>

                                    <div class="form-group">
                                        <button type="submit" id="submitBtn" class="btn btn-secondary ">{{ __('Submit') }}</button>
                                    </div>
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