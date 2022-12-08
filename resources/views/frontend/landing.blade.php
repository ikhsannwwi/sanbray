@extends('frontend.layout.header')

@section('content')
<div class="site-main-wrapper">
    <button class="hamberger">
        <img src="{{asset('sanbray/images/hamberger.svg')}}" alt="">
    </button>

    <div class="mobile-nav">
        <button class="times"><img src="{{asset('sanbray/images/times.svg')}}" alt=""></button>
        <ul>
            @foreach ($navbar as $data)                
                <li><a href="#">{{$data->nav1}}</a></li>
                <li><a href="#">{{$data->nav2}}</a></li>
                <li><a href="#">{{$data->nav3}}</a></li>
                <li><a href="#">{{$data->nav4}}</a></li>
                <li><a href="#">{{$data->nav5}}</a></li>
            @endforeach
        </ul>
    </div>
    <header>
        <div class="container">
            <nav id="main-nav" class="flex items-center justify-between">
                <div class="left flex items-center">
                    <div class="branding">
                        <img src="{{asset('sanbray/images/logo.svg')}}" alt="">
                    </div>
                    <div>
                        @foreach ($navbar as $data)
                            <a href="#">{{$data->nav1}}</a>
                            <a href="#about">{{$data->nav2}}</a>
                            <a href="#services">{{$data->nav3}}</a>
                            <a href="#work">{{$data->nav4}}</a>
                            <a href="#blog">{{$data->nav5}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="right">
                    <button class="btn btn-primary">Contact</button>
                </div>
            </nav>
            <div class="hero flex items-center justify-between">
                <div class="left flex-1 flex justify-center">
                    <img src="{{asset('sanbray/images/man.png')}}" alt="">
                </div>
                <div class="right flex-1">
                    <h6>Johnathan Vics</h6>
                    <h1>I’m a Creative <span>Designer</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco
                        laboris
                        nisi ut aliquip ex ea commodo consequat</p>
                    <div>
                        <button class="btn btn-secondary">DOWNLOAD CV</button>
                    </div>
                </div>
            </div>
        </div>
    </header>

        <section id="about" class="about">
            <div class="container flex items-center about-inner-wrap">
                <div class="flex-1">
                    <img class="about-me-img" src="{{asset('sanbray/images/man-2.png')}}" alt="">
                </div>
                <div class="flex-1 right">
                    <h1>About <span>Me</span></h1>
                    <h3>Hello! i’m Johnathan Vics.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.

                        Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat</p>
                    <div class="social">
                        <a href="https://www.instagram.com/sanbray_"><box-icon name='instagram' type='logo' color="white" animation='tada' ></box-icon></a>
                        <a href="https://www.facebook.com/codersgyan"><box-icon name='facebook' type='logo' color="white" animation='tada' ></box-icon></a>
                        <a href="https://twitter.com/CoderGyan"> <box-icon name='twitter' type='logo' color="white" animation='tada' ></box-icon></a>
                        <a href="#"> <box-icon name='linkedin' type='logo' color="white" animation='tada' ></box-icon></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="services">
            <div class="container">
                <h1 class="section-heading"><span>Our </span>Services</h1>
                <p>We provide high standar clean website for your business solutions</p>
                <div class="card-wrapper">
                    <div class="card">
                        <img src="{{asset('sanbray/images/brush.svg')}}" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                    <div class="card">
                        <img src="{{asset('sanbray/images/code.svg')}}" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                    <div class="card">
                        <img src="{{asset('sanbray/images/bag.svg')}}" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                    <div class="card">
                        <img src="{{asset('sanbray/images/desktop.svg')}}" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                    <div class="card">
                        <img src="{{asset('sanbray/images/media.svg')}}" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                    <div class="card">
                        <img src="{{asset('sanbray/images/phone.svg')}}" alt="">
                        <h2>Graphic Design</h2>
                        <p>There are many variations of passages of but the majority have suffered alteration in some
                            form.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="freelancer">
            <h1>I Am Available For Freelancer.</h1>
            <p>We provide high standar clean website for your business solutions</p>
            <button class="btn btn-primary">Download CV</button>
        </section>
        <section class="reviews">
            <div class="container">
                <h1 class="section-heading"><span>Our</span> Client</h1>
                <p>We provide high standar clean website for your business solutions</p>
                <div class="slider">
                    <div class="slide">
                        <img src="{{asset('sanbray/images/lady.png')}}" alt="">
                        <p>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum"</p>
                        <span>- John Doel, Company ABC</span>
                    </div>
                    <div class="slide">
                        <img src="{{asset('sanbray/images/lady.png')}}" alt="">
                        <p>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum"</p>
                        <span>- John Doel, Company ABC</span>
                    </div>
                    <div class="slide">
                        <img src="{{asset('sanbray/images/lady.png')}}" alt="">
                        <p>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum"</p>
                        <span>- John Doel, Company ABC</span>
                    </div>
                    <div class="slide">
                        <img src="{{asset('sanbray/images/lady.png')}}" alt="">
                        <p>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum"</p>
                        <span>- John Doel, Company ABC</span>
                    </div>
                </div>
                <div class="slider-dots"></div>
            </div>
        </section>

        <section id="work" class="work">
            <div class="container">
                <h1 class="section-heading"><span>Our</span> Works</h1>
                <p>We provide high standar clean website for your business solutions</p>

                <div class="card-wrapper">
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="{{asset('sanbray/images/ph-1.png')}}" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="{{asset('sanbray/images/ph-1.png')}}" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="{{asset('sanbray/images/ph-1.png')}}" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="{{asset('sanbray/images/ph-1.png')}}" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="{{asset('sanbray/images/ph-1.png')}}" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="#">Web development</a>
                        </div>
                        <img src="{{asset('sanbray/images/ph-1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="blog" class="blog">
            <div class="container">
                <h1 class="section-heading"><span>Our</span> Blog</h1>
                <p>We provide high standar clean website for your business solutions</p>

                <div class="card-wrapper">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{asset('sanbray/images/article-ph-1.png')}}" alt="">
                        </div>
                        <div class="card-content">
                            <a href="#">
                                <h1>Occusamus et iusto odio</h1>
                            </a>
                            <span>May 12, 2017</span>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt
                                mollit anim id est laborum.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{asset('sanbray/images/article-ph-1.png')}}" alt="">
                        </div>
                        <div class="card-content">
                            <a href="#">
                                <h1>Occusamus et iusto odio</h1>
                            </a>
                            <span>May 12, 2017</span>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt
                                mollit anim id est laborum.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="{{asset('sanbray/images/article-ph-1.png')}}" alt="">
                        </div>
                        <div class="card-content">
                            <a href="#">
                                <h1>Occusamus et iusto odio</h1>
                            </a>
                            <span>May 12, 2017</span>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt
                                mollit anim id est laborum.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <h1 class="section-heading">Contact <span>Us</span></h1>
                <p>We provide high standar clean website for your business solutions</p>
                <div class="card-wrapper">
                    <div class="card">
                        <img src="{{asset('sanbray/images/phone-2.svg')}}" alt="">
                        <h1>Call Us On</h1>
                        <h6>+985 123 7856</h6>
                    </div>
                    <div class="card">
                        <img src="{{asset('sanbray/images/msg.svg')}}" alt="">
                        <h1>Email Us At</h1>
                        <h6>support@companyname.com</h6>
                    </div>
                    <div class="card">
                        <img src="{{asset('sanbray/images/map.svg')}}" alt="">
                        <h1>Visit Office</h1>
                        <h6>99 S.t Jomblo Park Pekanbaru 28292. Indonesia</h6>
                    </div>

                </div>

                <form action="">
                    <div class="input-wrap">
                        <input type="text" placeholder="Your Name *">
                        <input type="email" placeholder="Your Email *">
                    </div>
                    <div class="input-wrap-2">
                        <input type="text" placeholder="Your Subject...">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message..."></textarea>
                    </div>
                    <div class="btn-wrapper">
                        <button class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
@endsection