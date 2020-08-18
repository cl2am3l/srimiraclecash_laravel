@extends('layouts.default')
<link href="{{ asset('css/knowledge.css') }}" rel="stylesheet">
@section('content')
<div style="padding:100px 0px 40px">
    <img class="img-fluid" src="{{asset('img/banner/srimiracle_banner.png')}}" />
</div>
<div style="padding:0px 0px 80px 0px">
    <div class="container-fluid">
        <div class="col-md-12 section-page-4" style="padding-bottom: 0;">
            <h3 class="font-prompt"><i class="fas fa-donate ore"></i> สาระการเงิน</h3>
            <hr class="w-100 border-main"><br />
        </div>
        <!-- <div class="container-fluid"> -->
        <div class="row align-items-start">
            <div class="col-lg-12 m-15px-tb">
                <div class="row">
                    @foreach($knowledges as $knowledge)
                    @if ($knowledge->knowledge_status === 1)
                    <div class="col-sm-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">
                                    <span>{{$knowledge->knowledge_created_at}}</span>
                                    <label>FEB</label>
                                </div>
                                <a href="{{url('knowledge',['knowledge'=> $knowledge->id])}}">
                                    <img src="{{asset('img/blog/pexels-6187.jpg')}}" title="" alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5 class="text-length"><a href="{{url('knowledge',['knowledge'=> $knowledge->id])}}">{{$knowledge->knowledge_heading}}</a></h5>
                                <p class="text-length">{{$knowledge->knowledge_description}}</p>
                                <div class="btn-bar">
                                <a href="{{url('knowledge',['knowledge'=> $knowledge->id])}}" class="px-btn-arrow">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    
        <!-- </div> -->
    </div>
    <div style="padding:20px">
        <ul class="pagination justify-content-center">
        {{$knowledges->links()}}
        </ul>
    </div>
</div>
<!-- end knowledge-->

@stop