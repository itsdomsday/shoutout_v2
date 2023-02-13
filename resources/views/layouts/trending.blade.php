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