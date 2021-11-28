
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

    
     var coach_name =  document.querySelector('#coach_name');

     var coach_namee =  document.querySelector('#coach_namee');


     var title =  document.querySelector('#title');

     var titlee =  document.querySelector('#titlee');


     var Descriptions =  document.querySelector('#Descriptions');

     var Descriptionse =  document.querySelector('#Descriptionse');

     coach_name.addEventListener("keypress",function(e){
      var key = e.keyCode;


      var validmember_name=$("#coach_name").val();

     if(key === 32 && validmember_name==""){
    e.preventDefault();
     return false;
     }
     else if(validmember_name.length>30)
     {

        e.preventDefault();
     return false;


     }
      })


      coach_namee.addEventListener("keypress",function(e){
        var key = e.keyCode;
  
        var validmember_namee=$("#coach_namee").val();
  
       if(key === 32 && validmember_namee==""){
      e.preventDefault();
       return false;
       }
       else if(validmember_namee.length>30)
       {
  
          e.preventDefault();
       return false;
  
  
       }
        })


        title.addEventListener("keypress",function(e){
            var key = e.keyCode;
      
            var titlevalid_name=$("#title").val();
      
           if(key === 32 && titlevalid_name==""){
          e.preventDefault();
           return false;
           }
           else if(titlevalid_name.length>30)
           {
      
              e.preventDefault();
           return false;
      
      
           }
            })




            titlee.addEventListener("keypress",function(e){
                var key = e.keyCode;
          
                var titlevalid_name=$("#titlee").val();
          
               if(key === 32 && titlevalid_name==""){
              e.preventDefault();
               return false;
               }
               else if(titlevalid_name.length>30)
               {
          
                  e.preventDefault();
               return false;
          
          
               }
                })


                Descriptions.addEventListener("keypress",function(e){
                    var key = e.keyCode;
              
                    var Descriptionsname=$("#Descriptions").val();
              
                   if(key === 32 && Descriptionsname==""){
                  e.preventDefault();
                   return false;
                   }
                   else if(Descriptionsname.length>1000)
                   {
              
                      e.preventDefault();
                   return false;
              
              
                   }
                    })



                    Descriptionse.addEventListener("keypress",function(e){
                        var key = e.keyCode;
                  
                        var Descriptionsename=$("#Descriptionse").val();
                  
                       if(key === 32 && Descriptionsename==""){
                      e.preventDefault();
                       return false;
                       }
                       else if(Descriptionsename.length>500)
                       {
                  
                          e.preventDefault();
                       return false;
                  
                  
                       }
                        })

                    

} );

// this code resbobsable for refresh table

function RefreshTable() {
    $( "#datatable" ).load( "technqalteam.php #datatable" );

    $("#coach_name").val("");


     $("#title").val("");

     $("#imagePreviewtech").attr('src', 'assets/images/NoImage.jpg');
     $("#imagePreviewtech1").attr('src', 'assets/images/NoImage.jpg');

     $("#Descriptions").val("");

     document.getElementById("fileUploaderControltech").value = null;

     document.getElementById("fileUploaderControltech1").value = null;

}

$('#Savecoach').on('click', function(event){


    var formData = new FormData();
    event.preventDefault();


    var coach_name=$("#coach_name").val();

     var title=$("#title").val();


    var img=document.getElementById("fileUploaderControltech").files[0];

    var Descriptions=$("#Descriptions").val();


    var Page="techniqal";


    if(coach_name=="")
    {

    $('#coach_name').focus();

        return false;
    }
else if(title=="")

{
    $('#title').focus();

    return false;


}


    else if(img===undefined)

    {

        toastr.error("من فضلك اضف مرفقا");

     return false;

    }



 formData.append("coach_name", coach_name);
formData.append("title", title);
formData.append("img", img);
formData.append("Descriptions", Descriptions);
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

    $("#coach_namee").val(data.coach_name);
    $("#titlee").val(data.title);

    $("#imagePreviewtech1").attr('src', 'assets/images/'+ data.image);

    $("#Descriptionse").val(data.Descriptions);
   
    
    }
    });

}






  $('#editcoach').on('click', function(event){

      
        var formData = new FormData();
        event.preventDefault();
    
        var techniqal_teamID   = window.tech


        var coach_name=$("#coach_namee").val();

         var title=$("#titlee").val();



    var img=document.getElementById("fileUploaderControltech1").files[0];


    var Descriptions=$("#Descriptionse").val();

  

        if(coach_name=="")
        {
    
        $('#coach_namee').focus();
    
            return false;
        }

        else if(title=="")
        {
            $('#titlee').focus();


        }
    
         if(img===undefined)
    
        {

            var Page="tech-nomage";


             formData.append("techniqal_teamID", techniqal_teamID);
             formData.append("coach_name", coach_name);
             formData.append("title", title); 
           
            formData.append("Descriptions", Descriptions);   
           
            formData.append("Page", Page);    
    
        }

        else
        {

            var Page="tech-img";


            formData.append("techniqal_teamID", techniqal_teamID);
            formData.append("coach_name", coach_name);
           formData.append("title", title); 
           
           formData.append("Descriptions", Descriptions);   
           
           formData.append("Page", Page);    
           
           formData.append("img", img);

        }
    
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


    function Deletetechniqalfunction(id){

     
        window.var1=id;
     
        
        }
        var ConfirmDeleting = function () {
            
            var ID = window.var1;
                 
          var page="techniqalteam";
          
        var $button = $(this);
        $.ajax({
        type: "POST",
        url: "../service/DeleteFunction.php",
        data:{ID:ID,page:page},
        success: function (result) {                                    
        toastr.error("تم الحذف بنجاح");
        $("#DeleteConfirmations").modal("hide");
 
            RefreshTable();
       
                }
            })
        }