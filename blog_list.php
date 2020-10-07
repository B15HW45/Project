<?php
include_once 'Config/db_conn.php';
include 'includes/header.php';
?>
<style type="text/css">
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        text-decoration: none;
        color: white;
    }
    h2{
        text-align: center;
        padding-top: 18px;
        padding-bottom: 12px;
    }
    h3 {
        text-align: center;
    }
    .blogs button{
        margin-bottom: 4%;
    }
    table  {
         border-collapse: collapse;
         width: 100%;
    }
    table, th, td {
  border: 1px solid black;
            }
            table th{
                height: 50px;
            }
    table  p{
        text-align: center;
        margin:2%;
    }

</style>
<div class="container">
    <h3 style="text-align: center;">This is the <mark>Record</mark> section of web page and here lies the main content.</h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-4">
<h3><a href="addblog.php"><button class="btn btn-lg btn-outline-danger">Create New Record</a></button></h3>
    </div>
        <div class="col-4">
<h3><a href="deletesql.php"><button class="btn btn-lg btn-outline-dark">Delete a Record</a></button></h3>
    </div>
    <div class="col-4">
<h3><a href="updatesql.php"><button class="btn btn-lg btn-outline-info">Update A Record</a></button></h3>
</div>
</div>
</div>
<div class="container">
  <h2>Records of students</h2>
  <div class="blogs">
<?php
$sqlquery = "SELECT * FROM student;";
$data = mysqli_query($conn, $sqlquery);

foreach ($data as $unitdata): ?>
   <table>
        <tr>
        <th><p>User Id</p></th>
        <th><p>Name</p></th>
        <th><p>Phone</p></th>
        <th><p>Address</p></th>
        <th><p>Email</p></th>
        <th><p>Qualifications</p></th>
        <th><p>Experience</p></th>
        <th><p>About</p></th>
    </tr>
    <tr>
        <td><p><?php
        echo $unitdata['user'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['name'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['phone'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['address'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['email'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['qualifications'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['experience'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['about'];
        ?></td></p>
    </tr><br>
</table>
<?php endforeach ;

?>
</div>
</div>
<div class="container">
    <h2>Records of Teachers</h2>
    <div class="records">
        <?php
$sqlqueryy = "SELECT * FROM teacher;";
$dataa = mysqli_query($connect, $sqlqueryy);

foreach ($data as $unitdata): ?>
   <table>
        <tr>
        <th><p>User Id</p></th>
        <th><p>Name</p></th>
        <th><p>Phone</p></th>
        <th><p>Address</p></th>
        <th><p>Email</p></th>
        <th><p>Qualifications</p></th>
        <th><p>Experience</p></th>
        <th><p>About</p></th>
    </tr>
    <tr>
        <td><p><?php
        echo $unitdata['user'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['name'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['phone'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['address'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['email'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['qualifications'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['experience'];
        ?></td></p>
          <p><td><?php
        echo $unitdata['about'];
        ?></td></p>
    </tr><br>
</table>
<?php endforeach ;

?>
</div>
</div>
<?php
include 'includes/footer.php'
?>