@extends('layouts.Peserta')
@section('header')
<span class="app-brand-text demo menu-text fw-bolder ms-2">Pembayaran Pendaftaran</span>
@section('pembayaran')

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-76fH2x75no1X-odR"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>

  <body>

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
          <div class="col-lg-12 mb-4 order-0">
            <div class="card">
              <div class="d-flex align-items-end row">
                <main style="padding: 45px">
                  {{-- <img
                      src="../assets/img/illustrations/man-with-laptop-light.png"
                      height="240" class="rounded mx-auto d-block"
                      alt="View Badge User"
                      data-app-dark-img="illustrations/man-with-laptop-dark.png"
                      data-app-light-img="illustrations/man-with-laptop-light.png"
                    /> --}}
                  <h3 style="padding: 50px" class="text-center">Bayar Biaya Pendaftaran Sebesar Rp.300000 <br>Sebelum Mengisi Formulir Pendaftaran</h3>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button id="pay-button" class="btn btn-primary">Bayar Sekarang!</button>
                    </div>
                </main>
              </div>
            </div>
          </div>
      </div>
    </div>


    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snap_token}}');//transaction token
        // customer will be redirected after completing payment pop-up
      });
    </script>
  </body>
</html>

@endsection
@endsection
