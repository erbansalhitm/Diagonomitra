<?php
    
    $MERCHANT_KEY = "VfJX2006"; // add your id
    $SALT = "8KfvjRJ6DZ"; // add your id
	
	//$MERCHANT_KEY = "QPcf1rGY"; // add your id
    //$SALT = "lB7ehBSkap"; // add your id
    
    $PAYU_BASE_URL = "https://secure.payu.in";
    $action = '';
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    $posted = array();
    $posted = array(
        'key' => $MERCHANT_KEY,
        'txnid' => $txnid,
        'amount' => $totalamount,
        'firstname' => $first_name,
        'email' => $email,
        'productinfo' => $product,
        'surl' => '{{route("response")}}',
        'furl' => '{{route("response")}}',
        'service_provider' => 'payu_paisa',
    );
    
    if(empty($posted['txnid'])) {
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    } 
    else 
    {
        $txnid = $posted['txnid'];
    }
    $hash = '';
    $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
    if(empty($posted['hash']) && sizeof($posted) > 0) {
        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = '';  
        foreach($hashVarsSeq as $hash_var) {
            $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
            $hash_string .= '|';
        }
        $hash_string .= $SALT;
    
        $hash = strtolower(hash('sha512', $hash_string));
        $action = $PAYU_BASE_URL . '/_payment';
    } 
    elseif(!empty($posted['hash'])) 
    {
        $hash = $posted['hash'];
        $action = $PAYU_BASE_URL . '/_payment';
    }

?>

<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
           payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    Processing.....
        <form action="<?php echo $action; ?>" method="post" name="payuForm"><br />
            <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" /><br />
            <input type="hidden" name="hash" value="<?php echo $hash ?>"/><br />
            <input type="hidden" name="txnid" value="<?php echo $txnid ?>" /><br />
            <input type="hidden" name="amount" value="<?php echo $totalamount;?>" /><br />
            <input type="hidden" name="firstname" id="firstname" value="{{$first_name}}" /><br />
            <input type="hidden" name="email" id="email" value="<?php echo $email;?>" /><br />
			<input type="hidden" name="phone" value="<?php echo $mobile; ?>" />
            <input type="hidden" name="productinfo" value="<?php echo $product;?>"><br />
            <input type="hidden" name="surl" value="{{route('response')}}" /><br />
            <input type="hidden" name="furl" value="{{route('response')}}" /><br />
            <input type="hidden" name="service_provider" value="payu_paisa"  /><br />
            <?php
            if(!$hash) { ?>
                <input type="submit" value="Submit" />
            <?php } ?>
        </form>
  </body>
</html>