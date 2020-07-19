@extends('layouts.app')

@section('content')
	<h2 class="text-center">Categories</h2>
	<div class="container">
		<div class="row">
			@foreach($categories as $category)
			<div class="col-3">
				<a href="/category/{{$category->slug}}">
					<img src="{{$category->img}}" class="img-fluid">
					{{$category->name}} ({{$category->products->count()}})
				</a>
			</div>
			@endforeach
		</div>
	</div>

	<h2 class="text-center">Products</h2>
	<div class="container">
		<div class="row">
			@foreach($products as $product)
			<div class="col-3">
				@include('shop._product')
			</div>
			@endforeach
		</div>
	</div>

	<h2 class="text-center">Reviews</h2>
	<div class="container">
		<div class="row">

			@for($i = 0; $i<= 3; $i++)
			<div class="col-3">
				<div class="border">
				<a href="/review/{{$reviews[$i]->id}}">
					<img src="https://banner2.cleanpng.com/20180411/zrq/kisspng-computer-icons-user-symbol-encapsulated-postscript-info-5acde5207d4049.1889199815234429765131.jpg" class="img-fluid img-thumbnail">
					{{$reviews[$i]->review}}
				</a>
			</div>
		</div>
			@endfor
		</div>
	</div>
	

{{-- 	<h1>{{$title}}</h1>

	{!! $subtitle !!}
	<br>
	@php
		echo time();
	@endphp
	<br>
	@foreach($users as $user)
		{{$loop->iteration}}.	{{$user}} <br>
	@endforeach --}}

@endsection

{{-- @section('title', $title) --}}



