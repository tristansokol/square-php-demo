<?php
require_once('header.php')
?>
<div class="column full">
	<pre><code>ngrok http 8080</code></pre>

	<a class="button is-primary" id="chargeButton">Click here to checkout!</a>
</div>
</div>
</div>
</section>
<script type="text/javascript">
	document.getElementById('15').classList.add('is-active')
	var callbackUrl = 'https://giphy.com/search/success'
	var clientId = 'sq0idp-gbQhcOCpmb2X4W1588Ky7A'
	var iOSparameters = {
		"amount_money": {
			"amount": 100,
			"currency_code": "USD"
		},
		"callback_url": callbackUrl,
		"client_id": clientId,
		"version": "1.1",
		"notes": "totall optional note",
		"options": {
			"supported_tender_types": ["CREDIT_CARD", "CASH"]
		}
	}
	document.getElementById('chargeButton').href = 'square-commerce-v1://payment/create?data=' + encodeURIComponent(JSON.stringify(iOSparameters))
</script>
</body>
</html>