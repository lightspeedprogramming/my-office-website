<<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
  <style>
    .left
    {
      margin-top: 40px;
      margin-bottom: 40px;
      padding: 30px;
    }

    .left .title
    {
      text-transform: uppercase;
      font-family: Lucida Handwriting;

      font-size: 20px;
      color: #cb2027;
      
    }

    .left .heading-wrap h2
    {
          font-family: 'Raleway', sans-serif;
          color: #464646;
          font-size: 23px;
          line-height: 39px;
          font-style: normal;
          font-weight: 800;
          letter-spacing: 0px;
          text-transform: uppercase;
          margin-bottom: 15px;
    }

    .left .para-wrap p
    {
      font-weight: 100px;
    }

    .image-wrap
    {
      margin-top: 40px;
      margin-bottom: 40px;
      padding: 30px;
    }
  </style>
</head>
<body>

</body>
</html>

<?php
  include 'header.php';
?>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" style="height: 42vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height: 42vh;">
            <div class="carousel-background"><img src="img/about-us-banner.jpg" alt="" class="img-fluid"></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>WHO WE ARE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      two column section
    ============================-->

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="left" >
            <h3 class="title">about us</h3>
            
            <div class="heading-wrap">
              <h2>enterprise mobile app development company</h2>
            </div>

            <div class="para-wrap">
              <p>xyz is one of the best and innovative Enterprise Mobile App Development Company with its roots in xxx, xyz, serving small and large businesses across the country, delivering expert and cost-effective services and solutions. We bring together engaging design, effective technology and right marketing strategies to help you achieve your business goals.  We design and develop hybrid and native mobile apps so that they can run on specific platforms perfectly on the selected devices.</p>

              <p>
                We’re passionate about what we do and have been recognized for the dedication we display. We are a team of immensely proficient, competent, and young dynamic developers, designers, strategists and project managers, who continually work towards providing the world-class services in developing the mobile applications. We gain a deep understanding of your brand, your products, and your customers, and use that knowledge to make thousands of decisions that make your customers love you.
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="image-wrap">
            <img src="img/mobile-app-page.png" class="img-fluid">
          </div>
        </div>

      </div>
    </div>

    <!-- # two column section -->

    <!--==========================
      About Section
    ============================-->
    <section id="services" style="background-color: #f7f7f7;">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fas fa-eye"></i></div>
            <h4 class="title">our vision</h4>
            <p class="description">To revolutionize online presence and help our clients reach their elite layer of dreams.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fas fa-gem"></i></div>
            <h4 class="title">our mission</h4>
            <p class="description">The balance of innovation, technology and strategy to define perfection</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="fas fa-award"></i></div>
            <h4 class="title">why us</h4>
            <p class="description">xyz is always willing to go the extra mile that brings out the best business relationships</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

   <?php
    include("call-to-action.php");
   ?>

  </main>

  <!--==========================
    Footer
  ============================-->
  <?php
    include("footer.php");
  ?>