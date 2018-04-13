;( function( $ ) {
	
	"use strict";
	var CHEF = window.CHEF || {};
	
	/* ---------- INIT MAIN NAVIG ---------- */
	CHEF.initMainMenu = function() {
		$( '#drop-down-left' ).dropdown_menu( {
			open_delay : 50,
			close_delay : 100
		} );
		// handle main menu items tagline
		if( $( '#drop-down-left' ).length ) {
			jQuery( '#drop-down-left > li > a' ).each( function() {
				var title_tag = jQuery( this ).attr( 'title' );
				if( title_tag != '' && title_tag != undefined ) {
					var label = jQuery( this ).text();
					var tag = '<span class="k-item-desc">' + title_tag + '</span>';
					jQuery( this ).html( label + tag );
				}
			} );
		}
	}
	/* ---------- end INIT MAIN NAVIG --------- */
	
	/* ---------- handle navigation for smaller devices */
	CHEF.mobileMenuClone = '';
	if( $( 'nav#k-menu' ).length ) CHEF.mobileMenuClone = $( 'nav#k-menu' ).clone().attr( 'id', 'navigation-mobile' );
	CHEF.mobileNav = function() {
		if( $( 'nav#k-menu' ).length ) CHEF.mobileMenuClone.insertAfter( 'nav#k-menu' );
		if( $( 'nav#navigation-mobile' ).length ) {
			$( 'nav#navigation-mobile' ).removeClass( 'k-main-navig' );
			$( 'nav#navigation-mobile div > ul' ).removeAttr( 'id' ).removeClass( 'k-dropdown-menu' ).addClass( 'list-unstyled' );
			// append functional menu to the end
			if( $( '#menu-functional' ).length ) {
				var functional_menu_items = $( '#menu-functional' ).children().clone().appendTo( 'nav#navigation-mobile div > ul' );
			}
		}
	}
	CHEF.listenerMenu = function() {
		$( '#mobile-nav-switch' ).on( 'click', function(e) {
			$( this ).toggleClass( 'open' );
			$( 'nav#navigation-mobile' ).stop().slideToggle( 'fast' );
			e.preventDefault();
		} );
	}
	/* ---------- end handle navigation for smaller devices */
	
	/* ---------- handle top-search toggle ---------- */
	CHEF.topSearchToggle = function() {
		$( '#bt-toggle-search' ).on( 'click', function(e) {
			$( this ).toggleClass( 'opened' );
			$( '#top-searchform' ).stop().slideToggle( 150, '', function() { $( '#site-search' ).focus(); } );
			e.preventDefault();
		} );
	}
	CHEF.chckNavigOpened = function() {
		var is_small_res = ( $( '.visible-xs' ).css( 'display' ) === 'block' ) ? true : false;
		var is_mobile_nav_visible = ( $( 'nav#navigation-mobile' ).css( 'display' ) === 'block' ) ? true : false;
		if( !is_small_res && is_mobile_nav_visible ) {
			$( 'nav#navigation-mobile' ).css( 'display', 'none' );
		}
	}
	/* ---------- end handle top-search toggle ---------- */
	
	/* ---------- Google Maps ---------- */
	CHEF.googleMaps = function(){
		if( $( '.map' ).length ) {
	
			$( '.map' ).each( function( i, e ) {
	
				var $gmap = $( e );
				var $gmap_title = $gmap.attr( 'data-gmaptitle' );
				var $gmap_id = $gmap.attr( 'id' );
				var $gmap_lat = $gmap.attr( 'data-gmaplat' );
				var $gmap_lng = $gmap.attr( 'data-gmaplon' );
				var $gmap_zoom = parseInt( $gmap.attr( 'data-gmapzoom' ) );
				var $gmap_icon = $gmap.attr( 'data-gmapmarker' );
				
				var $c_name = $gmap.attr( 'data-cname' );
				var $c_address = $gmap.attr( 'data-caddress' );
				var $c_city = $gmap.attr( 'data-ccity' );
				var $c_state = ( $gmap.attr( 'data-cstate' ) != '' ) ? ', ' + $gmap.attr( 'data-cstate' ) + ' ' : '';
				var $c_zip = $gmap.attr( 'data-czip' );
				var $c_country = $gmap.attr( 'data-ccountry' );
				
				var contentString;
				if( $c_name == '' && $c_address == '' && $c_city == '' && $c_state == '' && $c_zip == '' && $c_country == '' ) contentString = '';
				else contentString = '<div class="map-info-win"><strong>' + $c_name + '</strong><br />' + $c_address + '<br />' + $c_city + $c_state + $c_zip + '<br />' + $c_country + '</div>';
				
				var latlng = new google.maps.LatLng( $gmap_lat, $gmap_lng );			
				var options = { 
					scrollwheel: false,
					draggable: true, 
					zoomControl: true,
					disableDoubleClickZoom: true,
					disableDefaultUI: true,
					zoom: $gmap_zoom,
					center: latlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				
				var styles = [ 
							  {
								featureType: "all",
								stylers: [
								  { saturation: -80 }
								]
							  },{
								featureType: "road.arterial",
								elementType: "geometry",
								stylers: [
								  { hue: "#82a536" },
								  { saturation: 40 }
								]
							  },{
								featureType: "poi.business",
								elementType: "labels",
								stylers: [
								  { visibility: "off" }
								]
							  }
							];
				
				var styledMap = new google.maps.StyledMapType( styles,{ name: "BPS Theme Map" } );
				var map = new google.maps.Map( document.getElementById( $gmap_id ), options );
				var m_icon = ( $gmap_icon != '' ) ? $gmap_icon : '';
			
				var marker = new google.maps.Marker( {
					position: latlng,
					map: map,
					icon: m_icon,
					title: $gmap_title
				} );
				
				map.mapTypes.set( 'map_style', styledMap );
				map.setMapTypeId( 'map_style' );
				
				if( contentString != '' ) {
					var infowindow = new google.maps.InfoWindow( {
						content: contentString
					} );
					
					infowindow.open( map, marker ); // show info by default
					
					google.maps.event.addListener( marker, 'click', function() {
						infowindow.open( map, marker );
					} );
				}
	
			} );
		}	
	}
	/* ---------- end Google Maps ---------- */
	
	/* ---------- Swipebox ---------- */
	CHEF.imageSwipebox = function() {
		if( $( '.swipebox' ).length ) {
			$( '.swipebox' ).swipebox( {
				useSVG : false, 
				hideBarsDelay : 20000
			} );
			// close on background click
			$( document.body ).on( 'click touchend','#swipebox-slider .current img', function(e) { return false; } ).on( 'click touchend','#swipebox-slider .current', function(e) { $( '#swipebox-close' ).trigger( 'click' ); } );
		}
	}
	/* ---------- end Swipebox ---------- */
	
	/* ---------- responsive videos ---------- */
	CHEF.responsiveVideos = function() {
		if( $( '.video-container' ).length ) {
			$( '.video-container' ).fitVids( {
				customSelector: "iframe[src^='http://blip.tv'], iframe[src^='https://w.soundcloud.com']" 
			} );
			$( '.video-container' ).css( 'display', 'block' );
		}
	}
	/* ---------- end responsive videos ---------- */
	
	/* ---------- audio player ---------- */
	CHEF.responsiveAudios = function() {
		if( $( '.audio-container' ).length ) {
			$( 'audio' ).audioPlayer( {
				classPrefix: 'audioplayer',
				strPlay: 'Play',
				strPause: 'Pause',
				strVolume: 'Volume'
			} );
		}
	}
	/* ---------- end audio player ---------- */
	
	/* ---------- easy pie charts ---------- */
	CHEF.pieChartz = function() {
		if( $( '.chart' ).length ) {
			jQuery( '.chart' ).each( function() {
				var p_color = $( this ).data( 'color' );
				var p_width = $( this ).data( 'width' );
				var p_line  = $( this ).data( 'line' );
				$( this ).easyPieChart( {
					barColor: p_color,
					lineWidth: p_line,
					lineCap: "square",
					size: p_width,
					scaleColor: false,
					animate: 1000,
					onStep: function( value ) {
						this.$el.find( 'span' ).text( ~~value );
					}
				} );
			} );
		}
	}
	/* ---------- end easy pie charts ---------- */
	
	/* ---------- make tabs ---------- */
	CHEF.makeTabsSC = function() {
		if( $( 'div[id*=k-make-tabs-]' ).length ) {
			var tab_wrapper = $( 'div[id*=k-make-tabs-]' );
			tab_wrapper.each( function() {
				var me = $( this );
				var my_id = me.attr( 'id' );
				var arr_id_keys = my_id.split( '-' );
				var my_key = arr_id_keys[ arr_id_keys.length - 1 ];
				// grab data from tabs content wrapper
				var main_class   = me.data( 'ul-class' );
				var main_style   = me.data( 'ul-style' );
				var main_justify = ( me.data( 'ul-justify' ) == '0' ) ? 'k-naked-gun' : me.data( 'ul-justify' );
				// count & create tab controls
				var arr_tabz = new Array();
				me.children( 'div' ).each( function() { 
					var tab_label = $( this ).data( 'label' )
					arr_tabz.push( '<li><a data-toggle="tab" href="#' + $( this ).attr( 'id' ) + '">' + tab_label + '</a></li>' );
				} );
				// create controls
				me.before( '<ul id="k-tabs-navig-' + my_key + '" class="' + main_class + ' ' + main_style + ' ' + main_justify + '">' + arr_tabz.join( '' ) + '</ul>' );
				// init tabber
				$( '#k-tabs-navig-' + my_key + ' li' ).first().addClass( 'active' );
				$( 'div', me ).first().addClass( 'in active' );
			} );
		}
	}
	/* ---------- end make tabs ---------- */
	
	/* ---------- make accordions ---------- */
	CHEF.makeAccordionsSC = function() {
		if( $( 'div[id*=k-make-accordions-]' ).length ) {
			var accordion_wrapper = $( 'div[id*=k-make-accordions-]' );
			accordion_wrapper.each( function() {
				var me = $( this );
				var my_id = me.attr( 'id' );
				me.children( 'div.panel' ).each( function() { 
					$( this ).find( 'a.accordion-toggle' ).attr( 'data-parent', '#' + my_id );
				} );
			} );
		}
	}
	/* ---------- end make accordions ---------- */
	
	/* ---------- handle styling of a Submit button, WP comments ---------- */
	CHEF.restyleCommentsSubmit = function() {
		if( $( '#commentform' ).length ) {
			$( '#commentform p.form-submit' ).wrap( '<div class="row"></div>' ).wrap( '<div class="form-group clearfix col-lg-12 text-right remove-margin-bottom"></div>' );
			$( '#commentform input#submit' ).unwrap();
			$( '#commentform input#submit' ).addClass( 'btn btn-default' );
		}
	}
	
	/* ---------- handle styling of WP pagination ---------- */
	CHEF.restylePagination = function() {
		if( $( 'ul.page-numbers' ).length ) {
			$( 'ul.page-numbers' ).addClass( 'pagination pull-right' );
			// add class 'active' to the parent element
			var curr_element = $( 'ul.page-numbers' ).find( 'li span.current' );
			if( curr_element.length ) curr_element.parent().addClass( 'active' );
		}
	}
	
	/* ---------- GoogleCalendar popup ---------- */
	CHEF.openGoogleCalendar = function() {
		if( $( 'a.GCpopup' ).length ) {
			$( 'a.GCpopup' ).click(function() {
				var NWin = window.open( $( this ).prop( 'href' ), '', 'scrollbars=1,height=600,width=900' );
				if( window.focus ) NWin.focus();
				return false;
			} );
		}
	}
	/* ---------- end GoogleCalendar popup ---------- */
	
	/* ---------- IE patches ---------- */
	CHEF.IEpatches = function() {
		if( navigator.userAgent.match( /IEMobile\/10\.0/ ) ) {
			var msViewportStyle = document.createElement( 'style' );
			msViewportStyle.appendChild( document.createTextNode( '@-ms-viewport{ width: auto!important; }' ) );
			document.querySelector( 'head' ).appendChild( msViewportStyle );
		}
	}
	/* ---------- end IE patches ---------- */

	
	// events
	$( document ).ready( function() {
		CHEF.initMainMenu(); // init main menu
		CHEF.mobileNav(); // create mobile nav menu
		CHEF.listenerMenu(); // toggle mobile nav
		CHEF.IEpatches(); // set of patches relating to IE
		CHEF.topSearchToggle(); // toggle top-search
		CHEF.googleMaps(); // Google Maps
		CHEF.imageSwipebox(); // Image Lightbox
		CHEF.pieChartz(); // easy pie charts
		CHEF.restylePagination(); // add required class to WP pagination
		CHEF.restyleCommentsSubmit(); // add required class to the comment form button
		CHEF.makeTabsSC(); // tabber init
		CHEF.makeAccordionsSC(); // accordions init
		CHEF.openGoogleCalendar(); // google calendar popup
	} );
	
	$( window ).load( function() {
		CHEF.responsiveVideos(); // fitVids
		CHEF.responsiveAudios(); // audio player
	} );
	
	$( window ).resize( function() {
		CHEF.chckNavigOpened(); // check if mobile nav is opened while the screen res is sufficient
	} );
	
} )( jQuery );