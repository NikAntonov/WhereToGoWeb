<?php require "/includes/config.php";
?>
<!-- Modal -->
<!--<div class="modal fade" id="myModal" role="dialog">-->
<!--    <div class="modal-dialog">-->

        <?php

        $events = mysqli_query($connection, "SELECT * FROM `place` WHERE `id`= ".(int)$_POST['EID']);
        ?>

        <!-- Modal content-->
        <div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body edit-content">
                <h1>The ID Selected is <?php echo $_POST['EID'];?></h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--                <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--                <h4 class="modal-title">Modal Header</h4>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                --><?php
//                if (mysqli_num_rows($events)<=0)
//                {
//                    ?>
<!--                    <h1>Место не найдено</h1>-->
<!--                    --><?php
//                }else
//                {
//                    $event=mysqli_fetch_assoc($events);
//                    ?>
<!--                    <form action="#" method="post">-->
<!--                        First name:<br>-->
<!--                        <input type="text" name="firstname" value="--><?php //echo $event['name']; ?><!--">-->
<!--                        <br>-->
<!--                        Last name:<br>-->
<!--                        <input type="text" name="lastname" value="Mouse">-->
<!--                        <br><br>-->
<!--                        <input type="submit" value="Submit">-->
<!--                    </form>-->
<!--                    --><?php
//                }
//                ?>
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
</div>
