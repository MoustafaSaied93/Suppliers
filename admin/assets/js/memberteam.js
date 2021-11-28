
$(document).ready(function() {


    $('#imagePreviewc').click(function () {

        $('#fileUploaderControl').click();
    });


    $('#imagePreviewc1').click(function () { 

        $('#fileUploaderControl1').click();
    });
    
    $("#fileUploaderControl").change(function () {

        var file = document.getElementById("fileUploaderControl").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewc').attr('src', e.target.result).fadeIn();
    
        }

      
    })

    $("#fileUploaderControl1").change(function () {

        var file = document.getElementById("fileUploaderControl1").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewc1').attr('src', e.target.result).fadeIn();
    
        }

      
    })

    
     var member_name =  document.querySelector('#member_name');

     var member_namee =  document.querySelector('#member_namee');

      member_name.addEventListener("keypress",function(e){
      var key = e.keyCode;

      var validmember_name=$("#member_name").val();

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


      member_namee.addEventListener("keypress",function(e){
        var key = e.keyCode;
  
        var validmember_namee=$("#member_namee").val();
  
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


    
  



} );

// this code resbobsable for refresh table

function RefreshteamTable() {

    $( "#datatable" ).load( "teammember.php #datatable" );

    $("#member_name").val("");



     $("#imagePreviewc").attr('src', 'assets/images/NoImage.jpg');

     $("#imagePreviewc1").attr('src', 'assets/images/NoImage.jpg');

     
     document.getElementById("fileUploaderControl").value = null;

     document.getElementById("fileUploaderControl1").value = null;

}

$('#Savemember').on('click', function(event){


    var formData = new FormData();
    event.preventDefault();


    var member_name=$("#member_name").val();

     var title=$("#title").val();


    var img=document.getElementById("fileUploaderControl").files[0];




    var Page="members";


    if(member_name=="")
    {

    $('#member_name').focus();

        return false;
    }

    else if(img===undefined)

    {

    toastr.error("من فضلك اضف مرفقا");

     return false;

    }


 formData.append("member_name", member_name);
formData.append("title", title);
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

    RefreshteamTable();

    

        } 
});
});








function editmember(ID){

     window.varmember=ID;

    var page="members";

    $.ajax({
    url:"../service/fetchdata.php",
    method:"POST",
    data: {id:ID,page:page},
    dataType:"json",
    success:function(data){

    $("#member_namee").val(data.member_name);
    $("#titlee").val(data.title);

    $("#imagePreviewc1").attr('src', 'assets/images/'+ data.image);
    
    }
    });

}






  $('#editmember').on('click', function(event){

      
        var formData = new FormData();
        event.preventDefault();
    
        var member_id  = window.varmember


        var member_name=$("#member_namee").val();

         var title=$("#titlee").val();



    var img=document.getElementById("fileUploaderControl1").files[0];

  

        if(member_name=="")
        {
    
        $('#member_namee').focus();
    
            return false;
        }
    
         if(img===undefined)
    
        {

            var Page="members-nomage";


            formData.append("member_id", member_id);
            formData.append("member_name", member_name);
           formData.append("title", title);        
           
           formData.append("Page", Page);    
    
        }

        else
        {

            var Page="members-img";


            formData.append("member_id", member_id);
            formData.append("member_name", member_name);
           formData.append("img", img);
           formData.append("title", title);                 
           formData.append("Page", Page);    

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

        RefreshteamTable();
   
            }
         
       
       
    
    });
    });


    //delete function 


    function Deletememberfunction(id){

     
        window.var1=id;
     
        
        }
 
        
 
        var ConfirmDelete = function () {

          
            
            var ID = window.var1;
                 
          var page="memberteam";
          
        var $button = $(this);
        $.ajax({
        type: "POST",
        url: "../service/DeleteFunction.php",
        data:{ID:ID,page:page},
        success: function (result) {                                    
        toastr.error("تم الحذف بنجاح");
        $("#DeleteConfirmation").modal("hide");
 
        RefreshteamTable();
       
                }
            })
        }