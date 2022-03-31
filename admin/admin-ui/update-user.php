  <?php
  require_once '../Admin-Login/db_connect.php';
  
$w_id=$_POST['w_id'];
if(isset($_POST['submit']))
    {
        
        // $username = $_POST['username'];
        $name = $_POST['fullName'];
        // $gender=$_POST['gender'];
        // $BOD = $_POST['bod'];
        $city = $_POST['city'];
        $company = $_POST['company'];
        $job = $_POST['job'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $more_details= $_POST['about'];
     //   $category = $_POST['category'];
     //   $charge=$_POST['charge'];
          $img=$_FILES['img'];
        /*  $img_name=$_FILES['img']['name'];
          $img_size=$_FILES['img']['size'];
          $img_tmp=$_FILES['img']['tmp_name'];
          $file_type=$_FILES['img']['type'];
          */
          $target_dir = "uploads/";
      $target_file = $target_dir."".$username."".basename($_FILES["img"]["name"]);
      $uploadOk = 0;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) {

          $uploadOk = 1;
        }
        else
        {
          $uploadOk = 0;

        }
      }
      //check errors
      if($_FILES['img']['error']!=0)
      {
        $uploadOk = 0;
        $reason="Sorry, image have errors.";

      }
        if($_FILES['img']['size']>1000000)
        {
          $uploadOk = 0;
          $reason="Sorry, image size is too big!.";

        }
      // Check if file already exists
        if (file_exists("../Admin-Login/".$target_file)) {
          $target_file = $target_dir."".$username."".rand(1999,9999).basename($_FILES["img"]["name"]);
          
        }
      // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
        {
            $reason="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            }
        
          if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            if(isset($reason)){
              echo "</br> Reason : ".$reason;
            }
          // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($img["tmp_name"],"../Admin-Login/".$target_file))
             {
                 $img_url=$target_file;
                try {
                    $SQLUpdate = "UPDATE workers set `name`='$name', `company`='$company', `img`='$img_url',`city`='$city',`details`='$more_details',`job`='$job',`m_num`='$phone',`email`='$email',`address`='$address' WHERE w_id=$w_id";
                    

                    $statement = $conn->prepare($SQLUpdate);
                    $statement->execute();
                    $conn->connection = null;
                    if($statement->rowCount() == 1) {
                        header("location:users-profile.php?msg=successfully_edited");
                    
                    }else{
                        echo "Error";
                    }
                }
                catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                


            } else {
              echo "Sorry, there was an error uploading your file $target_file";
            
            }
          }
            
            
        
    
    

    }

else
{
    $conn->connection = null;
  header("location:users-profile.php?msg=fill_the_form_first");
}

?>
  
