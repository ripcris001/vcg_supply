<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $data->title; ?></title>
</head>
<body>
	<?php if(isset($data->trid)){ ?>
		<?php echo $data->data->transaction_id; ?>
		
		<script type="text/javascript">
			const main = {
				customer: `<?php echo $data->data->customer; ?>`,
				product: `<?php echo $data->data->selectedProduct; ?>`,
				payment: `<?php echo $data->data->payment; ?>`,
				load: function(){
					this.customer = this.customer.length ? JSON.parse(this.customer) : "";
					this.product = this.product.length ? JSON.parse(this.product) : "";
					this.payment = this.payment.length ? JSON.parse(this.payment) : "";
					console.log(this);
				}
			}
			main.load();
		</script>
	<?php }else{ ?>
		No Current Transaction
	<?php } ?>
</body>
</html>