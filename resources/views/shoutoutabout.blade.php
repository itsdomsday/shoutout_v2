<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ShoutOut</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            background: #151419;
        }

        .hero{
            height: 100vh;
            width: 100%;
            background-repeat: no-repeat;
            background: cover;
            background-position: center;
            background-size: 100%;
        }

        nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 45px;
            padding-left: 8%;
            padding-right: 8%;
        }

        .logo{
            color: white;
            font-size: 35px;
            letter-spacing: 1px;
            cursor: pointer;
        }
        
        span{
            color: #634BFF;
        }

        nav ul li{
            list-style-type: none;
            display: inline-block;
            padding: 10px 25px;
        }

        nav ul li a{
            color: #E0DDFA;
            text-decoration: none;
            font-weight: bold;
            text-transform: capitalize;
        }

        nav ul li a:hover{
            color: #634BFF;
            transition: .4s;
        }

        .btn{
            background-color: #634BFF;
            color: white;
            text-decoration: none;
            border: 2px solid transparent;
            font-weight: bold;
            padding: 10px 25px;
            border-radius: 30px;
            transition: transform .4s;
        }
        
        .btn:hover{
            transform: scale(1.2);
            background: #634BFF;
            border: 2px solid #634BFF;
            cursor: pointer;
            color: white;
        }
    </style>
</head>
<body>
    <div class="hero">
        <nav>
            <h2 class="logo">Shout<span>Out</span></h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <a href="#" class="btn">Subscribe</a>
        </nav>

        <div class="content">
            <h4>Hello, my name is</h4>
        </div>
    </div>
</body>
</html>