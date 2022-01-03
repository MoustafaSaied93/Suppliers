


$(document).ready(function(){
  



  $('#price').bind('keypress', function(e) {
  
    var price= $("#price").val();
  
  
    var key = e.keyCode;
  
    if (key === 32&&price=="")  {
        e.preventDefault();
      return false;
    }
  
    if (key < 48 || key > 57 ) {
      e.preventDefault(); 
       }  
  
       
  
  });
  
  
  $('#eprice').bind('keypress', function(e) {
  
    var eprice= $("#eprice").val();
  
  
    var key = e.keyCode;
  
    if (key === 32&&eprice=="")  {
        e.preventDefault();
      return false;
    }
  
    if (key < 48 || key > 57 ) {
      e.preventDefault(); 
      return false;
       }   
  });
   
  });




  $('#Savesubscripe').on('click', function(event){
  
  
    var formData = new FormData();
    event.preventDefault();
  
  
    var subscrname=$("#subscrname").val();
  
     var startdate=$("#startdate").val();

     var enddate=$("#enddate").val();

     var price=$("#price").val();

    var tax=$("#tax").val();


    var Page="membersubscription";

    var date1 = new Date(startdate);

    var date2 = new Date(enddate);


    if(date1>=date2)

    {

        toastr.error(" عذرا تاريخ بداية الاشتراك اكبر من او يساوي تاريخ النهاية ");

        $('#startdate').focus();
  
        return false;

    }
  
   
    


    if(price=="")
    {
  
    $('#price').focus();
  
        return false;
    }


  formData.append("subscrname", subscrname);
  formData.append("startdate", startdate);
  formData.append("enddate", enddate);
  
  formData.append("price", price);

  formData.append("tax", tax);
  
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
  
    RefreshmemberTable();
   
  
     } 
  });
  });
  
  

  function editsubscipe(ID){
  
     window.ID=ID;
  
    var page="subscripe";
  
    $.ajax({
    url:"../service/fetchdata.php",
    method:"POST",
    data: {id:ID,page:page},
    dataType:"json",
    success:function(data){

      
  
    $("#esubscrname").val(data.name);
    $("#estartdate").val(data.startdate);
    $("#eenddate").val(data.enddate);

    $("#eprice").val(data.price);
  
    }
    });
  
  }
  $('#Editsubscripe').on('click', function(event){
  
      
        var formData = new FormData();
        event.preventDefault();
    
        var subid   = window.ID;
  
  
        var startdate=$("#estartdate").val();
     
        var enddate=$("#eenddate").val();

        var price=$("#eprice").val();


        var tax=$("#etax").val();
     
     
       var Page="subscripe";
     

       var date1 = new Date(startdate);

       var date2 = new Date(enddate);
   
   
       if(date1>=date2)
   
       {
   
           toastr.error(" عذرا تاريخ بداية الاشتراك اكبر من او يساوي تاريخ النهاية ");
   
           $('#estartdate').focus();
     
           return false;
   
       }
       

       
       if(price=="")
       {
     
       $('#eprice').focus();
     
           return false;
       }
  
         formData.append("subid", subid);
        formData.append("startdate", startdate);
        formData.append("enddate", enddate);        
        formData.append("price", price); 

        formData.append("tax", tax); 

        formData.append("Page", Page);   
    
    $.ajax({
      url:"../service/updatefunction.php",
      method:"POST",
       data: formData,
      processData: false,
      contentType: false,
      success:function(data){ 
      
        toastr.success(" تم تخديث بياناتك بنجاح");
        $(".bd-example-emodal-lg").modal("hide");
  
        RefreshmemberTable();
   
            }
         
       
       
    
    });
    });
  
  
    //delete function 
  
  
    function Deletememberfunction(id){
  
     
        window.vardelsubsc=id;
     
        
        }

        var ConfirmmemberrDelete = function () {
  
                     
            var ID = window.vardelsubsc;
                 
          var page="subscribe";
          
        var $button = $(this);
        $.ajax({
        type: "POST",
        url: "../service/DeleteFunction.php",
        data:{ID:ID,page:page},
        success: function (result) {                                    
        toastr.error("تم الحذف بنجاح");
        $("#DeletememberConfirmation").modal("hide");
  
        RefreshmemberTable();
       
                }
            })
        }
  
        
        function RefreshmemberTable() {
  
          $( "#datatable" ).load( "membersubscriptions.php #datatable" );
  
          $("#price").val("");
         
      }
      
  
  
  
  
  
  
  
  
  
  
  
  
  
  