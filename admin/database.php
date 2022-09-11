<?php 
   require_once('includes/db_connection.php');

   class database
   {
        function  customer()
       {
          global $conn;
          $sql="SELECT c.customer_name AS 'Customer', COUNT(p.license_plate) AS 'Number of Policies' 
          FROM car p JOIN customer c JOIN insurance_agency_has_customer ic 
          ON p.customer_id = c.customer_id AND c.customer_id = ic.customer_idCustomer 
          GROUP BY c.customer_id";
        return $result=mysqli_query($conn,$sql);
        }

        function  add_customer($id,$name,$address,$phone,$CF,$place,$date)
        {
           global $conn;
           $sql="INSERT INTO customer(customer_id,customer_name,customer_address,customer_phone,customer_CF,customer_birth_place,customer_date_of_birth)
           VALUES('".$id."','".$name."','".$address."','".$phone."','".$CF."','".$place."','".$date."')";
         return $result=mysqli_query($conn,$sql);
         }

         function  add_agency($id,$name,$indirizzoAgenzia)
        {
           global $conn;
           $sql="INSERT INTO insurance_agency(agency_Id,indirizzoAgenzia,agency_name)
           VALUES('".$id."','".$indirizzoAgenzia."','".$name."')";
           return $result=mysqli_query($conn,$sql);
         }


        function  cars()
       {
          global $conn;
          $sql="SELECT p.chassie_number AS 'Car', COUNT(p.license_plate) AS 'Number of Policies' 
          FROM car p JOIN customer c JOIN insurance_agency_has_customer ic ON p.customer_id = c.customer_id AND c.customer_id = ic.customer_idCustomer 
          GROUP BY p.chassie_number";
        return $result=mysqli_query($conn,$sql);
        }

        function  accident()
        {
           global $conn;
           $sql="SELECT * FROM accident WHERE date_incident >= ADDDATE(NOW(), INTERVAL - 06 MONTH)";
         return $result=mysqli_query($conn,$sql);
         }

         function  agency()
         {
            global $conn;
            $sql="SELECT * FROM insurance_agency";
          return $result=mysqli_query($conn,$sql);
          }
         function  compensation()
         {
            global $conn;
            $sql="SELECT c.chassie_number AS 'Car', acc.reimbursement_insurance AS 'Amount of Compensation' 
            FROM accident acc JOIN car c ON acc.license_plate = c.license_plate";
          return $result=mysqli_query($conn,$sql);
          }
          function  agencies()
          {
             global $conn;
             $sql="SELECT i.agency_name AS 'Agency', COUNT(ic.customer_idCustomer) AS 'Number' 
             FROM insurance_agency_has_customer ic JOIN insurance_agency i ON ic.insurance_agency_agency_id = i.agency_Id 
             GROUP BY i.agency_Id";
           return $result=mysqli_query($conn,$sql);
           }

           function  show_customer_with_3_policies()
           {
              global $conn;
              $sql="SELECT cu.customer_name as 'Customer', COUNT(c.customer_id) AS 'Policies'
               FROM customer cu join car c join policy p on c.license_plate = p.license_plate AND c.customer_id = cu.customer_id 
              GROUP BY cu.customer_name HAVING Policies IN (3 , 4)";
            return $result=mysqli_query($conn,$sql);
            }
            
            function  select_all_customer()
            {
               global $conn;
               $sql="SELECT * from customer";
             return $result=mysqli_query($conn,$sql);
             }
 

   }
   
 ?>