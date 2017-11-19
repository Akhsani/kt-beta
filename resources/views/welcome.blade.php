@extends('layouts.app')


@section('content')
    @include('layouts.navbar-cover')

    <div class="main-container">
    <!-- Cover -->
        <section class="cover imagebg height-80" data-overlay="4">
            <div class="background-image-holder"><img alt="background" src="{{ asset('images/cover.jpg') }}"></div>
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="typed-headline">
                            <span class="h1 inline-block">Discover best</span>
                            <span class="h1 inline-block typed-text typed-text--cursor color--primary" data-typed-strings="DJ,Band,MC,Singer,Saxophonist,Pianist,Dancer,Magician,Performer,"></span>
                            <span class="h1 inline-block">for your show</span>
                        </div>
                        <div class="boxed boxed--lg bg--dark text-left">
                            <form class="form--horizontal">
                                <div class="col-sm-10"> <input type="text" name="keywords" placeholder="Find by Name/Category/Genre/..."> </div>
                                <div class="col-sm-2"> <button type="submit" class="btn btn--primary type--uppercase">Search</button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Popular talents -->
        <section class="space--xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading-block">
                            <h3>Trending Stars <span><a href="category.html" class="pull-right" style="font-size:13px;font-weight:bold">View All</a></span></h3>
                        </div>
                    </div>
                </div>
                
                @include('talents.popular')
                
            </div>
            <!--end of container-->
        </section>

        <section class="space--xs bg--dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="heading-block">
                            <h3>Browse Category</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($categories as $category)
                    <div class="col-sm-3 col-xs-6">
                        <a href="#" class="block">
                            <div class="feature feature-7 boxed text-center imagebg" data-overlay="5">
                                <div class="background-image-holder"> <img alt="background" src="{{$category->img}}"></div>
                                <h4 class="pos-vertical-center">{{$category->name}}</h4>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    
                </div>
                <a href="category.html" class="type--fine-print pull-right">View All</a>
            </div>
        </section>

        <section class="space--xs bg--primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="heading-block">
                            <h3>Browse Event Theme</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-6">
                        <a href="category.html" class="block">
                            <div class="feature feature-7 boxed text-center imagebg" data-overlay="5">
                                <div class="background-image-holder"> <img alt="background" src="images/event_festival.jpg"> </div>
                                <h4 class="pos-vertical-center">Festival</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <a href="category.html" class="block">
                            <div class="feature feature-7 boxed text-center imagebg" data-overlay="5">
                                <div class="background-image-holder"> <img alt="background" src="images/event_cafe.jpeg"> </div>
                                <h4 class="pos-vertical-center">Cafe/Restaurant/Pub</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <a href="category.html" class="block">
                            <div class="feature feature-7 boxed text-center imagebg" data-overlay="5">
                                <div class="background-image-holder"> <img alt="background" src="images/event_wedding.jpeg"> </div>
                                <h4 class="pos-vertical-center">Wedding</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <a href="category.html" class="block">
                            <div class="feature feature-7 boxed text-center imagebg" data-overlay="5">
                                <div class="background-image-holder"> <img alt="background" src="images/event_private.jpeg"> </div>
                                <h4 class="pos-vertical-center">Private Party</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <a href="category.html" class="block">
                            <div class="feature feature-7 boxed text-center imagebg" data-overlay="5">
                                <div class="background-image-holder"> <img alt="background" src="images/event_corporate.jpeg"> </div>
                                <h4 class="pos-vertical-center">Corporate</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <a href="category.html" class="block">
                            <div class="feature feature-7 boxed text-center imagebg" data-overlay="5">
                                <div class="background-image-holder"> <img alt="background" src="images/event_social.jpeg"> </div>
                                <h4 class="pos-vertical-center">Social</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <a href="category.html" class="type--fine-print pull-right">View All</a>
            </div>
        </section>

        <section class="space--xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="heading-block">
                            <h3>What they said</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="testimonial testimonial-2">
                            <div class="testimonial__body boxed boxed--border bg--secondary">
                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                            </div>
                            <div class="testimonial__image"> <img alt="Image" src="images/avatar-round-3.png">
                                <h5>Raresh D.</h5> <span>Kolkata, IN</span> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="testimonial testimonial-2">
                            <div class="testimonial__body boxed boxed--border bg--secondary">
                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 1500s </p>
                            </div>
                            <div class="testimonial__image"> <img alt="Image" src="images/avatar-round-4.png">
                                <h5>Robert S.</h5> <span>Brisbane, AU</span> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="testimonial testimonial-2">
                            <div class="testimonial__body boxed boxed--border bg--secondary">
                                <p> Lorem Ipsum is simply dummys </p>
                            </div>
                            <div class="testimonial__image"> <img alt="Image" src="images/avatar-round-2.png">
                                <h5>Gabby V.</h5> <span>Sydney, AU</span> </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="testimonial testimonial-2">
                            <div class="testimonial__body boxed boxed--border bg--secondary">
                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                            </div>
                            <div class="testimonial__image"> <img alt="Image" src="images/avatar-round-2.png">
                                <h5>Josephine L.</h5> <span>California, US</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center imagebg space--xs" data-overlay="8">
            <div class="background-image-holder"> <img alt="background" src="images/cover_bottom.jpg"> </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-6">
                        <div class="cta">
                            <h2>Kickstart your career and earn more gigs with us</h2>
                            <a class="btn btn--primary type--uppercase" href="#"> 
                                <span class="btn__text">Join Now</span>
                            </a> 
                            <p class="type--fine-print">or check out <a href="index.html">Talent's benefit</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footer')

@endsection
