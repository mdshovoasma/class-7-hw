<?php
session_start();
// $_REQUEST['title'];
$all_eror=[];
$erors=[];
if(isset($_REQUEST['submit'])){
    $erors['title']=$_REQUEST['title'];
    $erors['name']=$_REQUEST['name'];
    $erors['comment']=$_REQUEST['comment'];
    
}
// print_r($erors);

if(empty($erors['title'])){
   $all_eror['title']="please Enter your name";

}else if(strlen($erors['title'])>11){
    $all_eror['title']="Enter 10 carector of leanth";


}
if(empty($erors['name'])){
    $all_eror['name_erorr']="Enter your name";

}
if(empty($erors['comment'])){
    $all_eror['comment_error']= "please comment here";

}
// print_r($all_eror);
// var_dump($all_eror);
// print_r( $all_eror);
// echo count($all_eror);


if(count($all_eror)>0){
    $_SESSION['valu_item']=$erors;

    $_SESSION['erroritem']=$all_eror;
    
    header('location:../class-7.php');

}
else{
    header('location:post.php');
}





?>