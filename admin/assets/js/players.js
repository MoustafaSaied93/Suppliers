
$(document).ready(function(){
  

  $('#PlayerName').bind('keypress', function(e) {

    var PlayerName= $("#PlayerName").val();

    
    var key = e.keyCode;

    if (key === 32&&PlayerName=="")  {
        e.preventDefault();
      return false;
    }

});

$('#PlayerNamee').bind('keypress', function(e) {

  var PlayerNamee= $("#PlayerNamee").val();

  
  var key = e.keyCode;

  if (key === 32&&PlayerNamee=="")  {
      e.preventDefault();
    return false;
  }

});


$('#position').bind('keypress', function(e) {

  var position= $("#position").val();


  var key = e.keyCode;

  if (key === 32&&position=="")  {
      e.preventDefault();
    return false;
  }

});

$('#positione').bind('keypress', function(e) {

  var positione= $("#positione").val();


  var key = e.keyCode;

  if (key === 32&&positione=="")  {
      e.preventDefault();
    return false;
  }

});

$('#number').bind('keypress', function(e) {

  var number= $("#number").val();


  var key = e.keyCode;

  if (key === 32&&number=="")  {
      e.preventDefault();
    return false;
  }

  if (key < 48 || key > 57 ) {
    e.preventDefault(); 
     }   





});

$('#numbere').bind('keypress', function(e) {

  var numbere= $("#numbere").val();


  var key = e.keyCode;

  if (key === 32&&numbere=="")  {
      e.preventDefault();
    return false;
  }

  if (key < 48 || key > 57 ) {
    e.preventDefault(); 
     }   





});


$('#imagePreviewplyer').click(function () {

  $('#fileUploaderControlplayer').click();
});


$('#imagePreviewplyer1').click(function () { 

  $('#fileUploaderControlplayer1').click();
});

$("#fileUploaderControlplayer").change(function () {

  var file = document.getElementById("fileUploaderControlplayer").files[0];
  
  var readImg = new FileReader();
  readImg.readAsDataURL(file);
  readImg.onload = function (e) {
      $('#imagePreviewplyer').attr('src', e.target.result).fadeIn();

  }


})

$("#fileUploaderControlplayer1").change(function () {

  var file = document.getElementById("fileUploaderControlplayer1").files[0];
  
  var readImg = new FileReader();
  readImg.readAsDataURL(file);
  readImg.onload = function (e) {
      $('#imagePreviewplyer1').attr('src', e.target.result).fadeIn();

  }


})

});



$('#Saveplayer').on('click', function(event){


  var formData = new FormData();
  event.preventDefault();


  var PlayerName=$("#PlayerName").val();

   var position=$("#position").val();

   var number=$("#number").val();

  var img=document.getElementById("fileUploaderControlplayer").files[0];



  var Page="players";


  if(PlayerName=="")
  {

  $('#PlayerName').focus();

      return false;
  }

  if(position=="")
  {

  $('#position').focus();

      return false;
  }

  if(number=="")
  {

  $('#number').focus();

      return false;
  }

  else if(img===undefined)

  {

  toastr.error("من فضلك اضف مرفقا");

   return false;

  }
formData.append("PlayerName", PlayerName);
formData.append("position", position);
formData.append("number", number);

formData.append("img", img);

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

  RefreshplayersTable();

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

  $("#PlayerNamee").val(data.PlayerName);
  $("#positione").val(data.position);
  $("#numbere").val(data.number);

  $("#imagePreviewplyer1").attr('src', 'assets/images/players/'+ data.image);
  
  }
  });

}



$('#editplayer').on('click', function(event){

    
      var formData = new FormData();
      event.preventDefault();
  
      var PlayerID   = window.ID;


      var PlayerName=$("#PlayerNamee").val();

      var position=$("#positione").val();
   
      var number=$("#numbere").val();
   
     var img=document.getElementById("fileUploaderControlplayer1").files[0];
   
   
     var Page="players";
   
   
     if(PlayerName=="")
     {
   
     $('#PlayerNamee').focus();
   
         return false;
     }
   
     if(position=="")
     {
   
     $('#positione').focus();
   
         return false;
     }
   
     if(number=="")
     {
   
     $('#numbere').focus();
   
         return false;
     }


       if(img===undefined)
  {

          var Page="player-img";


          formData.append("PlayerID", PlayerID);
          formData.append("PlayerName", PlayerName);
          formData.append("position", position);
         formData.append("number", number);        
         
         formData.append("Page", Page); 
         
         formData.append("img", img);

      }
  
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

        $("#PlayerName").val("");
        $("#position").val("");
        $("#number").val("");
        $("#imagePreviewplyer").attr('src', 'assets/images/NoImage.jpg');

        document.getElementById("fileUploaderControlplayer").value = null;
  
    
    }
    













