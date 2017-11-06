@extends('layouts.app')

@section('css')

  <style>

    html,
    body {
      height: 100%;
    }
    body {
      color: white;
      text-align: center;
    }
    .site-wrapper {
      display: table;
      width: 100%;
      height: 100%;
      min-height: 100%;
    }
    .site-wrapper-inner {
      display: table-cell;
      vertical-align: middle;
      margin-right: auto;
      margin-left: auto;
      width: 100%;
      padding: 0 1.5rem;
    }

  </style>

@endsection

@section('content')

  <div class="site-wrapper">
    <main role="main" class="site-wrapper-inner">
      <h1>@yield('title')</h1>
      <p class="lead">@yield('text')</p>
    </main>
  </div>

@endsection
