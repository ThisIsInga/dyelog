<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/Cart.css">
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
        <section class="cart">
            <div class="container">
                <div class="cart__title">
                    <h2>Cart</h2>
                </div>
                <div class="cart__form">
                    <div class="cart__rolls">
                        <div class="cart__rolls-img">
                            <img src="./assets/img/menu/kogase.jpg">
                        </div>
                        <div class="cart__rolls-text">
                            <h2>Roll "Dragon"</h2>
                            <p>Eel, Japanese omelet "Tamago", cream cheese, chuka, white sesame, Unagi sauce</p>
                            <div class="cart__rolls-price">
                                <span>1000$</span>
                                <button>-</button>
                                <span>9999</span>
                                <button>+</button>
                            </div>
                        </div>
                        <div class="cart__rolls-function">
                            <a>To favorites</a>
                            <button>Delete</button>
                        </div>
                    </div>
                    <div class="cart__order">
                        <div class="cart__order-total">
                            <p>Total</p>
                            <p>99990000$</p>
                        </div>
                        <div class="cart__order-delivery">
                            <p>Delivery:</p>
                            <a>Choose delivery address</a>
                        </div>
                        <div>
                            <button>Order</button>
                        </div>
                        <div>
                            <p>I agree with the terms of the Rules for using the trading platform and the return policy</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <footer>
            <div class="footer__top">
                <a href="index.html">
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

    <script>
        document.querySelectorAll('.bt_plus').forEach(e => {
            e.onclick = (event) => {
                event.currentTarget.parentNode.querySelector('.quantity').value = 
                Number(event.currentTarget.parentNode.querySelector('.quantity').value) + 1
            }
        })

        document.querySelectorAll('.bt_minus').forEach(e => {
            e.onclick = (event) => {
                event.currentTarget.parentNode.querySelector('.quantity').value =
                Number(event.currentTarget.parentNode.querySelector('.quantity').value) - 1
            }
        })
    </script>
</body>
</html>