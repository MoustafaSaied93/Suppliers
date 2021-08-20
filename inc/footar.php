	<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
					<div class="footer_about_widget">
						<h4>عن تجار</h4>
						<p>نسعى في الشركة السعودية لوساطة التجار والموردين إلى الارتقاء بمستوى جودة خدماتنا وبناء علاقات عمل وثيقة ومستدامة مع شركائنا تؤمن لنا النمو والتوسع؛.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_qlink_widget">
						<h4>روابط سريعة</h4>
						<ul class="list-unstyled">
							<li><a href="#">عن تجار</a></li>
							<li><a href="#">اسئلة شائعة</a></li>
							<li><a href="#"> السياسات</a></li>
							<li><a href="#">أخبار عالمية</a></li>
							<li><a href="#">اتصل بنا</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_contact_widget">
						<h4>معلومات التواصل </h4>
						<ul class="list-unstyled">
							<li><a href="#">info@findhouse.com</a></li>
							<li><a href="#">Collins Street West, Victoria</a></li>
							<li><a href="#">8007, Australia.</a></li>
							<li><a href="#">+1 246-345-0699</a></li>
							<li><a href="#">+1 246-345-0695</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_social_widget">
						<h4>تابعنا</h4>
						<ul class="mb30">
							<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
						</ul>
						<h4>احدث عروضنا</h4>
						<form class="footer_mailchimp_form">
						 	<div class="form-row align-items-center">
							    <div class="col-auto">
							    	<input type="email" class="form-control mb-2" id="inlineFormInput" placeholder="البريد الالكتروني">
							    </div>
							    <div class="col-auto">
							    	<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-angle-right"></i></button>
							    </div>
						  	</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



	

	<!-- Our Footer Bottom Area -->
	<section class="footer_middle_area pt30 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="footer_menu_widget">
						<ul>
							<li class="list-inline-item"><a href="#">الريئسية</a></li>
							<li class="list-inline-item"><a href="#">عن تجار</a></li>
							<li class="list-inline-item"><a href="#">المنتجات</a></li>
							<li class="list-inline-item"><a href="#">الخدمات</a></li>
							<li class="list-inline-item"><a href="#">بوابة الموردين</a></li>
							<li class="list-inline-item"><a href="#">اتصل بنا</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget text-right">
						<p>© 2021 صنعة بواسطة منصة تجار الرقمية </p>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/isotop.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/pricing-slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/toastr.min.js"></script>
</body>
</html>



<script>

$('#Signin').on('click', function(event){
  

var formData = new FormData();
event.preventDefault();


 
var Email=$("#Email").val();

var password=$("#passwords").val();



var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; 


 if(Email=="")
{

 $("#Email").focus();
 return false;
}

else if(!regex.test(Email)){  
toastr.error("ادخل بريد الكترونى صحيح");  
$("#Email").focus();

return false;

}

else if(password=="")
{
 $("#passwords").focus();

 return false;
}
var page="Login";

formData.append("password", password);
formData.append("Email", Email);
formData.append("page", page);

$.ajax({
url:"../Suppliers/sharefunction/login.php",
method:"POST",
data: formData,
processData: false,
contentType: false,
success:function(data){ 

if(data==202) 
{
toastr.error("يوجد خطا فى البريد الالكترونى او كلمة المرور");
$("#Email").focus();
 return false;      
}


else if(data==201) 
{
toastr.error("عذرا يوجد مشكلة ما فى حسابك ");
$("#Email").focus();
 return false;      
}




else if(data==203)
{

window.location = "index.php";




}

else if(data==204)
{

window.location = "../sapplier/Admin/index.php";


}


}  
 


});
});






//signout function


$('#Signout').on('click', function(event){


var formData = new FormData();
event.preventDefault();


var UserName=$("#UserName").val();
var Email=$("#Emails").val();

var password=$("#passwordss").val();

var Mobile=$("#Mobile").val();

var Address=$("#Address").val();

var page="registercustomer";
var UserType="2";

var  RegisterDate = new Date();


var newregister=(RegisterDate.getFullYear()+'/'+(RegisterDate.getMonth()+1)+'/'+RegisterDate.getDate());



var regex1 = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; 


 if(UserName=="")
{
	
 $("#UserName").focus();
 return false;
}

else if(Email=="")
{
	
 $("#Emails").focus();
 return false;
}

else if(!regex1.test(Email)){  
toastr.error("ادخل بريد الكترونى صحيح");  
$("#Emails").focus();

return false;

}

else if(password=="")
{
 $("#passwordss").focus();

 return false;
}


else if(password.length <8)
{
 $("#passwordss").focus();
 toastr.error(" كلمة المرور يجب ان تكون اكبر من 8 حروف"); 
 return false;
}


else if(Mobile=="")
{
 $("#Mobile").focus();

 return false;
}


else if(Mobile.length <10)
{
 $("#Mobile").focus();
 toastr.error(" رقم الهاتف يجب ان يكون اكبر من عشر ارقام"); 
 return false;
}






formData.append("password", password);
formData.append("UserName", UserName);
formData.append("Email", Email);
formData.append("Mobile", Mobile);
formData.append("Address", Address);
formData.append("UserType",UserType );
formData.append("RegisterDate",newregister );
formData.append("page", page);

$.ajax({
url:"../Suppliers/sharefunction/Register.php",
method:"POST",
data: formData,
processData: false,
contentType: false,
success:function(data){ 

if(data==200) 
{
toastr.error("البريد الالكترونى مستخدم من قبل ");
$("#Emails").focus();
 return false;      
}


else if(data==201) 
{
toastr.error("رقم الهاتف مستخدم من قبل");
$("#Mobile").focus();
 return false;      
}


else 
{
	toastr.success("تم انشاء حسابك بنجاح");
	setTimeout(function(){
	 window.location.href = 'index.php';
   }, 5000);

}

}  
 


});
});



function SendClientMessage()

{
	
 var formData = new FormData();
 event.preventDefault();

var Name=$("#Name").val();
var Email=$("#Emails").val();


var Mobile=$("#Mobile").val();

var Subject=$("#Subject").val();

var Message=$("#Message").val();

var page="SendClientMessage";

var  RegisterDate = new Date();


var newregister=(RegisterDate.getFullYear()+'/'+(RegisterDate.getMonth()+1)+'/'+RegisterDate.getDate());



var regex1 = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; 


 if(Name=="")
{
	
 $("#Name").focus();
 return false;
}

else if(Email=="")
{
	
 $("#Emails").focus();
 return false;
}

else if(!regex1.test(Email)){  
toastr.error("برجاء ادخال بريد الكترونى صحيح");  
$("#Emails").focus();

return false;

}


else if(Mobile=="")
{
 $("#Mobile").focus();
 
 return false;
}


else if(Mobile.length <10)
{
 $("#Mobile").focus();
 toastr.error("رقم الهاتف يجب ان يكون اكبر من 10 حروف"); 
 return false;
}


else if(Message=="")
{
 $("#Message").focus();
 
 return false;
}


formData.append("Name", Name);
formData.append("Email", Email);
formData.append("Mobile", Mobile);
formData.append("Subject", Subject);
formData.append("Message",Message );
formData.append("SendDate",newregister );
formData.append("page", page);

$.ajax({

url:"../Suppliers/sharefunction/Register.php",
method:"POST",
data: formData,
processData: false,
contentType: false,
success:function(data){ 


toastr.success("تم ارسال رسالتك بنجاح");

$("#Name").val("");
$("#Emails").val("");


$("#Mobile").val("");

$("#Subject").val("");

$("#Message").val("");

 
 
}

});


}


 </script>