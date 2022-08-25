@extends('layouts.back')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="mb-0 pl-3"><b>{{ __('Blogs') }}</b> </h3>
                    <div class="right">
                        <a class="btn btn-primary btn-md" href="{{ route ('back.post.create') }}"><i class="fa fa-plus"></i> Add</a>
                        <form class="d-inline-block" action="{{route('back.bulk.delete')}}" method="get">
                            <input type="hidden" value="" name="ids[]" id="bulk_delete">
                            <input type="hidden" value="posts" name="table">
                            <button class="btn btn-danger btn-md">{{__('Delete')}}</button>
                        </form>
                    </div>
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
                                                <th> <input type="checkbox" data-target="blog-bulk-delete" class="bulk_all_delete"> </th>
                                                <th>{{ __('Image') }}</th>
                                                <th>{{ __('Title') }}</th>
                                                <th>{{ __('Category') }}</th>
                                                <th>{{ __('Actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @include('back.post.table')
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
@include('back.post.delete_modal')

@endsection
@section('script')
@endsection