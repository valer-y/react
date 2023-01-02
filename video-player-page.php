<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!------------------
### Header ###
------------------->

<header>
    <div class="container">
        <a class="header__burger-menu">
            <div></div>
            <div></div>
            <div></div>
        </a>
        <a class="header__logo" href="/">
            <img src="assets/img/header/Logo.svg" alt="Site logo">
        </a>
        <div class="header__search-form">
            <form action="#">
                <input type="text" placeholder="Search" name="search">
                <button type="submit">
                    <img src="assets/img/header/search-form/lens.svg" alt="">
                </button>
            </form>
            <div class="header__search-form_mobile"></div>
        </div>
        <div class="header__user-block">
            <a href="#" class="header__user-block__link">
                <img src="assets/img/header/user-block/user-camera.svg" alt="user-video icon">
            </a>
            <a href="#" class="header__user-block__link">
                <img src="assets/img/header/user-block/user-options.svg" alt="user-options icon">
            </a>
            <a href="#" class="header__user-block__link header__user-block__notifications">
                <div class="notification__counter">
                    3
                </div>
                <img src="assets/img/header/user-block/user-notifications.svg" alt="user-notifications icon">
            </a>
            <a href="#" class="header__user-block__user-profile">
                <img src="assets/img/header/user-block/Userpic.png" alt="user icon">
            </a>
        </div>
    </div>
</header>

<section class="video-player-block container">
    <!------------------
    ### Navigation ###
    ------------------->
    <aside>
        <!--
          **  Navigation menu **
        -->
        <nav class="nav-menu">
            <a href="#" class="nav-menu__link">
                <div class="nav-menu__link__icon">
                    <img src="assets/img/nav/home.svg" alt="home" class="nav-menu__link__img">
                </div>
                <div class="nav-menu__link__text">
                    Home
                </div>
            </a>
            <a href="#" class="nav-menu__link">
                <div class="nav-menu__link__icon">
                    <img src="assets/img/nav/fire.svg" alt="trending" class="nav-menu__link__img">
                </div>
                <div class="nav-menu__link__text">
                    Trending
                </div>
            </a>
            <a href="#" class="nav-menu__link">
                <div class="nav-menu__link__icon">
                    <img src="assets/img/nav/folders.svg" alt="subscriptions" class="nav-menu__link__img">
                </div>
                <div class="nav-menu__link__text">
                    Subscriptions
                </div>
            </a>
            <a href="#" class="nav-menu__link">
                <div class="nav-menu__link__icon">
                    <img src="assets/img/nav/documents.svg" alt="library" class="nav-menu__link__img">
                </div>
                <div class="nav-menu__link__text">
                    Library
                </div>
            </a>
            <a href="#" class="nav-menu__link">
                <div class="nav-menu__link__icon">
                    <img src="assets/img/nav/scroll.svg" alt="history" class="nav-menu__link__img">
                </div>
                <div class="nav-menu__link__text">
                    History
                </div>
            </a>
            <a href="#" class="nav-menu__link">
                <div class="nav-menu__link__icon">
                    <img src="assets/img/nav/clocks.svg" alt="watch later" class="nav-menu__link__img">
                </div>
                <div class="nav-menu__link__text">
                    Watch later
                </div>
            </a>
            <a href="#" class="nav-menu__link">
                <div class="nav-menu__link__icon">
                    <img src="assets/img/nav/star.svg" alt="favorites" class="nav-menu__link__img">
                </div>
                <div class="nav-menu__link__text">
                    Favorites
                </div>
            </a>
            <a href="#" class="nav-menu__link">
                <div class="nav-menu__link__icon">
                    <img src="assets/img/nav/heart.svg" alt="liked videos" class="nav-menu__link__img">
                </div>
                <div class="nav-menu__link__text">
                    Liked videos
                </div>
            </a>
            <a href="#" class="nav-menu__link">
                <div class="nav-menu__link__icon">
                    <img src="assets/img/nav/music.svg" alt="music" class="nav-menu__link__img">
                </div>
                <div class="nav-menu__link__text">
                    Music
                </div>
            </a>
            <a href="#" class="nav-menu__link">
                <div class="nav-menu__link__icon">
                    <img src="assets/img/nav/games.svg" alt="games" class="nav-menu__link__img">
                </div>
                <div class="nav-menu__link__text">
                    Games
                </div>
            </a>
            <a href="#" class="nav-menu__link">
                <div class="nav-menu__link__icon">
                    <img src="assets/img/nav/chevron-down.svg" alt="show more" class="nav-menu__link__img">
                </div>
                <div class="nav-menu__link__text">
                    Show more
                </div>
            </a>

        </nav>

        <!-- **  Subscriptions ** -->

        <section class="subscriptions container">
            <h3>Subscriptions</h3>
            <div class="subscriptions__list">
                <a href="#" class="subscriptions__link">
                    <div class="subscriptions__link__icon">
                        <img src="assets/img/subscriptions/francis.png" alt="francis" class="subscriptions__link__img">
                    </div>
                    <div class="subscriptions__link__text">
                        Nora Francis
                    </div>
                </a>
                <a href="#" class="subscriptions__link">
                    <div class="subscriptions__link__icon">
                        <img src="assets/img/subscriptions/briggs.png" alt="brigs" class="subscriptions__link__img">
                    </div>
                    <div class="subscriptions__link__text">
                        Belle Brigs
                    </div>
                </a>
                <a href="#" class="subscriptions__link">
                    <div class="subscriptions__link__icon">
                        <img src="assets/img/subscriptions/cortez.png" alt="cortez" class="subscriptions__link__img">
                    </div>
                    <div class="subscriptions__link__text">
                        Eunice Cortez
                    </div>
                </a>
                <a href="#" class="subscriptions__link">
                    <div class="subscriptions__link__icon">
                        <img src="assets/img/subscriptions/hanson.png" alt="hanson" class="subscriptions__link__img">
                    </div>
                    <div class="subscriptions__link__text">
                        Emma Hanson
                    </div>
                </a>
                <a href="#" class="subscriptions__link">
                    <div class="subscriptions__link__icon">
                        <img src="assets/img/subscriptions/leah.png" alt="berry" class="subscriptions__link__img">
                    </div>
                    <div class="subscriptions__link__text">
                        Leah Berry
                    </div>
                </a>
            </div>
        </section>

        <!-- **  Settings ** -->

        <div class="settings">
            <div class="settings__icon">
                <img src="assets/img/settings/settings.svg" alt="settings">
            </div>
            Settings
        </div>

    </aside>

    <!------------------
    ### Main section ###
       - Cover
       - Author profile
       - Videos navigation
       - Current video
       - Author videos carousel
    ------------------->

    <main class="container video-player-block">
        <div class="current-video container">
            <video controls>
                <source src="assets/video/big_video.mp4" type="video/mp4">
            </video>
            <div class="current-video-title__block">
                <div class="current-video-title">
                    <h1>Dude You Re Getting A Telescope</h1>
                    <p datatype="content-views">123k views</p>
                </div>
                <ul>
                    <li><a href="#"><img src="assets/img/video-icons/like.svg" alt="">123K</a></li>
                    <li><a href="#"><img src="assets/img/video-icons/dislike.svg" alt="">435K</a></li>
                    <li><a href="#"><img src="assets/img/video-icons/share.svg" alt="">Share</a></li>
                    <li class="menu">
                        <a href="#">
                            <div></div>
                            <div></div>
                            <div></div>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="current-video__description container_flex">
                <img src="assets/img/subscriptions/hanson.png" alt="" class="channel-icon">
                <div class="current-video-description">
                    <h2>Food & Drink</h2>
                    <p class="published-date">Published on 14 Jun 2019</p>
                    <p class="vide-description__text">A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy; it is based on a number of factors, including ad placement, demographic, even the consumer’s mood when they see your ad. </p>
                    <a href="" class="show-more">Show more</a>
                </div>
                <div class="video-content__navigation">
                    <p class="video-content__subscription-stat" style="">Subscribe 2.3m</p>
                </div>

            </div>

        </div>

        <div class="next-video__block">
            <div class="next-video__block__header">
                <h2>Next</h2>
                <div>
                    <p>AUTOPLAY</p>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="next-video">
                <a class="content__tab">
                    <div class="video_small video-content">
                        <div class="video-time">
                            4:15
                        </div>
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                    </div>
                    <h2>A Brief History Of Creation</h2>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                        </div>
                        <span datatype="content-category-name">Food & Drink</>
                    </div>
                </a>
                <a class="content__tab">
                    <div class="video_small video-content">
                        <div class="video-time">
                            4:15
                        </div>
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                    </div>
                    <h2>A Brief History Of Creation</h2>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                        </div>
                        <span datatype="content-category-name">Food & Drink</>
                    </div>
                </a>
                <a class="content__tab">
                    <div class="video_small video-content">
                        <div class="video-time">
                            4:15
                        </div>
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                    </div>
                    <h2>A Brief History Of Creation</h2>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                        </div>
                        <span datatype="content-category-name">Food & Drink</>
                    </div>
                </a>
                <a class="content__tab">
                    <div class="video_small video-content">
                        <div class="video-time">
                            4:15
                        </div>
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                    </div>
                    <h2>A Brief History Of Creation</h2>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                        </div>
                        <span datatype="content-category-name">Food & Drink</>
                    </div>
                </a>
            </div>
        </div>
    </main>

</section>
</body>
</html>


</section>