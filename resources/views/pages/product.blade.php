<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product_Detail</title>
    <!-- Sử dụng thư viện Bootrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Sử dụng thư viện Bootrap 4 -->

    <!-- Sử dụng file CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <!-- Sử dụng file CSS -->

</head>
<body>
    <section >
		<div class="container">
			<div class="row">
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
                               <a href="">
                                <img src="images/products/1.jpg'" alt=""/>
                               </a>
                                
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="images/products/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/products/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/products/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/products/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/products/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/products/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/products/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/products/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/products/similar3.jpg" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/products/new.jpg" class="newarrival" alt="" />
								<h2>Anne Klein Sleeveless Colorblock Scuba</h2>
								<p>Web ID: 1089772</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>US $59</span>
									<label>Quantity:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> SHOPEE</p>
								<a href=""><img src="./images/products/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
				</div>
			</div>
		</div>
	</section>

</body>
</html>