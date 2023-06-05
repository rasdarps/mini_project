<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Position</title>

    <style>
        input{
            border:none;
            border-bottom:1px solid black;
            border-radius: 5px;
        }
    </style>

</head>
<body>
    <div class="container pt-5">
        <div class="card col-md-8 mx-auto">
            <div class="card-header" style="background:#034199; color:#fff;">
                <h4>Create Position</h4>
            </div>
            <div class="card-body">
            <form>
                <div class="form-group col-md-10 mx-auto my-4">
                    <label  class="col-md-3" for="position_name">Position</label>
                    <input  class="col-md-7" type="text" name="position_name" class="form-control" id="position_name" placeholder="Enter position name">
                </div>
                <center>
                <button type="submit" class="btn btn-outline-danger m-3">Submit</button>
                </center>
            </form>


            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>  
</body>
</html>