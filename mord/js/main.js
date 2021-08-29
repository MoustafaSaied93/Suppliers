












$(function(){

   
        
    

	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex === 1 ) {

                var formData = new FormData();

                var UserName=$("#UserName").val();
               var Email=$("#Email").val();

            var password=$("#passwords").val();

             var entity="mail";



         var regex1 = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;


        if(UserName=="")
       {
     toastr.error("ادخل اسم المستخدم");
     return false;
         }

else if(Email=="")
{

    toastr.error("ادخل البريد الالكترونى");
 return false;
}

else if(!regex1.test(Email)){
toastr.error("ادخل بريد الكترونى صحيح");
$("#Email").focus();

return false;

}

else if(password=="")
{
    toastr.error(" ادخل كلمة المرور");
 return false;
}


else if(password.length <8)
{
 
 toastr.error(" كلمة المرور يجب ان تكون اكبر من 8 حروف");
 return false;
}
formData.append("entity", entity);
formData.append("Email", Email);

$.ajax({
    url:"sharefunction/checkinfo.php",
    method:"POST",
    data: formData,
    processData: false,
    contentType: false,
    async: false,
    success:function(data){
    
    if(data==200)
    {
    toastr.error("هذا الايميل مستخدم من قبل");
    $("#Email").focus();
    

     window.var1=false;
    }
    
    
    else if(data==201)
    {
        window.var1=true;
    
     $('.wizard > .steps ul').addClass('step-2');
    
    }
    
    
    }
    });
    if(window.var1==true)

    {
        return true;
    }
    else
    {
        return false;
    }



 //$('.wizard > .steps ul').addClass('step-2');
 } 
            
            
            
            else {
                $('.wizard > .steps ul').removeClass('step-2');
            }

            if ( newIndex === 2 ) {
                var Country=$("input[name='country']:checked").val();

                

                $('.wizard > .steps ul').addClass('step-3');
            }
             else {
                $('.wizard > .steps ul').removeClass('step-3');
            }

            if ( newIndex === 3 ) {

                var CompanyName= $("#CompanyName").val();

                var City=$("#City").val();
                var Address=$("#Address").val();

               var Mobile=$("#Mobile").val();

               var Area=$("input[name='area']:checked").val();

              


               if(CompanyName=="")
             {
                toastr.error("ادخل اسم الشركة  ");
                 return false;
             }

           else if(Mobile=="")
            {

            toastr.error("ادخل رقم الهاتف  ");
             return false;
             }



       else if(City=="")
         {
            toastr.error(" ادخل المدينة ");
           return false;
         }

        else if(Address=="")
        {

            toastr.error("ادخل العنوان ");
          return false;
         }
             $('.wizard > .steps ul').addClass('step-4');
            }
             else 
             {
                $('.wizard > .steps ul').removeClass('step-4');
            }

            if( newIndex === 4)

            {
                $('.wizard > .steps ul').addClass('step-5');


            }

            else
            {
                $('.wizard > .steps ul').removeClass('step-5');



            }


            if( newIndex === 5)

            {
                
                $('.wizard > .steps ul').addClass('step-6');


            }

            else
            {
                $('.wizard > .steps ul').removeClass('step-6');



            }

           



            return true; 
        },
        labels: {
            finish: "انهاء",
            next: "التالى",
            previous: "رجوع"
        }
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Date Picker
    var dp1 = $('#dp1').datepicker().data('datepicker');
    dp1.selectDate(new Date());
})


  



