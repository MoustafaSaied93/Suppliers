function EditContactUS(ID){
    var ID=ID;
    
    var page="ContactUS";
    
    $.ajax({
    url:"../fetchdata.php",
    method:"POST",
    data: {id:ID,page:page},
    dataType:"json",
    success:function(data){
    $("#ContactInfo").val(data.ContactInfo);
    $("#OfficeLocation").val(data.OfficeLocation);
    $("#OfficeMobile").val(data.OfficeMobile);
    $("#OfficeEmail").val(data.OfficeEmail);
    $("#OfficeAppointment").val(data.OfficeAppointment);
    $("#WorkHours").val(data.WorkHours);   
    }
    });
    
    }
    
    $('#UpdateContactUs').click(function () {
    
       
    var formData = new FormData();
    
    var ContactUsID=1;
    
    var ContactInfo=$("#ContactInfo").val();
    var OfficeLocation=$("#OfficeLocation").val();
    var OfficeMobile=$("#OfficeMobile").val();
    var OfficeEmail=$("#OfficeEmail").val();
    var OfficeAppointment=$("#OfficeAppointment").val();
    var WorkHours=$("#WorkHours").val();
    
    
    
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    
    
    if(!regex.test(OfficeEmail)){  
    toastr.error("برجاء ادخال بريد الكتروني صحيح");  
    $("#OfficeEmail").focus();
    
    return false;
     
    }
    
    
    
    
    var Page="ContactUS";
    
    
    formData.append("ContactUsID", ContactUsID);  
    formData.append("ContactInfo", ContactInfo);
    formData.append("OfficeLocation", OfficeLocation);
    formData.append("OfficeMobile", OfficeMobile);
    formData.append("OfficeEmail", OfficeEmail);
    formData.append("OfficeAppointment", OfficeAppointment);
    formData.append("WorkHours", WorkHours);
    
        formData.append("Page", Page);
    
    
    var xhr = new XMLHttpRequest();
    
    xhr.open("POST", "../updatefunction.php", true);
    xhr.addEventListener("load", function (evt) { UploadComplete(evt); }, false);
    xhr.addEventListener("error", function (evt) { UploadFailed(evt); }, false);
    xhr.send(formData);
    
    function UploadComplete(evt) {
            
    
    toastr.success("تم التحديث بنجاح");
    $("#EditContactUS").modal("hide");
    window.setTimeout(function () { location.reload() }, 3000)
    
    }
    
    function UploadFailed(evt) {
    alert("There was an error attempting to upload the file.");
    
    }
    
    });
    