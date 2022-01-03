<!doctype html>
<html lang="en">
  <head>
  	<title> alma center</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">تسجيل الدخول</h3>
						<form action="#" class="login-form">
		      		<div class="form-group">
		      			<input type="text" id="adminusername" dir="rtl" class="form-control rounded-left" placeholder="اسم المستخدم">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" id="adminpassword" dir="rtl" class="form-control rounded-left" placeholder="كلمة المرور">

                  
	            </div>

                <span id="passwordloginvalid" style="float:right;"> </span>
                <br>
	            <div class="form-group">
	            	<button type="submit" id="Signin"  class="form-control btn btn-primary rounded submit px-3">تسجيل</button>
	            </div>
	         
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/js/jquery.min.js"></script>
  
	</body>
</html>


<script>

$('#Signin').on('click', function(event){

    
var formData = new FormData();
event.preventDefault();


var UserName=$("#adminusername").val();

var password=$("#adminpassword").val();

var page="adminlogin";

 if(UserName=="")
{	
 $("#adminusername").focus();
 return false;
}
else if(password=="")
{

 $("#adminpassword").focus();

 return false;
}
formData.append("password", password);
formData.append("UserName", UserName);
formData.append("page", page);

$.ajax({
url:"../service/login.php",
method:"POST",
data: formData,
processData: false,
contentType: false,
success:function(data){ 

if(data==404) 
{
$("#passwordloginvalid").html("اسم المستخدم او كلمة المرور غير صحيحة").addClass("error-msg");

$("#adminusername").focus();

 return false;      
}

	window.location = "index.php";

}


});
});
	
</script>
