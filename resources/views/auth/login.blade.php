@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="card w-96 bg-base-100 shadow-xl mx-auto">
        <h1 class="text-center font-bold text-lg sm:text-xl md:text-2xl mt-6">Login</h1>
        <div class="card-body">
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <x-text-input type="text" class="input input-bordered" name="email" value="{{ Session::get('email') }}" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <x-text-input type="password" class="input input-bordered" name="password"
                        value="{{ old('password') }}" />
                </div>
                <div class="form-control mt-6">
                    <button class="btn btn-secondary">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
