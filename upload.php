<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $conn=mysqli_connect('localhost','root');
     mysqli_select_db($conn,'jay')or die("lol");
     if(isset($_POST['submit'])){
         $username=$_POST['username'];
         $exp=$_POST['exp'];
         $org=$_POST['org'];
         $author=$_POST['author'];
         $rel=$_POST['rel'];
         $dep=$_POST['dep'];
         $id=$_POST['id'];
         $files=$_FILES['file'];
         
         print_r($username);
         print_r($org);
         print_r($exp);
         print_r($dep);
         print_r($rel);
         print_r($id);
         print_r($author);
         echo "<br>";
         print_r($org);
         $filename=$files['name'];
         $filetmp=$files['error'];
         $filetmp=$files['tmp_name'];

         $fileext=explode('.',$filename);
         $filecheck=strtolower(end($fileext));
         $fileextstored=array('png','jpg','jpeg');
         if(in_array($filecheck,$fileextstored)){
             $destinationfile='upload/'.$filename;
             move_uploaded_file($filetmp,$destinationfile);
         }
         $q="INSERT INTO content(id, description, image, organisms, Author, Expression, deposited, released) VALUES ('$id','$username','$destinationfile','$org','$author','$exp','$dep','$rel')";
         $query=mysqli_query($conn,$q)or die("Could Not Perform the Query");
     }
    ?>
</body>
</html>