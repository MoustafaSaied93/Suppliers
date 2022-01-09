

$(document).ready(function() {


  

  $('#UserName').bind('keypress', function(e) {

    var UserName= $("#UserName").val();

    
    var key = e.keyCode;

    if (key === 32&&UserName=="")  {
        e.preventDefault();
      return false;
    }


});



('#Password').bind('keypress', function(e) {

  var Password= $("#Password").val();

  
  var key = e.keyCode;

  if (key === 32&&Password=="")  {
      e.preventDefault();
    return false;
  }


});



    $('#company_name').bind('keypress', function(e) {

        var company_name= $("#company_name").val();
    
        
        var key = e.keyCode;
    
        if (key === 32&&company_name=="")  {
            e.preventDefault();
          return false;
        }

    
    });

    $('#email').bind('keypress', function(e) {

        var email= $("#email").val();
    
        
        var key = e.keyCode;
    
        if (key === 32&&email=="")  {
            e.preventDefault();
          return false;
        }
        
    
    });
    
    $('#city').bind('keypress', function(e) {
    
      var city= $("#city").val();
    
      
      var key = e.keyCode;
    
      if (key === 32&&city=="")  {
          e.preventDefault();
        return false;
      }
    
    });


      $('#phone_number').bind('keypress', function(e) {
    
        var phone_number= $("#phone_number").val();
      
      
        var key = e.keyCode;
      
        if (key === 32&&phone_number=="")  {
            e.preventDefault();
          return false;
        }
      
        if (key < 48 || key > 57 ) {
          e.preventDefault(); 
           }  
      
           
      
      });


    
    $('#vat_number').bind('keypress', function(e) {
    
      var vat_number= $("#vat_number").val();
    
    
      var key = e.keyCode;
    
      if (key === 32&&vat_number=="")  {
          e.preventDefault();
        return false;
      }
    
      if (key < 48 || key > 57 ) {
        e.preventDefault(); 
         }  
    
         
    
    });

    $('#tax').bind('keypress', function(e) {
    
        var tax= $("#tax").val();
      
      
        var key = e.keyCode;
      
        if (key === 32&&tax=="")  {
            e.preventDefault();
          return false;
        }
      
        if (key < 48 || key > 57 ) {
          e.preventDefault(); 
          return false;
           }  
            
      
      }); 


      $('#subprice').bind('keypress', function(e) {
    
        var subprice= $("#subprice").val();
      
      
        var key = e.keyCode;
      
        if (key === 32&&subprice=="")  {
            e.preventDefault();
          return false;
        }
      
        if (key < 48 || key > 57 ) {
          e.preventDefault(); 
          return false;
           }  
            
      
      }); 
      
} );



  $('#editsetting').on('click', function(event){

     var formData = new FormData();
     event.preventDefault();
    
     var company_name=$("#company_name").val();

    var email=$("#email").val();

     var phone_number=$("#phone_number").val();

     var city=$("#city").val();
     var vat_number=$("#vat_number").val();
     var tax=$("#tax").val();

     var subprice=$("#subprice").val();

    var Page="generalsetting";

    //saudia arabia regular expression


    var regex = new RegExp(/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/);


    var regex1 = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; 


    if(company_name=="")
    {

    $('#company_name').focus();

        return false;
    }

    if(email=="")
    {

    $('#email').focus();

        return false;
    }


     if(!regex1.test(email)){  
      toastr.error("برجاء ادخال رقم بريد الكترونى الصحيح");  
      $("#email").focus();
      
      return false;
       
      }




else if(phone_number=="")

{
    $('#phone_number').focus();

    return false;


}

else if(!regex.test(phone_number)){  
    toastr.error("برجاء ادخال رقم الجوال الصحيح");  
    $("#phone_number").focus();
    
    return false;
     
    }

else if(city=="")

{
    $('#city').focus();

    return false;

}


else if(vat_number=="")

{
    $('#vat_number').focus();

    return false;

}


else if(subprice=="")

{
    $('#subprice').focus();

    return false;

}


else if(tax=="")

{
    $('#tax').focus();

    return false;

}


formData.append("company_name", company_name);

 formData.append("phone_number", phone_number);

 formData.append("city", city); 

 formData.append("email", email); 

 formData.append("vat_number", vat_number); 

 formData.append("tax", tax); 
           
 formData.append("subprice", subprice); 

 formData.append("Page", Page);    
           
 
    $.ajax({
      url:"../service/updatefunction.php",
      method:"POST",
       data: formData,
      processData: false,
      contentType: false,
      success:function(data){ 
      
        toastr.success(" تم تخديث بياناتك بنجاح");
        $(".editsetting").modal("hide");

     
   
            }
         
       
       
    
    });
    });



    $('#editusersetting').on('click', function(event){

     

      var formData = new FormData();
      event.preventDefault();
     
      var UserName=$("#UserName").val();
 
     var Password=$("#Password").val();
 
     
 
     var Page="usersetting";
 
     //saudia arabia regular expression
 

 
     if(UserName=="")
     {
 
     $('#UserName').focus();
 
         return false;
     }
 
     if(Password=="")
     {
 
     $('#Password').focus();
 
         return false;
     }
 
 
 
 
 formData.append("UserName", UserName);
 
  formData.append("Password", Password);
 
 
            
 
 
  formData.append("Page", Page);    
            
  
     $.ajax({
       url:"../service/updatefunction.php",
       method:"POST",
        data: formData,
       processData: false,
       contentType: false,
       success:function(data){ 
       
         toastr.success(" تم تخديث بياناتك بنجاح");
         $(".UserSetting").modal("hide");
 
      
    
             }
          
        
        
     
     });
     });

    