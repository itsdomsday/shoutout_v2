@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <div class="col-md-6">
            <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <div class="card-body">
                    <h5 class="fw-bold"><a href="{{ route('profile', $shouts->user->id) }}" style="text-decoration: none; color: #E0DDFA;">{{ $shouts->user->name }}</a><a href="" class="float-end dropdown-toggle" data-bs-toggle="dropdown" style="text-decoration: none; color: #E0DDFA;"></a>

                        <!-- Dropdown menu for the shout -->
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profile', $shouts->user->id) }}" class="dropdown-item">View Profile</a></li>

                            <!-- If shout belongs to active user, delete function present -->
                            @if ($shouts->user_id == Auth::user()->id)
                            <li><a href="{{ route('del_shout', $shouts->id) }}" class="dropdown-item">Delete</a></li>
                            @endif
                            <!-- End -->

                        </ul>
                        <!-- End -->
                    </h5>

                    <p>{{ $shouts->shout }}</p>

                    @if($shouts->image != null)
                        <img class="img-fluid" src="{{ Storage::url('public/images/'.$shouts->image) }}">
                    @endif

                    <!-- +1 function for the shout -->
                    <form action="{{ route('plus_onevs') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="shout_id" value="{{ $shouts->id }}">
                        <input type="hidden" name="plus" value="1">

                        <button type="submit" class="btn btn-sm rounded-pill position-relative mt-3" onclick="style='background-color: #634BFF;'" style="background-color: #3B374A; border-color: #634BFF; color: white;">+1

                            <!-- +1 count -->
                            @foreach($shouts->plus as $plus)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ $shouts->plus->count() }}</span>
                            @endforeach
                            <!-- End -->

                        </button>
                        <small class="float-end fw-light mt-3">{{ $shouts->created_at->diffForHumans() }}</small>
                    </form>
                    <!-- End -->

                    <hr>

                    <!-- Display comment -->
                    @foreach($shouts->comment as $comment)
                    <div class="card px-2 pt-2 mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                        <small><a href="{{ route('profile', $comment->user->id) }}" style="text-decoration: none; color: #E0DDFA;"><strong>{{ $comment->user->name }}</strong></a>
                            <small class="fw-light">{{ $comment->created_at->diffForHumans() }}</small>

                            <a href="" class="float-end dropdown-toggle" data-bs-toggle="dropdown" style="text-decoration: none; color: #E0DDFA;"></a>

                            <!-- Dropdown menu for each comment -->
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('profile', $comment->user->id) }}" class="dropdown-item">View Profile</a></li>

                                <!-- If comment belongs to active user, delete function present -->
                                @if ($comment->user_id == Auth::user()->id)
                                <li><a href="{{ route('del_comvs', $comment->id) }}" class="dropdown-item">Delete</a></li>
                                @endif
                                <!-- End -->

                            </ul>
                        </small>
                        <!-- End -->

                        <small>
                            <p>{{ $comment->comment }}</p>
                        </small>
                    </div>
                    @endforeach
                    <!-- End -->

                    <!-- Post comment section -->
                    <form action="{{ route('post_comvs') }}" method="POST">
                        @csrf
                        <input type="text" class="form-control" placeholder="Add a side comment..." name="comment" required>
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="shout_id" value="{{ $shouts->id }}">
                        <button type="submit" class="d-none"></button>
                    </form>
                    <!-- End -->

                </div>
            </div>

        </div>
        @include('layouts.trending')
    </div>
</div>
@endsection