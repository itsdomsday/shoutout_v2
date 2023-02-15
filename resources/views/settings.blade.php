@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <div class="col-md-6">
            <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <div class="card-body">
                    <h1 class="fw-bold m-3" style="color: #E0DDFA;">Settings</h1>
                    <hr>
                    <form action="{{ route('update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="confirmpassword" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
                        </div>
                        <button type="submit" class="btn float-end" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">Save</button>
                    </form>
                </div>
            </div>
        </div>
        @include('layouts.trending')
    </div>
</div>
@endsection