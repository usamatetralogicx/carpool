@extends('layouts.app')
@section('content')
@include('partials.header')
 <div class="page-wrapper">
       <!-- /.site-header header-one -->
        <section class="inner-banner">
            <div class="container">
                <ul class="thm-breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li><span class="sep">.</span></li>
                    <li><span class="page-title">Blog</span></li>
                </ul><!-- /.thm-breadcrumb -->
                <h2>Single Post</h2>
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="single-blog-details-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-blog-style-one">
                            <div class="image-block">
                                <div class="inner-block">
                                    <img src="{{url('/')}}/assests/images//blog/single-blog-1-1.jpg" alt="Awesome Image" />
                                </div><!-- /.inner-block -->
                            </div><!-- /.image-block -->
                            <div class="text-block">
                                <div class="meta-info">
                                    <a href="#" class="date-block">20 Feb, 2019</a>
                                    <a href="#">by Admin</a>
                                    <span class="sep">.</span>
                                    <a href="#">3 Comments</a>
                                </div><!-- /.meta-info -->
                                <h3 class="post-title">We ensure you that your journey is comfortable and safe</h3>
                                <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true gener ator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum gener ators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated is therefore always free from repetition injected humour.</p>
                            </div><!-- /.text-block -->
                        </div><!-- /.single-blog-style-one -->
                        <div class="share-block">
                            <div class="left-block">
                                <p>Tags<a href="#">hybrid</a><a href="#">luxury</a></p>
                            </div><!-- /.left-block -->
                            <div class="social-block">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook-f"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div><!-- /.social-block -->
                        </div><!-- /.share-block -->
                        <div class="comments-block">
                            <div class="block-title">
                                <h2>2 Comments</h2>
                            </div><!-- /.block-title -->
                            <div class="single-comment-one">
                                <div class="image-block">
                                    <div class="inner-block">
                                        <img src="{{url('/')}}/assests/images//blog/comment-1-1.jpg" alt="Awesome Image" />
                                    </div><!-- /.inner-block -->
                                </div><!-- /.image-block -->
                                <div class="text-block">
                                    <h3>Armida Faurrieta <span class="date-line">20 Feb, 2019</span></h3>
                                    <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration are many variations of passages of lorem ipsum available</p>
                                    <a href="#" class="reply-btn">Reply</a>
                                </div><!-- /.text-block -->
                            </div><!-- /.single-comment-one -->
                            <div class="single-comment-one">
                                <div class="image-block">
                                    <div class="inner-block">
                                        <img src="{{url('/')}}/assests/images//blog/comment-1-2.jpg" alt="Awesome Image" />
                                    </div><!-- /.inner-block -->
                                </div><!-- /.image-block -->
                                <div class="text-block">
                                    <h3>Ching Torsiello <span class="date-line">20 Feb, 2019</span></h3>
                                    <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration are many variations of passages of lorem ipsum available</p>
                                    <a href="#" class="reply-btn">Reply</a>
                                </div><!-- /.text-block -->
                            </div><!-- /.single-comment-one -->
                        </div><!-- /.comments-block -->
                        <div class="reply-comment-block">
                            <div class="block-title">
                                <h2>Leave a comment</h2>
                            </div><!-- /.block-title -->
                            <form action="http://ashik.templatepath.net/conexi-preview-files/inc/sendemail.php" class="contact-form-one row">
                                <div class="col-lg-6">
                                    <div class="input-holder">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div><!-- /.input-holder -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-holder">
                                        <input type="text" name="name" placeholder="Email address">
                                    </div><!-- /.input-holder -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <div class="input-holder">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div><!-- /.input-holder -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <div class="input-holder">
                                        <button type="submit">Submit Comment</button>
                                    </div><!-- /.input-holder -->
                                </div><!-- /.col-lg-6 -->
                            </form><!-- /.contact-form-one -->
                        </div><!-- /.reply-comment-block -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="single-sidebar author-widget">
                                <div class="image-block">
                                    <img src="{{url('/')}}/assests/images//blog/auhor-1-1.jpg" alt="Awesome Image" />
                                </div><!-- /.image-block -->
                                <h3>About Author</h3>
                                <p>There are many variations of passages of lorem ipsum but the majority have suffe.</p>
                                <div class="social-block">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div><!-- /.social-block -->
                            </div><!-- /.single-sidebar author-widget -->
                            <div class="single-sidebar latest-post-widget">
                                <div class="widget-title">
                                    <h3>Recent Post</h3>
                                </div><!-- /.widget-title -->
                                <div class="post-wrapper">
                                    <div class="single-latest-post">
                                        <div class="image-block">
                                        	<div class="inner-block">
                                            	<img src="{{url('/')}}/assests/images//blog/lp-1-1.jpg" alt="Awesome Image" />
                                            </div><!-- /.inner-block -->
                                        </div><!-- /.image-block -->
                                        <div class="text-block">
                                            <span class="date-line">18 FEb, 2019</span>
                                            <h3><a href="blog-details.html">Car with private and discreet cabman for a...</a></h3>
                                        </div><!-- /.text-block -->
                                    </div><!-- /.single-latest-post -->
                                    <div class="single-latest-post">
                                        <div class="image-block">
                                        	<div class="inner-block">
                                            	<img src="{{url('/')}}/assests/images//blog/lp-1-2.jpg" alt="Awesome Image" />
                                            </div><!-- /.inner-block -->
                                        </div><!-- /.image-block -->
                                        <div class="text-block">
                                            <span class="date-line">10 FEb, 2019</span>
                                            <h3><a href="blog-details.html"> Our taxis commit to make your trips unique</a></h3>
                                        </div><!-- /.text-block -->
                                    </div><!-- /.single-latest-post -->
                                    <div class="single-latest-post">
                                        <div class="image-block">
                                        	<div class="inner-block">
                                            	<img src="{{url('/')}}/assests/images//blog/lp-1-3.jpg" alt="Awesome Image" />
                                            </div><!-- /.inner-block -->
                                        </div><!-- /.image-block -->
                                        <div class="text-block">
                                            <span class="date-line">08 FEb, 2019</span>
                                            <h3><a href="blog-details.html">Travel in style on the one day that counts</a></h3>
                                        </div><!-- /.text-block -->
                                    </div><!-- /.single-latest-post -->
                                </div><!-- /.post-wrapper -->
                            </div><!-- /.single-sidebar author-widget -->
                            <div class="single-sidebar tags-widget">
                                <div class="widget-title">
                                    <h3>Popular Tags</h3>
                                </div><!-- /.widget-title -->
                                <div class="tags-list">
                                    <a href="#">hybrid</a>
                                    <a href="#">transport</a>
                                    <a href="#">Car</a>
                                    <a href="#">luxury</a>
                                    <a href="#">Taxi</a>
                                    <a href="#">Traveling</a>
                                </div><!-- /.tags-list -->
                            </div><!-- /.single-sidebar -->
                            <div class="single-sidebar tags-widget">
                                <div class="widget-title">
                                    <h3>Categories</h3>
                                </div><!-- /.widget-title -->
                                <ul class="categories-list">
                                    <li><a href="#">Transport</a></li>
                                    <li><a href="#">Traveling</a></li>
                                    <li><a href="#">Long Trips</a></li>
                                    <li><a href="#">Journey</a></li>
                                    <li><a href="#">Hyrbird Taxis</a></li>
                                </ul><!-- /.categories-list -->
                            </div><!-- /.single-sidebar -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.single-blog-details-page -->
       <!-- /.site-footer -->
    </div>



@include('partials.footer')
@endsection