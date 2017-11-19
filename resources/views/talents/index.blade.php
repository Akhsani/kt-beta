@extends('layouts.app')

@section('content')

    @include('layouts.navbar')

    <div class="main-container">
        <!-- cover -->
        <section class="height-30 imagebg text-center" data-overlay="4">
            <div class="background-image-holder">
                <img alt="background" src="{{ asset('images/cover.jpg') }}" />
            </div>
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Explore wide range of talents</h2>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>

        <!-- search and filter -->
        <section class="space--xxs bg--secondary">
            <div class="nav-container">

            <!-- mobile -->
                <div class="bar visible-xs bar--sm bar--mobile-sticky" data-scroll-class="400px:pos-fixed">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <a class="btn btn--sm btn--primary type--uppercase float-right-xs" href="#" data-toggle-class="#menu2;hidden-xs">
                                    <span class="btn__text">
                                        Filter
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Desktop -->
                <nav id="menu2" class="bar bar--sm bar-1 hidden-xs" data-scroll-class="400px:pos-fixed" >
                    <div class="container">
                        <div class="row">
                            <form class="form-horizontal">
                                <div class="col-sm-4">
                                    <label>Keyword</label>
                                    <input type="text" placeholder="Talent name, location, etc" name="search">
                                </div>
                                <div class="col-sm-2">
                                    <label>Category</label>
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
                                <!-- <div class="col-sm-2">
                                    <label>Available Date</label>
                                    <input type="text" name="Date" placeholder="From" class="datepicker datepicker--fluid picker__input" id="input_date">
                                </div>
 -->                                <div class="col-sm-2">
                                    <label>Sort by</label>
                                    <div class="input-select input-select--borderless">
                                        <select name="event">
                                            <option value="newest">Newest</option>
                                            <option value="popular" selected>Most Popular</option>
                                            <option value="lowhigh">Price Low to High</option>
                                            <option value="highlow">Price High to Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <button type="submit" class="btn btn--primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

        <section class="space--xs">
            <div class="container">
                <div class="row">
                    @foreach($talents as $talent)
                        <div class="col-sm-3">
                            @include('talents.card')
                        </div>
                    @endforeach

                </div>
                <div class="pagination">
                    <a class="pagination__prev" href="#" title="Previous Page">&laquo;</a>
                    <ol>
                        <li class="pagination__current">
                            1
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                    </ol>
                    <a class="pagination__next" href="#" title="Next Page">&raquo;</a>
                </div>
            </div>
        </section>
    </div>

    @include('layouts.footer')

@endsection