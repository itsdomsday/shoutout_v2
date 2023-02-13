@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.sidebar')
        <div class="col-md-6">
            <div class="card" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <div class="card">
                <img src="https://www.slntechnologies.com/wp-content/uploads/2017/08/ef3-placeholder-image.jpg" class="img-fluid" alt="Responsive image"style=''>
                </div>
                <div class="card-body p-5">
                <img src="https://st3.depositphotos.com/6672868/13701/v/600/depositphotos_137014128-stock-illustration-user-profile-icon.jpg" class="rounded-circle float-left img-thumbnail" alt="..." style='width: 100px; height: 100px;'>
                    <h1 class="fw-bold pt-3" style="color: #E0DDFA;">{{ $user->name }}</h1>
                    <p style="color: #E0DDFA;">{{ $user->email }}</p>
                    <span class="badge text-bg-dark">Joined {{ $user->created_at->diffForHumans() }}</span>
                    <p class="lead mt-3 mb-4" style="color: #E0DDFA;">
                        bios
                    </p>
                    <hr />
                    <a href="#" class="btn m-1 float-end" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">View Photos →</a>
                </div>
                <div class="card" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <div class="card-body p-5">
                    <h1 class="fw-bold mb-5" style="color: #E0DDFA;">{{ $user->name }}'s shouts</h1>
                    @if (session('success'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if ($user->id == Auth::user()->id)
                    <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                    <div class="card-body">
                        <form action="{{ route('createshout') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input class="form-control" placeholder="Shout here!" type="text" name="shout">
                            <button type="submit" class="btn float-end m-1" style="background-color: #634BFF; color: white;">Shout!</button>
                        </form>
                    </div>
                    </div>
                    @endif
                    @foreach($user->shouts as $shout)
                    <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                        <div class="card-body">
                            <h5 class="fw-bold"><a href="{{ route('profile', $shout->user->id) }}" style="text-decoration: none; color: #E0DDFA;">{{ $shout->user->name }}</a><a href="" class="float-end dropdown-toggle" data-bs-toggle="dropdown" style="text-decoration: none; color: #E0DDFA;"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('profile', $shout->user->id) }}" class="dropdown-item">View Profile</a></li>
                                    @if ($shout->user_id == Auth::user()->id)
                                    <li><a href="{{ route('deleteshout', $shout->id) }}" class="dropdown-item">Delete</a></li>
                                    @endif
                                </ul>
                            </h5>
                            <p>{{ $shout->shout }}</p>
                            <small class="float-end">{{ $shout->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
                </div>
                    @include('layouts.trending')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection