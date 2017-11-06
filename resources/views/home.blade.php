@extends('layouts.app')

@section('content')

  <main class="container-fluid">
    @isset($category)
      <h2 class="text-title mb-3">{{ $category->name }}</h2>
    @endif
    @isset($user)
      <h2 class="text-title mb-3">{{ __('Photos de ') . $user->name }}</h2>
    @endif
    <div class="card-columns">
      @foreach($images as $image)
        <div class="card">
          <a href="{{ url('images/' . $image->name) }}" class="image-link"><img class="card-img-top" src="{{ url('thumbs/' . $image->name) }}" alt="image"></a>
          @isset($image->description)
            <div class="card-body">
              <p class="card-text">{{ $image->description }}</p>
            </div>
          @endisset
          <div class="card-footer text-muted">
            <small><em>
              <a href="{{ route('user', $image->user->id) }}" data-toggle="tooltip" title="{{ __('Voir les photos de ') . $image->user->name }}">{{ $image->user->name }}</a>              
            </em></small>
            <small class="pull-right">
              <em> 
                {{ $image->created_at->formatLocalized('%x') }}
                @adminOrOwner($image->user_id)
                  <a class="form-delete" href="{{ route('image.destroy', $image->id) }}" data-toggle="tooltip" title="@lang('Supprimer cette photo')"><i class="fa fa-trash"></i></a>
                  <form action="{{ route('image.destroy', $image->id) }}" method="POST" class="hide">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  </form>
                @endadminOrOwner         
              </em>
            </small>
          </div>
        </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center">
      {{ $images->links() }}
    </div>
  </main>
@endsection

@section('script')
  <script>
      $(function() {
        $('[data-toggle="tooltip"]').tooltip()

        $('.card-columns').magnificPopup({
          delegate: 'a.image-link',
          type: 'image',
          gallery: { enabled: true }
        });

        $('a.form-delete').click(function(e) {
          e.preventDefault();
          let href = $(this).attr('href')
          $("form[action='" + href + "'").submit()
        })
      })
  </script>
@endsection
