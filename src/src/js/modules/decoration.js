import $ from "jquery";

export default class Decoration {
  constructor(element) {
  	let decorationElements = '<div class="m-decoration"></div><div class="m-decoration"></div><div class="m-decoration"></div><div class="m-decoration"></div>';
  	$(element).parent().css('position', 'relative');
  	$(element).parent().prepend(decorationElements);
  }
}