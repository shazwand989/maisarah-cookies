@extends('layouts.customer')

@section('content')
    <div class="row">
        {{-- Greting --}}
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Welcome back, {{ Auth::user()->name }}!</h3>
                    <p>Here's what's happening with your business today.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
