@extends('template')
@section('header')
<span class="app-brand-text demo menu-text fw-bolder ms-2">Pembayaran Pendaftaran</span>
@section('pembayaran')

{{-- Content Pembayaran --}}
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-SLSZ4JPWGDO9jQrL"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button id="pay-button" class="btn btn-success link">Bayar !</button>
    </div>

    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snap_token}}');
        // customer will be redirected after completing payment pop-up
      });
    </script>

{{-- End Of Content Pembayaran --}}
@endsection
@endsection
