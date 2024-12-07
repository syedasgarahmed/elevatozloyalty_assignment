@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
    <div class="dashboard-container">
        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif
        <h1 class="welcome-message">Hello, {{ Auth::user()->name }}!</h1>

        <h3>Your Details:</h3>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Mobile:</strong> {{ Auth::user()->mobile_no }}</p>

        <h3>Address Information:</h3>
        @if ($address)
            <p><strong>Address Line 1:</strong> {{ $address->address_1 }}</p>
            <p><strong>Address Line 2:</strong> {{ $address->address_2 }}</p>
            <p><strong>City:</strong> {{ $address->city }}</p>
            <p><strong>State:</strong> {{ $address->state }}</p>
            <p><strong>Pincode:</strong> {{ $address->pincode }}</p>
        @else
            <p>No address details available.</p>
        @endif

        <a href="{{ route('edit-profile') }}" class="btn btn-primary">Edit Profile</a>
    </div>
@endsection
