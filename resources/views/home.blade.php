@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('home') }}
@endsection

@section('content')
<!-- Content area -->
<div class="d-flex justify-content-center align-items-center">
    <div class="login-form" action="index.html">
        <div class="card mb-0">
            <div class="card-body">
                <div class="text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="rounded-circles" src="{{ asset('img/istv.jpg') }}" width="260" height="260" alt="">
                        <div>
                            <h1>BIENVENIDO</h1>
                        </div>
                        <div>
                            <h2>El único modo de hacer un gran trabajo es amar lo que haces. </h2>
                            <h2>- Steve Jobs </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /content area -->
@endsection


