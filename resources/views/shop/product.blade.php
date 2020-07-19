@extends('layouts.app')

@section('content')
@foreach($product as $products)
	<h1 class="text-center">{{$products->name}}</h1>

	<div class="container">
		<div class="row ">
			<div class="col-3">
				<a href="">
					<img src="{{$products->img}}" class="img-fluid" alt="">

					<div class="border-top">
						<div>Category: {{$products->category ? $products->category->name : 'No category'}}</div>
						Price: {{$products->price}}
					</div>
					<div class="border-top">
						Description: {{$products->description}}
					</div>
				</a>
			</div>
		</div>

		<h3>Add Review</h3>
		{{-- @guest --}}
			{{-- login or register --}}
		{{-- @else --}}
		<form action="/product/{{$products->slug}}" method="POST">
			@csrf
			<div class="form-group">
				<textarea name="comment" cols="30" rows="10" class="form-control"></textarea>
			</div>
			<input type="hidden" name="product" value="{{$products->id}}">
			{{-- <input type="hidden" name="user" value="{{Auth::user()->id}}"> --}}
			<button class="btn btn-primary">Send</button>
		</form>
		{{-- @endguest --}}
	</div>

@endforeach
@endsection