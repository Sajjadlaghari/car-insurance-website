
  <?php
       require_once('includes/navbar.php');
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
  if(isset($_POST['add']))
  {
    echo "<script>alert('Working')</script>";
    
    $add = new Database();
    $result=$add->add_agency($_POST['id'],$_POST['name'],$_POST['indi']);
    if($result)
    {
        echo "<script>alert('Agency Added Successfully')</script>";
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
            <label for="exampleInputEmail1">Agency ID</label>
            <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">IndirizzoAgenzia</label>
            <input type="text" name="indi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Agency Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
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
                                    <button class="btn btn-success text-white"  type="button"  data-toggle="modal" data-target="#exampleModal">Add Agency</button>
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Agency</th>
                                                    <th>Number of Policies</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                             $customer =  new database();
                                            $result=$customer->agencies();
                                            
                                            if($result->num_rows > 0)
                                            {
                                                while($row=mysqli_fetch_assoc($result))
                                                {?>
                                                  <tr>
                                                    <td><?php echo $row['Agency']?> </td>
                                                    <td><?php echo $row['Number']?></td>
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


                    
                    <div class="row mt-5">
                        <h4 class="text-center text-success" style="text-align:center">All Agency Record</h4>
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
                                        <table id="row-select" class="display table table-borderd table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Agency ID</th>
                                                    <th>indirizzoAgenzia</th>
                                                    <th>Agency Name</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                            $sql="SELECT * FROM insurance_agency";
                                            $result=mysqli_query($conn,$sql);
                                            if($result->num_rows > 0)
                                            
                                            {
                                                while($row=mysqli_fetch_assoc($result))
                                                {?>
                                                  <tr>
                                                    <td><?php echo $row['agency_Id']?> </td>
                                                    <td><?php echo $row['indirizzoAgenzia']?> </td>
                                                    <td><?php echo $row['agency_name']?></td>
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