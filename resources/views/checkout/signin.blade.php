@extends('layout.master')
    @section('title')

    @endsection

    @section('content')

    @endsection
        <header class="checkout-header">
            <div class="checkout-title">
                <h4>SECURED CHECKOUT</h4>
            </div>
        </header>
        <section classi="checkout-signin">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <div class="signin-form">
                        	<form action="" method="POST" role="form">
							    <div class="form-header">
                                    <h1>SIGN IN TO CHECKOUT</h1>
                                    <h3>You can sign in with Social Media:</h3>
                                    <div class="signin-box"></div>
                                    <h4>Or with your email if you’d prefer:</h4>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control usename" value="" placeholder="Enter Email Address" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control password" value="" placeholder="Enter Password" required="required">
                                </div>
                                <div class="row password-cache">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="checkbox">
                                        	<label>
                                        		<input type="checkbox" value="" required="required">
                                        		<span>Remember me</span>
                                        	</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                        <a href="#" class="forgot-password">Forgot Password?</a>
                                    </div>
                                </div>
                                <button class="btn btn-block btn-submit" type="submit">SIGN IN</button>
                                <div class="register-new">
                                    <h4>Don't have an account yet? <a href="#">Register</a></h4>
                                </div>

                        	</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>