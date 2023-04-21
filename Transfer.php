<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet"  href="transfer.css">
    

    <style type="text/css">
      button{
        transition: 1.5s;
        /* background-color: black; */
      }
      button:hover{
        background-color:#616C6F;
        color: black;
      }
    </style>
</head>


<section  class="transfer-navbar" >
        <a href="#"><img src="images/sparkslogo.png" class = "logo"alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="Transfer.php">Transfer</a></li>
                <li><a href="Transactions.php">Transactions</a></li>

            </ul>
        </div>
    </section>

<body class="transfer" style="background-color:rgb(200, 224, 224);">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($con,$sql);
?>

<div class="container">
        <h2 class="transfer-heading">Users</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:transparent;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">S.No</th>
                            <th scope="col" class="text-center py-2">Account holder name</th>
                            <th scope="col" class="text-center py-2">Account No.</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Account Balance(in Rs.)</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['Account holder Name']?></td>
                        <td class="py-2"><?php echo $rows['Account Number']?></td>
                        <td class="py-2"><?php echo $rows['E-mail']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="users.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" >Transfer money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>