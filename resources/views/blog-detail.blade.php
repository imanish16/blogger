@extends('layouts.app')
@section('content')
    <div class="main-wrapper ">
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <h1 class="text-capitalize mb-4 text-lg">{{ ucfirst($blog->title) }}</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{ url('/') }}" class="text-white-50">Home</a>
                                </li>
                                <li class="list-inline-item"><span class="text-white">/</span></li>
                                <li class="list-inline-item active"><a href=""
                                        class="text-white">{{ ucfirst($blog->title) }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="section blog-wrap bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <div class="single-blog-item">
                                    <img src="{{ asset('BlogThumbnail/' . $blog->image) }}" alt="" class="img-fluid rounded">

                                    <div class="blog-item-content bg-white p-5">
                                        <h2 class="mt-3 mb-4"><a href="blog-single.html">{{ $blog->title }}</a></h2>
                                        <p>{!! $blog->body !!}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
