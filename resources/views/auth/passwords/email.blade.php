@extends('layouts.form')

@section('card')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @component('components.card')

        @slot('title')
            @lang('Renouvellement du mot de passe')
        @endslot

        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            @include('partials.form-group', [
                'title' => __('Adresse email'),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                ])

            @component('components.button')
                @lang('Envoi de la demande')
            @endcomponent
        </form>

    @endcomponent

@endsection
