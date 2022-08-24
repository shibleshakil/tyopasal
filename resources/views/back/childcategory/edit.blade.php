@extends('layouts.back')
@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">{{__('Edit Child Category')}}</h3>
        </div>
        <div class="content-header-right col-md-6 col-12 mb-2">
            <div class="row ">
                <div class="col-12 text-right">
                    <a href="{{ route ('back.childcategory.index') }}" class="btn btn-primary btn-icon"> <i
                            class="fa fa-chevron-left"></i> Back</a>
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
                                <form class="admin-form form"
                                    action="{{ route('back.childcategory.update',$childcategory->id) }}" method="POST"
                                    enctype="multipart/form-data">

                                    @csrf
                                    @method('PUT')
                                    @include('alerts.alerts')

                                    <div class="form-group">
                                        <label for="category_id">{{ __('Select Category') }} *</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value="" disabled>{{__('Select One')}}</option>
                                            @foreach(DB::table('categories')->whereStatus(1)->get() as $cat)
                                            <option value="{{ $cat->id }}" {{$childcategory->category_id == $cat->id ?
                                                'selected' :''}} >{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="subcategory_id">{{ __('Select Subcategory') }} *</label>
                                        <select name="subcategory_id" id="subcategory_id" class="form-control">
                                            @foreach(DB::table('subcategories')->where('category_id',$childcategory->category_id)->whereStatus(1)->get()
                                            as $subcat)
                                            <option value="{{ $subcat->id }}" {{ $subcat->id ==
                                                $childcategory->subcategory_id ? 'selected' : '' }}>{{ $subcat->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }} *</label>
                                        <input type="text" name="name" class="form-control item-name" id="name"
                                            placeholder="{{ __('Enter Name') }}" value="{{ $childcategory->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">{{ __('Slug') }} *</label>
                                        <input type="text" name="slug" class="form-control" id="slug"
                                            placeholder="{{ __('Enter Slug') }}" value="{{ $childcategory->slug }}">
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