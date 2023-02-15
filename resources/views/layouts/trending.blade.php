<div class="col-md-3">
    <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
        <div class="card-body">
            <h5 class="fw-bold">Trending</h5>

            <!-- Display trending -->
            @foreach($shouts->take(10) as $shout)
            <div class="card px-2 pt-2 mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                <small><a href="{{ route('profile', $shout->user->id) }}" style="text-decoration: none; color: #E0DDFA;"><strong>{{ $shout->user->name }}</strong></a>
                    <small class="fw-light">{{ $shout->created_at->diffForHumans() }}</small>
                    <p>{{ $shout->shout }}</p>
                </small>
            </div>
            @endforeach
            <!-- End -->
            <footer>
                <hr>
                <p class="text-center"><small>© 2023 ShoutOut</small></p>
            </footer>
        </div>
    </div>
</div>