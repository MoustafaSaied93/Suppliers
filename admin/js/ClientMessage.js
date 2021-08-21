$(document).ready(function() {

    $('#bootstrap-data-table').DataTable();
    
    
    
    function loadDoc2() {
      
    
        setTimeout(function(){
    
          $.ajax({
         url:"../sharefunction/GetClientNotify.php",
          method:"GET",
          cache:false,
          success:function(data){
    
         $("#counter").html(data);
    
    }
    });
    
      },1000);
    
    
    }
    
     loadDoc2();
    
    });


function MessageClientInfo(ID)

{
    var ID=ID;
    
var page="SystemClientMessage";

$.ajax({
url:"../sharefunction/fetchdata.php",
method:"POST",
data: {id:ID,page:page},
cache:false,
success:function(data){


$("#messageclient").html(data);
}
});


}

function DeleteMessages(id){

 $("#DeleteMessageConfirmation").modal("show");

    window.var1=id;
    
    
    
    }
    
    var ConfirMessagemDelete = function () {
        var ID = window.var1;
        var page="ClientMessage";
        
    var $button = $(this);
    $.ajax({
    type: "POST",
    url: "../sharefunction/DeleteFunction.php",
    data:{ID:ID,page:page},
    success: function (result) {                                    
    toastr.error("تم الحذف بنجاح");
    $("#DeleteMessageConfirmation").modal("hide");
    window.setTimeout(function () { location.reload() }, 3000)
            }
        })
    }