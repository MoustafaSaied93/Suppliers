
<?php include("inc/header.php");


$UserID=$_SESSION['id'];

$query2 = mysqli_query($conn, "SELECT * FROM product WHERE Accept='0'and Refused='0'and UserID='$UserID'");

  $count2 = mysqli_num_rows($query2);



  $query3 = mysqli_query($conn, "SELECT * FROM product WHERE Accept='1'and Refused='0'and UserID='$UserID'");

  $count3 = mysqli_num_rows($query3);



  $query4 = mysqli_query($conn, "SELECT * FROM product WHERE Accept='0'and Refused='1'and UserID='$UserID'");

  $count4 = mysqli_num_rows($query4);


  $query5 = mysqli_query($conn, "SELECT * FROM product WHERE  UserID='$UserID'");

  $count5 = mysqli_num_rows($query5);



  $query6 = mysqli_query($conn, "SELECT * FROM notfication WHERE  UserID='$UserID'");

  $count6 = mysqli_num_rows($query6);
    












?>



<!-- Content wrapper start -->
<div class="content-wrapper">

<!-- Row start -->
<div class="row gutters">
	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="info-stats4">
			<div class="info-icon">
				<i class="icon-shopping-cart1"></i>
			</div>
			<div class="sale-num">
				<h4><?php echo $count5  ?></h4>
				<h4>اجمالى المنتجات</h4>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="info-stats4">
			<div class="info-icon">
				<i class="icon-shopping-cart1"></i>
			</div>
			<div class="sale-num">
			<h4><?php echo $count3  ?></h4>
				<h4> اجمالى المنتجات المقبولة</h4>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="info-stats4">
			<div class="info-icon">
				<i class="icon-shopping-cart1"></i>
			</div>
			<div class="sale-num">
			<h4><?php echo $count4  ?></h4>
				<h4> اجمالى المنتجات المرفوضة</h4>
			</div>
		</div>
	</div>

	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="info-stats4">
			<div class="info-icon">
				<i class="icon-shopping-cart1"></i>
			</div>
			<div class="sale-num">
			<h4><?php echo $count2  ?></h4>
				<h4> اجمالى المنتجات المعلقة</h4>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="info-stats4">
			<div class="info-icon">
				<i class="icon-message nav-icon"></i>
			</div>
			<div class="sale-num">
			<h4><?php echo $count6  ?></h4>
				<h4>عدد رسائل النظام</h4>
			</div>
		</div>
	</div>




</div>





</div>
<!-- Row end -->

</div>
<!-- Content wrapper end -->

</div>





	<?php  include("inc/footer.php");?>
