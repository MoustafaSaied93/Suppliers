
$(document).ready(function(){

    $('#team_number').bind('keypress', function(e) {

            
            e.preventDefault();
          return false;
        

    });


});
   

//  add function


$('#editarrange').on('click', function(event){

     var formData = new FormData();
        event.preventDefault();


    var team_name  ;
    var team_number ;
    var matches ;
    var points ;
 

    $("#arrange_table tr.arranga").each(function() {

        
        team_name=$(this).find("#team_name").val();

        team_number=$(this).find("#team_number").val();

        matches=$(this).find("#matches").val();
        points=$(this).find("#points").val();

        editteam=$(this).find("#editteamnumber").val();

        formData.append("team_name",team_name);
        formData.append("team_number",team_number);
        formData.append("matches",matches);
        formData.append("points",points);
      
        
        $.ajax({
      url:"../service/updatearange.php",
      method:"POST",
       data: formData,
      processData: false,
      contentType: false,
      success:function(data){ 


       
        $(".bd-example-modal-lg").modal("hide");

        RefresarrangeTable();
    
     
      
            } 
        });
       
      
       });  


       toastr.success(" عملية التحديث تمت بنجاح");  
    
   
   });



//refresh data table
   function RefresarrangeTable() {
    $( "#datatable" ).load( "arrangeteam.php #datatable" );

  

   
}





