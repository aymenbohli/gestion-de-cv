<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cv | login</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   <!-- Bootstrap CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
        <!-- Animate CSS -->
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" media="screen" />
        <!-- Main CSS -->
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" media="screen" />
        <!-- Datepicker CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datepicker.css') }}" />
        <!-- Bar Indicator -->
        <link href="{{ asset('assets/css/barIndicator.css') }}" rel="stylesheet" />
        <!-- Main CSS -->
	<link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('assets/fonts/font-awesome.min.css') }}" rel="stylesheet" />
</head>
<!-- Container Fluid starts -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-push-4 col-md-4 col-sm-push-3 col-sm-6 col-sx-12">
					
					<!-- Header end -->
					<div class="login-container">
						<div class="login-wrapper animated flipInY">
							<div id="login" class="show">
								<div class="login-header">
									<h4>Connectez-vous à votre compte</h4>
								</div>
								 <form method="post" action="{{ url('/login') }}">
                                                                      {!! csrf_field() !!}
									<div class="form-group has-feedback">
										<label class="control-label" for="userName">E-Mail</label>
                                                                                <input type="text" class="form-control" id="userName" name="email" placeholder="User Name" autofocus>
										  @if ($errors->has('email'))
                                                                                    <span class="help-block">
                                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                                </span>
                                                                                @endif
                                                                                <i class="fa fa-user text-info form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="control-label" for="passWord">Mot de passe</label>
										<input type="password" class="form-control" id="passWord" name="password" placeholder="*********" >
										 @if ($errors->has('password'))
                                                                                        <span class="help-block">
                                                                                        <strong>{{ $errors->first('password') }}</strong>
                                                                                    </span>
                                                                                    @endif
                                                                                <i class="fa fa-key text-danger form-control-feedback"></i>
									</div>
									<input type="submit" value="Login" class="btn btn-danger btn-lg btn-block">
								</form>
								<a href="#register">Vous n'avez pas de compte? <span class="text-danger">S'inscrire</span></a>
							</div>

							<div id="register" class="form-action hide">
								<div class="login-header">
									<h4>Inscrivez-vous</h4>
								</div>
								 <form method="post" action="{{ url('/register') }}">

                                                                 {!! csrf_field() !!}
									<div class="form-group has-feedback">
										<label class="control-label" for="userName1">Nom</label>
                                                                                <input type="text" class="form-control" id="userName1" name="name">
										<i class="fa fa-user form-control-feedback"></i>
									  @if ($errors->has('name'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('name') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                        </div>
                                                                 <div class="form-group has-feedback">
										<label class="control-label" for="userName1">Email</label>
                                                                                <input type="text" class="form-control" id="userName1" name="email">
										<i class="fa fa-envelope form-control-feedback"></i>
								 @if ($errors->has('email'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif	
                                                                 </div>
									<div class="form-group has-feedback">
										<label class="control-label" for="password1">Mot de passe</label>
                                                                                <input type="text" class="form-control" name="password" id="password1">
										<i class="fa fa-key form-control-feedback"></i>
									 @if ($errors->has('password'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                        </div>
									<div class="form-group has-feedback">
										<label class="control-label" for="password2">Confirm Mot de passe</label>
                                                                                <input type="text" class="form-control" name="password_confirmation" id="password2">
										 @if ($errors->has('password_confirmation'))
                                                                                    <span class="help-block">
                                                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                                <i class="fa fa-key form-control-feedback"></i>
									</div>
                                                                 	<div class="form-group has-feedback">
                                                                                <select name="role" class="form-control" >
                                                                                    <option value="6">client</option>
                                                                                    <option value="8">company</option>
                                                                                </select>
                                                                                        
									</div>
									<input type="submit" value="Sign Up" class="btn btn-danger btn-lg btn-block">
								</form>
								<a href="#login">Vous avez déjà un compte?<span class="text-danger">Se connecter</span></a>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
<!--<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/home') }}"><b>InfyOm </b>Generator</a>
    </div>

     /.login-logo 
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="post" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
                 /.col 
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                 /.col 
            </div>
        </form>

        <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
        <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>

    </div>
     /.login-box-body 
</div>
 /.login-box -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <!-- jQuery UI JS -->
    <script src="{{ asset('assets/js/jquery-ui-v1.10.3.js') }}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Sparkline graphs -->
    <script src="{{ asset('assets/js/sparkline.js') }}"></script>

    <!-- jquery ScrollUp JS -->
    <script src="{{ asset('assets/js/scrollup/jquery.scrollUp.js') }}"></script>

    <!-- JVector Map -->
    <script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-usa.js') }}"></script>

    <!-- Bar Indicator -->
    <script src="{{ asset('assets/js/barIndicator/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/barIndicator/jquery-barIndicator.js') }}"></script>
    <script src="{{ asset('assets/js/barIndicator/custom-barIndicator.js') }}"></script>

    <!-- Custom Index -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom-index.js') }}"></script>
    <script type="text/javascript">
			(function($) {
				// constants
				var SHOW_CLASS = 'show',
					HIDE_CLASS = 'hide',
					ACTIVE_CLASS = 'active';
				
				$('a').on('click', function(e){
					e.preventDefault();
					var a = $(this),
					href = a.attr('href');
				
					$('.active').removeClass(ACTIVE_CLASS);
					a.addClass(ACTIVE_CLASS);

					$('.show')
					.removeClass(SHOW_CLASS)
					.addClass(HIDE_CLASS)
					.hide();
					
					$(href)
					.removeClass(HIDE_CLASS)
					.addClass(SHOW_CLASS)
					.hide()
					.fadeIn(550);
				});
			})(jQuery);
		</script>
</body>
</html>
