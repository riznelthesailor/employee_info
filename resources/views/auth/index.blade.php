@extends('layouts.auth')

@section('auth_card')
<div class="card sm:w-3/4 sm:justify-self-start h-screen sm:h-4/5">
    <div class="grid sm:grid-cols-2 place-items-center content-evenly h-full">
        <div class="col-span-2 text-4xl hidden sm:block" style="font-family: 'Brush Script MT','Segoe UI',sans-serif;">
            Good Day Team!
        </div>
        <div>
            <a href="{{ route('login') }}">
                <button type="button" class="btn-regular sm:w-24 lg:w-36">Log in</button>
            </a>
        </div>
        <div>
            <a href="{{ route('signup') }}">
                <button type="button" class="btn-regular sm:w-24 lg:w-36">Sign up</button>
            </a>
        </div>
        <div class="row-span-2 sm:hidden">&nbsp;</div>
    </div>
</div>
@endsection
