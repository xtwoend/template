<h4 class="font-thin m-b">New books entries</h4>
<div class="row row-sm">
	@for($i=0; $i<12; $i++)
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
      	<div class="item">
        	<div class="pos-rlt">
				<div class="bottom">
					<span class="badge bg-info m-l-sm m-b-sm">03:20</span>
				</div>
	          	<div class="item-overlay opacity r r-2x bg-black">
		            <div class="text-info padder m-t-sm text-sm">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o text-muted"></i>
		            </div>
		            <div class="center text-center m-t-n">
		              	<a href="#"><i class="icon-control-play i-2x"></i></a>
		            </div>
		            <div class="bottom padder m-b-sm">
		              	<a href="#" class="pull-right">
		                	<i class="fa fa-heart-o"></i>
		              	</a>
		              	<a href="#">
		                	<i class="fa fa-plus-circle"></i>
		              	</a>
		            </div>
	        	</div>
	          	<a href="#"><img src="/images/p1.jpg" alt="" class="r r-2x img-full"></a>
	        </div>
	        <div class="padder-v">
	          	<a href="#" class="text-ellipsis">Tempered Song</a>
	          	<a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>
	        </div>
      	</div>
    </div>
    @endfor
</div>
