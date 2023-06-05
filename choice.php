<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href=" https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
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
                    <label class="col-md-3" for="nameSelect">Name</label>
                    <select class="col-md-7" name="name" id="name">
                    <option value="">Select name</option>
                    <!-- Populate options dynamically from database -->
                    <option value="1">Name 1</option>
                    <option value="2">Name 2</option>
                    <option value="3">Name 3</option>
                    </select>
                </div>

                <div class="form-group col-md-10 mx-auto my-4">
                    <label class="col-md-3" for="contact">Contact</label>
                    <input class="col-md-7" type="text" name="contact" class="form-control" id="contact" placeholder="Enter contact number">
                </div>

                <div class="form-group col-md-10 mx-auto my-4">
                    <table id="myTable">
                        <tr>
                            <td>C1</td>
                            <td>C2</td>
                            <td>C3</td>
                            <td>C4</td>
                            <td>C5</td>
                        </tr>
                        <tr>
                            <td>
                                <select class="" name="name" id="name">
                                <option value="">Select name</option>
                                <!-- Populate options dynamically from database -->
                                <option value="1">Name 1</option>
                                <option value="2">Name 2</option>
                                <option value="3">Name 3</option>
                                </select>

                            </td>
                        </tr>
                    </table>
                   
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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
</body>
</html>