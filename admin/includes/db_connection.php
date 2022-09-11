<?php 
  
   mysqli_report(false);
   $conn=mysqli_connect('localhost','root','','assicurazioni_english');
   if(mysqli_connect_errno())
   {
   	 echo "Error".mysqli_connect_error()."Error No". mysqli_connect_errno();
   }
 ?>