goto my admi and make a db crud now in that db we will make a tble 

in sample we have created a table of three attributes id,username and password


id is set to primary key and auto increement is turne on


now come to xaamp,hot docs and make a folder crud and open it in code 


noe goto main .php and do some basic connection 
building 

-------------------------------------------------------------------------------------

about the code now - >

in main - 
in whole main.php we only have build a connection with the help of

 mysqli_connect function 

 syntax to connect to a db in php - > 

 make a variable conn and make it equal to mysqli_connect('localhost','root');

 now through the function 

 mysqli_select_db($conn,'database name')

 to connect to a database 

 now we have connected to the database and now we can 

 check it if($conn){
    echo "connected";
 }

 and done the connection is now established.
 ------------------------------------------------------------------------

 now we will make a table in database from admin 

 and now in the file of insert.php we will insert the data in that table 

 first of all include 'main.php'; // connection file inclusion

 then make a form with required userinput and submit button

 importent steps here are that you have to call method="post" in the form 

 and specify the type of each input field and the name of each input field 

 and also the submit button

 each input and submit button should have a class a type and a name 

 now make a <?php ?>

 tag init 

 init include th connection fole and call

 if(isset($_POST['done'])){   //done is the name of submit button
now init specify the input variables 

$Username = $_POST['name of input class username'];
$Username = $_POST['name of input class username'];
$Username = $_POST['name of input class username'];
$Username = $_POST['name of input class username'];

and now call the queiry 
$q="Insert // just goto admin and select insert and it will show you the proper syntax without any typos";

after the queiry just call a variable 

$queiry = mysqli_query($conn,$q);

and you are done in the inserting data in the table;
 }

 -----------------------------------------------------------------------------------

 displaying the data 

 in this we will have to make a tbale in which the data will be displayed 

 the <?php

 tag in this file will contain 

 include 'main.php' //connection file 

 and a $q= "select * from 'tablename'";

 $queiry = mysqli_query($conn,$q);

 //mysqli_query is a function that containt 2 parameters the connection and the quiry

 we have to call it after we have made the connection and specified the quiry

 ?>

 now make a html table

 with first <tr>
 just add the titles 
 in each <th>

 noe with the following trs 
 fetch the data by the function mysqli_fetch_array($query);


 <?php
                    include 'main.php';

                        $q = "SELECT * FROM `curdtable`";

                        $query = mysqli_query($conn,$q);

                        while ($res= mysqli_fetch_array($query)){

                ?>

                <tr>
                <th><?php echo $res['id'];?></th>
                <th><?php echo $res['username'];?></th>
                <th><?php echo $res['password'];?></th>
                <th><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['id'];?>"class="text-white">Delete</th>
                <th><button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id'];?>"class="text-white">Update</th>
                
                
                    
                </tr>
            <?php
                        }

        ?>
        </table>

add this after the initial heading and the first heading <tr> of the table 

now make the nessery changes and this will now display the data in you table 

this will display


--------------------------------------------------------------------------------------------


now come to delete.php


we just have to make the connection to the database 

or include the file of main.php

then ffetch the id by makeing a variable 

$id = $_GET['id'];

and make a quiry 

$q= "delete from <tablename> where `tablename`.`id`=$id";

now run the queiry by function
mysqli_queiry($conn,$q);

now we have to go to the display page again and to do that 

header('location:display.php');


------------------------------------------------------------------------

to update make a table just like insert table 

just copy and paste the insert table 

now  include a <?php tag 

and 

include 'main.php';

    if(isset($_POST['done'])){  //when submit button is pressed

        $id=$_GET['id'];   // fetch id 
        $username = $_POST['username'];   // submit button pressed so the function post will be called 
        $password = $_POST['password'];

        $q = "update curdtable set id =$id ,username = '$username' , password = '$password' where id=$id" ;

        $query = mysqli_query($conn,$q);

        header('location:display.php');

    }


now make the from and you are good to go 

for more info and clarification visit update.php