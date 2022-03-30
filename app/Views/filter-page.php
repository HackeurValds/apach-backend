<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Page de filtre </title>
  <link rel="stylesheet" type="text/css" href="assets/css/all.css">
  
  <!-- flavicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <!-- fontawesome -->
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.css">

  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
</head>

<body>

    <!-- Debut de la premiere section <searh bar and top-menu >-->
  <!-- <div ng-include="'assets/includes/header-part.html'"></div> -->

  
  <section>
    <div class="container-categorie">

      <!-- Debut de la div search--> 

      <div class="container-categorie-fils categorie-first">
        <div class="logo-logo">
          <img src="assets/img/logomodify.png">
        </div>
        <div class="categorie-first-box1">
          <form>
            <div class="categorie-first-box1-fils1">
              <select>
                <option>All categories</option>
                <option>All categories</option>
                <option>All categories</option>
                <option>All categories</option>
                <option>All categories</option>
                <option>All categories</option>
              </select>
            </div>
            <div class="categorie-first-box1-fils2">
              <input type="search" name="" placeholder="Search for product">
            </div>
            <div class="categorie-first-box1-fils3">
              <button><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
        <div class="categorie-first-box2">
          <div class="categorie-first-box2-fils1">
            <i class="far fa-heart"></i>
          </div>
          <span class="shop-card-length" ><p id="show-card-length" class="small">0</p></span>
          <div class="list-card" >
						<span class="cart-icone" id="cart-icone-close"><i class="fas fa-times"></i></span>
						<div id="list-card"></div>
						 <div class="total-text">
						<p>Total: <span id="total-price">0 Xaf</span> </p>
						</div> 
					</div>
        </div>
      </div>
      <!-- fin de la div search--> 

      <!-- Debut de la div top menu--> 

      <div class="container-categorie-fils categorie-second">
        <div class="categorie-second-box1">
          <ul class="dropdown-vue">
            <li class="dropdown-vue1 hover-show-dropdown"><span><i class="fa fa-bars"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;Categories <span class="icone-down icone-down-show"><i class="fas fa-angle-down"></i></span></li>
            <ul class="dropdown-content" id="dropdown-content">
              <li class="li1">ELectronic <span class="icone-down icone-down-show1"><i class="fas fa-angle-right"></i></span>
              <ul class="dropdown-content-li1">
                <li>ELectronic1</li>
                <li>ELectronic1</li>
                <li>ELectronic1</li>
              </ul>
              </li>
              <li class="li2">ELectronic <span class="icone-down icone-down-show2"><i class="fas fa-angle-right"></i></span>
              <ul class="dropdown-content-li2">
                <li>ELectronic2</li>
                <li>ELectronic2</li>
                <li>ELectronic2</li>
              </ul>
              </li>
              <li class="li3">ELectronic <span class="icone-down icone-down-show3"><i class="fas fa-angle-right"></i></span>
              <ul class="dropdown-content-li3">
                <li>ELectronic3</li>
                <li>ELectronic3</li>
                <li>ELectronic3</li>
              </ul>
              </li>
              <li>ELectronic</li>
              <li>ELectronic</li>
              <li>ELectronic</li>
              <li>ELectronic</li>
              <li>ELectronic</li>
              <li>ELectronic</li>
              <li>ELectronic</li>
            </ul>
          </ul>
        </div>
        <div class="categorie-second-box2">
          <nav>
            <ul>
              <li><a href="index.html">Accueil</a></li>
              <li><a href="#">A propos</a></li>
              <li><a href="filter-page.html"  class="active" >Boutique</a></li>
              <li><a href="#">Contactez-nous</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <!-- fin de la div top menu--> 
    </div>
  </section>

    <!-- fin de la section--> 

  <!-- Section content the main's block filter : Start-->
  <section class="main-contener-filter">
    <div class="sub-contener-filter">
      <div class="row">
        <!-- left area -->
        <nav class ="col-lg-3 col-md-6">
          <div class="contener-left-filter">
            <div class="filter-result-contener">
              <div class="contener-header">
                <h4 class="title">Filter by category and price</h4>
              </div>
              <div class="body-nav-filter">
                <form class="" action="#" method="post">
                  <ul class="list-filter">
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                          Electronic
                        </a>
                        <div class="sub-content open">
                          <a href="#" class="subcategory-link">
                            <i class="fas fa-angle-right"></i>
                            Television
                          </a>
                        </div>
                        <div class="sub-content open">
                          <a href="#" class="subcategory-link">
                            <i class="fas fa-angle-right"></i>
                            Refrigerator
                          </a>
                        </div>
                        <div class="sub-content open">
                          <a href="#" class="subcategory-link">
                            <i class="fas fa-angle-right"></i>
                            Washing Machine
                          </a>
                        </div>
                        <div class="sub-content open">
                          <a href="#" class="subcategory-link">
                            <i class="fas fa-angle-right"></i>
                            Air condition
                          </a>
                        </div>
                      </div>
                    </li>
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                        Book & Office
                        </a>
                      </div>
                    </li>
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                        Fashion & Beauty
                        </a>
                      </div>
                    </li>
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                        Sports
                        </a>
                      </div>
                    </li>
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                        Toys & Hobbies
                        </a>
                      </div>
                    </li>
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                        Health Care
                        </a>
                      </div>
                    </li>
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                        Smartphone
                        </a>
                      </div>
                    </li>
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                        Jewellery
                        </a>
                      </div>
                    </li>
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                        Camera
                        </a>
                      </div>
                    </li>
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                        Furniture
                        </a>
                      </div>
                    </li>
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                        Home Decor
                        </a>
                      </div>
                    </li>
                    <li class = "elt_list_filter">
                      <div class="content-elt-filted">
                        <a href="#" class="category-link">
                          <i class ="fas fa-angle-double-right"></i>
                        Automobile
                        </a>
                      </div>
                    </li>
                  </ul>
                  <div class="price-range-block">
                    <div class="">
                      <div class=""></div>
                      <span></span>
                      <span></span>
                    </div>
                    <div class="livecount">
                      <input type="number" min="1" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" value="1" name="min" id="min_price" class="price-range-field">
                      <span>To</span>
                      <input type="number" min="1" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" value="1000" name="max" id="max_price" class="price-range-field">
                    </div>
                  </div>
                  <button class= "filter-btn" type="button" name="button_search_filter">SEARCH</button>
                </form>
              </div>

            </div>
          </div>
        </nav>
        <!-- left area : END -->
        <!-- right area : START -->
        <div class="col-lg-9 order-first order-lg-last">
          <div class="contener-right-filter" id="filter-product">
            <!-- item filter : Start -->
            <div class="item-filter"><!-- item up using to filter -->
              <ul class="filter-list">
                <li class="filter-list-elt">
                  <form action="">
                    <p>Short By Price:</p>
                    <select class="" name="shortBYprice">
                        <option value="#"> Short By Price</option>
                        <option value="#"> option 2</option>
                        <option value="#"> option 3</option>
                        <option value="#"> option 4</option>
                        <option value="#"> option 5</option>
                    </select>
                </form>
                </li>
                <li class="filter-list-elt">
                  <form action="">
                    <p>Show product:</p>
                    <select class="" name="showproduct">
                        <option value="#">Show 5</option>
                        <option value="#">Show 10</option>
                        <option value="#">Show 15</option>
                        <option value="#">Show 20</option>
                        <option value="#">Show 25</option>
                    </select>
                  </form>
                </li>
              </ul>
            </div>
            <!-- item filter : END -->
            <!-- item of product filted : Start -->
            <div class="contener-product-filter">
              <div class="row" id="ajaxContent">
                <div class="col-lg-4 col-md-4 col-6 remove-padding">
                  <a href="#" class="cards">
                    <div class="cards-images">
                      <div class="extra-list">
                        <ul>
                          <li>
                            <span class="add-to-cart" data-id="1" data-image="assets/img/KweqQrs.jpg" data-name="Livre 1" data-price="1500,00">
                              <i class="fas fa-heart"></i>
                            </span>
                          </li>
                          <li>
                            <span>
                              <i class='fa fa-eye'></i>
                            </span>
                          </li>
                         
                        </ul>
                      </div>
                      <img class="img-fluid" src="assets/img/KweqQrs.jpg" alt="">
                    </div>
                    <div class="cards-info">
                      <h4>Ecouteurs</h4>
                      <h5 class="price">1000 Xaf&nbsp;&nbsp;<strike><small>1250 Xaf</small></strike></h5>
                      <div class="section-container-images-shop2-box1a-fils-prix-btn5 section-container-images-shop2-box1a-fils-prix-btn">
                        <button><i class="fas fa-phone-alt" aria-hidden="true"></i>&nbsp;&nbsp;Contactez le vendeur</button>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-6 remove-padding">
                  <a href="#" class="cards">
                    <div class="cards-images">
                      <div class="extra-list">
                        <ul>
                          <li>
                            <span class="add-to-cart" data-id="2" data-image="assets/img/KweqQrs.jpg"  data-name="Livre 1" data-price="1500,00">
                              <i class="fas fa-heart"></i>
                            </span>
                          </li>
                          <li>
                            <span>
                              <i class='fa fa-eye'></i>
                            </span>
                          </li>
                          
                        </ul>
                      </div>
                      <img class="img-fluid" src="assets/img/KweqQrs.jpg" alt="">
                    </div>

                    <div class="cards-info">
                      <h4>Ecouteurs</h4>
                      <h5 class="price">1000 Xaf&nbsp;&nbsp;<strike><small>1250 Xaf</small></strike></h5>
                      <div class="section-container-images-shop2-box1a-fils-prix-btn5 section-container-images-shop2-box1a-fils-prix-btn">
                        <button><i class="fas fa-phone-alt" aria-hidden="true"></i>&nbsp;&nbsp;Contactez le vendeur</button>
                      </div>
                    </div>

                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-6 remove-padding">
                  <a href="#" class="cards">
                    <div class="cards-images">
                      <div class="extra-list">
                        <ul>
                          <li>
                            <span class="add-to-cart" data-id="3"  data-image="assets/img/KweqQrs.jpg" data-name="Livre 1" data-price="1500,00">
                              <i class="fas fa-heart"></i>
                            </span>
                          </li>
                          <li>
                            <span>
                              <i class='fa fa-eye'></i>
                            </span>
                          </li>
                        </ul>
                      </div>
                      <img class="img-fluid" src="assets/img/KweqQrs.jpg" alt="">
                    </div>

                    <div class="cards-info">
                      <h4>Ecouteurs</h4>
                      <h5 class="price">1000 Xaf&nbsp;&nbsp;<strike><small>1250 Xaf</small></strike></h5>
                      <div class="section-container-images-shop2-box1a-fils-prix-btn5 section-container-images-shop2-box1a-fils-prix-btn">
                        <button><i class="fas fa-phone-alt" aria-hidden="true"></i>&nbsp;&nbsp;Contactez le vendeur</button>
                      </div>
                    </div>

                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-6 remove-padding">
                  <a href="#" class="cards">
                    <div class="cards-images">
                      <div class="extra-list">
                        <ul>
                          <li>
                            <span class="add-to-cart" data-id="4" data-image="assets/img/KweqQrs.jpg"  data-name="Livre 1" data-price="1500,00">
                              <i class="fas fa-heart"></i>
                            </span>
                          </li>
                          <li>
                            <span>
                              <i class='fa fa-eye'></i>
                            </span>
                          </li>
                         
                        </ul>
                      </div>
                      <img class="img-fluid" src="assets/img/KweqQrs.jpg" alt="">
                    </div>

                    <div class="cards-info">
                      <h4>Ecouteurs</h4>
                      <h5 class="price">1000 Xaf&nbsp;&nbsp;<strike><small>1250 Xaf</small></strike></h5>
                      <div class="section-container-images-shop2-box1a-fils-prix-btn5 section-container-images-shop2-box1a-fils-prix-btn">
                        <button><i class="fas fa-phone-alt" aria-hidden="true"></i>&nbsp;&nbsp;Contactez le vendeur</button>
                      </div>
                    </div>

                  </a>
                </div>
                <div class="col-lg-12">
                  <div class="page-center mt-5">

                  </div>
                </div>
              </div>
            </div>
            <!-- item of product filted : Start -->
          </div>
        </div>
        <!-- right area : END -->
      </div>
    </div>
  </section>
  <!-- Section content the main's block filter : End -->
  <!-- <div ng-include="'assets/includes/footer-part.html'"></div> -->
  <!--fin de la deuxieme section des images-->
  <footer class="section-footer">
    <div class="footer-container">
      <div class="footer-container-box">
        <div class="footer-container-box-logo">
          <img src="assets/img/logomodify.jpg">
        </div>
        <div class="footer-container-box-text">
          <p>TEST WEB FOOTER.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae</p>
        </div>
        
      </div>
      <div class="footer-container-box footer-container-box-link">
        <h4>Raccouris</h4>
        <ul>
          <li><a href="#">Acceuil</a></li>
          <li><a href="#">A propos</a></li>
          <li><a href="#">Boutique</a></li>
          <li><a href="#">Contactez-nous</a></li>
        </ul>
      </div>
      <div class="footer-container-box footer-container-box-link">
        <h4>Liens utils</h4>
        <ul>
          <li><a href="#">Faq</a></li>
          <li><a href="#">Terms et condition</a></li>
          <li><a href="#">Politique de confidentialité</a></li>
        </ul>
        
      </div>

      <div class="footer-container-box footer-container-box-post">
        <h4>Contacts</h4>
        <ul class="contact-info-foot">
          <li><i class="fas fa-envelope"></i>contact@montagne.com</li>
          <li><i class="fas fa-phone-alt"></i><div class="contact-phone"><span>00237 6789456123</span> <span>00237 6789456123</span></div></li>
          <li><i class="fas fa-map-marker-alt"></i>Yaoundé | Cameroun</li>
        </ul>

        <div class="footer-container-box-icone">
          <div class="footer-container-box-icone-rond">
            <i class="fab fa-facebook-f"></i>
          </div>
          <div class="footer-container-box-icone-rond">
            <i class="fab fa-google-plus-g"></i>
          </div>
          <div class="footer-container-box-icone-rond">
            <i class="fab fa-twitter"></i>
          </div>
          <div class="footer-container-box-icone-rond">
            <i class="fab fa-linkedin-in"></i>
          </div>
          <div class="footer-container-box-icone-rond">
            <i class="fab fa-whatsapp"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="content-copyright">
    <span>© copyright @2021 Tous droits réservés | Par <a href="#">ITC-Services</a></span>
  </div>
  
</body>
</html>

<script type="text/javascript" src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<!-- Magnific Popup core JS file -->
 <script src="assets/js/jquery.magnific-popup.js"></script> 
<script type="text/javascript" src="assets/js/index.js"></script>
<!-- <script src="assets/js/angular.min.js"></script> -->
<script>
/*var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    // $http.get("customers.php").then(function (response) {
    //     $scope.names = response.data.records;
    // });
});*/
</script>
