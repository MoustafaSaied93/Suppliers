$(document).ready(function() {

    $('#bootstrap-data-table').DataTable();



function loadDoc() {
  

    setInterval(function(){
  
        $.ajax({
       url:"../GetNotify.php",
        method:"GET",
        cache:false,
        success:function(data){
  
       $("#counter1").html(data);
  
  }
  });
  
    },1000);
  
  
   }
  
   loadDoc();
  
  });
  
        
  
  
  
  
  
  
  
  function MessageInfo(ID)
  
  {
      var ID=ID;
      
  var page="SystemMessage";
  
  $.ajax({
  url:"../fetchdata.php",
  method:"POST",
  data: {id:ID,page:page},
  cache:false,
  success:function(data){
  
  
  $("#message").html(data);
  }
  });
  
  
  }


  function DeleteMessages(id){


    window.var1=id;
    
    
    
    }
    
    var ConfirmDeletemessage = function () {
        var ID = window.var1;
        var page="SystemMessage";
        
    var $button = $(this);
    $.ajax({
    type: "POST",
    url: "../DeleteFunction.php",
    data:{ID:ID,page:page},
    success: function (result) {                                    
    toastr.error("تم الحذف بنجاح");
    $("#DeletesystemConfirmation").modal("hide");
    window.setTimeout(function () { location.reload() }, 3000)
            }
        })
    }