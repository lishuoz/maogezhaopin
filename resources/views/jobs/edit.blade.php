@extends('layouts.app')

@section('content')
<section class="hero is-primary">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				修改工作信息
			</h1>
			<h2 class="subtitle">
				Hero subtitle
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

<info-editform :job="{{$job}}"></info-editform>

@endsection
