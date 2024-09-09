<?php


require_once __DIR__.'/../includes/app.php';


// var_dump(config('/config/session.timeout'));


// $data= db_insert('users',[
//     'name'=>"siri2",
//     'email'=>"siri23@google.com",
//     'password'=>"cccccc",
//     'phone'=>"11111111"
// ]);

// var_dump($data);


// $update= db_update('users',[
//     'name'=>"reda@google.com",
//     'email'=>"reda@google.com",
//     'password'=>"*******",
    
// ],40);
// var_dump($update);

//$delete= db_delete('users',38);
//var_dump($deletes);


// $find= db_find('users',1);
// echo "<pre>";

// print_r($find);

// echo "</pre>";

// $db_getFirst= db_getFirst('users',"WHERE phone LIKE '%5%'");

// echo "<pre>";

// print_r($db_getFirst);

// echo "</pre>";
//echo count($db_getFirst);


// $db_getmultiline= db_getmultiline('users',"WHERE phone LIKE '%5%'");

// if($db_getmultiline > 0){
//     while($rows=mysqli_fetch_assoc($db_getmultiline['query']))
//     {
//          echo $rows["phone"]."<br>";
//     }
// }

// $users=db_pagination('users','',1);

// while($row=mysqli_fetch_assoc($users['query']))
// {
//     echo $row['email']."<br>";
// }

// echo $users['render'];


//session('test',"new test");
//echo session('test');

//session_forget('test');

//session_delete();


//var_dump(config('/config/session.timeout'));


// if (!function_exists('send_mail')):

//     function send_mail(string $to, string $subject, string $message): bool
//     {
//         // Define your mail settings
//         $smtp_server = 'smtp.gmail.com';  // Replace with your SMTP server
//         $smtp_port = 587;  // Replace with your SMTP port
//         $from_email = 'your-email@gmail.com';  // Replace with your from email
//         $from_name = 'Your Name';  // Replace with your from name
        
//         // Set the SMTP settings for the mail function
//         ini_set('SMTP', $smtp_server);
//         ini_set('smtp_port', $smtp_port);

//         // Create email headers
//         $headers = 'MIME-Version: 1.0' . "\r\n";
//         $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
//         $headers .= 'From: ' . $from_name . ' <' . $from_email . '>' . "\r\n";

//         // Try to send the email
//         if (mail($to, $subject, $message, $headers)) {
//             return true;
//         } else {
//             // Log the error or handle it as needed
//             error_log("Failed to send email to $to");
//             return false;
//         }
//     }

// endif;


// var_dump(send_mail('php@mail.com','testing message','content'));



// echo encrypt('123456');



//  symlink(base_path('storage'),base_path('/public/storage'));




// file management functions
// delete_file('storage/files/test/test.mp4');  
// delete_folder('storage/files/test');


























route_init();


if(!empty($GLOBALS['query']))
{
    mysqli_free_result($GLOBALS['query']);
}
mysqli_close($GLOBALS['conect']);


ob_end_flush();
//ob_end_clean();