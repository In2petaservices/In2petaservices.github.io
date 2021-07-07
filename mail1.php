<?php

   if(isset($_POST['submit']))
   {
   
       $name=$_POST['name'];
       $email=$_POST['email'];
       $mssg=$_POST['message'];
    //    $date=$_POST['date'];
    //    $time=$_POST['timeslot'];
   
       
       $to='gouri.nandan.kar@suiit.ac.in';
   
       $subject='Contact';
   
       $message="Name".$name."\n"."Message".$mssg;
   
       $header="From:".$email;
   
       if(mail($to, $subject, $message, $header)){
           echo "<script>
                    alert('Thanks for contacting');
                    location.href = 'https://Gourinandan-Kar.github.io';
                </script>";
       }
       else{
           echo "<h1>Something went wrong!</h1>";
       }
   }
?>