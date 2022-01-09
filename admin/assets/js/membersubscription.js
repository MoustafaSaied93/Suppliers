


$(document).ready(function(){
  
  var price=$("#price").val();

  

  $('#month').on('change', function () {

    $("#price").val("");
    
    var month =$("#month").val();

    var total=month*price;

    $("#price").val(total);


});

$('#emonth').on('change', function () {


  var emonth =$("#emonth").val();

  var etotal=emonth*price;

  $("#eprice").val(etotal);


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

    var month=$("#month").val();


    var Page="membersubscription";

    var date1 = new Date(startdate);

    var date2 = new Date(enddate);

   var month1 = date1.getMonth() + 1; 

   var month2 = date2.getMonth() + 1; 

   var day1  = date1.getDate();

   var day2  = date2.getDate();

 

var submonth=month2-month1;


    if(date1>=date2)

    {

        toastr.error(" عذرا تاريخ بداية الاشتراك اكبر من او يساوي تاريخ النهاية ");

        $('#startdate').focus();
  
        return false;

    }

    if(month!=submonth)

    {

        toastr.error("  من فضلك ادخل تواريخ صحيحة    ");

        $('#startdate').focus();
  
        return false;

    }


    if(day1!=day2)

    {

        toastr.error("  من فضلك ادخل تواريخ صحيحة    ");

        $('#startdate').focus();
  
        return false;

    }

  formData.append("subscrname", subscrname);
  formData.append("startdate", startdate);
  formData.append("enddate", enddate);
  
  formData.append("month", month);

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

    $("#emonth").val(data.month);
  
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

        var month=$("#emonth").val();
     
     
       var Page="subscripe";
     
       var date1 = new Date(startdate);

       var date2 = new Date(enddate);

       var month1 = date1.getMonth() + 1; 

       var month2 = date2.getMonth() + 1; 
    
       var day1  = date1.getDate();
    
       var day2  = date2.getDate();
    
     
    
    var submonth=month2-month1;
    
    
        if(date1>=date2)
    
        {
    
            toastr.error(" عذرا تاريخ بداية الاشتراك اكبر من او يساوي تاريخ النهاية ");
    
            $('#estartdate').focus();
      
            return false;
    
        }
    
        if(month!=submonth)
    
        {
    
            toastr.error("  من فضلك ادخل تواريخ صحيحة    ");
    
            $('#estartdate').focus();
      
            return false;
    
        }
    
    
        if(day1!=day2)
    
        {
    
            toastr.error("  من فضلك ادخل تواريخ صحيحة    ");
    
            $('#estartdate').focus();
      
            return false;
    
        }

       
      
  
         formData.append("subid", subid);
        formData.append("startdate", startdate);
        formData.append("enddate", enddate);        
        formData.append("price", price); 

        formData.append("tax", tax); 

        formData.append("month", month); 

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


          $("#month").val("");
          $("#startdate").val("");
          $("#enddate").val("");

         
      }
      
  
  
  
  
  
  
  
  
  
  
  
  
  
  