<?php 
require_once 'admin/connect.php';
$result = mysqli_query($con, 'SELECT * FROM db_event where date >= curdate() order by date limit 3');

 ?>
<div class="container-fluid " style="background-color: rgba(133,240,234,0.2) !important;" id="ticket">
    <span class="text-nowrap text-left m-0 p-0 " style="font-size: 30px">Event</span>
</div>
<div class="container-fluid" style="background: url('img/eventBackground.jpg') no-repeat center center/cover; height: 550px">
    <div class="container pl-0 pr-0 " style="padding-top: 100px; max-width: 80%;">
        <div class="row-event">
            <?php while ($event = mysqli_fetch_array($result)) { ?>
            <div class="col">
                <h3 class="text text-primary text-center" style="color: #9541A3 !important;"><b>
                        <?= $event['title'] ?></b></h3>
                <div class="hovereffect">
                    <img src="img/eventUpload/<?= $event['event_photo'] ?>" alt="John" style="width:400px; height: 290px;">
                    <div class="overlay">
                        <p>
                            <?= $event['description'] ?>
                        </p>
                        <a class="infoEvent" href="event_detail.php?id=<?= $event['id'] ?>">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<style type="text/css">
.hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
}

.hovereffect .overlay {
    width: 400px;
    height: 290px;
    position: absolute;
    overflow: hidden;
    left: 0;
    background-color: rgba(255, 255, 255, 0.7);
    top: -200px;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: all 0.1s ease-out 0.5s;
    transition: all 0.1s ease-out 0.5s;
}

.hovereffect:hover .overlay {
    opacity: 1;
    filter: alpha(opacity=100);
    top: 0px;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
}

.hovereffect img {
    display: block;
    position: relative;
}

.hovereffect p {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 17px;
    padding: 10px;
    background: rgba(0, 0, 0, 0.6);
    -webkit-transform: translateY(-200px);
    -ms-transform: translateY(-200px);
    transform: translateY(-200px);
    -webkit-transition: all ease-in-out 0.1s;
    transition: all ease-in-out 0.1s;
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

.hovereffect:hover p {
    -webkit-transform: translateY(0px);
    -ms-transform: translateY(0px);
    transform: translateY(0px);
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

.hovereffect a.infoEvent {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    text-transform: uppercase;
    margin: 50px 0 0 0;
    background-color: transparent;
    -webkit-transform: translateY(-200px);
    -ms-transform: translateY(-200px);
    transform: translateY(-200px);
    color: #000;
    border: 1px solid #000;
    -webkit-transition: all ease-in-out 0.3s;
    transition: all ease-in-out 0.3s;
}

.hovereffect a.infoEvent:hover {
    box-shadow: 0 0 5px #fff;
}

.hovereffect:hover a.infoEvent {
    -webkit-transform: translateY(0px);
    -ms-transform: translateY(0px);
    transform: translateY(0px);
    box-shadow: 0 0 5px #000;
    color: #000;
    border: 1px solid #000;
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}
</style>