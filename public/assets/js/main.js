var app = app || {};
app= {
  productQuantity: function() {
    var buttons = document.querySelectorAll(".quantity-btn");
    var quantity = document.getElementById("quantity");
    var amount = document.getElementById("amount");
    var price = document.getElementById("price");
    var totalPrice;
    price = parseFloat(price.value);
    // console.log(price);
    console.log(buttons);
    buttons[0].addEventListener('click', function() {
    	
     	if (Number(quantity.value) > 1) {
     			this.removeAttribute("disabled");
          quantity.value--;
          totalPrice = price * quantity.value;
          amount.textContent = totalPrice.toFixed(2);
         	buttons[1].removeAttribute("disabled");
       }
      else {
      	  
          	this.setAttribute("disabled", true);
     		// console.log(this.nextElementSibling.value);
      }
    })
    buttons[1].addEventListener('click', function() {
     	if (quantity.value >= 10) {
     		this.setAttribute("disabled", true);
     		// console.log(this.nextElementSibling.value);
     		alert("you've exceeded the max quantity of this product")
       }
      else {
          quantity.value++;
          totalPrice = price * quantity.value;
          amount.textContent = totalPrice.toFixed(2);
          this.removeAttribute("disabled");
          buttons[0].removeAttribute("disabled");
      }
      // document.querySelectorAll(selectors: DOMString)
    })
  }
}
