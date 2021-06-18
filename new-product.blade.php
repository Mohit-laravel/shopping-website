@include('header')
		<div class="null">
			
		</div>
		<div class="main-categorious">
			<div class="footer">
				@include('sidebar')
				<div class="contact">
					<div class="contact-us">
						<p>New Products</p>
					</div>
					
				 @foreach($product as $row)
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="{{url('/images/'.$row->productimage)}}">
							</div>
							<div class="stock">
								<p>In Stock: {{$row->productquantity}}</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="date">
								<span> Date Added:2013-06-01  08:05:32</span>
							</div>
							<!-- <hr class="hr"> -->
							<div class="washer">
								<p>{{$row->productname}}</p>
							</div>
							<div class="model-info">
								<span>Model:{{$row->productname}}</span>
								<p>Manufacturer:{{$row->productname}}</p>
							</div>
							<div class="price">
								<span>Rs.{{$row->productprice}}</span>
							</div>
							<div class="checkout">
							  <a href="{{url('/buy-product/'.$row->id)}}">
								<input type="submit" name="" value="BUY NOW">
							  </a>
							</div>
						</div>
					</div>
				@endforeach
				@include('footer')
			</div>
		</div>
	</div>
</body>
</html>