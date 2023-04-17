<?php

$conn = mysqli_connect('localhost','root');

mysqli_select_db($conn,'curdop');

if($conn){
    echo "connected to the curdop database";

}else{
    echo "error occured not connected !!";
}
?>