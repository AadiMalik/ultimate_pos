<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice</title>
</head>

<body>
    <h3>Hello {{ $transaction->contact->name }},</h3>
    <p>Your invoice #{{ $transaction->invoice_no }} has been generated.</p>

    <p>Invoice link: <a href="{{ $invoice_url }}">View Invoice</a></p>

    @if(!empty($elavon_link))
    <p>Pay via Elavon: <a href="{{ $elavon_link }}">Pay Now</a></p>
    @endif

    <p>Thank you for your business!</p>

</body>

</html>