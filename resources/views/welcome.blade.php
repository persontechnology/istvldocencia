@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('welcome') }}
@endsection



@section('content')
<!-- Content area -->
<div class="d-flex justify-content-center align-items-center">
    <div class="login-form" action="index.html">
        <div class="card mb-0">
            <div class="card-body">
                <div class="text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="rounded-circleS" src="{{ asset('img/istv.jpg') }}" width="260" height="260" alt="">
                        <h1> Sheet of life </h1>
                    </div>
                </div>

                <div class="text-center mb-3">
                    <h6 class="mb-0"></h6>
                    <span class="text-muted"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /content area -->
@endsection

