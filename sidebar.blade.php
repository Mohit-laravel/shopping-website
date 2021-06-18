<div class="categorious">
	<div class="cate-heading">
	    <p>CATEGORIES</p>
	</div>
	<div class="items">
	    <ul>
	      @foreach($category as $row)
	      <a href="{{url('/display-category/'.$row->id)}}">
          <li>{{$row->categoryname}}</li>
      </a>
          @endforeach
		</ul>
		
    </div>
</div>