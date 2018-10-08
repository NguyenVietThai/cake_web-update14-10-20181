@extends('master')
@section('content')
<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
									@foreach($slide as $sl)
									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$sl->image}}" data-src="source/image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>

						        </li>
									@endforeach
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">Found : {{count($new_product)}}</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							@foreach($new_product as $new)
								<div class="col-sm-3">
									<div class="single-item">
										@if($new->promotion_price > 0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@else
											<div class="ribbon-wrapper"><div class="ribbon new">New</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/{{$new->image}}" alt="" height="200px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price" style="font-size: 15px">
												@if($new->promotion_price == 0)
												<span>{{number_format($new->unit_price)}}</span>
												@else
												<span class="flash-del" >{{number_format($new->unit_price)}}</span>
												<span class="flash-sale">{{number_format($new->promotion_price)}}</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham',$new->id)}}">Buy <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
											<div class="space50">&nbsp;</div>
										</div>
									</div>
								</div>	
								
							@endforeach	
							<div class="space50">&nbsp;</div>						
							</div>
						
						</div> <!-- .beta-products-list -->
						<div class="space50">&nbsp;</div>
						<br>
						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sale Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">Found : {{count($giam_gia)}} </p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($giam_gia as $sale)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$sale->id)}}"><img src="source/image/product/{{$sale->image}}" alt="" height="200px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sale->name}}</p>
											<p class="single-item-price" style="font-size: 15px">
												<span class="flash-del" >{{number_format($sale->unit_price)}}</span>
												<span class="flash-sale">{{number_format($sale->promotion_price)}}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$sale->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham',$sale->id)}}">Buy <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
											<div class="space50">&nbsp;</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
        </div> <!-- #content -->
@endsection