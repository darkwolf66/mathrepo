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
                                Modulos/Arquivos
                            </a>
                            <a class="nav-item nav-link" id="nav-instructor-tab" data-toggle="tab" href="#nav-instructor" role="tab" aria-controls="nav-contact" aria-selected="false">
                                Colaboradores
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content edutim-course-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <img src="/{{$projeto->image}}" class="img-fluid">
                            <div class="single-course-details">
                                {!! $projeto->descricao !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-topics" role="tabpanel" aria-labelledby="nav-topics-tab">
                            <div class="edutim-course-curriculum">
                                <div class="curriculum-scrollable">
                                    <ul class="curriculum-sections">
                                        @foreach($projeto->modulos as $modulo)
                                            <li class="section">
                                            <div class="section-header">
                                                <div class="section-left">
                                                    <h5 class="section-title">{{$modulo->titulo}}</h5>
                                                    <p class="section-desc">
                                                        {!! $modulo->descricao !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <ul class="section-content">
                                                @foreach($modulo->arquivos as $arquivo)
                                                    <li class="course-item has-status course-item-lp_lesson">
                                                        <a class="section-item-link" href="/{{$arquivo->source}}" target="_blank">
                                                            <span class="item-name">{{$arquivo->titulo}}</span>
                                                            <div class="course-item-meta">
                                                                <span class="item-meta duration">.{{substr($arquivo->source, strrpos($arquivo->source, '.') + 1)}}</span>
                                                                <i class="item-meta course-item-status"></i>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-instructor" role="tabpanel" aria-labelledby="nav-instructor-tab">
                            <!-- Course instructor start -->
                            <div class="courses-instructor">
                                @foreach($projeto->colaboradores as $colaborador)
                                    <div class="single-instructor-box mb-3">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4">
                                                <div class="instructor-image">
                                                    <img src="{{config('app.url')}}/{{$colaborador->perfil->profile_picture}}" alt="Foto Colaborador" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8">
                                                <div class="instructor-content">
                                                    <h4><a href="{{config('app.url')}}/perfil/{{$colaborador->perfil->slug}}">{{$colaborador->perfil->nome}}</a></h4>
                                                    <span class="sub-title text-capitalize"><p>{{$colaborador->tipo}}</p></span>
                                                    <p>
                                                        {{substr($colaborador->perfil->sobre, 0, 50)}}..
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Conurse  instructor end -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Course Sidebar start -->
                    <div class="course-sidebar">
                        <div class="course-widget course-details-info">
                            <ul>
                                @foreach($projeto->colaboradores as $colaborador)
                                    @if($colaborador->tipo == "coordenador")
                                        <li>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <i class="far fa-user"></i> Coordenador(a):
                                                <a href="{{config('url.app')}}/perfil/{{$colaborador->perfil->slug}}">{{$colaborador->perfil->nome}}</a>
                                            </div>
                                        </li>
                                        @break
                                    @endif
                                @endforeach
                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="far fa-file-alt"></i>Arquivos :</span>
                                        {{$projeto->numeroDeArquivos}}
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="fa fa-user"></i>Colaboradores :</span>
                                        {{count($projeto->colaboradores)}}
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="far fa-calendar"></i>Data de inicio :</span>
                                        {{$projeto->data_inicio}}
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><i class="far fa-calendar"></i>Data de término :</span>
                                        {{$projeto->data_termino}}
                                    </div>
                                </li>
                            </ul>
                            <h4>
                                Compartilhe o projeto:
                            </h4>
                            <a
                                target="_blank"
                                class="button button-enroll-course btn btn-primary btn-social"
                                href="https://www.facebook.com/sharer/sharer.php?u={{config('app.url')}}/projeto/{{$projeto->slug}}">
                                <i class="fab fa-facebook"></i> Facebook
                            </a>
                            <a
                                target="_blank"
                                class="button button-enroll-course btn btn-primary btn-social"
                                href="https://www.linkedin.com/shareArticle?mini=true&url={{config('app.url')}}/projeto/{{$projeto->slug}}&title=&summary=&source=">
                                <i class="fab fa-linkedin"></i> Linkedin
                            </a>
                            <a
                                target="_blank"
                                class="button button-enroll-course btn btn-primary btn-social"
                                href="https://twitter.com/intent/tweet?url={{config('app.url')}}/projeto/{{$projeto->slug}}">
                                <i class="fab fa-twitter"></i> Twitter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    http://url.com
    slug
    descricao

@endsection
