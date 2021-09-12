


$('#SaveProduct').click(function (event) {
    event.preventDefault();
var formData = new FormData();
var cat_id=$("#cat_id").val();
var CatTypeID=$("#CatTypeID").val();
var SubCatID=$("#SubCatID").val();
var SubCatTypeID=$("#SubCatTypeID").val();

var UserID=$("#UserID").val();


if(cat_id!="8")

{

    SubCatID="";

}



var Part_Number=$("#Part_Number").val();
var description=$("#Description").val();
var Product_Warranty=$("#Product_Warranty").val();

var Price=$("#Price").val();



var  RegisterDate = new Date();

var newregister=(RegisterDate.getFullYear()+'/'+(RegisterDate.getMonth()+1)+'/'+RegisterDate.getDate());
 
var Size=$("#Size").val();
var Motorpower=$("#Motorpower").val();
var Length=$("#Length").val();
var Diameter=$("#Diameter").val();
var Out_Side_Diameter=$("#Out_Side_Diameter").val();
var Width=$("#Width").val();
var wieght=$("#wieght").val();
var Hieght=$("#Hieght").val();
var Voltage=$("#Voltage").val();
var Services=$("#Services").val();
var Stock=$("#Stock").val();
var Industry_Country=$("#Industry_Country").val();

var img=document.getElementById("fileUploaderControls1").files[0];
var img2=document.getElementById("fileUploaderControls2").files[0];
var img3=document.getElementById("fileUploaderControls3").files[0];
var img4=document.getElementById("fileUploaderControls4").files[0];
var img5=document.getElementById("fileUploaderControls5").files[0];

var profilecomp=document.getElementById("fileUploaderControlc").files[0];




var vidFileLength = $("#upload")[0].files.length;

if(cat_id === '9') 

 {
    var Product_Name="";
  var Measurement_type="";
  

var  CompanyName=$("#CompanyNames").val();
    

    var vidFileLength2 = $("#uploads")[0].files.length;

    if(Services=="")
    {
        $("#Services").focus();
    
        return false;
    }

else if( vidFileLength2=== 0)
{
    toastr.error("من فضلك ادخل مرفقا");
    return false;
}

else if(profilecomp===undefined)
{
    toastr.error("من فضلك ادخل بروفايل الشركة");
    return false;
}

var fileToUpload = document.getElementById("uploads").files[0];


 }

 else
 {

     Product_Name=$("#Product_Name").val();

     Measurement_type=$("input[name='Measurement_type']:checked").val();


var  CompanyName=$("#CompanyName").val();
var fileToUpload = document.getElementById("upload").files[0];


if(Product_Name=="")
{
    $("#Product_Name").focus();

    return false;
}

else if(img===undefined)
{
    toastr.error("من فضلك ادخل صورة");
    return false;
}

else 
if( vidFileLength=== 0)
{
    toastr.error("من فضلك ادخل مرفقا");
    return false;
}


else if(Measurement_type===undefined)
{
    Measurement_type="";
    
}



 }

//Measurement_type
var Page="Product";





if(cat_id=="9")
{
    var fileToUploadName = document.getElementById("uploads").files[0].name;
    var profilecompName=document.getElementById("fileUploaderControlc").files[0].name;
  var  img1ame="";
   var img2Name="";

   var img3Name="";

   var img4Name="";

   var img5Name="";

}

else
{
    var fileToUploadName = document.getElementById("upload").files[0].name;
    profilecompName=""
     img1ame=document.getElementById("fileUploaderControls1").files[0].name;
     if(img2Name!==undefined)
     {
        img2Name=document.getElementById("fileUploaderControls2").files[0].name;

     }
     else
     {
        img2Name=""

     }

     if(img3Name!==undefined)
     {
        img3Name=document.getElementById("fileUploaderControls3").files[0].name;

     }
     else
     {
        img3Name=""

     }

     if(img4Name!==undefined)
     {
        img4Name=document.getElementById("fileUploaderControls4").files[0].name;

     }
     else
     {
        img4Name=""

     }

     if(img5Name!==undefined)
     {
        img5Name=document.getElementById("fileUploaderControls5").files[0].name;

     }
     else
     {
        img5Name=""

     }
 

 
 

}




$.ajax({
    url:"../sharefunction/AddProduct.php?page="+Page+"&cat_id="+cat_id+"&UserID="+UserID+"&Services="+Services+"&CompanyName="+CompanyName
    +"&profilecomp="+profilecompName+ "&fileToUpload="+fileToUploadName + "&CatTypeID="+CatTypeID  + "&SubCatID="+SubCatID+
    + "&SubCatTypeID="+SubCatTypeID+ "&Product_Name="+Product_Name  + "&Description="+description  + "&Part_Number="+Part_Number  + "&Measurement_type="+Measurement_type  
    + "&Length="+Length  + "&Diameter="+Diameter  + "&Out_Side_Diameter="+Out_Side_Diameter  + "&Width="+Width 
    + "&wieght="+wieght  + "&Hieght="+Hieght  + "&Size="+Size  + "&Motorpower="+Motorpower
    + "&Stock="+Stock  + "&Industry_Country="+Industry_Country  + "&Voltage="+Voltage
    + "&RegisterDate="+newregister  + "&Product_Warranty="+Product_Warranty + "&Price="+Price

    + "&img="+img1ame  + "&img2="+img2Name  + "&img3="+img3Name  + "&img4="+img4Name + "&img5="+img5Name,  

    method:"GET",
    cache:false,
    success:function(data){

       
          

    }
    })

    upload();
   
   function upload()
   {
    var formData2 = new FormData();

  

  if(cat_id=="9")
  {
    formData2.append("profilecompu", profilecomp);
    formData2.append("fileToUploadu", fileToUpload)

    $.ajax({
        url: '../sharefunction/UploadFile.php',
        data: formData2,
        contentType: false,
        processData: false,
        type: 'POST',
        success:function(data){
    
            $("#AddProduct").modal("hide");
          
    toastr.success("العملية تمت بنجاح وسوف يتم مراجعه البيانات من قبل ادارة النظام ");
    window.setTimeout(function () { location.reload() }, 2000)    
     
     
      
       
        }
        });

  }

  else
  {

    formData2.append("img", img);
    formData2.append("fileToUploadu", fileToUpload)

   if (img2!==undefined)
    {
        formData2.append("img2", img2);

    }

    if(img3!==undefined)
    {
        formData2.append("img3", img3);

    }
    if(img4!==undefined)
    {
        formData2.append("img4", img4);

    }

 if(img5!==undefined)
    {
        formData2.append("img5", img5);

    }
 
  $.ajax({
    url: '../sharefunction/UploadFile.php',
    data: formData2,
    contentType: false,
    processData: false,
    type: 'POST',
    success:function(data){

        $("#AddProduct").modal("hide");
      
toastr.success("العملية تمت بنجاح وسوف يتم مراجعه البيانات من قبل ادارة النظام ");
window.setTimeout(function () { location.reload() }, 2000)    
 
 
  
   
    }
    });



  }


   

    }


});







