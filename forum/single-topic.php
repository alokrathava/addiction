<!doctype html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Responsive HTML5 Template">
    <meta name="author" content="author.com">
    <title>Responsive HTML5 Template</title>

    <!-- STYLESHEET -->
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="fonts/icons/main/mainfont/style.css">
    <link rel="stylesheet" href="fonts/icons/font-awesome/css/font-awesome.min.css">

    <!-- Vendor -->
    <link rel="stylesheet" href="vendor/bootstrap/v3/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/v4/bootstrap-grid.css">
    <!-- Custom -->
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- HEADER -->
    <?php require 'partials/_header.php'; ?>

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="nav">
                <div class="nav__categories js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="categories">All Categories</div>
                        <nav class="dropdown dropdown--design-01" data-dropdown-list="categories">
                            <ul class="dropdown__catalog row">
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-f9bc64"></i>Hobbies</a>
                                </li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-348aa7"></i>Social</a>
                                </li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-4436f8"></i>Video</a>
                                </li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-5dd39e"></i>Random</a>
                                </li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-ff755a"></i>Arts</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-bce784"></i>Tech</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-83253f"></i>Gaming</a>
                                </li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-c49bbb"></i>Science</a>
                                </li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-3ebafa"></i>Exchange</a>
                                </li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-c6b38e"></i>Pets</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i
                                            class="bg-a7cdbd"></i>Entertainment</a></li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-525252"></i>Education</a>
                                </li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-777da7"></i>Q&amp;As</a>
                                </li>
                                <li class="col-xs-6"><a href="#" class="category"><i class="bg-368f8b"></i>Politics</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="tags">Tags</div>
                        <div class="dropdown dropdown--design-01" data-dropdown-list="tags">
                            <div class="tags">
                                <a href="#" class="bg-4f80b0">gaming</a>
                                <a href="#" class="bg-424ee8">nature</a>
                                <a href="#" class="bg-36b7d7">entertainment</a>
                                <a href="#" class="bg-ef429e">selfie</a>
                                <a href="#" class="bg-7cc576">camera</a>
                                <a href="#" class="bg-3a3a17">username</a>
                                <a href="#" class="bg-6f7e9c">funny</a>
                                <a href="#" class="bg-f26522">photography</a>
                                <a href="#" class="bg-a3d39c">climbing</a>
                                <a href="#" class="bg-92278f">adventure</a>
                                <a href="#" class="bg-8781bd">dreams</a>
                                <a href="#" class="bg-f1ab32">life</a>
                                <a href="#" class="bg-3b96ca">reason</a>
                                <a href="#" class="bg-348aa7">social</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav__menu js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="menu">Latest</div>
                        <div class="dropdown dropdown--design-01" data-dropdown-list="menu">
                            <ul class="dropdown__catalog">
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Unread</a></li>
                                <li><a href="#">Rising</a></li>
                                <li><a href="#">Most Liked</a></li>
                                <li><a href="#">Follow Feed</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul>
                        <li class="active"><a href="#">Latest</a></li>
                        <li><a href="#">Unread</a></li>
                        <li><a href="#">Rising</a></li>
                        <li><a href="#">Most Liked</a></li>
                        <li><a href="#">Follow Feed</a></li>
                    </ul>
                </div>
                <div class="nav__thread">
                    <p>Thread Navigation:</p>
                    <a href="#" class="nav__thread-btn nav__thread-btn--prev"><i
                            class="icon-Arrow_Left"></i>Previous</a>
                    <a href="#" class="nav__thread-btn nav__thread-btn--next">Next<i class="icon-Arrow_Right"></i></a>
                </div>
            </div>
            <div class="topics">
                <div class="topics__heading">
                    <h2 class="topics__heading-title">Which movie have you watched most recently?</h2>
                    <div class="topics__heading-info">
                        <a href="#" class="category"><i class="bg-3ebafa"></i> Exchange</a>
                        <div class="tags">
                            <a href="#" class="bg-4f80b0">gaming</a>
                            <a href="#" class="bg-424ee8">nature</a>
                            <a href="#" class="bg-36b7d7">entertainment</a>
                        </div>
                    </div>
                </div>
                <div class="topics__body">
                    <div class="topics__content">
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/B.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Benjamin Caesar</a>
                                    </div>
                                    <div class="topic__date"><i class="icon-Watch_Later"></i>06 May, 2017</div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>Welcome to Prey. A lot of this game is going to feel familiar — you’ll see bits
                                        and pieces from a dozen well-loved games in its DNA. But that doesn’t mean
                                        you’re going to immediately understand how everything works. That’s what we’re
                                        here for. Let’s talk about some of the habits you’re going to have to pick up,
                                        concepts you’ll have to learn and choices you’re going to be making as you play.
                                    </p>
                                    <p>We’re going to break it down into three rough categories: Your world, your
                                        enemies (and ways to kill them) and yourself.</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span>201</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>08</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                            <span>39</span>
                                        </div>
                                    </div>
                                    <div class="topic__footer-share">
                                        <div data-visible="desktop">
                                            <a href="#"><i class="icon-Share_Topic"></i></a>
                                            <a href="#"><i class="icon-Flag_Topic"></i></a>
                                            <a href="#"><i class="icon-Bookmark"></i></a>
                                        </div>
                                        <div data-visible="mobile">
                                            <a href="#"><i class="icon-More_Options"></i></a>
                                        </div>
                                        <a href="#"><i class="icon-Reply_Fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topic">
                            <div class="topic__content">
                                <div class="topic__info">
                                    <div class="topic__info-section">
                                        <div>
                                            <span class="topic__info-title">Created</span>
                                            <div class="topic__info-avatar">
                                                <a href="#" class="avatar"><img src="fonts/icons/avatars/B.svg"
                                                        alt="avatar"></a>
                                                <span>13d</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Last reply</span>
                                            <div class="topic__info-avatar">
                                                <a href="#" class="avatar"><img src="fonts/icons/avatars/A.svg"
                                                        alt="avatar"></a>
                                                <span>4h</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic__info-section">
                                        <div>
                                            <span class="topic__info-title">Replies</span>
                                            <div class="topic__info-count">18</div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Views</span>
                                            <div class="topic__info-count">205</div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Users</span>
                                            <div class="topic__info-count">6</div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Likes</span>
                                            <div class="topic__info-count">315</div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Links</span>
                                            <div class="topic__info-count">7</div>
                                        </div>
                                    </div>
                                    <a href="#" class="topic__info-more"><i class="icon-Arrow_Down"></i></a>
                                </div>
                                <div class="topic__title">
                                    <p>Frequent Posters</p>
                                </div>
                                <div class="topic__posters">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/C.svg"
                                            alt="avatar"><span>10</span></a>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/U.svg"
                                            alt="avatar"><span>5</span></a>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/I.svg"
                                            alt="avatar"><span>12</span></a>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/K.svg" alt="avatar"></a>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/N.svg" alt="avatar"></a>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg" alt="avatar"></a>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/K.svg" alt="avatar"></a>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/L.svg" alt="avatar"></a>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/R.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__title">
                                    <p>Popular Links</p>
                                </div>
                                <div class="topic__list">
                                    <ul>
                                        <li><span>12</span><a href="#">Deepest and darkest secrets.
                                                <span>imgur.com</span></a></li>
                                        <li><span>1</span><a href="#">Help Center. <span>techlabs.net</span></a></li>
                                        <li><span>7</span><a href="#">Best 20 youtube videos.
                                                <span>youtube.com</span></a></li>
                                        <li><span>19</span><a href="#">Bootstrap 4, things you need to know.</a></li>
                                        <li><span>3</span><a href="#">Best Simpson jokes.</a></li>
                                    </ul>
                                </div>
                                <div class="topic__title">
                                    <p>There are <span>81 replies</span> with an estimated read time of <span>11
                                            minutes.</span></p>
                                </div>
                                <div class="topic__btns">
                                    <a href="#" class="btn btn--type-02">Summarize <span
                                            data-visible="desktop">This</span>Topic</a>
                                    <div class="topic__select">
                                        <p>Sort replies by:</p>
                                        <div class="btn-select"><i class="icon-Favorite_Topic"></i>Most Liked</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/N.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Nicolas</a>
                                    </div>
                                    <div class="topic__date">
                                        <div class="topic__user topic__user--pos-r">
                                            <i class="icon-Reply_Fill"></i>
                                            <a href="#" class="avatar"><img src="fonts/icons/avatars/B.svg"
                                                    alt="avatar"></a>
                                            <a href="#" class="topic__user-name">Benjamin Caesar</a>
                                        </div>
                                        <i class="icon-Watch_Later"></i>06 May, 2017
                                    </div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>I am using BootStrap 4, but they are asking me to use PHP framework, which I
                                        won't do. My code is secure against SQL injection, XSS and all other attacks, it
                                        is well organized, i was using OOP. I just think CodeCanyon will always find a
                                        reason to reject my work....</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span>137</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>02</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                            <span>46</span>
                                        </div>
                                    </div>
                                    <div class="topic__footer-share">
                                        <div data-visible="desktop">
                                            <a href="#"><i class="icon-Share_Topic"></i></a>
                                            <a href="#"><i class="icon-Flag_Topic"></i></a>
                                            <a href="#"><i class="icon-Bookmark"></i></a>
                                        </div>
                                        <div data-visible="mobile">
                                            <a href="#"><i class="icon-More_Options"></i></a>
                                        </div>
                                        <a href="#"><i class="icon-Reply_Fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topics__promo">
                            <a href="#"><img src="images/topic-promo.jpg" alt="promo"></a>
                        </div>
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Tesla</a>
                                    </div>
                                    <div class="topic__date"><i class="icon-Watch_Later"></i>07 May, 2017</div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>Yeah! This is really bad. Rejecting an item because its not using a PHP
                                        framework(no matter what the script is doing) is a wrong move I think. There are
                                        a lot of people reporting this problem(Rejected because of not using a
                                        framework).</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span>71</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>06</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                            <span>42</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Reply_Empty"></i></a>
                                            <span>01</span>
                                        </div>
                                    </div>
                                    <div class="topic__footer-share">
                                        <div data-visible="desktop">
                                            <a href="#"><i class="icon-Share_Topic"></i></a>
                                            <a href="#"><i class="icon-Flag_Topic"></i></a>
                                            <a href="#" class="active"><i class="icon-Already_Bookmarked"></i></a>
                                        </div>
                                        <div data-visible="mobile">
                                            <a href="#"><i class="icon-More_Options"></i></a>
                                        </div>
                                        <a href="#"><i class="icon-Reply_Fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topic topic--comment">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/L.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Larry</a>
                                    </div>
                                </div>
                                <a href="#" class="topic__arrow topic__arrow--up"><i class="icon-Arrow_Up"></i></a>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>Can you stop ADP, and create new option for author can create coupon code, Author
                                        will give for their customer. It's better than now.</p>
                                </div>
                            </div>
                        </div>
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/K.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Kevin</a>
                                    </div>
                                    <div class="topic__date"><i class="icon-Watch_Later"></i>08 May, 2017</div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>I will, but I'm not doing it for me, i'll open ticket for the community.</br>I
                                        got accepted with no problems on other marketplace.</p>
                                    <div class="topic topic--answer">
                                        <div class="topic__head">
                                            <div class="topic__caption">
                                                <div class="topic__user">
                                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg"
                                                            alt="avatar"></a>
                                                    <a href="#" class="topic__user-name">Tesla</a>
                                                </div>
                                            </div>
                                            <a href="#" class="topic__arrow"><i class="icon-Arrow_Up"></i></a>
                                        </div>
                                        <div class="topic__content">
                                            <div class="topic__text">
                                                <p>Yeah! This is really bad. Rejecting an item because its not using a
                                                    PHP framework(no matter what the script is doing) is a wrong move I
                                                    think.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Subscribers may download more than an ad-hoc purchaser on a marketplace, but by
                                        retaining subscribers over time (paying money every month), there’s more money
                                        in total for contributors.</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span>415</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>28</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                            <span>49</span>
                                        </div>
                                    </div>
                                    <div class="topic__footer-share">
                                        <div data-visible="desktop">
                                            <a href="#"><i class="icon-Share_Topic"></i></a>
                                            <a href="#"><i class="icon-Flag_Topic"></i></a>
                                            <a href="#"><i class="icon-Bookmark"></i></a>
                                        </div>
                                        <div data-visible="mobile">
                                            <a href="#"><i class="icon-More_Options"></i></a>
                                        </div>
                                        <a href="#"><i class="icon-Reply_Fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topic topic--selected">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/C.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Callis</a>
                                    </div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>This post has been hidden by a moderator. Received too much downvotes.</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>617</span>
                                        </div>
                                    </div>
                                    <div class="topic__footer-show">
                                        <a href="#" class="btn">Show me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/R.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Robin</a>
                                    </div>
                                    <div class="topic__date"><i class="icon-Watch_Later"></i>09 May, 2017</div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>Does our 60% more expensive milk go well with your 60% more expensive coffee?</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span>21</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>03</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                            <span>08</span>
                                        </div>
                                    </div>
                                    <div class="topic__footer-share">
                                        <div data-visible="desktop">
                                            <a href="#"><i class="icon-Share_Topic"></i></a>
                                            <a href="#"><i class="icon-Flag_Topic"></i></a>
                                            <a href="#"><i class="icon-Bookmark"></i></a>
                                        </div>
                                        <div data-visible="mobile">
                                            <a href="#"><i class="icon-More_Options"></i></a>
                                        </div>
                                        <a href="#"><i class="icon-Reply_Fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/L.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Larry</a>
                                    </div>
                                    <div class="topic__date">
                                        <div class="topic__user topic__user--pos-r">
                                            <i class="icon-Reply_Fill"></i>
                                            <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg"
                                                    alt="avatar"></a>
                                            <a href="#" class="topic__user-name">Tesla</a>
                                        </div>
                                        <i class="icon-Watch_Later"></i>3d
                                    </div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>Can you stop ADP, and create new option for author can create coupon code, Author
                                        will give for their customer. It's better than now.</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span>139</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>32</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                            <span>68</span>
                                        </div>
                                    </div>
                                    <div class="topic__footer-share">
                                        <div data-visible="desktop">
                                            <a href="#"><i class="icon-Share_Topic"></i></a>
                                            <a href="#"><i class="icon-Flag_Topic"></i></a>
                                            <a href="#"><i class="icon-Bookmark"></i></a>
                                        </div>
                                        <div data-visible="mobile">
                                            <a href="#"><i class="icon-More_Options"></i></a>
                                        </div>
                                        <a href="#"><i class="icon-Reply_Fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topics__calendar">
                        <div class="calendar">
                            <div class="calendar__top">
                                <a href="#" class="calendar__btn calendar__btn--c-01"><i class="icon-Calender"></i></a>
                            </div>
                            <div class="calendar__center">
                                <div class="calendar__first">Jun 12</div>
                                <div class="calendar__range">
                                    <div class="calendar__current">
                                        <p>31 / 75</p>
                                        <span>Jun 17</span>
                                    </div>
                                </div>
                                <div class="calendar__last">6h ago</div>
                            </div>
                            <div class="calendar__bottom">
                                <a href="#" class="calendar__btn calendar__btn--c-01"><i class="icon-Track"></i></a>
                                <a href="#" class="calendar__btn calendar__btn--c-02"><i
                                        class="icon-Reply_Fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="topics__title"><i class="icon-Watch_Later"></i>This topic will close 6 months after the last
                    reply.</div>
                <div class="topics__control">
                    <a href="#" class="btn"><i class="icon-Bookmark"></i>Bookmark</a>
                    <a href="#" class="btn"><i class="icon-Share_Topic"></i>Share</a>
                    <a href="#" class="btn"><i class="icon-Flag_Topic"></i>Flag</a>
                    <a href="#" class="btn"><i class="icon-Add_User"></i>Invite</a>
                    <a href="#" class="btn"><i class="icon-Track"></i>Track</a>
                    <a href="#" class="btn btn--type-02" data-visible="desktop"><i class="icon-Reply_Fill"></i>Reply</a>
                </div>
                <div class="topics__title">Suggested Topics</div>
            </div>
            <div class="posts">
                <div class="posts__head">
                    <div class="posts__topic">Topic</div>
                    <div class="posts__category">Category</div>
                    <div class="posts__users">Users</div>
                    <div class="posts__replies">Replies</div>
                    <div class="posts__views">Views</div>
                    <div class="posts__activity">Activity</div>
                </div>
                <div class="posts__body">
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Current news and discussion</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i
                                        class="bg-368f8b"></i>Politics</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/A.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/G.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/P.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">31</div>
                            <div class="posts__views">14.5k</div>
                            <div class="posts__activity">13d</div>
                        </div>
                    </div>
                    <div class="posts__item bg-f2f4f6">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Get your username drawn by the other users of unity! or a drawing based on
                                            what you do</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        <a href="#" class="bg-4f80b0">gaming</a>
                                        <a href="#" class="bg-424ee8">nature</a>
                                        <a href="#" class="bg-36b7d7">entertainment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-4436f8"></i>Video</a>
                            </div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/L.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">252</div>
                            <div class="posts__views">396</div>
                            <div class="posts__activity">13m</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Which movie have you watched most recently?</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-3ebafa"></i>
                                    Exchange</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/E.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/I.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/R.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">207</div>
                            <div class="posts__views">7.5k</div>
                            <div class="posts__activity">41m</div>
                        </div>
                    </div>
                    <div class="posts__item posts__item--bg-gradient">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3><span>This post contails spoiler about</span> Star Wars Movie.</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-777da7"></i>
                                    Q&amp;As</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/F.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">2.3k</div>
                            <div class="posts__views">2.0k</div>
                            <div class="posts__activity">1h</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Take a picture of what you’re doing at this very moment</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        <a href="#" class="bg-ec008c">selfie</a>
                                        <a href="#" class="bg-7cc576">camera</a>
                                    </div>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-c6b38e"></i> Pets</a>
                            </div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/C.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/U.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/I.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">441</div>
                            <div class="posts__views">3.1k</div>
                            <div class="posts__activity">6h</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer js-dropdown">
            <div class="container">
                <div class="footer__logo">
                    <div>
                        <img src="fonts/icons/main/Logo_Forum.svg" alt="logo">Unity
                    </div>
                </div>
                <div class="footer__nav">
                    <div class="footer__tline">
                        <i class="icon-Support"></i>
                        <ul class="footer__menu">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">The Team</a></li>
                        </ul>
                        <div class="footer__language">
                            <div class="footer__language-btn" data-dropdown-btn="language">Americas - English<i
                                    class="icon-Arrow_Below"></i></div>
                            <div class="footer__language-dropdown dropdown dropdown--design-01 dropdown--reverse-y"
                                data-dropdown-list="language">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h3>Region</h3>
                                        <ul class="dropdown__catalog">
                                            <li class="active"><a href="#"><i></i>America</a></li>
                                            <li><a href="#"><i></i>Europe</a></li>
                                            <li><a href="#"><i></i>Asia</a></li>
                                            <li><a href="#"><i></i>China</a></li>
                                            <li><a href="#"><i></i>Australia</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <h3>Language</h3>
                                        <ul class="dropdown__catalog">
                                            <li class="active"><a href="#"><i></i>English</a></li>
                                            <li><a href="#"><i></i>Espanol</a></li>
                                            <li><a href="#"><i></i>Portugues</a></li>
                                            <li><a href="#"><i></i>Chinese</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__bline">
                        <ul class="footer__menu">
                            <li class="footer__copyright"><span>&copy; 2017 azyrusthemes.com</span></li>
                            <li><a href="#">Teams</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Send Feedback</a></li>
                        </ul>
                        <ul class="footer__social">
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-cloud" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="footer__language-btn-m" data-dropdown-btn="language">Americas - English<i
                                class="icon-Arrow_Below"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVA SCRIPT -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/velocity/velocity.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>