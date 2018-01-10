import $ from "jquery";

export default class GetPortfolioItems {
  constructor(element) {
  
  $.ajax({
	  url: 'http://www.alkoholisten.com/wp-json/wp/v2/portfolio/',
	})
	.done(function(res) {
	  console.log(res)
	  var test = ''
	  for (var i = 0; i < res.length; i++) {
	  	if(res[i].acf.main_image.sizes.large) {
	  		test += '<div class="grid-50 u-flexbox-center"><div class="m-portfolio-item"><img src="' + res[i].acf.main_image.sizes.large + '"></div></div>';
	  	}
	  }
	  document.getElementById("ajaxtest").innerHTML = test
	})
	.fail(function(err) {
	  console.log('Error: ' + err.status);
	});

  }
}