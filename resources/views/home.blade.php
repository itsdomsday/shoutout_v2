@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <div class="col-md-6">

            <!-- If active user successfully posts a shout -->
            @if (session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <!-- End -->

            <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <div class="card-body">
                    <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">

                        <!-- Shout post option -->
                        <div class="card-body">
                            <form action="{{ route('post_shout') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input class="form-control" placeholder="Shout here!" type="text" name="shout" required>
                                <div class="float-end">
                                    <input type="file" class="form-control d-none" name="image" id="image" accept=".gif, .jpg, .jpeg, .png, .jfif">
                                    <label for="image">Add a photo</label>
                                    <button type="submit" class="btn m-2" style="background-color: #634BFF; color: white;">Shout!</button>
                                </div>
                            </form>
                        </div>
                        <!-- End -->

                    </div>
                </div>
                <div class="card-body">
                    <div class="card-header fw-bold">Latest Shouts</div>

                    <!-- Shout section -->
                    @foreach($shouts as $shout)
                    <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                        <div class="card-body">
                            <h5 class="fw-bold"><a href="{{ route('profile', $shout->user->id) }}" style="text-decoration: none; color: #E0DDFA;">{{ $shout->user->name }}</a>
                            <a href="" class="float-end dropdown-toggle" data-bs-toggle="dropdown" style="text-decoration: none; color: #E0DDFA;"></a>
                                <div class="float-end">

                                    <!-- Dropdown menu for each shout -->
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('viewshout', $shout->id) }}" class="dropdown-item">View Shout</a></li>
                                        <li><a href="{{ route('profile', $shout->user->id) }}" class="dropdown-item">View Profile</a></li>

                                        <!-- If shout belongs to active user, delete function present -->
                                        @if ($shout->user_id == Auth::user()->id)
                                        <li><a href="{{ route('del_shout', $shout->id) }}" class="dropdown-item">Delete</a></li>
                                        @endif
                                        <!-- End -->

                                    </ul>
                                    <!-- End -->
                                </div>
                                </h5>
                            <p>{{ $shout->shout }}</p>

                            @if($shout->image != null)
                            <img class="img-fluid" src="{{ Storage::url('public/images/'.$shout->image) }}">
                            @endif

                            <!-- +1 function for each shout -->
                            <form action="{{ route('plus_one') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="shout_id" value="{{ $shout->id }}">
                                <input type="hidden" name="plus" value="1">

                                <button type="submit" class="btn btn-sm rounded-pill position-relative mt-3" onclick="style='background-color: #634BFF;'" style="background-color: #3B374A; border-color: #634BFF; color: white;">+1

                                    <!-- +1 count -->
                                    @foreach($shout->plus as $plus)
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ $shout->plus->count() }}</span>
                                    @endforeach
                                    <!-- End -->

                                </button>
                                <small class="fw-light float-end mt-3">{{ $shout->created_at->diffForHumans() }}</small>
                            </form>
                            <!-- End -->

                            <hr>

                            <!-- Display comment per shout -->
                            @foreach($shout->comment as $comment)
                            <div class="card px-2 pt-2 mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                                <small><a href="{{ route('profile', $comment->user->id) }}" style="text-decoration: none; color: #E0DDFA;"><strong>{{ $comment->user->name }}</strong></a>
                                    <small class="fw-light">{{ $comment->created_at->diffForHumans() }}</small>

                                    <a href="" class="float-end dropdown-toggle" data-bs-toggle="dropdown" style="text-decoration: none; color: #E0DDFA;"></a>

                                    <!-- Dropdown menu for each comment -->
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('profile', $comment->user->id) }}" class="dropdown-item">View Profile</a></li>

                                        <!-- If comment belongs to active user, delete function present -->
                                        @if ($comment->user_id == Auth::user()->id)
                                        <li><a href="{{ route('del_com', $comment->id) }}" class="dropdown-item">Delete</a></li>
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
                            <form action="{{ route('post_com') }}" method="POST">
                                @csrf
                                <input type="text" class="form-control" placeholder="Add a side comment..." name="comment" required>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="shout_id" value="{{ $shout->id }}">
                                <button type="submit" class="d-none"></button>
                            </form>
                            <!-- End -->

                        </div>
                    </div>
                    @endforeach
                    <!-- End -->
                </div>
            </div>
        </div>
        @include('layouts.trending')
    </div>
</div>
@endsection