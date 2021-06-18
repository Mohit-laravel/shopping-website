@include('header')
<div class="main-categorious">
			<div class="footer">
				<div class="main-img">
					<img src="{{url('/images/16.png')}}">
				</div>
@include('sidebar')
				<div class="contact">
					<div class="contact-us">
						<p>FEATURED PRODUCTS</p>
					</div>


                    @foreach($product as $pro)
					<div class="Camera-info">
						<!-- <div class="cam-info"> -->
							<a href="{{url('/display-category/'.$pro->categoryid)}}">
							<div class="samsung-cam">
								<div class="cam-info">
									<img src="{{url('/images/'.$pro->productimage)}}">
									<div class="sam-prc">
										<span>{{$pro->productname}}</span>
										<p>Rs.{{$pro->productprice}}</p>
									</div>
									<hr class="hr2">
									<div class="cart-btn">
										<i class="fa fa-plus-circle iconn" aria-hidden="true"></i>
										<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
										<i class="fa fa-plus" aria-hidden="true"></i>
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
										<input type="submit" name="" value="Add to cart">
									</div>
								</div>
							</div>	
						</a>
						<!-- </div> -->
					</div>
					@endforeach
					<div class="Camera-info">
						
						

					</div>
				</div>
				@include('footer')
			</div>
		</div>
	</div>
</body>
</html>