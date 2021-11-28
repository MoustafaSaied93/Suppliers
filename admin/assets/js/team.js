
$(document).ready(function() {


    $('#imagePreviewteam').click(function () {

        $('#fileUploaderControlteam').click();
    });


    $('#imagePreviewteam1').click(function () { 

        $('#fileUploaderControlteam1').click();
    });
    
    $("#fileUploaderControlteam").change(function () {

        var file = document.getElementById("fileUploaderControlteam").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewteam').attr('src', e.target.result).fadeIn();
    
        }

      
    })

    $("#fileUploaderControlteam1").change(function () {

        var file = document.getElementById("fileUploaderControlteam1").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewteam1').attr('src', e.target.result).fadeIn();
    
        }    
    })

    
     var Team_Name =  document.querySelector('#Team_Name');

     var Team_Namee =  document.querySelector('#Team_Namee');

     Team_Name.addEventListener("keypress",function(e){
      var key = e.keyCode;

      var validmember_name=$("#Team_Name").val();

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


      Team_Namee.addEventListener("keypress",function(e){
        var key = e.keyCode;
  
        var validmember_namee=$("#Team_Namee").val();
  
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

function RefreshteamsTable() {

    $( "#datatable" ).load( "teams.php #datatable" );

    $("#Team_Name").val("");

     $("#imagePreviewteam").attr('src', 'assets/images/NoImage.jpg');

     $("#imagePreviewteam1").attr('src', 'assets/images/NoImage.jpg');

     document.getElementById("fileUploaderControlteam").value = null;

     document.getElementById("fileUploaderControlteam1").value = null;

}

$('#Saveteam').on('click', function(event){


    var formData = new FormData();
     event.preventDefault();


    var Team_Name=$("#Team_Name").val();

    


    var img=document.getElementById("fileUploaderControlteam").files[0];



    var Page="teams";


    if(Team_Name=="")
    {

    $('#Team_Name').focus();

        return false;
    }

    else if(img===undefined)

    {

    toastr.error("من فضلك اضف مرفقا");

     return false;

    }


 formData.append("Team_Name", Team_Name);

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

    RefreshteamsTable();

    

        } 
});
});








function editteam(ID){

     window.varteam=ID;

    var page="teams";


    $.ajax({
    url:"../service/fetchdata.php",
    method:"POST",
    data: {id:ID,page:page},
    dataType:"json",
    success:function(data){

    $("#Team_Namee").val(data.Team_Name);
    
    window.varteamedit=data.Team_Name;

    $("#imagePreviewteam1").attr('src', 'assets/images/logo/'+ data.Team_Logo);
    
    }
    });

}






  $('#editteam').on('click', function(event){

      
        var formData = new FormData();
        event.preventDefault();
    
        var team_id  = window.varteam;
        var team_edit  = window. window.varteamedit;

        var Team_Name=$("#Team_Namee").val();

         



    var img=document.getElementById("fileUploaderControlteam1").files[0];

  

        if(Team_Name=="")
        {
    
        $('#Team_Namee').focus();
    
            return false;
        }
    
         if(img===undefined)
    
        {
            var Page="team-nomage";

            
            formData.append("team_id", team_id);
            formData.append("Team_Name", Team_Name); 
            formData.append("team_edit", team_edit);            
            formData.append("Page", Page);    

        }

        else
        {

            var Page="teams-img";

            formData.append("team_id", team_id);
            formData.append("Team_Name", Team_Name);
            formData.append("team_edit", team_edit);
           formData.append("img", img);
                         
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

        RefreshteamsTable();
   
            }
         
       
       
    
    });
    });


    //delete function 


    function Deleteteamfunction(id){

     
        window.varteamdelete=id;
     
        
        }
 
        
 
        var ConfirmDeleteteam = function () {

          
            
            var ID = window.varteamdelete;
                 
          var page="team";
          
        var $button = $(this);
        $.ajax({
        type: "POST",
        url: "../service/DeleteFunction.php",
        data:{ID:ID,page:page},
        success: function (result) {                                    
        toastr.error("تم الحذف بنجاح");
        $("#DeleteConfirmationteam").modal("hide");
 
        RefreshteamsTable();
       
                }
            })
        }