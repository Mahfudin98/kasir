@extends('layouts.layout')


@section('title')
    Home
@endsection


@section('menu')
    Home
@endsection

@section('welcome')
    Selamat datang di sistem kasir
@endsection

@section('kasir')
    Para pengusaha
@endsection

@section('body')
    <div class="blog-details-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-details-inner">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="latest-blog-single blog-single-full-view">
                                        <div class="blog-image">
                                            <a href="#"><img src="{{asset('assets/img/blog-details/laden.jpg')}}" alt="" />
											</a>
                                        </div>
                                        <div class="blog-details blog-sig-details">
                                            @foreach($posts as $post)
                                            <h1><a class="blog-ht" href="/">{{$post->title}}</a></h1>
                                            <p>{{$post->body}}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop



