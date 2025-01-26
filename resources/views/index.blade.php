<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=DM+Serif+Display&display=swap" rel="stylesheet">
</head>

<body>

<div class="navbar">
    <div class="navbar__container container media">
        <h1 class="navbar__logo">LOGO</h1>
        <ul class="navbar__menu">
            <li><a href="#">About</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <a class="navbar__btn" href="#"><button>Sign Up</button></a>
        <div class="hamburger"><img src="img/hamburger.png" alt=""></i></div>
    </div>
    <div class="navbar__blog">
        <h1>Blog</h1>
        <p>Quo luptatum evertitur ex</p>
    </div>
</div>

<div class="section-one">
    <div class="sectoin-one__container container media">
        <div class="card-container">

            @foreach($articles as $article)
                <div class="card">
                    <img class="card__image" src="{{ $article->image_url }}" alt="#">
                    <h3 class="card__heading">{{ $article->title }}</h3>
                    <h2 class="card__title">{{ $article->subtitle }}</h2>
                    <p class="card__para">{{ $article->content }}</p>
                    <hr>
                    <div class="card-learnmore">
                        <h3 class="card__learnmore">Learn more</h3>
                        <div class="card-blogger">
                            <h4 class="card-blogger__date">{{ $article->created_at->format('d M Y') }}</h4>
                            <h3 class="card-blogger__name">{{ $article->author->name }}</h3>
                            <img class="card-blogger__image" src="{{ $article->author->avatar_url }}" alt="">
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <aside class="aside-container">
                <div class="message">
                    <input type="text" placeholder="Search">
                </div>
                <div class="category">
                    <h4 class="category__heading heading">Categories</h4>
                    <div class="category__content">
                        <h5>Principes</h5>
                        <h3>7</h3>
                    </div>
                    <hr>
                    <div class="category__content">
                        <h5>Nullam</h5>
                        <h3>42</h3>
                    </div>
                    <hr>
                    <div class="category__content">
                        <h5>Quaerendum</h5>
                        <h3>73</h3>
                    </div>
                    <hr>
                    <div class="category__content">
                        <h5>Deterruisset</h5>
                        <h3>9</h3>
                    </div>
                    <hr>
                    <div class="category__content">
                        <h5>Erroribus</h5>
                        <h3>20</h3>
                    </div>
                    <hr>
                </div>

                <div class="post">
                    <h4 class="post__heading heading">Recent post</h4>

                    <div class="post__body">
                        <div class="post__content">
                            <div class="post__image post__image--active">
                                <img src="img/post2.png" alt="">
                            </div>
                            <div class="post__desc">
                                <p>Eu eum mentitum percip forensibus</p>
                                <h3>July 15 2019</h3>
                            </div>
                        </div>
                        <div class="post__content">
                            <div class="post__image post__image--active">
                                <img src="img/post1.png" alt="">
                            </div>
                            <div class="post__desc">
                                <p>Per an, alienum phaedrum te sea</p>
                                <h3>July 10 2019</h3>
                            </div>
                        </div>
                        <div class="post__content">
                            <div class="post__image post__image--active">
                                <img src="img/post3.png" alt="">
                            </div>
                            <div class="post__desc">
                                <p>Ea sed vivendo offendit persecuti</p>
                                <h3>July 7 2019</h3>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="tags">
                <h4 class="tags__heading heading">Tags</h4>
                <div class="tags__body">
                    <div class="tags__content">
                        @foreach ($article->tags->chunk(3) as $chunk)
                            <ul class="tags__list">
                                @foreach ($chunk as $tag)
                                    <li class="tags__item"><a href="#">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
            </aside>
    </div>
</div>

<div class="section-two">
    <div class="section-two__container container media">
        <div class="section-two__part-one">
            <h5>pericula</h5>
            <h2>Mea modus volumus <br>abhorreant</h2>
        </div>
        <div class="section-two__part-two">
            <input type="email" placeholder="Email">
            <a href="">Subscribe</a>
        </div>
    </div>
</div>

<div class="section-three">
    <div class="section-three__container container media">
            <div class="section-three__part-one">
                <h4>LOGO</h4>
                <p>Pro eu apeirian suavitate dissentiet, <br>qui dicunt ancillae id, ne mea <br>homero persequeris.</p>
                <div class="section-three__part-one-social">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

            <div class="section-three__part-two">
                <h2>Causae</h2>
                <h3>Doming</h3>
                <h3>Dicunt</h3>
                <h3>Feugait</h3>
                <h3>Scripta</h3>
            </div>

            <div class="section-three__part-three">
                <h2>Aperiri</h2>
                <h3>Postulant</h3>
                <h3>Affert</h3>
                <h3>Audire</h3>
                <h3>Quaestio</h3>
            </div>

            <div class="section-three__part-four">
                <div class="section-three__part-four-body">
                    <img src="img/post2.png" alt="#">
                    <div class="section-three__part-four-para">
                        <p>Ius delectus instructior eu, eu eum<br>mentitum percipit forensibus</p>
                        <h3>July 15 2019</h3>
                    </div>
                </div>
                <div class="section-three__part-four-body">
                    <img src="img/post1.png" alt="#">
                    <div class="section-three__part-four-para">
                        <p>Altera integre suavitate per an,<br>alienum phaedrum te sea</p>
                        <h3>July 10 2019</h3>
                    </div>
                </div>
            </div>

        </div>
</div>

<p class="copyright container media"> This is just to demo my web development skills. logos used belong to their owners. Only for DEMO</p>
</body>

</html>

