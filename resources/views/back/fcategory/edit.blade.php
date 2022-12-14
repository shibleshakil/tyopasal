@extends('layouts.back')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="mb-0 pl-3"><b>{{ __('Update Categories') }}</b> </h3>
                    <a class="btn btn-primary btn-md" href="{{ route ('back.fcategory.index') }}"><i class="fa fa-chevron-left"></i> Back</a>
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
                                <form class="admin-form form" action="{{ route('back.fcategory.update',$fcategory->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    @include('alerts.alerts')

                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }} *</label>
                                        <input type="text" name="name" class="form-control item-name" id="name"
                                            placeholder="{{ __('Enter Name') }}" value="{{ $fcategory->name }}"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">{{ __('Slug') }} *</label>
                                        <input type="text" name="slug" class="form-control" id="slug"
                                            placeholder="{{ __('Enter Slug') }}" value="{{ $fcategory->slug }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">{{ __('Text') }} *</label>
                                        <input type="text" name="text" class="form-control" id="text"
                                            placeholder="{{ __('Text') }}" value="{{ $fcategory->text }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_keywords">{{ __('Meta Keywords') }}</label>
                                        <input type="text" name="meta_keywords" class="tags" id="meta_keywords"
                                            placeholder="{{ __('Enter Meta Keywords') }}" value="{{$fcategory->meta_keywords}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_description">{{ __('Meta Description') }}</label>
                                        <textarea name="meta_descriptions" id="meta_descriptions" class="form-control"
                                            rows="5" placeholder="{{ __('Enter Meta Description') }}">{{$fcategory->meta_descriptions}}
                                        </textarea>
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
