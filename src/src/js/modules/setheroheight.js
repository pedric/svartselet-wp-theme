export default class SetHeroHeight {
  constructor(element) {

  	function setHeight() {
  		if ( window.innerWidth > 640 ) {
  			let vh = window.innerHeight
  			let subtract = document.getElementsByClassName('m-portfolio-item__description')[0].offsetHeight*2
  			let elementHeight = vh - subtract
	  		element.style.height = elementHeight + 'px'
	  	} else {
	  		element.style.height = 'auto'
	  	}
  	}

  	setHeight()
  	window.addEventListener('resize', function() {
  		setHeight()
  	})

  }
}