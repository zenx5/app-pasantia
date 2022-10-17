@if(\Session::has('message'))
      @include('store.partials.message')
    @endif      
    @include('store.partials.nav-menu')
@extends('layout')
@section('content')
<script src="https://js.stripe.com/v3/"></script>
  <div class="container my-5 d-flex justify-content-center">
  
      <div class="card col-md-6">
        <div class="card-header">
            Total: $ {{number_format($total,2)}} USD 
        </div>

        <div class="card-body">

          <div class="form-group">
          

              <div id="card-element">
                <form action="{{route('addmoney.stripe')}}" id="payment-form" method="POST">
                {{csrf_field()}}

                  <label for="">Correo</label>
                  <input type="email" class="form-control" name="email" id="stripe_email" placeholder="example@gmail.com">

                  <label for="">Numero de tarjeta</label>
                  <input type="text" class="form-control" name="card-name" id="stripe_card_name" placeholder="Numero de tarjeta">

                  <label for="">fecha de expiración</label>
                  <div class="row">
                      <div class="col-md-3">
                          <input type="text" class="form-control" name="exp_month" id="stripe_exp_month" placeholder="MM">
                      </div>
                      <div class="col-md-3">
                            <input type="text" class="form-control" name="exp_year" id="stripe_exp_year" placeholder="YY">
                      </div>
                  </div>
                  
                  <label for="">Ultimos 3 dígitos</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" name="cvc" id="stripe_cvc" placeholder="CVC">
                  </div>
                  
                                
                <div id="card-errors" role="alert"></div>

              <button class="btn btn-success btn-block" type="submit">Pagar</button>
              <input type="hidden" value="" name="stripeToken">
              </form>
              </div>

          </div>

        </div>

      </div>

  </div>

  <script>
    (function(){
      
                // Create a Stripe client.
                var stripe = Stripe('pk_test_24Brkd8NOycuNT3WwkYXc8HE');

                // Create an instance of Elements.
                var elements = stripe.elements();

                // Custom styling can be passed to options when creating an Element.
                // (Note that this demo uses a wider set of styles than the guide below.)
                var style = {
                              base: {
                                color: '#32325d',
                                lineHeight: '18px',
                                fontFamily: '"Questrial", sans-serif',
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

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();

            var options = {
                   name: document.getElementById('stripe_card_name').value; 
            }

              stripe.createToken(card).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error.
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                } else {
                  // Send the token to your server.
                  stripeTokenHandler(result.token);
                }
              });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);

              // Submit the form
              form.submit();
            }
    })
</script>

@endsection
