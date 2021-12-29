<?php include("inc/header.php"); 



?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                        <h4 class="page-title">بيانات الاعضاء المشتركين</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <button id="" class="btn btn-success m-b-15" type="button" data-toggle="modal"
                data-target=".bd-example-modal-lg">
                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة مشترك جديد
            </button>

            <br> <br>


            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead class="thead_dark">
                    <tr>
                        <th class="th_text">  كود المشترك</th>
                        <th class="th_text">اسم المشترك</th>

                        <th class="th_text">رقم الجوال</th>

                        <th class="th_text">رقم الهوية</th>

                        <th class="th_text">العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                 $result=mysqli_query($conn,"SELECT * FROM members_subscribtions");
                 
                  while($row=mysqli_fetch_assoc($result))
                      {

                    ?>
                    <tr>
                        <td><?php echo $row['code']  ?></td>
                        <td><?php echo $row['name']  ?></td>

                        <td><?php echo $row['mobile_number']  ?></td>

                        <td><?php echo $row['identity_number']  ?></td>


                        <td>
                           

                            <button type="button" id="data-image-id" data-toggle="modal"
                                data-target=".bd-example-emodal-lg" onclick="editplayer(<?php echo $row['memberid'];?>)"
                                class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>

                            &nbsp; &nbsp;

                            <button type="button" id="data-image-id" data-toggle="modal"
                                data-target="#DeleteplayerConfirmation"
                                onclick="Deleteplayerfunction(<?php echo $row['memberid'];?>)" class="btn btn-danger">
                                <i class="fa fa-trash"></i> حذف</button>
                        </td>
                    </tr>

                    <?php
                

                      }

                ?>

                </tbody>
            </table>




        </div> <!-- end container-fluid -->

    </div> <!-- end content -->


    <!-- add popup -->

    <div class="body">
        <!-- larg modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="orders_"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4" id="orders_">اضافة مشترك جديد</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form>

                            <div class="form-group">
                                <label for="o1">اسم المشترك</label>
                                <input type="text" class="form-control" id="name" placeholder="اسم المشترك"
                                    maxlength=50>
                            </div>


                            <div class="form-group">
                                <label for="o1">رقم الهاتف</label>
                                <input type="text" class="form-control" id="mobile_number" placeholder="رقم الهاتف"
                                    maxlength=20>
                            </div>

                            <div class="form-group">
                                <label for="o1">رقم الهوية</label>
                                <input type="text" class="form-control" id="identity_number" placeholder="رقم الهوية"
                                    maxlength=20>
                            </div>


                            <button type="submit" class="btn btn-success mb-2" id="Saveplayer"><i
                                    class="fa fa-plus-square"></i> <span>أضافة</span></button>

                        </form>

                    </div>
                </div>
            </div>
        </div>



        <!--  edit popup -->


        <div class="body">
            <!-- larg modal -->
            <div class="modal fade bd-example-emodal-lg" tabindex="-1" role="dialog" aria-labelledby="orders_"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h4" id="orders_">تعديل بيانات المشترك</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        <form>

<div class="form-group">
    <label for="o1">اسم المشترك</label>
    <input type="text" class="form-control" id="namee" placeholder="اسم المشترك"
        maxlength=50>
</div>


<div class="form-group">
    <label for="o1">رقم الهاتف</label>
    <input type="text" class="form-control" id="mobile_numbere" placeholder="رقم الهاتف"
        maxlength=20>
</div>

<div class="form-group">
    <label for="o1">رقم الهوية</label>
    <input type="text" class="form-control" id="identity_numbere" placeholder="رقم الهوية"
        maxlength=20>
</div>


<button type="submit" class="btn btn-success mb-2" id="editplayer"><i
        class="fa fa-pen"></i> <span>تعديل</span></button>

</form>

</div> 
 </div>
</div>
 </div>




            <!--  delete popup -->


            <div class="modal fade" id="DeleteplayerConfirmation">
                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h3> حذف العنصر</h3>
                        </div>
                        <div class="modal-body" style="padding-left:220px">
                            <h4>هل انت متاكد من عملية الحذف</h4>
                        </div>
                        <div class="modal-footer" style="padding-left:220px">

                            <a href="#" class="btn btn-danger" onclick="ConfirmplayerDelete()">تاكيد</a>
                            <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
                        </div>
                    </div>
                </div>
            </div>


            <?php include_once("inc/footer.php") ?>

            