@extends('website.layouts.master')

@section('title','Home')

@section('content')

<!----------- featured categories --------------->

<div class="categories">
	<div class="small-container">
		<div class="row">
		<div class="col-3">
			<img src="{{url('website/images/category-1.jpg')}}">
		</div>
		<div class="col-3">
			<img src="{{url('website/images/category-2.jpg')}}">
		</div>
		<div class="col-3">
			<img src="{{url('website/images/category-3.jpg')}}">
		</div>
	</div>
	</div>	
</div>

<!----------- featured categories --------------->

<div class="small-container">
	<h2 class="title">Featured Products</h2>
	<div class="row">
		<div class="col-4">
			<img src="{{url('website/images/product-1.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						<!--Font Awesome 4 icon-->
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="{{url('website/images/product-2.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="{{url('website/images/product-3.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="{{url('website/images/product-4.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
	</div>

	<h2 class="title">Latest Product</h2>
	<div class="row">
		<div class="col-4">
			<img src="{{url('website/images/product-5.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						<!--Font Awesome 4 icon-->
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="{{url('website/images/product-6.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="{{url('website/images/product-7.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="{{url('website/images/product-8.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			<img src="{{url('website/images/product-9.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						<!--Font Awesome 4 icon-->
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="{{url('website/images/product-10.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="{{url('website/images/product-11.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		<div class="col-4">
			<img src="{{url('website/images/product-12.jpg')}}">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
	</div>

</div>

<!---------------  Offer  ----------------->

<div class="offer">
<div class="small-container">
	<div class="row">
		<div class="col-2">
			<img src="{{url('website/images/exclusive.png')}}" class="offer-img">
		</div>
		<div class="col-2">
			<p>Exclusively Avaliable on RedStore</p>
			<h1>Smart Band 4</h1>
			<small>The Mi smart bamd 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.</small>
			<a href="" class="btn">Buy Now &#8594;</a>
		</div>
	</div>
</div>
</div>

<!---------------  testimonial  ---------------->

<div class="testimonial">
<div class="small-container">
	<div class="row">
		<div class="col-3">
			<i class="fa fa-quote-left"></i>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has benn the industry's standard dummy text ever</p>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<img src="{{url('website/images/user-1.png')}}">
			<h3>Sean Parker</h3>
		</div>
		<div class="col-3">
			<i class="fa fa-quote-left"></i>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has benn the industry's standard dummy text ever</p>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<img src="{{url('website/images/user-2.png')}}">
			<h3>Mike Smith</h3>
		</div>
		<div class="col-3">
			<i class="fa fa-quote-left"></i>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has benn the industry's standard dummy text ever</p>
			<div class="rating">						
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<img src="{{url('website/images/user-3.png')}}">
			<h3>Mabel Joe</h3>
		</div>
	</div>
</div>
</div>

<!----------------  brand  ------------------>

<div class="brand">
<div class="small-container">
	<div class="row">
		<div class="col-5">
			<img src="{{url('website/images/logo-godrej.png')}}">
		</div>
		<div class="col-5">
			<img src="{{url('website/images/logo-oppo.png')}}">
		</div>
		<div class="col-5">
			<img src="{{url('website/images/logo-coca-cola.png')}}">
		</div>
		<div class="col-5">
			<img src="{{url('website/images/logo-paypal.png')}}">
		</div>
		<div class="col-5">
			<img src="{{url('website/images/logo-philips.png')}}">
		</div>
	</div>
</div>
</div>

@endsection