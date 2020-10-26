<?php 
require_once 'admin/connect.php';
$result = mysqli_query($con, 'SELECT * FROM db_event where date >= curdate() order by date limit 3');

 ?>
<div class="container-fluid " style="background-color: rgba(133,240,234,0.2) !important;" id="event">
    <span class="text-nowrap text-left m-0 p-0 " style="font-size: 30px"><a href="event_all_detail.php">Event</a></span>
</div>
<div class="container-fluid">
        <div class="row m-auto pt-5 pb-5">
            <?php while ($event = mysqli_fetch_array($result)) { ?>
            <div class="col col-md-4" align="center">
                <h3 class="text text-primary" style="color: #9541A3 !important;"><b>
                        <?= $event['title'] ?></b></h3>
                    <img src="img/eventUpload/<?= $event['event_photo'] ?>" alt="John" class="img-fluid">
                    <div >
                        <p>
                            <?= $event['description'] ?>
                        </p>
                        <a class="infoEvent btn btn-block btn-secondary" href="event_detail.php?id=<?= $event['id'] ?>">Detail</a>
                    </div>
            </div>
            <?php } ?>
            <div class="w-100"></div>
        </div>
</div>