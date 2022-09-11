
  <?php
       require_once('includes/navbar.php');
       require_once('includes/db_connection.php');
       require_once('database.php');

    ?>
<style>
    .form-inline{
        display:block;
    }
    .pagination{
        float:right;
        padding:0px;
    }
    .pagination li{
        padding:10px
    }
    ..row{
        margin:0px!important;;
    }
</style>
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Row-Select</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <!-- Button trigger modal -->

  <?php

  if(isset($_POST['add']))
  {
    $add = new Database();
    $result=$add->add_customer($_POST['id'],$_POST['name'],$_POST['address'],$_POST['phone'],$_POST['cf'],$_POST['birth'],$_POST['date']);
    if($result)
    {
        echo "<script>alert('User Added Successfully')</script>";
    }
  }
  
  ?>

<?php

if(isset($_POST['customer_agency']))
{
    $agency_id=$_POST['agency_id'];
    $customer_id=$_POST['customer_id'];

  $sql="INSERT INTO insurance_agency_has_customer(insurance_agency_agency_id,customer_idCustomer)
  VALUES('".$agency_id."','".$customer_id."')";
 print_r($result=mysqli_query($conn,$sql));
 
  if($result)
  {
      echo "<script>alert('Customer Agency Added Successfully')</script>";
  }
}

?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height:410px; overflow-x:auto">
      <form method="POST" >
        <div class="form-group">
            <label for="exampleInputEmail1">Customer ID</label>
            <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Customer Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Customer Address</label>
            <textarea name="address" name="address" placeholder="Enter Address" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Customer Phone</label>
            <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Customer CF</label>
            <input type="text" name="cf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Custome CF">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Customer place of Birth</label>
            <input type="text" name="birth" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Customer Place of Birth">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Customer date o Birth</label>
            <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Customer Date of birth">
        </div>
        <button type="submit" name="add" class="btn btn-primary">Submit</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height:410px; overflow-x:auto">
      <form method="POST" >
        <div class="form-group">
            <label for="">Select Customer</label>
           <select name="customer_id" class="form-control" id="">
           <?php 
                $customer =  new database();
            $result=$customer->select_all_customer();
            
            if($result->num_rows > 0)
            {
                while($row=mysqli_fetch_assoc($result))
                {?>
                    <option value="<?php echo $row['customer_id']?>"><?php echo $row['customer_name']?></option>
                <?php
                }
            }
            ?>
           </select>
        </div>

        <div class="form-group">
        <label for="">Select Agency</label>

           <select name="agency_id" class="form-control" id="">
           <?php 
                $agency =  new database();
            $result=$agency->agency();
            
            if($result->num_rows > 0)
            {
                while($row=mysqli_fetch_assoc($result))
                {?>
                    <option value="<?php echo $row['agency_Id']?>"><?php echo $row['agency_name']?></option>
                <?php
                }
            }
            ?>
           </select>
        </div>
     
        <button type="submit" name="customer_agency" class="btn btn-primary">Submit</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


                
                <section id="main-content">
                 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <?php
                                if(isset($_GET['msg']))
                                {
                                    echo $_GET['msg'];
                                }
                                ?>
                                <div class="card-title">
                                    <h4>Table </h4>
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <div class="row">
                                            <div class="col-md-10">
                                        <button class="btn btn-success text-white"  type="button"  data-toggle="modal" data-target="#exampleModal">Add Customer</button>

                                            </div>
                                            <div class="col-md-2">
                                        <button class="btn btn-success text-white"  type="button"  data-toggle="modal" data-target="#exampleModal1">Insurance Agency</button>

                                            </div>
                                        </div>
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Customer ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Customer Address</th>
                                                    <th>Customer Phone</th>
                                                    <th>Customer CF</th>
                                                    <th>Customer Place of Birth</th>
                                                    <th>Customer Date of Birth</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                             $customer =  new database();
                                            $result=$customer->select_all_customer();
                                            
                                            if($result->num_rows > 0)
                                            {
                                                while($row=mysqli_fetch_assoc($result))
                                                {?>
                                                  <tr>
                                                    <td><?php echo $row['customer_id']?> </td>
                                                    <td><?php echo $row['customer_name']?> </td>
                                                    <td><?php echo $row['customer_address']?> </td>
                                                    <td><?php echo $row['customer_phone']?> </td>
                                                    <td><?php echo $row['customer_CF']?> </td>
                                                    <td><?php echo $row['customer_birth_place']?> </td>
                                                    <td><?php echo $row['customer_date_of_birth']?> </td>

                                                </tr>
                                                <?php
                                                }
                                            }
                                            ?>
                                            <tbody>
                                                
                                               
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>



 <!-- jquery vendor -->
 <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="js/lib/bootstrap.min.js"></script><script src="js/scripts.js"></script>
    <!-- scripit init-->
    <script src="js/lib/data-table/datatables.min.js"></script>
    <script src="js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="js/lib/data-table/jszip.min.js"></script>
    <script src="js/lib/data-table/pdfmake.min.js"></script>
    <script src="js/lib/data-table/vfs_fonts.js"></script>
    <script src="js/lib/data-table/buttons.html5.min.js"></script>
    <script src="js/lib/data-table/buttons.print.min.js"></script>
    <script src="js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="js/lib/data-table/datatables-init.js"></script>








</body>

</html>