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
        <div class="header-options">
            <div></div>
            <div></div>
            <div></div>
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
        </nav>

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
            <div class="current-video-title__block mobile">
                <div class="current-video-title">
                    <div class="current-video__header">
                        <h1>Dude You Re Getting A Telescope</h1>
                        <svg class="video-title__dropdown" width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.7624 0.798368L9.28113 0.263702C9.11428 0.0879298 8.91953 0 8.69714 0C8.47025 0 8.27771 0.0879298 8.11937 0.263702L5 3.72814L1.88063 0.263789C1.72229 0.0880173 1.52975 8.74923e-05 1.30294 8.74923e-05C1.08047 8.74923e-05 0.885722 0.0880173 0.718866 0.263789L0.243902 0.798455C0.0813008 0.978952 0 1.19523 0 1.44712C0 1.70374 0.0813796 1.91757 0.243902 2.08862L4.42231 6.72912C4.5764 6.90971 4.76886 7 5 7C5.22681 7 5.42147 6.90971 5.58399 6.72912L9.7624 2.08862C9.92075 1.91276 10 1.69893 10 1.44712C10 1.19996 9.92075 0.983764 9.7624 0.798368Z" fill="black"/>
                        </svg>
                    </div>
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
            <div class="current-video__description mobile container_flex">
                <img src="assets/img/subscriptions/channel-logo.png" alt="" class="channel-icon">
                <div class="current-video-description">
                    <h2>Food & Drink</h2>
                    <p class="published-date">Published on 14 Jun 2019</p>
                    <p class="subscribed-qty">245K subscribed</p>
                    <p class="vide-description__text">A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy; it is based on a number of factors, including ad placement, demographic, even the consumer’s mood when they see your ad. </p>
                    <a href="" class="show-more">Show more</a>
                </div>
                <div class="video-content__navigation">
                    <p class="video-content__subscription-stat" style="">Subscribe 2.3m</p>
                </div>

            </div>

        </div>

        <div class="next-video__block mobile">
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