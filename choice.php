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

        label{
            font-weight: bold;
        }

        table, th, td{
            padding: 5px;
            
        }
    </style>
</head>
<body>
    <div class="container pt-5">
        <div class="card col-md-10 mx-auto">
            <div class="card-header" style="background:#034199; color:#fff;">
                <h4>Create Choice </h4>
            </div>
            <div class="card-body">

            <form action="{{ route('search') }}" method="GET">
                <center>
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">Search</button>
                </center>
            </form>
                        
            <form>
                <div class="form-group col-md-10 mx-auto my-4">
                    <label class="col-md-3" for="nameSelect">ID</label>
                    <input class="col-md-7" type="text" name="pse_id" class="form-control" id="pse_id" readonly>
                </div>
                
                <div class="form-group col-md-10 mx-auto my-4">
                    <label class="col-md-3" for="nameSelect">Name</label>
                    <input class="col-md-7" type="text" name="name" class="form-control" id="name" readonly>
                </div>

                <div class="form-group col-md-10 mx-auto my-4">
                    <label class="col-md-3" for="contact">Contact</label>
                    <input class="col-md-7" type="text" name="contact" class="form-control" id="contact" readonly>
                </div>

                <div class="form-group col-md-10 mx-auto my-4">
                    <table class="table-bordered" width="100%" style="border-color: #ddd;" id="myTable">
                        <tr>
                            <th width="50%">Candidates</th>
                            <th width="20%">Code</th>
                           
                        </tr>
                        <!-- row 1 -->
                        <tr >
                            <td>
                                <select class="" name="candidate" id="candidate">
                                <option value="">Select candidate</option>
                                <!-- Populate options dynamically from database -->
                                <option value="1">candidate 1</option>
                                <option value="2">candidate 2</option>
                                <option value="3">candidate 3</option>
                                </select>

                            </td>

                            <td>
                                <input type="checkbox" name="code"> G
                                <input type="checkbox" name="code"> Y
                                <input type="checkbox" name="code"> R

                            </td>
                        </tr>

                        <!-- row 1 -->
                        <tr >
                            <td>
                                <select class="" name="candidate" id="candidate">
                                <option value="">Select candidate</option>
                                <!-- Populate options dynamically from database -->
                                <option value="1">candidate 1</option>
                                <option value="2">candidate 2</option>
                                <option value="3">candidate 3</option>
                                </select>

                            </td>

                            <td>
                                <input type="checkbox" name="code"> G
                                <input type="checkbox" name="code"> Y
                                <input type="checkbox" name="code"> R

                            </td>
                        </tr>

                        <!-- row 1 -->
                        <tr >
                            <td>
                                <select class="" name="candidate" id="candidate">
                                <option value="">Select candidate</option>
                                <!-- Populate options dynamically from database -->
                                <option value="1">candidate 1</option>
                                <option value="2">candidate 2</option>
                                <option value="3">candidate 3</option>
                                </select>

                            </td>

                            <td>
                                <input type="checkbox" name="code"> G
                                <input type="checkbox" name="code"> Y
                                <input type="checkbox" name="code"> R

                            </td>
                        </tr>

                        <!-- row 1 -->
                        <tr >
                            <td>
                                <select class="" name="candidate" id="candidate">
                                <option value="">Select candidate</option>
                                <!-- Populate options dynamically from database -->
                                <option value="1">candidate 1</option>
                                <option value="2">candidate 2</option>
                                <option value="3">candidate 3</option>
                                </select>

                            </td>

                            <td>
                                <input type="checkbox" name="code"> G
                                <input type="checkbox" name="code"> Y
                                <input type="checkbox" name="code"> R

                            </td>
                        </tr>

                        <!-- row 1 -->
                        <tr >
                            <td>
                                <select class="" name="candidate" id="candidate">
                                <option value="">Select candidate</option>
                                <!-- Populate options dynamically from database -->
                                <option value="1">candidate 1</option>
                                <option value="2">candidate 2</option>
                                <option value="3">candidate 3</option>
                                </select>

                            </td>

                            <td>
                                <input type="checkbox" name="code"> G
                                <input type="checkbox" name="code"> Y
                                <input type="checkbox" name="code"> R

                            </td>
                        </tr>

                        </tr>
                        <!-- row 1 -->
                        <tr >
                            <td>
                                <select class="" name="candidate" id="candidate">
                                <option value="">Select candidate</option>
                                <!-- Populate options dynamically from database -->
                                <option value="1">candidate 1</option>
                                <option value="2">candidate 2</option>
                                <option value="3">candidate 3</option>
                                </select>

                            </td>

                            <td>
                                <input type="checkbox" name="code"> G
                                <input type="checkbox" name="code"> Y
                                <input type="checkbox" name="code"> R

                            </td>
                        </tr>

                        <!-- row 1 -->
                        <tr >
                            <td>
                                <select class="" name="candidate" id="candidate">
                                <option value="">Select candidate</option>
                                <!-- Populate options dynamically from database -->
                                <option value="1">candidate 1</option>
                                <option value="2">candidate 2</option>
                                <option value="3">candidate 3</option>
                                </select>

                            </td>

                            <td>
                                <input type="checkbox" name="code"> G
                                <input type="checkbox" name="code"> Y
                                <input type="checkbox" name="code"> R

                            </td>
                        </tr>

                        <!-- row 1 -->
                        <tr >
                            <td>
                                <select class="" name="candidate" id="candidate">
                                <option value="">Select candidate</option>
                                <!-- Populate options dynamically from database -->
                                <option value="1">candidate 1</option>
                                <option value="2">candidate 2</option>
                                <option value="3">candidate 3</option>
                                </select>

                            </td>

                            <td>
                                <input type="checkbox" name="code"> G
                                <input type="checkbox" name="code"> Y
                                <input type="checkbox" name="code"> R

                            </td>
                        </tr>

                        <!-- row 1 -->
                        <tr >
                            <td>
                                <select class="" name="candidate" id="candidate">
                                <option value="">Select candidate</option>
                                <!-- Populate options dynamically from database -->
                                <option value="1">candidate 1</option>
                                <option value="2">candidate 2</option>
                                <option value="3">candidate 3</option>
                                </select>

                            </td>

                            <td>
                                <input type="checkbox" name="code"> G
                                <input type="checkbox" name="code"> Y
                                <input type="checkbox" name="code"> R

                            </td>
                        </tr>

                        <!-- row 1 -->
                        <tr >
                            <td>
                                <select class="" name="candidate" id="candidate">
                                <option value="">Select candidate</option>
                                <!-- Populate options dynamically from database -->
                                <option value="1">candidate 1</option>
                                <option value="2">candidate 2</option>
                                <option value="3">candidate 3</option>
                                </select>

                            </td>

                            <td>
                                <input type="checkbox" name="code"> G
                                <input type="checkbox" name="code"> Y
                                <input type="checkbox" name="code"> R

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
    <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    
    <script>
        $(document).ready(function () {
        $('#example').DataTable();
     });
    </script>
</body>
</html>