
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
                if(isset($_POST['add_incident']))
                {
                    $id=$_POST['id'];

                    $license_id=$_POST['license_id'];
                    $policy_id=$_POST['policy_id'];
                    $date=$_POST['date'];
                    $verbal=$_POST['verbal'];
                    $reimbursement_Insurance=$_POST['reimbursement_Insurance'];
                
                  $sql="INSERT INTO accident(incident_id,license_plate,policy_id,date_incident,number_incident_verbal,reimbursement_Insurance)
                  VALUES('".$id."','".$license_id."','".$policy_id."','".$date."','".$verbal."','".$reimbursement_Insurance."')";
                 print_r($result=mysqli_query($conn,$sql));
                 
                  if($result)
                  {
                      echo "<script>alert('Accident  Added Successfully')</script>";
                  }
                }
                
                ?>

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
            <label for="exampleInputEmail1">Incident ID</label>
            <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Incident ID">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">License Plate</label>
            <select name="license_id" class="form-control" id="">
            <?php 
             $sql="SELECT * FROM car";
             $result=mysqli_query($conn,$sql);
            if($result->num_rows > 0)
            {
                while($row=mysqli_fetch_assoc($result))
                {?>
                    <option value="<?php echo $row['license_plate']?>"><?php echo $row['license_plate']?></option>
                <?php
                }
            }
            ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Customer</label>
            <select name="policy_id" class="form-control" id="">
            <?php 
             $sql="SELECT * FROM policy";
             $result=mysqli_query($conn,$sql);
            if($result->num_rows > 0)
            {
                while($row=mysqli_fetch_assoc($result))
                {?>
                    <option value="<?php echo $row['policy_id']?>"><?php echo $row['policy_id']?></option>
                <?php
                }
            }
            ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Date Incident</label>
            <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Chassis Number">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Number Incident Verbal</label>
            <input type="text" name="verbal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Reimbursement Insurance</label>
            <input type="text" name="reimbursement_Insurance" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Reimbursement_Insurance ">
        </div>

        <button type="submit" name="add_incident" class="btn btn-primary">Submit</button>
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
                                    <button class="btn btn-success text-white"  type="button"  data-toggle="modal" data-target="#exampleModal">Add Accident Car</button>

                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Incident ID</th>
                                                    <th>license_plate</th>
                                                    <th>Policy ID</th>
                                                    <th>Date Incident</th>
                                                    <th>Number Incident Verbal</th>
                                                    <th>Reimbursement_Insurance</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                             $customer =  new database();
                                            $result=$customer->accident();
                                            
                                            if($result->num_rows > 0)
                                            {
                                                while($row=mysqli_fetch_assoc($result))
                                                {?>
                                                  <tr>
                                                    <td><?php echo $row['license_plate']?> </td>
                                                    <td><?php echo $row['incident_id']?></td>
                                                    <td><?php echo $row['policy_id']?></td>
                                                    <td><?php echo $row['date_incident']?></td>
                                                    <td><?php echo $row['number_incident_verbal']?></td>
                                                    <td><?php echo $row['reimbursement_Insurance']?></td>
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