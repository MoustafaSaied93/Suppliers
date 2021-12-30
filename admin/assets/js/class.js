
$(document).ready(function() {


    $('#imagePreviewclass').click(function () {

        $('#fileUploaderClass').click();
    });


    $('#imagePreviewclass1').click(function () {

        $('#fileUploaderClass1').click();
    });




    $("#fileUploaderClass").change(function () {

        var file = document.getElementById("fileUploaderClass").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewclass').attr('src', e.target.result).fadeIn();
    
        }

      
    })

    $("#fileUploaderClass1").change(function () {

        var file = document.getElementById("fileUploaderClass1").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewclass1').attr('src', e.target.result).fadeIn();
    
        }
      
    }) 




    $('#class_name_ar').bind('keypress', function(e) {

        var class_name_ar= $("#class_name_ar").val();
    
        
        var key = e.keyCode;
    
        if (key === 32&&class_name_ar=="")  {
            e.preventDefault();
          return false;
        }

    
    });

    $('#eclass_name_ar').bind('keypress', function(e) {

        var eclass_name_ar= $("#eclass_name_ar").val();
    
        
        var key = e.keyCode;
    
        if (key === 32&&eclass_name_ar=="")  {
            e.preventDefault();
          return false;
        }
        
    
    });


    
    $('#class_name_en').bind('keypress', function(e) {
    
      var class_name_en= $("#class_name_en").val();
    
      
      var key = e.keyCode;
    
      if (key === 32&&class_name_en=="")  {
          e.preventDefault();
        return false;
      }
    
    });

    $('#eclass_name_en').bind('keypress', function(e) {
    
        var eclass_name_en= $("#eclass_name_en").val();
      
        
        var key = e.keyCode;
      
        if (key === 32&&eclass_name_en=="")  {
            e.preventDefault();
          return false;
        }
      
      });


     
} );

// this code resbobsable for refresh table

function RefreshclassTable() {

$( "#datatable" ).load( "classes.php #datatable" );

    $("#class_name_ar").val("");

    $("#class_name_en").val("");

   

     $("#imagePreviewclass").attr('src', 'assets/images/NoImage.jpg');
     $("#imagePreviewclass1").attr('src', 'assets/images/NoImage.jpg');

     document.getElementById("fileUploaderClass").value = null;

     document.getElementById("fileUploaderClass1").value = null;

}

$('#Saveclass').on('click', function(event){


    var formData = new FormData();
    event.preventDefault();

    var class_name_ar=$("#class_name_ar").val();
    var class_name_en=$("#class_name_en").val();

    var trainer_id=$("#trainer_id").val();

    var img=document.getElementById("fileUploaderClass").files[0];

   
    var Page="class";



    if(class_name_ar=="")
    {

    $('#class_name_ar').focus();

        return false;
    }

    if(class_name_en=="")
    {

    $('#class_name_en').focus();

        return false;
    }



    else if(img===undefined)

    {

        toastr.error("من فضلك اضف مرفقا");

     return false;

    }



 formData.append("class_name_ar", class_name_ar);
 formData.append("class_name_en", class_name_en);

formData.append("trainer_id", trainer_id);

formData.append("img", img);

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

    RefreshclassTable();

    

        } 
});
});








function editclass(ID){

     window.class=ID;

    var page="class";

    $.ajax({
    url:"../service/fetchdata.php",
    method:"POST",
    data: {id:ID,page:page},
    dataType:"json",
    success:function(data){

    $("#eclass_name_ar").val(data.class_name_ar);
    $("#eclass_name_en").val(data.class_name_en);

    $("#etrainer_id").val(data.trainer_id);
   

    $("#imagePreviewclass1").attr('src', 'assets/images/'+ data.image);

    
    }
    });

}


  $('#editclass').on('click', function(event){

     var formData = new FormData();
     event.preventDefault();
    
    var class_id     = window.class
    
     var class_name_ar=$("#eclass_name_ar").val();
    var class_name_en=$("#eclass_name_en").val();

     var trainer_id=$("#etrainer_id").val();


    var img=document.getElementById("fileUploaderClass1").files[0];

   

    var Page="class";

 


    if(class_name_ar=="")
    {

    $('#eclass_name_ar').focus();

        return false;
    }

    if(class_name_en=="")
    {

    $('#eclass_name_en').focus();

        return false;
    }



if(img===undefined)

{

    img="";
}

formData.append("class_id", class_id);
formData.append("trainer_id", trainer_id);

formData.append("class_name_ar", class_name_ar);

 formData.append("class_name_en", class_name_en);
 
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

        RefreshclassTable();
   
            }
         
       
       
    
    });
    });


    //delete function 


    function Deleteclassfunction(id){

     
        window.varclassde=id;
     
        
        }
        var ConfirmclassDelete = function () {
            
            var ID = window.varclassde;
                 
          var page="class";
          
        var $button = $(this);
        $.ajax({
        type: "POST",
        url: "../service/DeleteFunction.php",
        data:{ID:ID,page:page},
        success: function (result) {                                    
        toastr.error("تم الحذف بنجاح");
        $("#Deleteclassconfirmation").modal("hide");
 
            RefreshclassTable();
       
                }
            })
        }