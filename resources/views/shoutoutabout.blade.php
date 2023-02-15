<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>ShoutOut</title>
    <style>
        body{
            
            background: #151419;
        }

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .about{
            width: 100%;
            padding: 78px 0px;
           }

        .about img{
            height: auto;
            width: 420px;
            border-radius: 5px;
        }

        .about-text{
            width: 550px;
            color: #E0DDFA;
        }

        .main{
            width: 1130px;
            max-width: 95%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-top: 100px;
        }

        #main2{
            width: 1130px;
            max-width: 95%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 100px;
        }

        #about{
            color: #E0DDFA;
            font-size: 80px;
            text-transform: capitalize;
            margin-bottom: 70px;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .about-text h4{
            color: #E0DDFA;
            font-size: 25px;
            text-transform: capitalize;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }

        .about-text h5{
            color: #E0DDFA;
            font-size: 25px;
            text-transform: capitalize;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }

        .about-text h2{
            color: #E0DDFA;
            font-size: 50px;
            margin-top: 10%;
            letter-spacing: 5px;
        }

        span{
            color: #634BFF;
        }

        .about-text p{
            color: #E0DDFA;
            font-size: 100px;
        }

        .section-1{
            width: 99.1vw;
            height: 100vh;
            background-position: center;
            background-size: cover;
            background-image: url(https://images.pexels.com/photos/207896/pexels-photo-207896.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1); 
            background-attachment: fixed;
        }

        .section-1 h1{
            display: flex;
        }

        .section-1 p{
            color: #E0DDFA;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 80px;
            margin-top: 10%;
        }

        .reveal{
            position: relative;
            transform: translateY(150px);
            opacity: 0;
            transition: all 2s ease;
        }

        .reveal.active{
            transform: translateY(0px);
            opacity: 1;
        }

        @media all and (max-width: 1500px){
            .about-text{
                font-size: 50px;
                margin-top: 50px;
            }
            .about img{
                overflow: hidden;
                margin-top: 50px;
            }

            .about-text p{
                font-size: 50px;
                margin-left: 10px;
            }

            .section-1 p{
                font-size: 50px;
                margin-top: 50px;
        }  
           .section-1{
                width: 100vw;
        }

            .endbg p{ 
                font-size: 50px;
                margin-top: 50%;
                }

                #endbgp{
                margin-top: 20%
            }
            }
            
        @media all and (max-width: 500px){
            .about-text{
                font-size: 20px;
                margin-top: 10px;
            }
            .about img{
                overflow: hidden;
                margin-top: 10px;
            }

            .about-text p{
                font-size: 20px;
                margin-left: 10px;
            }

            .section-1 p{
                font-size: 20px;
                margin-top: 10px;
             }

            .section-1{
                 width: 100vw;
                 color: #E0DDFA;
                 display: flex;
                 justify-content: center;
                 align-items: center;
             }

             .endbg p{ 
                font-size: 50px;
                margin-top: 50%;
            }

            #endbgp{
                margin-top: 20%
            }
                
            }

            
            .endbg {
        	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	        background-size: 400% 400%;
	        animation: gradient 15s ease infinite;
            color: #E0DDFA;
	        height: 80vh;
            width: 100vw;
            text-align: right; 
            margin-right: 20px;
            font-size: 150px; 
            max-width: 100%;
            overflow-x: hidden;
            }

            @keyframes gradient {
	        0% {
		    background-position: 0% 50%;
	        }
	        50% {
		    background-position: 100% 50%;
	        }
	        100% {
		    background-position: 0% 50%;
        	}
            }

            .navbar{
                background-color: #151419;
            }

            .navbar a{
                color: white;
                font-size: 25px;
                margin-left: 20px;
            }

            .navbar a:hover{
                color: #634BFF;
            }


            .navbar a:focus{
                color: #634BFF;
            }
    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg">
  <a class="navbar-brand" href="#" style="font-size: 40px; color: white;">ShoutOut</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('profile', Auth::user()->id) }}">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/home') }}">Message</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('settings', Auth::user()->id) }}">Settings</span></a>
      </li>
    </ul>
  </div>
</nav>
    <section class="about">
        <div id="about"><h1 class="reveal"></div>
        <div class="main">
            <div class="about-text reveal">
                <p>Give people the <span>power</span> to build community</p>
            </div>
            <img src="https://images.pexels.com/photos/1068205/pexels-photo-1068205.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="reveal">
        </div>

        <div class="main">
        <img src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t39.8562-6/314730002_817565139472772_8622744997054410343_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6825c5&_nc_ohc=ovmu8aogJjkAX8iXL2Y&_nc_ht=scontent.fmnl4-2.fna&oh=00_AfAOuuxxOwTaehi6-4GhqyXy1vECa2IBThRUCykyptKLjg&oe=63EEDC20" alt="" class="reveal">
        <div class="about-text reveal">
                <p>and bring the world closer <span>together</span></p>
            </div>
        </div>

        <div class="main">
            <img src="https://images.pexels.com/photos/3280130/pexels-photo-3280130.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="reveal">
        </div>
    </section>

        <div class="section-1 box">
            <div class="container reveal">
                <h1></h1>
            <p> <strong>We’re commited to fostering a safe and supportive community for everyone</strong></p>
            <p><strong><span>Community <i class="fa-solid fa-arrow-right" style="margin-left: 20px;"></span></i></strong></p>
        </div>
        </div>

        <section class="about">
        <div id="about"></div>
        <div class="main">
            <div class="about-text reveal">
                <h2>Explore What’s <span>New</span></h2>
                <h3>Our continuously evolving features empower you to express yourself in new ways.</h3>
            </div>
            <img src="https://images.pexels.com/photos/6998799/pexels-photo-6998799.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="reveal">
        </div>

        <div class="main">
        <img src="https://images.pexels.com/photos/5082576/pexels-photo-5082576.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="reveal">
        <div class="about-text reveal">
                 <h2><span>Discover</span> Reels</h2>
                <h3>Create, share, and watch short, entertaining videos on Instagram.</h3>
            </div>
        </div>

        <div class="main">
            <div class="about-text reveal">
                <h2>Have a <span>conversation</span></h2>
                <h3>Send messages, photos and videos to a friend or select group of people.</h3>
            </div>
            <img src="https://images.pexels.com/photos/3771127/pexels-photo-3771127.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="reveal">
        </div>
        
    </section>

    <section class="endbg">
         <div class="container reveal">
            <p>Our community is evolving,</p>
            <p style="text-align: left;" id="endbgp"> so are we</p>
    </section>

    <div class="main">
            <div class="about-text reveal">
                <h2><span>Grow</span> with us</h2>
                <h3>Share and grow your brand with our diverse, global community.</h3>
            </div>
            <img src="https://images.pexels.com/photos/6551313/pexels-photo-6551313.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="overflow-y: hidden" alt="" class="reveal">
        </div>

        <div class="main">
            <p style="color: White; Font-size: 50px; margin-top: 10%">Download for iOS/Android.</p>
        </div>     
        <div class="main" id="main2" style="margin-top: .1%; margin-bottom: 5%">
            <img src="http://www.steamyconcepts.com/wp-content/uploads/Steamy-Concepts-Mobile-App-Store-Apple-iOS.png" style="width: auto; height: 50px; border-radius: 5%;" alt="">
            <img src="https://www.ft.com/__origami/service/image/v2/images/raw/https%253A%252F%252Fwww.ft.com%252F__assets%252Fcreatives%252Ftour%252Fapps%252Fgoogle-play-badge-3x.png?source=next-tour-page" style="width: auto; height: 50px; border-radius: 5%; margin-left : 10px;" alt="">
        </div>

    <script type="text/javascript">
        window.addEventListener('scroll', reveal);

        function reveal(){
            var reveals = document.querySelectorAll('.reveal');

            for(var i = 0; i < reveals.length; i++){

                var windowheight = window.innerHeight;
                var revealtop = reveals[i].getBoundingClientRect().top;
                var revealpoint = 150;

                if(revealtop < windowheight - revealpoint){
                    reveals[i].classList.add('active');
                }
                else{
                    reveals[i].classList.remove('active');
                }
            }
        }
    </script>
</body>
</html>