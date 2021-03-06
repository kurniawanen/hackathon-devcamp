
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Places | Directory Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Google fonts - Vidaloka-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vidaloka">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/places/1-1-2/css/style.default.css" id="theme-stylesheet">
    <!-- Fancy Box-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/@fancyapps/fancybox/jquery.fancybox.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/places/1-1-2/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/favicon.ico">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/places/1-1-2/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/places/1-1-2/css/custom-fonticons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="content-holder d-flex justify-content-between">
            <div class="info d-flex">
              <div class="dropdowns d-flex">
                <div class="dropdown"><a id="currency" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
                  <div aria-labelledby="currency" class="dropdown-menu"><a href="#" class="dropdown-item">USD</a><a href="#" class="dropdown-item">EUR</a><a href="#" class="dropdown-item">JPY</a></div>
                </div>
                <div class="dropdown"><a id="language" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN<i class="fa fa-angle-down"></i></a>
                  <div aria-labelledby="language" class="dropdown-menu"><a href="#" class="dropdown-item">EN</a><a href="#" class="dropdown-item">ES</a><a href="#" class="dropdown-item">FR</a></div>
                </div>
              </div>
              <div class="contact d-flex">
                <p><a href="mailto:info@company.com"> <i class="fa fa-envelope-o text-primary"></i><span class="d-none d-md-inline">info@company.com</span></a></p>
                <p> <i class="fa fa-phone text-primary"></i><span class="d-none d-md-inline">020 123-456-789</span></p>
              </div>
            </div>
            <div class="CTAs"><a href="#" class="login"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline">Login</span></a><a href="#" class="login"> <i class="fa fa-user"></i><span class="d-none d-md-inline">Register</span></a></div>
          </div>
        </div>
      </div>
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- Navbar Brand --><a href="index.html" class="navbar-brand"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/logo.png" alt="..."></a>
          <!-- Toggle Button-->
          <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span>Menu</span><i class="fa fa-bars"></i></button>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <!-- Search-->
              <li class="nav-item"><a href="index.html" class="nav-link active">Home</a>
              </li>
              <li class="nav-item"><a href="category.html" class="nav-link">Listings             </a>
              </li>
              <li class="nav-item dropdown"><a id="navbarDropdownMenuLink" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pages</a>
                <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu"><a href="detail.html" class="dropdown-item">Listing detail</a><a href="post.html" class="dropdown-item">Blog post</a><a href="text.html" class="dropdown-item">Text page</a><a href="404.html" class="dropdown-item">404 - Not found</a><a href="contact.html" class="dropdown-item">Contact</a></div>
              </li>
              <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a>
              </li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a>
              </li>
            </ul><a href="#" class="btn navbar-btn btn-outline-primary mt-3 mt-lg-0 ml-lg-3">Submit a Listing</a>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
    <section style="background: url('https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/hero-bg.jpg') no-repeat;" class="hero d-flex align-items-center">
      <div class="container">
        <p class="small-text-hero"><i class="icon-localizer text-primary mr-1"></i>Lorem ipsum <span class="text-primary">dolor sit</span> amet</p>
        <h1>Let's <span class="text-primary">go    </span> anywhere</h1>
        <p class="text-hero">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <div class="search-bar">
          <form action="#">
            <div class="row">
              <div class="form-group col-lg-4">
                <input type="search" name="search" placeholder="What are you searching for?">
              </div>
              <div class="form-group col-lg-3">
                <input type="text" name="location" placeholder="Location" id="location">
                <label for="location" class="location"><i class="fa fa-dot-circle-o"></i></label>
              </div>
              <div class="form-group col-lg-3">
                <select title="Categories &lt;i class=&quot;fa fa-angle-down&quot;&gt;&lt;/i&gt;" class="listing-categories">
                  <option value="small">Restaurants</option>
                  <option value="medium">Hotels</option>
                  <option value="large">Cafes</option>
                  <option value="x-large">Garages</option>
                </select>
              </div>
              <div class="form-group col-lg-2">
                <input type="submit" value="Search" class="submit">
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- Features Section-->
    <section class="features bg-gray">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-3">
            <div class="icon"><i class="icon-antique-pavilion"></i></div>
            <h4 class="h5">300 Places</h4>
          </div>
          <div class="col-sm-3">
            <div class="icon"><i class="icon-calendar"></i></div>
            <h4 class="h5">150 Events</h4>
          </div>
          <div class="col-sm-3">
            <div class="icon"><i class="icon-gallery"></i></div>
            <h4 class="h5">700 Photos</h4>
          </div>
          <div class="col-sm-3">
            <div class="icon"><i class="icon-list"></i></div>
            <h4 class="h5">15 Categories</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- Top Cities Section-->
    <section class="top-listings">
      <div class="container">
        <header>
          <h2 class="has-lines"><small>Top cities</small> Our <span class="text-primary">top visited</span> cities</h2>
          <p class="lead">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </header>
        <div class="row d-flex align-items-stretch">
          <!-- Item-->
          <div class="col-lg-6"><a href="category.html">
              <div class="item item-big">
                <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-top-big.jpg" alt="..." class="img-fluid"></div>
                <div class="info d-flex align-items-end">
                  <div class="content">
                    <h3>Los Angeles</h3>
                    <p>Lorem ipsum dolor</p>
                    <ul class="rate list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                </div>
                <div class="badge">featured</div>
              </div></a></div>
          <!-- Item-->
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-6"><a href="category.html">
                  <div class="item">
                    <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-top-1.jpg" alt="..." class="img-fluid"></div>
                    <div class="info d-flex align-items-end">
                      <div class="content">
                        <h3>Barcelona</h3>
                        <ul class="rate list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div></a></div>
              <!-- Item-->
              <div class="col-md-6"><a href="category.html">
                  <div class="item">
                    <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-top-2.jpg" alt="..." class="img-fluid"></div>
                    <div class="info d-flex align-items-end">
                      <div class="content">
                        <h3>Hong Kong</h3>
                        <ul class="rate list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div></a></div>
              <!-- Item                    -->
              <div class="col-md-6"><a href="category.html">
                  <div class="item">
                    <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-top-3.jpg" alt="..." class="img-fluid"></div>
                    <div class="info d-flex align-items-end">
                      <div class="content">
                        <h3>New York</h3>
                        <ul class="rate list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div></a></div>
              <!-- Item-->
              <div class="col-md-6"><a href="category.html">
                  <div class="item">
                    <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-top-4.jpg" alt="..." class="img-fluid"></div>
                    <div class="info d-flex align-items-end">
                      <div class="content">
                        <h3>Amsterdam</h3>
                        <ul class="rate list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div></a></div>
            </div>
          </div>
        </div>
        <div class="row"> 
          <div class="col-md-3"><a href="category.html">
              <div class="item">
                <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-top-1.jpg" alt="..." class="img-fluid"></div>
                <div class="info d-flex align-items-end">
                  <div class="content">
                    <h3>Barcelona</h3>
                    <ul class="rate list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div></a></div>
          <!-- Item-->
          <div class="col-md-3"><a href="category.html">
              <div class="item">
                <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-top-2.jpg" alt="..." class="img-fluid"></div>
                <div class="info d-flex align-items-end">
                  <div class="content">
                    <h3>Hong Kong</h3>
                    <ul class="rate list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div></a></div>
          <!-- Item                    -->
          <div class="col-md-3"><a href="category.html">
              <div class="item">
                <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-top-3.jpg" alt="..." class="img-fluid"></div>
                <div class="info d-flex align-items-end">
                  <div class="content">
                    <h3>New York</h3>
                    <ul class="rate list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div></a></div>
          <!-- Item                    -->
          <div class="col-md-3"><a href="category.html">
              <div class="item">
                <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-top-3.jpg" alt="..." class="img-fluid"></div>
                <div class="info d-flex align-items-end">
                  <div class="content">
                    <h3>New York</h3>
                    <ul class="rate list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div></a></div>
        </div><a href="#" class="btn btn-primary has-shadow has-wide-padding">View More    </a>
      </div>
    </section>
    <!-- Latest Places Section-->
    <section class="latest-listings bg-gray">
      <div class="container">
        <header>
          <h2 class="has-lines"><small>New</small> Discover the newest venues on Places</h2>
          <p class="lead">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </header>
        <div class="owl-carousel owl-theme latest-listings-slider">
          <!-- Item-->
          <div class="item listing-item">
            <div class="item-inner">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-latest-1.jpg" alt="..." class="img-fluid"></div>
              <div class="info d-flex align-items-end justify-content-between">
                <div class="content"><a href="detail.html"> 
                    <div class="badge-transparent">Eat &amp; Drink</div></a><a href="detail.html"> 
                    <h3>Lorem Ipsum Dolor</h3>
                    <p class="address">23 July street, Vinece</p></a></div>
                <div class="favorite"><i class="icon-heart"> </i></div>
              </div>
            </div>
            <div class="rate-box d-flex align-items-center">
              <ul class="rate list-inline">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
              </ul><span>(20 Reviews)</span>
            </div>
          </div>
          <!-- Item        -->
          <div class="item listing-item">
            <div class="item-inner">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-latest-2.jpg" alt="..." class="img-fluid"></div>
              <div class="info d-flex align-items-end justify-content-between">
                <div class="content"><a href="detail.html"> 
                    <div class="badge-transparent">Events</div></a><a href="detail.html"> 
                    <h3>Lorem Ipsum Dolor</h3>
                    <p class="address">23 July street, Vinece</p></a></div>
                <div class="favorite"><i class="icon-heart"> </i></div>
              </div>
            </div>
            <div class="rate-box d-flex align-items-center">
              <ul class="rate list-inline">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star text-gray"></i></li>
                <li class="list-inline-item"><i class="fa fa-star text-gray"></i></li>
              </ul><span>(335 Reviews)</span>
            </div>
          </div>
          <!-- Item            -->
          <div class="item listing-item">
            <div class="item-inner">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-latest-3.jpg" alt="..." class="img-fluid"></div>
              <div class="info d-flex align-items-end justify-content-between">
                <div class="content"><a href="detail.html"> 
                    <div class="badge-transparent">Eat &amp; Drink</div></a><a href="detail.html"> 
                    <h3>Lorem Ipsum Dolor</h3>
                    <p class="address">23 July street, Vinece</p></a></div>
                <div class="favorite"><i class="icon-heart"> </i></div>
              </div>
            </div>
            <div class="rate-box d-flex align-items-center">
              <ul class="rate list-inline">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star text-gray"></i></li>
              </ul><span>(75 Reviews)</span>
            </div>
          </div>
          <!-- Item        -->
          <div class="item listing-item">
            <div class="item-inner">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-latest-1.jpg" alt="..." class="img-fluid"></div>
              <div class="info d-flex align-items-end justify-content-between">
                <div class="content"><a href="detail.html"> 
                    <div class="badge-transparent">Eat &amp; Drink</div></a><a href="detail.html"> 
                    <h3>Lorem Ipsum Dolor</h3>
                    <p class="address">23 July street, Vinece</p></a></div>
                <div class="favorite"><i class="icon-heart"> </i></div>
              </div>
            </div>
            <div class="rate-box d-flex align-items-center">
              <ul class="rate list-inline">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
              </ul><span>(20 Reviews)</span>
            </div>
          </div>
          <!-- Item            -->
          <div class="item listing-item">
            <div class="item-inner">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-latest-2.jpg" alt="..." class="img-fluid"></div>
              <div class="info d-flex align-items-end justify-content-between">
                <div class="content"><a href="detail.html"> 
                    <div class="badge-transparent">Events</div></a><a href="detail.html"> 
                    <h3>Lorem Ipsum Dolor</h3>
                    <p class="address">23 July street, Vinece</p></a></div>
                <div class="favorite"><i class="icon-heart"> </i></div>
              </div>
            </div>
            <div class="rate-box d-flex align-items-center">
              <ul class="rate list-inline">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star text-gray"></i></li>
                <li class="list-inline-item"><i class="fa fa-star text-gray"></i></li>
              </ul><span>(335 Reviews)</span>
            </div>
          </div>
          <!-- Item        -->
          <div class="item listing-item">
            <div class="item-inner">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-latest-3.jpg" alt="..." class="img-fluid"></div>
              <div class="info d-flex align-items-end justify-content-between">
                <div class="content"><a href="detail.html"> 
                    <div class="badge-transparent">Eat &amp; Drink</div></a><a href="detail.html"> 
                    <h3>Lorem Ipsum Dolor</h3>
                    <p class="address">23 July street, Vinece</p></a></div>
                <div class="favorite"><i class="icon-heart"> </i></div>
              </div>
            </div>
            <div class="rate-box d-flex align-items-center">
              <ul class="rate list-inline">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star text-gray"></i></li>
              </ul><span>(75 Reviews)</span>
            </div>
          </div>
          <!-- Item        -->
          <div class="item listing-item">
            <div class="item-inner">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-latest-1.jpg" alt="..." class="img-fluid"></div>
              <div class="info d-flex align-items-end justify-content-between">
                <div class="content"><a href="detail.html"> 
                    <div class="badge-transparent">Eat &amp; Drink</div></a><a href="detail.html"> 
                    <h3>Lorem Ipsum Dolor</h3>
                    <p class="address">23 July street, Vinece</p></a></div>
                <div class="favorite"><i class="icon-heart"> </i></div>
              </div>
            </div>
            <div class="rate-box d-flex align-items-center">
              <ul class="rate list-inline">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
              </ul><span>(20 Reviews)</span>
            </div>
          </div>
          <!-- Item        -->
          <div class="item listing-item">
            <div class="item-inner">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-latest-2.jpg" alt="..." class="img-fluid"></div>
              <div class="info d-flex align-items-end justify-content-between">
                <div class="content"><a href="detail.html"> 
                    <div class="badge-transparent">Events</div></a><a href="detail.html"> 
                    <h3>Lorem Ipsum Dolor</h3>
                    <p class="address">23 July street, Vinece</p></a></div>
                <div class="favorite"><i class="icon-heart"> </i></div>
              </div>
            </div>
            <div class="rate-box d-flex align-items-center">
              <ul class="rate list-inline">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star text-gray"></i></li>
                <li class="list-inline-item"><i class="fa fa-star text-gray"></i></li>
              </ul><span>(335 Reviews)</span>
            </div>
          </div>
          <!-- Item        -->
          <div class="item listing-item">
            <div class="item-inner">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/photo-latest-3.jpg" alt="..." class="img-fluid"></div>
              <div class="info d-flex align-items-end justify-content-between">
                <div class="content"><a href="detail.html"> 
                    <div class="badge-transparent">Eat &amp; Drink</div></a><a href="detail.html"> 
                    <h3>Lorem Ipsum Dolor</h3>
                    <p class="address">23 July street, Vinece</p></a></div>
                <div class="favorite"><i class="icon-heart"> </i></div>
              </div>
            </div>
            <div class="rate-box d-flex align-items-center">
              <ul class="rate list-inline">
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                <li class="list-inline-item"><i class="fa fa-star text-gray"></i></li>
              </ul><span>(75 Reviews)</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section-->
    <section class="services">
      <div class="container text-center">
        <header>
          <h2><small>Our Services</small> What do <span class="text-primary">Places</span> provide</h2>
          <p class="lead col-md-10 mx-auto">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores </p>
        </header>
        <div class="row">
          <!-- Item-->
          <div class="item col-lg-4">
            <div class="icon"><i class="icon-map"></i></div>
            <div class="text">
              <h3 class="h4">Amazing Local Places</h3>
              <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
            </div>
          </div>
          <!-- Item-->
          <div class="item col-lg-4">
            <div class="icon"><i class="icon-cityscape"></i></div>
            <div class="text">
              <h3 class="h4">Tons of Cities</h3>
              <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
            </div>
          </div>
          <!-- Item-->
          <div class="item col-lg-4">
            <div class="icon"><i class="icon-script"></i></div>
            <div class="text">
              <h3 class="h4">Amazing Stories</h3>
              <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Separator Section-->
    <section style="background: url('https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/separator-bg.jpg') fixed;" class="divider">
      <div class="container">
        <h2 class="has-lines"><small class="text-primary">Unlimited Deals </small> Promote Your Business</h2>
        <p class="lead">Explore some of the best tips from around the world from our partners</p><a href="#" class="btn btn-primary has-shadow has-wide-padding">Add Your Listing</a>
      </div>
    </section>
    <!-- Blog Section-->
    <section class="blog">
      <div class="container">
        <header>
          <h2 class="has-lines"><small>Our Blog</small> Some<span class="text-primary">Articles &amp; Tips</span> from the blog</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </header>
        <div class="row">
          <!-- Post-->
          <div class="col-lg-4">
            <div class="post">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/blog-home-1.jpg" alt="..."></div>
              <div class="info d-flex align-items-end">
                <div class="content">
                  <div class="post-meta">15 APR | 2017 | No Comments</div><a href="post.html">
                    <h3>Hotels For All Budgets</h3></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="post.html" class="has-lines read-more">Read More</a>
                </div>
              </div><a href="#">   
                <div class="badge badge-rounded text-uppercase">Tips</div></a>
            </div>
          </div>
          <!-- Post        -->
          <div class="col-lg-4">
            <div class="post">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/blog-home-2.jpg" alt="..."></div>
              <div class="info d-flex align-items-end">
                <div class="content">
                  <div class="post-meta">15 APR | 2017 | No Comments</div><a href="post.html">
                    <h3>Hotels For All Budgets</h3></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="post.html" class="has-lines read-more">Read More</a>
                </div>
              </div><a href="#">   
                <div class="badge badge-rounded text-uppercase">Tips</div></a>
            </div>
          </div>
          <!-- Post        -->
          <div class="col-lg-4">
            <div class="post">
              <div class="image"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/blog-home-3.jpg" alt="..."></div>
              <div class="info d-flex align-items-end">
                <div class="content">
                  <div class="post-meta">15 APR | 2017 | No Comments</div><a href="post.html">
                    <h3>Hotels For All Budgets</h3></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="post.html" class="has-lines read-more">Read More</a>
                </div>
              </div><a href="#">   
                <div class="badge badge-rounded text-uppercase">Tips</div></a>
            </div>
          </div>
        </div><a href="blog.html" class="visit-blog btn btn-primary has-shadow has-wide-padding">Visit Blog</a>
      </div>
    </section>
    <!-- Partners Section-->
    <section class="partners bg-gray">
      <div class="container text-center">
        <header>
          <h2> Our partners</h2>
        </header>
        <div class="row d-flex align-items-center">
          <div class="item col-lg-2 col-md-4 col-6"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-1.png" alt="..." class="img-fluid"></div>
          <div class="item col-lg-2 col-md-4 col-6"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-2.png" alt="..." class="img-fluid"></div>
          <div class="item col-lg-2 col-md-4 col-6"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-3.png" alt="..." class="img-fluid"></div>
          <div class="item col-lg-2 col-md-4 col-6"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-4.png" alt="..." class="img-fluid"></div>
          <div class="item col-lg-2 col-md-4 col-6"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-5.png" alt="..." class="img-fluid"></div>
          <div class="item col-lg-2 col-md-4 col-6"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/brand-6.png" alt="..." class="img-fluid"></div>
        </div>
      </div>
    </section>
    <button type="button" data-toggle="collapse" data-target="#style-switch" id="style-switch-button" class="btn btn-primary btn-sm d-none d-lg-block"><i class="fa fa-cog fa-2x"></i></button>
    <div id="style-switch" class="collapse">
      <h4 class="mb-3">Select theme colour</h4>
      <form class="mb-3">
        <select name="colour" id="colour" class="form-control style-switch-select">
          <option value="">select colour variant</option>
          <option value="default">green</option>
          <option value="pink">pink</option>
          <option value="violet">violet</option>
          <option value="red">red</option>
          <option value="sea">sea</option>
          <option value="blue">blue</option>
        </select>
      </form>
      <p><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/template-mac.png" alt="" class="img-fluid"></p>
      <p class="text-muted text-small">Stylesheet switching is done via JavaScript and can cause a blink while page loads. This will not happen in your production code.</p>
    </div>
    <!-- Page Footer-->
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="about col-md-4">
            <div class="logo"><img src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/img/logo-footer.png" alt="..."></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          </div>
          <div class="site-links col-md-4">
            <h3>Useful links</h3>
            <div class="menus d-flex">
              <ul class="list-unstyled">
                <li> <a href="index.html">Homepage</a></li>
                <li> <a href="category.html">Listings detail</a></li>
                <li> <a href="detail.html">Listing detail</a></li>
                <li> <a href="blog.html">Blog</a></li>
                <li> <a href="post.html">Post</a></li>
                <li> <a href="#">Privacy policy </a><span class="badge badge-secondary text-uppercase ml-1">Soon</span></li>
              </ul>
              <ul class="list-unstyled">
                <li> <a href="text.html">Text page</a></li>
                <li> <a href="404.html">404 - Not found</a></li>
                <li> <a href="contact.html">Contact</a></li>
                <li> <a href="#">Pricing </a><span class="badge badge-secondary text-uppercase ml-1">Soon</span></li>
              </ul>
            </div>
          </div>
          <div class="contact col-md-4">
            <h3>Contact  us</h3>
            <div class="info">
              <p>53 Broadway, Broklyn, NY 11249</p>
              <p>Phone: (020) 123 456 789</p>
              <p>Email: <a href="mailto:info@company.com">Info@Company.com</a></p>
              <ul class="social-menu lisy-inline">
                <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook">                        </i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter">                        </i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest">                        </i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram">                        </i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="Vimeo"><i class="fa fa-vimeo">                        </i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>&copy; 2017 <span class="text-primary">Places.</span> All Rights Reserved.</p>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/jquery/jquery.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/places/1-1-2/js/front.js"></script>
  </body>
</html>