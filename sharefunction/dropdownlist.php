<?php 

include_once("../config.php");


if (isset($_POST['city'])) {

    $output = "";
    $city = $_POST['city'];
   

    $query= mysqli_query($conn,"SELECT * FROM citys WHERE CityName LIKE '%$city%'");


    $output = '<ul class="list-unstyled">';		

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $output .= '<li>'.ucwords($row['CityName']).'</li>';
        }
    }
    
    else{
          $output .= '<li> City not Found</li>';
    }
    
    $output .= '</ul>';
    echo $output;
}




if(isset($_POST['CatTypeID'])){

    $Catid=$_POST['AddCatid'];

    $CatTypeID=$_POST['CatTypeID'];

   


    $query= mysqli_query($conn,"SELECT ct.*, sc.* FROM subcategory sc INNER JOIN
    categorytype ct
     ON sc.CatTypeID = ct.CatTypeID
    WHERE sc.cat_id ='$Catid' and ct.CatTypeName='$CatTypeID'");

    while($row = mysqli_fetch_array($query))
    {
     $data["SubCatID"] = $row["SubCatID"];
     $data["SubCategoryName"] = $row["SubCategoryName"];
   
     echo '<option value="'.$row['SubCategoryName'].'">'.$row['SubCategoryName'].'</option>';
   
     }



}



if(isset($_POST['CatTypesID'])){

    $Catid=$_POST['Catidss'];

    $CatTypeID=$_POST['CatTypesID'];

   $subcat=$_POST['CatSubid'];


    $query= mysqli_query($conn,"SELECT ct.*, sc.* FROM subcategory sc INNER JOIN
    categorytype ct
     ON sc.CatTypeID = ct.CatTypeID  
    WHERE sc.cat_id ='$Catid' and ct.CatTypeName='$CatTypeID' AND   sc.SubCategoryName='$subcat'

    UNION  SELECT ct.*, sc.* FROM subcategory sc INNER JOIN
    categorytype ct
     ON sc.CatTypeID = ct.CatTypeID  
    WHERE sc.cat_id ='$Catid' and ct.CatTypeName='$CatTypeID' AND  sc.SubCategoryName!='$subcat'     
     ");

    while($row = mysqli_fetch_array($query))
    {
     $data["SubCatID"] = $row["SubCatID"];
     $data["SubCategoryName"] = $row["SubCategoryName"];
   
     echo '<option value="'.$row['SubCategoryName'].'">'.$row['SubCategoryName'].'</option>';
   
     }



}












if(isset($_POST['Catsid']))
{

    $Catid=$_POST['Catsid'];
    $CatTypeID=$_POST['CatTypeID'];


    $query= mysqli_query($conn,"SELECT * FROM categorytype WHERE cat_id ='$Catid' and CatTypeName='$CatTypeID'
    
    union SELECT * FROM categorytype WHERE cat_id ='$Catid' and CatTypeName!='$CatTypeID'
    
     ");
    
     while($row = mysqli_fetch_array($query))
     {
      $data["CatTypeID"] = $row["CatTypeID"];
      $data["CatTypeName"] = $row["CatTypeName"];
    
     echo '<option value="'.$row['CatTypeName'].'">'.$row['CatTypeName'].'</option>';
     
    
      }
    
}



if(isset($_POST['Catid']))
{

    $Catid=$_POST['Catid'];

    $query= mysqli_query($conn,"SELECT * FROM categorytype WHERE cat_id ='$Catid'");
    
     while($row = mysqli_fetch_array($query))
     {
      $data["CatTypeID"] = $row["CatTypeID"];
      $data["CatTypeName"] = $row["CatTypeName"];
    
     echo '<option value="'.$row['CatTypeName'].'">'.$row['CatTypeName'].'</option>';
     
    
      }
    
}







// echo json_encode($data);


?>