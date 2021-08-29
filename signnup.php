
<html>
<head>
    <style>
        *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;

background-color:#f4f7f8;



}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: white;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;

  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #acca7a;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  border: 1px solid #acca7a;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #acca7a;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

#personalinfo,#companyinfo,#vatinfo,#countryinfo,#bankinfo,#sucesspage{

    display:none;
}

ul{
      margin-top: 0px;
      background: #fff;
      color: #000;
    }
    li{
      padding: 12px;
      cursor: pointer;
      color: black;
    }
    li:hover{
      background: #f0f0f0;
    }

    .radioInput.jsx-1640491058 {
    margin: 30px auto 0px;
}

.jsx-1640491058 {
    box-sizing: border-box;
}

.group.jsx-1640491058 .wrapper.jsx-1640491058 {
    display: flex;
}



.group.jsx-1640491058 {
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
    position: relative;
    margin-bottom: 10px;
    cursor: pointer;
}

.checkmarkWrapper.jsx-1640491058 input.jsx-1640491058 {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    top: 0px;
    right: 0px;
    height: 25px;
    width: 25px;
    z-index: 9999;
}

.checkmarkWrapper.jsx-1640491058 input.jsx-1640491058:checked ~ .checkmark.jsx-1640491058 {
    background-color: rgb(56, 102, 223);
}

.checkmark.jsx-1640491058 {
    position: absolute;
    top: 0px;
    right: 0px;
    height: 24px;
    width: 24px;
    border: 2px solid rgb(56, 102, 223);
    border-radius: 50%;
    font-weight: bolder;
    font-size: 23px;
}

input.jsx-1240009043 {
    font-size: 1.214rem;
    padding: 10px;
    display: block;
    width: 100%;
    border-top: none;
    border-right: none;
    border-left: none;
    border-image: initial;
    font-weight: 600;
    border-bottom: 1px solid rgb(226, 229, 241);
    appearance: textfield;
    user-select: text;
    transform: none;
    cursor: auto;
}


.dropArea {
    padding: 10px 0px;
    background:rgb(255 255 255 / 10%);
    display: table;
    color: rgb(64, 69, 83);
    cursor: pointer;
    font-weight: bold;
    width: 50%;
    text-align: center;
    box-sizing: border-box;
}


#upload,#upload1,#upload2,#upload3{



}
#upload1button {
  display: inline-block;
}




@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}

@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

     </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="assets/css/toastr.min.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>





    </head>
    <body>

      <form action="#" method="Post">

        <h1>Sign Up A Seller</h1>

        <div id="accountinfo">

        <fieldset>
          <legend><span class="number">1</span>Your account info</legend>
          <label for="name">UserName:</label>
          <input type="text" id="UserName" name="user_name" placeholder="Enter your Name">

          <label for="mail">Email:</label>
          <input type="text" id="Email" name="user_email" placeholder="Enter your Email">

          <label for="password">Password:</label>
          <input type="password" id="passwords" name="user_password" placeholder="Enter your Password">

          <button id="nextstep1">Next step</button>

      </div>


      <div id="countryinfo">
      <legend><span class="number">2</span>County</legend>
      <div class="jsx-1434954043">
        <div class="jsx-601550038">

        <div class="jsx-601550038 row">

        <legend class="jsx-601550038">Where is your business based</legend>

        <div class="jsx-601550038"><label>
          <div class="jsx-1640491058 radioInput">
          <div class="jsx-1640491058 group">

          <div class="jsx-1640491058 wrapper">
            <div class="jsx-1640491058 flagWrapper">

            <img src="images/emirates.png" width="20%" hieght="10%" class="jsx-1640491058">

          </div><label class="jsx-1640491058 ">United Arab Emirates</label>
        </div><div class="jsx-1640491058 checkmarkWrapper">
          <input type="radio" name="country" required="" class="jsx-1640491058  undefined" value="AE"><span class="jsx-1640491058 checkmark"></span>

        </div>

         </div>
          </div>
       </label>
      </div>
<div class="jsx-601550038"><label>
  <div class="jsx-1640491058 radioInput">
    <div class="jsx-1640491058 group">
      <div class="jsx-1640491058 wrapper">
        <div class="jsx-1640491058 flagWrapper">
          <img src="images/sa2.jpg" width="25%" hieght="10%"  class="jsx-1640491058">
        </div>
        <label class="jsx-1640491058 ">Saudi Arabia</label>

  </div>
  <div class="jsx-1640491058 checkmarkWrapper">
          <input type="radio" name="country" required="" class="jsx-1640491058  undefined" value="SA"><span class="jsx-1640491058 checkmark"></span>
        </div>
      </div>
    </div>
  </label>
</div>

<div class="jsx-601550038">
  <label>
 <div class="jsx-1640491058 radioInput">
<div class="jsx-1640491058 group">
        <div class="jsx-1640491058 wrapper">
          <div class="jsx-1640491058 flagWrapper">
          <img src="images/eg.jpg" width="30%" hieght="10%"  class="jsx-1640491058">
          </div>
          <label class="jsx-1640491058 ">Egypt</label>
        </div>
        <div class="jsx-1640491058 checkmarkWrapper">
          <input type="radio" name="country" required="" class="jsx-1640491058  undefined" value="EG">
          <span class="jsx-1640491058 checkmark">

          </span>
        </div>
      </div>
    </div>
  </label>
</div>
</div>
</div>
</div>
<br>

<button id="previoustep1">previos step </button>
   &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;


  <button  id="nextstep2">Next step </button>

    </div>

      <div id="personalinfo">

        <fieldset>
          <legend><span class="number">3</span> Store infomation</legend>

          <label for="name">Company legal  Name</label>
          <input type="text" id="CompanyName" name="CompanyName"  placeholder="Enter your CompanyName">


          <label for="name">company phone number:</label>
          <input type="number" id="Mobile" name="Mobile" placeholder="Enter your Mobile" >


          <label for="name">City</label>
          <input type="text" id="City" name="City" placeholder="Enter your City" >

          <div class="jsx-2448176800">

          <label for="name">Adress</label>

          <textarea placeholder="Enter your full Address" id="Address" name="address" rows="7" class="jsx-2448176800 errorTextBoxBorder">

          </textarea>

           </div>


      <div class="form-row">
			<div class="form-holder form-holder-2">
			<span class="label">Company Logo</span>
			<br><br>

        <img src="images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviews" />


        <input type="file" name="fileUploaderControl" id="fileUploaderControl" style="display:none;" accept="image/png, image/jpeg">
		</div>
		</div>

     <br><br>

     <button  id="previoustep2">previos step </button>
          &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;


          <button  id="nextstep3">Next step </button>


          </div>





      <div id="companyinfo">






        <fieldset>
          <legend><span class="number">4</span>Document Verification</legend>
          <br> <br>

          <label for="name">Upload Trade License</label>
          <div class="dropArea" aria-disabled="false">

            <input accept="application/pdf,application/vnd.ms-excel" name="upload1" id="upload1" type="file">
          </div>

          <br> <br>
        <label for="name">Upload National ID</label>

          <br>

          <div class="dropArea" aria-disabled="false">
            <input accept="application/pdf,application/vnd.ms-excel" name="upload2" id="upload2" type="file">
          </div>

        <br> <br>






        <button type="submit" id="previoustep3">previos step </button>
          &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;


          <button type="submit" id="nextstep4">Next step </button>

		</div>


    <div id="bankinfo">

        <fieldset>
          <legend><span class="number">5</span>BankDetails</legend>

          <label for="name">Beneficiary Name</label>
          <input type="text" id="BeneficiaryName" name="BeneficiaryName"  placeholder="Beneficiary Name">

          <label for="name">Bank Name</label>
          <input type="text" id="BankName" name="BankName" placeholder="Bank Name">

          <label for="name">Branch Name</label>
          <input type="text" id="BranchName" name="BranchName" placeholder="Branch  Name">


          <label for="name">Account Number</label>
          <input type="text" id="AccountNumber" name="AccountNumber" placeholder="Account Number">

          <label for="name">IBAN Number</label>
          <input type="text" id="IBANNumber" name="AIBANNumber"  placeholder="IBAN Number">

          <label for="name">Swift Code</label>
          <input type="text" id="SwiftCode" name="SwiftCode"  placeholder="Swift Code">

          <label for="name">Currency</label>

          <select id="Currency">
          <option value=""> Select Currency</option>
            <option value="Aed"> Emirates Derham (Aed)</option>
            <option value="SAR"> Saudi Arabia Riyal (SAR)</option>
            <option value="pound"> Egypt (pound)</option>

          <select>

          <label for="name">Upload either certified and stamped document by the bank</label>

          <br>

          <div class="dropArea" aria-disabled="false">


            <input accept="application/pdf,application/vnd.ms-excel" name="upload3" id="upload3" type="file">
          </div>

        <br> <br>



          <button type="submit" id="previoustep4">previos step </button>
          &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;
          <button type="submit" id="nextstep5">Next </button>

      </div>




        <div id="vatinfo">

        <fieldset>
          <legend><span class="number">6</span>vat infomation</legend>

          <label for="name">Tax Register number</label>
          <input type="text" id="TaxRegisternumber" name="TaxRegisternumber" placeholder="Tax Register number">

          <label for="name">Commercial Register number</label>
          <input type="text" id="CommercialRegister" name="CommercialRegister" placeholder="Commercial Register number">



          <label for="name">Commercial Register number ExpireDate</label>
          <input   type="date"   id="CommercialExpDate">

          <label for="name">Commercial Register Attach</label>

			<br>
      <div class="dropArea" aria-disabled="false">


		<input type="file" name="upload" id="upload" accept="application/pdf,application/vnd.ms-excel" />
    </div>

        <br> <br><br> <br>

          <button type="submit" id="previoustep5">previos step </button>
          &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;
          <button type="submit" id="nextstep6">finish </button>

      </div>

      </form>

    </body>
</html>

<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/toastr.min.js"></script>

<script>


$(document).ready(function () {


$('#imagePreviews').click(function () {

$('#fileUploaderControl').click();
});


$("#fileUploaderControl").change(function () {

var file = document.getElementById("fileUploaderControl").files[0];

var readImg = new FileReader();
readImg.readAsDataURL(file);
readImg.onload = function (e) {
    $('#imagePreviews').attr('src', e.target.result).fadeIn();

}
})
});






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
toastr.error("enter valid email");
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
 toastr.error(" password must be more than 8 character");
 return false;
}

formData.append("entity", entity);
formData.append("Email", Email);

$.ajax({
url:"checkinfo.php",
method:"POST",
data: formData,
processData: false,
contentType: false,
success:function(data){

if(data==200)
{
toastr.error("Email already exist");
$("#Email").focus();
 return false;
}


else if(data==201)
{

 $("#countryinfo").animate( { "opacity": "show", top:"100"} , 300 );

$("#accountinfo").animate( { "opacity": "hide", top:"100"} , 300 );

}


}
});


window.var1=UserName;

window.var2=Email;

window.var3=password;



});



$('#previoustep1').on('click', function(event){

    event.preventDefault();

$("#countryinfo").animate( { "opacity": "hide", top:"100"} , 300 );

$("#accountinfo").animate( { "opacity": "show", top:"100"} , 300);

});


$('#nextstep2').on('click', function(event){




event.preventDefault();

$("#countryinfo").animate( { "opacity": "hide", top:"100"} , 300 );

$("#personalinfo").animate( { "opacity": "show", top:"100"} , 300);

});


$('#nextstep3').on('click', function(event){

 var formData1 = new FormData();

event.preventDefault();


var CompanyName= $("#CompanyName").val();



var img=document.getElementById("fileUploaderControl").files[0];


var City=$("#City").val();
var Address=$("#Address").val();

var Mobile=$("#Mobile").val();

var entity="mobile";

if(CompanyName=="")
{
 $("#CompanyName").focus();
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

else if(Mobile=="")
{

 $("#Mobile").focus();
 return false;
}


formData1.append("entity", entity);
formData1.append("Mobile", Mobile);

$.ajax({
url:"checkinfo.php",
method:"POST",
data: formData1,
processData: false,
contentType: false,
success:function(data){

if(data==202)
{
toastr.error("Mobile already exist");
$("#Mobile").focus();
 return false;
}


else if(data==203)
{

 $("#personalinfo").animate( { "opacity": "hide", top:"100"} , 300 );

$("#companyinfo").animate( { "opacity": "show", top:"100"} , 300 );

}


}
});


window.var4=City;

window.var5=Address;

window.var6=Mobile;


});

$('#previoustep2').on('click', function(event){

    event.preventDefault();

  $("#countryinfo").animate( { "opacity": "show", top:"100"} , 300 );

$("#personalinfo").animate( { "opacity": "hide", top:"100"} , 300);

});


$('#nextstep4').on('click', function(event){

    event.preventDefault();




$("#bankinfo").animate( { "opacity": "show", top:"100"} , 300 );

$("#companyinfo").animate( { "opacity": "hide", top:"100"} , 300 );

});

$('#previoustep3').on('click', function(event){

    event.preventDefault();

$("#personalinfo").animate( { "opacity": "show", top:"100"} , 300 );

$("#companyinfo").animate( { "opacity": "hide", top:"100"} , 300 );

});


$('#nextstep5').on('click', function(event){

event.preventDefault();




$("#vatinfo").animate( { "opacity": "show", top:"100"} , 300 );

$("#bankinfo").animate( { "opacity": "hide", top:"100"} , 300 );

});


$('#previoustep4').on('click', function(event){

event.preventDefault();




$("#companyinfo").animate( { "opacity": "show", top:"100"} , 300 );

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

  var UserName = window.var1;

  var Email=window.var2;

var password=window.var3;

 var City= window.var4;

 var Address =window.var5;

 var Mobile= window.var6;

 var CompanyName= $("#CompanyName").val();

 var Country=$("input[name='country']:checked").val();



 var img=document.getElementById("fileUploaderControl").files[0];

 // bank info



var BeneficiaryName= $("#BeneficiaryName").val();
var BankName= $("#BankName").val();
var BranchName= $("#BranchName").val();
var AccountNumber= $("#AccountNumber").val();
var IBANNumber= $("#IBANNumber").val();
var SwiftCode= $("#SwiftCode").val();
var Currency= $("#Currency").val();

var TaxRegisternumber= $("#TaxRegisternumber").val();
 var CommercialRegister= $("#CommercialRegister").val();

 var dateCommercialExpDate= $("#CommercialExpDate").val();

 var CommercialExpDate = dateCommercialExpDate.toString();

 //upload file

 var fileToUpload = document.getElementById("upload").files[0];
 var fileToUpload1 = document.getElementById("upload1").files[0];
 var fileToUpload2 = document.getElementById("upload2").files[0];
 var fileToUpload3 = document.getElementById("upload3").files[0];



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


//banksend
formData.append("BeneficiaryName", BeneficiaryName);
formData.append("BankName", BankName);
formData.append("BranchName", BranchName);
formData.append("AccountNumber", AccountNumber);
formData.append("IBANNumber",IBANNumber);
formData.append("SwiftCode", SwiftCode);
formData.append("Currency",Currency);
formData.append("CompanyName", CompanyName);


formData.append("TaxRegisternumber", TaxRegisternumber);
formData.append("CommercialRegister", CommercialRegister);
formData.append("CommercialExpDate", CommercialExpDate);
formData.append("RegisterDate", newregister);

formData.append("UserType", UserType);

formData.append("img", img);

formData.append("fileToUpload", fileToUpload);
formData.append("fileToUpload1", fileToUpload1);
formData.append("fileToUpload2", fileToUpload2);
formData.append("fileToUpload3", fileToUpload3);



    var xhr = new XMLHttpRequest();

    xhr.open("POST", "addfunction.php", true);
    xhr.addEventListener("load", function (evt) { UploadComplete(evt); }, false);
    xhr.addEventListener("error", function (evt) { UploadFailed(evt); }, false);
    xhr.send(formData);

    function UploadComplete(evt) {


        window.location = "thankyou.php";

    }

    function UploadFailed(evt) {
        alert("There was an error attempting to upload the file.");

    }
});


</script>
