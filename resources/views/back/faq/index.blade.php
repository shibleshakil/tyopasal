@extends('layouts.back')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="mb-0 pl-3"><b>{{ __('FAQ') }}</b> </h3>
                    <a class="btn btn-primary btn-md" href="{{ route ('back.faq.create') }}"><i class="fa fa-plus"></i> Add</a>
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
                                                <th width="20%">{{ __('Title') }}</th>
                                                <th width="20%">{{ __('Category') }}</th>
                                                <th width="45%">{{ __('Details') }}</th>
                                                <th width="15%">{{ __('Actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @include('back.faq.table')
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
@include('back.faq.delete_modal')

@endsection
@section('script')
@endsection