        <?php
            if($user->hasPermission('faculty') || $user->hasPermission('admin')){
                echo "<li><a href=result_input.php>Insert Marks</a></li>";
            } else{
                echo "<li><a href=result_show.php>See Results</a></li>";
            }
            if($user->hasPermission('admin')){
                echo "<li><a href=result_update.php>Update Marks</a></li>";
                echo "<li><a href=result_publish.php>Publish Result</a></li>";
            }

        ?>