
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
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];

                    $sql="DELETE FROM policy WHERE policy_id=".$id;
                    $result=mysqli_query($conn,$sql);
                    if($result)
                    {
                      echo "<script>alert('Policy Deleted Successfully')</script>";

                    }

                }
                ?>

                <?php
                if(isset($_POST['add_policy']))
                {
                    $id=$_POST['id'];
                    $cost=$_POST['cost'];
                    $license_id=$_POST['license_id'];
                
                  $sql="INSERT INTO policy(policy_id,policy_cost,license_plate)
                  VALUES('".$id."','".$cost."','".$license_id."')";
                 $result=mysqli_query($conn,$sql);
                 
                  if($result)
                  {
                      echo "<script>alert('Policy Added Successfully')</script>";
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
            <label for="exampleInputEmail1">Policy ID</label>
            <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Policy ID">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Policy COst</label>
            <input type="text" name="cost" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Policy Cost">
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
        
       
        <button type="submit" name="add_policy" class="btn btn-primary">Submit</button>
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
                                    <button class="btn btn-success text-white"  type="button"  data-toggle="modal" data-target="#exampleModal">Add Policy</button>

                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Policy ID</th>
                                                    <th>Policy Cost</th>
                                                    <th>License Plate</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                            $sql="SELECT * FROM policy";
                                            $result=mysqli_query($conn,$sql);
                                            if($result->num_rows > 0)
                                            {
                                                while($row=mysqli_fetch_assoc($result))
                                                {?>
                                                  <tr>
                                                    <td><?php echo $row['policy_id']?> </td>
                                                    <td><?php echo $row['policy_cost']?> </td>
                                                    <td><?php echo $row['license_plate']?></td>
                                                    <td><a href="?id=<?php echo $row['policy_id']?>" class="btn btn-danger">Delete</a></td>
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