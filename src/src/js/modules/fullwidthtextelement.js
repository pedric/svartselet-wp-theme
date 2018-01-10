export default class FullwidthTextElement {
    constructor(element) {

        let that = this

        this.element = element
        this.heading = element.querySelector('span')

        this.setHeadingSize()
        window.addEventListener('resize', function() {
            that.setHeadingSize()
        })
    }

    setHeadingSize() {

        let fontSize = parseFloat(window.getComputedStyle(this.heading, null).getPropertyValue('font-size'))
    	
        // Element width, content width and fontsize
        let x = this.heading.offsetWidth
        let y = this.element.offsetWidth
        let z = fontSize

        // If content is smaller than parentelement
        if(x < y) {
            
            for (var i = x; i < y; z++) {
                this.heading.style.fontSize = z + 'px'
                this.heading.style.lineHeight = z + 'px'
                i = this.heading.offsetWidth
            }

        // If content is bigger than parentelement
        } else {

            for (var i = x; i > y; z--) {
                this.heading.style.fontSize = z + 'px'
                this.heading.style.lineHeight = z + 'px'
                i = this.heading.offsetWidth
            }
        }
    }
}