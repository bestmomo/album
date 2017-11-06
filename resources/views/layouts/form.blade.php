@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @yield('card')
            </div>
        </div>
    </div>
@endsection
