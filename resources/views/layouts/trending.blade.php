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
<div class="col-lg-3 mt-3 d-none d-lg-block">
    <div class="position-sticky d-flex flex-column align-text-center" style="height: 100vh; top: 0px;">
        <div class="search-bar">
            <div class="row">
                <form action="">
                    <div class="col-8">
                    <input type="text" class="form-control mb-3" placeholder="Search">
                    </div>
                    <div class="col-4">
                    <button type="submit" class=" m-2 rounded" style="background-color: #634BFF; color: white;">search</button>
                    </div>
                    
                </form>
            </div>
        </div>
    <div class="card mb-3" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
        <div class="card-header">Trending</div>

                <div class="card-body">
                    
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</div>
    