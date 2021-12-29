
$(document).ready(function(){


    $('#imagePreviewshamp1').click(function () {

        $('#fileUploaderControlshamp1').click();
    });


    $("#fileUploaderControlshamp1").change(function () {

        var file = document.getElementById("fileUploaderControlshamp1").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewshamp1').attr('src', e.target.result).fadeIn();
    
        }

      
    })






    $('#shampion_Name').bind('keypress', function(e) {

        var shampion_Name= $("#shampion_Name").val();

        
        var key = e.keyCode;

        if (key === 32&&shampion_Name=="")  {
            e.preventDefault();
          return false;
        }

    });

    $('#shampion_Namee').bind('keypress', function(e) {

        var shampion_Namee= $("#shampion_Namee").val();

        
        var key = e.keyCode;

        if (key === 32&&shampion_Namee=="")  {
            e.preventDefault();
          return false;
        }

    });
   


    var count = 1;
    $('#addshamp').click(function(){
     
     count = count + 1;

     var html_code = "<tr id='row"+count+"' class='shampsonname' >";

     html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>"; 

      html_code += "   <td>  <input type='text' class = 'form-control' id='shampion_Name' placeholder='اسم البطولة' maxlength='30'> </td>";
 
      html_code += '  <td> <input type="file" name="fileUploaderControlshamp" id="fileUploaderControlshamp" accept="image/*" multiple> </td>';
     
     
      html_code += "</tr>";  
      $('#shamp').append(html_code);
    });

//remove row from popup
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
       });


});



//  add function


$('#Saveshampion').on('click', function(event){

     var formData = new FormData();
        event.preventDefault();


    var shampins = [];
    var images = [];
  

    $("#shamp tr.shampsonname").each(function() {

        

        shampins.push($(this).find("#shampion_Name").val());

        if(shampins=="")

        {
            $("shampion_Name").focus();
            toastr.error("ادخل اسم البطولة");
            exit

        }
       
       });


       $("#shamp tr.shampsonname").each(function() {
        
        images.push($(this).find("#fileUploaderControlshamp")[0].files[0]);
        if(images=="")

        {
            
            toastr.error("ادخل اسم المرفق");

            exit

        }
        
      
       });

       for(var i = 0; i < images.length; i++) {
        formData.append("img[]", images[i]);
    }



    
    var Page="champs";

    formData.append("shampion_Name",shampins);


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

   

    RefresshampionTable();

        } 
});
   });




   
   function editchampss(ID){

    window.varshamps=ID;

   var page="champs";

   $.ajax({
   url:"../service/fetchdata.php",
   method:"POST",
   data: {id:ID,page:page},
   dataType:"json",
   success:function(data){

   $("#shampion_Namee").val(data.shampion_Name);
   

    $("#imagePreviewshamp1").attr('src', 'assets/images/'+ data.image);
   
   }
   });

}



$('#editshamp').on('click', function(event){

      
    var formData = new FormData();
    event.preventDefault();

    var club_shampion_id  = window.varshamps;


    var shampion_Namee=$("#shampion_Namee").val();

     

var img=document.getElementById("fileUploaderControlshamp1").files[0];



    if(shampion_Namee=="")
    {

    $('#shampion_Namee').focus();

        return false;
    }

     if(img===undefined)

    {

        var Page="champ-nomage";
        formData.append("club_shampion_id", club_shampion_id);
        formData.append("shampion_Namee", shampion_Namee);           
        formData.append("Page", Page);    

    }

    else
    {

        var Page="champ-img";


        formData.append("club_shampion_id", club_shampion_id);
        formData.append("shampion_Namee", shampion_Namee);           
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

    RefresshampionTable();

        }
     
   
   

});
});





//refresh data table
   function RefresshampionTable() {
    $( "#datatable" ).load( "clubshampion.php #datatable" );
    
    $("#shampion_Name").val("");

    document.getElementById("fileUploaderControlshamp").value = null;

   
}




//delete function 


function Deleteshampfunction(id)

{

window.varshampdel=id;

}
var ConfirmDeletechamp = function () {

    
    var ID = window.varshampdel;
                 
          var page="champ";
          
        var $button = $(this);
        $.ajax({
        type: "POST",
        url: "../service/DeleteFunction.php",
        data:{ID:ID,page:page},
        success: function (result) {                                    
        toastr.error("تم الحذف بنجاح");
        $("#DeleteConfirmationshamp").modal("hide");

        RefresshampionTable();
       
                }
            })
        }





