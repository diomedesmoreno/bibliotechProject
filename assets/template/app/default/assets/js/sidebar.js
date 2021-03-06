$(document).ready(function() {
	let menuType 	=  getMenuType();

	$("#pcoded").pcodedmenu({
		themelayout: 'vertical',
		verticalMenuplacement: 'left',
		verticalMenulayout: 'wide',
		MenuTrigger: (menuType == "expanded") ? "click" : "click",
		SubMenuTrigger: (menuType == "expanded") ? "click" : "click",
		activeMenuClass: 'active',
		ThemeBackgroundPattern: 'pattern2',
		HeaderBackground: 'theme4',
		LHeaderBackground: 'theme4',
		NavbarBackground: 'theme4',
		ActiveItemBackground: 'theme5',
		SubItemBackground: 'theme2',
		ActiveItemStyle: 'style0',
		ItemBorder: true,
		ItemBorderStyle: 'none',
		SubItemBorder: true,
		DropDownIconStyle: 'style3',
		FixedNavbarPosition: false,
		FixedHeaderPosition: false,
		collapseVerticalLeftHeader: true,
		VerticalSubMenuItemIconStyle: 'style6',
		VerticalNavigationView: 'view1',
		verticalMenueffect: {
			desktop: "shrink",
			tablet: "push",
			phone: "overlay",
		},
		defaultVerticalMenu: {
			desktop: menuType,
			tablet: menuType,
			phone: "offcanvas",
		},
		onToggleVerticalMenu: {
			desktop: (menuType == "expanded") ? "collapsed" : "expanded",
			tablet: (menuType == "expanded") ? "collapsed" : "expanded",
			phone: "expanded",
		},
	});

	function handleleftheadertheme() {
		$('.theme-color > a.leftheader-theme').on("click", function() {
			var lheadertheme = $(this).attr("lheader-theme");
			$('.pcoded-navigatio-lavel').attr("menu-title-theme", lheadertheme);
		});
	};

	handleleftheadertheme();

	function handleheadertheme() {
		$('.theme-color > a.header-theme').on("click", function() {
			var headertheme = $(this).attr("header-theme");
			$('.pcoded-header').attr("header-theme", headertheme);
		});
	};

	handleheadertheme();

	function handlenavbartheme() {
		$('.theme-color > a.navbar-theme').on("click", function() {
			var navbartheme = $(this).attr("navbar-theme");
			$('.pcoded-navbar').attr("navbar-theme", navbartheme);
		});
	};

	handlenavbartheme();

	function handleactiveitemtheme() {
		$('.theme-color > a.active-item-theme').on("click", function() {
			var activeitemtheme = $(this).attr("active-item-theme");
			$('.pcoded-navbar').attr("active-item-theme", activeitemtheme);
		});
	};

	handleactiveitemtheme();

	function handlesubitemtheme() {
		$('.theme-color > a.sub-item-theme').on("click", function() {
			var subitemtheme = $(this).attr("sub-item-theme");
			$('.pcoded-navbar').attr("sub-item-theme", subitemtheme);
		});
	};

	handlesubitemtheme();

	function handlethemebgpattern() {
		$('.theme-color > a.themebg-pattern').on("click", function() {
			var themebgpattern = $(this).attr("themebg-pattern");
			$('body').attr("themebg-pattern", themebgpattern);
		});
	};

	handlethemebgpattern();

	function handleVerticalNavigationViewChange() {
		$('#navigation-view').val('view1').on('change', function(get_value) {
			get_value = $(this).val();
			$('.pcoded').attr('vnavigation-view', get_value);
		});
	};

	handleVerticalNavigationViewChange();

	function handlethemeverticallayout() {
		$('#theme-layout').val('wide').on('change', function(get_value) {
			get_value = $(this).val();
			$('.pcoded').attr('vertical-layout', get_value);
		});
	};

	handlethemeverticallayout();

	function handleverticalMenueffect() {
		$('#vertical-menu-effect').val('shrink').on('change', function(get_value) {
			get_value = $(this).val();
			$('.pcoded').attr('vertical-effect', get_value);
		});
	};

	handleverticalMenueffect();

	function handleverticalMenuplacement() {
		$('#vertical-navbar-placement').val('left').on('change', function(get_value) {
			get_value = $(this).val();
			$('.pcoded').attr('vertical-placement', get_value);
			$('.pcoded-navbar').attr("pcoded-navbar-position", 'absolute');
			$('.pcoded-header .pcoded-left-header').attr("pcoded-lheader-position", 'relative');
		});
	};

	handleverticalMenuplacement();

	function handleverticalActiveItemStyle() {
		$('#vertical-activeitem-style').val('style1').on('change', function(get_value) {
			get_value = $(this).val();
			$('.pcoded-navbar').attr('active-item-style', get_value);
		});
	};
	handleverticalActiveItemStyle();

	function handleVerticalIItemBorder() {
		$('#vertical-item-border').change(function() {
			if ($(this).is(":checked")) {
				$('.pcoded-navbar .pcoded-item').attr('item-border', 'false');
			} else {
				$('.pcoded-navbar .pcoded-item').attr('item-border', 'true');
			}
		});
	};
	handleVerticalIItemBorder();

	function handleVerticalSubIItemBorder() {
		$('#vertical-subitem-border').change(function() {
			if ($(this).is(":checked")) {
				$('.pcoded-navbar .pcoded-item').attr('subitem-border', 'false');
			} else {
				$('.pcoded-navbar .pcoded-item').attr('subitem-border', 'true');
			}
		});
	};
	handleVerticalSubIItemBorder();

	function handleverticalboderstyle() {
		$('#vertical-border-style').val('solid').on('change', function(get_value) {
			get_value = $(this).val();
			$('.pcoded-navbar .pcoded-item').attr('item-border-style', get_value);
		});
	};
	handleverticalboderstyle();

	function handleVerticalDropDownIconStyle() {
		$('#vertical-dropdown-icon').val('style1').on('change', function(get_value) {
			get_value = $(this).val();
			$('.pcoded-navbar .pcoded-hasmenu').attr('dropdown-icon', get_value);
		});
	};
	handleVerticalDropDownIconStyle();

	function handleVerticalSubMenuItemIconStyle() {
		$('#vertical-subitem-icon').val('style5').on('change', function(get_value) {
			get_value = $(this).val();
			$('.pcoded-navbar .pcoded-hasmenu').attr('subitem-icon', get_value);
		});
	};
	handleVerticalSubMenuItemIconStyle();

	function handlesidebarposition() {
		$('#sidebar-position').change(function() {
			if ($(this).is(":checked")) {
				$('.pcoded-navbar').attr("pcoded-navbar-position", 'fixed');
				$('.pcoded-header .pcoded-left-header').attr("pcoded-lheader-position", 'fixed');
			} else {
				$('.pcoded-navbar').attr("pcoded-navbar-position", 'absolute');
				$('.pcoded-header .pcoded-left-header').attr("pcoded-lheader-position", 'relative');
			}
		});
	};

	handlesidebarposition();

	function handleheaderposition() {
		$('#header-position').change(function() {
			if ($(this).is(":checked")) {
				$('.pcoded-header').attr("pcoded-header-position", 'fixed');
				$('.pcoded-navbar').attr("pcoded-header-position", 'fixed');
				$('.pcoded-main-container').css('margin-top', $(".pcoded-header").outerHeight());
			} else {
				$('.pcoded-header').attr("pcoded-header-position", 'relative');
				$('.pcoded-navbar').attr("pcoded-header-position", 'relative');
				$('.pcoded-main-container').css('margin-top', '0px');
			}
		});
	};

	handleheaderposition();

	function handlecollapseLeftHeader() {
		$('#collapse-left-header').change(function() {
			if ($(this).is(":checked")) {
				$('.pcoded-header, .pcoded ').removeClass('iscollapsed');
				$('.pcoded-header, .pcoded').addClass('nocollapsed');
			} else {
				$('.pcoded-header, .pcoded').addClass('iscollapsed');
				$('.pcoded-header, .pcoded').removeClass('nocollapsed');
			}
		});
	};

	handlecollapseLeftHeader();

	function getMenuType() {
		let type = localStorage.getItem('menu-type');
		if(type == null || typeof type === 'undefined'){
			return localStorage.setItem('menu-type', "expanded");
		} else {
			return type;
		}
	}
});
