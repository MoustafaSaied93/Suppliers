$(document).ready(function() {

} );

function NotActive(id){
       window.var1=id;

    }

  var ConfirmNotActive= function () {
      var ID = window.var1;



       var $button = $(this);
        $.ajax({
         type: "GET",
         cache: false,
         async: true,
        url: "../sharefunction/UpdateStatus.php",
        data:{ID:ID},
       success: function (result) {
         $("#NotActiveConfirmation").modal("hide");

         toastr.error("تم تعطيل الحساب");


            window.setTimeout(function () { location.reload() }, 3000)


//$("$notactive").css("visibility", "hidden");
         }

         });
      }

function Active(id){
       window.var1=id;

    }

  var ConfirmActive= function () {
      var ID = window.var1;
       var $button = $(this);
        $.ajax({
         type: "GET",
         cache: false,
         async: true,
        url: "../sharefunction/UpdateActiveStatus.php",
        data:{ID:ID},
       success: function (result) {
         $("#ActiveConfirmation").modal("hide");

         toastr.success(" تم تفعيل الحساب");


            window.setTimeout(function () { location.reload() }, 3000)


//$("$notactive").css("visibility", "hidden");
         }

         });
      }


      function DeleteAccount(ID)

      {

        window.var1=ID;


      }


      var ConfirmDelete= function () {
      var ID = window.var1;
      var page="Accounts";
       var $button = $(this);
        $.ajax({
         type: "POST",
         cache: false,
         async: true,
        url: "../sharefunction/DeleteFunction.php",
        data:{ID:ID,page:page},
       success: function (result) {

         $("#DeleteConfirmation").modal("hide");
         toastr.error(" تم حذف الحساب");
            window.setTimeout(function () { location.reload() }, 3000)

         }

        });
      }


