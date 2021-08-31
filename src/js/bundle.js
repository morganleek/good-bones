import $ from 'jquery';

$(function() {
	// // Favicons
	// const favicons = '<link rel="apple-touch-icon" sizes="180x180" href="%path%/apple-touch-icon.png">' +
	// '<link rel="icon" type="image/png" sizes="192x192"  href="%path%/android-chrome-192x192.png">' +
	// '<link rel="icon" type="image/png" sizes="512x512"  href="%path%/android-chrome-512x512.png">' +
	// '<link rel="icon" type="image/png" sizes="32x32" href="%path%/favicon-32x32.png">' +
	// '<link rel="icon" type="image/png" sizes="16x16" href="%path%/favicon-16x16.png">';

	// if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
	// 	// Dark Mode
	// 	document.head.insertAdjacentHTML(
	// 		'beforeend',
	// 		favicons.replace(/%path%/g, site.template_directory + '/dist/images/favicon/favicon-dark')
	// 	);
	// }
	// else {
	// 	// Light Mode
	// 	document.head.insertAdjacentHTML(
	// 		'beforeend',
	// 		favicons.replace(/%path%/g, site.template_directory + '/dist/images/favicon/favicon-light')
	// 	);
	// }

	// Hamburger
	let hamburgerState = false;
	$( '.hamburger' ).on( 'click', function() { 
		$( this ).toggleClass( 'is-active', hamburgerState );
		$( 'body' ).toggleClass( 'nav-is-active', hamburgerState );
		hamburgerState = !hamburgerState;
	} );

	// Lazyloading finished
	// const img = document.querySelector( 'img' );
	// img.addEventListener( 'EverythingImage::ImageLoaded', function( e ) { 
	// 	console.log( e );
	// } );
});