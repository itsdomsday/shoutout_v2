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
            font-family: 'Roboto Slab', serif;
        }
        .about{
            width: 100%;
            padding: 78px 0px;
            background: #151419;
        }

        .about img{
            height: auto;
            width: 420px;
            border-radius: 5px;
        }

        .about-text{
            width: 550px;
            color: white;
        }

        .main{
            width: 1130px;
            max-width: 95%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        #about{
            color: white;
            font-size: 80px;
            text-transform: capitalize;
            margin-bottom: 70px;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .about-text h4{
            color: white;
            font-size: 25px;
            text-transform: capitalize;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }

        .about-text h5{
            color: white;
            font-size: 25px;
            text-transform: capitalize;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }

        span{
            color: #f9004d;
        }

        .about-text p{
            color: #E0DDFA;
            letter-spacing: 1px;
            line-height: 28px;
            font-size: 18px;
            margin-bottom: 45px;
        }

        button{
            background: #634BFF;
            color: #E0DDFA;
            text-decoration: none;
            border: 2px solid transparent;
            font-weight: bold;
            padding: 13px 30px;
            border-radius: 30px;
            transition: .4s;
        }

        button:hover{
            background: transparent;
            border: 2px solid #634BFF;
            cursor: pointer;
        }

        #name{
            color: white;
            font-size: 40px;
            text-transform: capitalize;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>
    <section class="about">
        <div id="about"><h1>About Us</h1></div>
        <div class="main">
            <img src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t1.6435-9/120884589_3437139343010929_1813403520474313023_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=174925&_nc_eui2=AeHreeEJSpeuDjEv2kgA0NfTTccbERRTfOFNxxsRFFN84S240eYfGm3wLNlnNaxhIEQPR-hQo_-9SVK0_g7AIZB9&_nc_ohc=2ioHo3n4JfcAX9jlmK_&tn=PG8xZUVhGYfxbvTx&_nc_ht=scontent.fmnl4-3.fna&oh=00_AfBVwsjPEWwCskKK4yPLXcFjX1fogrzhNZHAd9yMeEz_yw&oe=64104DBF" alt="">
            <div class="about-text">
                <h5 id="name">Ron Fortuno</h5>
                <h4>Developer <span>& Designer</span></h4>
                <p>is a writer, speaker, and entrepreneur who has been featured on several list of publications like Harper Collins, Simon & Schuster, Macmillan and several list of podcasts. He's also the founder of Super Slime Company, where he helps people achieve their goals by using the power of social media.</p>
                <button type="button">Let's Talk</button>
            </div>
        </div>

        <div class="main" style="margin-top: 75px;">
        <div class="about-text">
                <h5 id="name">Dominic Cristobal</h5>
                <h4>Developer <span>& CEO</span></h4>
                <p>is a writer, speaker, and entrepreneur who has been featured on several list of publications like Harper Collins, Simon & Schuster, Macmillan and several list of podcasts. He's also the founder of Super Slime Company, where he helps people achieve their goals by using the power of social media.</p>
                <button type="button">Let's Talk</button>
            </div>
            <img src="https://scontent.fmnl25-3.fna.fbcdn.net/v/t39.30808-6/299094988_10223276562522400_1265867788568038610_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeE0roSxRboGrjndamWDDn00pPNpn7q9eCak82mfur14JkQl8FCa_XzR95r5Mr_ldb8PAUNYEZinYV4PdRUlfWg6&_nc_ohc=9sfjcIhvn28AX-js_yI&_nc_ht=scontent.fmnl25-3.fna&oh=00_AfAgyE8f7iVKEuIwpW1Ya5bVEbDqEfrmVEgJCDMfYn2PkQ&oe=63ED9B05" alt="">
        </div>

        <div class="main" style="margin-top: 100px;">
            <img src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t31.18172-8/27023815_1993974193949564_1854601993845297776_o.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeE6Wq5isWC1HXuB6YioFlYBwKbh3xLDdgnApuHfEsN2CZY8mftABKgM5fwOzXK7RumxbS43DDA4seqiUY__Ycf9&_nc_ohc=ahAjA9IBQMcAX8Ph1h8&_nc_ht=scontent.fmnl4-2.fna&oh=00_AfCyY9gq7ZOtSvZVS-RWEnQywEPJrZGXHqkCmGM12WW9ag&oe=64104F00" alt="">
            <div class="about-text">
                <h5 id="name">David Quebenco</h5>
                <h4>Developer <span>& Co-founder</span></h4>
                <p>is a writer, speaker, and entrepreneur who has been featured on several list of publications like Harper Collins, Simon & Schuster, Macmillan and several list of podcasts. He's also the founder of Super Slime Company, where he helps people achieve their goals by using the power of social media.</p>
                <button type="button">Let's Talk</button>
            </div>
        </div>
    </section>
</body>
</html>