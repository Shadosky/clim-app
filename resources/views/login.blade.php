@extends('layouts.default')
@section('content')
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Login</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp"
                           placeholder="Enter login">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember Password</label>
                    </div>
                </div>
                <a class="btn btn-primary btn-block" href="index.html">Login</a>
            </form>
        </div>
    </div>
@stop
