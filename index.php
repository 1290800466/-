<?php
require_once 'function.php';
if (isMobile()){
    //跳转到手机端
    header("Location: mobile.php"); 
}else{
    //跳转到PC端
    header("Location: pc.php"); 
}
?>