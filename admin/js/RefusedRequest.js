function DeleteProduct(id){
    window.var1=id;


 }
 var ConfirmDeletess= function () {

    alert("1");
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
       $("#DeleteConfirmationsss").modal("hide");
       toastr.error("تم عملية الحذف بنجاح");
          window.setTimeout(function () { location.reload() }, 3000)
       }

       });
    }