
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<style>
	#blank_space{
    width : 100%;
    height : 400px;
	}
	
	#blank_space1{
    width : 100%;
    height : 400px;
	text-align:center;
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


$user = new User();
$message = new Message();
$_from = $_SESSION['from'];
$_to = $_SESSION['to'];
$Conversation = $message->find_all($_SESSION['from'],$_SESSION['to']);
if($Conversation){
	echo '<div id="blank_space1">';
    echo '<table border="1" cellpadding="10">';
    echo "<tr><td>From</td>";
    echo "<td>To</td>";
    echo "<td>Message</td>";
    echo "<td>Time</td></tr>";
    foreach ($Conversation as $row){
        echo "<tr><td>". $row->from ."</td>";
        echo "<td>". $row->to ."</td>";
        echo "<td>". $row->message ."</td>";
        echo "<td>". $row->time . "</td></tr>";
    }
    echo "</table>";
	echo "</div>";
}
$message->read($_from,$_to);
if(Input::exists()){
    if(Token::check(Input::get('token'))){
        if(!Input::get('newMessage')){
            Redirect::to('conversation_messages.php');
        }
        $user = new User();
        if(isset($_SESSION['message'])){
            unset($_SESSION['message']);
        }
        $_SESSION['message'] = Input::get('newMessage');
        try{
            $message->insert(array(
                'from' => $_from,
                'to' => $_to,
                'time' => date('Y-m-d H:i:s'),
                'status' => 1,
                'message' => Input::get('newMessage')
            ));
            echo '<meta http-equiv="refresh" content="0">';
        } catch(Exception $e) {
            echo $e, '<br>';
        }
    }
}


?>

<div id="alignment">
<form action="" method="post">
<br> <br>
    <div class="field">
        <label for="newMessage">New Message</label>
        <input type="text" name="newMessage" id="newMessage" value="<?php echo escape(Input::get('newM')); ?>">
    </div> <br> <br>
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Send">
</form>
<div><br><br>

<?php
require_once 'footer.php';
?>


</body>
</html>

<?php
    ob_end_flush(); // Flush the output from the buffer
?>