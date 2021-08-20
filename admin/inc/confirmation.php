<div class="modal fade" id="NotActiveConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3> تعطيل الحساب</h3>
            </div>
            <div class="modal-body"  style="padding-left:220px">
                <h4> هل انت متاكد من تعطيل الحساب</h4>
            </div>
            <div class="modal-footer" style="padding-left:220px">
                <a href="#" class="btn btn-danger" onclick="ConfirmNotActive()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="ActiveConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3> تفعيل الحساب</h3>
            </div>
            <div class="modal-body"  style="padding-left:220px">
                <h4> هل تريد تفعيل الحساب</h4>
            </div>
            <div class="modal-footer" style="padding-left:20px">
                <a href="#" class="btn btn-danger" onclick="ConfirmActive()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>



<!-- delete modal -->     

<div class="modal fade" id="DeleteConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h6>هل انت متاكد من عملية الحذف</h6>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmDelete()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="DeleteConfirmationsss">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h6>هل انت متاكد من عملية الحذف</h6>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmDeletess()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>


<!-- delete modal -->     

<div class="modal fade" id="DeleteConfirmations">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h6>هل انت متاكد من عملية الحذف</h6>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmDeleting()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>


<!-- Accept modal -->     

<div class="modal fade" id="AcceptConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> طلب موافقة</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h6> هل انت متاكد من عملية الموافقة</h6>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmAccept()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>




<!-- Refused modal --> 
<div class="modal fade" id="RefusedConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3>رفض الطلب</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
            <label style="padding-left:220px"><h6>الرسالة</h6></label>                                                    
         <textarea class = "form-control" name="Messagess" id="Messagess" required="" placeholder="ادخل محتوى الرسالة"></textarea>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmRefuse()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="NotficationConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3>ارسال اشعار</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">


            <div class="form-group">
          <label><h6>محتوى الرسالة</h6></label>                                                    
         <textarea class = "form-control" name="Message" id="Message" required="" placeholder="ادخل محتوى الرسالة"></textarea>
                                                               
          </div>
               
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-success" id="Sendnotfication" >تاكيد</a>
                <a href="#" class="btn btn-danger" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>





<!-- System Message modal --> 
<div class="modal fade" id="MessageConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3>محتوى الرسالة</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">


            <div class="form-group">
          <label><h5 id="message">محتوى الرسالة</<h5></label>   
    
               
            </div>
            <div class="modal-footer" style="padding-left:220px">
                <a href="#" class="btn btn-danger" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>
































