<?php
require_once('header.php')
?>
<div class="column full">
	<h1 class="title">
		Charge
	</h1>
	<pre><code class="bash">curl -X POST https://connect.squareup.com/v2/locations/CBASELVV0B_aG7ksORk9vMjMHqo/transactions -H 'authorization: Bearer sandbox-sq0atb-e9A2bMJ5C8Ac6x2VzBLD4A' -H 'content-type: application/json' -d '{
  "idempotency_key": "<?php echo uniqid()?>",
  "amount_money": {
    "amount": 100,
    "currency": "USD"
  },
  "card_nonce": "'$NONCE'"
  }' | python -m json.tool</code></pre>
</div>
</div>
</div>
</section>
<script type="text/javascript">
	document.getElementById('11').classList.add('is-active')
</script>
</body>
</html>