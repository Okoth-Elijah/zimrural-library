<?php include 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Staff Report</h1>
  </div><!-- /.col --><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
        <div class="card">
            <div class="panel-heading">
                 <h4 class="page-title"> Staff'S REPORT </h4> 
            </div>
            <div class="card-body">
              <form role="form" method="post" action="">
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="form-group">
                           <label> <b> Start Date: </b> </label>
                           <input type="date" class="form-control" name="start_date" max="<?=$today;?>" value="" required /> 
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group">
                           <label> <b> End Date: </b> </label>
                           <input type="date"  class="form-control" name="end_date" max="<?=$today;?>" value=""  /> 
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="form-group">
                          <label> &nbsp;</label>
                          <br/>
                              <input type="submit" name="get_report" value="Generate" class="btn pink-purple btn-md"/>
                          </div>
                      </div>
                    </div>
                </form>
                <form method="post" action="">
                <div class="col-sm-12">
                    <div class="form-group">
                    <label> &nbsp;</label>
                        <button type="submit" name="get_daily" class="btn pink-purple btn-sm"> <i class="fa fa-bar-chart"> </i> Daily Report </button>
                        <button type="submit" name="get_weekly" class="btn pink-purple btn-sm"> <i class="fa fa-bar-chart"> </i> Weekly Report </button>
                        <button type="submit" name="get_monthly" class="btn pink-purple btn-sm"> <i class="fa fa-bar-chart"> </i> Monthly Report </button>
                    </div>
                </div>
                </form>
            </div>
          </div>
      </div>
      <!-- /.card-body -->

    <?php
        if(isset($_POST['get_report'])){
        extract($_POST);
        if($start_date <= $today && $end_date <= $today){
        $sql = $dbh->query("SELECT * FROM users WHERE date_registered BETWEEN 
          '$start_date' AND '$end_date' ORDER BY date_registered DESC");
        $number = $dbh->query("SELECT count(*) FROM users WHERE date_registered BETWEEN 
      '$start_date' AND '$end_date' order by date_registered DESC")->fetchColumn();
       if($number  > 0){ ?>
        <br/>
        <div class="col-lg-12">
        <a href="#" class="btn pink-purple btn-sm" onclick="PrintContent('report')" > <i class="fa fa-print fa-fw"> </i>&nbsp;Print Report </a> 
        <br> </br>
            <div class="card card-info" id="report">
                <!-- /.panel-heading -->
                <div class="card-body">
                 <table width="100%" class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Date Added</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($val = $sql->fetch(PDO::FETCH_OBJ)){
                            ?>
                            <tr class="odd gradeX">
                                <td>000<?=$val->userid?> </td>
                                <td><?=ucwords($val->firstname.' '.$val->lastname); ?></td>
                                <td><?=$val->gender; ?></td>
                                <td><?=$val->phone; ?></td>
                                <td><?=$val->email; ?></td>
                                <td><?=$val->account_status; ?></td>
                                <td><?=date('jS F, Y',strtotime($val->date_registered)); ?></td>
                            </tr>
                    <?php }?> 
                        </tbody>
                    </table>
                    <hr/>
                    <p> <i> Staff Member Report Generated at <b style="color:red"><?=$dtime?> </i> </b> </p>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>  
        </div>
       <?php
       }else{
          echo "<script>
        alert('*** No staff Report matching your selection ***');
        window.location ='users-report';
        </script>"; 
       }
        }else{
            echo "<script>
            alert(' *** Start date or End date can not can exceed today ***');
            window.location ='users-report';
            </script>";
        }
        }elseif(isset($_POST['get_daily'])){
        $start_date = $today;
        $end_date = $today;
       $sql = $dbh->query("SELECT * FROM users WHERE  date_registered BETWEEN 
      '$start_date' AND '$end_date' ORDER BY date_registered DESC");
        $number = $dbh->query("SELECT count(*) FROM users WHERE date_registered BETWEEN 
      '$start_date' AND '$end_date' order by date_registered DESC")->fetchColumn();
       if($number  > 0){
           ?>
            <br/>
        <div class="col-lg-12">
        <a href="#" class="btn pink-purple btn-sm" onclick="PrintContent('report')" > <i class="fa fa-print fa-fw"> </i>&nbsp;Print Report </a> 
        <br> </br>
            <div class="card card-info" id="report">
                <div class="panel-heading">
                    <h4 class="page-title"> DAILY LENDING REPORT</h4>
                </div>
                <!-- /.panel-heading -->
                <div class="card-body">
                <table width="100%" class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Date Added</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($val = $sql->fetch(PDO::FETCH_OBJ)){
                            ?>
                            <tr class="odd gradeX">
                                <td>000<?=$val->userid?> </td>
                                <td><?=ucwords($val->firstname.' '.$val->lastname); ?></td>
                                <td><?=$val->gender; ?></td>
                                <td><?=$val->phone; ?></td>
                                <td><?=$val->email; ?></td>
                                <td><?=$val->account_status; ?></td>
                                <td><?=date('jS F, Y',strtotime($val->date_registered)); ?></td>
                            </tr>
                    <?php }?> 
                        </tbody>
                    </table>
                    <hr/>
                    <p> <i>Daily Staff Report Generated at <b style="color:red"><?=$dtime?> </i> </b> </p>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>  
        </div>
       <?php
       }else{
            echo "<script>
            alert('*** No staff Report matching your selection ***');
            window.location ='users-report';
            </script>"; 
       }
        }elseif(isset($_POST['get_weekly'])){
        $start_date = getWeek();
        $end_date = $today;
        $sql = $dbh->query("SELECT * FROM users WHERE  date_registered BETWEEN 
      '$start_date' AND '$end_date' ORDER BY date_registered DESC");
        $number = $dbh->query("SELECT count(*) FROM users WHERE date_registered BETWEEN 
      '$start_date' AND '$end_date' order by date_registered DESC")->fetchColumn();
       if($number  > 0){
           ?>
            <br/>
        <div class="col-lg-12">
        <a href="#" class="btn pink-purple btn-sm" onclick="PrintContent('report')" > <i class="fa fa-print fa-fw"> </i>&nbsp;Print Report </a> 
        <br> </br>
            <div class="card card-info" id="report">
                <div class="panel-heading">
                    <h4 class="page-title"> WEEKLY STAFF REPORT</h4>
                </div>
                <!-- /.panel-heading -->
                <div class="card-body">
                <table width="100%" class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Date Added</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($val = $sql->fetch(PDO::FETCH_OBJ)){
                            ?>
                            <tr class="odd gradeX">
                                <td>000<?=$val->userid?> </td>
                                <td><?=ucwords($val->firstname.' '.$val->lastname); ?></td>
                                <td><?=$val->gender; ?></td>
                                <td><?=$val->phone; ?></td>
                                <td><?=$val->email; ?></td>
                                <td><?=$val->account_status; ?></td>
                                <td><?=date('jS F, Y',strtotime($val->date_registered)); ?></td>
                            </tr>
                    <?php }?> 
                        </tbody>
                    </table>
                    <hr/>
                    <p> <i> Weekly Staff Member Report Generated at <b style="color:red"><?=$dtime?> </i> </b> </p>
                </div>
                <!-- /.panel-body -->
            </div>  
        </div>
       <?php
       }else{
            echo "<script>
            alert('*** No Staff Report matching your selection ***');
            window.location ='?clients-report';
            </script>"; 
       }
        }elseif(isset($_POST['get_monthly'])){
        $start_date = monthly();
        $end_date = $today;
        $sql = $dbh->query("SELECT * FROM users WHERE  date_registered BETWEEN 
        '$start_date' AND '$end_date' ORDER BY date_registered DESC");
        $number = $dbh->query("SELECT count(*) FROM users WHERE date_registered BETWEEN 
      '$start_date' AND '$end_date' order by date_registered DESC")->fetchColumn();

       if($number  > 0){
           ?>
            <br/>
        <div class="col-lg-12">
        <a href="#" class="btn pink-purple btn-sm" onclick="PrintContent('report')" > <i class="fa fa-print fa-fw"> </i>&nbsp;Print Report </a> 
        <br> </br>
            <div class="card card-info" id="report">
                <div class="panel-heading">
                    <h4 class="page-title"> MONTHLY STAFF REPORT</h4>
                </div>
                <!-- /.panel-heading -->
                <div class="card-body">
                <table width="100%" class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>#No</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Date Added</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($val = $sql->fetch(PDO::FETCH_OBJ)){
                            ?>
                            <tr class="odd gradeX">
                                <td>000<?=$val->userid?> </td>
                                <td><?=ucwords($val->firstname.' '.$val->lastname); ?></td>
                                <td><?=$val->gender; ?></td>
                                <td><?=$val->phone; ?></td>
                                <td><?=$val->email; ?></td>
                                <td><?=$val->account_status; ?></td>
                                <td><?=date('jS F, Y',strtotime($val->date_registered)); ?></td>
                            </tr>
                    <?php }?> 
                        </tbody>
                    </table>
                    <hr/>
                    <p> <i> Monthly Staff Report Generated at <b style="color:red"><?=$dtime?> </i> </b> </p>
                </div>
                <!-- /.panel-body -->
            </div>  
        </div>
       <?php
       }else{
            echo "<script>
            alert('*** No monthly Staff matching your selection ***');
            window.location ='?clients-report';
            </script>"; 
         }
      } ?>  
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>