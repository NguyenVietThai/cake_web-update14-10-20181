@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">About us</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home > </a><span>About us</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content">
			<div class="our-history">
				<h2 class="text-center wow fadeInDown">Our History</h2>
				<div class="space35">&nbsp;</div>

				<div class="history-slider">
					<div class="history-navigation">
						<a data-slide-index="0" class="circle"><span class="auto-center">2015</span></a>
						<a data-slide-index="1" class="circle"><span class="auto-center">2016</span></a>
						<a data-slide-index="2" class="circle"><span class="auto-center">2017</span></a>
						
					</div>

					<div class="history-slides">
						<div> 
							<div class="row">
							<div class="col-sm-5">
								<img src="source/image/BKA.jpg" alt="">
							</div>
							<div class="col-sm-7">
								<h5 class="other-title">Dai hoc Bach Khoa Ha Noi</h5>
								<p>
									Ha Noi<br />
									Hedspi K60<br />
									Viet Nam
								</p>
								<div class="space20">&nbsp;</div>
								Hedspi Team K60
							</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection