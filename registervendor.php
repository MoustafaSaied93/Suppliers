<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>تسجيل الموردين</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="mord/fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="mord/vendor/date-picker/css/datepicker.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="mord/css/style.css">

		<link rel="stylesheet" href="mord/css/toastr.min.css">

		<style>  


#personalinfo,#companyinfo,#vatinfo,#countryinfo,#bankinfo,#sucesspage{

display:none;
}
		
		
			.form-holder i {
			
				text-align: left;
			
			}

	.next {
    padding: 0;
    border: none;
    display: inline-flex;
    height: 54px;
    width: 150px;
    letter-spacing: 1.3px;
    align-items: center;
    background: #e4bd37;
    font-family: "Muli-Bold";
    cursor: pointer;
    position: relative;
    padding-left: 34px;
    text-transform: uppercase;
    color: #fff;
    border-radius: 27px;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
}

.next:before {
    content: '\f2ee';
    font-size: 18px;
    position: absolute;
    top: 17px;
    right: 34px;
    font-family: Material-Design-Iconic-Font;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
}

.previous {
	padding: 0;
    border: none;
    display: inline-flex;
    height: 54px;
    width: 136px;
    letter-spacing: 1.3px;
    align-items: center;
	background: #fff;
    color: #666;
    font-family: "Muli-Bold";
    cursor: pointer;
    position: relative;
    padding-left: 57px;
    text-transform: uppercase;
   
    border-radius: 27px;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
}

.previous:before {
	content: '\f2ee';
    font-size: 18px;
    position: absolute;
    top: 17px;
    left: 32px;
    font-family: Material-Design-Iconic-Font;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
}
			
			
			
			</style>
	</head>
	<body>
		<div class="wrapper">
			<div class="image-holder">
				<img src="mord/images/form-wizard.png" alt="">
			</div>
            <form action="">
            	<div class="form-header">
            		<a href="#">تسجيل كمورد</a>
            		<h3>بوابة تسجيل  الموردين </h3>
            	</div>
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
					<div id="accountinfo">
	                <section>
						<h3 style="text-align: center;">تسجيل الدخول </h3>
						<div class="form-row" style="margin-bottom: 26px;">
	                    	<label for="">
	                    		اسم المستخدم
	                    	</label>
							<div class="form-holder">
	                    		<input type="text" id="UserName" class="form-control">
	                    	</div>
	                    </div>	
	                   
	                    
	                    
	                    <div class="form-row">
	                    	<label for="">
	                    	البريد الالكترونى 
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" id="Email" class="form-control">
	                    	</div>
	                    </div>		

						<div class="form-row">
	                    	<label for="">
	                    	كلمة المرور
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="password" id="passwords" class="form-control">
	                    	</div>


                            
	                    </div>
						
						<div class="action clearfix" style="float: right;" >
							
								
							
							<a href="#" id="nextstep1" class="next" >التالى</a></li>
								
																				
							</div>
	                </section>
					</div>

					
	                
					<!-- SECTION 2 -->
	                <h4></h4>
					<div id="countryinfo">

	                <section>

                    <h3 style="text-align: center;">اين يقع محلك التجارى</h3>
	                   
	                    <div class="form-row" style="margin-bottom: 50px;">
	                    	
	                    	<div class="form-holder">
	                    		<div class="checkbox-circle">
									<label class="male">
										<input type="radio" name="country" value="S-A" checked> السعودية<br>
										<span class="checkmark"></span>
									</label>
									<label class="female">
										<input type="radio" name="country" value="E-G"> مصر<br>
										<span class="checkmark"></span>
									</label>
									<label>
										<input type="radio" name="country" value="A-E">الامارات<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
	                    </div>	
						
						<div class="action clearfix" style="float: right;" >
							
															
							<a href="#" class="next" id="nextstep2" >التالى</a>
																			
						</div>

						<div class="action clearfix" style="float: left;" >
							
															
							<a href="#" class="previous" id="previoustep1" >السابق</a>
																			
						</div>
	                </section>

					</div>
				
					
					<!-- SECTION 3 -->
	                 <h4></h4>
					<div id="personalinfo">

	                <section>

                        <h3 style="text-align: center;">تفاصيل المتجر</h3>
	                    <div class="form-row" style="margin-bottom: 26px;">
                        
	                    	<label for="">
	                    		اسم الشركة او المتجر:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="text" id="CompanyName" class="form-control">
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    	رقم الهاتف:
	                    	</label>
	                    	<div class="form-holder">
	                    		<input type="number" id="Mobile" class="form-control">
	                    	</div>
	                    </div>	
                     	<div class="form-row">
	                    	<label for="">
	                    		المنطقة:
	                    	</label>
                            <div class="form-holder">
	                    		<div class="checkbox-circle">
									<label class="male">
										<input type="radio" name="area" value="north" checked> الشمالية<br>
										<span class="checkmark"></span>
									</label>
                                   
                                    <label class="male">
										<input type="radio" name="area" value="south">  الجنوبية<br>
										<span class="checkmark"></span>
									</label>
									<label class="female">
										<input type="radio" name="area" value="earth"> الشرقية<br>
										<span class="checkmark"></span>
									</label>
									<label>
										<input type="radio" name="area" value="wirth">الغربية<br>
										<span class="checkmark"></span>
									</label>
								</div>
	                    	</div>
                        </div>

                        <div class="form-row">
	                    	<label for="">
	                    		المدينة:
	                    	</label>
                            <div class="form-holder">
	                    		<input type="text" id="City" class="form-control">
	                    	</div>
                        </div>

                        <div class="form-row">
	                    	<label for="">
	                    		العنوان:
	                    	</label>
                            <div class="form-holder">
	                    		<input type="text" id="Address" class="form-control">
	                    	</div>
                        </div>
						
						
						<div class="action clearfix" style="float: right;" >
							
															
							<a href="#" class="next" id="nextstep3" >التالى</a>
																			
						</div>

						<div class="action clearfix" style="float: left;" >
							
															
							<a href="#" class="previous" id="previoustep2" >السابق</a>
																			
						</div>
	                </section>

					</div>
				

					<h4></h4>

                  <div id="companyinfo">
					<section>
                    <h3 style="text-align: center;">تفاصيل المرفقات </h3>
	                    <div class="form-row">
	                    	<label for="">
	                    		مرفق رقم الهوية:
	                    	</label>
	                    	<div class="form-holder">
                            <input accept="application/pdf,application/vnd.ms-excel" name="upload1" id="upload1" type="file">
	                    	</div>
	                    </div>	
	                    <div class="form-row">
	                    	<label for="">
	                    		مرفق الرخضة التجارية:
	                    	</label>
	                    	<div class="form-holder">
                            <input accept="application/pdf,application/vnd.ms-excel" name="upload2" id="upload2" type="file">
	                    	</div>
	                    </div>	


						<div class="action clearfix" style="float: right;" >
							
															
							<a href="#" class="next" id="nextstep4" >التالى</a>
																			
						</div>

						<div class="action clearfix" style="float: left;" >
							
															
							<a href="#" class="previous" id="previoustep3" >السابق</a>
																			
						</div>

                       
                    
	                </section>

			
					</div>
			

					<h4></h4>

                    <div id="bankinfo">
					<section>
						<h3 style="text-align: center;">تفاصيل البنك الخاصة بالبائع</h3>
							<div class="form-row">
								<label for="">
									اسم البنك :
								</label>
								<div class="form-holder">
								<input type="text" id="BankName" name="BankName" class="form-control">
								</div>
							</div>	
							<div class="form-row">
								<label for="">
									اسم الفرع :
								</label>
								<div class="form-holder">
								<input type="text" id="BranchName" name="BranchName" class="form-control">
								</div>
							</div>	
	
							<div class="form-row">
								<label for="">
									رقم الحساب :
								</label>
								<div class="form-holder">
								<input type="text" id="AccountNumber" name="AccountNumber" class="form-control">
								</div>
							</div>	
	
	
							<div class="form-row">
								<label for="">
									رقم الحساب المصرفى :
								</label>
								<div class="form-holder">
								<input type="text" id="IBANNumber" name="IBANNumber" class="form-control">
								</div>
							</div>	
							
							<div class="form-row">
								<label for="">
									سويفت كود :
								</label>
								<div class="form-holder">
								<input type="text" id="SwiftCode" name="SwiftCode" class="form-control">
								</div>
							</div>
	
							<div class="form-row">
								<label for="">
									العملة :
								</label>
								<div class="form-holder">
									<div class="checkbox-circle">
										<label class="male">
											<input type="radio" name="Currency" value="SAR" checked> الريال السعودى<br>
											<span class="checkmark"></span>
										</label>
										<label class="female">
											<input type="radio" name="Currency" value="pound"> الجنية المصرى<br>
											<span class="checkmark"></span>
										</label>
										<label>
											<input type="radio" name="Currency" value="Aed">الدرهم الامراتى<br>
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>

							<div class="action clearfix" style="float: right;" >
							
															
								<a href="#" class="next" id="nextstep5" >التالى</a>
																				
							</div>
	
							<div class="action clearfix" style="float: left;" >
								
																
								<a href="#" class="previous" id="previoustep4" >السابق</a>
																				
							</div>
							
							
						
					</section>

					</div>
	
					<br><br>
					<h4></h4>
					<div id="vatinfo">

					<section>
						<h3 style="text-align: center;">تفاصيل السجل التجارى والضريبة </h3>
							<div class="form-row">
								<label for="">
								  رقم السجل التجارى :
								</label>
								<div class="form-holder">
								<input type="text" id="CommercialRegister" name="CommercialRegister" class="form-control">
								</div>
							</div>	
							<div class="form-row">
								<label for="">
									تاريخ انتهاء السجل التجارى :
								</label>
								<div class="form-holder">
								<input type="date" class="form-control" id="CommercialExpDate">
								</div>
							</div>	
	 
							<div class="form-row">
								<label for="">
								  مرفق السجل التجارى :
								</label>
								<div class="form-holder">
								<input type="file" name="upload" id="upload" accept="application/pdf,application/vnd.ms-excel" />
								</div>
							</div>	

							<div class="action clearfix" style="float: right;" >
							
															
								<a href="#" class="next" id="nextstep6" >انهاء</a>
																				
							</div>
	
							<div class="action clearfix" style="float: left;" >
								
																
								<a href="#" class="previous" id="previoustep5" >السابق</a>
																				
							</div>

							<br><br>							
						
					</section>

					</div>
					
            	</div>
            </form>
		</div>

		<script src="mord/js/jquery-3.3.1.min.js"></script>
		
		<!-- JQUERY STEP -->
	
		<!-- DATE-PICKER -->
		<script src=mord/vendor/date-picker/js/datepicker.js"></script>
		<script src="mord/vendor/date-picker/js/datepicker.en.js"></script>

		<script src="mord/js/toastr.min.js"></script>

		
<!-- Template created and distributed by Colorlib -->
</body>
</html>

<script>
$('#nextstep1').on('click', function(event){

	

var formData = new FormData();
event.preventDefault();

var UserName=$("#UserName").val();
var Email=$("#Email").val();

var password=$("#passwords").val();

var entity="mail";



var regex1 = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;


 if(UserName=="")
{
 $("#UserName").focus();
 return false;
}

else if(Email=="")
{

 $("#Email").focus();
 return false;
}

else if(!regex1.test(Email)){
toastr.error("من فضلك ادخل بريد الكترونى صحيح");
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
 $("#passwords").focus();
 toastr.error("كلمة الحروف يجب انت تكون اكبر من 8 حروف");
 return false;
}

formData.append("entity", entity);
formData.append("Email", Email);

$.ajax({
url:"sharefunction/checkinfo.php",
method:"POST",
data: formData,
processData: false,
contentType: false,
success:function(data){

if(data==200)
{
toastr.error("هذا البريد مستخدم من قبل");
$("#Email").focus();
 return false;
}


else if(data==201)
{

 $("#countryinfo").animate( { "opacity": "show", top:"100"} , 500 );

$("#accountinfo").animate( { "opacity": "hide", top:"100"} , 500 );

}



}
});

});


$('#previoustep1').on('click', function(event){

event.preventDefault();

$("#countryinfo").animate( { "opacity": "hide", top:"100"} , 500 );

$("#accountinfo").animate( { "opacity": "show", top:"100"} , 500);

});


$('#nextstep2').on('click', function(event){




event.preventDefault();

$("#countryinfo").animate( { "opacity": "hide", top:"100"} , 300 );

$("#personalinfo").animate( { "opacity": "show", top:"100"} , 300);

});


$('#previoustep2').on('click', function(event){

event.preventDefault();

$("#countryinfo").animate( { "opacity": "show", top:"100"} , 300 );

$("#personalinfo").animate( { "opacity": "hide", top:"100"} , 300);

});




$('#nextstep3').on('click', function(event){

var formData1 = new FormData();

event.preventDefault();


var CompanyName= $("#CompanyName").val();


var Mobile=$("#Mobile").val();

var City=$("#City").val();
var Address=$("#Address").val();

var Mobile=$("#Mobile").val();

var Area=$("input[name='area']:checked").val();


if(CompanyName=="")
{
$("#CompanyName").focus();
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
 toastr.error("رقم الجوال اقل من 10 حروف");
 return false;
}




if(City=="")
{
$("#City").focus();
return false;
}

else if(Address=="")
{

$("#Address").focus();
return false;
}

$("#personalinfo").animate( { "opacity": "hide", top:"100"} , 300 );

$("#companyinfo").animate( { "opacity": "show", top:"100"} , 300 );


});


$('#previoustep3').on('click', function(event){

event.preventDefault();

$("#personalinfo").animate( { "opacity": "show", top:"100"} , 300 );

$("#companyinfo").animate( { "opacity": "hide", top:"100"} , 300 );

});


$('#nextstep4').on('click', function(event){

event.preventDefault();




$("#bankinfo").animate( { "opacity": "show", top:"100"} , 300 );

$("#companyinfo").animate( { "opacity": "hide", top:"100"} , 300 );

});


$('#previoustep4').on('click', function(event){

event.preventDefault();




$("#companyinfo").animate( { "opacity": "show", top:"100"} , 300 );

$("#bankinfo").animate( { "opacity": "hide", top:"100"} , 300 );

});

$('#nextstep5').on('click', function(event){

event.preventDefault();




$("#vatinfo").animate( { "opacity": "show", top:"100"} , 300 );

$("#bankinfo").animate( { "opacity": "hide", top:"100"} , 300 );

});


$('#previoustep5').on('click', function(event){

event.preventDefault();

$("#bankinfo").animate( { "opacity": "show", top:"100"} , 300 );

$("#vatinfo").animate( { "opacity": "hide", top:"100"} , 300 );

});




$('#nextstep6').on('click', function(event){

event.preventDefault();

var formData = new FormData();

var UserName = $("#UserName").val();;

var Email=$("#Email").val();


var password=$("#passwords").val();


var Country=$("input[name='country']:checked").val();



var CompanyName= $("#CompanyName").val();

var City= $("#City").val();

var Address =$("#Address").val();

var Mobile= $("#Mobile").val();

var Area=$("input[name='area']:checked").val();



// bank info

var BankName= $("#BankName").val();
var BranchName= $("#BranchName").val();
var AccountNumber= $("#AccountNumber").val();
var IBANNumber= $("#IBANNumber").val();
var SwiftCode= $("#SwiftCode").val();
var Currency=$("input[name='Currency']:checked").val();



var CommercialRegister= $("#CommercialRegister").val();

var dateCommercialExpDate= $("#CommercialExpDate").val();

var CommercialExpDate = dateCommercialExpDate.toString();

//upload file

var fileToUpload = document.getElementById("upload").files[0];
var fileToUpload1 = document.getElementById("upload1").files[0];
var fileToUpload2 = document.getElementById("upload2").files[0];




var  RegisterDate = new Date();


var newregister=(RegisterDate.getFullYear()+'/'+(RegisterDate.getMonth()+1)+'/'+RegisterDate.getDate());

var UserType="1";


var Page="Signup";
formData.append("page", Page);
formData.append("UserName", UserName);
formData.append("Email", Email);
formData.append("password", password);

formData.append("City", City);
formData.append("Address", Address);
formData.append("Mobile", Mobile);
formData.append("CompanyName", CompanyName);
formData.append("Country", Country);
formData.append("Area", Area);


//banksend

formData.append("BankName", BankName);
formData.append("BranchName", BranchName);
formData.append("AccountNumber", AccountNumber);
formData.append("IBANNumber",IBANNumber);
formData.append("SwiftCode", SwiftCode);
formData.append("Currency",Currency);




formData.append("CommercialRegister", CommercialRegister);
formData.append("CommercialExpDate", CommercialExpDate);
formData.append("RegisterDate", newregister);

formData.append("UserType", UserType);



formData.append("fileToUpload", fileToUpload);
formData.append("fileToUpload1", fileToUpload1);
formData.append("fileToUpload2", fileToUpload2);




var xhr = new XMLHttpRequest();

xhr.open("POST", "sharefunction/addfunction.php", true);
xhr.addEventListener("load", function (evt) { UploadComplete(evt); }, false);
xhr.addEventListener("error", function (evt) { UploadFailed(evt); }, false);
xhr.send(formData);

function UploadComplete(evt) {

	toastr.success("تم انشاء حسابك كمورد معنا فى المنصة وسوف يتم مراجعة بيانتك من قبل المنصة");

	window.location = "index.php";

}

function UploadFailed(evt) {
	alert("There was an error attempting to upload the file.");

}
});












</script>