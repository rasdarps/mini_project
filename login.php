<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>Document</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            
        /* background-image:url('ceo_jobs.jpg');
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size: cover;  */
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #23242a;
    }

    /* .wrapper{
        background: transparent;
        backdrop-filter: blur(25px);
    } */

    .box{
        position: relative;
        width: 380px;
        height:420px;
        background: #1c1c1c;
        border-radius: 8px;
        overflow: hidden;

    }

     .box::before{
        content:'';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px; 
        background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
        z-index: 1;
        transform-origin: bottom right;
        animation: animate 6s linear infinite;
    }

      .box::after{
        content:'';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px; 
        background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
        z-index: 1;
        transform-origin: bottom right;
        animation: animate 6s linear infinite;
        animation-delay: -3s;
    } 

     .borderLine{
        position: absolute;
        top:0;
        inset:0;
    } 

    .borderLine::before{
        content:'';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px; 
        background: linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
        z-index: 1;
        transform-origin: bottom right;
        animation: animate 6s linear infinite;
        animation-delay: -1.5s;
    }

    .borderLine::after{
        content:'';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 380px;
        height: 420px; 
        background: linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
        z-index: 1;
        transform-origin: bottom right;
        animation: animate 6s linear infinite;
        animation-delay: -4.5s;
    } 


    @keyframes animate{
        0%{
            transform: rotate(0deg);
        }
        100%
        {
           transform: rotate(360deg);
        }
    }


    .box form{
        position: absolute;
        inset: 4px;
        background: #222;
        padding: 50px 40px;
        border-radius: 8px;
        z-index: 2;
        display: flex;
        flex-direction: column;
    }

    .box h2{
      color:#fff;
      font-weight: 500;
      text-align: center;
      letter-spacing: 0.1em;  
    }

    .box form .inputBox{ 
        position: relative;
        width: 300px;
        margin-top: 35px;
    }

    .box form .inputBox input{
        position: relative;
        width: 100%; 
        padding:20px 10px 10px;
        background: transparent; 
        outline: none;
        box-shadow: none;
        color: #23242a;
        font-size: 1em;
        letter-spacing: 0.05em;
        transition: 0.5s;
        z-index: 10;
    }

    .box form .inputBox span{
        position: absolute;
        left: 0;
        padding:20px 0px 10px;
        pointer-events: none;
        color: #8f8f8f;
        font-size: 1em;
        letter-spacing: 0.05em;
        transition: 0.5s;
       
    }

    .box form .inputBox input:valid ~ span,
    .box form .inputBox input:focus ~ span
    {
        color: #fff;
        font-size: 0.75em;
        transform: translateY(-34px);

    }

    .box form .inputBox i{
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background: #fff;
        border-radius: 4px;
        overflow: hidden;
        transition: 0.5s;
        pointer-events: none;
       
    }

    .box form .inputBox input:valid ~ i,
    .box form .inputBox input:focus ~ i 
    {
        height: 44px;

    }

    .box form .links{
        display: flex;
        justify-content: space-between;

    }

    .box form .links a{
        margin:10px 0;
        font-size: 0.75em;
        color: #8f8f8f;
        text-decoration: none;

    }

    .box form .links a:hover,
    .box form .links a:nth-child(2)
    {
         color: #fff;
    }

    .box form .inputBox input[type="submit"]{
        border: none;
        outline: none;
        

    }
    

    </style>

</head>
<body>

    <div class="wrapper">
            <div class="box">
                <span class="borderLine"></span>
                <!-- <div class="logo-img text-center">
                <img src="logo.png" alt="" width="80">   
                </div>
                <h3 class="text-center">Login Form</h3> --> 
                <form action="" method="post" class="">
                    <h2 class="text-center">Login</h2> 
                    <div class="inputBox">
                        <input type="email" name="email" >
                        <span>Username</span>
                        <i></i>
                        
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password">
                        <span>Password</span>
                        <i></i>
                    </div>

                    <div class="links">
                       <a href="#">forget password</a>
                       <a href="#">Register</a>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </div>

                    <!-- <div class="text-center">
                            <span>Don't have an account? </span><a href="#" style="text-decoration:none;">Register</a>
                        </div> -->
                </form>
            </div>

        

        <footer>
            <div class="text-center">
                <p style="color:#fff;">2018 - <?php echo date('Y')?> (c) <a href="#"> RICT </a> </p>
            </div>
        </footer>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>  
</body>
</html>