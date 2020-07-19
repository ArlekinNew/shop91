@extends('mainlayouts.main')

@section('contacts')
<h2 class="text-center">{{$category->name}}</h2>
	<div class="container">
		<div class="row">
			@foreach($products as $product)
			<div class="col-3">
				<a href="/product/{{$product->slug}}">
					<img src="{{$product->img}}" class="img-fluid">
					{{$product->name}}
					<div class="border-top">
						Price: {{$product->price}}
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
@endsection

{{-- @section('contacts', $title) --}}