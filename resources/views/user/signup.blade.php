@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Sign up</h1>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
        <form method="post" action="{{ route('user.signup') }}">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection