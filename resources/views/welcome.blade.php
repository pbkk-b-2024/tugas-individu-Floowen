@extends("layouts.layout")

@section("title", "Homepage")

@section("content")
    <div class="content">
        <h1 class="font-bold text-3xl">Welcome to the Home Page</h1>
        <p class="py-2">
            Tugas 3 PBKK
        </p>
        @if(Auth::user() === null)
            <h3>You are currently not logged in</h3>
        @else
            <h3>Welcome <span class="font-bold">{{ Auth::user()->name }}</span></h3>
            <h3>Your Role is <span class="font-bold">{{ Auth::user()->role }}</span></h3>
        @endif
    </div>
@endsection
