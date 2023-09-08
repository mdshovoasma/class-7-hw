
<?php
session_start();
// $title='';
// $name = '';
// $comment='';

// if(isset($_SESSION['erroritem']['title'])){
//     $name=  $_SESSION['erroritem']['title'];
// }
// if(isset($_SESSION['erroritem']['comment_error'])){
//     $comment =  $_SESSION['erroritem']['comment_error'];


// }


// print_r($_SESSION['erroritem']['comment_error']);


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <div class="container-fluid m-0 p-0" >
    <h1 class="text-center bg-primary my-0 py-0">Form validation  system</h1>
    <div class="row">
        <div class="col-md-6 mt-0 py-0">
            <div class="card bg-primary ">
                <form action="./contoroler/control.php"class="form-control bg-dark" method="POST">
                    <input value="<?=isset($_SESSION['valu_item']['title'])?$_SESSION['valu_item']['title'] :'' ?>" name="title" class="my-2" type="text" placeholder="Enter your post title"><br>

                    <?php
                    if(isset($_SESSION['erroritem']['title'])){ ?>
                    
                      <span class="text-danger"><?=$_SESSION['erroritem']['title']?> </span><br>
                  <?php }
                    
                    ?>
                    <input value="<?= isset($_SESSION['valu_item']['name'])?$_SESSION['valu_item']['name'] : ''  ?>" name="name" class="my-2"  type="text" placeholder="Enter your name"><br>
                    <?php
                    if(isset($_SESSION['erroritem']['name_erorr'])){ ?>
                    
                      <span class="text-danger"><?=$_SESSION['erroritem']['name_erorr']?> </span><br>
                  <?php }
                    
                    ?>
               
                    <!-- <input name="comment" type="text"> -->
                  <input type="text" name="comment" placeholder=" Enter ditals"><br>



                    <?php
                    if(isset($_SESSION['erroritem']['comment_error'])){ ?>
                    
                      <span class="text-danger"><?=$_SESSION['erroritem']['comment_error']?> </span><br>
                  <?php }
                    
                    ?>
                    <input  name="submit" class="my-2 btn btn-primary"   type="submit">

                </form>
                

            </div>
        </div>
    </div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>

<?php
session_unset();
?>

