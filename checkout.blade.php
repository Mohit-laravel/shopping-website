@include('header')
		<div class="null">
			
		</div>
		<div class="main-categorious">
			<div class="footer">
			@include('sidebar')
				<div class="contact">
					<div class="contact-us">
						<p>Checkout</p>
					</div>
					<div class="dish-info">
						<div class="machine-info">
    <table class="tablepad" width="100%" border="2" align="center"  style="text-align:center;">
			      <tr> 
			        <th>ID</td>
			        <th>User name</td>
				    <th>Product name</td>
				    <th>Product Price</td>
			        <th>Quantity</td>
			        <th>SubTotal</th>
			        <th>Remove Item</th>
			    </tr>
			    {{$total=0}}
		       @foreach($checkout as $c)
				<tr>
			     <td>{{$c->id}}</td>
				 <td>{{$c->fullname}}</td>
				 <td>{{$c->productname}}</td>
				 <td>{{$c->productprice}}</td>
				 <td>{{$c->qty}}</td>
				 <td>{{$c->productprice * $c->qty}}</td>
				 <?php $total += $c->productprice * $c->qty ?>
				 <td><a href="{{url('/deleteproduct/'.$c->id)}}"><i class="fa fa-minus-circle" aria-hidden="true"></i></a></td>
			  </tr>
		@endforeach
		<td colspan="5">GRAND TOTAL</td>
		<td>{{$total}}</td>
			  </table>
						</div>
					</div>
					
				</div>
				@include('footer')
			</div>
		</div>
	</div>
    <style>
        .tablepad th{
            padding:15px;
        }
        .tablepad td{
            padding:10px;
        }
    </style>
</body>
</html>