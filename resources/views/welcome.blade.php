@extends('layouts.app')
@section('content')
<div id="myCarousel" class="carousel slide">

    <div class="navbar-wrapper">
        <div class="container">
            <div class="navbar navbar-inverse navbar-static-top">

                <div class="navbar-header">
                    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="navbar-brand" href="#"><sup>Beatnik</sup><sub>Technology</sub> </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav leftnav">
                        <li class="active"><a href="#">Products</a></li>
                        <li><a href="http://www.bootply.com" target="ext">Claims</a></li>
                        <li><a href="#contact">Support</a></li>
                        <li><a href="#contact">Rewards</a></li>
                        <li><a href="#contact">|</a></li>
                        <li><a href="#contact" class="second" style=" color: rgba(0,0,0,.5)">Group Insurance</a></li>
                        <li><a href="#contact" class="second" style=" color: rgba(0,0,0,.5)">About Us</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><button href="{{ route('login') }}" class="loginnav">Login</buttona>
                        </li>
                        <li><a href="#" style=" color: orange"><i class="fa fa-2x fa-fw fa-headphones"></i></a></li>

                        <li><a href="#" style=" color: orange"><i class="fa fa-2x fa-fw fa-search"></i> </a></li>
                    </ul>
                </div>

            </div>
        </div><!-- /container -->
    </div><!-- /navbar wrapper -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="{{ asset('slides/family2.jpg') }}" style="width:100%;height:30%" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Savings</a>
                        </div>
                        <div class="cta-inner">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>

                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Early Cash</a>
                        </div>
                        <div class="cta-inner">
                            <i class="fa fa-map-o"></i>
                        </div>

                    </div>


                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Children</a>
                        </div>
                        <div class="cta-inner">

                            <i class="fa fa-home"></i>
                        </div>

                    </div>

                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Retirement</a>
                        </div>
                        <div class="cta-inner">

                            <i class="fa fa-user"></i>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('slides/family1.jpg') }}" style="width:100%;height:30%" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Savings</a>
                        </div>
                        <div class="cta-inner">

                            <i class="fa fa-search"></i>
                        </div>

                    </div>


                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Early Cash</a>
                        </div>
                        <div class="cta-inner">

                            <i class="fa fa-map-o"></i>
                        </div>

                    </div>


                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Children</a>
                        </div>
                        <div class="cta-inner">

                            <i class="fa fa-home"></i>
                        </div>

                    </div>

                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Retirement</a>
                        </div>
                        <div class="cta-inner">

                            <i class="fa fa-user"></i>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('slides/family3.jpg') }}" style="width:100%;height:30%" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Savings</a>
                        </div>
                        <div class="cta-inner">

                            <i class="fa fa-search"></i>
                        </div>

                    </div>


                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Early Cash</a>
                        </div>
                        <div class="cta-inner">

                            <i class="fa fa-map-o"></i>
                        </div>

                    </div>


                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Children</a>
                        </div>
                        <div class="cta-inner">

                            <i class="fa fa-home"></i>
                        </div>

                    </div>

                    <div class="cta col-md-3">
                        <div class="btn-inner">
                            <a href="#" class="btn btn-primary">Retirement</a>
                        </div>
                        <div class="cta-inner">

                            <i class="fa fa-user"></i>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="overlay">
        <div class="oversearch">
            <div class="search-sec">
                <form action="#" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="search_portion">

                                <div class="col searchdiv">
                                    <button type="button" class="btn searchbtn wrn-btn"> <i
                                            class="fa fa-search"></i></button>
                                    <input class="form-control-borderless searchplace" type="search"
                                        placeholder="What do you need?">
                                </div>
                                <div class="col searchcol">
                                    <button type="button" class="btn searchoption"><i style=" color: #de861a"
                                            class="fa fa-clipboard"></i><span>Products</span></button>

                                    <button type="button" class="btn searchoption"> <i style=" color: #de861a"
                                            class="fa fa-ambulance"></i><span>Hospital</span></button>

                                    <button type="button" class="btn searchoption "> <i style=" color: #de861a"
                                            class="fa fa-search"></i><span>Branch</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <i class="glyphicon glyphicon-chevron-left"></i>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <i class="glyphicon glyphicon-chevron-right"></i>
    </a>

</div>


<div class="services">
    <div class="cta col-md-3">
        <div class="btn-inner calculator">
            <i class="fa fa-calculator"></i>
            <a href="https://wistia.com/wistiafest" class="btn" target='_blank'>Premium Calculator</a>
        </div>
    </div>

    <div class="cta col-md-3">
        <div class="btn-inner policy">
            <i class="fa fa-clipboard" style="color:white"></i>
            <a href="https://wistia.com/wistiafest" class="btn" target='_blank'>Policy Information</a>
        </div>
    </div>

    <div class="cta col-md-3">
        <div class="btn-inner transaction">
            <i class="fa fa-credit-card" style="color:#f30500"></i>
            <a href="https://wistia.com/wistiafest" class="btn" target='_blank'>My Transaction</a>
        </div>
    </div>
</div>
<div class="container conproduct">
    <div class="product">
        <div class="product_introduction">
            <span class="proleft">Our </span><span class="proright">Products</span>
            <div class="details">
                <p class="details-p">It is a long established fact that a reader will be distracted by the readable
                    content
                    of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution
                    of letters, as opposed to using 'Content here, content here', making it look like readable English.

                </p>
            </div>
        </div>
        <div class="col-1-of-3">
            <div class="card">
                <div class="card__side card__side--front">
                    <div class="card__picture card__picture--1">
                         
                    </div>
                    <h4 class="card__heading">
                        <span class="card__heading-span card__heading-span--1">Shanchay</span>

                    </h4>
                    <div class="card__details">
                        <ul>
                            <li>3 day tours</li>
                            <li>Up to 30 people</li>
                            <li>2 tour guides</li>
                            <li>Sleep in cozy hotels</li>
                            <li>Difficulty: easy</li>
                        </ul>
                    </div>
                </div>
                <div class="card__side card__side--back card__side--back-1">
                    <div class="card__cta">
                        <div class="card__price-box">
                            <p class="card__price-only">Only</p>
                            <p class="card__price-value">$295</p>
                        </div>
                        <a href="#0" class="btn btn--white">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="view">

            <a href="#0" class="btn btn--white book">View All</a>
        </div>
    </div>

</div>
<div class="container insurance">
    <div class="row">

        <div class="insurance-title">Looking For Business Insurance?</div>
        <div class="insurance-cards">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-block">

                        <h4 class="card-title">Small Business Insurance</h4>
                        <div class="card-text">
                            It is a long established fact that a reader will be distracted by the readable
                            content
                            of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution
                            of letters, as opposed to using
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-block">

                        <h4 class="card-title">Workers Compensation</h4>
                        <div class="card-text">
                            It is a long established fact that a reader will be distracted by the readable
                            content
                            of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution
                            of letters, as opposed to using
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-block">

                        <h4 class="card-title">Commercial & Corporate</h4>

                        <div class="card-text">
                            It is a long established fact that a reader will be distracted by the readable
                            content
                            of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution
                            of letters, as opposed to using
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=" container advice">
    <div class="row">
        <div class="advice-cards">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-block">

                        <div class="card-text">
                            It is a long established fact that a reader will be distracted by the readable
                            content
                            of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution
                            of letters, as opposed to using
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info btn-sm">Follow</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info">
                    <div class="card-block">

                        <div class="card-text">
                            It is a long established fact that a reader will be distracted by the readable
                            content
                            of a page when
                            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution
                            of letters, as opposed to using
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info btn-sm">Follow</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container news">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="cardcontainer">
                <div class="photo"> <img
                        src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500">
                    <div class="photos">Photos</div>
                </div>
                <div class="content">
                    <p class="txt4">City Lights In Newyork</p>
                    <p class="txt2">New York, the largest city in the U.S., is an architectural marvel with plenty of
                        historic
                        monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                </div>

            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="cardcontainer">
                <div class="photo"> <img
                        src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500">
                    <div class="photos">Photos</div>
                </div>
                <div class="content">
                    <p class="txt4">City Lights In Newyork</p>
                    <p class="txt2">New York, the largest city in the U.S., is an architectural marvel with plenty of
                        historic
                        monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                </div>

            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="cardcontainer">
                <div class="my-3 p-3 bg-white rounded box-shadow">
                    <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt=""
                            class="mr-2 rounded">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">@username</strong>
                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </p>
                    </div>
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&bg=e83e8c&fg=e83e8c&size=1" alt=""
                            class="mr-2 rounded">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">@username</strong>
                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </p>
                    </div>
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&bg=6f42c1&fg=6f42c1&size=1" alt=""
                            class="mr-2 rounded">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">@username</strong>
                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </p>
                    </div>
                    <small class="d-block text-right mt-3">
                        <a href="#">All updates</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container recognitions">
    <div class="row">
        <div class="insurance-title">Awards & Recognitions</div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="card card-inverse card-info">
                <img src="{{ asset('slides/awards.jpg') }}" style="width:100%;height:30%" class="img-responsive">
                <div class="card-block">

                <div class="card-text" style="color:orange">
                       ICT Award 2010 - Best In UI
                    </div>
                </div>
               
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="card card-inverse card-info">
                <img src="{{ asset('slides/awards.jpg') }}" style="width:100%;height:30%" class="img-responsive">
                <div class="card-block">

                    <div class="card-text" style="color:orange">
                       ICT Award 2010 - Best In UI
                    </div>
                </div>
               
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="card card-inverse card-info">
                <img src="{{ asset('slides/awards.jpg') }}" style="width:100%;height:30%" class="img-responsive">
                <div class="card-block">

                <div class="card-text" style="color:orange">
                       ICT Award 2010 - Best In UI
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</div>

<!-- FOOTER -->
    <div class="container footers">
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-widget">
                    <h3>Beatnik Technology</h3>
                    <div class="footer-widget-content">
                       
                        <a href="tel:0121234" class="contact-link">1351</a>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-4 col-md  col-6 col foot-col">
                <h5 class="headin5_amrc col_white_amrc pt2">Products</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="http://webenlance.com">Remove Background</a></li>
                    <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
                    <li><a href="http://webenlance.com">Logo Design</a></li>
                    <li><a href="http://webenlance.com">Vectorization</a></li>
                    <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
                    <li><a href="http://webenlance.com">Image Cropping</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>

            <div class=" col-sm-4 col-md  col-6 col foot-col">
                <h5 class="headin5_amrc col_white_amrc pt2">Claims</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="http://webenlance.com">Remove Background</a></li>
                    <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
                    <li><a href="http://webenlance.com">Logo Design</a></li>
                    <li><a href="http://webenlance.com">Vectorization</a></li>
                    <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
                    <li><a href="http://webenlance.com">Image Cropping</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>


            <div class=" col-sm-4 col-md  col-6 col foot-col">
                <h5 class="headin5_amrc col_white_amrc pt2">Support</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="http://webenlance.com">Image Rectoucing</a></li>
                    <li><a href="http://webenlance.com">Clipping Path</a></li>
                    <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
                    <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
                    <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
                    <li><a href="http://webenlance.com">Image Cropping</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>
           
        </div>
    </div>

@endsection
@section('script')

<script type="text/javascript">
$(document).ready(function() {

    // for fav
    $('.fa-heart').click(function() {
        $(this).toggleClass('fav');
    });

    // flop
    $('.quick-detail').click(function() {
        $('.product').toggleClass('flip');
    });


});
//# sourceURL=pen.js
</script>
@endsection