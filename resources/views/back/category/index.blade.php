@extends('layouts.back')
@section('content')

<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Categories</h3>
        </div>
        <div class="content-header-right col-md-6 col-12 mb-2">
            <div class="row ">
                <div class="col-12 text-right">
                    <a href="{{ route ('back.category.create') }}" class="btn btn-primary btn-icon"> <i class="fa fa-plus"></i> Add</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Configuration option table -->
        <section id="configuration">
            @include('alerts.alerts')
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered datatable">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Image') }}</th>
                                                <th>{{ __('Name') }}</th>
                                                <th>{{ __('Status') }}</th>
                                                <th>{{ __('Actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @include('back.category.table')
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Configuration option table -->
    </div>
</div>
@include('back.category.delete_modal')

@endsection
@section('script')
@endsection