<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/style1.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/style2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/style3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/search-btn.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/test.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/shop-card.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/xuhuong.css">

    <script>
      window.console = window.console || function(t) {};
    </script>
      <script>
      if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
      }
    </script>
    
    <title>Home</title>
</head>
<body>

    <section> 
      <div class="text-form">
        <h2 style="font-weight: 400;font-size: 45px;">Everything is designed.</h2>
        <div class="slogan">
          <h2 style="font-weight: 400;font-size: 45px;">Few things are</h2>
        <h2 id="slo-1" style="font-weight:bold ;font-size: 45px;">Design better.</h2>
        </div>
      </div>  
    </section>


    <div class="page-wrap">

  <div id="home-slider">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide-one">
          <div class="swiper-image" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left swiper-image-one">
              <h1>A <span class="emphasis">Simple style</span>. <br><span>Of Elegance.</span></h1>
              <p>Chapter I</p>
            </div>
          </div>
          <div class="swiper-image" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right swiper-image-two">
              <p class="paragraph">
                Minimalism l?? phong c??ch th??? hi???n s??? ??a d???ng c???a ngh??? thu???t, ?????c bi???t trong ngh??? thu???t th??? gi??c v?? ??m nh???c, ??? ????y ph???m ???????c y??u c???u thi???t k??? t???i gi???n nh???t c?? th???.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-two">
          <div class="swiper-image" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left swiper-image-three">
              <h1>An <span class="emphasis">architecture</span>. <br><span>The minimalist life.</span></h1>
              <p>Chapter II</p>
            </div>
          </div>
          <div class="swiper-image" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right swiper-image-four">
              <p class="paragraph">
                N???i th???t mang ???????ng n??t t???i thi???u, ??t chi ti???t, v?? gi???m ?????i ??a s??? l?????ng, ?????c bi???t m???i chi ti???t ?????u mang nh???ng ?? ngh??a nh???t ?????nh nh???m t???o ra kh??ng gian h??i h??a v?? th??ng tho??ng nh???t.
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-three">
          <div class="swiper-image" data-swiper-parallax-y="-20%">
            <div class="swiper-image-inner swiper-image-left swiper-image-five">
              <h1>New <span class="emphasis">Trend</span>. <br><span>Of Perfection.</span></h1>
              <p>Chapter III</p>
            </div>
          </div>
          <div class="swiper-image" data-swiper-parallax-y="35%">
            <div class="swiper-image-inner swiper-image-right swiper-image-six">
              <p class="paragraph">
                N??i cung c???p c??c m???c h??ng n???i th???t,n??i s??ng t???o n??n phong c??ch t???i gi???n c???a b???n, ????n gi???n t???n c??ng, ????n gi???n h???t m???c c?? th???.
              </p>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

</div>


    <section>
      <div class="container">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a id="create-content" class="nav-link active" href="#content-pro1">xu h?????ng</a>
            </li>
            <li class="nav-item">
                <a id="create-content" class="nav-link active" href="#content-pro2">N???i b???t</a>
            </li>
            <li class="nav-item">
                <a id="create-content" class="nav-link active" href="#">Trang tr??</a>
            </li>
            <li class="nav-item">
              <a id="create-content" class="nav-link active" href="#">Phong c??ch</a>
            </li>
            <li class="nav-item">
              <a id="create-content" class="nav-link active" href="#">Design</a>
            </li>
        </ul>
      </div>
    </section>

    <div class="main">
      <div class="product" style="height: 1530px;  width: 1560px;">
        <div class="container-pro">
          <li class="produt-1" style = "padding: 0px 30px 30px 0px; left: 0px; top: 0px;">
            <a href=""><img id="img_pro" src="<?php echo base_url();?>img/31.png" alt=""></a> 
          </li>
        </div>
        <div class="container-pro2">
          <li class="produt-2" style = "padding: 0px 30px 30px 0px; left: 530px; top: 0px;">
            <a href=""><img id="img_pro" src="<?php echo base_url();?>img/32.png" alt=""></a> 
          </li>
        </div>
        <div class="container-pro3">
          <li class="produt-3" style = "padding: 0px 30px 30px 0px; left: 1060px; top: 0px;">
            <a href=""><img id="img_pro" src="<?php echo base_url();?>img/33.png" alt=""></a> 
          </li>
        </div>
        <div class="container-pro4">
          <li class="produt-3" style = "padding: 0px 30px 30px 0px; left: 0x; top: 428.98px;">
            <a href=""><img id="img_pro" src="<?php echo base_url();?>img/34.png" alt=""></a> 
          </li>
        </div>
        <div class="container-pro5">
          <li class="produt-3" style = "padding: 0px 30px 30px 0px; left: 530px; top: 530px;">
            <a href=""><img id="img_pro" src="<?php echo base_url();?>img/35.png" alt=""></a> 
         </li>
        </div>
        <div class="container-pro6">
          <li class="produt-3" style = "padding: 0px 30px 30px 0px; left: 1060px; top: 780px;">
            <a href=""><img id="img_pro" src="<?php echo base_url();?>img/36.png" alt=""></a> 
          </li>
        </div>
        <div class="container-pro7">
          <li class="produt-3" style = "padding: 0px 30px 30px 0px; left: 530px; top: 1060px;">
            <a href=""><img id="img_pro" src="<?php echo base_url();?>img/37.png" alt=""></a> 
          </li>
        </div>
      </div>
    </div>

    <div class="text-pro" style="text-align: center; font-size: 30px; font-weight: bold;">
      <p id="content-pro1" style="font-size: 40px;">Xu h?????ng</p>
    </div>

    <section class="xuhuong_1">
    <div class="main_1">
      <ul class="cards_1">
        <li class="cards_item_1">
          <div class="card_1">
            <div class="card_image_1"><img src="https://64.media.tumblr.com/7bb4882118547337504c2dbccecb99e4/tumblr_mzx6z4zO941snvtspo1_640.jpg"></div>
            <div class="card_content_1">
              <h2 class="card_title_1">Phong c??ch thi???t k??? t???i gi???n</h2>
              <p class="card_text_1">Tr??o l??u thi???t k??? ????n gi???n ???????c m?? t??? v???i nhi???u t??n g???i kh??c nhau...</p>
              <button class="btn card_btn">Read More</button>
            </div>
          </div>
        </li>
        <li class="cards_item_1">
          <div class="card_1">
            <div class="card_image_1"><img src="https://64.media.tumblr.com/9eacbbd585fee847604f46685bb4848a/tumblr_n4bt9xnrGZ1rg18hao1_640.jpg"></div>
            <div class="card_content_1">
              <h2 class="card_title_1">Ph??p tr???c gi???i</h2>
              <p class="card_text_1">???????c hi???u l?? ????n gi???n h??a trong phong c??ch thi???t k??? ??? nhi???u l??nh v???c kh??c nhau...</p>
              <button class="btn card_btn">Read More</button>
            </div>
          </div>
        </li>
        <li class="cards_item_1">
          <div class="card_1">
            <div class="card_image_1"><img src="https://64.media.tumblr.com/8255971073f4c7deb39f38c59ec4700b/tumblr_nnso5bJRqA1sh1x48o1_640.jpg"></div>
            <div class="card_content_1">
              <h2 class="card_title_1">T???i gi???n trong thi???t k???</h2>
              <p class="card_text_1">lo???i b??? nh???ng thi???t k??? r?????m r??, nh???ng m??u s???c kh??ng c???n thi???t...</p>
              <button class="btn card_btn">Read More</button>
            </div>
          </div>
        </li>
        <li class="cards_item_1">
          <div class="card_1">
            <div class="card_image_1"><img src="https://64.media.tumblr.com/901cb9e352f5ad029d2d0172c277696c/tumblr_nl4g6y3e4a1ttxgi7o1_640.jpg"></div>
            <div class="card_content_1">
              <h2 class="card_title_1">Phong c??ch trong n???i th???t</h2>
              <p class="card_text_1">S??? m???nh m???, hi???n ?????i v?? r?? r??ng v???i b??? c???c l?? c??c ???????ng n??t, m???ng kh???i...</p>
              <button class="btn card_btn">Read More</button>
            </div>
          </div>
        </li>
        <li class="cards_item_1">
          <div class="card_1">
            <div class="card_image_1"><img src="https://64.media.tumblr.com/7a050087950fbf29b233664083084ce5/tumblr_mvxkg3hBtN1r97ntyo1_540.jpg"></div>
            <div class="card_content_1">
              <h2 class="card_title_1">C??u n??i c???a Albert Einstein</h2>
              <p class="card_text_1">???Make things as simple as possible but no simpler.??? - ???Th???c hi???n nh???ng ??i???u c??ng ????n gi???n..."</p>
              <button class="btn card_btn">Read More</button>
            </div>
          </div>
        </li>
        <li class="cards_item_1">
          <div class="card_1">
            <div class="card_image_1"><img src="https://64.media.tumblr.com/453c5b2c594f9cc65d677c488db223ba/tumblr_mworqixPkT1rg18hao1_640.jpg"></div>
            <div class="card_content_1">
              <h2 class="card_title_1">T??ng m??u ch??nh Minimalism</h2>
              <p class="card_text_1">Ph???i h???p c??c lo???i m??u s???c t????ng quan, ?????ng ??i???u t???o n??n s??? t????ng ph???n ...</p>
              <button class="btn card_btn">Read More</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
    </section>

    <div class="text-pro" style="text-align: center; font-size: 30px; font-weight: bold;">
      <p id="content-pro2" style="font-size: 40px;">S???n ph???m n???i b???t</p>
    </div>
      <div class="card-group">
        <div class="card">
            <section style="background-color: #eee;">
                <div class="container py-5">
                  <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                      <div class="card text-black">
                        <img src="https://i.pinimg.com/564x/94/c3/08/94c308d6d3703a9dc52d644074dee133.jpg"
                          class="card-img-top" alt="Apple Computer" />
                        <div class="card-body">
                          <div class="text-center">
                            <h5 class="card-title">Believing is seeing</h5>
                            <p class="text-muted mb-4">S???n ph???m 1</p>
                          </div>
                          <div>
                          </div>
                          <div class="d-flex justify-content-between total font-weight-bold mt-4">
                            <span>Total</span><span>100.000 <sup>??</sup></span>
                          </div>
                        </div>
                        <div class="group-button">
                          <div class="baobutton">
                            <div class="button">Buy now</div>
                          </div>
                          <div class="baobutton">
                            <div class="button">Add to cart</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        </div>
        <div class="card">
          <section style="background-color: #eee;">
              <div class="container py-5">
                <div class="row justify-content-center">
                  <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card text-black">
                      <img src="https://i.pinimg.com/564x/03/b1/e7/03b1e71542eeac5e2b3ddda359fb2841.jpg"
                        class="card-img-top" alt="Apple Computer" />
                      <div class="card-body">
                        <div class="text-center">
                          <h5 class="card-title">Believing is seeing</h5>
                          <p class="text-muted mb-4">S???n ph???m 2</p>
                        </div>
                        <div>
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4">
                          <span>Total</span><span>100.000 <sup>??</sup></span>
                        </div>
                      </div>
                      <div class="group-button">
                        <div class="baobutton">
                          <div class="button">Buy now</div>
                        </div>
                        <div class="baobutton">
                          <div class="button">Add to cart</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
      </div>
      <div class="card">
        <section style="background-color: #eee;">
            <div class="container py-5">
              <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                  <div class="card text-black">
                    <img src="https://i.pinimg.com/originals/a6/44/ce/a644ce3f0c506cc11d0e6f687cff9c53.png"
                      class="card-img-top" alt="Apple Computer" />
                    <div class="card-body">
                      <div class="text-center">
                        <h5 class="card-title">Believing is seeing</h5>
                        <p class="text-muted mb-4">S???n ph???m 3</p>
                      </div>
                      <div>
                      </div>
                      <div class="d-flex justify-content-between total font-weight-bold mt-4">
                        <span>Total</span><span>100.000 <sup>??</sup></span>
                      </div>
                    </div>
                    <div class="group-button">
                      <div class="baobutton">
                        <div class="button">Buy now</div>
                      </div>
                      <div class="baobutton">
                        <div class="button">Add to cart</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
    <div class="card">
      <section style="background-color: #eee;">
          <div class="container py-5">
            <div class="row justify-content-center">
              <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card text-black">
                  <img src="https://i.pinimg.com/564x/6a/82/69/6a82690df768f401e230037a93d8b41f.jpg"
                    class="card-img-top" alt="Apple Computer" />
                  <div class="card-body">
                    <div class="text-center">
                      <h5 class="card-title">Believing is seeing</h5>
                      <p class="text-muted mb-4">S???n ph???m 4</p>
                    </div>
                    <div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4">
                      <span>Total</span><span>100.000 <sup>??</sup></span>
                    </div>
                  </div>
                  <div class="group-button">
                    <div class="baobutton">
                      <div class="button">Buy now</div>
                    </div>
                    <div class="baobutton">
                      <div class="button">Add to cart</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  </div>
      </div>


      


      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">NoiThatHH.com <i> </i> The website is designed for the purpose of reporting and displaying the overall structure of the site. The website is expected to be completed at the end of September. Code with HTML, CSS, JavaScript, Bootstrap, etc. will also develop more in the php and MySQL languages in the future..</p>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li><a href="">B??n</a></li>
                <li><a href="">Gh???</a></li>
                <li><a href="">T???</a></li>
                <li><a href="">Gi?????ng</a></li>
                <li><a href="">Khay ?????ng</a></li>
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Contribute</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
           <a href="#">NoiThatHH</a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li id="block-icon" ><a id="block" class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li id="block-icon"><a id="block" class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li id="block-icon"><a id="block" class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li id="block-icon"><a id="block" class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
        
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
  <script src="https://kit.fontawesome.com/a80a9def81.js" crossorigin="anonymous"></script>
  <script src="<?php echo base_url();?>/JS/main.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js'></script>
      <script id="rendered-js" >
var mySwiper = new Swiper(".swiper-container", {
  direction: "vertical",
  loop: true,
  pagination: ".swiper-pagination",
  grabCursor: true,
  speed: 1000,
  paginationClickable: true,
  parallax: true,
  autoplay: false,
  effect: "slide",
  mousewheelControl: 1 });
//# sourceURL=pen.js
    </script>
<script>
  $(document).ready(function(){
    $(window).scroll(function(){
      if ($(this).scrollTop()) {
        $('header').addClass('menu-con');
      } else {
        $('header').removeClass('menu-con');
      };
    });
  });
</script>

<script id="rendered-js" >
  (function () {
  
    $("#cart-shopping").on("click", function () {
      $(".shopping_btn").fadeToggle("fast");
    });
  })();
  //# sourceURL=pen.js
      </script>
</body>
</html>