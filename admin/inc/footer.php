    
    <div class="modal fade" id="UserSetting">
                   <div class="modal-dialog">

                   <div class="modal-content">
          
                   <div class="modal-header">

                <h3>اعدادات الحساب </h3>
                  </div>
                <div class="modal-body" style="padding-left:220px">

                <input type="hidden" id="UserID" value=<?php echo $UserID  ?>  >


                 <div class="form-group">
                 <label><h6>اسم المستخدم</h6></label>                                                    
               <input type="text"  class = "form-control" value=<?php echo $userName  ?>  id="UserName"  placeholder="ادخل اسم المستخدم">
                                                               
                  </div>
                 
                 

                 <div class="form-group">
                 <label><h6>البريد الالكتروني</h6></label>                                                    
         <input type="email" class = "form-control"  value=<?php echo $Email  ?>  id="Email"  placeholder="ادخل البريد الالكتروني">
                                                               
          </div>
          

          <div class="form-group">
          <label><h6>كلمة المرور</h6></label>                                                    
         <input type="password" class = "form-control" value=<?php echo $password  ?>   id="passwords"  placeholder="ادخل كلمة المرور" >
      
          </div>

               
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-success" id="UpdateProfile">تخديث</a>
                <a href="#" class="btn btn-danger" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    
    
    
    
    
    
    
    
    
    
    <!-- Footer Start -->



                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/toastr.min.js"></script>

        <script src="assets/js/delete.js"></script>
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Dashboard init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

         <!-- Datatable plugin js -->
         <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>

        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>

        <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>

        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/vfs_fonts.js"></script>

        <script src="assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables/buttons.print.min.js"></script>

        <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables/dataTables.select.min.js"></script>

        <!-- Datatables init -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>