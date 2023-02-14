<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html lang="en">
    <title>Shoutout</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');

        *{
            font-family: 'Roboto Slab', serif;
        }

        body{
            background: #151419;
        }

/* sidebar */
#wrapper {
  padding-left: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
#sidebar-wrapper {
  z-index: 1;
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #3B374A;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
/* Sidebar Styles */

.sidebar-nav {
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}
.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px;
}
.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: #E0DDFA;
}
.sidebar-nav li a:hover {
  text-decoration: none;
  color: white;
  background: #634BFF;
}
@media(min-width:768px) {
  #wrapper {
    padding-left: 250px;
  }
  #wrapper.toggled {
    padding-left: 0;
  }
  #sidebar-wrapper {
    width: 250px;
  }
  #wrapper.toggled #sidebar-wrapper {
    width: 0;
  }
  #page-content-wrapper {
    padding: 20px;
    position: relative;
  }
  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
  }
}
#wrapper #sidebar-wrapper .profile h4{
color: #E0DDFA;
text-align: center;
margin: 10px 0 5px;
}
#wrapper #sidebar-wrapper .profile p{
color: rgb(206, 204, 253);
text-align: center;
font-size: 14px;
}
#wrapper #sidebar-wrapper .profile img{
display: block;
width: 100px;
height: 100px;
border-radius: 50%;
margin: 0 auto;
margin-top: 10px;
}

/*Profile body*/
#pbleft{
  float: left;
  width: 50%
} 
#pbright{
  float: left;
  width: 50%
} 
    </style>
</head>
<body>
   <div id="wrapper">
        <!--sidebar-->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            <div class="profile"><img src="./img/1.jpg" alt="">
                <h4>Shirone Fortuno</h4>
                <p>Full-stack Web Developer</p>
            </div>
                
                </li>
                <ul class="sidebar-nav">
                <li><h4 style="color: #E0DDFA;">Profile</h4></li>
                </ul>
                <li><a href="#"> 
                    <span><i class="fa-solid fa-message"></i></span>
                    <span> Messages</span></a></li>
                
                <li><a href="#">
                    <span><i class="fa-solid fa-signs-post"></i></span>
                    <span> Posts</span></a></li>

                <li><a href="#">
                    <span><i class="fa-regular fa-image"></i></span>
                    <span> Gallery</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: #E0DDFA;">Entertainment</h4></li>

                <li><a href="#"> 
                    <span><i class="fa-solid fa-tv"></i></span>
                    <span> Watch Videos</span></a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-music"></i></span>
                    <span> Listen to Music</span</a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-podcast"></i></span>
                    <span> Podcast</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: #E0DDFA;">Engagements</h4></li>

                <li><a href="#"> 
                    <span><i class="fa-solid fa-user-group"></i></span>
                    <span> Friends</span></a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-users"></i></span>
                    <span> Followers</span></a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-user-plus"></i></span>
                    <span> Following</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: #E0DDFA;">Activities</h4></li>

               <li><a href="#">
                    <span><i class="fa-solid fa-store"></i></span>
                    <span> Marketplace</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: #E0DDFA;">Account</h4></li>
                
                    <li><a href="#">
                    <span><i class="fa-solid fa-gear"></i></span>
                    <span> Settings</span></a></li>
                    
                    <li><a href="#">
                    <span><i class="fa-solid fa-sliders"></i></span>
                    <span> Others</span></a></li>
                    
                    <li><a href="#">
                    <span><i class="fa-solid fa-right-from-bracket"></i></span>
                    <span> Log Out</span></a></li>
            </ul>
        </div>
                      <!--profilebody content-->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">         
                       </div>
                      <div class="column">
                      <div class="row">
                          <div class="col md-4" style="background: white">FIRST ROW CONTENT</div>
                          <div class="col md-4" style="background: yellow">SECOND ROW CONTENT</div>
                          <div class="col md-4" style="background: lightpink">THIRD ROW CONTENT</div>
                      </div>

                      <div id="pbleft" style="background: lightyellow">FIRST DIVISION CONTENT</div>
                      <div id="pbright" style="background: lightgreen;">SECOND DIVISION CONTENT</div> 
                     
                      <div class="row">
                          <div class="col md-4" style="background: white">FIRST ROW CONTENT</div>
                          <div class="col md-4" style="background: yellow">SECOND ROW CONTENT</div>
                          <div class="col md-4" style="background: lightpink">THIRD ROW CONTENT</div>
                      </div>
                      </div> 
   </div>
</body>
</html>