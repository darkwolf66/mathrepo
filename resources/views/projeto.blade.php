@extends('layouts.welcome')

@section('content')





    <section class="page-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-8">
                    <div class="title-block">
                        <h1>{{$projeto->nome}}</h1>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="{{url('/')}}">Inicio</a>
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                                Projetos
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                                <a href="{{url('/projeto/'.$projeto->slug)}}">{{$projeto->slug}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-wrapper edutim-course-single edutim-course-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav class="course-single-tabs learn-press-nav-tabs">
                        <div class="nav nav-tabs  course-nav" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                Sobre
                            </a>
                            <a class="nav-item nav-link" id="nav-topics-tab" data-toggle="tab" href="#nav-topics" role="tab" aria-controls="nav-profile" aria-selected="false">
                                Arquivos
                            </a>
                            <a class="nav-item nav-link" id="nav-instructor-tab" data-toggle="tab" href="#nav-instructor" role="tab" aria-controls="nav-contact" aria-selected="false">
                                Colaboradores
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content edutim-course-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <img src="{{$projeto->image}}" class="img-fluid">
                            <div class="single-course-details">
                                {{$projeto->descricao}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-topics" role="tabpanel" aria-labelledby="nav-topics-tab">
                            <div class="edutim-course-curriculum">
                                <div class="curriculum-scrollable">
                                    <ul class="curriculum-sections">
                                        <li class="section">
                                            <div class="section-header">
                                                <div class="section-left">
                                                    <h5 class="section-title">Modulo 1</h5>
                                                    <p class="section-desc">Exemplo descricao modulo</p>
                                                </div>
                                            </div>

                                            <ul class="section-content">
                                                <li class="course-item has-status course-item-lp_lesson">
                                                    <a class="section-item-link" href="#">
                                                        <span class="item-name">Arquivo 1</span>
                                                        <div class="course-item-meta">
                                                            <span class="item-meta duration">pdf</span>
                                                            <i class="item-meta course-item-status"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="course-item has-status course-item-lp_lesson">
                                                    <a class="section-item-link" href="#">
                                                        <span class="item-name">Arquivo 2</span>
                                                        <div class="course-item-meta">
                                                            <span class="item-meta duration">pdf</span>
                                                            <i class="item-meta course-item-status" ></i>
                                                        </div>
                                                    </a>

                                                </li>
                                            </ul>
                                        </li>

                                        <li class="section">
                                            <div class="section-header">
                                                <div class="section-left">
                                                    <h5 class="section-title">Modulo 2</h5>
                                                    <p class="section-desc">Exemplo descricao modulo</p>
                                                </div>
                                            </div>
                                            <ul class="section-content">
                                                <li class="course-item has-status course-item-lp_lesson">
                                                    <a class="section-item-link" href="#">
                                                        <span class="item-name">Arquivo 1</span>
                                                        <div class="course-item-meta">
                                                            <span class="item-meta duration">pdf</span>
                                                            <i class="item-meta course-item-status"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-instructor" role="tabpanel" aria-labelledby="nav-instructor-tab">
                            <!-- Course instructor start -->
                            <div class="courses-instructor">
                                <div class="single-instructor-box">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="instructor-image">
                                                <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                        <div class="col-lg-8 col-md-8">
                                            <div class="instructor-content">
                                                <h4><a href="#">Jenifer</a></h4>
                                                <span class="sub-title"><p>Aluna</p></span>

                                                <p>
                                                    Descricao dessa pessoa

                                                </p>

                                                <ul class="user-social-links">
                                                    <li><a href="#"> <i class="fab fa-facebook"></i></a></li>

                                                    <li><a href="#"> <i class="fab fa-twitter"></i></a></li>

                                                    <li><a href="#"> <i class="fab fa-linkedin"></i></a></li>

                                                    <li><a href="#"> <i class="fab fa-youtube"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Conurse  instructor end -->
                        </div>
                        <div class="tab-pane fade" id="nav-feedback" role="tabpanel" aria-labelledby="nav-feedback-tab">
                            <div id="course-reviews">
                                <h3 class="course-review-head">Reviews</h3>
                                <ul class="course-reviews-list">
                                    <li>
                                        <div class="course-review">
                                            <div class="course-single-review">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="user-image">
                                                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-9 col-md-9">
                                                        <div class="user-content user-review-content">
                                                            <h4 class="user-name">MathRepo</h4>
                                                            <div class="rating review-stars-rated">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-half"></i></a>
                                                            </div>
                                                            <p class="review-title">Cover all topicc  </p>
                                                            <div class="review-text">
                                                                <div class="review-content">
                                                                    The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-review">
                                            <div class="course-single-review">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="user-image">
                                                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-9 col-md-9">
                                                        <div class="user-content user-review-content">
                                                            <h4 class="user-name">Jenifer Oliveira</h4>
                                                            <div class="rating review-stars-rated">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-half"></i></a>
                                                            </div>
                                                            <p class="review-title">Cover all topicc  </p>

                                                            <div class="review-text">
                                                                <div class="review-content">
                                                                    The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <!-- Course Sidebar start -->
                    <div class="course-sidebar">
                        <div class="course-widget course-details-info">
                            <ul>
                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="far fa-user"></i>Coordenador :</span>
                                        <a href="#" class="d-inline-block"></a><a href="#">MathRepo</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="far fa-file-alt"></i>Arquivos :</span>
                                        2
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="fa fa-user"></i>Colaboradores :</span>
                                        <a href="#" class="d-inline-block">0</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="far fa-calendar"></i>Data de inicio :</span>
                                        October 15, 2020
                                    </div>
                                </li>
                            </ul>
                            <h4>
                                Compartilhe o projeto:
                            </h4>
                            <a class="button button-enroll-course btn btn-primary btn-social">
                                <i class="fab fa-facebook"></i> Facebook
                            </a>
                            <a class="button button-enroll-course btn btn-primary btn-social">
                                <i class="fab fa-linkedin"></i> Linkedin
                            </a>
                            <a class="button button-enroll-course btn btn-primary btn-social">
                                <i class="fab fa-twitter"></i> Twitter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
