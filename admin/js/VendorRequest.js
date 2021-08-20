function AcceptProduct(id,UserID){

   window.var1=id;

   window.var2=UserID;

}

var ConfirmAccept= function () {
  var ID = window.var1;

  var UserID = window.var2;

   Page="AcceptRequestVendor";

   var $button = $(this);
    $.ajax({
     type: "POST",
     cache: false,
     async: true,
    url: "../updatefunction.php",
    data:{ID:ID,UserID:UserID,Page:Page},
   success: function (result) {
     $("#AcceptConfirmation").modal("hide");

     toastr.success(" تم قبول الطلب بنجاح");


        window.setTimeout(function () { location.reload() }, 3000)

     }

     });
  }  



  function RefusedProduct(id,UserID){

  
  

   
   window.var3=id;

   window.var4=UserID;


 


}

var ConfirmRefuse= function () {
  var ID = window.var3;

  var UserID = window.var4;



  var Page="RefusedRequest";

  var Message = $("#Messagess").val();


   var $button = $(this);
    $.ajax({
     type: "POST",
     cache: false,
     async: true,
    url: "../updatefunction.php",
    data:{ID:ID,UserID:UserID,Message:Message,Page:Page},
   success: function (result) {
     $("#RefusedConfirmation").modal("hide");
     toastr.error(" تم رفض الطلب بنجاح");
        window.setTimeout(function () { location.reload() }, 3000)

     }

     });
  }




//delete Adminproduct

    function DeleteProduct(id){
        window.var1=id;
    
    
     }
     var ConfirmDelete= function () {
        var ID = window.var1;
        var Page="VendorDeleteRequest";
         var $button = $(this);
          $.ajax({
           type: "POST",
           cache: false,
           async: true,
          url: "../AcceptAndRefuseRequest.php",
          data:{ID:ID,Page:Page},
         success: function (result) {
           $("#DeleteConfirmation").modal("hide");
           toastr.error("تم عملية الحذف بنجاح");
              window.setTimeout(function () { location.reload() }, 3000)
           }
    
           });
        }



