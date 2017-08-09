<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="no-cache">
	<title>@yield('title','MainTemplate')</title>

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="{{URL::asset('css/fontello/css/gap.css')}}">
	
	<!-- Grid -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<!-- Slider -->
	<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{URL::asset('js/libs/jquery-ui.css')}}">
	<script src="{{URL::asset('js/libs/jquery-ui.js')}}"></script>

	<!-- Styles -->
	<link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
	<!-- Dynamic Styles -->
	@section('style')
	@show
</head>
<body>
	<div class="header-top">
	<div class="container">
		<div class="row">
		<div class="col-md-3">
			<div class="wrap-img">
				<a href="index.php"><img src="{{ URL::asset('img/Logo.png')}}" alt="BlackLounge"></a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="menu">
				<ul>
					<li class="active"><a href="index.php">Купить</a></li>
					<li><a href="#"></a>Продать</li>
					<li><a href="#"></a>Как это работает?</li>
					<li><a href="#"></a>Поддержка</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3">
		@if(Auth::user())
			<div class="user-login">
				<p class="u-name"><span>{{ Auth::user()->username }}</span><br>
				<i class="demo-icon icon-money"></i> 500р.<br>
				<a href="" class="active"> Пополнить</a> <a href=""> Вывести</a> 
				</p>

				<img class="u-img" width="40px" height="40px" src="{{ Auth::user()->avatar }}" alt="">
				<a href="exit"> Выход</a>
			</div>
			@else
			<div class="enter">
			<a href="login"><div class="button-steam"></div></a>				
			</div>
			@endif
		</div>
		</div>
	</div>
</div>

@section('content')
@show
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<ul class="footer-menu">
					<li class="main-li">О нас</li>
					<li><a href="#">Контакты</a></li>
					<li><a href="agreements">Пользовательское соглашение</a></li>
					<li><a href="#">API для торговли</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul class="footer-menu">
					<li class="main-li">Помощь</li>
					<li><a href="#">Как купить</a></li>
					<li><a href="#">Как продать</a></li>
					<li><a href="#">Подключить моб. аунтификатор</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<ul class="footer-menu">
					<li class="main-li">Мы принимаем</li>
				</ul>
				<table>
					<tr>
						<td><a href="#"><img src="{{ URL::asset('img/paymentmetods.png')}}" alt=""></a></td>
						<td><a href="#"><img src="{{ URL::asset('img/paymentmetods.png')}}" alt=""></a></td><td><a href="#"><img src="{{ URL::asset('img/paymentmetods.png')}}" alt=""></a></td>
					</tr>
					<tr>
						<td><a href="#"><img src="{{ URL::asset('img/paymentmetods.png')}}" alt=""></a></td>
						<td><a href="#"><img src="{{ URL::asset('img/paymentmetods.png')}}" alt=""></a></td>
						<td><a href="#"><img src="{{ URL::asset('img/paymentmetods.png')}}" alt=""></a></td>
					</tr>
				</table>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-1">
				<div class="wrap-social-i">
					<div class="social-icon">
					<a href="#"><i class="demo-icon icon-vk"></i></a>
				</div>
				<div class="social-icon">
					<a href="#"><i class="demo-icon icon-facebook"></i></a>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>

<script src="{{ URL::asset('js/some.js')}}"></script>
</body>
</html>