@extends('layers.main_template')

@section('title', 'BL | Dota')

@section('style')
    <link rel="stylesheet" href="{{URL::asset('css/main-dota.css')}}">
@endsection

@section('content')
	<div class="wrap-dota-content">
	
	<div class="wrap-switch">
		<div class="switch csgo">
			<a href="#"><img class="dota-side" src="../img/dota-a.png" alt=""></a>
		</div>
		<div class="switch dota">
			<a href="/"><img class="csgo-side" src="../img/csgo.png" alt=""></a>
		</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="other-box left">
				<img src="../img/Roulette.png" alt="">
				<span>Рулетка</span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="other-box">
				<img class="money" src="../img/Money.png" alt="">
				<span>Ставки</span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="other-box right">
				<img class="gift" src="../img/Gift.png" alt="">
				<span>Фортуна</span>
			</div>
		</div>
	</div>
</div>
	<div class="wrap-slider">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <div class="slider-top">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <a href="" class="slider-img"><img src="../img/slide1.png" alt="..."></a>
              <div class="carousel-caption">
                <!-- Новость №1 -->
              </div>
            </div>
            <div class="item">
              <a href="" class="slider-img"><img src="../img/slide1.png" alt="..."></a>
              <div class="carousel-caption">
                <!-- Новость №2 -->
              </div>
            </div>
            <div class="item">
              <a href="" class="slider-img"><img src="../img/slide1.png" alt="..."></a>
              <div class="carousel-caption">
                <!-- Новость №3 -->
              </div>
            </div>
          </div>

          <!-- Controls -->
       <!--  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span> -->
        </a>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
	<div class="container">
		<div class="wrap-goods-content">
			<div class="row">
				<div class="col-md-4">
					<span class="left-column-goods-text">Стоимость</span>
				</div>
				<div class="col-md-4">
					<input type="text" class="search-item" placeholder="🔍 Найти игру...">
				</div>
				<div class="col-md-4">
					<div class="menu-sort">
						<ul>
							<span>Сортировать по:</span>
							<li class="active"><a href="#"></a>Цене</li>
							<li><a href="#"></a>Дате</li>
							<li><a href="#"></a>Количеству</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4">	
					<div class="wrap-slider-price">
						<input type="text" class="price price1">
						<input type="text" class="price price2">
						<div id="slider-range"></div>
					</div>
					<div class="wrap-sort-char">
						<span class="left-column-goods-text">
							Герой
						</span>
						<!-- <input type="text" class="char-block" placeholder="Все"> -->
						<select class="char-block">
							<option value="1">Все</option>
							<option value="2">Герой 1</option>
							<option value="3">Герой 2</option>
							<option value="4">Герой 3</option>
							<option value="5">Герой 4</option>
							<option value="6">Герой 5</option>
						</select>
					</div>
					<div class="wrap-sort-char">
						<span class="left-column-goods-text">
							Качество
						</span>
						<select class="char-block">
							<option value="1">Все</option>
							<option value="2">Качество 1</option>
							<option value="3">Качество 2</option>
							<option value="4">Качество 3</option>
							<option value="5">Качество 4</option>
							<option value="6">Качество 5</option>
						</select>
					</div>
					<div class="wrap-sort-char">
						<span class="left-column-goods-text">
							Редкость
						</span>
						<select class="char-block">
							<option value="1">Все</option>
							<option value="2">Редкость 1</option>
							<option value="3">Редкость 2</option>
							<option value="4">Редкость 3</option>
							<option value="5">Редкость 4</option>
							<option value="6">Редкость 5</option>
						</select>
					</div>
					<div class="wrap-sort-char">
						<span class="left-column-goods-text">
							Ячейка
						</span>
						<select class="char-block">
							<option value="1">Все</option>
							<option value="2">Ячейка 1</option>
							<option value="3">Ячейка 2</option>
							<option value="4">Ячейка 3</option>
							<option value="5">Ячейка 4</option>
							<option value="6">Ячейка 5</option>
						</select>
					</div>
					<div class="wrap-info">
						<div class="block-info">
							<div class="greenpoint"></div>
							<span class="online">Онлайн: <?php echo '234'; ?></span>
						</div>
						<div class="block-info">
							<img src="../img/howmuch-i.png" class="howmuch-i" alt="">
							<span class="howmuch">Продано: <?php echo '23234'; ?></span>
						</div>
						<div class="block-info lots-block">
							<img src="../img/lots-i.png" class="lots-i" alt="">
							<span class="lots">Лотов: <?php echo '32453'; ?></span>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
				</div>
				<div class="col-md-2">
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
				</div>
				<div class="col-md-2">
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
				</div>
				<div class="col-md-2">
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
					<div class="wrap-item">
						<div class="wrap-item-top">
							<img src="../img/item-good.png" alt="Предмет">
							<div class="price-bg">
								<span class="price">14.5 P</span>
								<span class="count">x15</span>	
							</div>
							<div class="wrap-name">
								<span><a href="#">Fortune tout's</a></span>
							</div>
						</div>	
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4"></div>
				<div class="col-md-8">
					<div class="wrap-pages">
						<ul>
							<li>
								<a href="#"><</a>
							</li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">5</a>
							</li>
							<li>
								<a href="#">6</a>
							</li>
							<li>
								<a href="#">></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>

	</div>
	<img src="../img/dota-left.png" alt="" class="sides-img left-img-csgo">
	<img src="../img/dota-right.png" alt="" class="sides-img right-img-csgo">
</div>
@endsection