<?php
include("inc/header.php");
include("../config.php");

$query = mysqli_query($conn, "SELECT * FROM clintmessages");

  $count = mysqli_num_rows($query);
    
?>

<div class="table-container">

    <div class="t-header">رسائل العملاء</div>
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
                   
                    <th> الراسل</th>
                    <th>البريد الالكترونى </th>
                    <th>رقم الهاتف </th>
                    <th> تاريخ الرسالة</th>
                    <th>العملية</th>
                </tr>
            </thead>
            <tbody>
                <?php
        


     $result=mysqli_query($conn,"SELECT * FROM clintmessages" );
     
     $num=1;
      while($row=mysqli_fetch_assoc($result))
          {
         
           ?>
                <tr>
                    <td><?php echo $num ?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><?php echo $row['Mobile'];?></td>
                   
                    <td><?php echo $row['SendDate'];?></td>
                   
                    <td>
                    <button type="button" data-toggle="modal" data-target="#MessageConfirmation" onclick="MessageClientInfo(<?php echo $row['MessageID']; ?>)" class="btn btn-info"> محتوى الرسالة</button>
                            &nbsp;&nbsp; &nbsp;   &nbsp;&nbsp; &nbsp;
                       
                  <button type="button" data-toggle="modal" data-target="#DeleteMessageConfirmation"  onclick="DeleteMessages(<?php echo $row['MessageID']; ?>)" class="btn btn-danger"> حذف الرسالة</button>
                        

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

</div>

<div class="modal fade" id="MessageConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3>محتوى الرسالة</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">


            <div class="form-groups">
          <label><h5 id="messageclient" style="padding-left:-10px">محتوى الرسالة</<h5></label>   
    
               
            </div>
            <div class="modal-footer" style="padding-left:220px">
                <a href="#" class="btn btn-danger" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div> 
</div>




<?php  include("inc/footer.php");?>



 







