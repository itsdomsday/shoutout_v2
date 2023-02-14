@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <div class="col-md-6">
            <div class="card" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <div class="card">
                    <img src="https://www.slntechnologies.com/wp-content/uploads/2017/08/ef3-placeholder-image.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="card-body p-5">
                    <img src="https://st3.depositphotos.com/6672868/13701/v/600/depositphotos_137014128-stock-illustration-user-profile-icon.jpg" class="rounded-circle float-left img-thumbnail" alt="..." style='width: 100px; height: 100px;'>
                    <h1 class="fw-bold pt-3" style="color: #E0DDFA;">{{ $user->name }}</h1>
                    <p style="color: #E0DDFA;">{{ $user->email }}</p>
                    <span class="badge text-bg-dark">Joined {{ $user->created_at->diffForHumans() }}</span>

                    <!-- Posting user bio -->
                    <p class="lead mt-3 mb-4" style="color: #E0DDFA;">
                        bios
                    </p>
                    <!-- End -->

                    <hr />
                    <a href="#" class="btn m-1 float-end" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">View Photos →</a>
                </div>
                <div class="card" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                    <div class="card-body p-5">
                        <h1 class="fw-bold mb-5" style="color: #E0DDFA;">{{ $user->name }}'s shouts</h1>

                        <!-- If active user successfully posts a shout -->
                        @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                        <!-- End -->

                        <!-- If active user views their own profile, posting Shout appears -->
                        @if ($user->id == Auth::user()->id)
                        <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                            <div class="card-body">
                                <form action="{{ route('post_shoutpf') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input class="form-control" placeholder="Shout here!" type="text" name="shout">
                                    <button type="submit" class="btn float-end m-1" style="background-color: #634BFF; color: white;">Shout!</button>
                                </form>
                            </div>
                        </div>
                        @endif
                        <!-- End -->

                        <!-- Posting user profile's shouts -->
                        @foreach($user->shouts as $shout)
                        <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                            <div class="card-body">
                                <h5 class="fw-bold"><a href="{{ route('profile', $shout->user->id) }}" style="text-decoration: none; color: #E0DDFA;">{{ $shout->user->name }}</a><a href="" class="float-end dropdown-toggle" data-bs-toggle="dropdown" style="text-decoration: none; color: #E0DDFA;"></a>
                                    <!-- Dropdown menu for each shout -->
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('profile', $shout->user->id) }}" class="dropdown-item">View Profile</a></li>

                                        <!-- If shout belongs to active user, delete function present -->
                                        @if ($shout->user_id == Auth::user()->id)
                                        <li><a href="{{ route('del_shoutpf', $shout->id) }}" class="dropdown-item">Delete</a></li>
                                        @endif
                                        <!-- End -->

                                    </ul>
                                    <!-- End -->
                                </h5>
                                <p>{{ $shout->shout }}</p>
                                <small class="float-end">{{ $shout->created_at->diffForHumans() }}</small>

                                <!-- +1 function for each shout -->
                                <form action="{{ route('plus_onepf') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="shout_id" value="{{ $shout->id }}">
                                    <input type="hidden" name="plus" value="1">

                                    <button type="submit" class="btn btn-sm rounded-pill position-relative" onclick="style='background-color: #634BFF;'" style="background-color: #3B374A; border-color: #634BFF; color: white;">+1

                                        <!-- +1 count -->
                                        @foreach($shout->plus as $plus)
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ $shout->plus->count() }}</span>
                                        @endforeach
                                        <!-- End -->

                                    </button>
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
                                            <li><a href="{{ route('del_compf', $comment->id) }}" class="dropdown-item">Delete</a></li>
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
                                <form action="{{ route('post_compf') }}" method="POST">
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
        </div>
        @include('layouts.trending')
    </div>
</div>
</div>
</div>
</div>
@endsection