
export default class ToggleMenu {
  constructor(element) {

    let that = this

  	this.menu = element.getElementsByClassName('o-main-menu')[0]
    this.burger = element.getElementsByClassName('m-burger')[0]
  	this.burgerWrapper = element.getElementsByClassName('m-burger__wrapper')[0]
  	this.nav = element.getElementsByClassName('o-main-menu__nav')[0]

  	this.closeVH = 0
  	this.openVH = 0
    this.vw = 0
    this.setDimensions()

    window.addEventListener('resize', function() {
      that.setDimensions()
    })

    this.burger.addEventListener('click', function() {
      that.toggle()
    })
  }

	close() {
		this.burger.removeAttribute('active')
		this.menu.removeAttribute('active')
		this.nav.removeAttribute('active')
		this.menu.style.height = this.closeVH + 'px'
	}

	open() {
		this.burger.setAttribute('active', 'true')
		this.menu.setAttribute('active', 'true')
		this.nav.setAttribute('active', 'true')
		this.menu.style.height = this.openVH + 'px'
    this.menu.style.width = this.vw + 'px'
	}

	toggle() {
		if (this.burger.hasAttribute('active')) {
			this.close()
		} else if (!this.burger.hasAttribute('active')) {
			this.open()
		} else {
			this.close()
		}
	}

  setDimensions() {
    this.openVH = window.innerHeight
    this.vw = window.innerWidth
  }

}