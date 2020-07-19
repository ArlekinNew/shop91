<div class="border">
	@if($product->recommended)
		<div class="recommended">Recommended</div>
	@endif
	<div>Category: {{$product->category->name}}</div>
	<a href="/product/{{$product->slug}}">
		<img src="{{$product->img}}" class="img-fluid" alt="{{$product->name}}">
		{{$product->name}}
		<div class="border-top">
			Price: {{$product->price}}
		</div>
	</a>

</div>