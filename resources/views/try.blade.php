<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        padding: 0;
        margin: 0;
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
        width: 100vw;
        background: #151419;
    }

    span{
        font-size: 3em;
    }

    .animation{
        text-align: center;
        text-transform: uppercase;
        font-family: 'roboto',sans-serif;
        font-size: 50px;
        letter-spacing: 1px;
        display: inline-block;
        animation: fadeIn 1.5s forwards;
        opacity: 0;
        color: #fff;
        transition-timing-function: cubic-bezier(0.785, 0.13 5, 0.15, 0.86);
    }
    
    .first{
        display: inline-block;
        animation: firstspan 1.5s forwards cubic-bezier(0.785, 0.135, 0.15, 0.86);
        background: #151419;
        z-index: 1;
        position: relative;
        font-weight: 500;
    }

    .slide{
        display: inline-flex;
        overflow: hidden;
    }

    .second{
        font-weight: 100;
        z-index: -1;
        display: inline-block;
        animation: secondspan 1.5s forwards cubic-bezier(0.785, 0.135, 0.15, 0.86);
    }
    @keyframes fadeIn{
     0%{
        opacity: 0;
        transform: scale(1);
     }   
     50%{
        opacity: 0;
        transform: scale(1.1);
     }   
     100%{
        opacity: 0;
        transform: scale(1.1);
     }   
     
    }

    @keyframes firstspan{
     0%{
        transform: translateX(50%);
     }   
     60%{
        transform: translateX(50%);
     }   
     100%{
        transform: translateX(50%);
     }   
     
    }

    @keyframes secondspan{
     0%{
        transform: translateX(-100%);
     }   
     60%{
        transform: translateX(-100%);
     }   
     100%{
        transform: translateX(0%);
     }   
     
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="animation">
            <span class="first" style="color: white;">Shout</span>
            <span class="slide">
            <span class="second" style="color: #f9004d;">Out</span>
            </span>
        </div>
    </div>
</body>
</html>