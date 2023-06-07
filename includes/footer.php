</main>
<footer>
  <!-- footer section start -->
  <section class="footer_bg py-0 py-md-5 mt-5 mt-lg-0">


    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4">
          <img src="./assets/img/svg/footer_logo.svg" alt="footer-logo" />
          <p class="text-white">
            Make it as easy as possible to pay. Modular or combined with
            other services, our payment technologies ensure swift
            implementation.
          </p>
        </div>
        <div class="col-lg-8">
          <div class="row text-center">
            <div class="col-sm-6 col-lg-3 mt-3">
              <ul class="pl">
                <li class="text-white"> <b> Company </b></li>
                <li class="my-3">
                  <a href="https://omninos.shop/fracprop/Dashboard.php" class="text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="text-white">View</a>
                </li>
                <li class="my-3">
                  <a href="https://omninos.shop/fracprop/RentHome.php" class="text-white">Rent a Place</a>
                </li>
                <li>
                  <a href="#" class="text-white">Important Date</a>
                </li>
                <li class="mt-3">
                  <a href="#" class="text-white">View</a>
                </li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-5 mt-3">
              <ul class="pl text-center">
                <li class="text-white font-weight-500 font-weight-bolder">Usefull Links</li>
                <li class="my-3">
                  <a href="#" class="text-white">Terms and Conditions</a>
                </li>
                <li>
                  <a href="#" class="text-white">Privacy Policy</a>
                </li>
                <li class="my-3">
                  <a href="https://omninos.shop/fracprop/Blog.php" class="text-white">Blog</a>
                </li>
                <li>
                  <a href="#" class="text-white">Terms of Use</a>
                </li>
                <li class="my-3">
                  <a href="#" class="text-white">Customer compliant policy
                  </a>
                </li>
                </li>
                <li>
                  <a href="#" class="text-white">Anti-fraud policy
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-4 text-start rightttttt mt-3">
              <h4 class="text-white font-weight-bolder">Newsletter</h4>
              <h4 class="text-white font-weight-bolder ">Write your email<span style="color:#DE3131"
                  class="ms-2">*</span>
              </h4>
              <div class="fotterbtnn pt-3">
                <img class="ms-3" src="./assets/img/svg/email.svg" alt="email">
                <input type="email" placeholder="Email" style="outline: none; border: none;">
              </div>
              <div class="bg_subb mt-3 ">
                <a href="#" class="text-white">Subscribe</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-2 mb-4 ">
        <div class="fotterimagessss" style="width:80%;">
          <img src="./assets/img/svg/facebook.svg" alt="facebook" class="fotticonss" />
          <img class="mx-md-2 mx-1" src="./assets/img/svg/twitter.svg " alt="twitter" class="fotticonss" />
          <img src="./assets/img/svg/insta.svg" alt="insta" class="fotticonss" />
          <img class="mx-1 mx-md-2" src="./assets/img/svg/youtube.svg" alt="youtube" class="fotticonss" />
          <img src="./assets/img/svg/linkdin.svg" alt="linkdin" class="fotticonss" />
        </div>
      </div>
    </div>

  </section>
</footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- JQUERY-MIN-JS-LINK -->
   <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- SLICK-MIN-JS-LINK -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script type="text/javascript">
      $(document).ready(function () {
        $(".myslick-slider").slick({
          autoplay:true,
          dots: true,
          infinite: true,
          speed: 500,
          slidesToShow: 4,
          slidesToScroll: 1,
          nextArrow: ".next",
          prevArrow: ".prev",
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
              },
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ],
        });
      });
      </script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>




<!-- 

<div class="container">
  <div class="row">
    <div class="col-md-4 ">
      <img src="./assets/img/svg/footer_logo.svg" alt="footer-logo" />
      <p class="text-white">
        Make it as easy as possible to pay. Modular or combined with
        other services, our payment technologies ensure swift
        implementation.
      </p>
    </div>
    <div class="col-md-2 text-white fw-500">
      <h2>Company</h2>
      <ul>
        <li>Dashboard</li>
        <li>View</li>
        <li>Rent a Place</li>
        <li>Important Date</li>
      </ul>
    </div>
    <div class="col-md-3  text-white">
      <h2>Usefull Links</h2>
      <ul style=" font-size:17px;">
        <li>Terms and Conditions</li>
        <li>Privacy Policy</li>
        <li>Blog</li>
        <li>Terms of Use</li>
        <li>Customer compliant policy </li>
        <li>Anti-fraud policy</li>
      </ul>
    </div>
    <div class="col-md-3 text-white">
      <h3>Newsletter <br> Write your email <span style="color:red;">*</span></h3>
    </div>
  </div>
</div> -->