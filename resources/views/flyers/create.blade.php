@extends('layout')

@section('content')

    <h1>Selling Your Home?</h1>

    <hr>

    <div class="row">
        <form method="POST" action="/flyers" enctype="multipart/form-data" class="col-md-6">

            @if($errors->any())
                <ul class="alert alert-danger" style="list-style-type:none;">
                    @foreach($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif

            @include('flyers.form')


        </form>
    </div>


@stop