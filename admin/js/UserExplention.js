$(document).ready(function() {

    $('#bootstrap-data-table').DataTable();
    
    
    
    function loadDoc4() {
      
    
        setTimeout(function(){
    
          $.ajax({
         url:"../sharefunction/GetClientExpNotify.php",
          method:"GET",
          cache:false,
          success:function(data){
    
         $("#counter4").html(data);
    
    }
    });
    
      },1000);
    
    
    }
    
     loadDoc4();
    
    });


function ClienrMessagesInfo(ID)

{
    var ID=ID;
    
var page="ClientMessageexp";

$.ajax({
url:"../sharefunction/fetchdata.php",
method:"POST",
data: {id:ID,page:page},
cache:false,
success:function(data){


$("#message").html(data);
}
});


}

function DeleteexpMessages(id){

 $("#DeleteExpConfirmation").modal("show");

    window.var1=id;
    
    
    
    }
    
    var ConfirmExpDeletemessage = function () {
        var ID = window.var1;
        var page="ExpClientMessage";
        
    var $button = $(this);
    $.ajax({
    type: "POST",
    url: "../sharefunction/DeleteFunction.php",
    data:{ID:ID,page:page},
    success: function (result) {                                    
    toastr.error("تم الحذف بنجاح");
    $("#DeleteExpConfirmation").modal("hide");
    window.setTimeout(function () { location.reload() }, 3000)
            }
        })
    }