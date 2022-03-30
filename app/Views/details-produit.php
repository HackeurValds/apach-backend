<!DOCTYPE html>
<html  ng-app="myApp">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/all.css">
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- OFFLINE LINE-AWESOME ICONS -->
        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.css">
        <!-- ONLINE LINE-AWESOME ICONS -->
        <!-- <link rel="stylesheet" href="assets/css/line-awesome.min.css"> -->
        <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>

        <script src='assets/js/jquery.zoom.js'></script>

        <title>Product Details</title>
    </head>
    <body ng-controller="customersCtrl">
        <!-- pd: Products Details -->

         <!-- <div ng-include="'assets/includes/header-part.html'"></div> -->

         <section>
            <div class="container-categorie">

                <!-- Debut de la div search--> 

                <div class="container-categorie-fils categorie-first">
                    <div class="logo-logo">
                        <img src="assets/img/logomodify.jpg">
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
                                <li><a href="filter-page.html">Boutique</a></li>
                                <li><a href="#">Contactez-nous</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- fin de la div top menu--> 
            </div>
         </section>



        <div class="pd__wrapper">
            <div class="pd__wrap">
                <div class="pd__wrap__top">
                    <div class="pd__wrap__left">
                        <!-- Image and Thumbnail images -->
                        <div class="pd__img">
                            <div class="pd__featured__img">
                                <div class="rect" id="rect"></div>
                                <div class="ft-img-box zoom" id='ex1'>
                                    <img src="assets/img/p1.jpg" alt="" id="pic">
                                </div>
                            </div>
                            <!-- <div class="zoom" id="zoom"></div> -->
                            <div class="swiper">
                                <div class="pd__side__img swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="assets/img/p1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/p2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/p3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/p4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/img/p5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product actions and details -->
                        <div class="pd__desc">
                            <h3 class="pd__title">Lorem ipsum dolor sit amet.</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="pd__reviews">
                                <div class="pd__stars__rev">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="pd__users__rev">
                                    <span>0</span>
                                    Review(s)
                                </div>
                            </div>
                            <!-- Product price ans sale price -->
                            <div class="pd__price">
                                <span>Price:</span>
                                <div class="pd__sale-price">
                                    <span>205</span>
                                    <span>Xaf</span>
                                </div>
                                <div class="pd__real-price">
                                    <span>210</span>
                                    <span>Xaf</span>
                                </div>
                            </div>
                            <!-- Add or substract product quantity -->
                            <div class="pd__qty__ctrl">
                                <button id="sub">-</button>
                                <input
                                    type="number"
                                    value="1"
                                    size="1"
                                    maxlength="2"
                                    name=""
                                    id="qty"
                                >
                                <button id="add">+</button>
                            </div>
                            <!-- Product's add-to-cart, Buy, like, comments buttons -->
                            <div class="pd__action-btn">
                                <div class="pd__add-buy">
                                   <button class="btn-contact-vendeur">
                                       <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                       <span>Contacter le vendeur</span>
                                   </button>
                                </div>
                                <div class="pd__like-share">
                                    <button>
                                        <i class="fas fa-heart"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Share product on socials network  -->
                            <div class="pd__social-icons">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin-in"></i>
                                <i class="fab fa-pinterest"></i>
                            </div>
                        </div>
                    </div>
                    <!-- RELATED PRODUCT BEGIN -->
                    <div class="pd__wrap__right">
                        <div class="pd__related__wrap">
                            <h4 class="pd__wrap__bottom__title">Seller Product</h4>
                            <div class="pd__related__wrap__item">
                                <div class="pd__related__item">
                                    <div class="pd__related__img">
                                        <div>
                                            <img src="assets/img/pb2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="pd__related__desc">
                                        <div class="pd__related__star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="pd__related__price">
                                            <div class="sale-price">
                                                <span>200</span>
                                                Xaf
                                            </div>
                                            <div class="real-price">
                                                <span>210</span>
                                                Xaf
                                            </div>
                                        </div>
                                        <p class="pd__related__title">
                                            Lorem ipsum dolor sit, amet consectetur Lorem ipsum dolor sit amet.
                                        </p>
                                    </div>
                                </div>
                                <div class="pd__related__item">
                                    <div class="pd__related__img">
                                        <div>
                                            <img src="assets/img/pb3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="pd__related__desc">
                                        <div class="pd__related__star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="pd__related__price">
                                            <div class="sale-price">
                                                <span>200</span>
                                                Xaf
                                            </div>
                                            <div class="real-price">
                                                <span>210</span>
                                                Xaf
                                            </div>
                                        </div>
                                        <p class="pd__related__title">
                                            Lorem ipsum dolor sit, amet consectetur Lorem ipsum dolor sit amet.
                                        </p>
                                    </div>
                                </div>
                                <div class="pd__related__item">
                                    <div class="pd__related__img">
                                        <div>
                                            <img src="assets/img/pb2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="pd__related__desc">
                                        <div class="pd__related__star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="pd__related__price">
                                            <div class="sale-price">
                                                <span>200</span>
                                                Xaf
                                            </div>
                                            <div class="real-price">
                                                <span>210</span>
                                                Xaf
                                            </div>
                                        </div>
                                        <p class="pd__related__title">
                                            Lorem ipsum dolor sit, amet consectetur Lorem ipsum dolor sit amet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RELATED PRODUCT END -->
                <div class="pd__wrap__bottom">
                    <h4 class="pd__wrap__bottom__title">
                        Related Products
                    </h4>
                    <div class="pd__bottom__box">
                        <div class="pd__bottom__item">
                            <div class="pd__bottom__extra-list">
                                <span class="add-to-cart" data-id="1" data-name="Livre 1" data-image="assets/img/pb5.jpg" data-price="200,00">
                                <i class="fas fa-heart"></i>
                                </span>
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="pd__bottom__img">
                                <img src="assets/img/pb5.jpg" alt="">
                            </div>
                            <div class="pd__bottom__content">
                                
                                <div class="pd__bottom__prices">
                                    <div class="pd__bottom__sale-price">200</div>
                                    <div class="pd__bottom__real-price">150</div>
                                </div>
                                <h3 class="pd__bottom__title">Test digital book will be here one</h3>
                                <div class="pd__bottom__actions">
                                    <button class="btn-contact-vendeur">
                                       <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                        <span>Contacter le vendeur</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pd__bottom__item">
                            <div class="pd__bottom__extra-list">
                                <span class="add-to-cart" data-id="1" data-name="Livre 1" data-image="assets/img/pb2.jpg" data-price="200,00">
                                <i class="fas fa-heart"></i>
                                </span>
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="pd__bottom__img">
                                <img src="assets/img/pb2.jpg" alt="">
                            </div>
                            <div class="pd__bottom__content">
                                
                                <div class="pd__bottom__prices">
                                    <div class="pd__bottom__sale-price">200</div>
                                    <div class="pd__bottom__real-price">150</div>
                                </div>
                                <h3 class="pd__bottom__title">Test digital book will be here one</h3>
                                <div class="pd__bottom__actions">
                                    <button class="btn-contact-vendeur">
                                        <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                        <span>Contacter le vendeur</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pd__bottom__item">
                            <div class="pd__bottom__extra-list">
                                <span class="add-to-cart" data-id="1" data-name="Livre 1" data-image="assets/img/pb3.jpg" data-price="200,00">
                                <i class="fas fa-heart"></i>
                                </span>
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="pd__bottom__img">
                                <img src="assets/img/pb3.jpg" alt="">
                            </div>
                            <div class="pd__bottom__content">
                               
                                <div class="pd__bottom__prices">
                                    <div class="pd__bottom__sale-price">200</div>
                                    <div class="pd__bottom__real-price">150</div>
                                </div>
                                <h3 class="pd__bottom__title">Test digital book will be here one</h3>
                                <div class="pd__bottom__actions">
                                    <button>
                                        <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                        <span>Contacter le vendeur</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pd__bottom__item">
                            <div class="pd__bottom__extra-list">
                                <span class="add-to-cart" data-id="1" data-name="Livre 1" data-price="200,00" data-image="assets/img/pb4.jpg">
                                <i class="fas fa-heart"></i>
                                </span>
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="pd__bottom__img">
                                <img src="assets/img/pb4.jpg" alt="">
                            </div>
                            <div class="pd__bottom__content">
                                
                                <div class="pd__bottom__prices">
                                    <div class="pd__bottom__sale-price">200</div>
                                    <div class="pd__bottom__real-price">150</div>
                                </div>
                                <h3 class="pd__bottom__title">Test digital book will be here one</h3>
                                <div class="pd__bottom__actions">
                                    <button>
                                        <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                        <span>Contacter le vendeur</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pd__bottom__item">
                            <div class="pd__bottom__extra-list">
                                <span class="add-to-cart" data-id="1" data-image="assets/img/pb4.jpg" data-name="Livre 1" data-price="200,00">
                                <i class="fas fa-heart"></i>
                                </span>
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="pd__bottom__img">
                                <img src="assets/img/pb4.jpg" alt="">
                            </div>
                            <div class="pd__bottom__content">
                                
                                <div class="pd__bottom__prices">
                                    <div class="pd__bottom__sale-price">200</div>
                                    <div class="pd__bottom__real-price">150</div>
                                </div>
                                <h3 class="pd__bottom__title">Test digital book will be here one</h3>
                                <div class="pd__bottom__actions">
                                    <button>
                                        <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                        <span>Contacter le vendeur</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pd__bottom__item">
                            <div class="pd__bottom__extra-list">
                                <span class="add-to-cart" data-id="1" data-name="Livre 1" data-image="assets/img/pb4.jpg" data-price="200,00">
                                <i class="fas fa-heart"></i>
                                </span>
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="pd__bottom__img">
                                <img src="assets/img/pb4.jpg" alt="">
                            </div>
                            <div class="pd__bottom__content">
                                
                                <div class="pd__bottom__prices">
                                    <div class="pd__bottom__sale-price">200</div>
                                    <div class="pd__bottom__real-price">150</div>
                                </div>
                                <h3 class="pd__bottom__title">Test digital book will be here one</h3>
                                <div class="pd__bottom__actions">
                                    <button>
                                        <i class="fas fa-phone-alt" aria-hidden="true"></i>
                                        <span>Contacter le vendeur</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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

             <div class="popup popup-signin" id="popupSignIn" style="display:none">
                <div class="content-popup">
                    <div class="entete-popup">
                        <h2>Création de compte</h2>
                    </div>
                    <div class="popup-body">
                        <form>
                            <div class="item-form">
                                <label>Nom</label>
                                <i class="fas fa-user"></i>
                                <input type="text" name="nom" class="control-form" placeholder="Saisir Nom">
                            </div>
                            
                            <div class="item-form">
                                <label>Prenom</label>
                                <i class="fas fa-user"></i>
                                <input type="text" name="prenom" class="control-form" placeholder="Saisir Prenom">
                            </div>

                            <div class="item-form">
                                <label>Email</label>
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" class="control-form" placeholder="Saisi email ">
                            <div class="item-form">
                                <label>Mot de passe</label>
                                <i class="fas fa-lock"></i>
                                <input type="password" name="motdepasse" class="control-form">
                            </div>

                            <div class="item-form checkbox-item">
                                <label>Oui, je souhaite profiter pleinement de Mes tutoriels et recevoir des e-mails comportant des offres exclusives, des recommandations personnalisées et des astuces d'apprentissage!</label>
                                <input type="checkbox"  checked="checked" name="condition" class="control-form">
                                <span class="checkmark"></span>
                            </div>

                            <div class="content-btn-popup">
                                <button type="submit" class="btn bg-bleue">S'inscrire</button>
                            </div>

                            <div class="popup-footer">
                                <div class="contition-text-content">
                                    <p>En vous inscrivant, vous acceptez notre <a href="#">Conditions d'utilisation</a>  Et <a href="#">Politique de confidentialité</a>.</p>
                                </div>
                                <div class="raccourci-login">
                                    <p>Vous avez déjà un compte ? <a href="#" class="popup-login-link">S'identifier</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="popup popup-login" id="popupLogIn" style="display:none">
                        <div class="content-popup">
                            <div class="entete-popup">
                                <h2>Connexion</h2>
                            </div>
                            <div class="popup-body">
                                <form>
                                    <div class="item-form">
                                        <label>Email</label>
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" name="email" class="control-form" placeholder="Saisi email ">
                                    </div>
                                    <div class="item-form">
                                        <label>Mot de passe</label>
                                        <i class="fas fa-lock"></i>
                                        <input type="password" name="motdepasse" class="control-form">
                                    </div>


                                    <div class="content-btn-popup">
                                        <button type="submit" class="btn bg-bleue">Se connecter</button>
                                    </div>

                                    <div class="popup-footer">
                                        <div class="raccourci-login">
                                            <p>Vous n'avez pas de compte ? <a href="#" class="popup-sign-link">S'inscrire</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
            </div>

        
        
    </body>
</html>
<!-- Magnific Popup core JS file -->
 <script src="assets/js/jquery.magnific-popup.js"></script>
<!-- <script src="assets/js/swiper-bundle.min.js"></script> -->

<script type="text/javascript">
    $(document).ready(function(){
     
     // script popup s'inscrire
                $('.popup-sign-link').click(function(){
                    $('.popup-signin').css({
                        display:'block'
                    });
                })

                // script afficher popup se connecter
                $('.popup-login-link').click(function(){
                    $('.popup-login').css({
                        display:'block'
                    });
                })

                $('.btn-contact-vendeur').click(function(){
                    $('.popup-login').css({
                        display:'block'
                    });
                })

                // SIGNIN popup
                $('.popup-sign-link').magnificPopup({
                  items: {
                      src: '#popupSignIn',
                      type: 'inline'
                  },
                  preloader:true
                });

                $('.popup-login-link').magnificPopup({
                  items: {
                      src: '#popupLogIn',
                      type: 'inline'
                  },
                  preloader:true
                });

                $('.btn-contact-vendeur').magnificPopup({
                  items: {
                      src: '#popupLogIn',
                      type: 'inline'
                  },
                  preloader:true
                });

        // MODAL BOX


        // let mainContainer = document.querySelector(".btn-contact-vendeur")
        // let modalWrapper = document.querySelector(".modal-wrapper")
        // mainContainer.addEventListener("click", function () {
        //     modalWrapper.style.display = "block";
        // })

        // let modalClose = document.querySelector(".modal-close")
        // modalClose.addEventListener("click", function () {
        //     modalWrapper.style.display = "none";
        // })


        // let elt = document.querySelector(".modal-wrapper");
        // elt.removeAttribute("display");
    });

    
</script>

<script type="text/javascript">
    $(document).ready(function(){
        //  ZOOM JS
        $('#ex1').zoom();

        // To increment product quantity

        let addProduct = document.querySelector("#add");
        let subProduct = document.querySelector("#sub");
        let qtyProduct = document.querySelector("#qty");


        addProduct.addEventListener('click', () => {
            qtyProduct.value = parseInt(qtyProduct.value) + 1;
        })

        subProduct.addEventListener('click', () => {
            if (qtyProduct.value <= 0) {
                qtyProduct.value = 0;
            } else {
                qtyProduct.value = parseInt(qtyProduct.value) - 1;

            }
        })
    });
</script>

<!-- <script src="assets/js/tiny-slider.js"></script> -->


<script type="text/javascript" src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
<script src="assets/js/angular.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> -->
<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    // $http.get("customers.php").then(function (response) {
    //     $scope.names = response.data.records;
    // });
});
</script>