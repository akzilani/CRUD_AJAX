<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-1">
        <div class="row">
            <div class="col-lg-4">
                <h2 class=" text-warning nmb-5">Insert Employ Information</h2>
				<div class="output">
					
				</div>
                <div class="form-group mb-5">
                <input type="text" id="fname" class="form-control" placeholder="Enter Your Full Name">
                </div>       
                
                <div class="form-group mb-5">
                <input type="text" id="uname" class="form-control" placeholder="Enter Your User Name">
                </div>       
                
                <div class="form-group mb-5">
                <input type="text" id="email" class="form-control" placeholder="Enter Your Email Name">
                </div>      
                
                <div class="form-group mb-5">
                <input type="text" id="address" class="form-control" placeholder="Enter Your Address Name">
                </div>      
                
                <div class="form-group mb-5">
                <select name="" id="status" class="form-control">
                    <option value="Blank">-------Select One---------</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
                </div>  
                <div class="form-group">
                    <input type="button" id="btn" value="Save" class=" btn btn-primary form-control">
                </div>

            </div>
            <div class="col-lg-8 mt-5 tbl">

            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="app.js"></script>
</body>
</html>