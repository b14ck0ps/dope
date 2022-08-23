@extends('layout.main')
@push('title')
    <title>{{ $title }}</title>
@endpush
@section('main-section')
    <div class="container" style="margin-left: 500px">
        <div class="card w-50 max-auto">
            <div class="container p-5">
                <h2 class="text-center">{{ $title }}</h2>
                <form action="{{ url('/') }}/{{ $url }}" method="POST">
                    @csrf
                    <x-input label="Userame" type="text" name="username" msg=""
                        value="{{ $customer->username ?? '' }}" />
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <x-input label="Email" type="email" name="email" value="{{ $customer->email ?? '' }}" />
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <x-input label="Password" type="password" name="password" value="{{ $customer->password ?? '' }}" />
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <x-input label="Confirm Password" type="password" name="password_confirmation"
                        value="{{ $customer->password ?? '' }}" />
                    <input type="submit" class="btn btn-primary" value="{{ $title }}">
                </form>
            </div>
        </div>
    </div>
@endsection
