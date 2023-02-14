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
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Profile Picture:</label>
                            <input class="form-control form-control-sm" id="avatar" name="avatar" type="file" accept=".gif, .jpg, .jpeg, .png, .jfif">
                        </div>
                        <div class="mb-3">
                            <label for="banner" class="form-label">Banner:</label>
                            <input class="form-control form-control-sm" id="banner" name="banner" type="file" accept=".gif, .jpg, .jpeg, .png, .jfif">
                        </div>
                        <div class="mb-3">
                            <label for="bios" class="form-label">Bio:</label>
                            <textarea class="form-control" id="bios" name="bios" rows="3"></textarea>
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