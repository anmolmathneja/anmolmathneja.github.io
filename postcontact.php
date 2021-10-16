<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{


          $name =  $_POST['name'];

          $email = $_POST['email'];
          
          $phone = $_POST['phone'];
         
          $csubject = $_POST['subject'];
         



          $cmessage = $_POST['message'];
          $subject = "New Email from client from Personal Site";
          $to_email = 'devtechyadda@gmail.com';
          $to_fullname = 'Admin';
          $from_email = 'info@techyadda.com';
          $from_fullname = 'Personal Site';
          $headers  = "MIME-Version: 1.0\r\n";
          $headers .= "Content-type: text/html; charset=utf-8\r\n";
          $headers .= "To: $to_fullname <$to_email>\r\n";
          $headers .= "From: $from_fullname <$from_email>\r\n";
          $message ='<html><head><title>New Email from client from Personal Site </title></head><body><table cellspacing="0"><tr><td>Name :</td><td>'.$name.'</td></tr><tr><td>Email :</td><td>'.$email.'</td></tr><tr><td>Mobile Number :</td><td>'.$phone.'</td></tr><tr><td>Subject :</td><td>'.$csubject.'</td></tr><tr><td>Message :</td><td>'.$cmessage.'</td></tr></table></body></html>';
            
           if (mail($to_email,$subject,$message,$headers))
           {

             
              $msg="Your message has been sent. Thank you!";
              
              echo json_encode(array('status'=>200,'success'=>$msg));
              //echo '<script>alert("Thanks for your Taxi booking. Please check your email for confirmation.");</script>';
            
           }else
           {

                $err="Some error occured";
                echo json_encode(array('status'=>201,'error'=>$err));
              
                //echo '<script>alert("Some error occured");</script>';
           }
}


?>