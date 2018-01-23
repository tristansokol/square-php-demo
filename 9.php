<?php
require_once('header.php')
?>
<div class="column full">
	<h1 class="title">
		Charge
	</h1>
	<pre><code class="html">POST /v2/locations/LOCATION_ID/transactions
{
  "idempotency_key": "74ae1696-b1e3-4328-af6d-f1e04d947a13",
  "shipping_address": {
    "address_line_1": "123 Main St",
    "locality": "San Francisco",
    "administrative_district_level_1": "CA",
    "postal_code": "94114",
    "country": "US"
  },
  "billing_address": {
    "address_line_1": "500 Electric Ave",
    "address_line_2": "Suite 600",
    "administrative_district_level_1": "NY",
    "locality": "New York",
    "postal_code": "10003",
    "country": "US"
  },
  "amount_money": {
    "amount": 5000,
    "currency": "USD"
  },
  "card_nonce": "card_nonce_from_square_123",
  "reference_id": "some optional reference id",
  "note": "some optional note",
  "delay_capture": false
  }</code></pre>
</div>
</div>
</div>
</section>
<script type="text/javascript">
	document.getElementById('10').classList.add('is-active')
</script>
</body>
</html>