   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>
   <style>
      body{
        background-color: whitesmoke;
     }
    center{
        background-image:linear-gradient(to right, #8771F7, #8470F5, #997AFC, #e284ff);
        border-style: none;
        border-radius: 25px;
        color: white;
        padding: 25px;
      }
      input{
        width:40%;
        height:5%;
        border:1px;
        border-radius: 05px;
        padding: 8px 15px 8px 15px;
        box-shadow: 1px 1px 2px 1px grey;
    } 
    .button{
       background-color:blueviolet;
       
    }   
   </style>
   <body>
      <center>
         <br>
         <h1 class="">
            Form To Add Chemicals
         </h1> 
         <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
         <img class="heroImage rounded-lg-3" src="public/bt1.jpg" alt="" width="300"style="float:left;">
         </div> 
         <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class=""> 
               <br>
               Description   <input type="text" name="username" id="user">
               <br><br>
               Expression    <input type="text" name="exp" id="user">
               <br><br>
               Author        <input type="text" name="author" id="user">
               <br><br> 
               Released Date <input type="text" name="rel" id="user">
               <br><br>
               Deposited Date <input type="text" name="dep" id="user">
               <br><br>
               Id             <input type="text" name="id" id="user">
               <br><br>
               Organisms      <input type="text" name="org" id="user">
               <br><br>
               Image          <input type="file" name="file"  id="file"> 
               <br><br> 
               <input type="submit" name="submit" value="submit" class="button">
               <br>
            </div>
         </form>
     </center>
   </body>
   </html>

