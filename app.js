jQuery(document).ready(function(){
    show();
    jQuery("#btn").click(function(){
        insert();
    })

})
function insert(){
    var fun="insert"
    var fname=jQuery("#fname").val();
    var uname=jQuery("#uname").val();
    var email=jQuery("#email").val();
    var address=jQuery("#address").val();
    var status=jQuery("#status").val();
    $.ajax({
        url:'classes.php',
        type:'post',
        data:{
            Fname:fname,
            Uname:uname,
            Email:email,
            Address:address,
            Status:status,
            Zilan:fun
        },
        success:function(response){
            show();
            jQuery(".output").html(response);
            jQuery(".alert").fadeOut(2000);
            jQuery("#fname").val("");
            jQuery("#uname").val("");
            jQuery("#email").val("");
            jQuery("#address").val("");
            jQuery("#status").html('<option value="1">-------Select One---------</option>\
            <option value="1">Active</option>\
            <option value="2">Inactive</option>');
        }
    })
}
function show(){
    var fun="show"
    $.ajax({
        url:'classes.php',
        type:'post',
        data:{
            Zilan:fun   
        },
        success:function(data){
            jQuery(".tbl").html(data);
        }
    })
}
function Delete(id){

    var fun="delete"
    $.ajax({
        url:'classes.php',
        type:'post',
        data:{

            Zilan:fun,
            id:id   
        },
        success:function(response){
            show();
            jQuery(".output").html(response);
            jQuery(".alert").fadeOut(2000);
            
        }
    })

}