<?php  
 include('header.php');
 $connect = mysqli_connect("localhost", "root", "", "web");  
 $output = '';  
 $sql = "SELECT * FROM client ORDER BY ID_CLIENT DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table id="client_data" class="table table-striped table-dark">  
          
                <tr>  
   
                     <th width="10%">Id Client</th>  
                     <th width="11%">Username</th>
                     <th width="11%">First Name</th>  
                     <th width="11%">Last Name</th>  
                     <th width="11%">EMAIL</th>  
                     <th width="11%">Birthday</th>  
                     <th width="11%">Adresse</th> 
                      <th width="11%">Mobile</th> 
                     <th width="10%">Action</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
    
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["ID_CLIENT"].'</td>  
                       <td class="username" data-id0="'.$row["ID_CLIENT"].'" >'.$row["USERNAME"].'</td> 
                     <td class="first_name" data-id1="'.$row["ID_CLIENT"].'" >'.$row["Firstname"].'</td>  
                     <td class="last_name" data-id2="'.$row["ID_CLIENT"].'" >'.$row["Lastname"].'</td>
                      <td class="email" data-id3="'.$row["ID_CLIENT"].'" contenteditable>'.$row["EMAIL"].'</td>
                      <td class="Birthday" data-id4=" type"date"'.$row["ID_CLIENT"].'" >'.$row["BIRTHDAY"].'</td>  
                      <td class="Adresse" data-id5="'.$row["ID_CLIENT"].'" contenteditable>'.$row["adresse"].'</td>  
                      <td class="Mobile" data-id6="'.$row["ID_CLIENT"].'" contenteditable>'.$row["mobile"].'</td>  
                
                     <td><button type="button" name="delete_btn" data-id3="'.$row["ID_CLIENT"].'" class="btn btn-xs btn-danger btn_delete"><span class="glyphicon glyphicon-trash"></span> Delete</a></button></td>  

                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="username" ></td> 
                <td id="first_name" contenteditable></td>  
                <td id="last_name" contenteditable></td> 
                  <td id="Email" contenteditable></td> 
                 <td id="Birthday" contenteditable></td>
                  <td id="Adresse" contenteditable></td>
                   <td id="Mobile" contenteditable></td>

                <td><button type="button" name="btn_add" id="btn_add"  class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> ADD NEW </a> </button></td> 
                
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
        <tr>  
          <td></td>  
          <td id="first_name" contenteditable></td>  
          <td id="last_name" contenteditable></td>  
          <td id="Email" contenteditable></td>
          <td id="Birthday" contenteditable></td>  
          <td id="Adresse" contenteditable></td>  
          <td id="Mobile" contenteditable></td>  
          <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
         </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>