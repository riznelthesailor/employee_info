@extends('layouts.auth')

@section('auth_card')
<div class="card sm:w-3/4 sm:justify-self-start h-screen sm:h-4/5">
    <form action="{{ route('signup') }}" method="post">
        @csrf
        <div class="grid place-items-center content-evenly h-full">
            <div class="w-full lg:w-11/12 xl:w-4/5">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" value="{{ old('username') }}" class="input-regular @error('username') border-red-500 @enderror"/>
                @error('username')
                    <div class="text-red-500 mt-2 text-xs">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="w-full lg:w-11/12 xl:w-4/5">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}" class="input-regular @error('email') border-red-500 @enderror"/>
                @error('email')
                    <div class="text-red-500 mt-2 text-xs">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="w-full lg:w-11/12 xl:w-4/5">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Choose a password" value="" class="input-regular @error('password') border-red-500 @enderror"/>
                @error('password')
                    <div class="text-red-500 mt-2 text-xs">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="w-full lg:w-11/12 xl:w-4/5">
                <label for="password_confirmation" class="sr-only">Password again</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" value="" class="input-regular"/>
            </div>
            <div class="w-full lg:w-11/12 xl:w-4/5 flex justify-between">
                <a href="{{ route('welcome') }}">
                    <button type="button" class="btn-regular w-24 lg:w-36 bg-red-200">Go back</button>
                </a>
                <button type="submit" class="btn-regular w-24 lg:w-36">Sign up</button>
            </div>
        </div>
    </form>
</div>
@endsection
