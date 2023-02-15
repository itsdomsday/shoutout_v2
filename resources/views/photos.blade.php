@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <div class="col-md-6">
            <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <div class="card-body">
                    <h1 class="fw-bold m-3" style="color: #E0DDFA;">{{ $user->name }}'s photos</h1>
                    <hr>
                </div>

                <!-- Display user's photos -->
                @foreach ($user->shouts->where('image', '!=', null)->sortBy('updated_at')->reverse() as $photo)
                <div class="card m-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                    <div class="card-body">
                        <div>
                            <a href="{{ route('viewshout', $photo->id) }}"><img class="img-fluid" src="{{ Storage::url('public/images/'.$photo->image) }}"></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @include('layouts.trending')
    </div>
</div>
@endsection