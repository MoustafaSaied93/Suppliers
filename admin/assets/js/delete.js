
$(document).ready(function(){

    var cardNum = document.getElementById('VisaCard');
    cardNum.onkeyup = function (e) {
    if (this.value == this.lastValue) return;
    var caretPosition = this.selectionStart;
    var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
    var parts = [];
    
    for (var i = 0, len = sanitizedValue.length; i < len; i +=4) { parts.push(sanitizedValue.substring(i, i + 4)); } for (var i=caretPosition - 1; i>= 0; i--) {
        var c = this.value[i];
        if (c < '0' || c> '9') {
            caretPosition--;
            }
            }
            caretPosition += Math.floor(caretPosition / 4);
    
            this.value = this.lastValue = parts.join('-');
            this.selectionStart = this.selectionEnd = caretPosition;
            }
});



function MessageClientInfo(ID)

{
    var ID=ID;
    
var page="ClientMessage";

$.ajax({
url:"../fetchdata.php",
method:"POST",
data: {id:ID,page:page},
cache:false,
success:function(data){


$("#messageclient").html(data);
}
});


}

//delete function

function Deletefunction(id,page){

    
    
   
       window.var1=id;

       window.var2=page;

       
       
       
       }
       
       var ConfirmDeleting = function () {
           
           var ID = window.var1;
           var number = window.var2;

           if(number==1)
           {
            var page="subscriberequest";

           }

           else if(number==2)
           {

            var page="clientsaccounts";
           }

           else if(number==3)
           {

            var page="clientsmessages";
           }


           else if(number==4)
           {

            var page="orderpayment";
           }





           
           
       var $button = $(this);
       $.ajax({
       type: "POST",
       url: "../DeleteFunction.php",
       data:{ID:ID,page:page},
       success: function (result) {                                    
       toastr.error("تم الحذف بنجاح");
       $("#DeleteConfirmations").modal("hide");
       window.setTimeout(function () { location.reload() }, 3000)
               }
           })
       }


       // accept function



       function Acceptfunction(id){

        window.var2=id;
     
        
        }
        
        var ConfirmAccept = function () {
            
            var ID = window.var2;
            
            var Page="acceptrequest";
 
            
            
        var $button = $(this);
        $.ajax({
        type: "POST",
        url: "../updatefunction.php",
        data:{ID:ID,Page:Page},
        success: function (result) {                                    
        toastr.success("تم قبول الطلب بنجاح");
        $("#AcceptConfirmations").modal("hide");
        window.setTimeout(function () { location.reload() }, 3000)
                }
            })
        }



         // refuse function



       function Refusefunction(id){

        window.var3=id;
     
        
        }
        
        var ConfirmRefuse = function () {
            
            var ID = window.var3;
            
            var page="refuserequest";
 
            
            
        var $button = $(this);
        $.ajax({
        type: "POST",
        url: "../updatefunction.php",
        data:{ID:ID,Page:page},
        success: function (result) {                                    
        toastr.error("تم رفض الطلب بنجاح");
        $("#RefuseConfirmations").modal("hide");
        window.setTimeout(function () { location.reload() }, 3000)
                }
            })
        }







// update profile

       $('#UpdateProfile').on('click', function(event){


        var formData = new FormData();
        event.preventDefault();
    
        var UserID = $("#UserID").val();
        var UserName=$("#UserName").val();
         var password=$("#passwords").val();
        var Email=$("#Email").val();
    
        var page="AccountUser";
    
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    
    
    
        if(UserName=="")
        {
    
            $('#UserName').focus();
    
            return false;
        }
    
        else if(Email=="")
     {
         $("#Email").focus();
         return false;
     }
    
    else if(!regex.test(Email)){  
    toastr.error("برجاء ادخال بريد الكتروني صحيح");  
    $("#Email").focus();
    
    return false;
     
    }
    
    else if(password=="")
     {
         $("#passwords").focus();
         return false;
     }
    
     else if(password.length <8)
     {
    
          toastr.error("كلمة المرور يجب انت تحتوى على 8 حروف او اكثر");
          $("#passwords").focus();
        
         return false;
     }
     formData.append("UserID", UserID);
     formData.append("UserName", UserName);
    formData.append("password", password);
    formData.append("Email", Email);
    
    formData.append("Page", page);
    
    $.ajax({
      url:"../updatefunction.php",
      method:"POST",
       data: formData,
      processData: false,
      contentType: false,
      success:function(data){ 
      if(data==202) 
      {
        toastr.error("هذا الايميل موجود من قبل");
        $("#Email").focus();
         return false;      
      }
    
      
      else  
      {
        toastr.success(" تم تخديث بياناتك بنجاح");
        $("#UserSetting").modal("hide");
    window.setTimeout(function () { location.reload() }, 3000)
            }
         
      }  
    });
    });

    //edit order

    function Editfunction(ID)

    {
       

        var ID= ID;


        window.var4=ID;

        var page="pendingrequest";

        $.ajax({
            url:"../fetchdata.php",
            method:"POST",
            data: {id:ID,page:page},
            dataType: "json", 
            cache:false,
            success:function(data){

                var SelectedDrop= data.Service;

                if(SelectedDrop=="خدمة ماسى")
                {

                    $('#Service').empty();
                   

                 $('#Service').append('<option value="خدمة ماسى" selected="selected">خدمة ماسى</option>');

                $('#Service').append('<option value="خدمة ذهبى" >خدمة ذهبى</option>');
                $('#Service').append('<option value="خدمة فضى" >خدمة فضى</option>');

                }


               else if(SelectedDrop=="خدمة ذهبى")
                {

                    $('#Service').empty();

                 $('#Service').append('<option value="خدمة ذهبى" selected="selected">خدمة ذهبى</option>');

                
                $('#Service').append('<option value="خدمة فضى" >خدمة فضى</option>');

                $('#Service').append('<option value="خدمة ماسى" >خدمة ماسى</option>');


                }


                else if(SelectedDrop=="خدمة فضى")
                {
                    $('#Service').empty();

                 $('#Service').append('<option value="خدمة فضى" selected="selected">خدمة فضى</option>');

                
                 $('#Service').append('<option value="خدمة ذهبى" >خدمة ذهبى</option>');

                $('#Service').append('<option value="خدمة ماسى" >خدمة ماسى</option>');

                }


              
            // $('#Service').val(data.Service);

              $("#Material").val(data.Material);
              $("#EducationName").val(data.EducationName);
              $("#UserMobile").val(data.Mobile);
               $("#UserEmail").val(data.Email);    
    }

});

    }



    $('#EditRecord').on('click', function(event){



        var formData = new FormData();
        event.preventDefault();
    
        var ClientID  = window.var4;

        var Service=$("#Service").val();

         var UserMobile=$("#UserMobile").val();

        var UserEmail=$("#UserEmail").val();

        var Material=$("#Material").val();

        var EducationName=$("#EducationName").val();
   
        var page="pendingrequest";
    
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    
      

        


        if(EducationName=="")
        {
    
        $('#EducationName').focus();
    
            return false;
        }

        
       else if(Material=="")
        {
    
        $('#Material').focus();
    
            return false;
        }

        else if(UserMobile=="")
        {
            $("#UserMobile").focus();
            return false;
        }
       
        else if(UserMobile.length <10)
        {
       
             toastr.error("رقم الجوال  اقل من 10 ارقام");
             $("#UserMobile").focus();
           
            return false;
        }
    
        else if(UserEmail=="")
     {
         $("#UserEmail").focus();
         return false;
     }
    
    else if(!regex.test(UserEmail)){  
    toastr.error("برجاء ادخال بريد الكتروني صحيح");  
    $("#UserEmail").focus();
    
    return false;
     
    }
    
   
     formData.append("ClientID", ClientID);
     formData.append("Service", Service);
    formData.append("UserMobile", UserMobile);
    formData.append("UserEmail", UserEmail);
    formData.append("EducationName", EducationName);
    formData.append("Material", Material);
    formData.append("Page", page);
    
    $.ajax({
      url:"../updatefunction.php",
      method:"POST",
       data: formData,
      processData: false,
      contentType: false,
      success:function(data){ 
    toastr.success("تم تحديث طلبك بنجاح");

    $("#EditConfirmations").modal("hide");
    window.setTimeout(function () { location.reload() }, 3000)
        

      }
    });
    });


    function Payfunction(ID)

    {
        var reqid=ID;


        window.req=ID;

    }


    $('#paynow').on('click', function(event){


        var formData = new FormData();
        event.preventDefault();
    
        var ClientID  =    window.req;
        

        var UserID=$("#UserID").val();

         var Services=$("#Services").val();

        var subscribePrice=$("#subscribePrice").val();


        var PaymentUserName=$("#PaymentUserName").val();

        var VisaCard=$("#VisaCard").val();


        var CVVNumber=$("#CVVNumber").val();

        var  RegisterDate = new Date();


        var PaymentDate=(RegisterDate.getFullYear()+'/'+(RegisterDate.getMonth()+1)+'/'+RegisterDate.getDate());
        
        
        var page="paymentrequest";

        validate(PaymentUserName);

        if(PaymentUserName=="" )
        {
    
        $('#PaymentUserName').focus();
    
            return false;
        }

        
       else if(VisaCard=="")
        {
    
        $('#VisaCard').focus();
    
            return false;
        }

        else if(VisaCard.length<19)

        {

            $('#VisaCard').focus();
    
            return false;



        }

        


        else if(CVVNumber=="")
        {
    
        $('#CVVNumber').focus();
    
            return false;
        }
           
       
     formData.append("ClientID", ClientID);

     formData.append("UserID", UserID);

     formData.append("Services", Services);
    formData.append("subscribePrice", subscribePrice);
    formData.append("PaymentUserName", PaymentUserName);
    formData.append("VisaCard", VisaCard);
    formData.append("CVVNumber", CVVNumber);

    formData.append("PaymentDate", PaymentDate);
    formData.append("page", page);
    
    $.ajax({
      url:"../sharefunction.php",
      method:"POST",
       data: formData,
      processData: false,
      contentType: false,
      success:function(data){ 
    toastr.success("عملية الدفع تمت بنجاح");

    $("#PaymentGate").modal("hide");
    window.setTimeout(function () { location.reload() }, 3000)
        

      }
    });
    });


    function validate(input){
        if(/^\s/.test(input.value))
          input.value = '';
      }




      function infofunction(ID)

      {
         
  
          var ID= ID;
  
  
          window.var6=ID;
  
          var page="inforequest";
  
          $.ajax({
              url:"../fetchdata.php",
              method:"POST",
              data: {id:ID,page:page},
              dataType: "json", 
              cache:false,
              success:function(data){
  
                
                $('#Servicess').val(data.Services);
  
                $("#subscribePrices").val(data.subscribePrice);
                $("#PaymentDates").val(data.PaymentDate);

                $("#ClientNames").val(data.ClientName);

                 $("#EducationNames").val(data.EducationName);  

                 $("#Materials").val(data.Material);

               


                 $("#Emails").val(data.Email);
                 $("#Mobiles").val(data.Mobile);  


                 
                 
      }
  
  });
  
      }

