<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Search the Protein</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="public/style.css">
</head>

<body>

  <div class="container container-fluid heroColor my-5" style="box-shadow: 0;">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 ">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 textColor">A structural appearance of the Protein</h1>
        <p class="lead">It is a web portal of the 3-D structure of proteins, nucleic acid, and complex compounds
          for students and researchers. This information helps them to know about all the terms of structure and they can complete their work easily.</p>
        <br>
        <div class="input-group"> 
          <form action="" method="POST">  
          <input autofocus type="search" class="form-control rounded" placeholder="Enter the name of protein..." aria-label="Search" aria-describedby="search-addon" name="id" style="width:200%;"/>
          &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-dark " name="search" />
          </form>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <img class="heroImage rounded-lg-3" src="public/bt1.jpg" alt="" width="300">
      </div> 
                  <?php
                        $connection=mysqli_connect("localhost","root","");
                        $db=mysqli_select_db($connection,'jay')or die("ch");
                        if(isset($_POST['search'])){
                            $id=$_POST['id'];
                            $query="SELECT * FROM content where ID='$id'";
                            $query_num=mysqli_query($connection,$query)or die("lol");
                            while($row=mysqli_fetch_array($query_num)){
                                ?>
                                <div class="card text-white bg-primary mb-3" style="width: 50%;">
                                  <div class="card-header">Chemical</div>
                                   <div class="hero card-body">
                                        <img class="card-img-top" src="<?php echo $row['image'];?>" alt="Card image cap" style="float:left;width:50%; padding:2px;">
                                        <h5 class="card-title">ID:<?php echo $row['id'];?></h5>
                                        <p class="card-text">Deposited Date:<?php echo $row['deposited'];?></p>
                                        <p class="card-text"> Released Date:<?php echo $row['released'];?></p>
                                        <p class="card-text">Organism :<?php echo $row['organisms'];?></p>
                                        <p class="card-text">Author:<?php echo $row['Author'];?></p>
                                        <p class="card-text">Expression:<?php echo $row['Expression'];?></p><br>
                                        <p class="card-text">Description:<?php echo $row['description'];?></p>               

                                   </div>  
                                </div>    
                              <?php
                            }
                        }
                    ?>     
    </div>
  </div>
</body>

</html>