@extends('mainlayouts.main')

@section('content')
<h2 class="text-center">Reviews</h2>
	<div class="container text-center">
		<div class="row">
			@foreach($products as $product)
			<div class="col-3 text-center">
				@include('shop._product')
			</div>
			@endforeach
		</div>
		
		@foreach($reviews as $review)
		<div class="row card-deck">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/768px-Circle-icons-profile.svg.png" style="width: 45px; height: 45px;">
			{{$review->review}}
			<br>
		</div>
		@endforeach
	</div>
@endsection