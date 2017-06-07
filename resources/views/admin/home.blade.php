@extends('admin.layouts.dashboard')

@section('header')
    <section class="content-header">
        <h1>
            {{ trans('admin.dashboard.Dashboard') }}<small>{{ trans('') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('admin') }}">Project name</a></li>
            <li class="active">{{ trans('admin.dashboard.Dashboard') }}</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('admin.dashboard.Welcome to Dashboard!') }}</div>
                </div>

                <div class="box-body">{{ trans('') }}</div>
            </div>
        </div>
    </div>
@endsection
