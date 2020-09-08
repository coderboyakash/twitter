@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 bg-dark" id="leftMenu">
            <div class="row">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                    <a href=""><i class="fa fa-twitter twitterLogo p-1 rounded-circle"></i></a>
                    <div class="mt-3"><a href="" class="explore text-decoration-none pt-2 pl-3 pb-2 pr-3"><i class="fa fa-hashtag mr-2"></i> &nbsp;&nbsp;Explore</a></div>
                    <div class="mt-3"><a href="" class="explore text-decoration-none pt-2 pl-3 pb-2 pr-3"><i class="fa fa-gear mr-2 fa-spin"></i> &nbsp;&nbsp;Settings</a></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 bg-dark vh-100" id="mainContent">
            <form action="" id="searchBox" class="pl-3 pr-3">
                <div class="form-group">
                    <input type="text" class="form-control mt-3" placeholder="Search Twitter" style="border-radius:20px;">
                </div>
            </form>
            <div class="row categories m-0">
                @foreach($categories as $category)
                    <div type="button" class="pl-3 pr-3 pt-2 pb-2 category text-center bg-dark">{{ $category->name }}</div>
                @endforeach
            </div>
            @foreach($tweets as $tweet)
            <div class="card m-0 p-0 bg-dark">
                <div class="card-body">
                    <strong>{{ $tweet->created_at }}</strong>
                    <div>Category</div>
                    <h5 class="card-title">{{ $tweet->title }}</h5>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-4 bg-dark" id="rightMenu">

        </div>
    </div>
</div>
@endsection
@section('styles')
    <style>
        #mainContent{
            border-left:1px solid grey;
            border-right:1px solid grey;
            padding:0px;
        }
        #searchBox{
            border-bottom:1px solid grey;
        }
        #mainContent .card{
            border:none;
            border-bottom:1px solid grey;
            border-radius:0px;
            color:aliceblue;
        }
        .category{
            color:grey;
            
        }
        .twitterLogo{
            font-size:35px;
            color:white;
        }
        .twitterLogo:hover{
            background-color:rgb(15, 87, 87);
            transition-duration: 0.7s;
        }
        .explore{
            transition-duration: 0.7s;
            font-size:20px;
            color:white;
            border-radius:25px;
        }
        .explore:hover{
            background-color:rgb(15, 87, 87);
            transition-duration: 0.3s;
            color:rgb(93, 93, 252);
        }
        .categories{
            overflow:hidden;
            height:40px;
            border-bottom:1px solid grey;
        }
    </style>
@endsection