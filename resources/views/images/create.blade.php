@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Ajouter une image')
        @endslot

        <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('image') ? ' is-invalid' : '' }}">
                <label class="custom-file">
                    <input type="file" id="image" name="image" class="form-control{{ $errors->has('image') ? ' is-invalid ' : '' }}custom-file-input" required>
                    <span class="custom-file-control form-control-file"></span>
                    @if ($errors->has('image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </label>
            </div>

            <div class="form-group">
                <label for="category_id">@lang('Catégorie')</label>
                <select id="category_id" name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            @include('partials.form-group', [
                'title' => __('Description (optionnelle)'),
                'type' => 'text',
                'name' => 'description',
                'required' => false,
                ])   

            @component('components.button')
                @lang('Envoyer')
            @endcomponent

        </form>

    @endcomponent            

@endsection

@section('script')

    <script>
        $(function() {
            $('input[type="file"]').on('change',function(){
              let fileName = $(this).val().replace(/^.*[\\\/]/, '')
              $(this).next('.form-control-file').html(fileName)
            })
        })
    </script>

@endsection
