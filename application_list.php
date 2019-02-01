

<html>
    <head>
        <style >
            #blank_space{
                width : 100%;
                height : 300px;
            }
            #alignment{
                width : 100%;
                height : 90px;
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
        require_once 'Head.php';
        if (Session::exists('home')) {
            echo '<p>' . Session::flash('home') . '</p>';
        }

        $user = new User(); //Current
        $message = new Message();

        if ($user->isLoggedIn()) {
            ?>


             
            <?php
            if ($user->hasPermission('faculty')) {
                echo '<p>Faculty member!</p>';
            } else if ($user->hasPermission('admin')) {
                echo '<a href="admin.php"></a>';
            }
        } else {

            echo '<div id="alignment">';
            echo '<p> <br> <br> <br> <br> <br> <br> You need to <a href="login.php">Login</a> or <a href="register.php">Register.</a></p>';
            echo "</div>";
        }
        ?>

        <?php
        include("includes/database/connection.php");

        $query = '';

        if ($user->hasPermission("admin") || $user->hasPermission("branch_officer"))
            $query = 'select application.*,users.name as username from application join users on application.user_id=users.id order by reserve_date_time asc';
        else {
            $viewers_dept = $user->data()->department;
            $query = 'select application.*,users.name as username from application join users on application.user_id=users.id where users.department="' . $viewers_dept . '"';
        }

        $applications = query_result($query);
        ?>

         <div class="row">
<div class=" col-sm-2"></div>
<div class="col-sm-8">
 <div id="application" style="margin-top:55px"  >
                    <div class="panel panel-danger">
                        <div class="panel-heading"><h1 style="text-align:center;color:black"> Submitted applications for Motorcar/ Microbus/ Ambulance/ Bus/ Minibus  </h1> 
                            <div class="panel-title"></div>
 
                        </div>  
                        <div class="panel-body" >
 </div>
 
        
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Applicant name</th>
                            <th>Submitted on</th>
                            <th>Reserve from</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($a = $applications->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td><a href='view_application.php?id=" . $a['application_id'] . "'>" . $a['username'] . "</a></td>";
                            echo "<td>" . $a['submitted_on'] . "</td>";
                            echo "<td>" . $a['reserve_date_time'] . "</td>";
                            echo "<td>" . $a['status'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    <tbody>
                </table>
            </div>
        </div>

    </div>
</div>
</div>
</div>



<?php
require_once 'footer.php';
?>
<?php
ob_end_flush(); // Initiate the output buffer
?>
</body>
</html>


