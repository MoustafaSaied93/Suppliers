
$(document).ready(function() {

    //img uplloading

    $('#imagePreviewn').click(function () {

        $('#fileUploaderControln').click();
    });


    $('#imagePreviewn1').click(function () {

        $('#fileUploaderControln1').click();
    });

    $('#imagePreviewn2').click(function () {

        $('#fileUploaderControln2').click();
    });


    $('#imagePreviewn3').click(function () {

        $('#fileUploaderControln3').click();
    });

    $('#imagePreviewn4').click(function () {

        $('#fileUploaderControln4').click();
    });

    $('#imagePreviewn5').click(function () {

        $('#fileUploaderControln5').click();
    });

    $('#imagePreviewn6').click(function () {

        $('#fileUploaderControln6').click();
    });

    $('#imagePreviewn7').click(function () {

        $('#fileUploaderControln7').click();
    });


    $("#fileUploaderControln").change(function () {

        var file = document.getElementById("fileUploaderControln").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewn').attr('src', e.target.result).fadeIn();
    
        }
      
    })

    $("#fileUploaderControln1").change(function () {

        var file = document.getElementById("fileUploaderControln1").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewn1').attr('src', e.target.result).fadeIn();
    
        }
      
    })


    $("#fileUploaderControln2").change(function () {

        var file = document.getElementById("fileUploaderControln2").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewn2').attr('src', e.target.result).fadeIn();
    
        }
      
    })



    $("#fileUploaderControln3").change(function () {

        var file = document.getElementById("fileUploaderControln3").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewn3').attr('src', e.target.result).fadeIn();
    
        }
      
    })


    $("#fileUploaderControln4").change(function () {

        var file = document.getElementById("fileUploaderControln4").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewn4').attr('src', e.target.result).fadeIn();
    
        }
      
    })

    $("#fileUploaderControln5").change(function () {

        var file = document.getElementById("fileUploaderControln5").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewn5').attr('src', e.target.result).fadeIn();
    
        }
      
    })

    $("#fileUploaderControln6").change(function () {

        var file = document.getElementById("fileUploaderControln6").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewn6').attr('src', e.target.result).fadeIn();
    
        }
      
    })

    $("#fileUploaderControln7").change(function () {

        var file = document.getElementById("fileUploaderControln7").files[0];
        
        var readImg = new FileReader();
        readImg.readAsDataURL(file);
        readImg.onload = function (e) {
            $('#imagePreviewn7').attr('src', e.target.result).fadeIn();
    
        }
      
    })


    var Tille =  document.querySelector('#Tille');

    var New =  document.querySelector('#New');

    Tille.addEventListener("keypress",function(e){
     var key = e.keyCode;

     var Tille_name=$("#Tille").val();

    if(key === 32 && Tille_name==""){
   e.preventDefault();
    return false;
    }
    else if(Tille_name.length>100)
    {

       e.preventDefault();
    return false;


    }
     })

     New.addEventListener("keypress",function(e){
        var key = e.keyCode;
   
        var New_name=$("#New").val();
   
       if(key === 32 && New_name==""){
      e.preventDefault();
       return false;
       }
       else if(New_name.length>10000)
       {
   
          e.preventDefault();
       return false;
   
   
       }
        })


} );


function updatedata()
{

    $("#editnewbutton").hide();

    $("#Savenew").show();
    
    $("#orders_").html("اضافة الخبر");

    RefreshnewsTable();
}

// this code resbobsable for refresh table

function RefreshnewsTable() {
    $( "#datatable" ).load( "newsclub.php #datatable" );

    $("#PublishDate").val("");


     $("#Tille").val("");

     $("#New").val("");


     $("#imagePreviewn").attr('src', 'assets/images/NoImage.jpg');
     $("#imagePreviewn1").attr('src', 'assets/images/NoImage.jpg');
     $("#imagePreviewn2").attr('src', 'assets/images/NoImage.jpg');
     $("#imagePreviewn3").attr('src', 'assets/images/NoImage.jpg');
     $("#imagePreviewn4").attr('src', 'assets/images/NoImage.jpg');
     $("#imagePreviewn5").attr('src', 'assets/images/NoImage.jpg');
     $("#imagePreviewn6").attr('src', 'assets/images/NoImage.jpg');
     $("#imagePreviewn7").attr('src', 'assets/images/NoImage.jpg');

     document.getElementById("fileUploaderControln").value = null;
     document.getElementById("fileUploaderControln1").value = null;
     document.getElementById("fileUploaderControln2").value = null;
     document.getElementById("fileUploaderControln3").value = null;
     document.getElementById("fileUploaderControln4").value = null;
     document.getElementById("fileUploaderControln5").value = null;
     document.getElementById("fileUploaderControln6").value = null;
     document.getElementById("fileUploaderControln7").value = null;
}

$('#Savenew').on('click', function(event){


    var formData = new FormData();
    event.preventDefault();


    var Tille=$("#Tille").val();

     var PublishDate=$("#PublishDate").val();

     var New=$("#New").val();   
    var img=document.getElementById("fileUploaderControln").files[0];

    var img1=document.getElementById("fileUploaderControln1").files[0];
   
    var img2=document.getElementById("fileUploaderControln2").files[0];

    var img3=document.getElementById("fileUploaderControln3").files[0];
    var img4=document.getElementById("fileUploaderControln4").files[0];

    var img5=document.getElementById("fileUploaderControln5").files[0];

    var img6=document.getElementById("fileUploaderControln6").files[0];

    var img7=document.getElementById("fileUploaderControln7").files[0];

    var Page="news";


    if(Tille=="")
    {

    $('#Tille').focus();

        return false;
    }

    else if(PublishDate=="")

    {
        $('#PublishDate').focus();

      return false;
    }

    else if(New=="")

    {
        $('#New').focus();

        return false;
    }


    else if(img===undefined)

    {

    
 
    toastr.error("من فضلك اضف مرفقا");
    return false;

    }

    else if(img1===undefined)

    {

    
     img1=="";

    }

    else if(img2===undefined)

    {

    
     img2=="";

    }

    else if(img3===undefined)

    {

    
     img3=="";

    }

    else if(img4===undefined)

    {

    
     img4=="";

    }

    else if(img5===undefined)

    {

    
     img5=="";

    }

    else if(img6===undefined)

    {

    
     img6=="";

    }

    else if(img7===undefined)

    {

    
     img7=="";

    }

    var images=[img,img1,img2,img3,img4,img5,img6,img7];

   
       
    for(var i = 0; i < images.length; i++) {
        formData.append("img[]", images[i]);
    }


 formData.append("Tille", Tille);
formData.append("PublishDate", PublishDate);
formData.append("New", New);

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

    RefreshnewsTable();

    

        } 
});
});


function editnew(ID){

    $("#editnewbutton").show();

    $("#Savenew").hide();
    
    $("#orders_").html("تعديل الخبر");


     window.newid=ID;

    var page="news";

    $.ajax({
    url:"../service/fetchdata.php",
    method:"POST",
    data: {id:ID,page:page},
    dataType:"json",
    success:function(data){

    $("#Tille").val(data.Tille);
    $("#PublishDate").val(data.PublishDate);
    $("#New").val(data.New);

    $("#imagePreviewn").attr('src', 'assets/images/news/'+ data.image1);

    if(data.image2!="")
    {
    $("#imagePreviewn1").attr('src', 'assets/images/news/'+ data.image2);

    }

    if(data.image2=="")
    {
    $("#imagePreviewn1").attr('src', 'assets/images/NoImage.jpg');

    }

    if(data.image3!="")
    {
    $("#imagePreviewn2").attr('src', 'assets/images/news/'+ data.image3);

    }

    if(data.image3=="")
    {
    $("#imagePreviewn2").attr('src', 'assets/images/NoImage.jpg');

    }

    if(data.image4!="")
    {
    $("#imagePreviewn3").attr('src', 'assets/images/news/'+ data.image4);

    }

    if(data.image4=="")
    {
    $("#imagePreviewn3").attr('src', 'assets/images/NoImage.jpg');

    }

    if(data.image5!="")
    {
    $("#imagePreviewn4").attr('src', 'assets/images/news/'+ data.image5);

    }

    if(data.image5=="")
    {
    $("#imagePreviewn4").attr('src', 'assets/images/NoImage.jpg');

    }

    if(data.image6!="")
    {
    $("#imagePreviewn5").attr('src', 'assets/images/news/'+ data.image6);

    }

    if(data.image6=="")
    {
    $("#imagePreviewn5").attr('src', 'assets/images/NoImage.jpg');

    }

    if(data.image7!="")
    {
    $("#imagePreviewn6").attr('src', 'assets/images/news/'+ data.image7);

    }

    if(data.image7=="")
    {
    $("#imagePreviewn6").attr('src', 'assets/images/NoImage.jpg');

    }


    if(data.image8!="")
    {
    $("#imagePreviewn7").attr('src', 'assets/images/news/'+ data.image8);

    }

    if(data.image8=="")
    {
    $("#imagePreviewn7").attr('src', 'assets/images/NoImage.jpg');

    }


}
    });

}
  $('#editnew').on('click', function(event){
 
        var formData = new FormData();
        event.preventDefault();
    
        var news_club_ID  = window.newid;

        var Tille=$("#Tille").val();

        var PublishDate=$("#PublishDate").val();
   
        var New=$("#New").val();   
       var img=document.getElementById("fileUploaderControln").files[0];
   
       var img1=document.getElementById("fileUploaderControln1").files[0];
      
       var img2=document.getElementById("fileUploaderControln2").files[0];
   
       var img3=document.getElementById("fileUploaderControln3").files[0];
       var img4=document.getElementById("fileUploaderControln4").files[0];
   
       var img5=document.getElementById("fileUploaderControln5").files[0];
   
       var img6=document.getElementById("fileUploaderControln6").files[0];
   
       var img7=document.getElementById("fileUploaderControln7").files[0];

       if(Tille=="")
       {
   
       $('#Tille').focus();
   
     return false;
        
       }
   
       else if(PublishDate=="")
   
       {
           $('#PublishDate').focus();
   
           return false;
       }
   
       else if(New=="")
   
       {
           $('#New').focus();
   
           return false;
       }
   
   
       else if(img==undefined)
   
       {
   
         img="";
   
       }
   
        if(img1==undefined)
   
       {
   
       
        img1="";
   
       }
   
        if(img2==undefined)
   
       {
   
       
        img2="";
   
       }
   
       if(img3==undefined)
   
       {
   
       
        img3="";
   
       }
   
        if(img4==undefined)
   
       {
   
       
        img4="";
   
       }
   
        if(img5==undefined)
   
       {
   
       
        img5="";
   
       }
   
        if(img6==undefined)
   
       {
   
       
        img6="";
   
       }
   
        if(img7==undefined)
   
       { 
        img7="";
   
       } 
       
       var Page="news";
       formData.append("news_club_ID", news_club_ID);
      formData.append("Tille", Tille);
      formData.append("PublishDate", PublishDate);
      formData.append("New", New);
       formData.append("Page", Page);
       formData.append("img1", img);
       formData.append("img2", img1);
       formData.append("img3", img2);
       formData.append("img4", img3);
       formData.append("img5", img4);
       formData.append("img6", img5);
       formData.append("img7", img6);
       formData.append("img8", img7);
   
   $.ajax({
     url:"../service/updatenew.php",
     method:"POST",
      data: formData,
     processData: false,
     contentType: false,
     success:function(data){ 
    
       toastr.success("تمت عملية التحديث بنجاح");
       $(".bd-example-modal-lg").modal("hide");
   
       RefreshnewsTable();
   
       
           } 
   });


       

    });


    //delete function 


    function Deletenewsfunction(id){

     
        window.varnew=id;
     
        
        }
        var ConfirmnewDelete = function () {
            
            var ID = window.varnew;
                 
          var page="news";
          
        var $button = $(this);
        $.ajax({
        type: "POST",
        url: "../service/DeleteFunction.php",
        data:{ID:ID,page:page},
        success: function (result) {                                    
        toastr.error("تم الحذف بنجاح");
        $("#DeletenewsConfirmation").modal("hide");
 
        RefreshnewsTable();
       
                }
            })
        }



