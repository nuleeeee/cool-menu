<!DOCTYPE html>
<html lang="en" class="js cssanimations"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mobile-Friendly Multi-Level Menu</title>
	<meta name="description" content="A basic template for a responsive multi-level sidebar menu">
	<meta name="keywords" content="template, html, css, menu, sidebar, responsive, mobile-friendly">
	<meta name="author" content="Nols">
	<link rel="shortcut icon" href="assets/favicon.ico">
	<!-- food icons -->
	<link rel="stylesheet" type="text/css" href="css/organicfoodicons.css">
	<!-- demo styles -->
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<link rel="stylesheet" type="text/css" href="css/demoad.css">
	<!-- menu styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css">
	<script src="js/modernizr-custom.js"></script>
    <script type="module" src="js/ionicons.esm.js"></script>
    <script nomodule src="js/ionicons.js"></script>
</head>

<body>
	<!-- Main container -->
	<div class="container">
		<header class="bp-header cf">
			<div class="dummy-logo">
				<div class="dummy-icon">
                    <img src="assets/image2.png" height="50" alt="">
                </div>
			</div>
			<div class="bp-header__main">
				<span class="bp-header__present">Blueprint</span>
				<h1 class="bp-header__title">Multi-Level Menu</h1>
				<nav class="bp-nav">
					<a class="bp-nav__item bp-icon bp-icon--prev" href="#" data-info="previous Blueprint">
						<span>Previous Blueprint</span>
					</a>
					<a class="bp-nav__item bp-icon bp-icon--drop" href="#" data-info="back to the Codrops article">
						<span>back to the Codrops article</span>
					</a>
					<a class="bp-nav__item bp-icon bp-icon--archive" href="#" data-info="Blueprints archive">
						<span>Go to the archive</span>
					</a>
				</nav>
			</div>
		</header>
		<button class="action action--open" aria-label="Open Menu"><ion-icon name="menu-outline"></ion-icon></button>
		<nav id="ml-menu" class="menu" style="background: #FFF;">
			<button class="action action--close" aria-label="Close Menu"><ion-icon name="contract-outline"></ion-icon></button>
			<div class="menu__wrap">
				<ul data-menu="main" class="menu__level menu__level--current">
					<li class="menu__item" style="animation-delay: 0ms;"><a class="menu__link" data-submenu="submenu-1" href="#">Create a request</a></li>
					<li class="menu__item" style="animation-delay: 60ms;"><a class="menu__link" data-submenu="submenu-2" href="#">For approval</a></li>
					<li class="menu__item" style="animation-delay: 120ms;"><a class="menu__link" data-submenu="submenu-3" href="#">Inventory</a></li>
					<li class="menu__item" style="animation-delay: 180ms;"><a class="menu__link" data-submenu="submenu-4" href="#">For use</a></li>
				</ul>
				<!-- Submenu 1 -->
				<ul data-menu="submenu-1" class="menu__level">
					<li class="menu__item" style="animation-delay: 0ms;"><a class="menu__link" href="#">Stalk Vegetables</a></li>
					<li class="menu__item" style="animation-delay: 60ms;"><a class="menu__link" href="#">Roots &amp; Seeds</a></li>
					<li class="menu__item" style="animation-delay: 120ms;"><a class="menu__link menu__link--current" href="#">Cabbages</a></li>
					<li class="menu__item" style="animation-delay: 180ms;"><a class="menu__link" href="#">Salad Greens</a></li>
					<li class="menu__item" style="animation-delay: 240ms;"><a class="menu__link" href="#">Mushrooms</a></li>
					<li class="menu__item" style="animation-delay: 300ms;"><a class="menu__link" data-submenu="submenu-1-1" href="#">Sale %</a></li>
				</ul>
				<!-- Submenu 1-1 -->
				<ul data-menu="submenu-1-1" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="#">Fair Trade Roots</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Dried Veggies</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Our Brand</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Homemade</a></li>
				</ul>
				<!-- Submenu 2 -->
				<ul data-menu="submenu-2" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="#">Citrus Fruits</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Berries</a></li>
					<li class="menu__item"><a class="menu__link" data-submenu="submenu-2-1" href="#">Special Selection</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Tropical Fruits</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Melons</a></li>
				</ul>
				<!-- Submenu 2-1 -->
				<ul data-menu="submenu-2-1" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="#">Exotic Mixes</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Wild Pick</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Vitamin Boosters</a></li>
				</ul>
				<!-- Submenu 3 -->
				<ul data-menu="submenu-3" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="#">Buckwheat</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Millet</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Quinoa</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Wild Rice</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Durum Wheat</a></li>
					<li class="menu__item"><a class="menu__link" data-submenu="submenu-3-1" href="#">Promo Packs</a></li>
				</ul>
				<!-- Submenu 3-1 -->
				<ul data-menu="submenu-3-1" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="#">Starter Kit</a></li>
					<li class="menu__item"><a class="menu__link" href="#">The Essential 8</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Bolivian Secrets</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Flour Packs</a></li>
				</ul>
				<!-- Submenu 4 -->
				<ul data-menu="submenu-4" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="#">Grain Mylks</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Seed Mylks</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Nut Mylks</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Nutri Drinks</a></li>
					<li class="menu__item"><a class="menu__link" data-submenu="submenu-4-1" href="#">Selection</a></li>
				</ul>
				<!-- Submenu 4-1 -->
				<ul data-menu="submenu-4-1" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="#">Nut Mylk Packs</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Amino Acid Heaven</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Allergy Free</a></li>
				</ul>
			</div>
		</nav>
		<div class="content">
			<ul class="products">
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<li class="product">
					<div class="foodicon foodicon--lettuce"></div>
				</li>
				<ul></ul>
			</ul>
		</div>
	</div>
	<!-- /view -->
	<script src="js/classie.js"></script>
	<script src="js/dummydata.js"></script>
	<script src="js/main.js"></script>
	<script>
	(function() {
		var menuEl = document.getElementById('ml-menu'),
			mlmenu = new MLMenu(menuEl, {
				// breadcrumbsCtrl : true, // show breadcrumbs
				// initialBreadcrumb : 'all', // initial breadcrumb text
				backCtrl : false, // show back button
				// itemsDelayInterval : 60, // delay between each menu item sliding animation
				onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
			});

		// mobile menu toggle
		var openMenuCtrl = document.querySelector('.action--open'),
			closeMenuCtrl = document.querySelector('.action--close');

		openMenuCtrl.addEventListener('click', openMenu);
		closeMenuCtrl.addEventListener('click', closeMenu);

		function openMenu() {
			classie.add(menuEl, 'menu--open');
		}

		function closeMenu() {
			classie.remove(menuEl, 'menu--open');
		}

		// simulate grid content loading
		var gridWrapper = document.querySelector('.content');

		function loadDummyData(ev, itemName) {
			ev.preventDefault();

			closeMenu();
			gridWrapper.innerHTML = '';
			classie.add(gridWrapper, 'content--loading');
			setTimeout(function() {
				classie.remove(gridWrapper, 'content--loading');
				gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
			}, 700);
		}
	})();
	</script>

<!-- For the demo ad only -->   
<script src="js/demoad.js"></script>

</body>
</html>