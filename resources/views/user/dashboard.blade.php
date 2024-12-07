@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
    <div class="dashboard-container">
        <h1 class="welcome-message">Welcome, {{ Auth::user()->name }}!</h1>
        <p>Your email: {{ Auth::user()->email }}</p>
        {{-- go to my profile page --}}
        <a href="{{ route('my-profile') }}" class="btn btn-primary">View / Get Profile</a>
    </div>
@endsection
