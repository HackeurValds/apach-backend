<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mon espace </title>
  <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
  <link rel="stylesheet" type="text/css" href="assets/css/all.css">
  <link rel="stylesheet" type="text/css" href="assets/css/message.css">
  
  <!-- flavicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <!-- fontawesome -->
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.css">

  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
</head>

<body class="nav-md">

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <!-- <a href="index.html" class="site_title"><i class="fas fa-dashboard"></i> <span>Admin</span></a> -->
              <img src="assets/img/logomodify.png" alt="logo apache" class="img-circle profile_img">
            </div>
    
            <div class="clearfix"></div>
    
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <div class="">
                  <span class="cnx-ico user-connected"> A </span>
                </div>
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Apach User</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
    
            <br />
    
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fas fa-home"></i> Dashboard </a></li>
                  <li class="active"><a><i class="fas fa-envelope"></i> Message </a></li>
                  <li><a><i class="fas fa-dice-d6"></i>Produits <span class="fas fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Liste produit</a></li>
                      <li><a href="fixed_footer.html">Ajouter produit </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fas fa-shipping-fast"></i> Livraison </a></li>
                  <li><a><i class="fas fa-user-cog"></i> Mon compte <span class="fas fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Mon compte</a></li>
                      <li><a href="tables_dynamic.html">mot de passe</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fas fa-sign-out-alt"></i> Deconnexion</span></a></li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Admin Section</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fas fa-list"></i> Edition contenus <span class="fas fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">Acceuil</a></li>
                      <li><a href="apropos.html">A propos</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fas fa-stars"></i> Gestion catégories <span class="fas fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">Liste des categories</a></li>
                      <li><a href="page_404.html">Ajouter categorie</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fas fa-sitemap"></i> Gestion sous categories<span class="fas fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#level1_1">Liste sous categorie</a>
                        <li><a>Ajouter sous categorie</a>
                        </li>
                    </ul>
                  </li>
                    
                </ul>
              </div>

              <div class="menu_section">
                <h3>Super Admin</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fas fa-user-lock"></i> Gestion users <span class="fas fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">Liste users</a></li>
                      <li><a href="apropos.html">Ajouter user</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fas fa-project-diagram"></i> Gestion Profils <span class="fas fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">Liste Profils</a></li>
                      <li><a href="page_404.html">Ajouter cat</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fas fa-sitemap"></i> Sous categories<span class="fas fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#level1_1">Liste sous cat</a> </li>
                      <li><a>Ajouter sous cat</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
    
            </div>
            <!-- /sidebar menu -->
    
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
    
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fas fa-bars"></i></a>
              </div>
    
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/img/author.png" alt="username ico">Apach User
                    <span class=" fas fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fas fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
    
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-envelope"></i>
                    <span class="badge bg-red">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                              <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                              <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                              <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                              <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                              Film festivals used to be do-or-die moments for movie makers. They were where...
                            </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fas fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div id="frame">
            <div id="sidepanel">
              <div id="profile">
                <div class="wrap">
                  <img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />
                  <p>Apach User</p>
                  <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
                  <div id="status-options">
                    <ul>
                      <li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
                      <li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
                      <li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
                      <li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
                    </ul>
                  </div>
                  <div id="expanded">
                    <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                    <input name="twitter" type="text" value="mikeross" />
                    <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                    <input name="twitter" type="text" value="ross81" />
                    <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                    <input name="twitter" type="text" value="mike.ross" />
                  </div>
                </div>
              </div>
              <div id="search">
                <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                <input type="text" placeholder="Search contacts..." />
              </div>
              <div id="contacts">
                <ul>
                  <li class="contact">
                    <div class="wrap">
                      <span class="contact-status online"></span>
                      <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                      <div class="meta">
                        <p class="name">Louis Litt</p>
                        <p class="preview">You just got LITT up, Mike.</p>
                      </div>
                    </div>
                  </li>
                  <li class="contact active">
                    <div class="wrap">
                      <span class="contact-status busy"></span>
                      <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                      <div class="meta">
                        <p class="name">Harvey Specter</p>
                        <p class="preview">Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                      </div>
                    </div>
                  </li>
                  <li class="contact">
                    <div class="wrap">
                      <span class="contact-status away"></span>
                      <img src="http://emilcarlsson.se/assets/rachelzane.png" alt="" />
                      <div class="meta">
                        <p class="name">Rachel Zane</p>
                        <p class="preview">I was thinking that we could have chicken tonight, sounds good?</p>
                      </div>
                    </div>
                  </li>
                  <li class="contact">
                    <div class="wrap">
                      <span class="contact-status online"></span>
                      <img src="http://emilcarlsson.se/assets/donnapaulsen.png" alt="" />
                      <div class="meta">
                        <p class="name">Donna Paulsen</p>
                        <p class="preview">Mike, I know everything! I'm Donna..</p>
                      </div>
                    </div>
                  </li>
                  <li class="contact">
                    <div class="wrap">
                      <span class="contact-status busy"></span>
                      <img src="http://emilcarlsson.se/assets/jessicapearson.png" alt="" />
                      <div class="meta">
                        <p class="name">Jessica Pearson</p>
                        <p class="preview">Have you finished the draft on the Hinsenburg deal?</p>
                      </div>
                    </div>
                  </li>
                  <li class="contact">
                    <div class="wrap">
                      <span class="contact-status"></span>
                      <img src="http://emilcarlsson.se/assets/haroldgunderson.png" alt="" />
                      <div class="meta">
                        <p class="name">Harold Gunderson</p>
                        <p class="preview">Thanks Mike! :)</p>
                      </div>
                    </div>
                  </li>
                  <li class="contact">
                    <div class="wrap">
                      <span class="contact-status"></span>
                      <img src="http://emilcarlsson.se/assets/danielhardman.png" alt="" />
                      <div class="meta">
                        <p class="name">Daniel Hardman</p>
                        <p class="preview">We'll meet again, Mike. Tell Jessica I said 'Hi'.</p>
                      </div>
                    </div>
                  </li>
                  <li class="contact">
                    <div class="wrap">
                      <span class="contact-status busy"></span>
                      <img src="http://emilcarlsson.se/assets/katrinabennett.png" alt="" />
                      <div class="meta">
                        <p class="name">Katrina Bennett</p>
                        <p class="preview">I've sent you the files for the Garrett trial.</p>
                      </div>
                    </div>
                  </li>
                  <li class="contact">
                    <div class="wrap">
                      <span class="contact-status"></span>
                      <img src="http://emilcarlsson.se/assets/charlesforstman.png" alt="" />
                      <div class="meta">
                        <p class="name">Charles Forstman</p>
                        <p class="preview">Mike, this isn't over.</p>
                      </div>
                    </div>
                  </li>
                  <li class="contact">
                    <div class="wrap">
                      <span class="contact-status"></span>
                      <img src="http://emilcarlsson.se/assets/jonathansidwell.png" alt="" />
                      <div class="meta">
                        <p class="name">Jonathan Sidwell</p>
                        <p class="preview"><span>You:</span> That's bullshit. This deal is solid.</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div id="bottom-bar">
                <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
                <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
              </div>
            </div>
            <div class="content">
              <div class="contact-profile">
                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                <p>Harvey Specter</p>
                <div class="social-media">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                   <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
              </div>
              <div class="messages">
                <ul>
                  <li class="sent">
                    <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                    <p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
                  </li>
                  <li class="replies">
                    <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                    <p>When you're backed against the wall, break the god damn thing down.</p>
                  </li>
                  <li class="replies">
                    <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                    <p>Excuses don't win championships.</p>
                  </li>
                  <li class="sent">
                    <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                    <p>Oh yeah, did Michael Jordan tell you that?</p>
                  </li>
                  <li class="replies">
                    <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                    <p>No, I told him that.</p>
                  </li>
                  <li class="replies">
                    <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                    <p>What are your choices when someone puts a gun to your head?</p>
                  </li>
                  <li class="sent">
                    <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                    <p>What are you talking about? You do what they say or they shoot you.</p>
                  </li>
                  <li class="replies">
                    <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                    <p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                  </li>
                </ul>
              </div>
              <div class="message-input">
                <div class="wrap">
                <input type="text" placeholder="Write your message..." />
                <i class="fa fa-paperclip attachment" aria-hidden="true"></i>
                <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
    
    
      </div>
    </div>
</body>

<!-- Magnific Popup core JS file -->
<script src="assets/js/jquery.magnific-popup.js"></script> 
<script type="text/javascript" src="assets/js/admin.js"></script>
<script type="text/javascript" src="assets/js/message.js"></script>

</html>