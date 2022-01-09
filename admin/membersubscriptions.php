<?php include("inc/header.php"); 



// عدد المشتركين
$query2=mysqli_query($conn,"SELECT * FROM  members_subscribtions");

$result2=mysqli_num_rows($query2);

?>
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
                                    
                                    <h4 class="page-title">اشتراكات الاعضاء</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        

                        <button  class="btn btn-success m-b-15" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة اشتراك
                            </button>

                            <br> <br>


            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text"> اسم العضو</th>

                    <th class="th_text">تاريخ بداية الاشتراك</th>
                   
                    <th class="th_text"> نهاية الاشتراك</th>

                    <th class="th_text">عدد الشهور </th>

                    <th class="th_text">سعر الاشتراك  </th>

                   


                    <th class="th_text">العمليات</th>

                   
                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT * FROM subscriptions 
                 ");
                
                  while($row=mysqli_fetch_assoc($result))
                      {

                      
                    ?>
                <tr>
               
                    <td><?php echo $row['name']  ?></td>

                    <td><?php echo $row['startdate']  ?></td>

                    <td><?php echo $row['enddate']  ?></td>

                    <td><?php echo $row['month']  ?> شهر</td>

                    <td><?php echo $row['price_after_tax']  ?>  ريال</td>

                    
                    <td>

                    <?php
                               if($row['active']==0)
                               {

                                echo'
                           

                           <button type="button" id="data-image-id" data-toggle="modal"
                               data-target=".bd-example-emodal-lg" onclick="editsubscipe('.$row['subid'].')"
                               class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>';


                               }


                               if($row['active']==1)

                               {
                                echo'

                                <button type="button"  id="data-image-id" data-toggle="modal"
                                data-target=".bd-example-emodal-lg" onclick="editsubscipe('.$row['subid'].')"
                                class="btn btn-primary" style=" pointer-events: none;"> <i class="fa fa-pen"></i> تعديل</button>';
 


                               }



                               ?>

                           &nbsp; &nbsp;



                           <button type="button" id="data-image-id" data-toggle="modal"
                               data-target="#DeletememberConfirmation"
                               onclick="Deletememberfunction(<?php echo $row['subid'];?>)" class="btn btn-danger">
                               <i class="fa fa-trash"></i> حذف</button>

                               &nbsp; &nbsp;



                                
                               <?php
                               if($row['active']==0)
                               {

                                echo'
                                                            
                              
                               <a href="invoice.php?id='.$row['subid'].'"class="btn btn-success"><i class="fas fa-book"></i>

                               انشاء فاتورة</a>';

                               }

                               if($row['active']==1)

                               {

                                echo'
                                                            
                              
                                <a href="invoice.php?id='.$row['subid'].'"class="btn btn-warning" style=" pointer-events: none;"><i class="fas fa-book"></i>
 
                                تمت الفوترة</a>';


                               }


                            ?>
                            

                             


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
        <div id="datat" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="orders_"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4" id="orders_">اضافة اشتراك</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form>

                            <div class="form-group">
                                <label for="o1">اسم المشترك</label>
                                <select class="custom-select" style="width:100%" id="subscrname">

                        <?php

                             $firstteam=mysqli_query($conn," SELECT name FROM members_subscribtions");


                             $tax=mysqli_query($conn," SELECT tax, price FROM general_settings where setting_id=2");
                             


                             $taxnumber=mysqli_fetch_assoc($tax);


                         while( $item = mysqli_fetch_assoc($firstteam))
                       {

                      echo' <option value="'.$item['name'].'">'.$item['name'].' </option>';
    
                         }

                         $date = date('m/d/Y');
                        ?>
 
                          </select>
                            </div>

                            <div class="form-group">
                        <label for="o1">عدد شهور الاشتراك </label>
                      <select class="form-control" id="month">

                      <option value="1">  1</option>
                      <option value="2">  2</option>
                      <option value="3">  3</option>
                      <option value="4">  4</option>
                      <option value="5">  5</option>
                      <option value="6">  6</option>
                      <option value="7">  7</option>
                      <option value="8">  8</option>
                      <option value="9">  9</option>
                      <option value="10">  10</option>
                      <option value="11">  11</option>
                      <option value="12">  12</option>
 
                 </select>
               </div>
                            <div class="container">
                                                                                                     
                             <div class="row">
                                 <div class="col">
                                                                                                                                                                       
                             <div class="form-group">
                          <label for="o1">سعر الاشتراك</label>
                        <input type="text" class="form-control" name="price" id="price" value="<?php echo $taxnumber['price']  ?>" disabled  
                            maxlength=10>
                            </div>
                                                                                                                                                             
                             </div>
                            <div class="col">
                                                                                                                                                                       
                              <div class="form-group">
                          <label for="o1">ضريبة القيمة المضافة </label>
                          <input type="text" class="form-control" id="tax" value="<?php echo $taxnumber['tax']  ?> %" disabled
                              > 
                          </div>
                                                                                                                                                                             
                             </div>
                                                                                                                                                                       
                                                                                                                                                                       
                            </div>
                                                                                                                                                                       
                             </div>
                                                                    

                            <div class="form-group">
                            <label for="o1">تاريخ بداية الاشتراك </label>
                           <input type="text" class="form-control" id="startdate" value="<?php echo $date ?>" placeholder="<?php echo $date ?>" data-provide="datepicker" data-date-autoclose="true">
                           
                             </div><!-- input-group -->


                             
                            <div class="form-group">
                            <label for="o1">تاريخ نهاية الاشتراك </label>
                           <input type="text" class="form-control" id="enddate" value="<?php echo $date ?>" placeholder="<?php echo $date ?>" data-provide="datepicker" data-date-autoclose="true">
                           
                             </div><!-- input-group -->
                                            

                           
                           


                            <button type="submit" class="btn btn-success mb-2" id="Savesubscripe"><i
                                    class="fa fa-plus-square"></i> <span>أضافة</span></button>

                        </form>

                    </div>
                </div>
            </div>
        </div>




         <!-- edit popup -->

    <div class="body">
        <!-- larg modal -->
        <div class="modal fade bd-example-emodal-lg" tabindex="-1" role="dialog" aria-labelledby="orders_"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4" id="orders_">تعديل اشتراك</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form>

                        <div class="form-group">
                                <label for="o1">اسم المشترك</label>
                                <input type="text" class="form-control" id="esubscrname"
                                    maxlength=10 disabled>
                            </div>


                       <div class="form-group">
                        <label for="o1">عدد شهور الاشتراك </label>
                      <select class="form-control" id="emonth">

                      <option value="1">  1</option>
                      <option value="2">  2</option>
                      <option value="3">  3</option>
                      <option value="4">  4</option>
                      <option value="5">  5</option>
                      <option value="6">  6</option>
                      <option value="7">  7</option>
                      <option value="8">  8</option>
                      <option value="9">  9</option>
                      <option value="10">  10</option>
                      <option value="11">  11</option>
                      <option value="12">  12</option>
 
                 </select>
               </div>

               <div class="container">
                                                                                                     
              <div class="row">
              <div class="col">
                                                                                                                                                                       
             <div class="form-group">
              <label for="o1">سعر الاشتراك</label>
          <input type="text" class="form-control" id="eprice" disabled>
                                                                                                    
             </div>
                                                                                                                                                             
          </div>
          <div class="col">
                                                                                                                                                                       
              <div class="form-group">
         <label for="o1">ضريبة القيمة المضافة </label>
        <input type="text" class="form-control" id="etax" value="<?php echo $taxnumber['tax']  ?> %" disabled
         > 
        </div>
                                                                                                                                                                             
     </div>
                                                                                                                                                                       
                                                                                                                                                                       
     </div>
                                                                                                                                                                       
     </div>


                            <div class="form-group">
                            <label for="o1">تاريخ بداية الاشتراك </label>
                           <input type="text" class="form-control" id="estartdate"  placeholder="<?php echo $date ?>" data-provide="datepicker" data-date-autoclose="true">
                           
                             </div><!-- input-group -->


                             
                            <div class="form-group">
                            <label for="o1">تاريخ نهاية الاشتراك </label>
                           <input type="text" class="form-control" id="eenddate"  placeholder="<?php echo $date ?>" data-provide="datepicker" data-date-autoclose="true">
                           
                             </div><!-- input-group -->
                                                                                            


                            <button type="submit" class="btn btn-success mb-2" id="Editsubscripe"><i
                                    class="fa fa-plus-square"></i> <span>تعديل</span></button>

                        </form>

                    </div>
                </div>
            </div>
        </div>




         <!--  delete popup -->


         <div class="modal fade" id="DeletememberConfirmation">
                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h3> حذف العنصر</h3>
                        </div>
                        <div class="modal-body" style="padding-left:220px">
                            <h4>هل انت متاكد من عملية الحذف</h4>
                        </div>
                        <div class="modal-footer" style="padding-left:220px">

                            <a href="#" class="btn btn-danger" onclick="ConfirmmemberrDelete()">تاكيد</a>
                            <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
                        </div>
                    </div>
                </div>
            </div>


<?php include_once("inc/footer.php") ?>
