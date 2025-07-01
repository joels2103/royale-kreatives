$(document).ready(function () {

	$('#js-main-slider').pogoSlider({
		autoplay: true,
		autoplayTimeout: 5000,
		displayProgess: true,
		preserveTargetSize: true,
		targetWidth: 1000,
		targetHeight: 300,
		responsive: true
	}).data('plugin_pogoSlider');

	var transitionDemoOpts = {
		displayProgess: false,
		generateNav: false,
		generateButtons: false
	}

});

// $(document).ready(function () {

// 	// $('#js-main-slider1').pogoSlider({
// 	// 	autoplay: false,
// 	// 	// autoplayTimeout: 6000,
// 	// 	displayProgess: false,
// 	// 	preserveTargetSize: true,
// 	// 	targetWidth: 1000,
// 	// 	targetHeight: 900,
// 	// 	responsive: true
// 	// }).data('plugin_pogoSlider1');


// 	var transitionDemoOpts = {
// 		displayProgess: false,
// 		generateNav: false,
// 		generateButtons: false
// 	}

// });


// $(document).ready(function () {
//   $('#js-main-slider1').pogoSlider({
//     autoplay: false,
//     displayProgess: false,
//     preserveTargetSize: true,
//     targetWidth: 1000,
//     targetHeight: 900,
//     responsive: true,
//     generateNav: false,
//     generateButtons: true,
//     // This callback runs after each slide transition
//     afterTransition: function () {
//       $('.popup-gallery').magnificPopup({
//         delegate: 'a',
//         type: 'image',
//         gallery: {
//           enabled: true
//         }
//       });
//     }
//   }).data('plugin_pogoSlider1');

//   // Initialize once on load
//   $('.popup-gallery').magnificPopup({
//     delegate: 'a',
//     type: 'image',
//     gallery: {
//       enabled: true
//     }
//   });
// });



// For Magnific Popup gallery
// $('.gallery-link').magnificPopup({
//   type: 'image',
//   gallery: {
//     enabled: true
//   },
//   callbacks: {
//     open: function () {
//       $('.mfp-content').css('height', 'auto');
//     },
//     close: function () {
//       $('.mfp-content').css('height', '');
//     }
//   }
// });

// JS
function resetPogoSlider() {
  const $slider = $('#js-main-slider1');
  const existingInstance = $slider.data('plugin_pogoSlider');
  if (existingInstance) {
    existingInstance.destroy(); // Clean up
  }

  $slider.pogoSlider({
    autoplay: false,
    displayProgess: false,
    preserveTargetSize: true,
    targetWidth: 1000,
    targetHeight: 900,
    responsive: true,
    generateNav: false,
    generateButtons: true,
  });
}

$(document).ready(function () {
  resetPogoSlider();
});



