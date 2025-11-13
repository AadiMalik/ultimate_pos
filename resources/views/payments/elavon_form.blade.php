<!DOCTYPE html>
<html>

<head>
      <title>Pay Now</title>
</head>

<body>
      <form id="elavon-form" action="https://demo.myvirtualmerchant.com/VirtualMerchantDemo/process.do" method="POST">
            <input type="hidden" name="ssl_merchant_id" value="{{ $merchantId }}">
            <input type="hidden" name="ssl_user_id" value="{{ $userId }}">
            <input type="hidden" name="ssl_pin" value="{{ $pin }}">
            <input type="hidden" name="ssl_transaction_type" value="ccsale">
            <input type="hidden" name="ssl_amount" value="{{ $amount }}">
            <input type="hidden" name="ssl_invoice_number" value="{{ $invoice }}">
            <input type="hidden" name="ssl_email" value="{{ $email }}">
            <input type="hidden" name="ssl_show_form" value="true">
            <input type="hidden" name="ssl_result_format" value="HTML">
      </form>

      <script>
            document.getElementById('elavon-form').submit();
      </script>
</body>

</html>