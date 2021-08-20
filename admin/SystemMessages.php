<?php
include("inc/header.php");
include("../config.php");

$UserID=$_SESSION['id'];

$query = mysqli_query($conn, "SELECT * FROM notfication WHERE  UserID='$UserID'");

  $count = mysqli_num_rows($query);

?>

<div class="table-container">

    <div class="t-header">رسائل النظام</div>
    <div class="table-responsive">
        <br><br>


        <div class="row gutters">
	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="info-stats4">
			<div class="info-icon">
				<i class="icon-message nav-icon"></i>
			</div>
			<div class="sale-num">
				<h4><?php echo $count ?></h4>
				<h4>عدد الرسائل</h4>
			</div>
		</div>
	</div>

</div>

        <table id="copy-print-csv" class="table custom-table">

            <thead>
                <tr>
                    <th>رقم الرسالة </th>

                    <th>اسم المنتج </th>
                   
                    <th> الراسل</th>

                    <th> تاريخ الرسالة</th>
                    <th>العملية</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $userid= $_SESSION ['id'];


     $result=mysqli_query($conn,"SELECT * FROM notfication where UserID='$userid'");
     
     $num=1;
      while($row=mysqli_fetch_assoc($result))
          {
         
           ?>
                <tr>
                    <td><?php echo $num ?></td>
                    <td><?php echo $row['ProductName'];?></td>
                    <td><?php echo 'System Admin';?></td>
                    <td><?php echo $row['MessageDate'];?></td>
                   
                    <td>
                    <button type="button" data-toggle="modal" data-target="#MessageConfirmation" onclick="MessageInfo(<?php echo $row['NotID']; ?>)" class="btn btn-info"> محتوى الرسالة</button>
                            &nbsp;&nbsp; &nbsp;   &nbsp;&nbsp; &nbsp;
                       
                            <button type="button" data-toggle="modal" data-target="#DeletesystemConfirmation" onclick="DeleteMessages(<?php echo $row['NotID']; ?>)" class="btn btn-danger"> حذف الرسالة</button>
                        

                    </td>
                </tr>
                <?php
    $num=$num+1;
      }

      ?>
            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="DeletesystemConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h6>هل انت متاكد من عملية الحذف</h6>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmDeletemessage()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>




<?php  include("inc/confirmation.php");?>
<?php  include("inc/footer.php");?>
