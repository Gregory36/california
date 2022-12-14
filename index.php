<!DOCTYPE html>
<html>
<head>
    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&display=swap" rel="stylesheet">
    <!-- Шрифты -->

    <meta charset="UTF-8">
    <link rel="icon" href="source/icon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CALIFORNIA</title>
</head>
<body>
    <div class="container">
        <header>
            <div id="logo">CALIFORNIA</div>
            <nav>
                <a href="#1">ALL PRODUCTS</a>
                <a href="#2">SOLUTIONS</a>
                <a href="#3">ABOUT</a>
                <a href="#4">SUPPORT</a>
            </nav>
            <div id="searchAndBucket">
                <p hidden="true" id="login_name">Name</p>
                <button id="logOut_image" type="button" hidden="true"></button>
                <button id="signIn_image" type="button" data-bs-toggle="modal" data-bs-target="#formLoginModal" ></button>
                <a id="bucket_image" href=""></a>
            </div>
        </header>
        <main>
            <section class="phones">
                <div id="phones_left">
                    <div id="wrapper_words">
                        <h2>The new phones are here take a look.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in est dui, aliquam, tempor. Faucibus morbi turpis.</p>
                        <button>Explore</button> 
                    </div>
                </div>
                <div id="phones_right"><!--тут фотка если че--></div>
            </section>
            <section id="1" class="devices">
                <div id="main_text">
                    <h3>Shop our latest offers and categories</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in est dui, aliquam, tempor. Faucibus morbi turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <section class="device_container">
                    <div class="horizontal_container">
                        <div id="first_horizontal">
                            <div id="macbook_photo"></div>
                            <div id="macbook_description">
                                <p>Laptops</p>
                                <h4>True Laptop<br> Solution</h4>
                            </div>
                        </div>
                        <div id="second_horizontal">
                            <div id="watch_photo"></div>
                            <div id="watch_description">
                                <p>Watch</p>
                                <h4>Not just<br> stylisht</h4>
                            </div>
                        </div>
                    </div>
                    <div class="vertical">
                        <div id="iphone_photo"></div>
                        <div id="iphone_description">
                            <p>Phones</p>
                            <h4>Your day to day<br> life</h4>
                        </div>
                    </div>
                    <div class="vertical">
                        <div id="ipad_description">
                            <p>Tablet</p>
                            <h4>Empower your<br> work</h4>
                        </div>
                        <div id="ipad_photo"></div>
                    </div>
                </section>
            </section>
            <section id="2" class="devices_with_price">
                <div id="main_text">
                    <h3>See the best around here</h3>
                    <p>Our new Limited Edition Winter Design BESPOKE 4-Door Flex™</p>
                </div>
                <section class="product_container">
                    <div class="some_device">
                        <div id="macbook_image_5"></div>
                        <h4 class="device_name">MacBook Pro 13</h4>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p>
                        <h4 class="device_price">$ 1,200.00 USD</h4>
                    </div>
                    <div class="some_device">
                        <div id="watch_image_3"></div>
                        <h4 class="device_name">Smart Galaxy Watch 3</h4>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                        <h4 class="device_price">$ 199.00 USD</h4>
                    </div>
                    <div class="some_device">
                        <div id="macbook_image_6"></div>
                        <h4 class="device_name">MacBook Air M1</h4>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                        <h4 class="device_price">$ 1,009.00 USD</h4>
                    </div>
                    <div class="some_device">
                        <div id="ipad_image_2"></div>
                        <h4 class="device_name">iPad</h4>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                        <h4 class="device_price">$ 610.00 USD</h4>
                    </div>
                </section>
            </section>
            <section id="3" class="products">
                <div id="main_text">
                    <h3>See the best around here</h3>
                    <p>Our new Limited Edition Winter Design BESPOKE 4-Door Flex™</p>
                </div>
                <section class="product_container">
                    <div class="some_product">
                        <p>Smart light bulb pack</p>
                        <h4>Latest and gratest</h4>
                        <button>Explore</button>
                        <div id="watch_image_2"></div>
                    </div>
                    <div class="some_product">
                        <p>Smart light bulb pack</p>
                        <h4>Best selling</h4>
                        <button>Explore</button>
                        <div id="macbook_image_2"></div>
                    </div>
                    <div class="some_product">
                        <p>Smart light bulb pack</p>
                        <h4>Latest and gratest</h4>
                        <button>Explore</button>
                        <div id="macbook_image_3"></div>
                    </div>
                </section>
            </section>
            <section id="4" class="authorization_container">
                <div class="search_block">
                    <h3>Looking for anything else?</h3>
                    <div id="search_bar">
                        <div id="search_bar_image"></div>
                        <input type="text" placeholder="Search keyword">
                    </div>
                    <div id="search_tags">
                        <div class="line_tags">
                            <button>iPhone</button>
                            <button>Charger</button>
                            <button>Gift</button>
                            <button>Google Pixel 3</button>
                            <button>Keyboard</button>
                        </div>
                        <div class="line_tags">
                            <button>13 Pro Max</button>
                            <button>iPhone 12</button>
                            <button>Laptop</button>
                            <button>Mobile</button>
                        </div>
                    </div>
                </div>
                <div class="authorization_block">
                    <h3>Never miss a thing</h3>
                    <p>Sign up for texts to be notified about our best offers on the perfect gifts.</p>
                    <div id="macbook_image_4"></div>
                    <div id="search_bar_2">
                        <input type="text" placeholder="Your email">
                        <button>Sign up</button>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <footer>
        <div class="bottom_logo">
            <div id="logo">CALIFORNIA</div>
            <p>Sign up for texts to be notified about<br> our best offers on the perfect gifts.</p>
        </div>
        <nav>
            <a href="#1">ALL PRODUCTS</a>
            <a href="#2">SOLUTIONS</a>
            <a href="#3">ABOUT</a>
            <a href="#4">SUPPORT</a>
        </nav>
    </footer>
    <!-- backToTop button -->
    <div class="backToTop"></div>

    <!-- bootstrap_modal -->
    <div class="modal fade" id="formLoginModal" role="dialog" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Логин:</label>
                            <input type="text" class="form-control" id="login" name="login" required>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Пароль:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            <button type="submit" class="buttonLogInpr" name="enter" id="enter">Вход</button>
                            <button type="submit" class="buttonRegpr" name="registration" id="registration">Регистрация</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>