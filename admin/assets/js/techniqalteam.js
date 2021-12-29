
$(document).ready(function() {


    $('#imagePreviewtech').click(function () {

        $('#fileUploaderControltech').click();
    });


    $('#imagePreviewtech1').click(function () {

        $('#fileUploaderControltech1').click();
    });




    $("#fileUploaderControltech").change(function () {

        var file = document.getElementById("fileUploaderControltech").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewtech').attr('src', e.target.result).fadeIn();
    
        }

      
    })

    $("#fileUploaderControltech1").change(function () {

        var file = document.getElementById("fileUploaderControltech1").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewtech1').attr('src', e.target.result).fadeIn();
    
        }
      
    }) 




    $('#trainer_name_ar').bind('keypress', function(e) {

        var trainer_name_ar= $("#trainer_name_ar").val();
    
        
        var key = e.keyCode;
    
        if (key === 32&&trainer_name_ar=="")  {
            e.preventDefault();
          return false;
        }

    
    });

    $('#etrainer_name_ar').bind('keypress', function(e) {

        var etrainer_name_ar= $("#etrainer_name_ar").val();
    
        
        var key = e.keyCode;
    
        if (key === 32&&etrainer_name_ar=="")  {
            e.preventDefault();
          return false;
        }
        
    
    });
    
    $('#trainer_name_en').bind('keypress', function(e) {
    
      var trainer_name_en= $("#trainer_name_en").val();
    
      
      var key = e.keyCode;
    
      if (key === 32&&trainer_name_en=="")  {
          e.preventDefault();
        return false;
      }
    
    });

    $('#etrainer_name_en').bind('keypress', function(e) {
    
        var etrainer_name_en= $("#etrainer_name_en").val();
      
        
        var key = e.keyCode;
      
        if (key === 32&&etrainer_name_en=="")  {
            e.preventDefault();
          return false;
        }
      
      });


      $('#mobile').bind('keypress', function(e) {
    
        var mobile= $("#mobile").val();
      
      
        var key = e.keyCode;
      
        if (key === 32&&mobile=="")  {
            e.preventDefault();
          return false;
        }
      
        if (key < 48 || key > 57 ) {
          e.preventDefault(); 
           }  
      
           
      
      });


    
    $('#emobile').bind('keypress', function(e) {
    
      var emobile= $("#emobile").val();
    
    
      var key = e.keyCode;
    
      if (key === 32&&emobile=="")  {
          e.preventDefault();
        return false;
      }
    
      if (key < 48 || key > 57 ) {
        e.preventDefault(); 
         }  
    
         
    
    });

    $('#age').bind('keypress', function(e) {
    
        var age= $("#age").val();
      
      
        var key = e.keyCode;
      
        if (key === 32&&age=="")  {
            e.preventDefault();
          return false;
        }
      
        if (key < 48 || key > 57 ) {
          e.preventDefault(); 
          return false;
           }  
      
           
           
           
      
      });
      
    

    
    $('#eage').bind('keypress', function(e) {
    
      var eage= $("#eage").val();
    
    
      var key = e.keyCode;
    
      if (key === 32&&eage=="")  {
          e.preventDefault();
        return false;
      }
    
      if (key < 48 || key > 57 ) {
        e.preventDefault(); 
        return false;
         }  
      
    });
    

    $('#hieght').bind('keypress', function(e) {
    
        var hieght= $("#hieght").val();
      
      
        var key = e.keyCode;
      
        if (key === 32&&hieght=="")  {
            e.preventDefault();
          return false;
        }
      
        if (key < 48 || key > 57 ) {
          e.preventDefault(); 
           }   
      
      
        });
      


    $('#ehieght').bind('keypress', function(e) {
    
      var ehieght= $("#ehieght").val();
    
    
      var key = e.keyCode;
    
      if (key === 32&&ehieght=="")  {
          e.preventDefault();
        return false;
      }
    
      if (key < 48 || key > 57 ) {
        e.preventDefault(); 
         }   
    
    
      });

      $('#wieght').bind('keypress', function(e) {
    
        var wieght= $("#wieght").val();
      
      
        var key = e.keyCode;
      
        if (key === 32&&wieght=="")  {
            e.preventDefault();
          return false;
        }
      
        if (key < 48 || key > 57 ) {
          e.preventDefault(); 
           } 
    
           
      
        });
    
    
      $('#ewieght').bind('keypress', function(e) {
    
        var ewieght= $("#ewieght").val();
      
      
        var key = e.keyCode;
      
        if (key === 32&&ewieght=="")  {
            e.preventDefault();
          return false;
        }
      
        if (key < 48 || key > 57 ) {
          e.preventDefault(); 
           } 
    
           
      
        });

        $('#descrip_ar').bind('keypress', function(e) {
    
            var descrip_ar= $("#descrip_ar").val();
          
          
            var key = e.keyCode;
          
            if (key === 32&&descrip_ar=="")  {
                e.preventDefault();
              return false;
            }

        
               
          
            });

            $('#descrip_en').bind('keypress', function(e) {
    
                var descrip_en= $("#descrip_en").val();
              
              
                var key = e.keyCode;
              
                if (key === 32&&descrip_en=="")  {
                    e.preventDefault();
                  return false;
                }
    
            
                   
              
                });


        $('#edescrip_ar').bind('keypress', function(e) {
    
            var edescrip_ar= $("#edescrip_ar").val();
          
          
            var key = e.keyCode;
          
            if (key === 32&&edescrip_ar=="")  {
                e.preventDefault();
              return false;
            }

        
               
          
            });


            $('#edescrip_en').bind('keypress', function(e) {
    
                var edescrip_en= $("#edescrip_en").val();
              
              
                var key = e.keyCode;
              
                if (key === 32&&edescrip_en=="")  {
                    e.preventDefault();
                  return false;
                }               
              
                });

} );

// this code resbobsable for refresh table

function RefreshTable() {
    $( "#datatable" ).load( "technqalteam.php #datatable" );

    $("#trainer_name_ar").val("");

    $("#trainer_name_en").val("");

    $("#mobile").val("");

    $("#age").val("");
    $("#hieght").val("");
    $("#wieght").val("");


     $("#imagePreviewtech").attr('src', 'assets/images/NoImage.jpg');
     $("#imagePreviewtech1").attr('src', 'assets/images/NoImage.jpg');

     $("#descrip_ar").val("");

     $("#descrip_en").val("");

     document.getElementById("fileUploaderControltech").value = null;

     document.getElementById("fileUploaderControltech1").value = null;

}

$('#Savetrainer').on('click', function(event){


    var formData = new FormData();
    event.preventDefault();


    var trainer_name_ar=$("#trainer_name_ar").val();
    var trainer_name_en=$("#trainer_name_en").val();

     var mobile=$("#mobile").val();

     var age=$("#age").val();
     var hieght=$("#hieght").val();
     var wieght=$("#wieght").val();




    var img=document.getElementById("fileUploaderControltech").files[0];

    var descrip_ar=$("#descrip_ar").val();

    var descrip_en=$("#descrip_en").val();

    var Page="trainer";

    //saudia arabia regular expression


    var regex = new RegExp(/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/);




    if(trainer_name_ar=="")
    {

    $('#trainer_name_ar').focus();

        return false;
    }

    if(trainer_name_en=="")
    {

    $('#trainer_name_en').focus();

        return false;
    }


else if(mobile=="")

{
    $('#mobile').focus();

    return false;


}

else if(!regex.test(mobile)){  
    toastr.error("برجاء ادخال رقم الجوال الصحيح");  
    $("#mobile").focus();
    
    return false;
     
    }

else if(age=="")

{
    $('#age').focus();

    return false;

}


else if(hieght=="")

{
    $('#hieght').focus();

    return false;

}

else if(wieght=="")

{
    $('#wieght').focus();

    return false;

}





    else if(img===undefined)

    {

        toastr.error("من فضلك اضف مرفقا");

     return false;

    }


    else if(descrip_ar=="")

{
    $('#descrip_ar').focus();

    return false;

}

else if(descrip_en=="")

{
    $('#descrip_en').focus();

    return false;
}


 formData.append("trainer_name_ar", trainer_name_ar);
 formData.append("trainer_name_en", trainer_name_en);

formData.append("mobile", mobile);
formData.append("age", age);
formData.append("hieght", hieght);

formData.append("wieght", wieght);

formData.append("img", img);
formData.append("descrip_ar", descrip_ar);
formData.append("descrip_en", descrip_en);

formData.append("Page", Page);

$.ajax({
  url:"../service/addfunction.php",
  method:"POST",
   data: formData,
  processData: false,
  contentType: false,
  success:function(data){ 
 
    toastr.success(" تمت عملية الاضافة بنجاح");
    $(".bd-example-modal-lg").modal("hide");

    RefreshTable();

    

        } 
});
});








function edittechniqalteam(ID){

     window.tech=ID;

    var page="techniqal";

    $.ajax({
    url:"../service/fetchdata.php",
    method:"POST",
    data: {id:ID,page:page},
    dataType:"json",
    success:function(data){

    $("#etrainer_name_ar").val(data.trainer_name_ar);
    $("#etrainer_name_en").val(data.trainer_name_en	);

    $("#emobile").val(data.mobile_number);
    $("#eage").val(data.age);
    $("#ehieght").val(data.hieght);
    $("#ewieght").val(data.wieght);


    $("#imagePreviewtech1").attr('src', 'assets/images/coach/'+ data.image);

    $("#edescrip_ar").val(data.descrip_ar);
    $("#edescrip_en").val(data.descrip_en);
   
    
    }
    });

}


  $('#edittrainer').on('click', function(event){

     var formData = new FormData();
     event.preventDefault();
    
    var trainer_id    = window.tech
    
     var trainer_name_ar=$("#etrainer_name_ar").val();
    var trainer_name_en=$("#etrainer_name_en").val();

     var mobile=$("#emobile").val();

     var age=$("#eage").val();
     var hieght=$("#ehieght").val();
     var wieght=$("#ewieght").val();

    var img=document.getElementById("fileUploaderControltech1").files[0];

    var descrip_ar=$("#edescrip_ar").val();

    var descrip_en=$("#edescrip_en").val();

    var Page="trainer";

    //saudia arabia regular expression


    var regex = new RegExp(/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/);




    if(trainer_name_ar=="")
    {

    $('#etrainer_name_ar').focus();

        return false;
    }

    if(trainer_name_en=="")
    {

    $('#etrainer_name_en').focus();

        return false;
    }


else if(mobile=="")

{
    $('#emobile').focus();

    return false;


}

else if(!regex.test(mobile)){  
    toastr.error("برجاء ادخال رقم الجوال الصحيح");  
    $("#emobile").focus();
    
    return false;
     
    }

else if(age=="")

{
    $('#eage').focus();

    return false;

}


else if(hieght=="")

{
    $('#ehieght').focus();

    return false;

}

else if(wieght=="")

{
    $('#ewieght').focus();

    return false;

}




    else if(descrip_ar=="")

{
    $('#edescrip_ar').focus();

    return false;

}

else if(descrip_en=="")

{
    $('#edescrip_en').focus();

    return false;
}  

if(img===undefined)

{

    img="";
}


formData.append("trainer_id", trainer_id);

formData.append("trainer_name_ar", trainer_name_ar);

 formData.append("trainer_name_en", trainer_name_en);

 formData.append("mobile", mobile); 

 formData.append("age", age); 
 formData.append("hieght", hieght); 
 formData.append("wieght", wieght); 
           
formData.append("descrip_ar", descrip_ar); 
formData.append("descrip_en", descrip_en);   
formData.append("img", img);        
 formData.append("Page", Page);    
           
 
    $.ajax({
      url:"../service/updatefunction.php",
      method:"POST",
       data: formData,
      processData: false,
      contentType: false,
      success:function(data){ 
      
        toastr.success(" تم تخديث بياناتك بنجاح");
        $(".bd-example-emodal-lg").modal("hide");

        RefreshTable();
   
            }
         
       
       
    
    });
    });


    //delete function 


    function Deletetrainerfunction(id){

     
        window.var1=id;
     
        
        }
        var ConfirtrainermDelete = function () {
            
            var ID = window.var1;
                 
          var page="techniqalteam";
          
        var $button = $(this);
        $.ajax({
        type: "POST",
        url: "../service/DeleteFunction.php",
        data:{ID:ID,page:page},
        success: function (result) {                                    
        toastr.error("تم الحذف بنجاح");
        $("#Deletetrainerconfirmation").modal("hide");
 
            RefreshTable();
       
                }
            })
        }