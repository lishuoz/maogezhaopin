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
                          多伦多找工作招聘网站。
                      </h2>
                  </div>
                  <hr>
                  <div class="content">
                    <form method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <p class="control">
                            <input class="input is-large{{ $errors->has('name') ? ' is-danger' : '' }}" id="name" type="name" name="name" placeholder="姓名" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                            <span class="help is-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </p>

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
                            <input class="input is-large" id="password-confirm" type="password" name="password_confirmation" placeholder="确认密码" required>
                        </p>

                        <p class="control">
                            <button class="button is-primary is-large is-fullwidth">注册</button>
                        </p>

                        <hr>

                        <p class="control">
                            <a href="{{ url('/login') }}" class="button is-link">已有账号？直接登陆</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
