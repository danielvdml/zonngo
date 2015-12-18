<!DOCTYPE HTML>
<html>

<head>
    <title>Zonngo</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta charset="UTF-8">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="TheBox - premium e-commerce template">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    {!!HTML::style("css/bootstrap.css")!!}
    {!!HTML::style("css/font-awesome.css")!!}
    {!!HTML::style("css/styles.css")!!}
    {!!HTML::style("css/mystyles.css")!!}
</head>

<body>
    <input type="hidden"  id="urlIndex" class="form-control" value={{route("index")}} >
    <div class="global-wrapper clearfix" id="global-wrapper">
        <div class="navbar-before mobile-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="navbar-before-sign">Todo lo que necesitas es Zonngo</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav navbar-nav navbar-right navbar-right-no-mar">
                            <li><a href="{{route('nosotros.index')}}">Nosotros</a>
                            </li>
                            <li><a href="{{route('contacto.index')}}">Contáctanos</a>
                            </li>
                            <li><a href="#">Consultas</a>
                            </li>
                            <li><a href="#">Categorías</a>
                            </li>
                            <li><a href="#">Ayuda</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
     
        <nav class="navbar navbar-inverse navbar-main yamm">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Menu Principal</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href={{route("index")}}>
                        {!!HTML::image("img/logo12.png","Image Alternative text",["title"=>"Image title"])!!}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="main-nav-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Ver Categorías<i class="drop-caret" data-toggle="dropdown"></i></a>
                            <ul class="dropdown-menu dropdown-menu-category">

                                <li><a href="#"><i class="fa fa-plug dropdown-menu-category-icon"></i>Electrónica de Consumo</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Celulares</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">iPhone</a>
                                                                <p>Nuevos y usados</p>
                                                            </li>
                                                            <li><a href="#">Samsung</a>
                                                                <p>Nuevos y usados</p>
                                                            </li>
                                                            <li><a href="#">Huawei</a>
                                                                <p>Nuevos y usados</p>
                                                            </li>
                                                            <li><a href="#">LG</a>
                                                                <p>Nuevos y usados</p>
                                                            </li>
                                                            <li><a href="#">Motorola</a>
                                                                <p>Nuevos y usados</p>
                                                            </li>
                                                            <li><a href="#">Sony Xperia</a>
                                                                <p>Nuevos y usados</p>
                                                            </li>
                                                            <li><a href="#">Lenovo</a>
                                                                <p>Nuevos y usados</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Computadoras</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Laptops & Tablets</a>
                                                                <p>Muy pronto</p>
                                                            </li>
                                                            <li><a href="#">Computadoras de mesa</a>
                                                                <p>Muy pronto</p>
                                                            </li>
                                                            <li><a href="#">Accesorios de computadora</a>
                                                                <p>Muy pronto</p>
                                                            </li>
                                                            <li><a href="#">Software</a>
                                                                <p>Muy pronto</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-home dropdown-menu-category-icon"></i>Inmuebles</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Inmuebles</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">En proceso</a>
                                                                <p>Regresa pronto</p>
                                                            </li>
                                                            <li><a href="#">En proceso</a>
                                                                <p>Regresa pronto</p>
                                                            </li>
                                                            <li><a href="#">En proceso</a>
                                                                <p>Regresa pronto</p>
                                                            </li>
                                                            <li><a href="#">En proceso</a>
                                                                <p>Regresa pronto</p>
                                                            </li>
                                                            <li><a href="#">En proceso</a>
                                                                <p>Regresa pronto</p>
                                                            </li>
                                                            <li><a href="#">En proceso</a>
                                                                <p>Regresa pronto</p>
                                                            </li>
                                                            <li><a href="#">En proceso</a>
                                                                <p>Regresa pronto</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Inmuebles en estreno</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">En proceso</a>
                                                                <p>Regresa pronto</p>
                                                            </li>
                                                            <li><a href="#">En proceso</a>
                                                                <p>Regresa pronto</p>
                                                            </li>
                                                            <li><a href="#">En proceso</a>
                                                                <p>Regresa pronto</p>
                                                            </li>
                                                            <li><a href="#">En proceso</a>
                                                                <p>Regresa pronto</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-tags dropdown-menu-category-icon"></i>Fármacos</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Medicamentos</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">De marca</a>
                                                                <p>Muy pronto</p>
                                                            </li>
                                                            <li><a href="#">Genérico</a>
                                                                <p>Muy pronto</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-futbol-o dropdown-menu-category-icon"></i>Vehículos</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Modelos</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">2015</a>
                                                                <p>Muy pronto</p>
                                                            </li>
                                                            <li><a href="#">2014</a>
                                                                <p>Muy pronto</p>
                                                            </li>
                                                            <li><a href="#">2013</a>
                                                                <p>Muy pronto</p>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa fa-music dropdown-menu-category-icon"></i>Gasolina & Diesel</a>
                                    <div class="dropdown-menu-category-section">
                                        <div class="dropdown-menu-category-section-inner">
                                            <div class="dropdown-menu-category-section-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="dropdown-menu-category-title">Establecimientos</h5>
                                                        <ul class="dropdown-menu-category-list">
                                                            <li><a href="#">Gasolina</a>
                                                                <p>Muy pronto</p>
                                                            </li>
                                                            <li><a href="#">Diesel</a>
                                                                <p>Muy pronto</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                               
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </li>
                        
                    </ul>
                    <div class="navbar-form navbar-left navbar-main-search" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" id="tags"  placeholder="Fármaco" />
                        </div>
                        <button class="fa fa-search navbar-main-search-submit" id="search"></button>
                        <input type="hidden"  id="urlMed" class="form-control" value={{route("Medicamento.index")}}>
                    </div>

                </div>
            </div>
        </nav>
         
         <style>
            table {
                width: 100%;
                display:block;
            }
            thead {
                display: inline-block;
                width: 100%;
                height: 40px;
            }
            tbody {
                height: 200px;
                display: inline-block;
                width: 100%;
                overflow: auto;
            }
         </style>
		<div class="row">
			<!-- <div class="col-xs-12 col-md-4">
				<select  id="SelectUbicacion" class="form-control" required="required">
					
				</select>
			</div> -->
			<div class="col-xs-12 col-md-offset-4 col-md-6">
				<div class="table-responsive">
					<table class="col-xs-12 table table-striped table-hover" >
						<thead>
							<tr>
								<th class='col-xs-3'>Medicamento</th>
								<th class='col-xs-3'>Marca</th>
								<th class='col-xs-3'>Establecimiento</th>
								<th class='col-xs-3'>Precio</th>
							</tr>
						</thead>
						<tbody id="body-Medicamentos">
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- Carouserl -->
        <div class="owl-carousel owl-loaded owl-nav-dots-inner" data-options='{"items":1,"loop":true}'>
            <div class="owl-item">
                <div class="slider-item" style="background-color:#3D3D3D;">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-left slider-item-caption-white">
                                <h4 class="slider-item-caption-title">La forma más fácil de poner precios</h4>
                                <p class="slider-item-caption-desc">Usa nuestras referencias para poner los precios justos a tus productos.</p><a class="btn btn-lg btn-ghost btn-white" href="#">Calcular precio</a>
                            </div>
                            {!!HTML::image("img/test_slider/14.png","Image Alternative text",["title"=>"Image Title","class"=>"slider-item-img-right","style"=>"top: 60%; width: 56%;"])!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="slider-item" style="background-image:url(img/1200xx500.jpg);">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-right slider-item-caption-white">
                                <h4 class="slider-item-caption-title">Encuentro los precios más cómodos del mercado</h4>
                                <p class="slider-item-caption-desc">Productos nuevos y usados para tu alcance.</p><a class="btn btn-lg btn-ghost btn-white" href="#">Buscar productos</a>
                            </div>
                            {!!HTML::image("img/test_slider/1.png","Image Alternative text",["class"=>"slider-item-img-left","title"=>"Image Title","style"=>"transform:translateY(-50%) rotate(14deg); width: 55%;"])!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-item">
                <div class="slider-item" style="background-color:#93282B;">
                    <div class="container">
                        <div class="slider-item-inner">
                            <div class="slider-item-caption-left slider-item-caption-white">
                                <h4 class="slider-item-caption-title">Compra! Compra! Compra!</h4>
                                <p class="slider-item-caption-desc">Las personas buscan los precios más accesibles y estos se agotan.</p><a class="btn btn-lg btn-ghost btn-white" href="#">Buscar productos</a>
                            </div>
                            {!!HTML::image("img/test_slider/6.png","Image Alternative text",["class"=>"slider-item-img-right","title"=>"Image Title"])!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap"></div>
         <div class="container">            
	        <div class="row" data-gutter="15">
	            <div class="col-md-4">
	                <div class="banner" style="background-color:#72121C;">
	                    <a class="banner-link" href="#"></a>
	                    <div class="banner-caption-left">
	                        <h5 class="banner-title"> Moda </h5>
	                        <p class="banner-desc">Las últimas tendencias del mercado.</p>
	                        <p class="banner-shop-now">Buscar ahora<i class="fa fa-caret-right"></i>
	                        </p>
	                    </div>
	                    {!!HTML::image("img/test_slider/3.png","Image Alternative text",["class"=>"banner-img","title"=>"Image Title","style"=>"bottom: 5px; right: -20px;"])!!}
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="banner" style="background-color:#4172FF;">
	                    <a class="banner-link" href="#"></a>
	                    <div class="banner-caption-left">
	                        <h5 class="banner-title">Celulares</h5>
	                        <p class="banner-desc">Apasionados a los Smarthphones.</p>
	                        <p class="banner-shop-now">Buscar ahora <i class="fa fa-caret-right"></i>
	                        </p>
	                    </div>
	                    <div class="img-responsive">
	                    {!!HTML::image("img/test_slider/17.png","Image Alternative text",["class"=>"banner-img","title"=>"Image Title","style"=>"bottom: 0px;  right: 1px;"])!!}
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="banner" style="background-color:#444C50;">
	                    <a class="banner-link" href="#"></a>
	                    <div class="banner-caption-left">
	                        <h5 class="banner-title">Consolas</h5>
	                        <p class="banner-desc">Revive momentos especiales.</p>
	                        <p class="banner-shop-now">Buscar ahora <i class="fa fa-caret-right"></i>
	                        </p>
	                    </div>
	                    {!!HTML::image("img/test_slider/13.png","Image Alternative text",["class"=>"banner-img","title"=>"Image Title","style"=>"bottom: 0px; right: -10px; width: 250px;"])!!}
	                </div>
	            </div>
	        </div>

        <div class="gap"></div>
        

            

        <div class="gap"></div>
        <div class="slider-item-sm" style="background-color:#E66514;">
            <div class="container">
                <div class="slider-item-inner">
                    <div class="slider-item-caption-left slider-item-caption-white">
                        <h4 class="slider-item-caption-title">Es el momento de cambiar de Smartphone</h4>
                        <p class="slider-item-caption-desc">Miles de opciones a tu medida</p><a class="btn btn-lg btn-ghost btn-white" href="#">Comprar ahora</a>
                    </div>
                    {!!HTML::image("img/test_slider/7.png","Image Alternative text",["class"=>"slider-item-img","title"=>"Image Title","style"=>"right: 0; bottom: 0; width: 22%;"])!!}
                </div>
            </div>
        </div>

        <div class="gap"></div>

        <!-- Catálogo de Producto -->
        <div class="container">
            <h3 class="widget-title-lg">Catálogo de productos</h3>
            <div class="row row-sm-gap" data-gutter="15">
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        {!!HTML::image("img/smartphone.png","Image Alternative text",["class"=>"banner-category-img","title"=>"Image Title"])!!}
                        <h5 class="banner-category-title">Celulares y Smarthphone</h5>
                        <p class="banner-category-desc">40 000 productos</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        {!!HTML::image("img/farmaco.png","Image Alternative text",["class"=>"banner-category-img","title"=>"Image Title"])!!}
                        <h5 class="banner-category-title">Fármacos</h5>
                        <p class="banner-category-desc">15 000 productos</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        {!!HTML::image("img/auto.png","Image Alternative text",["class"=>"banner-category-img","title"=>"Image Title"])!!}
                        <h5 class="banner-category-title">Vehículos</h5>
                        <p class="banner-category-desc">500 productos</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        {!!HTML::image("img/diesel.png","Image Alternative text",["class"=>"banner-category-img","title"=>"Image Title"])!!}
                        <h5 class="banner-category-title">Gasolina y Diesel</h5>
                        <p class="banner-category-desc">250 ubicaciones</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        {!!HTML::image("img/inmueble.png","Image Alternative text",["class"=>"banner-category-img","title"=>"Image Title"])!!}
                        <h5 class="banner-category-title">Inmuebles</h5>
                        <p class="banner-category-desc">1 500 inmuebles</p>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="banner-category" href="#">
                        {!!HTML::image("img/alimentos.png","Image Alternative text",["class"=>"banner-category-img","title"=>"Image Title"])!!}
                        <h5 class="banner-category-title">Alimentos</h5>
                        <p class="banner-category-desc">300 productos</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="gap"></div>

		<!-- footer -->
        <footer class="main-footer">
            <div class="container">
                <div class="row row-col-gap" data-gutter="60">
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">Zonngo Compras</h4>
                        <p>Te direccionamos a Zonngo para que ahorres horas de busqueda del mejor precio del mercado</p>
                        <ul class="main-footer-social-list">
                            <li>
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">Categorías populares</h4>
                        <ul class="main-footer-tag-list">
                            <li><a href="#">Celulares</a>
                            </li>
                            <li><a href="#">iPhone 6</a>
                            </li>
                            <li><a href="#">Samsung Galaxy S5</a>
                            </li>
                            <li><a href="#">Fármacos</a>
                            </li>
                            <li><a href="#">Motorola Moto X</a>
                            </li>
                            <li><a href="#">iPhone 5s</a>
                            </li>
                            <li><a href="#">Samsung Galaxy S6 Edge</a>
                            </li>
                            <li><a href="#">iPhone 6S</a>
                            </li>
                            <li><a href="#">Huawei P8</a>
                            </li>
                            <li><a href="#">Nokia Lumia 520</a>
                            </li>
                            <li><a href="#">Gasolina & Diesel</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="widget-title-sm">Novedades</h4>
                        <form>
                            <div class="form-group">
                                <label>Déjanos tu correo para mandarte promociones </label>
                                <input class="newsletter-input form-control" placeholder="Ingresa tu correo" type="text" />
                            </div>
                            <input class="btn btn-primary" type="submit" value="Enviar" />
                        </form>
                    </div>
                </div>
                <ul class="main-footer-links-list">
                    <li><a href="#">Nosotros</a>
                    </li>
                    <li><a href="#">Trabaja con nosotros</a>
                    </li>
                    <li><a href="#">Políticas</a>
                    </li>
                    <li><a href="#">Soporte & Servicio al cliente</a>
                    </li>
                    <li><a href="#">Privacidad</a>
                    </li>
                    <li><a href="#">Términos</a>
                    </li>

                </ul>
                {!!HTML::image("img/test_slider/12.png","Image Alternative text",["class"=>"main-footer-img","title"=>"Image Title","style"=>"right: 0; bottom: 0; width: 22%;"])!!}
            </div>
        </footer>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright &copy; <a href="#">Zonngo</a> 2015. Diseñado por el Equipo Tech Zonngo. Derechos reservados</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

        <style type="text/css">
                tr {
                    width: 100%;
                    -moz-width: 100%;
                    -webkit-display: inline-table;
                    display: inline-table;
                    -moz-display: inline-table;
                    -webkit-display: inline-table;
                }
                
                #body-usado,#body-nuevo{
                    -webkit-overflow-y: scroll;
                    overflow-y: scroll;
                    -moz-overflow-y: scroll;
                    -webkit-width: 100%;
                    width: 100%;
                    -moz-width: 100%;
                    -webkit-position: absolute;
                    position: absolute;
                    -moz-position: absolute;
                }
        </style>
        
    {!!HTML::Script("js/jquery.js")!!}
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
        <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-69401607-1', 'auto');
    ga('send', 'pageview');
    </script>
    {!!HTML::Script("js/bootstrap.js")!!}
    {!!HTML::Script("js/Medicamento.js")!!}
    {!!HTML::Script("js/icheck.js")!!}
    {!!HTML::Script("js/ionrangeslider.js")!!}
    {!!HTML::Script("js/jqzoom.js")!!}
    {!!HTML::Script("js/card-payment.js")!!}
    {!!HTML::Script("js/owl-carousel.js")!!}
    {!!HTML::Script("js/magnific.js")!!}
    {!!HTML::Script("js/custom.js")!!}
    {!!HTML::script("js/highcharts/highcharts.js")!!}
    {!!HTML::script("js/highcharts/highcharts-more.js")!!}


    

</body>

</html>
