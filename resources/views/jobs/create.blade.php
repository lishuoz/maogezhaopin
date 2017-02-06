@extends('layouts.app')

@section('navbar')
@include('partials.navbar-create')
@endsection

@section('content')

<section class="hero is-primary">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				<a href="/jobs/create">创建工作信息</a>
			</h1>
			<h2 class="subtitle">
				免费发布招聘信息
			</h2>
		</div>
	</div>
</section>

@if (count($errors) > 0)
<section class="section">
	<div class="container">
		@foreach($errors->all() as $error)
		<info-error error="{{$error}}"></info-error>
		@endforeach
	</div>
</section>
@endif

<info-createform></info-createform>
@endsection
