<!--

            Display page.
            Need designing.
            
-->
<?php

require_once 'core/init.php';
$_caseFactor = 0;
if(!$username = Input::get('user')) {
    Redirect::to('index.php');
} else {
    $user = new User($username);
    if($user->hasPermission('faculty')){
        $_caseFactor = 1;
    } else if($user->hasPermission('admin')){
        $_caseFactor = 2;
    }
    if(!$user->exists()) {
        Redirect::to(404);
    } else {
        $data = $user->data();
?>

        <h3><?php echo escape($data->username); ?></h3>
        <p>Name: <?php echo escape($data->name); ?></p>
        <?php
        if($_caseFactor === 1){
            //department
            echo '<p>Department: ' . escape($data->department) . '</p>';
        } else if($_caseFactor === 0){
            //roll
            echo '<p>Roll: ' . escape($data->roll) . '</p>';
        } else{
            echo '<p>Joined: ' . escape($data->joined) . '</p>';
        }
        ?>
        <!--
            ** delete later
        <p>Department: <?php echo escape($data->department); ?></p>
        <p>Roll: <?php echo escape($data->roll); ?></p>   
        <p>Joined: <?php echo escape($data->joined); ?></p>
        -->


        <p>Mobile: <?php echo escape($data->mobile); ?></p>
        <p>Email: <?php echo escape($data->email); ?></p>
        <p>Address: <?php echo escape($data->address); ?></p>
        
        
        
        

<?php
    }
}