@extends('layouts.app')

@section('content')
<section class="hero is-medium">
 <!-- Hero content: will be in the middle -->
 <div class="hero-body">
  <div class="container has-text-centered">
    <div class="columns">
      <div class="column is-4 is-offset-4">
        <div class="heading">
          <h1 class="title">猫哥招聘</h1>
          <h2 class="subtitle">
            多伦多找工作招聘网站
          </h2>
        </div>
        <hr>
        <div class="content">
          <form method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <p class="control">
              <input class="input is-large{{ $errors->has('email') ? ' is-danger' : '' }}" id="email" type="email" name="email" placeholder="E-Mail地址" value="{{ old('email') }}" required>
              @if ($errors->has('email'))
              <span class="help is-danger">{{ $errors->first('email') }}</span>
              @endif
            </p>

            <p class="control">
              <input class="input is-large" id="password" type="password" name="password" placeholder="密码" required>

              @if ($errors->has('password'))
              <span class="help is-danger">{{ $errors->first('password') }}</span>
              @endif
            </p>

            <p class="control">
              <input class="is-large" type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> 记住我
            </p>

            <p class="control">
              <button class="button is-primary is-large is-fullwidth">登陆</button>
            </p>

            <hr>

            <p class="control is-pulled-left">
              <a href="{{ url('/register') }}" class="button is-link">还没有账号？注册一个</a>
            </p>
            <!-- <p class="control is-pulled-right">
              <a href="{{ url('/testurl') }}" class="button is-link">不想注册，直接发布信息</a>
            </p> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

@endsection
