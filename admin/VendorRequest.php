<?php
include("inc/header.php");
include("../config.php");

$query = mysqli_query($conn, "SELECT * FROM product WHERE Accept='0'and Refused='0'");

  $count = mysqli_num_rows($query);
    
?>

<div class="table-container">

    <div class="t-header">طلبات البائعين</div>
    <div class="table-responsive">
        <br><br>

        <div class="row gutters">
	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="info-stats4">
			<div class="info-icon">
				<i class="icon-shopping-cart nav-icon"></i>
			</div>
			<div class="sale-num">
				<h4><?php echo $count ?></h4>
				<h4>عدد الطلبات</h4>
			</div>
		</div>
	</div>

</div>


        <table id="copy-print-csv" class="table custom-table">

            <thead>
                <tr>
                    <th> رقم المنتج </th>
                    <th>اسم البائع</th>
                    <th>اسم المنتج</th>
                    <th>الصنف</th>
                    <th>مرفقات المنتج</th>
                    <th> صورة المنتج او الشركة</th>
                    <th>العملية</th>
                </tr>
            </thead>
            <tbody>
                <?php
  

     $result=mysqli_query($conn,"SELECT p.*, a.*, c.*
     FROM product p INNER JOIN
     accounts a
          ON p.UserID = a.UserID INNER JOIN
          categories c
          ON p.cat_id = c.cat_id WHERE p.Accept='0'and p.Refused='0'");
    // $num=1;
     $num=1;

      while($row=mysqli_fetch_assoc($result))
          {
            
            if($row['image1']!="" && $row['image1'] !="images/products/")
           {
             $photo='<td> <img src="../images/products/' .$row['image1'].'" height="30" width="50"></td>';
           }

           else if($row['CompProfile']!="")
           {
             $photo='<td> <img src="../' .$row['CompProfile'].'" height="30" width="50"></td>';
           }


           else
           {
           $photo='<td> 
                   <img src="../images/NoImage.jpg"> </td>';
           }
           
           $Attach='<td> <a href="../Files/'.$row['AttachFile'].'" download>'.$row['AttachFile'].'</a></td>';

         
           ?>
                <tr>
                    <td><?php echo $num ?></td>
                    <td><?php echo $row['UserName'];?></td>
                    <td><?php echo $row['Product_Name'];?></td>
                    <td><?php echo $row['cat_name'];?></td>
                    <?php echo $Attach ?>
                    <?php echo $photo;?>
                    <td>
                        <a href="ProductDetails.php?id=<?php echo $row['product_id']; ?>" class="btn btn-info">
                            تفاصيل</a>
                        <button type="button" data-toggle="modal" data-target="#AcceptConfirmation"
                            onclick="AcceptProduct(<?php echo $row['product_id'];?>,<?php echo $row['UserID'];?>)" class="btn btn-primary">
                            قبول</button>
                            <button type="button" data-toggle="modal" data-target="#RefusedConfirmation"
                            onclick="RefusedProduct(<?php echo $row['product_id'];?>,<?php echo $row['UserID'];?>)" class="btn btn-danger">
                            رفض</button>

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

<!-- Notfication modal --> 
<div class="modal fade" id="NotficationConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3>ارسال اشعار</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">


            <div class="form-group">
          <label><h6>محتوى الرسالة</h6></label>                                                    
         <textarea class = "form-control" name="Message" id="Message" required="" placeholder="ادخل محتوى الرسالة"></textarea>
                                                               
          </div>
               
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-success" id="Sendnotfication" >تاكيد</a>
                <a href="#" class="btn btn-danger" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>







<?php  include("inc/confirmation.php");?>
<?php  include("inc/AllPopup.php");?>
<?php  include("inc/footer.php");?>
