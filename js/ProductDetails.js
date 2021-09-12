$(document).ready(function () {


    var img =$("#imgshow").val();

    var img2 =$("#imgshow2").val();

    var img3 =$("#imgshow3").val();

    


$('.owl-dot:first-child span').css('background-image','url(images/products/'+img+')');
if(img2!="")
{
 $('.owl-dot:nth-child(2) span').css('background-image','url(images/products/'+img2+')');


}
if(img2=="")

{
    $('.owl-dot:nth-child(2) span').css('background-image','url(images/products/'+img+')');

}

if(img3!="")
{
 $('.owl-dot:nth-child(3) span').css('background-image','url(images/products/'+img3+')');

}
if(img3=="")
{

    $('.owl-dot:nth-child(3) span').css('background-image','url(images/products/'+img+')');

}






    

	
    function loadDoc4() {
      
    
        setTimeout(function(){
    
            var productid =$("#p-id").val();
          
            $.ajax({
            url:"sharefunction/ProductReview.php",
            method:"POST",
            cache:false,
            data:{productid:productid},
            success:function(data){
              
            
               $("#reviews").html(data);
            
             
            
               }
            
            });
    
      },1000);
    
    
    }
    loadDoc4();

    });


	