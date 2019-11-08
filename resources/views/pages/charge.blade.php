<form action="/charge/{{ $item->id }}/{{ $user->id }}" method="POST">
    @csrf
    @if (Auth::check())
        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}"
            data-amount="{{ $price }}"
            data-name="Stripe Demo"
            data-label="決済をする"
            data-description="Online course about integrating Stripe"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto"
            data-currency="JPY">
        </script>
    @endif
    </form>
