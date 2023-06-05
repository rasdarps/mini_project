<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Region</title>

    <style>
        input, select{
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
                <h4>Create Form</h4>
            </div>
            <div class="card-body">
            <form>
                <div class="form-group col-md-10 mx-auto my-4">
                    <label class="col-md-3" for="regionName">Name</label>
                    <input class="col-md-7" type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group col-md-10 mx-auto my-4">
                    <label class="col-md-3" for="contact">Contact</label>
                    <input class="col-md-7" type="text" name="contact" class="form-control" id="contact" placeholder="Enter contact number">
                </div>
                <div class="form-group col-md-10 mx-auto my-4">
                    <label class="col-md-3" for="regionSelect">Region</label>
                    <select class="col-md-7" name="region_name" id="region_name">
                    <option value="">Select region</option>
                    <!-- Populate options dynamically from database -->
                    <option value="1">Region 1</option>
                    <option value="2">Region 2</option>
                    <option value="3">Region 3</option>
                    </select>
                </div>

                <div class="form-group col-md-10 mx-auto my-4">
                    <label class="col-md-3" for="constSelect">Constituancy</label>
                    <select class="col-md-7" name="const_name" id="const_name">
                    <option value="">Select Constituency </option>
                    <!-- Populate options dynamically from database -->
                    <option value="1">Constituency 1</option>
                    <option value="2">Constituency 2</option>
                    <option value="3">Constituency 3</option>
                    </select>
                </div>

                <div class="form-group col-md-10 mx-auto my-4">
                    <label class="col-md-3" for="position">Position</label>
                    <select class="col-md-7" name="position" id="position">
                    <option value="">Select Position </option>
                    <!-- Populate options dynamically from database -->
                    <option value="1">Position 1</option>
                    <option value="2">Position 2</option>
                    <option value="3">Position 3</option>
                    </select>
                </div>

                <center>
                <button type="submit" class="btn btn-outline-danger align-center m-3">Submit</button>
                </center>
            </form>


            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>  
</body>
</html>