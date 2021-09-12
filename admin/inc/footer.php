

</div>
</div>
<footer class="main-footer">© Wafi 2020</footer>



<div class="modal fade" id="DeleteMessageConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h6>هل انت متاكد من عملية الحذف</h6>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirMessagemDelete()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>

            <!-- Footer end -->

        </div>
        <!-- Container fluid end -->

        <!-- *************
            ************ Required JavaScript Files *************
        ************* -->
        <!-- Required jQuery first, then Bootstrap Bundle JS -->

       
        <script src="js\jquery.min.js"></script>

        <script src="js\bootstrap.bundle.min.js"></script>
        <script src="js\moment.js"></script>


        <!-- *************
            ************ Vendor Js Files *************
        ************* -->
     
        <!-- Main Js Required -->
        <script src="js\main.js"></script>
        <script src="js\toastr.min.js"></script>
       
        <script src="vendor\datatables\dataTables.min.js"></script>
         <script src="vendor\datatables\dataTables.bootstrap.min.js"></script>
         <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        

        <script src=".\js\SliderImage.js"></script>
        <script src=".\js\Product.js"></script>

        <script src=".\js\AddProduct.js"></script>
        <script src=".\js\VendorRequest.js"></script>

        <script src=".\js\RefusedRequest.js"></script>

        <script src=".\js\AcceptedRequest.js"></script>

        <script src=".\js\ClientMessage.js"></script>
        <script src=".\js\UserExplention.js"></script>

        <script src=".\js\SystemMessage.js"></script>

        <script src=".\js\Accounts.js"></script>

        <script src=".\js\ContactUs.js"></script>

        <script src=".\js\AccountSetting.js"></script>

        <!-- Data Tables -->
        <script src="vendor\datatables\dataTables.min.js"></script>
        <script src="vendor\datatables\dataTables.bootstrap.min.js"></script>

        <!-- Custom Data tables -->
        <script src="vendor\datatables\custom\custom-datatables.js"></script>
        <script src="vendor\datatables\custom\fixedHeader.js"></script>


        	<!-- Datepickers -->
		<script src="vendor\datepicker\js\picker.js"></script>
		<script src="vendor\datepicker\js\picker.date.js"></script>
		<script src="vendor\datepicker\js\custom-picker.js"></script>

        <!-- Download / CSV / Copy / Print -->
        <script src="vendor\datatables\buttons.min.js"></script>
        <script src="vendor\datatables\jszip.min.js"></script>
        <script src="vendor\datatables\pdfmake.min.js"></script>
        <script src="vendor\datatables\vfs_fonts.js"></script>
        <script src="vendor\datatables\html5.min.js"></script>
        <script src="vendor\datatables\buttons.print.min.js"></script>

    </body>
</html>

<script>

$(document).ready(function() {

$('#bootstrap-data-table').DataTable();



});








function DeleteMessages(id){


window.var1=id;



}

var ConfirmDelete = function () {
    var ID = window.var1;
    var page="SystemMessage";
    
var $button = $(this);
$.ajax({
type: "POST",
url: "../DeleteFunction.php",
data:{ID:ID,page:page},
success: function (result) {                                    
toastr.error("تم الحذف بنجاح");
$("#DeleteConfirmation").modal("hide");
window.setTimeout(function () { location.reload() }, 3000)
        }
    })
}








