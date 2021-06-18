<!DOCTYPE html>
<html>
<head>
	<title>ENEST-5</title>
	<link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="main-div">
		<div class="head-div">
			<div class="main">
				<div class="head">
					<span>EVEST</span>
					<p>THE BIGGEST CHOICE OF THE WEB</p>
				</div>
				<div class="btn">
				@if(session()->has('userid'))
				<a href="{{url('/logout')}}">
					<input type="button" name="" value="Log Out{{Session::get('userid')}}">
				</a>
				@else
				<a href="{{url('/login')}}">
				   <input type="button" name="" value="Log in">
                </a>
				@endif
				</div>
			</div>
		</div>
		<div class="home-page">
		 	<div class="pagnation">
				<div class="list">
					<ul>
						<li><a href="{{url('/')}}">HOME</a></li>
						<li><a href="{{url('/new-products')}}">NEW PRODUCT</a></li>
						<li><a href="{{url('/special-products')}}">SPECIAL</a></li>
						<li><a href="{{url('/all-products')}}">ALL PRODUCTS</a></li>
						<li><a href="{{url('/contact')}}">CONTACT</a></li>
						<!-- <li><a href="{{url('/login')}}">LOG IN</a></li> -->
					</ul>
				</div>
				<form action="{{url('/search')}}" method="post">
				{{csrf_field()}}
				<div class="search">
					<div class="search-1">
						<div class="input">
							<input type="text" name="search">
						</div>
						<div class="btnn">
							<input type="submit" name="" value="Search">
						</div>
					</div>
				</div>
               </form>
			</div>
		</div>
		<div class="null">
			
		</div>
		