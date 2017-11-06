@extends('layouts.app')

@section('content')

    <main class="container-fluid">
        <h1>
            {{ $countOrphans }} {{ trans_choice(__('image orpheline|images orphelines'), $countOrphans) }}
            @if($countOrphans)
                <a class="btn btn-danger pull-right" href="{{ route('maintenance.destroy') }}" role="button">@lang('Supprimer')</a>
            @endif
        </h1>

        <div class="card-columns">
            @foreach($orphans as $orphan)
                <div class="card">
                    <img class="img-fluid" src="{{ url('thumbs/' . $orphan) }}" alt="image">
                </div>
            @endforeach
        </div>
    </main>

@endsection

@section('script')

    <script>
        $(function() {

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            })

            $('a.btn-danger').click(function(e) {
                let that = $(this)
                e.preventDefault()
                swal({
                    title: '@lang('Vraiment supprimer toutes les photos orphelines ?')',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: '@lang('Oui')',
                    cancelButtonText: '@lang('Non')'
                }).then(function () {
                    $.ajax({
                        url: that.attr('href'),
                        type: 'DELETE'
                    })
                        .done(function () {
                            location.reload();
                        })
                        .fail(function () {
                            swal({
                                title: '@lang('Il semble y avoir une erreur sur le serveur, veuillez réessayer plus tard...')',
                                type: 'warning'
                            })
                        }
                    )
                })
            })
        })
    </script>

@endsection
