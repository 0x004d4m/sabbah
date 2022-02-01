<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../bootstrap-4.1.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../js/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../js/plugins/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="../js/plugins/owl-carousel/owl.transitions.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../js/plugins/YouTube_PopUp-master/YouTubePopUp.css">
    <link rel="stylesheet" href="../css/preloader.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Beam</title>
</head>

<body data-spy="scroll" data-target=".navbar">
    <div class="preloader-holder">
        <div class="loading">
            <div class="finger finger-1">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-2">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-3">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="finger finger-4">
                <div class="finger-item">
                    <span></span><i></i>
                </div>
            </div>
            <div class="last-finger">
                <div class="last-finger-item"><i></i></div>
            </div>
        </div>
    </div>

    <header id="home">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">B<span>ea</span>M</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="material-icons">menu</i></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#services">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#prices">Prices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#screenshots">Screenshot</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="caption">
                            <h1>{{ $Main->title }}</h1>
                            <p class="sub">{{ $Main->title_small }}</p>
                            <a class="btn btn-primary" href="{{ $Main->button_link }}">{{ $Main->button_text }}</a>
                            <img class="img-fluid mx-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" src="{{ $Main->image }}" alt="macbook">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".2s">
                    <i class="fa {{ $Main->features_icon1 }} fa-3x"></i>
                    <br><br>
                    <h4>{{ $Main->features_title1 }}</h4>
                    <p>{{ $Main->features_description1 }}</p>
                </div>
                <div class="col-md-4 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".4s">
                    <i class="fa {{ $Main->features_icon2 }} fa-3x"></i>
                    <br><br>
                    <h4>{{ $Main->features_title2 }}</h4>
                    <p>{{ $Main->features_description2 }}</p>
                </div>
                <div class="col-md-4 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".6s">
                    <i class="fa {{ $Main->features_icon3 }} fa-3x"></i>
                    <br><br>
                    <h4>{{ $Main->features_title3 }}</h4>
                    <p>{{ $Main->features_description3 }}</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            @foreach($Services as $Service)
                @if($Service->id%2==0)
                    <div class="row" style="margin-top: 5rem!important;" dir="rtl">
                @else
                    <div class="row" style="margin-top: 5rem!important;" dir="ltr">
                @endif

                    <div class="col-md-5 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".2s">
                        <h3>{{ $Service->title }}</h3>
                        <p>{!! nl2br($Service->body) !!}</p>
                    </div>
                    <div class="col-md-7 wow fadeInRight" data-wow-duration=".5s" data-wow-delay=".5s">
                        <div class="img-table">
                            <img src="{{ $Service->image }}" class="img-fluid" alt="table">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-offset-2 text-center mx-auto">
                    <h2 class="section-title">{{ $Sections[0]->title }}</h2>
                    <p>{{ $Sections[0]->text }}</p>
                </div>
            </div>
            <div class="row">
                @foreach($Features as $Feature)
                    <div class="col-md-4 feature wow bounceIn" data-wow-duration=".5s" data-wow-delay=".2s">
                        <div class="feature-icon">
                            <i class="fa {{ $Feature->icon }} fa-2x mt-5"></i>
                        </div>
                        <h4>{{ $Feature->title }}</h4>
                        <p>{{ $Feature->body }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="prices">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-offset-2 col-md-offset-3 text-center mx-auto">
                    <h2 class="section-title">{{ $Sections[1]->title }}</h2>
                    <p>{{ $Sections[1]->text }}</p>
                </div>
            </div>
            <div class="row">
                @foreach($Plans as $Plan)
                    <div class="col-lg-4 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".2s">
                        <div class="price-table">
                            <div class="header">
                                <h5 class="title">{{ $Plan->title }}</h5>
                                <div class="price">{{ $Plan->price }}$</div>
                                <h4>{{ $Plan->period }}</h4>
                            </div>
                            {!! nl2br($Plan->description) !!}
                            <a class="btn btn-transparent" type="button" href="{{ $Plan->button_link }}">{{ $Plan->button_text }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="screenshots">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-offset-2 col-md-offset-3 text-center title-container">
                    <h2 class="section-title">{{ $Sections[2]->title }}</h2>
                    <p>{{ $Sections[2]->text }}</p>
                </div>
            </div>
            <div class="row">
                <div id="owl-screenshots">
                    @foreach($Screenshots as $Screenshot)
                        <div class="item"><img src="{{ $Screenshot->image }}" class="img-fluid" alt="screen-{{ $Screenshot->id }}"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div id="video-popup">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 video-box">
                    <img src="{{ $Video->thumb }}" class="img-fluid wow rotateIn" data-wow-duration=".5s" data-wow-delay=".2s" alt="popup">
                    <div class="play-button">
                        <a class="bla-2 wow flipInY" data-wow-duration=".5s" data-wow-delay=".4s" href="{{ $Video->video_link }}"><i class="material-icons">play_arrow</i></a>
                        <div class="waves-block">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-offset-2 col-md-offset-3 text-center title-container">
                    <h2 class="section-title">{{ $Sections[3]->title }}</h2>
                    <p>{{ $Sections[3]->text }}</p>
                </div>
            </div>
            <div class="row">
                @foreach($Teams as $Team)
                    <div class="col-md-4 member wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".2s">
                        <div class="member-img">
                            <img src="{{ $Team->image }}" class="img-fluid" alt="team-1">
                        </div>
                        <h4>{{ $Team->name }}</h4>
                        <p>{{ $Team->position }}</p>
                        <ul class="social-media">
                            @if (strlen($Team->media1)>2 )
                                <li><a href="{{ $Team->media1 }}"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if (strlen($Team->media2)>2 )
                                <li><a href="{{ $Team->media2 }}"><i class="fab fa-twitter"></i></a></li>
                            @endif
                            @if (strlen($Team->media3)>2 )
                                <li><a href="{{ $Team->media3 }}"><i class="fab fa-google-plus-g"></i></a></li>
                            @endif
                            @if (strlen($Team->media4)>2 )
                                <li><a href="{{ $Team->media4 }}"><i class="fab fa-linkedin-in"></i></a></li>
                            @endif
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-offset-2 col-md-offset-3 text-center title-container">
                    <h2 class="section-title">{{ $Sections[4]->title }}</h2>
                    <p>{{ $Sections[4]->text }}</p>
                </div>
            </div>
            <div class="row">
                @foreach($Experts as $Expert)
                    <div class="col-md-4 member wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".2s">
                        <div class="member-img">
                            <img src="{{ $Expert->image }}" class="img-fluid" alt="team-1">
                        </div>
                        <h4>{{ $Expert->name }}</h4>
                        <p>{{ $Expert->position }}</p>
                        <ul class="social-media">
                            @if (strlen($Expert->media1)>2 )
                                <li><a href="{{ $Expert->media1 }}"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if (strlen($Expert->media2)>2 )
                                <li><a href="{{ $Expert->media2 }}"><i class="fab fa-twitter"></i></a></li>
                            @endif
                            @if (strlen($Expert->media3)>2 )
                                <li><a href="{{ $Expert->media3 }}"><i class="fab fa-google-plus-g"></i></a></li>
                            @endif
                            @if (strlen($Expert->media4)>2 )
                                <li><a href="{{ $Expert->media4 }}"><i class="fab fa-linkedin-in"></i></a></li>
                            @endif
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="brands">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center title-container">
                    <h2 class="section-title">{{ $Sections[5]->title }}</h2>
                    <p>{{ $Sections[5]->text }}</p>
                </div>
            </div>
            <div class="row">
                <div id="owl-brands">
                    @foreach($Sponsers as $Sponser)
                        <div class="item"><img src="{{ $Sponser->image }}" class="img-fluid" alt="brand-1"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center title-container">
                    <h2 class="section-title">{{ $Sections[6]->title }}</h2>
                    <p>{{ $Sections[6]->text }}</p>
                </div>
            </div>

            <form>
                <div class="form-row">
                    <div class="form-group col-xs-12 col-sm-4">
                        <label>Name:</label>
                        <input type="text" class="form-control" id="inputName4">
                    </div>
                    <div class="form-group col-xs-12 col-sm-4">
                        <label for="inputPassword4">Email:</label>
                        <input type="email" class="form-control" id="inputPassword4">
                    </div>
                    <div class="form-group col-xs-12 col-sm-4">
                        <label>Phone:</label>
                        <input type="text" class="form-control" id="inputPhone">
                    </div>
                </div>
                <div class="form-group">
                    <label>Subject:</label>
                    <input type="text" class="form-control" id="inputSubject">
                </div>
                <div class="form-group">
                    <label>Message:</label>
                    <textarea id="form-message" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
            <p>{{ $Sections[7]->text }}</p>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vivid-icons"></script>
    <script src="https://unpkg.com/vivid-icons"></script>
    <script src="../js/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="../js/plugins/YouTube_PopUp-master/YouTubePopUp.jquery.js"></script>
    <script src="../js/plugins/wow/wow.min.js"></script>
    <script src="../js/plugins/jquery.easing.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
