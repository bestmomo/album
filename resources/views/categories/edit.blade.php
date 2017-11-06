@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Modifier une catégorie')
        @endslot

        <form method="POST" action="{{ route('category.update', $category->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'value' => $category->name,
                'required' => true,
                ])

            @component('components.button')
                @lang('Envoyer')
            @endcomponent

        </form>

    @endcomponent            

@endsection

