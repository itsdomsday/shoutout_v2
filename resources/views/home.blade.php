@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <div class="card-header">Welcome, <b><a href="{{ route('profile', Auth::user()->id) }}" style="text-decoration: none; color: #E0DDFA;">{{ Auth::user()->name }}</a></b>!</div>
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-md-6">
            @if (session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <div class="card-header fw-bold">Latest Shouts</div>
                <div class="card-body">
                    <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                        <div class="card-body">
                            <form action="{{ route('createshout') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input class="form-control" placeholder="Shout here!" type="text" name="shout" required>
                                <button type="submit" class="btn float-end m-2" style="background-color: #634BFF; color: white;">Shout!</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @foreach($shouts as $shout)
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
                            <small class="float-end fw-light">{{ $shout->created_at->diffForHumans() }}</small>
                            <form action="{{ route('createplus') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="shout_id" value="{{ $shout->id }}">
                                <input type="hidden" name="plus" value="1">
                                
                                <button type="submit" class="btn btn-sm rounded-pill position-relative" onclick="style='background-color: #634BFF;'" style="background-color: #3B374A; border-color: #634BFF; color: white;">+1
                                @foreach($shout->plus as $plus)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ $shout->plus->count() }}</span>
                                @endforeach
                                </button>
                            </form>
                            <hr>
                            @foreach($shout->comment as $comment)
                            <div class="card px-2 pt-2 mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                                <small><a href="{{ route('profile', $comment->user->id) }}" style="text-decoration: none; color: #E0DDFA;">{{ $comment->user->name }}</a><small class="float-end fw-light">{{ $comment->created_at->diffForHumans() }}</small></small>
                                <small>
                                    <p>{{ $comment->comment }}</p>
                                </small>
                            </div>
                            @endforeach
                            <form action="{{ route('createcomment') }}" method="POST">
                                @csrf
                                <input type="text" class="form-control" placeholder="Add a side comment..." name="comment" required>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="shout_id" value="{{ $shout->id }}">
                                <button type="submit" class="d-none"></button>
                            </form>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <footer>
                        <hr>
                        <p class="text-center"><small>© 2023 ShoutOut</small></p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection