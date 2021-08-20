$('#UpdateProfile').on('click', function(event){

    var formData = new FormData();
    event.preventDefault();

    var UserID = $("#UserID").val();
    var UserName=$("#UserName").val();
     var password=$("#passwords").val();
    var Email=$("#Email").val();

    var page="AccountUser";

    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; 



    if(UserName=="")
    {

        $('#UserName').focus();

        return false;
    }

    else if(Email=="")
 {
	 $("#Email").focus();
	 return false;
 }

else if(!regex.test(Email)){  
toastr.error("برجاء ادخال بريد الكتروني صحيح");  
$("#Email").focus();

return false;
 
}

else if(password=="")
 {
	 $("#passwords").focus();
	 return false;
 }

 else if(password.length <8)
 {

	  toastr.error("كلمة المرور يجب انت تحتوى على 8 حروف او اكثر");
	  $("#passwords").focus();
	
	 return false;
 }
 formData.append("UserID", UserID);
 formData.append("UserName", UserName);
formData.append("password", password);
formData.append("Email", Email);

formData.append("Page", page);

$.ajax({
  url:"../updatefunction.php",
  method:"POST",
   data: formData,
  processData: false,
  contentType: false,
  success:function(data){ 
  if(data==202) 
  {
	toastr.error("هذا الايميل موجود من قبل");
	$("#Email").focus();
	 return false;      
  }

  
  else  
  {
	toastr.success(" تم تخديث بياناتك بنجاح");
    $("#UserSetting").modal("hide");
window.setTimeout(function () { location.reload() }, 3000)
        }
	 
  }   
   

});
});

var togglePassword = document.querySelector('#togglePassword');
var password = document.querySelector('#passwords');


togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
