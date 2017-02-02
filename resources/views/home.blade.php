@extends('layouts.app')

@section('content')
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                <a href="/home">我的后台</a>
            </h1>
            <h2 class="subtitle">
                管理我的招聘信息
            </h2>
        </div>
    </div>
</section>
<nav class="nav is-primary">
    <div class="container">
        <div class="nav-center">
            <a class="nav-item is-tab is-active" href="/home">
                我发布的工作
            </a>
          <!--   <a class="nav-item is-tab" href="#">
                我的信息
            </a> -->
        </div>
    </div>
</nav>
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-half is-offset-3">
                <info-homecardlist :jobs="{{$jobs}}"></info-homecardlist>
            </div>
        </div>
    </div>
</section>
@endsection
