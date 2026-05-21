<?php
session_start();
require_once('./php/Server.php');

$isLoggedIn = isset($_SESSION['USER']);
$userPhone = $isLoggedIn ? $_SESSION['USER']['Phone'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li>
                        <button aria-label="Burger-Menu">
                            <img src="./assets/img/header/burger-menu.png" alt="burger-menu">
                        </button>
                    </li>
                    <li>
                        <button aria-label="Search">
                            <img src="./assets/img/header/search.png" alt="search">
                        </button>
                    </li>
                    <li>
                        <button aria-label="Cart">
                            <img src="./assets/img/header/shopping-bag.png" alt="shopping-bag">
                        </button>
                    </li>
                </ul>
                <div class="header__logo">
                    <a href="index.html">
                        <span class="accent-text">D</span>yelog
                    </a>
                </div>
                <ul class="header__social-list">
                    <li>
                        <button aria-label="Instagram">
                            <img src="./assets/img/header/instagram.png" alt="instagram">
                        </button>
                    </li>
                    <li>
                        <button aria-label="Vkontakte">
                            <img src="./assets/img/header/vkontakte.png" alt="vkontakte">
                        </button>
                    </li>
                    <li>
                        <button aria-label="Twitter">
                            <img src="./assets/img/header/twitter.png" alt="twitter">
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="intro">
            <div class="container">
                <div class="main__text">
                    <h1><span class="accent-text">Japanese</span> Food Restaurant</h1>
                    <input type="text" class="block" placeholder="Enter your address"/>
                </div>
                <div class="main__card">
                    <img src="./assets/img/intro/sushi.jpg"/>
                    <div class="main__card-text">
                        <h2>Deal of the week <span class="accent-text">2 in 1</span></h2>
                        <span class="accent-text">→</span>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="sec__menu">
            <div class="container">
                <div class="menu__title">
                    <h2>Menu</h2>
                </div>
                <div class="menu__main">
                    <nav class="menu__categories" aria-label="Food categories">
                        <ul class="menu__categories-list">
                            <li><button>Filter</button></li>
                            <li><button>Bestseller</button></li>
                            <li><button>New</button></li>
                            <li><button>Rolls</button></li>
                            <li><button>Pizza</button></li>
                            <li><button>Snacks</button></li>
                            <li><button>Burgers</button></li>
                            <li><button>Drinks</button></li>
                            <li><button>Side Dishes</button></li>
                            <li><button>Vegetarian</button></li>
                        </ul>
                    </nav>
                    <div class="menu__cards">
                        <div class="menu__card">
                            <img src="./assets/img/menu/dragon-roll.jpg"/>
                            <div class="menu__card-info">
                                <h2>Roll "Dragon"</h2>
                                <img src="./assets/img/menu/information.png" alt="info" class="info-icon">
                            </div>
                            <p>Eel, Japanese omelet "Tamago", cream cheese, chuka, white sesame, Unagi sauce</p>
                            <hr>
                            <div class="menu__card-cost">
                                <p>9,99$</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="menu__card">
                            <img src="./assets/img/menu/philadelphia-roll.jpg"/>
                            <div class="menu__card-info">
                                <h2>Philadelphia Light</h2>
                                <img src="./assets/img/menu/information.png" alt="info" class="info-icon">
                            </div>
                            <p>Cream cheese, perch, chuka, Japanese omelet "Tomago", nut sauce, sesame</p>
                            <hr>
                            <div class="menu__card-cost">
                                <p>9,99$</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="menu__card">
                            <img src="./assets/img/menu/prime-light.jpg"/>
                            <div class="menu__card-info">
                                <h2>Prime Light</h2>
                                <img src="./assets/img/menu/information.png" alt="info" class="info-icon">
                            </div>
                            <p>Salmon, tuna, crab mix, cream cheese, cucumber, avocado, Unagi sauce, sesame, toaster cheese</p>
                            <hr>
                            <div class="menu__card-cost">
                                <p>9,99$</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="menu__card">
                            <img src="./assets/img/menu/arigato.jpg"/>  
                            <div class="menu__card-info">
                                <h2>Arigato</h2>
                                <img src="./assets/img/menu/information.png" alt="info" class="info-icon">
                            </div>
                            <p>Tiger shrimp, cream cheese, cucumber, salmon, tuna, Unagi, sauce, sesame</p>
                            <hr>
                            <div class="menu__card-cost">
                                <p>9,99$</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="menu__card">
                            <img src="./assets/img/menu/kogase.jpg"/>
                            <div class="menu__card-info">
                                <h2>Kogase</h2>
                                <img src="./assets/img/menu/information.png" alt="info" class="info-icon">
                            </div>
                            <p>Eel, Japanese omelet "Tamago", cream cheese, chuka, white sesame, Unagi sauce</p>
                            <hr>
                            <div class="menu__card-cost">
                                <p>9,99$</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="menu__card">
                            <img src="./assets/img/menu/cheddar.jpg"/>
                            <div class="menu__card-info">
                                <h2>Cheddar</h2>
                                <img src="./assets/img/menu/information.png" alt="info" class="info-icon">
                            </div>
                            <p>Cream cheese, perch, chuka, Japanese omelet "Tomago", nut sauce, sesame</p>
                            <hr>
                            <div class="menu__card-cost">
                                <p>9,99$</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                        <div class="menu__card">
                            <img src="./assets/img/menu/california-light.jpg"/>
                            <div class="menu__card-info">
                                <h2>California Light</h2>
                                <img src="./assets/img/menu/information.png" alt="info" class="info-icon">
                            </div>
                            <p>Salmon, tuna, crab mix, cream cheese, cucumber, avocado, Unagi sauce, sesame, toaster cheese</p>
                            <hr>
                            <div class="menu__card-cost">
                                <p>9,99$</p>
                                <button>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec__latest-news">
            <div class="container">
                <div class="latest-news__title">
                    <h2>Latest News</h2>
                </div>
                <div class="latest-news__cards">
                    <div class="latest-news__card">
                        <img src="./assets/img/latest-news/kebabs.png">
                        <div class="latest-news__card-info">
                            <div>
                                <p>01.06.2022</p>
                                <h2>Parties in the "Yershe"</h2>
                            </div>
                            <button>Read</button>
                        </div>
                    </div>
                    <div class="latest-news__card">
                        <img src="./assets/img/latest-news/pub.jpg">
                        <div class="latest-news__card-info">
                            <div>
                                <p>30.05.2022</p>
                                <h2>Permanent promotions</h2>
                            </div>
                            <button>Read</button>
                        </div>
                    </div>
                    <div class="latest-news__card">
                        <img src="./assets/img/latest-news/set-sushi.png">
                        <div class="latest-news__card-info">
                            <div>
                                <p>30.05.2022</p>
                                <h2>Parties in the "Moscow"</h2>
                            </div>
                            <button>Read</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec__download">
            <div class="container">
                <div class="download__text">
                    <h2>Download Our App</h2>
                    <p>Download our app to your phone and get a promo code hova lorem ipsum dollar!</p>
                    <div class="download__promo-code">
                        <div class="promo-code__app">
                            <img src="./assets/img/download/google-play.png"/>
                            <img src="./assets/img/download/app-store.png">
                        </div>
                        <img src="./assets/img/download/qr-code.png">
                    </div>
                </div>
                <div class="download__img">
                    <img src="./assets/img/download/hand_phone.jpg"/>
                </div>
            </div>
        </section>
        <hr>
        <footer>
            <div class="footer__top">
                <a href="index.php">
                    <span class="accent-text">D</span>yelog
                </a>
                <ul class="footer__ul">
                    <li><a>Menu</a></li>
                    <li><a>About Us</a></li>
                    <li><a >Promotion & Special Offers</a></li>
                    <li><a>News</a></li>
                    <li><a>Contact</a></li>
                </ul>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="footer__bottom-content">
                        <p>@All rights reserved. 2022</p>
                        <ul class="footer__bottom-social">
                            <li>
                                <button aria-label="Instagram">
                                    <img src="./assets/img/header/instagram.png" alt="instagram">
                                </button>
                            </li>
                            <li>
                                <button aria-label="Vkontakte">
                                    <img src="./assets/img/header/vkontakte.png" alt="vkontakte">
                                </button>
                            </li>
                            <li>
                                <button aria-label="Twitter">
                                    <img src="./assets/img/header/twitter.png" alt="twitter">
                                </button>
                            </li>
                        </ul>
                        <div class="footer__bottom-use">
                            <a>Privacy Policy</a>
                            <a>Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="./scripts/Hidden_text.js"></script>
</body>
</html>