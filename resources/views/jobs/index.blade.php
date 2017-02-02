@extends('layouts.app')

@section('content')
<section class="hero is-primary">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				<a href="/jobs">所有招聘信息</a>
			</h1>
			<h2 class="subtitle">
				让找工作变简单
			</h2>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-3">
				<info-filter></info-filter>
			</div>
			<div class="column is-half">
				<info-cardlist :jobs="{{$jobs}}"></info-cardlist>
			</div>
			<div class="column is-3">

			</div>
		</div>
	</div>
</section>



@endsection
