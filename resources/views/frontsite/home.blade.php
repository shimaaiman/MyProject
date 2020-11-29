@section('page title')
    Home Page   
@endsection

@extends('frontsite.layouts.master'); 

@section('content')
<div class="tm-main">
  <div class="container">
   <div class="row tm-albums-container grid">
          <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
            <figure class="effect-sadie">
              <img src="img/insertion-260x390-01.jpg" alt="Image" class="img-fluid">
              <figcaption>
                <h2>First Album</h2>
                <p>Rollover text and description text goes here over mouse over...</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
            <figure class="effect-sadie">
              <img src="img/insertion-260x390-02.jpg" alt="Image" class="img-fluid">
              <figcaption>
                <h2>Album Two</h2>
                <p>Maecenas iaculis et turpis et iaculis. Aenean at volutpat diam.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
            <figure class="effect-sadie">
              <img src="img/insertion-260x390-03.jpg" alt="Image" class="img-fluid">
              <figcaption>
                <h2>Third Album</h2>
                <p>Vivamus eget elit purus. Nullam consectetur porttitor elementum.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
            <figure class="effect-sadie">
              <img src="img/insertion-260x390-04.jpg" alt="Image" class="img-fluid">
              <figcaption>
                <h2>Album Four</h2>
                <p>Praesent nec feugiat dolor, elementum mollis purus. Etiam faucibus.</p>
              </figcaption>
            </figure>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="tm-tag-line">
            <h2 class="tm-tag-line-title">Music is your powerful energy.</h2>
            </div>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-xl-12">
            <div class="media-boxes">
              <div class="media">
                <img src="img/insertion-140x140-01.jpg" alt="Image" class="mr-3">
                <div class="media-body tm-bg-gray">
                  <div class="tm-description-box">
                    <h5 class="tm-text-blue">Vivamus eget urna vitae ante</h5>
                    <p class="mb-0">Insertion HTML Template includes 3 different pages. You can use this layout for your website. Please tell your friends about <a href="https://plus.google.com/+tooplate" target="_parent">Tooplate</a>. Thank you.</p>
                  </div>
                  <div class="tm-buy-box">
                    <a href="#" class="tm-bg-blue tm-text-white tm-buy">buy</a>
                    <span class="tm-text-blue tm-price-tag">$5.50</span>
                  </div>
                </div>
              </div>

              <div class="media">
                <img src="img/insertion-140x140-02.jpg" alt="Image" class="mr-3">
                <div class="media-body tm-bg-pink-light">
                  <div class="tm-description-box">
                    <h5 class="tm-text-pink">Proin fermentum sapien sed nisl</h5>
                    <p class="mb-0">Donec est felis, posuere viverra dapibus ac, pretium vel libero. Aliquam consectetur, arcu eget euismod congue, tortor metus vehicula.</p>
                  </div>
                  <div class="tm-buy-box">
                    <a href="#" class="tm-bg-pink tm-text-white tm-buy">buy</a>
                    <span class="tm-text-pink tm-price-tag">$7.25</span>
                  </div>
                </div>
              </div>

              <div class="media">
                <img src="img/insertion-140x140-03.jpg" alt="Image" class="mr-3">
                <div class="media-body tm-bg-gray">
                  <div class="tm-description-box">
                    <h5 class="tm-text-blue">Quisque dignissim porta nunc</h5>
                    <p class="mb-0">In neque felis, fringilla vel orci ut, sodales consectetur purus. Vivamus eget urna vitae ante pellentesque iaculis. Praesent sit amet.</p>
                  </div>
                  <div class="tm-buy-box">
                    <a href="#" class="tm-bg-blue tm-text-white tm-buy">buy</a>
                    <span class="tm-text-blue tm-price-tag">$6.80</span>
                  </div>
                </div>
              </div>

              <div class="media">
                <img src="img/insertion-140x140-04.jpg" alt="Image" class="mr-3">
                <div class="media-body tm-bg-pink-light">
                  <div class="tm-description-box">
                    <h5 class="tm-text-pink">Vestibulum mattis quam sodales</h5>
                    <p class="mb-0">Curabitur id tempor orci. Fusce efficitur in enim sit amet sodales. Proin id gravida leo. Phasellus non quam et justo faucibus rhoncus.</p>
                  </div>
                  <div class="tm-buy-box">
                    <a href="#" class="tm-bg-pink tm-text-white tm-buy">buy</a>
                    <span class="tm-text-pink tm-price-tag">$3.75</span>
                  </div>
                </div>
              </div>

              <div class="media">
                <img src="img/insertion-140x140-05.jpg" alt="Image" class="mr-3">
                <div class="media-body tm-bg-gray">
                  <div class="tm-description-box">
                    <h5 class="tm-text-blue">Vestibulum mattis quam sodales</h5>
                    <p class="mb-0">Maecenas sit amet nibh faucibus, tincidunt nisl sit amet, elementum eros. Fusce congue ligula gravida lorem lacinia.</p>
                  </div>
                  <div class="tm-buy-box">
                    <a href="#" class="tm-bg-blue tm-text-white tm-buy">buy</a>
                    <span class="tm-text-blue tm-price-tag">$5.25</span>
                  </div>
                </div>
              </div>
            </div> <!-- media-boxes -->
          </div>
        </div>

        <div class="row tm-mb-big tm-subscribe-row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 tm-bg-gray tm-subscribe-form">
            <h3 class="tm-text-pink tm-mb-30">Subscribe our updates!</h3>
            <p class="tm-mb-30">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi semper, ligula et pretium porttitor, leo orci accumsan ligula.</p>
            <form action="index.html" method="POST">
              <div class="form-group mb-0">
                <input type="text" class="form-control tm-subscribe-input" placeholder="Your Email">
                <input type="submit" value="Submit" class="tm-bg-pink tm-text-white d-block ml-auto tm-subscribe-btn">
              </div>
            </form>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 img-fluid pl-0 tm-subscribe-img"></div>
        </div>
  </div>
</div>

@endsection