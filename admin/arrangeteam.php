<?php include("inc/header.php"); 





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
                                    
                                    <h4 class="page-title">ترتيب فرق الدورى</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <button  class="btn btn-success m-b-15" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اعادة ترتيب الفرق
                            </button>

                            <br> <br>


            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text"> مركز الفريق</th>

                    <th class="th_text">الفريق</th>
                   
                    <th class="th_text">عدد المباريات</th>

                    <th class="th_text">النقاط</th>

                   
                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT * FROM arrangment_team ORDER BY
                 team_number");
                
                  while($row=mysqli_fetch_assoc($result))
                      {

                      
                    ?>
                <tr>
               
                    <td><?php echo $row['team_number']  ?></td>

                    <td><?php echo $row['team_name']  ?></td>

                    <td><?php echo $row['matches']  ?></td>

                    <td><?php echo $row['points']  ?></td>

                 
                                       
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
     <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="ordersس_" aria-hidden="true">
         <div class="modal-dialog modal-lg">
         <div class="modal-content">
        <div class="modal-header">
     <h5 class="modal-title h4" id="orders_">اعادة ترتيب الفرق </h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
 <form >

 <?php 
 

 
 ?>

<div class="table-responsive">
  <table class="table" id="arrange_table">
   <tr>
  
    <th width="25%">  <label><h6>الفريق</h6></label> </th>

    <th width="25%">المركز</th>
    <th width="25%">عدد المباريات</th>

    <th width="25%">النقاط</th>
    
   </tr>

   <?php

  $result1=mysqli_query($conn,"SELECT * FROM arrangment_team ");

                
  while($row1=mysqli_fetch_assoc($result1))
    {
  
    ?>

   <?php echo' <tr class="arranga">
   
    <td>  
          
    <div class="input-group">
    <input type="text" class="form-control" id="team_name" value="'.$row1['team_name'].'"  disabled>
   
    </div>  
  
     </td>

    <td>

    <div class="input-group">
    <input type="number" class="form-control" id="team_number" value="'.$row1['team_number'].'" min="1">
   
    </div>  
        
   </td>

    <td> 

    <div class="input-group">
    <input type="number" class="form-control" id="matches" value="'.$row1['matches'].'" min="0" max="20">
   
    </div> 

                                                                   
    </td>

    <td> 
    <div class="input-group">
    <input type="number" class="form-control" id="points" value="'.$row1['points'].'" min="0" max="20">
   
    </div> 
</td>
        
   </tr>';
   ?>
    <?php
    }
   ?>
  </table>
 
 
 <div align="center">



<button type="submit"   class="btn btn-info mb-2"  id = "editarrange"><i class="fa fa-pen"></i> <span>تعديل</span></button>
</div>
</div>

</form>

     </div>
     </div>
 </div>
 </div>

 </div>


<?php include_once("inc/footer.php") ?>