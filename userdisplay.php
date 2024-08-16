<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Usersdisplay</title>
  <style>

    li:hover {
  background-color: #red;
}
    .superNav {
      font-size:13px;
    }
    .form-control {
      outline:none !important;
      box-shadow: none !important;
    }
    @media screen and (max-width:540px){
      .centerOnMobile {
        text-align:center
      }
    }
	.back{
 width: 200px;
 height: 34px;
 background-color: rgba(152, 99, 243, 0.952);
 color:black;
 margin-top: 12px;
 border-radius: 9px;
 font-size: 19px;
 font-family: monospace;
 margin-left: 80%;
 text-align: center;
 align-items: center;
 border: 4px double black;
 

}
.back:hover{
  background-color: rgb(137, 164, 250);
  height: 35px;
  width:220px;
}
a{
  color: black;
  font-size: 22px;
  font-family: Georgia, 'Times New Roman', Times, serif;
  font-weight: bold;

}
.image{  
 
    width: 1520px;
    object-fit: cover;
    background-size: cover;
    height: auto;

    }
    </style>
</head>
<body background="bg8.jpg">

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: ">
    <font size="10px"><b>Users Details</b></font>
  </nav>
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Name</th>
		  <th scope="col">Email</th>
          <th scope="col">Age</th>
          <th scope="col">Password</th>
        
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `users`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
        ?>
          <tr>
         
            <td><?php echo $row["Name"] ?></td>
             <td><?php echo $row["Email"] ?></td>
             <td><?php echo $row["Age"] ?></td>
             <td><?php echo $row["Password"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
<div class="footer"> <a href = "dashboard.html" >
  <button type = "button" class = "back">BACK</button><br>
  </a> <br></div>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
a