

$('#saveinventory').on('click', function(event){


    var formData = new FormData();
    event.preventDefault();
  
  
    var subid=$("#subid").val();
  
     var inventory_number=$("#inventory_number").val();
  
     var inventory_date=$("#inventory_date").val();

     var name=$("#name").val();


     var time=$("#time").val();
  

     //saudia arabia regular expression
      
  var Page="invoice";
    
  formData.append("subid", subid);
  formData.append("inventory_number", inventory_number);
  formData.append("inventory_date", inventory_date);
  formData.append("name", name);
  
  formData.append("time", time);

  formData.append("Page", Page);
  
  $.ajax({
  url:"../service/addfunction.php",
  method:"POST",
   data: formData,
  processData: false,
  contentType: false,
  success:function(data){ 
  
    

      window.location.href = "membersubscriptions.php";
    
  
  
        } 
  });
  });



  function Deleteinventoryfunction(id){

   
    window.vardelpl=id;
 
    
    }


    var ConfirmDeleteinventorty = function () {

      
        
        var ID = window.vardelpl;
             
      var page="inventory";
      
    var $button = $(this);
    $.ajax({
    type: "POST",
    url: "../service/DeleteFunction.php",
    data:{ID:ID,page:page},
    success: function (result) {                                    
    toastr.error("تم الحذف بنجاح");
    $("#DeleteinventortyConfirmation").modal("hide");

    RefreshinventoryTable();
   
            }
        })
    }


    function RefreshinventoryTable() {
  
      $( "#datatable" ).load( "invoicedetails.php #datatable" );

     
     
  }
  