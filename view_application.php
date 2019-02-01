
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
                echo '<p></p>';
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
        include('phpmailer/PHPMailerAutoload.php');

        function send_email($to, $to_name, $subject, $body) {
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            //$mail->SMTPDebug = 4;
            $mail->Username = "transportprojectruet@gmail.com";
            $mail->Password = "hukkahua";
            $mail->setFrom('transportprojectruet@gmail.com', 'Transport service');
            $mail->addAddress($to, $to_name);
            $mail->Subject = $subject;
            $mail->Body = $body;
            if (!$mail->send()) {
                echo 'Message was not sent.';
                echo 'Mailer error: ' . $mail->ErrorInfo;
            }
        }

        if (isset($_POST['head-approved'])) {
            $id = $_POST['id'];
            $q = "update application set status='head-approved' where application_id=$id";
            query_update($q);
        } else if (isset($_POST['approve'])) {
            $id = $_POST['id'];
            $q = "update application set status='approved' where application_id=$id";
            query_update($q);
        } else if (isset($_POST['assign-vehicle'])) {
            $id = $_POST['id'];
            $driver = $_POST['driver'];
            $helper = $_POST['helper'];
            $date = $_POST['date'] . ' ' . $_POST['time'];
            $vehicle_id = $_POST['vehicle_id'];
            $q = "update application set status='vehicle-assigned', driver='$driver', helper='$helper', vehicle_id=$vehicle_id, assigned_datetime='$date' where application_id=$id";

            query_update($q);

            $t = query_single_row('select users.email as email,users.name as name from application join users on application.user_id=users.id where application.application_id=' . $_GET['id']);
            send_email($t['email'], $t['name'], 'Reservation approved', 'Your application for reservation has been approved');
        } else if (isset($_POST['reject'])) {
            $id = $_POST['id'];
            $q = "update application set status='rejected' where application_id=$id";
            query_update($q);
        }

        $app = array();
        if ($_GET['id']) {
            $app = query_single_row('select * from application join users on application.user_id=users.id left join bus on bus.bus_id=application.vehicle_id where application_id=' . $_GET['id']);
        }

        $bus_list = query_result('select bus.* from bus where bus_id not in  (select vehicle_id from application where reserve_date_time between "'.$app['reserve_date_time'].'" and "'.$app['return_date_time'].'" and return_date_time between "'.$app['reserve_date_time'].'" and "'.$app['return_date_time'].'")');

        ?>
		<div class="row">
<div class=" col-sm-2"></div>
<div class="col-sm-8">
 <div id="application" style="margin-top:50px"  >
                    <div class="panel panel-danger">
                        <div class="panel-heading"><h1 style="text-align:center;color:black">View Application</h1> 
                            <div class="panel-title"></div>
 
                        </div>  
                        <div class="panel-body" >
 </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Name of departmental head(for official use):</td>
                            <td><?php echo $app['dept_head']; ?></td>
                        </tr>
                        <tr>
                            <td>Designation:</td>
                            <td><?php echo $app['head_desig']; ?></td>
                        </tr>
                        <tr>
                            <td>Reservation date</td>
                            <td><?php echo $app['reserve_date_time']; ?></td>
                        </tr>
                        <tr>
                            <td>Return date</td>
                            <td><?php echo $app['return_date_time']; ?></td>
                        </tr>
                        <tr>
                            <td>Destination</td>
                            <td><?php echo $app['destination']; ?></td>
                        </tr>
                        <tr>
                            <td>Reason</td>
                            <td><?php echo $app['reason']; ?></td>
                        </tr>
                        <tr>
                            <td>Depart from</td>
                            <td><?php echo $app['depart_from']; ?></td>
                        </tr>
                        <tr>
                            <td>Requested Vehicle type</td>
                            <td><?php echo ucfirst($app['vehicle_type']); ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><?php echo ucfirst($app['status']); ?></td>
                        </tr>

                        <?php if ($app['status'] == 'vehicle-assigned') { ?>
                            <tr>
                                <td>Vehicle no</td>
                                <td><?php echo $app['vehicle_no']; ?></td>
                            </tr>

                            <tr>
                                <td>Driver</td>
                                <td><?php echo $app['driver']; ?></td>
                            </tr>

                            <tr>
                                <td>Helper</td>
                                <td><?php echo $app['helper']; ?></td>
                            </tr>

                            <tr>
                                <td>Assigned date/time</td>
                                <td><?php echo $app['assigned_datetime']; ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
		</div>
        </div>
		</div>
        <br/>

        <?php
        if ($app['status'] == 'pending' && $user->hasPermission('dept_head')) {
            ?>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form method="post">
                        <input type="hidden"  name="id" value="<?php echo $app['application_id']; ?>">
                        <button type="submit" name="head-approved" value="head-approved">Forward to Admin</button>
                        <button type="submit" name="reject" value="reject">Reject</button>
                    </form>
                </div> 
            </div>
        <?php } ?>

        <?php
        if ($app['status'] == 'head-approved' && $user->hasPermission('admin')) {
            ?>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form method="post">
                        <input type="hidden"  name="id" value="<?php echo $app['application_id']; ?>">
                        <button type="submit" name="approve" value="approve">Approve</button>
                        <button type="submit" name="reject" value="reject">Reject</button>
                    </form>
                </div> 
            </div>
        <?php } ?>
        <?php
        if ($app['status'] == 'approved' && $user->hasPermission('branch_officer')) {
            ?>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                
                        <?php
                           if($bus_list->num_rows==0){
                                ?>
                                <h3 class="text-danger">Cannot reserve bus. <br/>No available bus found in the requested reservation period.</h3>
                                <br/>
                                <form method="post">
                                    <input type="hidden"  name="id" value="<?php echo $app['application_id']; ?>">
                                    <button type="submit" name="reject" value="reject">Reject</button>
                                </form>
                                <?php
                           }else{
                        ?>
                    <form method="post">
                        <input type="hidden"  name="id" value="<?php echo $app['application_id']; ?>">
                        <div class="form-group">
                            <label for="head_name">Vehicle no</label>
                            <select name="vehicle_id" id="vehicle_id">
                                <option >-- select a bus --</option>
                                <?php
                                $bus_list_ary = array();
                                while ($b = $bus_list->fetch_assoc()) {
                                    $bus_list_ary[$b['bus_id']] = array("driver" => $b['driver_name'], "helper" => $b['helper_name']);
                                    echo '<option value="' . $b['bus_id'] . '"> [' . $b['bus_type'] . '] ' . $b['vehicle_no'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="driver">Driver name:</label>
                            <input type="text" class="form-control" id="driver" name="driver">
                        </div>
                        <div class="form-group">
                            <label for="helper">Helper name </label>
                            <input type="text" class="form-control" id="helper" name="helper" >
                        </div>
                        <div class="form-group">
                            <label for="date2">Assigned date: </label>
                            <input type="date" class="form-control" id="date2" name="date">
                        </div>
                        <div class="form-group">
                            <label for="time2">Assigned time: </label>
                            <input type="time" class="form-control" id="time2" name="time">
                        </div>
                        <button type="submit" name="assign-vehicle" value="assign-vehicle">Assign Vehicle</button>

                    </form>
                           <?php } ?>
                </div> 
            </div>
        <?php } ?>
    </div>
</div>

</div>
<?php
require_once 'footer.php';
?>
<script>
    var vehicle_list = <?php echo json_encode($bus_list_ary); ?>;
    $("#vehicle_id").change(function (e) {
        var id = $("#vehicle_id").val();
        console.log(id);
        $("#driver").val(vehicle_list[id]['driver']);
        $("#helper").val(vehicle_list[id]['helper']);
    });
</script>
<?php
ob_end_flush(); // Initiate the output buffer
?>
</body>
</html>

