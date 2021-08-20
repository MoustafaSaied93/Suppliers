
   $(document).ready(function () {
    //    

    $('#imagePreviews').click(function () {

        $('#fileUploaderControls1').click();
    }); 
    
    $('#imagePreviews2').click(function () {

        $('#fileUploaderControls2').click();
    }); 
    
    $('#imagePreviews3').click(function () {

        $('#fileUploaderControls3').click();
    });  

    $('#imagePreviews4').click(function () {

        $('#fileUploaderControls4').click();
    }); 
    
    $('#imagePreviews5').click(function () {

        $('#fileUploaderControls5').click();
    });  
    $('#imagePreviewc').click(function () {

        $('#fileUploaderControlc').click();
    }); 

    $('select[name="SubCatTypeID"]').val("");


    $('#cat_id').on('change', function () {

        var Catid =$("#cat_id").val();

        if (Catid === '9'){
           
            $("#Catfield").hide();
            $("#SubCatfield").hide();
            $("#SubCattypefield").hide();
            $("#mainpopup").hide();
            $("#manifac").show();

            $('select[name="CatTypeID"]').val("");

            $('select[name="SubCatID"]').val("");
          
        } 
        
        else if(Catid === '8') {
            $("#Catfield").show();
            $("#SubCatfield").show();
            $("#mainpopup").show();
            $("#manifac").hide();

            
        $.ajax({
            url:"../dropdownlist.php",
            method:"POST",
            cache:false,
	       data:{Catid:Catid},
            success:function(data){
               
                $('select[name="CatTypeID"]').empty();

               

                $("#CatTypeID").html(data);

                
               
        
            }
            })
           }
        
        else
        {
            $("#Catfield").show();
            $("#SubCatfield").hide();
            $("#mainpopup").show();
            $("#manifac").hide();

            $.ajax({
                url:"../dropdownlist.php",
                method:"POST",
                cache:false,
               data:{Catid:Catid},
                success:function(data){
                   
                    $('select[name="CatTypeID"]').empty();
                  //  $('select[name="SubCatID"]').empty();
    
                    $("#CatTypeID").html(data);
                   
            
                }
                })

        }
    
    });


    $('#CatTypeID').on('change', function () {

        var Catid =$("#cat_id").val();

        var CatTypeID=$("#CatTypeID").val();

        $('select[name="SubCatID"]').empty();

        if(CatTypeID=="معدات متحركة " && Catid=="8"){
            $("#SubCattypefield").show();

        }

        else
        {
            $("#SubCattypefield").hide();

        }

           $.ajax({
            url:"../dropdownlist.php",
            method:"POST",
            cache:false,
	       data:{AddCatid:Catid,CatTypeID:CatTypeID},
            success:function(data){
               
                $('select[name="SubCatID"]').empty();

                $("#SubCatID").html(data);

                if(CatTypeID=="معدات متحركة " && Catid=="8"){
                    $("#SubCattypefield").show();

                }
               
        
            }
            })    
    });






    $('#CatTypesID').on('change', function () {

        var Catid =$("#cat_id").val();

        var CatTypeID=$("#CatTypesID").val();

        $('select[name="SubCatsID"]').empty();

        if(CatTypeID=="معدات متحركة " && Catid=="8"){
            $("#SubCattypefield").show();

        }

        else
        {
            $("#SubCattypefield").hide();

        }

           $.ajax({
            url:"../dropdownlist.php",
            method:"POST",
            cache:false,
	       data:{AddCatid:Catid,CatTypeID:CatTypeID},
            success:function(data){
               
                $('select[name="SubCatsID"]').empty();

                $("#SubCatsID").html(data);

                if(CatTypeID=="معدات متحركة " && Catid=="8"){
                    $("#SubCattypefield").show();

                }
               
        
            }
            })    
    });

   
    $('#SubCatID').on('change', function () {

       

       

        var SubCatID=$("#SubCatID").val();

       // $('select[name="SubCatTypeID"]').empty();

        if(SubCatID=="انابيب صناعية"){
            $("#SubCattypefield").show();

        }

        else
        {
            $("#SubCattypefield").hide();

        }   
    });

    $('#SubCatsID').on('change', function () {

       

        var SubCatID=$("#SubCatsID").val();
    
       // $('select[name="SubCatTypeID"]').empty();
    
        if(SubCatID=="انابيب صناعية"){
            $("#SubCattypefield").show();
    
        }
    
        else
        {
            $("#SubCattypefield").hide();
    
        }   
    });


});





$("#fileUploaderControls1").change(function () {

    var file = document.getElementById("fileUploaderControls1").files[0];
    
    var readImg = new FileReader();
    readImg.readAsDataURL(file);
    readImg.onload = function (e) {
        $('#imagePreviews').attr('src', e.target.result).fadeIn();

    }
})


$("#fileUploaderControls2").change(function () {

    var file = document.getElementById("fileUploaderControls2").files[0];
    
    var readImg = new FileReader();
    readImg.readAsDataURL(file);
    readImg.onload = function (e) {
        $('#imagePreviews2').attr('src', e.target.result).fadeIn();

    }
})


$("#fileUploaderControls3").change(function () {

    var file = document.getElementById("fileUploaderControls3").files[0];
    
    var readImg = new FileReader();
    readImg.readAsDataURL(file);
    readImg.onload = function (e) {
        $('#imagePreviews3').attr('src', e.target.result).fadeIn();

    }
})


$("#fileUploaderControls4").change(function () {

    var file = document.getElementById("fileUploaderControls4").files[0];
    
    var readImg = new FileReader();
    readImg.readAsDataURL(file);
    readImg.onload = function (e) {
        $('#imagePreviews4').attr('src', e.target.result).fadeIn();

    }
})


$("#fileUploaderControls5").change(function () {

    var file = document.getElementById("fileUploaderControls5").files[0];
    
    var readImg = new FileReader();
    readImg.readAsDataURL(file);
    readImg.onload = function (e) {
        $('#imagePreviews5').attr('src', e.target.result).fadeIn();

    }
})

$("#fileUploaderControlc").change(function () {

    var file = document.getElementById("fileUploaderControlc").files[0];
    
    var readImg = new FileReader();
    readImg.readAsDataURL(file);
    readImg.onload = function (e) {
        $('#imagePreviewc').attr('src', e.target.result).fadeIn();

    }
})



$('#SaveProduct').click(function (event) {
    event.preventDefault();
var formData = new FormData();
var cat_id=$("#cat_id").val();
var CatTypeID=$("#CatTypeID").val();
var SubCatID=$("#SubCatID").val();
var SubCatTypeID=$("#SubCatTypeID").val();


if(cat_id!="8")

{

    SubCatID="";

}



var Part_Number=$("#Part_Number").val();
var description=$("#Description").val();
var Product_Warranty=$("#Product_Warranty").val();

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
formData.append("page", Page);
formData.append("cat_id", cat_id);
formData.append("CatTypeID", CatTypeID);
formData.append("SubCatID", SubCatID);
formData.append("SubCatTypeID", SubCatTypeID);
formData.append("Product_Name", Product_Name);
formData.append("Description", description);
formData.append("Part_Number", Part_Number);
formData.append("Measurement_type", Measurement_type);
formData.append("Length", Length);
formData.append("Diameter", Diameter);
formData.append("Out_Side_Diameter", Out_Side_Diameter);
formData.append("Width", Width);
formData.append("wieght", wieght);
formData.append("Hieght", Hieght);
formData.append("Size", Size);
formData.append("Motorpower", Motorpower);
formData.append("Stock", Stock);
formData.append("Industry_Country", Industry_Country);
formData.append("CompanyName",  CompanyName);
formData.append("Voltage",  Voltage);
formData.append("Services",  Services);
formData.append("RegisterDate", newregister);
formData.append("Product_Warranty", Product_Warranty);
formData.append("img", img);
formData.append("img2", img2);
formData.append("img3", img3);
formData.append("img4", img4);
formData.append("img5", img5);
formData.append("profilecomp", profilecomp);
formData.append("fileToUpload", fileToUpload);




$.ajax({
    url: '../AddProduct.php',
    data: formData,
    contentType: false,
    processData: false,
    type: 'POST',
    success:function(data){


        $("#AddProduct").modal("hide");
 
        toastr.success("العملية تمت بنجاح وسوف يتم مراجعه البيانات من قبل ادارة النظام ");
        window.setTimeout(function () { location.reload() }, 2000)
  
   
    }
    });
});


/*
    var xhr = new XMLHttpRequest();

    xhr.open("POST", "../addfunction.php", true);
    xhr.addEventListener("load", function (evt) { UploadComplete(evt); }, false);
    xhr.addEventListener("error", function (evt) { UploadFailed(evt); }, false);
    xhr.send(formData);

    function UploadComplete(evt) {
        

       $("#AddProduct").modal("hide");
 
        toastr.success("العملية تمت بنجاح وسوف يتم مراجعه البيانات من قبل ادارة النظام ");
        window.setTimeout(function () { location.reload() }, 2000)

    }

    function UploadFailed(evt) {
        alert("There was an error attempting to upload the file.");

    }   
});

*/
    


       
     



       function DeleteProducts(id){
        window.var1=id;
    
    
     }



     var ConfirmDeleting= function () {

        
        var ID = window.var1;
        var page="Product";
         var $button = $(this);
          $.ajax({
           type: "POST",
           cache: false,
           async: true,
          url: "../DeleteFunction.php",
          data:{ID:ID,page:page},
         success: function (result) {
           $("#DeleteConfirmations").modal("hide");
           toastr.error("تم عملية الحذف بنجاح");
              window.setTimeout(function () { location.reload() }, 3000)
           }
    
           });
        }



 function EditProduct(ID)

 {

    window.var1=ID;

    $("#EditCatfield").show();

    $("#EditSubCatfield").show();
   

    $("#Catfield").hide();

    $("#SubCatfield").hide();


 $("#ModalTitle").html("تعديل المنتج");

 $("#UpdateProduct").show();

 $("#SaveProduct").hide();



 $("#cat_id").val("");

 $("#CatTypeID").val("");
 


  var page="Products";

  $.ajax({
    url:"../fetchdata.php",
    method:"POST",
    data: {id:ID,page:page},
    dataType: "json", 
    cache:false,
    success:function(data){

  
    var catid=$("#cat_id").val(data.cat_id);


    $("#cat_id").prop("disabled", true);


    



    if(data.cat_id=="9")

{

    $("#mainpopup").hide();
    $("#manifac").show();

    $("#EditCatfield").hide();

    $("#EditSubCatfield").hide();

    $("#Services").val(data.Services);
   

    $("#imagePreviewc").attr('src',' ../'+data.CompProfile);


}


else{



    $("#CatTypesID").val(data.CatTypeID);

    $("#SubCatsID").val(data.SubCatID);


    if(data.cat_id!="8")

    {


        $("#EditSubCatfield").hide();






    }


    if(data.SubCatID!="Pipe")

    {

        $("#SubCatTypeID").val("");

        $("#SubCattypefield").hide();

    }


    if (data.SubCategoryType!="") {

        $("#SubCatTypeID").val(data.SubCategoryType);
        
    }

   


    


   

   GetCategoryType(data.cat_id,data.CatTypeID);

   GetSubCategory(data.cat_id,data.CatTypeID,data.SubCatID)


    $("#Product_Name").val(data.Product_Name);
    $("#Description").val(data.Descrip);

    $("#Part_Number").val(data.PartNumber);

    $("#Product_Warranty").val(data.Product_Warranty);

    $("#Length").val(data.Lengths);

    $("#Width").val(data.Width);

    $("#Diameter").val(data.Diameter);
    $("#Out_Side_Diameter").val(data.Out_Side_Diameter);
    $("#wieght").val(data.wieght);
    $("#Hieght").val(data.Hieght);
    $("#Size").val(data.Size);
    $("#Voltage").val(data.Voltage);
    $("#Stock").val(data.Stocks);

    $("#Motorpower").val(data.Motorpower);
    $("#Industry_Country").val(data.Industry_Country);
    $("#CompanyName").val(data.CompanyName);
    $("#CompanyCode").val(data.CompanyCode);

    $('input[name="Measurement_type"][value='+data.Measurement_type+'').attr('checked','checked');

 //  var uplaod=$("#upload").val( data.AttachFile);

   // alert(uplaod);

 
   $("#imagePreviews").attr('src', '../images/products/'+ data.image1);

   window.image1=data.image1;
   window.image2=data.image2;

   window.image3=data.image3;

   window.image4=data.image4;

   window.image5=data.image5;

   window.AttachFile=data.AttachFile;

  


   if(data.image2!="")

   {

    $("#imagePreviews2").attr('src', '../images/products/'+ data.image2);


   }

   if(data.image2=="")

   {

    $("#imagePreviews2").attr('src', '../images/NoImage.jpg');



   }


   if(data.image3!="")

   {

    $("#imagePreviews3").attr('src', '../images/products/'+ data.image3);


   }

   if(data.image3=="")

   {

    $("#imagePreviews3").attr('src', '../images/NoImage.jpg');



   }


   if(data.image4!="")

   {

    $("#imagePreviews4").attr('src', '../images/products/'+ data.image4);


   }

   if(data.image4=="")

   {

    $("#imagePreviews4").attr('src', '../images/NoImage.jpg');



   }

   if(data.image5!="")

   {

    $("#imagePreviews5").attr('src', '../images/products/'+ data.image5);


   }

   if(data.image5=="")

   {

    $("#imagePreviews5").attr('src', '../images/NoImage.jpg');



   }



}   
   
    }
    });

  }


  $('#UpdateProduct').click(function (event) {

    
    event.preventDefault();
   
    var formData = new FormData();
    
    var product_id =  window.var1 ;
    var cat_id=$("#cat_id").val();

   if(cat_id=="9")

   {



    var oper="noimage-nofile";

    var oper1="file";
    
    var oper2="image";

    var oper3="image-file";
    
    var Page="manifac";

   


var Services=$("#Services").val();



 var fileToUpload = document.getElementById("uploads").files[0];
 var profilecomp=document.getElementById("fileUploaderControlc").files[0];

 var  RegisterDate = new Date();

var newregister=(RegisterDate.getFullYear()+'/'+(RegisterDate.getMonth()+1)+'/'+RegisterDate.getDate());

 if(fileToUpload===undefined && profilecomp===undefined)
 {

   
   formData.append("Page", Page);
  formData.append("product_id",product_id);
  formData.append("cat_id", cat_id);
  formData.append("Services",Services);

  formData.append("RegisterDate",newregister);

  formData.append("oper",oper);
 }


 else if(profilecomp===undefined)

{


    formData.append("Page", Page);
    formData.append("product_id",product_id);
    formData.append("cat_id", cat_id);
    formData.append("Services",Services);

    formData.append("fileToUpload",fileToUpload);
  
    formData.append("RegisterDate",newregister);
  
    formData.append("oper",oper1);

}



else if(fileToUpload===undefined)

{


    formData.append("Page", Page);
    formData.append("product_id",product_id);
    formData.append("cat_id", cat_id);
    formData.append("Services",Services);

    formData.append("profilecomp",profilecomp);
  
    formData.append("RegisterDate",newregister);
  
    formData.append("oper",oper2);

}


else{


    formData.append("Page", Page);
    formData.append("product_id",product_id);
    formData.append("cat_id", cat_id);
    formData.append("Services",Services);

    formData.append("profilecomp",profilecomp);
    formData.append("fileToUpload",fileToUpload);
    formData.append("RegisterDate",newregister);
  
    formData.append("oper",oper3);





}

   }



   else
   {



   

    var Page="allproduct";


 var product_id =  window.var1 ;
var cat_id=$("#cat_id").val();
var CatTypeID=$("#CatTypesID").val();
var SubCatID=$("#SubCatsID").val();
var SubCatTypeID=$("#SubCatTypeID").val();

Product_Name=$("#Product_Name").val();

Measurement_type=$("input[name='Measurement_type']:checked").val();
 var Part_Number=$("#Part_Number").val();
var description=$("#Description").val();
var Product_Warranty=$("#Product_Warranty").val();



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
var Stock=$("#Stock").val();
var Industry_Country=$("#Industry_Country").val();


var upimg1=window.image1;
var upimg2=window.image2;
var upimg3=window.image3;
var upimg4=window.image4;
var upimg5=window.image5;

var upfile=window.AttachFile;






var fileToUpload = document.getElementById("upload").files[0];
var img=document.getElementById('fileUploaderControls1').files[0];

var img2=document.getElementById("fileUploaderControls2").files[0];
var img3=document.getElementById("fileUploaderControls3").files[0];
var img4=document.getElementById("fileUploaderControls4").files[0];
var img5=document.getElementById("fileUploaderControls5").files[0];



if(fileToUpload===undefined)

 { 

    fileToUpload=upfile;

    



 }


 

 else if(fileToUpload!==undefined)

 {

     fileToUpload = document.getElementById("upload").files[0].name;
 }



 if(img===undefined)

 { 

    img=upimg1;

    



 }


 

 else if(img!==undefined)

 {

    img=document.getElementById('fileUploaderControls1').files[0].name;
 }


  if(img2===undefined)

 {

    img2=upimg2;



 }

 else if(img2!==undefined)

 {

    img2=document.getElementById('fileUploaderControls2').files[0].name;

    


 }

  if(img3===undefined)

 {

    img3=upimg3;



 }

  else if(img3!==undefined)

 {

    img3=document.getElementById('fileUploaderControls3').files[0].name;

    


 }


  if(img4===undefined)

 {

    img4=upimg4;



 }

 else if(img4!==undefined)

 {

    img4=document.getElementById('fileUploaderControls4').files[0].name;

    


 }

  if(img5===undefined)

 {

    img5=upimg5;



 }

 else  if(img5!==undefined)

 {

    img5=document.getElementById('fileUploaderControls5').files[0].name;

    


 }





//var fileToUpload = document.getElementById("upload").files[0];


    formData.append("Page", Page);
    formData.append("product_id",product_id);
    formData.append("cat_id", cat_id);

    formData.append("CatTypeID", CatTypeID);

    formData.append("SubCatID", SubCatID);

    formData.append("SubCatTypeID", SubCatTypeID);

    formData.append("Product_Name", Product_Name);

    formData.append("Measurement_type", Measurement_type);

    formData.append("Part_Number", Part_Number);
    formData.append("description", description);
    formData.append("Product_Warranty", Product_Warranty);
    formData.append("RegisterDate",  newregister);


    formData.append("Size", Size);

    formData.append("Motorpower", Motorpower);
    formData.append("Length", Length);
    formData.append("Diameter", Diameter);
    formData.append("Out_Side_Diameter", Out_Side_Diameter);

    formData.append("Width", Width);
    formData.append("wieght", wieght);
    formData.append("Hieght", Hieght);
    formData.append("Voltage", Voltage);

    formData.append("Stock", Stock);

    formData.append("Industry_Country", Industry_Country);

    formData.append("img", img);
    formData.append("img2", img2);
    formData.append("img3", img3);
    formData.append("img4", img4);
    formData.append("img5", img5);

    formData.append("fileToUpload", fileToUpload);
    


   }






    
   $.ajax({
    url: '../updatefunction.php',
    data: formData,
    contentType: false,
    processData: false,
    type: 'POST',
    success:function(data){


        $("#AddProduct").modal("hide");
 
        toastr.success("تم التحديث بنجاح ");
        window.setTimeout(function () { location.reload() }, 2000)
  
   
    }
    });

});







    function GetCategoryType(Catid,CatTypeID) 
    {

        
        
  $.ajax({
    url:"../dropdownlist.php",
    method:"POST",
    cache:false,
   data:{Catsid:Catid,CatTypeID:CatTypeID},
    success:function(data){

     
        $('select[name="CatTypesID"]').empty();

        $("#CatTypesID").html(data);
       

    }
    })

    }














function GetSubCategory(Catid,CatTypeID,CatSubid)
{
   

    $.ajax({
        url:"../dropdownlist.php",
        method:"POST",
        cache:false,
       data:{Catidss:Catid,CatTypesID:CatTypeID,CatSubid:CatSubid},
        success:function(data){
           
           
            $('select[name="SubCatsID"]').empty();

            

            $("#SubCatsID").html(data);

            if(CatTypeID=="Stationary" && Catid=="8"&& CatSubid=="Pipe" ){
                $("#SubCattypefield").show();

            }
           
    
        }
        })    
       
    }





