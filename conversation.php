

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<style>
	#blank_space{
    width : 100%;
    height : 340px;
	}
	#alignment{
    width : 100%;
    height : 150px;
	text-align:center;
	}
	
	#center{
    width : 100%;
    height : 5px;
	text-align:center;
	}
	
</style>
</head>

<body>

<?php
    ob_start(); // Initiate the output buffer
?>


<?php
require_once 'core/init.php';
$_from; 
$_to;
$user = new User();
$message = new Message();
$unreads = $message->isUnread($user->data()->username);
$message_no = 0;
if($unreads){
    foreach ($unreads as $unread) {
        $message_no = $unread->message_counter;
    }
}


 echo '<div id="center">' ;
echo " <br> Unread Message(s) : " . $message_no . "</br>";
echo "</div>";

$unreads = $message->unreadPeople($user->data()->username);
if($unreads){
    foreach ($unreads as $unread) {
        //echo $unread->from;
        if(isset($_SESSION['from']) || isset($_SESSION['to'])){
            unset($_SESSION['from']);
            unset($_SESSION['to']);
        }
        $_SESSION['from'] = $user->data()->username;
        $_SESSION['to'] = $unread->from;
        //Redirect::to('conversation_messages.php');
        echo "<a href='conversation_messages.php'>" . $unread->from ."</a>    ";
    }
}


if(Input::exists()){
    if(Token::check(Input::get('token'))){
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array(
                'required' => true,
                'exists'=>'users'
                )
        ));
        if($validate->passed()){
            $user = new User();
            if(isset($_SESSION['from']) || isset($_SESSION['to'])){
                unset($_SESSION['from']);
                unset($_SESSION['to']);
            }
            $_SESSION['from'] = $user->data()->username;
            $_SESSION['to'] = Input::get('username');
            Redirect::to('conversation_messages.php');
        } else {
            foreach($validate->errors() as $error) {
                echo $error, '<br>';
            }
        }
    }
}
?>

<div id="alignment">
<form action="" method="post">
	<br><br> <br><br> 
    <div class="field">
        
        <input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>" placeholder="User Name" required>
    </div> <br>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Start Conversation">
</form>
</div>

<div id = 'blank_space'>
</div>

<?php
require_once 'footer.php';
?>


</body>
</html>

<?php
    ob_end_flush(); // Flush the output from the buffer
?>