
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

                <?php
                if(isset($_POST['add_car']))
                {
                    $plate=$_POST['plate'];
                    $chassis=$_POST['chassis'];
                    $date=$_POST['date'];
                    $imf=$_POST['imf'];
                    $customer_id=$_POST['customer_id'];
                
                  $sql="INSERT INTO car(license_plate,chassie_number,date_time,IMF_number,customer_id)
                  VALUES('".$plate."','".$chassis."','".$date."','".$imf."','".$customer_id."')";
                 $result=mysqli_query($conn,$sql);
                 
                  if($result)
                  {
                      echo "<script>alert('Car  Added Successfully')</script>";
                  }
                }?>


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
            <label for="exampleInputEmail1">License Plate</label>
            <input type="number" name="plate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter License Plate">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Chassis Number</label>
            <input type="text" name="chassis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Chassis Number">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date</label>
            <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">IMF Number</label>
            <input type="text" name="imf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter IMF Number">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Customer</label>
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

        
       
        <button type="submit" name="add_car" class="btn btn-primary">Submit</button>
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
                                    <button class="btn btn-success text-white"  type="button"  data-toggle="modal" data-target="#exampleModal">Add Car</button>

                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>CARS</th>
                                                    <th>Number of Policies</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                             $customer =  new database();
                                            $result=$customer->cars();
                                            
                                            if($result->num_rows > 0)
                                            {
                                                while($row=mysqli_fetch_assoc($result))
                                                {?>
                                                  <tr>
                                                    <td><?php echo $row['Car']?> </td>
                                                    <td><?php echo $row['Number of Policies']?></td>
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
                </section>




               <section id="main-content">
                 
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <h3 class="text-center text-success">ALL CARS RECORD</h3>
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

                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>License Plate</th>
                                                    <th>Chassis Number</th>
                                                    <th>Date time</th>
                                                    <th>IMF Number</th>
                                                    <th>Customer ID</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                             
                                             $sql="SELECT * FROM car";
                                             $result=mysqli_query($conn,$sql);
                                            if($result->num_rows > 0)
                                            {
                                                while($row=mysqli_fetch_assoc($result))
                                                {?>
                                                  <tr>
                                                    <td><?php echo $row['license_plate']?> </td>
                                                    <td><?php echo $row['chassie_number']?> </td>
                                                    <td><?php echo $row['date_time']?> </td>
                                                    <td><?php echo $row['IMF_number']?></td>
                                                    <td><?php echo $row['customer_id']?></td>
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