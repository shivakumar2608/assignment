
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

    <style>
        .idrow{
            width: 6%;
        }           
        .emailwidth{
            width: 18%;
        }
        th , td{
            width: 10%;
        }



    </style>

</head>
<body>
    <div class="container-class">
        
<?php
        require('navbar.php');
include('config.php');
    $sql = "SELECT * FROM users";
    $res = mysqli_query($conn, $sql);
    $num = 1;
    if($res== TRUE){
        $count = mysqli_num_rows($res);
        ?>
        <div class="">
        <h2 align="center" style="margin:30px">Registered Users </h2>
        
        <table>
    <tr>
        <th class="idrow">Id</th>
        <th>Name</th>
        <th class="emailwidth">Email</th>
        <th>Age</th>
        <th>Date of Birth</th>
        <th>Delete User</th>
        </tr>
        </table>

        <?php
        if($count >0){
            while($rows = mysqli_fetch_assoc($res)){
                $id = $rows['id'];
                $name = $rows['namee'];
                $email= $rows['email'];
                $age = $rows['age'];
                $dob = $rows['dob'];
                ?>
    <table>
    <tr>
        <td class="idrow" ><?php echo $id ?></td>
        <td><?php echo $name ?></td>
        <td class="emailwidth" ><?php echo $email ?></td>
        <td><?php echo $age ?></td>
        <td><?php echo $dob ?></td>
        <td  class="crossSymbolTd" id="<?php echo  $id ?>name "><button style="background-color: unset;" onclick="confirmDeleteUser()" ><img class="crossImg" src="images/crossSymbol.png" alt="" srcset=""> </button> </td>
        </tr>
        </table>   

</div>
</div>
<div class="confirmDelete">
    <div class="content">
        <img class="crossImgPopup" src="images/symbols/crossSymbol.png" alt="" srcset="">
        Are your sure want to delete this user?
    </div>
    <div class="buttons">
        <a class="btn btn-danger" href="delete-user.php?id=<?php echo $id ?>">Confirm</a>
        <button class="btn btn-secondary" onclick="confirmDeleteUser()" href="#">Cancel</a>
    </div>
</div>


<?php

            }  
        }
        else{
                //we dont have data in db
        }
    }
  
?>
<script>
 function confirmDeleteUser() {
        var msg =document.querySelector('.confirmDelete')
        var crossSymbols =document.querySelector('.crossSymbolTd')
        msg.classList.toggle('displayNone');
        var container =document.querySelector('.container-class')
        container.classList.toggle('main-container-blur');
        var audio = new Audio('audio/bookingConfirmAudio.mp3');
        audio.play();
        console.log(crossSymbols);
        
      }
    </script>
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
