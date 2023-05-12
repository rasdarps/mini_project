<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>

    <style>
        body{
        background-image:url('ceo_jobs.jpg');
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size: cover;
    }

    .container-fluid{
        background: transparent;
        backdrop-filter: blur(25px);
    }
    </style>

</head>
<body>

    <div class="container-fluid h-100 p-5">
        <div class="col-md-8 mx-auto">

            <div class="card col-md-6 mx-auto login p-5 my-3">
                <div class="logo-img text-center">
                <img src="logo.png" alt="" width="80">   
                </div>
                <h3 class="text-center">Login Form</h3>
                <form action="" method="post" class="">
                    <div class="form-group m-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                        <input type="text" name="username" class="form-control">
                        </div>
                        
                    </div>
                    <div class="form-group m-3">
                        <label for="password">Password</label>
                        <div class="input-group">
                        <input type="text" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-md-6">
                            <input type="checkbox" name="remember_me"> Remember Me
                        </div>
                        

                    </div>


                    <div class="text-center my-2">
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </div>

                    <div class="text-center">
                            <span>Don't have an account? </span><a href="#" style="text-decoration:none;">Register</a>
                        </div>
                </form>
            </div>

        </div>

        <footer>
            <div class="text-center">
                <p>2018 - <?php echo date('Y')?> (c) <a href="#"> RICT </a> </p>
            </div>
        </footer>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>  
</body>
</html>