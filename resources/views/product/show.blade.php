@extends('layout.master')	
	@section('title')
		Product Details
	@endsection

	@section('content')
		<section class="breadcrumb-section crumb-2">
		    <ul class="breadcrumb">
		        <li><a href="#">Home</a></li>
		        <li><a href="#">Vegetables</a></li>
		        <li>Onion</li>
		    </ul>
		</section>
		<section class="product-details">
		    <div class="row">
		        <div class="col-md-6">
		            <div class="product-img">
		                <img src="/assets/img/onions.png" alt="">
		            </div>
		        </div>
		        <div class="col-md-6">
		            <div class="product-description">
		                <h1>Onion</h1>
		                <div class="product-rating">
		                    <span class="glyphicon glyphicon-star active-rating"></span>
		                    <span class="glyphicon glyphicon-star active-rating"></span>
		                    <span class="glyphicon glyphicon-star active-rating"></span>
		                    <span class="glyphicon glyphicon-star active-rating"></span>
		                    <span class="glyphicon glyphicon-star"></span>
		                </div>
		                <div class="content">
		                    <p>A large seasonal veg box delivered to your door. Great for families and keen veg eaters: it’s full
		                        to the brim with 10 varieties of freshly picked organic veg. We’ll bring the essentials of potatoes,
		                        carrots and onions most weeks, as well as changing seasonal stars such as asparagus in spring,
		                        romanesco in autumn and winter squash.
		                    </p>
		                    <h1>£ <span id="amount">13.59</span>
		                        <input id="price" type="hidden" value="13.59">
		                    </h1>
		                </div>
		                <div class="row">
		                    <div class="col-md-4">
		                        <div class="product-quantity">
		                            <div class="quantity">
		                                <button class="quantity-btn">-</button>
		                                <input id="quantity" type="button" value="1">
		                                <button class="quantity-btn">+</button>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-md-8">
		                        <div class="addcartbutton">
		                            <button href="#">ADD TO BASKET</button>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>
		<section>
		    <div class="related-products">
		        <div class="container">
		            <div class="product-header">
		                <h1>Related Product</h1>
		            </div>
		        </div>
		    </div>
		    <div class="container">
		        <div class="row">
		            <div class="related-product-col">
		                  <div class="thumbnail">
		                   	<img src="/assets/img/garlic.png" alt="">
		                   	<div>
		                      <h3>Garlic</h3>
		                      <h3 class="margin-bottom">£ <span>13.59</span>
		                       </h3> 
		                   		<div class="related">
		                   			<button>ADD BASKET</button>
		                   		</div>
		                   	</div>
		                  </div>
		            </div>
		            <div class="related-product-col">
		                  <div class="thumbnail">
		                   	<img src="/assets/img/garlic.png" alt="">
		                   	<div>
		                      <h3>Garlic</h3>
		                      <h3 class="margin-bottom">£ <span>13.59</span>
		                       </h3> 
		                   		<div class="related">
		                   			<button>ADD BASKET</button>
		                   		</div>
		                   	</div>
		                  </div>
		            </div>
		            <div class="related-product-col">
		                  <div class="thumbnail">
		                   	<img src="/assets/img/garlic.png" alt="">
		                   	<div>
		                      <h3>Garlic</h3>
		                      <h3 class="margin-bottom">£ <span>13.59</span>
		                       </h3> 
		                   		<div class="related">
		                   			<button>ADD BASKET</button>
		                   		</div>
		                   	</div>
		                  </div>
		            </div>
		            <div class="related-product-col">
		                  <div class="thumbnail">
		                   	<img src="/assets/img/garlic.png" alt="">
		                   	<div>
		                      <h3>Garlic</h3>
		                      <h3 class="margin-bottom">£ <span>13.59</span>
		                       </h3> 
		                   		<div class="related">
		                   			<button>ADD BASKET</button>
		                   		</div>
		                   	</div>
		                  </div>
		            </div>
		            <div class="related-product-col">
		                  <div class="thumbnail">
		                   	<img src="/assets/img/garlic.png" alt="">
		                   	<div>
		                      <h3>Garlic</h3>
		                      <h3 class="margin-bottom">£ <span>13.59</span>
		                       </h3> 
		                   		<div class="related">
		                   			<button>ADD BASKET</button>
		                   		</div>
		                   	</div>
		                  </div>
		            </div>
		        </div>
		    </div>
		</section>
	@endsection

	@section('temporal_script')
		<script>
		    app.productQuantity();
		</script>
	@endsection