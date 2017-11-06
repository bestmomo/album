@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Connexion')
        @endslot

        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            @include('partials.form-group', [
                'title' => __('Adresse email'),
                'type' => 'email',
                'name' => 'email',
                'required' => true,
                ])

            @include('partials.form-group', [
                'title' => __('Mot de passe'),
                'type' => 'password',
                'name' => 'password',
                'required' => true,
                ])    

            <div class="form-check">
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"> @lang('Se rappeler de moi')</span>
                </label>
            </div>

            @component('components.button')
                @lang('Connexion')
            @endcomponent

            <a class="btn btn-link" href="{{ route('password.request') }}">
                @lang('Mot de passe oublié ?')
            </a>

        </form>

    @endcomponent            

@endsection
