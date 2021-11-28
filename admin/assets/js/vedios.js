
$(document).ready(function(){

    $('#Vedio_Title').bind('keypress', function(e) {

        var Vedio_Title= $("#Vedio_Title").val();

        
        var key = e.keyCode;

        if (key === 32&&Vedio_Title=="")  {
            e.preventDefault();
          return false;
        }

    });

    $('#Vedio_Titlee').bind('keypress', function(e) {

        var Vedio_Titlee= $("#Vedio_Titlee").val();

        
        var key = e.keyCode;

        if (key === 32&&Vedio_Titlee=="")  {
            e.preventDefault();
          return false;
        }

    });
   

    $('#Vedio_Link').bind('keypress', function(e) {

        var Vedio_Link= $("#Vedio_Link").val();       
        var key = e.keyCode;

        if (key === 32&&Vedio_Link=="")  {
            e.preventDefault();
          return false;
        }

    });
    $('#Vedio_Linke').bind('keypress', function(e) {

        var Vedio_Linke= $("#Vedio_Linke").val();       
        var key = e.keyCode;

        if (key === 32&&Vedio_Linke=="")  {
            e.preventDefault();
          return false;
        }

    });
  


    var count = 1;
    $('#addlink').click(function(){
     
     count = count + 1;

     var html_code = "<tr id='row"+count+"' class='lnksnames' >";

     html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>"; 

      html_code += "  <td ><textarea name='paragraph_text' class='form-control' id='Vedio_Title'  cols='3' rows='3' maxlength=100></textarea> </td>";
 
      html_code += "  <td ><textarea name='paragraph_text' class='form-control' id='Vedio_Link'  cols='3' rows='3' maxlength=100></textarea> </td>";


     
      html_code += "</tr>";  
      $('#links').append(html_code);
    });

//remove row from popup
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
       });


});






//  add function


$('#SaveLink').on('click', function(event){

     var formData = new FormData();
        event.preventDefault();


    var vediostitles = [];
    var vedioslinks = [];
  

    $("#links tr.lnksnames").each(function() {

        

        vediostitles.push($(this).find("#Vedio_Title").val());

        if(vediostitles=="")

        {
            $("Vedio_Title").focus();

            toastr.error("ادخل عنوان الرابط");

            exit


        }

        

       
       });


       $("#links tr.lnksnames").each(function() {

        

        vedioslinks.push($(this).find("#Vedio_Link").val());

        if(vedioslinks=="")

        {
            $("Vedio_Link").focus();

            toastr.error("ادخل الرابط");

            exit


        }





      
       });


    
    var Page="vedios";

    formData.append("Vedio_Title",vediostitles);
    formData.append("Vedio_Link",vedioslinks);

    formData.append("Page",Page); 
    
    $.ajax({
  url:"../service/addfunction.php",
  method:"POST",
   data: formData,
  processData: false,
  contentType: false,
  success:function(data){ 
 
    toastr.success(" تمت عملية الاضافة بنجاح");
    $(".bd-example-modal-lg").modal("hide");

    uplaodimage();

    RefresvedioTable();

        } 
});
   });








   function editvedio(ID){

    window.vareditved=ID;

   var page="vedio";


   $.ajax({
   url:"../service/fetchdata.php",
   method:"POST",
   data: {id:ID,page:page},
   dataType:"json",
   success:function(data){

   $("#Vedio_Titlee").val(data.Vedio_Title);
   

   $("#Vedio_Linke").val(data.Vedio_Link);
   
   }
   });

}


$('#editLink').on('click', function(event){

      
    var formData = new FormData();
    event.preventDefault();

    var linkID   = window.vareditved;


    var Vedio_Titlee=$("#Vedio_Titlee").val();

     var Vedio_Linke=$("#Vedio_Linke").val();


    var Page="vedio";

    if(Vedio_Titlee=="")
    {

    $('#Vedio_Titlee').focus();

        return false;
    }

    else if(Vedio_Linke=="")
    {
        $('#Vedio_Linke').focus();

    }


        formData.append("linkID", linkID);
        formData.append("Vedio_Titlee", Vedio_Titlee);
       formData.append("Vedio_Linke", Vedio_Linke);    
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

    RefresvedioTable();

        }
     
   
   

});
});










//refresh data table
   function RefresvedioTable() {
    $( "#datatable" ).load( "vediolink.php #datatable" );


    $("#Vedio_Title").val("");


     $("#Vedio_Link").val("");

   
}




//delete function 


function Deletevediofunction(id){

     
    window.varvedio=id;
 
    
    }
    var ConfirmDeletevedio = function () {
        
        var ID = window.varvedio;
             
      var page="vedios";
      
    var $button = $(this);
    $.ajax({
    type: "POST",
    url: "../service/DeleteFunction.php",
    data:{ID:ID,page:page},
    success: function (result) {                                    
    toastr.error("تم الحذف بنجاح");
    $("#DeleteConfirmationvedio").modal("hide");

    RefresvedioTable();
   
            }
        })
    }







