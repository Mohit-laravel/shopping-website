@include('header')
		<div class="null">
			
		</div>
		<div class="main-categorious">
			<div class="footer">
			@include('sidebar')
				<div class="contact">
					<div class="contact-us">
						<p>{{$product[0]->productname}}</p>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="{{url('/images/'.$product[0]->productimage)}}">
							</div>
							<div class="stock">
								<p>In Stock: {{$product[0]->productquantity}}</p>
							</div>
							<div class="detail">
								<span>Details:</span>
								<p>{{$product[0]->productname}}</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="washer">
								<p>{{$product[0]->productname}}</p>
							</div>
							<div class="model-info">
								<span>Model:{{$product[0]->productname}}</span>
								<p>Manufacturer:{{$product[0]->productname}}</p>
							</div>
							<div class="quantity">
								<form action="{{url('/add-quantity')}}" method="post">
									{{csrf_field()}}
									<input type="hidden" value="{{$product[0]->id}}" name="pid">
									<input type="hidden" value="{{ Session::get('userid')}}" name="uid">
									<table>
										<tr>
											<td class="qty">Enter quantity</td>
											<td><input type="text" name="quantity"></td>
										</tr>
									</table>
				
								<div class="price">
									<span>Rs.{{$product[0]->productprice}}</span>
								</div>
							</div>
							<div class="cart">
								<input type="submit" name="" value="Add to Cart">
							</div>
							</form>
							<div class="checkout">
							<a href="{{url('/checkout/'.Session::get('userid'))}}">
								<input type="submit" name="" value="checkout">
                             </a>
					
							</div>
						</div>
					</div>
					<div class="info">
						<form action="{{url('/product-query')}}" method="post">
							@csrf
							<input type="hidden" name="productname" value="{{$product[0]->productname}}">
							<table class="table-info">
								<tr>
									<td class="nme">Enter name</td>
									<td><input type="text" name="name"></td>
								</tr>
								<tr>
									<td class="nme">Enter Email</td>
									<td><input type="text" name="email"></td>
								</tr>
								<tr>
									<td class="nme">Enter Review</td>
									<td><textarea name="review"></textarea></td>
								</tr>
								<tr>
									<td class="nme">Rating</td>
									<td><input type="number" name="rating"></td>
								</tr>
								<tr>
									<td class="btnn-1">
										<input type="submit" name="" value="Submit query">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				@include('footer')
			</div>
		</div>
	</div>
</body>
</html>