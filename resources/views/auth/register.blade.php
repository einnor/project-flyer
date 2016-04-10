@extends('layout')


@section('content')



    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h1>Register</h1>

            <hr />

            @include('errors')

            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}


                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password: </label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
            </form>


        </div>
    </div>



@stop