
@extends('layouts.welcome')

@section('content')
    <section class="banner-2 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-xl-6 col-lg-6">
                    <div class="banner-content">
                        <span class="subheading">online</span>
                        <h1>Um repositório de projeto de matematica!</h1>
                        <p>
                            Um local exclusivo para alunos e professores postarem seus projetos das mais diversas áreas da matemática.
                        </p>
                    </div>
                </div>

                <div class="col-md-12 col-xl-6 col-lg-6">
                    <div class="banner-img-round mt-5 mt-lg-0">
                        <img src="{{asset('/images/home-page-header-img-1.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
    <!-- Banner Section End -->
    <section class="section-padding popular-course-list">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-8 col-md-8">
                        <div class="section-heading mb-sm-0">
                            <span class="subheading">Publicados</span>
                            <h3>Projetos publicados na nossa plataforma</h3>
                            <p>
                                Aqui estão alguns dos projetos publicados
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4  col-md-4">
                    </div>
                </div>

                <div class="row">
                    @foreach($projetos as $projeto)
                        <div class="col-lg-6 col-md-12">
                            <div class="course-block course-list-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-sm-4 ">
                                        <img src="{{$projeto->image}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-8  col-sm-8">
                                        <div class="course-content">
                                            <h4><a href="{{url('/projeto/'.$projeto->slug)}}">{{$projeto->nome}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection
