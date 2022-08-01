<?php 
$check=$_POST["Zilan"];
$check();

function insert(){
    $connection=new mysqli("localhost","root","","crud_ajax");
    $FirstName=$_POST['Fname'];
    $UserName=$_POST['Uname'];
    $Email=$_POST['Email'];
    $Address=$_POST['Address'];
    $Status=$_POST['Status'];

    $result=$connection->query("INSERT INTO tbl_employee(fName,uName,email,address,status)VALUES('$FirstName','$UserName','$Email','$Address','$Status')");
    if($result){
        echo'<div class="alert alert-success">Employee Data Saved</div>';
    }
}
function show(){
    $connection=new mysqli("localhost","root","","crud_ajax");

    $result=$connection->query("SELECT * FROM tbl_employee");
    $table='<table class="table" border="1"><tr class="table-warning">
    <th>Full Name</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Status</th>
    <th>Action</th>
</tr>';

    while($data=$result->fetch_assoc()){
        $table.='<tr class="table-info">
            <td>'.$data["fName"].'</td>
            <td>'.$data["uName"].'</td>
            <td>'.$data["email"].'</td>
            <td>'.$data["address"].'</td>
            <td>'.$data["status"].'</td>
            <td>
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Update
            </button>    
            
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" onclick="Delete('.$data["id"].')">
            Delete
            </button>
            </td>
        </tr>';
 
        // <!--Delete  Modal -->

        $table.='<div class="modal fade" id="delete'.$data["id"].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>';
    }
    $table .= '</table>';
    echo $table;
}
function delete(){
    $id=$_POST["id"];
    if(!empty($id)){
        $connection=new mysqli("localhost","root","","crud_ajax");
        $result=$connection->query("DELETE FROM tbl_employee WHERE id='$id'");
        if($result){
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
        else{
            echo '<div class="alert alert-danger">DataNot Saved</div>';
        }
    }
    
}
?>