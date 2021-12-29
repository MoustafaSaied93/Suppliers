
$(document).ready(function(){
  

  $('#name').bind('keypress', function(e) {

    var name= $("#name").val();

    
    var key = e.keyCode;

    if (key === 32&&name=="")  {
        e.preventDefault();
      return false;
    }


});

$('#namee').bind('keypress', function(e) {

  var namee= $("#namee").val();

  
  var key = e.keyCode;

  if (key === 32&&namee=="")  {
      e.preventDefault();
    return false;
  }

});

$('#mobile_number').bind('keypress', function(e) {

  var mobile_number= $("#mobile_number").val();


  var key = e.keyCode;

  if (key === 32&&mobile_number=="")  {
      e.preventDefault();
    return false;
  }

  if (key < 48 || key > 57 ) {
    e.preventDefault(); 
     }  

     

});


$('#mobile_numbere').bind('keypress', function(e) {

  var mobile_numbere= $("#mobile_numbere").val();


  var key = e.keyCode;

  if (key === 32&&mobile_numbere=="")  {
      e.preventDefault();
    return false;
  }

  if (key < 48 || key > 57 ) {
    e.preventDefault(); 
    return false;
     }  

     
     
     

});

$('#identity_number').bind('keypress', function(e) {

  var identity_number= $("#identity_number").val();


  var key = e.keyCode;

  if (key === 32&&identity_number=="")  {
      e.preventDefault();
    return false;
  }

  if (key < 48 || key > 57 ) {
    e.preventDefault(); 
     }   


  });


  $('#identity_numbere').bind('keypress', function(e) {

    var identity_numbere= $("#identity_numbere").val();
  
  
    var key = e.keyCode;
  
    if (key === 32&&identity_numbere=="")  {
        e.preventDefault();
      return false;
    }
  
    if (key < 48 || key > 57 ) {
      e.preventDefault(); 
       } 

       
  
    });

});





$('#Saveplayer').on('click', function(event){


  var formData = new FormData();
  event.preventDefault();


  var name=$("#name").val();

   var mobile_number=$("#mobile_number").val();

   var identity_number=$("#identity_number").val();

   //saudia arabia regular expression
    

   var regex = new RegExp(/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/);

  var Page="players";


  if(name=="")
  {

  $('#name').focus();

      return false;
  }

  if(mobile_number=="")
  {

  $('#mobile_number').focus();

      return false;
  }


  if(mobile_number.length <10)
  {

  $('#mobile_number').focus();

      return false;
  }


   if(!regex.test(mobile_number)){  
    toastr.error("برجاء ادخال رقم الجوال الصحيح");  
    $("#mobile_number").focus();
    
    return false;
     
    }


  if(identity_number=="")
  {

  $('#identity_number').focus();

      return false;
  }


  if(identity_number.length <10)
  {

  $('#identity_number').focus();

      return false;
  }



formData.append("name", name);
formData.append("mobile_number", mobile_number);
formData.append("identity_number", identity_number);


formData.append("Page", Page);

$.ajax({
url:"../service/addfunction.php",
method:"POST",
 data: formData,
processData: false,
contentType: false,
success:function(data){ 

  if(data==0)

  {

    toastr.error("رقم الجوال مستخدم من قبل");

    return false;

  }

  else if(data==1)

  {

    toastr.error("رقم الهوية مستخدم من قبل");

    return false;
  }

  else
  {

    toastr.success(" تمت عملية الاضافة بنجاح");
  $(".bd-example-modal-lg").modal("hide");

  RefreshplayersTable();


  }


  

      } 
});
});




function editplayer(ID){

   window.ID=ID;

  var page="players";

  $.ajax({
  url:"../service/fetchdata.php",
  method:"POST",
  data: {id:ID,page:page},
  dataType:"json",
  success:function(data){

  $("#namee").val(data.name);
  $("#mobile_numbere").val(data.mobile_number);
  $("#identity_numbere").val(data.identity_number);

  }
  });

}
$('#editplayer').on('click', function(event){

    
      var formData = new FormData();
      event.preventDefault();
  
      var PlayerID   = window.ID;

      var name=$("#namee").val();

      var mobile_number=$("#mobile_numbere").val();
   
      var identity_number=$("#identity_numbere").val();

      //saudia arabia regular expression
    

   var regex = new RegExp(/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/);
   
   
     var Page="players";
   
   
     if(name=="")
     {
   
     $('#namee').focus();
   
         return false;
     }
   
     if(mobile_number=="")
     {
   
     $('#mobile_numbere').focus();
   
         return false;
     }

     if(mobile_number.length<10)
     {
   
     $('#mobile_numbere').focus();
   
         return false;
     }

     if(!regex.test(mobile_number)){  
      toastr.error("برجاء ادخال رقم الجوال الصحيح");  
      $("#mobile_numbere").focus();
      
      return false;
       
      }


   
     if(identity_number=="")
     {
   
     $('#identity_numbere').focus();
   
         return false;
     }

     if(identity_number.length <10)
     {
   
     $('#identity_numbere').focus();
   
         return false;
     }

       formData.append("PlayerID", PlayerID);
       formData.append("name", name);
      formData.append("mobile_number", mobile_number);
      formData.append("identity_number", identity_number);        

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

      RefreshplayersTable();
 
          }
       
     
     
  
  });
  });


  //delete function 


  function Deleteplayerfunction(id){

   
      window.vardelpl=id;
   
      
      }


      var ConfirmplayerDelete = function () {

        
          
          var ID = window.vardelpl;
               
        var page="players";
        
      var $button = $(this);
      $.ajax({
      type: "POST",
      url: "../service/DeleteFunction.php",
      data:{ID:ID,page:page},
      success: function (result) {                                    
      toastr.error("تم الحذف بنجاح");
      $("#DeleteplayerConfirmation").modal("hide");

      RefreshplayersTable();
     
              }
          })
      }

      
      function RefreshplayersTable() {

        $( "#datatable" ).load( "players.php #datatable" );

        $("#name").val("");
        $("#mobile_number").val("");
        $("#identity_number").val("");
  
    
    }
    













