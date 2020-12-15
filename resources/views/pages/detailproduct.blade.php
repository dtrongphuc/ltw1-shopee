<!DOCTYPE html>
<html lang="vn">
@extends('../layouts/master')

<body>
    <!-- <div class="page-product">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="product__img">
                        <img src="https://cf.shopee.vn/file/e963a4f6d9136744cf6a888b28c31706" alt="" class="login__body-img img-fluid" alt="Responsive image">
                        <div class="product__img-carousel"></div>
                        <div class="product__img-sharefavorite d-flex align-items-center">
                            <i class="far fa-heart"></i>
                            <div class="product__img-sharefavorite--content">
                                Đã thích (
                                <span class="product__img-sharefavorite--favoritednum" id="favoritednum"></span>
                                )
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="product__info">
                        <h4 class="product__info-name">Áo Hoodie Dài Tay Thời Trang Cho Nam</h4>
                    </div>
                    <div class="product__info-starreviewsold">
                        <div class="product__info-star">
                            <span class="product__info-star-content">5.0</span>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="product__info-review">
                            <span class="product__info-review--num">2</span>
                            <span class="product__info-review--content">Đánh giá</span>
                        </div>
                        <div class="product__info-sold">
                        <span class="product__info-review--num">10</span>
                            <span class="product__info-review--content">Đã bán</span>
                        </div>
                    </div>
                    <div class="product__info-price"></div>
                    <div class="product__info-size"></div>
                    <div class="product__info-productnumbers"></div>
                    <div class="product__info-buttoncartbuy"></div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="product-details"><!--product-details-->
	    <div class="col-sm-5">
	    	<div class="view-product">
	    		<img src="images/products/1.jpg" alt="" />
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
	    		<img src="images/product-details/new.jpg" class="newarrival" alt="" />
	    		<h2>Anne Klein Sleeveless Colorblock Scuba</h2>
	    		<p>Web ID: 1089772</p>
	    		<img src="images/product-details/rating.png" alt="" />
	    		<span>
	    			<span>1000000 vnd</span>
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
	    		<a href=""><img src="images/products/share.png" class="share img-responsive"  alt="" /></a>
	    	</div><!--/product-information-->
	    </div>
	</div><!--/product-details-->

</body>