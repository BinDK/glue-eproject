<nav class="navbar navbar-expand navbar-expand-md navbar-dark bg-dark pb-1 d-flex justify-content-between">
  <div class="navbar-brand ">
    <a href="./" class="text text-muted text-decoration-none"><span style="letter-spacing: 4px;">SINGAPORE ZOO</span> </a>
    </div>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="nav-item text-white">
      <a href="#animals" class="btn btn-lg text-muted">Animals</a>
      <a href="#about" class="btn btn-lg text-muted">About us</a>
      <a href="#event" class="btn btn-lg text-muted">Events</a>
      <a href="#ticket" class="btn btn-lg text-muted">Ticket</a>
      <a href="#gallery" class="btn btn-lg text-muted">Gallery</a>
      <a href="#contact" class="btn btn-lg text-muted">Contact</a>
    </div>
</nav>
<!-- Slideshow - Carousel -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
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