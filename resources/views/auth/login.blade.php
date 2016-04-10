@extends('layout')



@section('content')

    <div class="row">
        <dic class="col-md-6 col-md-offset-3">


            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}


                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" id="password" class="form-control" name="password" id="password">
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember"> Remember Me
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>

        </dic>
    </div>



@stop