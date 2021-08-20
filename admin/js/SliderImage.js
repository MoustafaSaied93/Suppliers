
   $(document).ready(function () {
                

    $('#sliderimage1').click(function () {

        $('#fileUploaderControlsliderimage1').click();
    }); 


    $('#sliderimage2').click(function () {

        $('#fileUploaderControlsliderimage2').click();
    }); 
    
    $('#sliderimage3').click(function () {

        $('#fileUploaderControlsliderimage3').click();
    }); 
    
});

$("#fileUploaderControlsliderimage1").change(function () {

    var file = document.getElementById("fileUploaderControlsliderimage1").files[0];
    
    var readImg = new FileReader();
    readImg.readAsDataURL(file);
    readImg.onload = function (e) {
        $('#sliderimage1').attr('src', e.target.result).fadeIn();

    }
})


$("#fileUploaderControlsliderimage2").change(function () {

    var file = document.getElementById("fileUploaderControlsliderimage2").files[0];
    
    var readImg = new FileReader();
    readImg.readAsDataURL(file);
    readImg.onload = function (e) {
        $('#sliderimage2').attr('src', e.target.result).fadeIn();

    }
})


$("#fileUploaderControlsliderimage3").change(function () {

    var file = document.getElementById("fileUploaderControlsliderimage3").files[0];
    
    var readImg = new FileReader();
    readImg.readAsDataURL(file);
    readImg.onload = function (e) {
        $('#sliderimage3').attr('src', e.target.result).fadeIn();

    }
})



function Editsliderimages(ID){
    
var ID=ID;

var page="sliderimages";

$.ajax({
url:"../fetchdata.php",
method:"POST",
data: {id:ID,page:page},
dataType:"json",
success:function(data){
   


$("#Slider_ImageID").val(data.Slider_ImageID);
$("#Slider_Description").val(data.Slider_Description);
$("#sliderimage1").attr('src', '../'+ data.SliderImage1);
$("#sliderimage2").attr('src', '../'+ data.SliderImage2);

$("#sliderimage3").attr('src', '../'+ data.SliderImage3);

$("#SliderDescription2").val(data.SliderDescription2);
$("#SliderDescription3").val(data.SliderDescription3);
$("#WebsiteInfo").val(data.WebsiteInfo);
$("#SiteMobile").val(data.SiteMobile);

}
});

}

$('#UpdateSlider').click(function () {

   
var formData = new FormData();

var Slider_ImageID=$("#Slider_ImageID").val();
var Slider_Description=$("#Slider_Description").val();

var SliderDescription2=$("#SliderDescription2").val();

var SliderDescription3=$("#SliderDescription3").val();

var WebsiteInfo=$("#WebsiteInfo").val();

var SiteMobile=$("#SiteMobile").val();



var oper="noimage";
var oper1="image";
var oper2="image1";
var oper3="image2";

var oper4="image3";

var oper5="image1-image2";

var oper6="image1-image3";

var oper7="image2-image3";


var Page="sliderimages";

var img=document.getElementById("fileUploaderControlsliderimage1").files[0];
var img2=document.getElementById("fileUploaderControlsliderimage2").files[0];
var img3=document.getElementById("fileUploaderControlsliderimage3").files[0];

 if(img===undefined && img2===undefined && img3===undefined)
{
formData.append("Slider_ImageID", Slider_ImageID);  
formData.append("Slider_Description", Slider_Description);
formData.append("SliderDescription2", SliderDescription2);
formData.append("SliderDescription3", SliderDescription3);
formData.append("WebsiteInfo", WebsiteInfo);
formData.append("SiteMobile", SiteMobile);

formData.append("Page", Page);
formData.append("oper", oper);




}


else if( img2===undefined && img3===undefined)
{
formData.append("Slider_ImageID", Slider_ImageID);  
formData.append("Slider_Description", Slider_Description);
formData.append("SliderDescription2", SliderDescription2);
formData.append("SliderDescription3", SliderDescription3);
formData.append("WebsiteInfo", WebsiteInfo);
formData.append("SiteMobile", SiteMobile);

formData.append("img", img);

formData.append("Page", Page);
formData.append("oper", oper2);




}


else if( img===undefined && img3===undefined)
{
formData.append("Slider_ImageID", Slider_ImageID);  
formData.append("Slider_Description", Slider_Description);
formData.append("SliderDescription2", SliderDescription2);
formData.append("SliderDescription3", SliderDescription3);
formData.append("WebsiteInfo", WebsiteInfo);
formData.append("SiteMobile", SiteMobile);

formData.append("img2", img2);

formData.append("Page", Page);
formData.append("oper", oper3);




}



else if( img===undefined && img2===undefined)
{
formData.append("Slider_ImageID", Slider_ImageID);  
formData.append("Slider_Description", Slider_Description);
formData.append("SliderDescription2", SliderDescription2);
formData.append("SliderDescription3", SliderDescription3);
formData.append("WebsiteInfo", WebsiteInfo);
formData.append("SiteMobile", SiteMobile);

formData.append("img3", img3);

formData.append("Page", Page);
formData.append("oper", oper4);




}



else if( img3===undefined)
{
formData.append("Slider_ImageID", Slider_ImageID);  
formData.append("Slider_Description", Slider_Description);
formData.append("SliderDescription2", SliderDescription2);
formData.append("SliderDescription3", SliderDescription3);
formData.append("WebsiteInfo", WebsiteInfo);
formData.append("SiteMobile", SiteMobile);

formData.append("img", img);
formData.append("img2", img2);

formData.append("Page", Page);
formData.append("oper",  oper5);


}



else if( img2===undefined)
{
formData.append("Slider_ImageID", Slider_ImageID);  
formData.append("Slider_Description", Slider_Description);
formData.append("SliderDescription2", SliderDescription2);
formData.append("SliderDescription3", SliderDescription3);
formData.append("WebsiteInfo", WebsiteInfo);
formData.append("SiteMobile", SiteMobile);

formData.append("img", img);
formData.append("img3", img3);

formData.append("Page", Page);
formData.append("oper",  oper6);


}



else if( img===undefined)
{
formData.append("Slider_ImageID", Slider_ImageID);  
formData.append("Slider_Description", Slider_Description);
formData.append("SliderDescription2", SliderDescription2);
formData.append("SliderDescription3", SliderDescription3);
formData.append("WebsiteInfo", WebsiteInfo);
formData.append("SiteMobile", SiteMobile);

formData.append("img2", img2);
formData.append("img3", img3);

formData.append("Page", Page);
formData.append("oper",  oper7);


}








else
{
formData.append("Slider_ImageID", Slider_ImageID);  
formData.append("Slider_Description", Slider_Description);
formData.append("SliderDescription2", SliderDescription2);
formData.append("SliderDescription3", SliderDescription3);
formData.append("WebsiteInfo", WebsiteInfo);
formData.append("SiteMobile", SiteMobile);

formData.append("Page", Page);
formData.append("img", img);
formData.append("img2", img2);
formData.append("img3", img3);

formData.append("oper", oper1);



}

var xhr = new XMLHttpRequest();

xhr.open("POST", "../updatefunction.php", true);
xhr.addEventListener("load", function (evt) { UploadComplete(evt); }, false);
xhr.addEventListener("error", function (evt) { UploadFailed(evt); }, false);
xhr.send(formData);

function UploadComplete(evt) {
        

toastr.success("تم التحديث بنجاح");
$("#Editsliderimages").modal("hide");
window.setTimeout(function () { location.reload() }, 3000)

}

function UploadFailed(evt) {
alert("There was an error attempting to upload the file.");

}

});













