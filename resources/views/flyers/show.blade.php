@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <h1>{!! $flyer->street  !!}</h1>

            <h2>{!! $flyer->price  !!}</h2>

            <hr />

            <div class="description">{!! nl2br($flyer->description) !!}</div>
        </div>

        <div class="col-md-9">

            @foreach($flyer->photos as $photo)

                <img src="/{{ $photo->path }}" alt="" class="img-responsive" />

            @endforeach
        </div>
    </div>


    <hr />

    <h1>Add Your Photos</h1>

    <form id="addPhotosForm" class="dropzone" method="POST" action="{{ route('store_photo_path', [$flyer->zip, $flyer->street]) }}">
        {{ csrf_field() }}
    </form>


@stop

@section('scripts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <script>
        Dropzone.options.addPhotosForm = {
            paramName:      'photo',
            maxFileSize:    8,
            acceptedFiles:  '.jpg, .jpeg, .png, .bmp'
        }
    </script>

@stop