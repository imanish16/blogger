@extends('layouts.app')
@section('content')

    <!-- Header Close -->

    <div class="main-wrapper ">
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <h1 class="text-capitalize mb-4 text-lg">Blogger</h1>
                            <ul class="list-inline">
                                {{-- <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li> --}}
                                <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section blog-wrap bg-gray">
            <div class="container">
                <div class="row">
                    @foreach ($blog as $data)
                        <div class="col-lg-6 col-md-6 mb-5">
                            <div class="blog-item">
                                <img src="{{ asset('BlogThumbnail/' . $data->image) }}" alt="" class="img-fluid rounded" >
                                <div class="blog-item-content bg-white p-5">
                                    <h3 class="mt-3 mb-3"><a href="">{{ $data->title }}</a></h3>
                                    <p class="mb-4">{!! Str::limit($data->body, 10, ' ...') !!}
                                    <div class="col">
                                        <a href="{{ url('show-blogs/'.$data->id) }}" class="btn btn-small btn-main btn-round-full">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-lg-6 text-center">
                        <nav class="navigation pagination d-inline-block">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="#">Prev</a>
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="next page-numbers" href="#">Next</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        @endsection
       