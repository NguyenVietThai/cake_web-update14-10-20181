<?php $__env->startSection('content'); ?>
<hr>
<source/div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product : <?php echo e($sanpham->name); ?></h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="<?php echo e(route('trang-chu')); ?>">Home</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/product/<?php echo e($sanpham->image); ?>" alt="" height="200px">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><h2><?php echo e($sanpham->name); ?></h2></p>
								<p class="single-item-price" style="font-size: 15px">
									<?php if($sanpham->promotion_price == 0): ?>
									<span><?php echo e(number_format($sanpham->unit_price)); ?></span>
									<?php else: ?>
									<span class="flash-del" ><?php echo e(number_format($sanpham->unit_price)); ?></span>
									<span class="flash-sale"><?php echo e(number_format($sanpham->promotion_price)); ?></span>
									<?php endif; ?>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p><?php echo e($sanpham->description); ?></p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">
								<!--
								<select class="wc-select" name="size">
									<option>Size</option>
									<option value="XS">XS</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
								<select class="wc-select" name="color">
									<option>Color</option>
									<option value="Red">Red</option>
									<option value="Green">Green</option>
									<option value="Yellow">Yellow</option>
									<option value="Black">Black</option>
									<option value="White">White</option>
								</select>
								-->
								<select class="wc-select" name="color">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
							<!--<li><a href="#tab-reviews">Reviews (0)</a></li>-->
						</ul>

						<div class="panel" id="tab-description">
							<p><?php echo e($sanpham->description); ?></p>
						</div>
						<!--<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>-->
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Similar product</h4>

						<div class="row">
							<?php $__currentLoopData = $sp_tuongtu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sptt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<div class="col-sm-4">
								<div class="single-item">
									<?php if($sptt->promotion_price > 0): ?>
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									<?php endif; ?>
									<div class="single-item-header">
										<a href="<?php echo e(route('chitietsanpham',$sptt->id)); ?>"><img src="source/image/product/<?php echo e($sptt->image); ?>" alt="" height="200px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"><?php echo e($sptt->name); ?></p>
										<p class="single-item-price" style="font-size: 15px">
											<?php if($sptt->promotion_price == 0): ?>
											<span><?php echo e(number_format($sptt->unit_price)); ?></span>
											<?php else: ?>
											<span class="flash-del" ><?php echo e(number_format($sptt->unit_price)); ?></span>
											<span class="flash-sale"><?php echo e(number_format($sptt->promotion_price)); ?></span>
											<?php endif; ?>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">Buy <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
										<div class="space50">&nbsp;</div>
									</div>
								</div>
							</div>	

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<div class="row"><?php echo e($sp_tuongtu->links()); ?></div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Best Sellers</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">New Products</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/2.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/3.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>