<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodeiblog | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="./index.html"><img src="img/humberger/humberger-logo.png" alt=""></a>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="#">Recipes</a></li>
                <li><a href="#">Dinner</a></li>
                <li><a href="#">Desserts</a></li>
                <li class="dropdown"><a href="#">Pages</a>
                    <ul class="dropdown__menu">
                        <li><a href="./categories-grid.html">Categories Grid</a></li>
                        <li><a href="./categories-list.html">Categories List</a></li>
                        <li><a href="./single-post.html">Single Post</a></li>
                        <li><a href="./signin.html">Sign In</a></li>
                        <li><a href="./404.html">404</a></li>
                        <li><a href="./typography.html">Typography</a></li>
                    </ul>
                </li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="humberger__menu__about">
            <div class="humberger__menu__title sidebar__item__title">
                <h6>About me</h6>
            </div>
            <img src="img/humberger/humberger-about.jpg" alt="">
            <h6>Hi every one! I,m Lena Mollein.</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
            <div class="humberger__menu__about__social sidebar__item__follow__links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-envelope-o"></i></a>
            </div>
        </div>
        <div class="humberger__menu__subscribe">
            <div class="humberger__menu__title sidebar__item__title">
                <h6>Subscribe</h6>
            </div>
            <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
            <form action="#">
                <input type="text" class="email-input" placeholder="Your email">
                <label for="agree-check">
                    I agree to the terms & conditions
                    <input type="checkbox" id="agree-check">
                    <span class="checkmark"></span>
                </label>
                <button type="submit" class="site-btn">Subscribe</button>
            </form>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                        <div class="header__humberger">
                            <i class="fa fa-bars humberger__open"></i>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-10 order-md-2 order-3">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="./index.html">Home</a></li>
                                <li><a href="#">Recipes</a>
                                    <div class="header__megamenu__wrapper">
                                        <div class="header__megamenu">
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-1.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-2.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-3.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-4.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-5.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">Dinner</a></li>
                                <li><a href="#">Desserts</a></li>
                                <li><a href="#">Vegan</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                        <div class="header__search">
                            <i class="fa fa-search search-switch"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__btn">
                        <a href="./signin.html" class="primary-btn">Subscribe</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-md-2">
                    <div class="header__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Single Post Section Begin -->
    <section class="single-post spad">
        <div class="single-post__hero set-bg" data-setbg="img/categories/single-post/single-post-hero.jpg"></div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="single-post__title">
                        <div class="single-post__title__meta">
                            <h2>08</h2>
                            <span>Aug</span>
                        </div>
                        <div class="single-post__title__text">
                            <ul class="label">
                                <li>Vegan</li>
                                <li>Desserts</li>
                            </ul>
                            <h4>Weight loss diet: Ditching this one food can help you slim down fast - what is it?</h4>
                            <ul class="widget">
                                <li>by Admin</li>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-post__social__item">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <div class="single-post__top__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua accusantium doloremque laudantium. </p>
                    </div>
                    <div class="single-post__recipe__details">
                        <div class="single-post__recipe__details__option">
                            <ul>
                                <li>
                                    <h5><i class="fa fa-user-o"></i> SERVES</h5>
                                    <span>2 as a main, 4 as a side</span>
                                </li>
                                <li>
                                    <h5><i class="fa fa-clock-o"></i> PREP TIME</h5>
                                    <span>15 minute</span>
                                </li>
                                <li>
                                    <h5><i class="fa fa-clock-o"></i> Cook TIME</h5>
                                    <span>15 minute</span>
                                </li>
                                <li><a href="#" class="primary-btn"><i class="fa fa-print"></i> Read more</a></li>
                            </ul>
                        </div>
                        <div class="single-post__recipe__details__indegradients">
                            <h5>Ingredients</h5>
                            <ul>
                                <li>Ingredients</li>
                                <li>1 cup (240 ml) water, plus more as needed</li>
                                <li>1 teaspoon fine sea salt</li>
                                <li>2 tablespoons olive oil</li>
                                <li>3/4 cup (120 g) fine polenta</li>
                                <li>3 cups sunflower oil, plus more as needed</li>
                                <li>7 ounces (200 g) peeled parsnips, very thinly sliced on a mandoline</li>
                                <li>1 pinch fine sea salt, plus more to taste</li>
                                <li>2 tablespoons (30 g) unsalted butter</li>
                                <li>1/2 tablespoon maple syrup (up to 1 tablespoon as needed)</li>
                            </ul>
                        </div>
                        <div class="single-post__recipe__details__direction">
                            <h5>Directions</h5>
                            <ul>
                                <li><span>1.</span> Combine all of the ingredients, kneading to form a smooth dough.
                                </li>
                                <li><span>2.</span> Allow the dough to rise, in a lightly greased, covered bowl, until
                                    it’s doubled in size, about 90 minutes.</li>
                                <li><span>3.</span> Gently divide the dough in half; it’ll deflate somewhat.</li>
                                <li><span>4.</span> Gently shape the dough into two oval loaves; or, for longer loaves,
                                    two 10″ to 11″ logs. Place the loaves on a lightly greased or parchment-lined baking
                                    sheet. Cover and let rise until very puffy, about 1 hour. Towards the</li>
                                <li><span>5.</span> end of the rising time, preheat the oven to 425°F.</li>
                                <li><span>6.</span> Spray the loaves with lukewarm water.</li>
                                <li><span>7.</span> Make two fairly deep diagonal slashes in each; a serrated bread
                                    knife, wielded firmly, works well here.</li>
                                <li><span>8.</span> Bake the bread for 25 to 30 minutes, until it’s a very deep golden
                                    brown. Remove it from the oven, and cool on a rack.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-post__middle__text">
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in. .
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                    </div>
                    <div class="single-post__quote">
                        <p>The whole family of tiny legumes, whether red, green, yellow, or black, offers so many
                            possibilities to create an exciting lunch.</p>
                        <span>MEIKE PETERS</span>
                    </div>
                    <div class="single-post__desc">
                        <p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat.</p>
                        <h4>You Can Buy For Less Than A College Degree</h4>
                        <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia </p>
                    </div>
                    <div class="single-post__more__details">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <img src="img/categories/single-post/single-post-desc.jpg" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <p>Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in
                                    ligula finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada
                                    lectus aliquam. In auctor viverra eros. Maecenas elit mi, dictum et consectetur nec,
                                    sollicitudin sed arcu.</p>
                                <p>Curabitur tempor tempor pharetra.Sed imperdiet sem at nunc luctus, sed cursus nulla
                                    mollis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                                    ridiculus mus porta tincidunt, purus enim laoreet.</p>
                                <p>Duis aute irure dolor inenim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo conslaboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-post__last__text">
                        <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                            vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                            aut fugit. Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt
                            tempora incidunt ut labore quia non numquam eius modi.</p>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                            Mauris vel magna ex. Integer gravida tincidunt accumsan. Vestibulum nulla mauris,
                            condimentum id felis ac, volutpat volutpat mi. In vitae tempor velit of the impenetrable
                            foliage quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci.</p>
                    </div>
                    <div class="single-post__tags">
                        <a href="#">Food</a>
                        <a href="#">Vegan</a>
                        <a href="#">Tomato</a>
                        <a href="#">Weightloss</a>
                    </div>
                    <div class="single-post__next__previous">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <a href="#" class="single-post__previous">
                                    <h6><span class="arrow_carrot-left"></span> Previous posts</h6>
                                    <div class="single-post__previous__meta">
                                        <h4>08</h4>
                                        <span>Aug</span>
                                    </div>
                                    <div class="single-post__previous__text">
                                        <span>Dinner</span>
                                        <h5>The Best Weeknight Baked <br />Potatoes, 3 Creative Ways</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <a href="#" class="single-post__next">
                                    <h6>Next posts <span class="arrow_carrot-right"></span> </h6>
                                    <div class="single-post__next__meta">
                                        <h4>05</h4>
                                        <span>Aug</span>
                                    </div>
                                    <div class="single-post__next__text">
                                        <span>Smoothie</span>
                                        <h5>The $8 French Rosé I Buy in <br />Bulk Every Summer</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-post__author__profile">
                        <div class="single-post__author__profile__pic">
                            <img src="img/categories/single-post/author-profile.jpg" alt="">
                        </div>
                        <div class="single-post__author__profile__text">
                            <h4>Lena Mollein.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="single-post__author__profile__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-post__comment">
                        <div class="widget__title">
                            <h4>03 Comment</h4>
                        </div>
                        <div class="single-post__comment__item">
                            <div class="single-post__comment__item__pic">
                                <img src="img/categories/single-post/comment/comment-1.jpg" alt="">
                            </div>
                            <div class="single-post__comment__item__text">
                                <h5>Brandon Kelley</h5>
                                <span>15 Aug 2017</span>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                    magnam.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-share-square-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-post__comment__item single-post__comment__item--reply">
                            <div class="single-post__comment__item__pic">
                                <img src="img/categories/single-post/comment/comment-2.jpg" alt="">
                            </div>
                            <div class="single-post__comment__item__text">
                                <h5>Brandon Kelley</h5>
                                <span>15 Aug 2017</span>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                    magnam.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-share-square-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-post__comment__item">
                            <div class="single-post__comment__item__pic">
                                <img src="img/categories/single-post/comment/comment-3.jpg" alt="">
                            </div>
                            <div class="single-post__comment__item__text">
                                <h5>Brandon Kelley</h5>
                                <span>15 Aug 2017</span>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                    magnam.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#"><i class="fa fa-share-square-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-post__leave__comment">
                        <div class="widget__title">
                            <h4>Leave a comment</h4>
                        </div>
                        <form action="#">
                            <div class="input-list">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Website">
                            </div>
                            <textarea placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Post Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="footer__instagram">
                <div class="footer__instagram__avatar">
                    <div class="footer__instagram__avatar--pic">
                        <img src="img/footer/instagram-avatar.jpg" alt="">
                    </div>
                    <div class="footer__instagram__avatar--text">
                        <h5>@ foodieblog</h5>
                        <span>23,7k follower</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-2.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-3.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-4.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-5.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-6.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__text">
                        <div class="footer__logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut<br /> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                            commodo viverra<br /> maecenas accumsan lacus vel facilisis. </p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                    <div class="footer__copyright">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>