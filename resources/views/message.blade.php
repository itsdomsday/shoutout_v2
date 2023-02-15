@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.sidebar')
</div>
<div class="col-md-9 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card"style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA; height: 100vh;" >
                            <h2 class="py-3 px-3">messages</h2>
                            <div class="card-body">
                                <div class="card" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                                    <div class="card-body">
                                        <h3>name</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente sit debitis, repellat ab non voluptatum nemo eligendi fuga, fugiat eaque quod distinctio omnis beatae eum consequatur dolorum quasi? Quia, iste.</p>
                                    </div>
                                </div>
                                <div class="card" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                                    <div class="card-body">
                                        <h3>name</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente sit debitis, repellat ab non voluptatum nemo eligendi fuga, fugiat eaque quod distinctio omnis beatae eum consequatur dolorum quasi? Quia, iste.</p>
                                    </div>
                                </div>
                                <div class="card" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                                    <div class="card-body">
                                        <h3>name</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente sit debitis, repellat ab non voluptatum nemo eligendi fuga, fugiat eaque quod distinctio omnis beatae eum consequatur dolorum quasi? Quia, iste.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA; height: 100vh;">
                            <div class="card-header text-center p-3">
                                <img src="https://st3.depositphotos.com/6672868/13701/v/600/depositphotos_137014128-stock-illustration-user-profile-icon.jpg" class="rounded-circle float-left img-thumbnail" alt="..." style='width: 70px; height: 70px;'>
                                    <br>
                                    <br>
                                <span>name</span>
                                <br>
                                <span>email</span>
                            </div>
                            <div class="container border border-light mt-3 rounded pt-5" style="height:700px; overflow:auto; display: flex; flex-direction: column-reverse;">
                                <!-- Chat Area -->
                                <div id="chatarea">
                                    <div class="row px-3" >
                                        <div class="col-md-7">
                                            <div class="alert" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id vero obcaecati quibusdam, ullam suscipit beatae molestias, modi perspiciatis neque cupiditate velit ex harum voluptatem quisquam quidem esse? Amet, omnis?
                                            </div>
                                            <small class="text-end" style="font-size: 75%;color:  #E0DDFA;">time</small>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="alert" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id vero obcaecati quibusdam, ullam suscipit beatae molestias, modi perspiciatis neque cupiditate velit ex harum voluptatem quisquam quidem esse? Amet, omnis?
                                            </div>
                                            <small class="text-end" style="font-size: 75%;color:  #E0DDFA;">time</small>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="alert" style="background-color: #3B374A; border-color: #634BFF; color: #E0DDFA;">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla id vero obcaecati quibusdam, ullam suscipit beatae molestias, modi perspiciatis neque cupiditate velit ex harum voluptatem quisquam quidem esse? Amet, omnis?
                                            </div>
                                            <small class="text-end" style="font-size: 75%;color:  #E0DDFA;">time</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 pb-4 py-2">
                                <div class="col-md-9">
                                    <input id="newMessageArea" type="text" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <button id="newMessageButton" class="btn btn-dark">Send ➡</button>
                                </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
@endsection