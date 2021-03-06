<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Webank</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<meta charset="utf-8">
	<meta name="description" content=""/>
	<meta http-equiv="x-ua-compatible" content="IE=edge" >

	<!-- MOBILE -->
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<!-- Allows fullscreen mode from the Homescreen -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<!-- Sets the color of the text/battery, wireless icons etc -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="HandheldFriendly" content="true"/>
	<meta name="MobileOptimized" content="320"/>
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- / MOBILE -->

	<!-- FAVICON -->
	<link rel="icon" href="/WB/fe/img/favicon.ico">
	<link rel="manifest" href="/manifest.json">
	<meta name="apple-mobile-web-app-title" content="Webank Resp">
	<meta name="application-name" content="Webank Resp">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- / FAVICON -->

	<!-- CSS -->
	<link rel="stylesheet" media="all" href="/common/fe/assets/bootstrap/bootstrap.css">
	<link rel="stylesheet" media="all" href="/common/fe/assets/jquery/jquery-ui_ng.min.css">
	<link rel="stylesheet" media="all" href="/common/fe/css/main.css?v=161220">

	<!-- Css strutturale -->
	<link href="/WB/fe/css/webank_struttura.css?v=161220" rel="stylesheet" type="text/css" media="all">
	<link href="/WB/fe/css/webank_base.css?v=161220" rel="stylesheet" type="text/css" media="all">
	<link href="/WB/fe/css/webank_generic.css?v=161220" rel="stylesheet" type="text/css" media="all">

	<link href="/WB/fe/css/webank_skin.css?v=161220" rel="stylesheet" type="text/css" media="screen" />
	<link href="/common/fe/css/print.css?v=161220" rel="stylesheet" type="text/css" media="print" />
	<!-- / CSS -->

	<script type="text/javascript">
	// Variabili per ambiente, riporta le chiavi del navigatore selezionate
	var navIndex = ['0'];

	var sectionTitle = "Webank";

	// Variabili per emulazione
	var cgi_script = "/webankpri";
	var imgPath = '/img/ret/';
	var pDis = true;
	var pCP = false;
	var abilOroCap = true;
	var isWebank = true;
	var hasCarte = false;
	var isComunita200Mov = true;
	var rbfLinkObj = {
		'bonifico': 'BON',
		'giroconto': 'GIR',
		'carta': 'PRJ'
	};
	</script>

	<!-- JS -->
	<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.dateIT.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.altImg.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.formattedNum.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.form.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.blockUI.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery-ui.selectToUISlider.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/bootstrap/bootstrap-table.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/ie10-viewport.js"></script>
	<script type="text/javascript" language="javascript" src="/common/fe/assets/jsapi.js "></script>
	<script type="text/javascript" language="javascript" src="/common/fe/js/funzioni_convergenza.js?v=161220"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/script/funzioniYW.js?v=161220"></script>
	<script type="text/javascript" language="javascript" src="/WB/fe/js/general_utilities.js?v=161220"></script>

	<!-- JS LIBRERIE (non includere in sviluppo) -->
	<!-- <script type="text/javascript" src="/WB/fe/js/priv_librerie.js"></script>  -->
	<!-- FINE JS LIBRERIE -->

	<!-- <script type="text/javascript">
	if (navIndex.length>2)
	{ sectionTitle = menuData[navIndex[0]].voices[navIndex[1]].title;}
	else if (navIndex.length==1)
	{ sectionTitle = menuData[navIndex[0]].title;}
	</script> -->
	<!-- /JS -->

	<script type="text/javascript">
		function getPathImages() { return "/WB/IMAGES/";}
		function getPathImagesFe() { return "/WB/fe/img/";}
		function getPathContext() {	return "/WEBWB";}
		function getKBanca() {	return "1";}
		function getLineaTol() {	return "";}
	</script>

	<title>headerF24</title>

	<script type="text/javascript">

		document.addEventListener("DOMContentLoaded", function() {
			var menu = document.getElementById('menuToggled');
			var btn = document.getElementById('menuToggler');
			btn.addEventListener('click', function () {
			  if (this.classList.contains('opened')) {
					btn.classList.remove('opened');
					menu.classList.remove('opened');
			  } else {
					btn.classList.add('opened');
					menu.classList.add('opened');
			  }
			});
		});

	</script>

	<style>
		/* STRUTTURA */
		.headerFixed .wrapperDesk .headerDesktopX {
			display: table;
			width: 100%;
			font-size: 14px;
		}
		.headerFixed .wrapperDesk .headerDesktopX > * {
			display: table-cell;
			vertical-align: middle;
		}
		/* LOGO */
		.headerFixed .wrapperDesk .headerDesktopX .contLogoDesk {
			padding-left: 10px;
			width: 100%;
			text-align: center;
		}
		.headerFixed .wrapperDesk .headerDesktopX .contLogoDesk a {
			display: inline-block;
		}
		.headerFixed .wrapperDesk .headerDesktopX .contLogoDesk a img {
			margin: 0 !important;
			height: 32px;
			width: auto;
		}
		/* CLOSE */
		.headerFixed .wrapperDesk .headerDesktopX .contImpDxDesk.contImpDxDeskX,
		.headerFixed .wrapperDesk .headerDesktopX .contImpDxDesk.contImpDxDeskX a.iconExit {
			width: 60px;
			line-height: 60px;
		}
		.headerFixed .wrapperDesk .headerDesktopX .contImpDxDesk.contImpDxDeskX a.iconExit {
			display:block;
			text-align: center;
			text-decoration: none;
			background-color: #8ab10b;
			color: white;
			transition: background 0.3s;
			font-size: 36px;
		}
		.headerFixed .wrapperDesk .headerDesktopX .contImpDxDesk.contImpDxDeskX a.iconExit:hover {
			background-color: #8ab10b;
			cursor:pointer;
		}
		.headerFixed .wrapperDesk .headerDesktopX .contImpDxDesk.contImpDxDeskX a.iconExit:after {
			content: '\2715';
		}
		.headerFixed .wrapperDesk .headerDesktopX .contImpDxDesk.contImpDxDeskX a.iconExit img,
		.headerFixed .wrapperDesk .headerDesktopX .contImpDxDesk.contImpDxDeskX a.iconExit .containerIconHeadDX {
			display:none;
		}
		/* MOBILE ONLY */
		@media (max-width:767px) {
			/* TOGGLER MENU */
			.headerFixed .wrapperDesk .headerDesktopX #menuToggler {
				float: left;
				width: 60px;
				height: 60px;
				line-height: 60px;
				margin: 0;
				cursor: pointer;
				text-align: center;
				background-size: cover;
				transition: background 0.3s;
			}
			.headerFixed .wrapperDesk .headerDesktopX #menuToggler.opened {
				background: white;
			}
			.headerFixed .wrapperDesk .headerDesktopX #menuToggler i {
				font-size: 20px;
			}
			/* MENU */
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk {
				position: fixed;
				top: 60px;
				left: -100%;
				transition: left 0.3s;
				width: 100%;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk.opened {
				left:0;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul {
    		margin: 0 20px;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li {
				display:block;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li a {
				display:block;
				float: left;
				width: 100%;
				cursor: pointer;
				border-bottom: solid 1px #dedede;
				padding: 1em 0;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li a,
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li a span{
				font-size: 1.1em;
				text-decoration: none;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li a:hover {
				color: #333;
			}
		}
		/* DESKTOP AND TABLET */
		@media (min-width:768px) {
			/* TOGGLER MENU */
			.headerFixed .wrapperDesk .headerDesktopX #menuToggler {
				display: none;
			}
			/* LOGO */
			header #logoWrap,
			.headerFixed .wrapperDesk .headerDesktopX .contLogoDesk {
				width: auto;
				text-align: left;
			}
			/* MENU */
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk {
				display: table-cell;
				padding: 5px 15px;
				margin: 0;
				width: 100%;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul {
				text-align: center;
				display:block;
				padding: 0;
				margin: 0;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul + br {
				display:none
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li {
				list-style: none;
				padding: 0;
				margin: 0;
				display: inline-block;
				border-left: 1px solid #555;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li:first-child {
				border-left: none;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li a {
				text-align: center;
				display:block;
				padding: 3px 5px 3px 7px;
				color: white;
				text-decoration: none;
				line-height: 1.1em;
				transition: color 0.3s;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li a:hover,
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li a:active,
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li a.active {
				color: #8ab10b;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li a span {
			   font-size: 1.1em !important;
			}
		}
		/* MOBILE AND TABLET */
		@media (max-width:991px) {
			/* MENU */
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li a span {
				font-size: 0.9em !important;
			}
		}
		/* DESKTOP ONLY */
		@media (min-width:992px) {
			/*  CLOSE */
			.headerFixed .wrapperDesk .headerDesktopX .contImpDxDesk.contImpDxDeskX a.iconExit {
				font-size: 46px;
			}
			header #logoWrap a img,
			.headerFixed .wrapperDesk .headerDesktopX .contLogoDesk a img {
				height: 45px;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contLogoDesk {
				height: 84px;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contImpDxDesk.contImpDxDeskX,
			.headerFixed .wrapperDesk .headerDesktopX .contImpDxDesk.contImpDxDeskX a.iconExit {
				width: 84px;
				line-height: 84px;
			}
			.headerFixed .wrapperDesk .headerDesktopX .contMenuDesk ul li a {
				padding: 7px 12px 7px 15px;
			}
		}
	</style>

</head>
<body>

	<header class="headerFixed">
		<div class="wrapperDesk">
			<div id="headerDesktop" class="headerDesktopX">

				<a id="menuToggler" class="menuopen btn-icon">
					<i class="icon icon-menu"></i>
				</a>


				<div class="contLogoDesk">
					<a href="/WEBWB/homepage.do" title="Torna all'homepage"><img src="/WB/fe/img/logo_bank.png" /></a>
				</div>
				<div class="contMenuDesk" id="menuToggled">
					<ul id="firstMenu" class="firstMenuDesk">
						<li class=" ">
							<a href="/WEBWB/pagamenti/f24/introduzione.do" title="Introduzione" target="_parent">
								<span>Introduzione</span>
							</a>
						</li>
						<li class=" ">
							<a href="/WEBWB/pagamenti/f24/modulo.do" title="Modulo F24" target="_parent">
								<span>Modulo F24</span>
							</a>
						</li>
						<li class=" ">
							<a href="/WEBWB/pagamenti/f24/moduloSemplificato.do" title="Modulo F24 Semplificato" target="_parent">
								<span>Modulo F24 Semplificato</span>
							</a>
						</li>
						<li class="last ">
							<a href="/WEBWB/pagamenti/f24/moduloAuto.do" title="Modulo F24 elem. ident." target="_parent">
								<span>Modulo F24 elem. ident.</span>
							</a>
						</li>
					</ul>
					<br style="clear:both" />
					<ul id="firstMenu" class="firstMenuDesk">
						<li class=" ">
							<a href="/WEBWB/pagamenti/f24/moduloAccise.do" title="Modulo F24 accise" target="_parent">
								<span>Modulo F24 accise</span>
							</a>
						</li>
						<li class=" ">
							<a href="/WEBWB/pagamenti/f24/riepilogo.do" title="Riepilogo F24" target="_parent">
								<span>Riepilogo F24</span>
							</a>
						</li>
						<li class=" ">
							<a href="/WEBWB/pagamenti/f23/modulo.do" title="Modulo F23" target="_parent">
								<span>Modulo F23</span>
							</a>
						</li>
						<li class=" ">
							<a href="/WEBWB/pagamenti/f23/riepilogo.do" title="Riepilogo F23" target="_parent">
								<span>Riepilogo F23</span>
							</a>
						</li>
						<li class="last ">
							<a href="/WEBWB/pagamenti/f24/contribuenti.do" title="Lista contribuenti" target="_parent">
								<span>Lista contribuenti</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="contImpDxDesk contImpDxDeskX">
					<a href="#!" class="iconExit" title="Esci" onclick="javascript:top.window.close(); return false;">
						<div class="containerIconHeadDX">
							<span>
								<img src="/WB/fe/img/btn_x_uscita.png">
							</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</header>
</body>
</html>
