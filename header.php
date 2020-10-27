<nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-1 d-flex justify-content-between">
    <div class="navbar-brand ">
        <a href="./" class="text text-muted text-decoration-none"><span style="letter-spacing: 4px;"><span class="text-white">SINGAPORE CENTRAL</span> ZOO</span> </a>
    </div>
    <button class="navbar-toggler" data-toggle="collapse" id="bars" data-target="#menu"><span class="navbar-toggler-icon"></span></button>
    <ul class="nav navbar-nav collapse navbar-collapse" id="menu">
        <li class="nav-item"><a href="#animals" class="nav-link btn btn-lg text-muted">Animals</a></li>
        <li class="nav-item"><a href="#about" class="nav-link btn btn-lg text-muted">About us</a></li>
        <li class="nav-item"><a href="#event" class="nav-link btn btn-lg text-muted">Events</a></li>
        <li class="nav-item"><a href="#ticket" class="nav-link btn btn-lg text-muted">Ticket</a></li>
        <li class="nav-item"><a href="#gallery" class="nav-link btn btn-lg text-muted">Gallery</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link btn btn-lg text-muted">Contact</a></li>
    </ul>
</nav>

<!-- Slideshow - Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<!--   <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner  ">
    <div class="carousel-item  active">
      <img src="img/avatar1.jpg" class="d-block w-100" height="600" alt="Ask the dev for picture">
    </div>
    <div class="carousel-item">
      <img src="img/avatar5.jpg" class="d-block w-100" height="600" alt="Ask the dev for picture">
    </div>
    <div class="carousel-item">
      <img src="img/avatar6.jpg" class="d-block w-100" height="600" alt="Ask the dev for picture">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<style>
  .btn:hover{
    color: black !important;
    background-color: #fff !important;
  }
  .btn.btn-lg:active{
  color: white !important;
}
.btn.btn-lg:focus{
  /* backgr */
  color: white !important;
  border-color: transparent !important;
  background-color: transparent !important;
  outline: 0 !important;
  box-shadow: 0 0 0 0 !important;
}
.text:hover{
  color: #ccc !important;
}
</style>
<script>
    $('.btn').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
    });
</script>