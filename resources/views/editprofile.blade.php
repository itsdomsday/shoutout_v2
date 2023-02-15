@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <div class="col-md-6">
            <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <div class="card-body">
                    <h1 class="fw-bold m-3" style="color: #E0DDFA;">Edit Profile</h1>
                    <hr>
                    <form action="{{ route('editprof', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <input type="text" class="form-control" id="bios" name="bios" value="{{ $user->bios }}">
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