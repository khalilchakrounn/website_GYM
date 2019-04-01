<html>  
    <head>  
        <title></title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body>  
        <div class="container">  
            <br>
            <br>
      <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo"> <span class="glyphicon glyphicon-info-sign"></span> Update</a></button>
  <div id="demo" class="collapse">
   to update user data juste modify table value
  </div>

       <br />  
            <br />
            <br />
            <div class="table-responsive">  
                
                <span id="result"></span>
                <div id="live_data"></div>                 
            </div>  
        </div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
                $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var first_name = $('#first_name').text();  
        var last_name = $('#last_name').text();  
        var Birthday = $('#Birthday').text();  
        var adresse = $('#Adresse').text();
        var mobile = $('#Mobile').text();
        var Email = $('#Email').text();
         var mobileValid = /^\d{8}$/;
        var NameValid = /^[a-zA-Z]+$/; 
         var emailValid= /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i; 
        if(first_name == '')  
        {  
            alert("Enter Firstname"); 
            return false;  
        } 
         if (NameValid.test(first_name)==false) 
                 {  
            alert("Invalid Firstname");  
            return false;  
        }  
        if(last_name == '')  
        {  
            alert("Enter Lastname");  
            return false;  
        }
         if (NameValid.test(last_name)==false) 
                 {  
            alert("Invalid Lastname");  
            return false;  
        }  
          if (Email == '' )  
        {  
            alert("Enter Email");  
            return false;  
        } 
        if (emailValid.test(Email)==false) 
                 {  
            alert("Invalid Email");  
            return false;  
        } 
         if(Birthday == '')  
        {  
            alert("Enter Birthday");  
            return false;  
        }  
            if(adresse == '')  
        {  
            alert("Enter adresse");  
            return false;  
        } 
        if (mobile == '')  
        {  
            alert("Enter mobile");  
            return false;  
        } 
          if (mobileValid(mobile) == false)  
        {  
            alert("Invalid mobile Number");  
            return false;  
        } 

        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{first_name:first_name, last_name:last_name, Email:Email, Birthday:Birthday,adresse:adresse,mobile:mobile},  
            dataType:"text",  
            success:function(data)  
            {  
                //alert(data);
                 $('#result').html("<div class='alert alert-success'>"+data+"</div>");
                setTimeout(function(){ 
    $('#result').hide();
}, 2000);   
                fetch_data();  
            }  

        })  
    });  
  
   function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
                $('#result').html("<div class='alert alert-success'>"+data+"</div>");
                setTimeout(function(){ 
    $('#result').hide();
}, 2000);
            }  
        });  
    }  
  
    $(document).on('blur', '.Adresse', function(){  
        var id = $(this).data("id5");  
        var Adresse = $(this).text(); 
        if (Adresse=='') {  alert("Adresse cannot be empty");  
            return false;  } 
            else{
        edit_data(id,Adresse, "adresse");  }
    }); 
        $(document).on('blur', '.email', function(){  
        var id = $(this).data("id3");  
        var email = $(this).text();  
        if (email=='') {  alert("Email cannot be empty");  
            return false;  } 
            else{
        edit_data(id,email, "EMAIL");  }
    });  




    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>