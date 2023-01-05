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
            <a href="#" class="header__user-block__camera">
                <img src="assets/img/header/user-block/user-camera.svg" alt="user-video icon">
            </a>
            <a href="#" class="header__user-block__options">
                <img src="assets/img/header/user-block/user-options.svg" alt="user-options icon">
            </a>
            <a href="#" class="header__user-block__notifications">
                <div class="notification__counter">
                    3
                </div>
                <img src="assets/img/header/user-block/user-notifications.svg" alt="user-notifications icon">
            </a>

            <a href="#" class="header__user-block__user-profile displayed">

                <img src="assets/img/header/user-block/Userpic.png" alt="user icon">
            </a>
        </div>
    </div>
</header>

<section class="content-block container">
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
    ------------------->
    <main class="container">
        <!-- Subscribed author  -->
        <section class="subscribed-author container content__section">
            <div class="channel__info">
                <a href="#" class="channel__link">
                    <div class="channel__icon">
                        <img src="assets/img/subscriptions/francis.png" alt="francis" class="subscriptions__link__img">
                    </div>
                    <h2>
                        Dollie Blair
                    </h2>
                </a>
                <div class="video-content__navigation">
                    <svg class="move-left" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00168 0.666111L7.53635 1.20513C7.71212 1.39201 7.80005 1.61012 7.80005 1.8592C7.80005 2.11332 7.71212 2.32896 7.53635 2.50631L4.07191 6L7.53626 9.49369C7.71203 9.67104 7.79996 9.88668 7.79996 10.1407C7.79996 10.3899 7.71203 10.608 7.53626 10.7949L7.00159 11.3268C6.8211 11.5089 6.60482 11.6 6.35293 11.6C6.09631 11.6 5.88248 11.5089 5.71143 11.3268L1.07093 6.64701C0.890341 6.47443 0.800049 6.25888 0.800049 6C0.800049 5.74597 0.890341 5.52795 1.07093 5.34592L5.71143 0.666111C5.88729 0.488762 6.10112 0.399999 6.35293 0.399999C6.60009 0.399999 6.81628 0.488762 7.00168 0.666111V0.666111Z" fill="white"/>
                    </svg>
                    <svg class="move-right" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.998319 0.666111L0.463653 1.20513C0.287881 1.39201 0.199951 1.61012 0.199951 1.8592C0.199951 2.11332 0.287881 2.32896 0.463653 2.50631L3.92809 6L0.463741 9.49369C0.287968 9.67104 0.200039 9.88668 0.200039 10.1407C0.200039 10.3899 0.287968 10.608 0.463741 10.7949L0.998406 11.3268C1.1789 11.5089 1.39518 11.6 1.64707 11.6C1.90369 11.6 2.11752 11.5089 2.28857 11.3268L6.92907 6.64701C7.10966 6.47443 7.19995 6.25888 7.19995 6C7.19995 5.74597 7.10966 5.52795 6.92907 5.34592L2.28857 0.666111C2.11271 0.488762 1.89888 0.399999 1.64707 0.399999C1.39991 0.399999 1.18372 0.488762 0.998319 0.666111Z" fill="white"/>
                    </svg>
                </div>
            </div>

            <!-- Subscribed author video section -->
            <section class="subscribed-author__content">
                <a class="content__tab">
                    <div class="video_small video-content">
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_small video-content">
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_small video-content">
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_small video-content">
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_small video-content">
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_small video-content">
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>
                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

            </section>
        </section>
        <!-- Recommended content -->

        <section class="recommended content__section">
            <div class="recommended__title">
                <h2>Recomended</h2>
                <div class="video-content__navigation">
                    <svg class="move-left" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00168 0.666111L7.53635 1.20513C7.71212 1.39201 7.80005 1.61012 7.80005 1.8592C7.80005 2.11332 7.71212 2.32896 7.53635 2.50631L4.07191 6L7.53626 9.49369C7.71203 9.67104 7.79996 9.88668 7.79996 10.1407C7.79996 10.3899 7.71203 10.608 7.53626 10.7949L7.00159 11.3268C6.8211 11.5089 6.60482 11.6 6.35293 11.6C6.09631 11.6 5.88248 11.5089 5.71143 11.3268L1.07093 6.64701C0.890341 6.47443 0.800049 6.25888 0.800049 6C0.800049 5.74597 0.890341 5.52795 1.07093 5.34592L5.71143 0.666111C5.88729 0.488762 6.10112 0.399999 6.35293 0.399999C6.60009 0.399999 6.81628 0.488762 7.00168 0.666111V0.666111Z" fill="white"/>
                    </svg>
                    <svg class="move-right" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.998319 0.666111L0.463653 1.20513C0.287881 1.39201 0.199951 1.61012 0.199951 1.8592C0.199951 2.11332 0.287881 2.32896 0.463653 2.50631L3.92809 6L0.463741 9.49369C0.287968 9.67104 0.200039 9.88668 0.200039 10.1407C0.200039 10.3899 0.287968 10.608 0.463741 10.7949L0.998406 11.3268C1.1789 11.5089 1.39518 11.6 1.64707 11.6C1.90369 11.6 2.11752 11.5089 2.28857 11.3268L6.92907 6.64701C7.10966 6.47443 7.19995 6.25888 7.19995 6C7.19995 5.74597 7.10966 5.52795 6.92907 5.34592L2.28857 0.666111C2.11271 0.488762 1.89888 0.399999 1.64707 0.399999C1.39991 0.399999 1.18372 0.488762 0.998319 0.666111Z" fill="white"/>
                    </svg>
                </div>
            </div>
            <div class="recommended__content">
                <a class="content__tab">
                    <div class="video_medium video-content">
                        <video>
                            <source src="assets/video/big_video.mp4" type="video/mp4">
                        </video>
                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_medium video-content">
                        <video>
                            <source src="assets/video/big_video.mp4" type="video/mp4">
                        </video>

                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_medium video-content">
                        <video>
                            <source src="assets/video/big_video.mp4" type="video/mp4">
                        </video>
                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>
            </div>
        </section>
        
        <!-- Recommended channels -->
        
        <section class="recommended__channels content__section">
            <div class="channel__info">
                <a href="#" class="channel__link">
                    <div class="channel__icon">
                        <img src="assets/img/subscriptions/francis.png" alt="francis" class="subscriptions__link__img">
                    </div>
                    <h2>
                        Dollie Blair
                    </h2>
                    <p class="channel__info-comment">Recommended channel for you</p>
                </a>
                <div class="video-content__navigation">
                    <p class="video-content__subscription-stat" style="">Subscribe 2.3m</p>
                    <svg class="move-left" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00168 0.666111L7.53635 1.20513C7.71212 1.39201 7.80005 1.61012 7.80005 1.8592C7.80005 2.11332 7.71212 2.32896 7.53635 2.50631L4.07191 6L7.53626 9.49369C7.71203 9.67104 7.79996 9.88668 7.79996 10.1407C7.79996 10.3899 7.71203 10.608 7.53626 10.7949L7.00159 11.3268C6.8211 11.5089 6.60482 11.6 6.35293 11.6C6.09631 11.6 5.88248 11.5089 5.71143 11.3268L1.07093 6.64701C0.890341 6.47443 0.800049 6.25888 0.800049 6C0.800049 5.74597 0.890341 5.52795 1.07093 5.34592L5.71143 0.666111C5.88729 0.488762 6.10112 0.399999 6.35293 0.399999C6.60009 0.399999 6.81628 0.488762 7.00168 0.666111V0.666111Z" fill="white"/>
                    </svg>
                    <svg class="move-right" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.998319 0.666111L0.463653 1.20513C0.287881 1.39201 0.199951 1.61012 0.199951 1.8592C0.199951 2.11332 0.287881 2.32896 0.463653 2.50631L3.92809 6L0.463741 9.49369C0.287968 9.67104 0.200039 9.88668 0.200039 10.1407C0.200039 10.3899 0.287968 10.608 0.463741 10.7949L0.998406 11.3268C1.1789 11.5089 1.39518 11.6 1.64707 11.6C1.90369 11.6 2.11752 11.5089 2.28857 11.3268L6.92907 6.64701C7.10966 6.47443 7.19995 6.25888 7.19995 6C7.19995 5.74597 7.10966 5.52795 6.92907 5.34592L2.28857 0.666111C2.11271 0.488762 1.89888 0.399999 1.64707 0.399999C1.39991 0.399999 1.18372 0.488762 0.998319 0.666111Z" fill="white"/>
                    </svg>
                </div>
            </div>
            <section class="recommended__channels__content">
                <a class="content__tab">
                    <div class="video_small video-content">
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_small video-content">
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_small video-content">
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_small video-content">

                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_small video-content">
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>

                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

                <a class="content__tab">
                    <div class="video_small video-content">
                        <video>
                            <source src="assets/video/Rustica%20Refresh%20(12%20Sec%20Promo).mp4" type="video/mp4">
                        </video>
                        <div class="video-time">
                            4:15
                        </div>
                    </div>
                    <h4>A Brief History Of Creation</h4>
                    <div class="content-info">
                        <div class="content_data">
                            <p datatype="content-views">80k views</p>
                            <p datatype="contnet-publish-date">3 days ago</p>
                        </div>
                        <span datatype="content-author-name">Dollie Blair</>
                    </div>
                </a>

            </section>
        </section>
    </main>
</section>
</body>
</html>
