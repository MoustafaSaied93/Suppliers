
$(document).ready(function() {


  



} );

// this code resbobsable for refresh table

function RefreshmatchTable() {

    $( "#datatable" ).load( "matches.php #datatable" );


}

$('#Savematches').on('click', function(event){

    var formData = new FormData();
     event.preventDefault();

    var First_Team=$("#First_Team").val();


    var Second_Team=$("#Second_Team").val();


    var MatchDate=$("#MatchDate").val();

    var timepicker2=$("#timepicker2").val();



    if(First_Team=="")

    {
        $("#First_Team").focus();

        return false;

    }

    if(Second_Team===null)

    {
        $("#Second_Team").focus();

        return false;

    }



    if(First_Team== Second_Team)

    {
        $("#Second_Team").focus();

        return false;


    }


    if(MatchDate==="")

    {
        $("#MatchDate").focus();

        return false;
    }

    if(timepicker2==="")

    {
        $("#timepicker2").focus();

        return false;
    }



    var day = new Date(MatchDate);

    var dayname;

   var daynam= day.getDay();

   switch (daynam) {
    case 0:
        dayname = "السبت";
      break;
    case 1:
        dayname = "الاثنين";
      break;
    case 2:
        dayname = "الثلاثاء";
      break;
    case 3:
        dayname = "الاربعاء";
      break;
    case 4:
        dayname = "الخميس";
      break;
    case 5:
        dayname = "الجمعة";
      break;
    case 6:
        dayname = "الاحد";
  }
    var Page="matches";




 formData.append("First_Team", First_Team);
 formData.append("Second_Team", Second_Team);
 formData.append("MatchDate", MatchDate );
 formData.append("dayname", dayname);
 formData.append("timepicker2", timepicker2);

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

    RefreshmatchTable();

    

        } 
});
});





//edit match 

function deletedata(){
    

    $("#editbutton").hide();

    $("#Savematches").show();
    
    $("#orders_").html("اضافة مباراة");

    $("#First_Team").val("");


    $("#Second_Team").val("");


    $("#MatchDate").val("");

    $("#timepicker2").val("");

}



function editmatch(ID){

    $("#editbutton").show();

    $("#Savematches").hide();
    
    $("#orders_").html("تعديل المباراة");

    window.varmatch=ID;

   var page="matches";

   $.ajax({
   url:"../service/fetchdata.php",
   method:"POST",
   data: {id:ID,page:page},
   dataType:"json",
   success:function(data){

   $("#First_Team").val(data.First_Team);

   $("#Second_Team").val(data.Second_Team);

   $("#MatchDate").val(data.MatchDate);

   $("#timepicker2").val(data.Hour);
   

   
   }
   });

}

// update function


$('#editmatches').on('click', function(event){

    var formData = new FormData();
     event.preventDefault();

     var Match_ID   = window.varmatch;

    var First_Team=$("#First_Team").val();


    var Second_Team=$("#Second_Team").val();


    var MatchDate=$("#MatchDate").val();

    var timepicker2=$("#timepicker2").val();



    if(First_Team=="")

    {
        $("#First_Team").focus();

        return false;

    }

    if(Second_Team===null)

    {
        $("#Second_Team").focus();

        return false;

    }



    if(First_Team== Second_Team)

    {
        $("#Second_Team").focus();

        return false;


    }


    if(MatchDate==="")

    {
        $("#MatchDate").focus();

        return false;
    }

    if(timepicker2==="")

    {
        $("#timepicker2").focus();

        return false;
    }




    var day = new Date(MatchDate);

    var dayname;

   var daynam= day.getDay();

   switch (daynam) {
    case 0:
        dayname = "السبت";
      break;
    case 1:
        dayname = "الاثنين";
      break;
    case 2:
        dayname = "الثلاثاء";
      break;
    case 3:
        dayname = "الاربعاء";
      break;
    case 4:
        dayname = "الخميس";
      break;
    case 5:
        dayname = "الجمعة";
      break;
    case 6:
        dayname = "الاحد";
  }
    var Page="matches";



    formData.append("Match_ID", Match_ID);
 formData.append("First_Team", First_Team);
 formData.append("Second_Team", Second_Team);
 formData.append("MatchDate", MatchDate );
 formData.append("dayname", dayname);
 formData.append("timepicker2", timepicker2);

 formData.append("Page", Page);  

$.ajax({
    url:"../service/updatefunction.php",
  method:"POST",
   data: formData,
  processData: false,
  contentType: false,
  success:function(data){ 
 
    toastr.success(" عملية التحديث تمت بنجاح");
    $(".bd-example-modal-lg").modal("hide");

    RefreshmatchTable();

    

        } 
});
}); 
















  

    //delete function 


    function Deletematchfunction(id){

       
        window.varmatchdelete=id;
     
        
        }
        var ConfirmDeletematch = function () {
          
         var ID = window.varmatchdelete;
                 
          var page="matches";
          
        var $button = $(this);
        $.ajax({
        type: "POST",
        url: "../service/DeleteFunction.php",
        data:{ID:ID,page:page},
        success: function (result) {                                    
        toastr.error("تم الحذف بنجاح");
        $("#DeletematchConfirmations").modal("hide");
 
        RefreshmatchTable();
       
                }
            })
        }