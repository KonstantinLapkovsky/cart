var stripe = Stripe('');
var elements = stripe.elements();

var style = {
		base: {
			color: '#32325d',
			lineHeight: '24px',
			fontFamily: 'Helvetica Neue',
			fontSmoothing: 'antialiased',
			fontSize: '16px',
			'::placeholder': {
			    color: '#aab7c4'
			}
		},
		invalid: {
			color: '#fa755a',
			iconColor: '#fa755a'
		}
	};

var cardNumberElement = elements.create('cardNumber', {
  	style: style
});
cardNumberElement.mount('#card-number');

var cardExpiryElement = elements.create('cardExpiry', {
  	style: style
});
cardExpiryElement.mount('#card-expiry');

var cardCvcElement = elements.create('cardCvc', {
  	style: style
});
cardCvcElement.mount('#card-cvc');

var postalCodeElement = elements.create('postalCode', {
  	style: style
});
postalCodeElement.mount('#zip');

function setOutcome(result) {
  	var successElement = document.querySelector('#charge-message');
  	successElement.classList.remove('visible');

  	if (result.token) {
    	var form = document.querySelector('#checkout-form');
    	var token = document.querySelector('#stripeToken');
    	token.value = result.token.id;
    	form.submit();
  	} else if (result.error) {
    	successElement.textContent = result.error.message;
    	successElement.classList.add('visible');
  }
}

cardNumberElement.on('change', function(event) {
  	setOutcome(event);
});

document.querySelector('form').addEventListener('submit', function(e) {
  	e.preventDefault();
  	stripe.createToken(cardNumberElement).then(setOutcome);
});
