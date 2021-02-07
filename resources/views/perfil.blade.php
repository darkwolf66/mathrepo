@extends('layouts.welcome')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-8">
                    <div class="title-block">
                        <h1>{{$perfil->nome}}</h1>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                                Perfil
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                                <a href="{{config('app.url')}}/perfil/{{$perfil->slug}}">{{$perfil->nome}}</a>
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
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Sobre</a>
                            <a class="nav-item nav-link" id="nav-feedback-tab" data-toggle="tab" href="#nav-feedback" role="tab" aria-controls="nav-contact" aria-selected="false">Projetos</a>
                        </div>
                    </nav>
                    <div class="tab-content edutim-course-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="single-course-details ">
                                <div>
                                    {!! $perfil->sobre !!}
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-feedback" role="tabpanel" aria-labelledby="nav-feedback-tab">
                            <div id="course-reviews">
                                <h3 class="course-review-head">Projetos</h3>
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach($perfil->projetos as $projeto)
                                            <div class="col-12">
                                                <div class="course-block course-list-item">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-4 col-sm-4 ">
                                                            <img src="{{config('app.url')}}/{{$projeto->projeto->image}}" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="col-lg-8  col-sm-8">
                                                            <div class="course-content">
                                                                <h4><a href="{{config('app.url')}}/projeto/{{$projeto->projeto->slug}}">{{$projeto->projeto->nome}}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
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
                                    <img src="{{config('app.url')}}/{{$perfil->profile_picture}}" class="img-fluid">
                                </li>
                            </ul>
                            <div class="buy-btn">
                                <a class="button button-enroll-course btn btn-primary" href="{{$perfil->lattes}}">
                                    Ver curriculo lattes
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- Course Sidebar end -->
                </div>
            </div>
        </div>
    </section>
@endsection
