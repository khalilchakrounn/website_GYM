
<html lang="en">

<head>
    <!-- Required meta tags-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
    
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     


</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
<style>
#search_text{
 width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('images/serc.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}



.container{
  margin: 20px auto;
}
h2 {
  text-align: center;
}

input[type=text], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

body{
  font-family:Arial, Helvetica, sans-serif;
  font-size:13px;
}
.success, .error{
  border: 1px solid;
  margin: 10px 0px;
  padding:15px 10px 15px 50px;
  background-repeat: no-repeat;
  background-position: 10px center;
}

.success {
  color: #4F8A10;
  background-color: #DFF2BF;
  background-image:url('success.png');
  display: none;
}
.error {
  display: none;
  color: #D8000C;
  background-color: #FFBABA;
  background-image: url('error.png');
}
</style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                
                            </ul>
                     
                        </li>
                       
                       
                       
                       
                      
                    </ul>
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>TABLES</a>
                          
                             <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="table_Client.php">
                                <i class="fas fa-table"></i>Table Clients</a>
                                <a href="table_Reclamtion.php">
                                <i class="fas fa-table"></i>Table Reclamations</a>
                        </li>
                        </ul>
                        </li>
                       
                       
                       
                       
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
  
    <div class="container">  
            <br>
            <br>

            <button type="button" name="btn_enable"  id="btn_mail" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-envelope"></span>  SEND EMAIL</a></button>
      <button type="button" class="btn btn-lg btn-primary" data-toggle="collapse" data-target="#demo"> <span class="glyphicon glyphicon-info-sign"></span> Update</a></button>
  <div id="demo" class="collapse">
   <h2> to update user data juste modify table value</h2>
  </div>

       <br />  
            <br />
            <br />
            <br>

               
                    
                <div class="input-group">
                    

                    <input type="text"   
                    name="search_text" id="search_text" placeholder="Search By ID,Username,Firstname,Lastname or Email " class="form-control" />
                </div>
            </div>
            <div class="table-responsive">  
                
                <span id="result"></span>
                <div id="live_data"></div>                 
            </div>  
        </div>
       
         <button type="button" name="RECLAMATION"  id="RECLAMATION" class="btn btn-block btn-info"><span class="glyphicon glyphicon-tasks"></span>  AFFICHER RECLAMATION</a></button>

                        </div>



                    </div>
                    <br>
<br>

                </div>
            </div>
        </div>

    

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

 
<script >

 
 $(document).ready(function(){
  
   
    function load_data(query)
    {
        $.ajax({
            url:"Core/select.php",
            method:"post",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
        });
    }
   
load_data();
    $('#search_text').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
          load_data();            
        }
    });



        

 
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
         if (mobileValid.test(mobile)==false) 
                 {  
            alert("Invalid mobile ");  
            return false;  
        } 
     

        $.ajax({  
            url:"Core/insert.php",  
            method:"POST",  
            data:{first_name:first_name, last_name:last_name, Email:Email, Birthday:Birthday,adresse:adresse,mobile:mobile},  
            dataType:"text",  
            success:function(data)  
            {  
                //alert(data);
                 $('#result').html("<div class='alert alert-success'>"+data+"</div>");
                setTimeout(function(){ 
    $('#result').hide();
     location.reload();

}, 1000);   
             
            }  

        })  
       
    });  
 

   function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"Core/edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
                $('#result').html("<div class='alert alert-success'>"+data+"</div>");
           setTimeout(function(){ 
    $('#result').hide();
    location.reload();

}, 1000);
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
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
        var id = $(this).data("id7");  
        var email = $(this).text();  
        if (email=='') {  alert("Email cannot be empty");  
            return false;  } 
             else if (!filter.test(email))
            {alert("Email not valid");  
            return false; } 
            else{
        edit_data(id,email, "EMAIL");  }
    });  
$(document).on('blur', '.Mobile', function(){  
     var mobileValid=/^\d{8}$/;
        var id = $(this).data("id6");  
        var mobile = $(this).text();  
        if (mobile=='') {  alert("mobile cannot be empty");  
            return false;  }
            else if (!mobileValid.test(mobile))
            {alert("mobile not valid");  
            return false; } 
            else{
        edit_data(id,mobile, "mobile");  }

    });  



    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"Core/delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
    location.reload();

                }  
            });  
        }  
    });  

 $(document).on('click', '#btn_disable', function(){  
    var id=$(this).data("id9");  
        if(confirm("Are you sure you want to block this client?"))  
        {  
            $.ajax({  
            url:"Core/disable.php",  
            method:"POST",  
             data:{id:id },    
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);
                 $('#result').html("<div class='alert alert-success'>"+data+"</div>");
                setTimeout(function(){ 
    $('#result').hide();
}, 1000);   
            location.reload(); 
            }  

        })
        }
});  
 $(document).on('click', '#btn_enable', function(){  
    var id=$(this).data("id9");  
        if(confirm("Are you sure you want to active this client?"))  
        {  
            $.ajax({  
            url:"Core/enable.php",  
            method:"POST",  
             data:{id:id },    
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);
                 $('#result').html("<div class='alert alert-success'>"+data+"</div>");
                      setTimeout(function(){ 
    $('#result').hide();
    location.reload();

}, 1000);  
            }  

        })
        }
});  
 



  $(document).on('click', '#btn_mail', function(){  

   window.open('Core/mail.php?mavar=mailing','mailing','width=300, height=600')


    });
  $(document).on('click', '#RECLAMATION', function(){  

  window.location.replace("table_Reclamtion.php");


    });






}); 
 



</script>

</body>

</html>
<!-- end document-->
