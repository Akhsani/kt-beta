@extends('layouts.app')

@section('content')
	@include('layouts.navbar')
	<div class="main-container">

		<section class="imagebg" data-overlay='4'>
		<div class="background-image-holder">
		    <img alt="background" src="{{asset($talent->img_thumb)}}" />
		</div>
		<div class="container">
		    <div class="row">
		        <div class="col-sm-12">
		            <a href="category.html" class="color--primary">{{$talent->category->name}}</a>
		            <h1 style="font-weight:bold">{{$talent->name}}</h1>
		            <hr class="short">
		        </div>
		    </div>
		    <!--end of row-->
		</div>
		<!--end of container-->
		</section>

		<div class="nav-container">
		<div class="bar visible-xs bar--sm bar--mobile-sticky" data-scroll-class="400px:pos-fixed">
		    <div class="container">
		        <div class="row">
		            <div class="col-xs-12">
		                <p class="section--menu color--dark" style="text-decoration:unset">
		                    <a href="#story">Story</a>
		                    <a href="#gallery">Gallery</a>
		                    <a href="#media">Media</a>
		                    <a href="#term">Terms</a>
		                    <a href="#contact">Contact</a>
		                </p>
		            </div>
		        </div>
		        <!--end of row-->
		    </div>
		    <!--end of container-->
		</div>

		<div class="bar visible-xs bar--sm bar--mobile-sticky bar--bottom pos-fixed" data-scroll-class="0px:pos-fixed">
		    <div class="container">
		        <div class="row">
		            <div class="col-xs-6 col-sm-8">
		                <span class="type--fine-print">From </span><strong>Rp {{$talent->price}}</strong><span> /day</span>
		            </div>
		            <div class="col-xs-6 col-sm-4 text-right">
		                <div class="modal-instance">
		                    <a class="btn btn--primary btn--sm type--uppercase" href="#booking">
		                        <span class="btn__text">
		                            Request Booking
		                        </span>
		                    </a>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<nav id="menu2" class="bar bar--sm bar-1 hidden-xs" data-scroll-class="400px:pos-fixed" >
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6">
		                <div class="bar__module">
		                    <ul class="menu-horizontal">
		                        <li>
		                            <a href="#story">Story</a>
		                        </li>
		                        <li>
		                            <a href="#gallery">Gallery</a>
		                        </li>
		                        <li>
		                            <a href="#media">Media</a>
		                        </li>
		                        <li>
		                            <a href="#term">Terms</a>
		                        </li>
		                        <li>
		                            <a href="#term">Contact</a>
		                        </li>
		                    </ul>
		                </div>
		            </div>
		            <div class="col-md-6 text-right text-left-xs hidden-xs">
		                <div class="bar__module">
		                    <span class="type--fine-print">From </span><strong>{{$talent->price}}</strong><span> /day</span>
		                </div>
		                <div class="bar__module">
		                    <div class="modal-instance">
		                        <a class="btn btn--primary btn--sm type--uppercase" href="#booking">
		                            <span class="btn__text">
		                                Request Booking
		                            </span>
		                        </a>
		                        
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</nav>
		</div>

		<div class="modal-container" data-modal-id="booking" id="booking">
			<div class="modal-content">
			    <div class="boxed boxed--lg boxed--border">
			        <h4>Booking Request</h4>
			        <form action="order.html">
			            <div class="col-sm-12 col-md-6">
			                <label>Booking Date:</label>
			                <input type="text" name="date" placeholder="Date" class="datepicker datepicker--fluid picker__input" id="date">
			            </div>
			            <div class="col-sm-6 col-md-3">
			                <label>Booking Time:</label>
			                <input type="text" name="time" placeholder="Time" class="timepicker" id="time">
			            </div>
			            <div class="col-sm-6 col-md-3">
			                <label>Duration: (Hour)</label>
			                <div class="input-number">
			                    <input type="number" name="quantity" placeholder="hour" value="1" min="1" max="24" />
			                    <div class="input-number__controls">
			                        <span class="input-number__increase"><i class="stack-up-open"></i></span>
			                        <span class="input-number__decrease"><i class="stack-down-open"></i></span>
			                    </div>
			                </div>
			            </div>
			            <hr>
			            <div class="col-sm-6">
			                <label>Event Type:</label>
			                <div class="input-select input-select--borderless">
			                    <select name="category">
			                        <option value="all" selected>All</option>
			                        <option value="trending">Trending</option>
			                        <option value="new">New</option>
			                        <option value="band">Band</option>
			                        <option value="dj">DJ</option>
			                        <option value="mc">MC</option>
			                        <option value="comedian">Comedian</option>
			                        <option value="musician">Musician</option>
			                        <option value="mc">Singer</option>
			                        <option value="comedian">Dancer</option>
			                    </select>
			                </div>
			            </div>
			            <div class="col-sm-6">
			                <label>Event Location:</label>
			                <input type="text" name="location" placeholder="City" />
			            </div>
			            <div class="col-sm-12">
			                <label>Event Detail:</label>
			                <textarea rows="4" name="detail" placeholder="Describe briefly about your event"></textarea>
			            </div>
			            <div class="col-md-4 col-sm-6 col-md-offset-8 col-sm-offset-6">
			                <button type="submit" class="btn btn--primary type--uppercase">Book</button>
			            </div>
			        </form>
			    </div>
			</div>
		</div>

		<section class="space--xs bg--secondary">
	                
		<div class="container">    
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1"> 
		            <div class="boxed boxed--border" id="story">
		                <h4>Story</h4>
		                <p>
		                	{{$talent->description}} 
		                </p>
		            </div>

		            <div class="boxed boxed--border" id="gallery">
		                <h4>Gallery</h4>
		                <div class="slider slider--columns" data-arrows="true" data-autoplay="false">
		                    <ul class="slides">	                    
		                    @foreach($talent -> media -> where('type','=','gallery') as $media)
		                        <li class="col-sm-4 col-xs-6">
		                            <a href="{{asset($media->url)}}" data-lightbox="Gallery 1">
		                                <img alt="Image" src="{{asset($media->url)}}" />
		                            </a>
		                        </li>
		                     @endforeach

		                    </ul>
		                </div>
		            </div>

		            <div class="boxed boxed--border" id="media">
		                <h4>Video</h4>
		                <div class="slider slider--columns" data-arrows="true" data-autoplay="false" data-paging="true">
		                    <ul class="slides">

		                    @foreach($talent -> media -> where('type','=','video') as $media)
		                        <li class="col-xs-12">
		                            <div class="video-cover border--round">
					                    <div class="background-image-holder">
					                        <img alt="image" src="/images/event_festival.jpg" />
					                    </div>
					                    <div class="video-play-icon"></div>
					                    <iframe data-src="{{$media->url}}" allowfullscreen="allowfullscreen"></iframe>
					                </div>
		                        </li>
		                     @endforeach

		                    </ul>
		                </div>
		                
		            </div>

		            <div class="boxed boxed--border">
		                <h4>Audio</h4>
		                <iframe src="{{$talent->media->where('type','=','audio')->first()->url}}"></iframe>

		            </div>

		            <div class="boxed boxed--border" id="term">
		                <h4>Terms / Riders</h4>
		                <p>
		                    Upon request.
		                </p>
		            </div>

		            <div class="boxed boxed--border" id="contact">
		                <h4>Contact</h4>
		                <div class="text-block clearfix">
		                    <ul class="row row--list">
		                        <li class="col-sm-4">
		                            <span class="type--fine-print block">Location:</span>
		                            <span>Yogyakarta</span>
		                        </li>
		                        <li class="col-sm-4">
		                            <span class="type--fine-print block">Social Media:</span>
		                            <ul class="social-list list-inline list--hover">
		                                <li>
		                                    <a href="#">
		                                        <i class="socicon socicon-twitter icon icon--xs"></i>
		                                    </a>
		                                </li>
		                                <li>
		                                    <a href="#">
		                                        <i class="socicon socicon-facebook icon icon--xs"></i>
		                                    </a>
		                                </li>
		                                <li>
		                                    <a href="#">
		                                        <i class="socicon socicon-instagram icon icon--xs"></i>
		                                    </a>
		                                </li>
		                            </ul>
		                        </li>
		                    </ul>
		                </div>
		            </div>

		        </div>
		    </div>
		    <!--end of row-->
		</div>
		<!--end of container-->
		</section>

	</div>
	@include('layouts.footer')
@endsection