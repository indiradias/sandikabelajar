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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button id="pay-button" class="btn btn-success link">Bayar !</button>
    </div>

    <form action="" id="submit_form" method="POST">
        @csrf
        <input type="hidden" name="json" id="json_callback">
    </form>

    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snap_token}}', {
            onSuccess: function(result){
            /* You may add your own implementation here */
           console.log(result);
            send_response_to_form(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            console.log(result);
            send_response_to_form(result); //untk mengirimkan respon dari result
          },
          onError: function(result){
            /* You may add your own implementation here */
            console.log(result);
            send_response_to_form(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('Anda keluar halaman tanpa melakukan pembayaran!');
            send_response_to_form(result);
          }
        });
        // customer will be redirected after completing payment pop-up
      });

      //fungsi yg digunakan untuk memasukan value kedalam form diatas
      function send_response_to_form(result){
        document.getElementById('json_callback').value = JSON.stringify(result); //function dari javascript untuk format json jadi string
        alert(document.getElementById('json_callback').value)
        $('#submit_form').submit();
      }
    </script>

    {{-- Handler WeebHooks --}}
    @if(session('alert-success'))
        <script>alert("{{session('alert-success')}}")</script>
     @elseif(session('alert-failed'))
        <script>alert("{{session('alert-failed')}}")</script>
    @endif


{{-- End Of Content Pembayaran --}}
@endsection
@endsection
