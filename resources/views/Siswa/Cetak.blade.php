<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>Surat Permohonan Perorangan</title> -->
  <title>  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <style>
    table tr .text2{
      text-align: left;
    }
    table tr .text3{
        text-align: center;
        /* font-size: 18px; */
      }
    table tr td {
      text-align: justify;
      font-size: 15px;
    }
    table tr .text {
      text-align: right;
      font-size: 15px;
    }
    @page {
      size: auto;
      margin:0;
    }
  </style>
</head>
<body>
  <center>

    <tr>
      <table width="625" class="border-bottom border-dark solid"><br><br>
        <td><img src="{{ asset('PPDB/images/logo ppm.png')}}" width="105" height="105"></td>
        <td>
          <center class="">
              <font size="4"><b>PONDOK PESANTREN MODERN AL AZHAR MUNCAR</b></font><br>
              <font size="4"><b>PANITIA PENERIMAAN PESERTA DIDIK BARU</b></font><br>
              <font size="4"><b>TAHUN AJARAN 2022/2023</b></font><br>
              <font size="3">Jl. Ompaksongo Tembokrejo, Muncar, Banyuwangi, 68472</font><br>
              <font size="3">Website : alazharmuncar.org; Email : ypisalazharmuncar@gmail.com</font><br>
          <center>
        </td>
      </table>
    </tr>
    <tr>
    </tr>

    <font size="4"><b>BUKTI PENDAFTARAN PPDB</b></font><br>
    <font size="3" style="text-align: left"><b>Biodata Santri</b></font>
    <table width="750">
        <tr>
            <td>Nama Lengkap &emsp; &ensp; </td>
            <td width="549">
                :&emsp; {{ $siswa->nama_peserta}}
            </td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir &emsp; &ensp; </td>
            <td width="549">
                :&emsp; {{ $siswa->tempat_lahir}}, {{ $siswa->tanggal_lahir}}
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin &emsp; &ensp; </td>
            <td width="549">
                :&emsp; {{ $siswa->jenis_kelamin}}
            </td>
        </tr>
        <tr>
            <td>Asal Sekolah &emsp; &ensp; </td>
            <td width="549">
                :&emsp; {{ $siswa->asal_sekolah}}
            </td>
          </tr>
      <tr>
        <td>NISN &emsp; &ensp; </td>
        <td width="549">
            :&emsp; {{ $siswa->nisn}}
        </td>
      </tr>
      <tr>
        <td>NIK Calon Santri &emsp; </td>
        <td width="549">
            :&emsp; {{ $siswa->nik_peserta}}
        </td>
      </tr>
      <tr>
        <td>Mendaftar ke &emsp; &ensp; </td>
        <td width="549">
            :&emsp; SMP Al Azhar Muncar
        </td>
      </tr>
      <tr>
        <td>Tanggal Mendaftar &emsp; &ensp; </td>
        <td width="549">
            :&emsp; {{ $siswa->created_at}}
        </td>
      </tr>
    </table>

    <font size="3"><b>Biodata Orang Tua</b></font><br>
    <table width="750">
        <tr>
            <td>Nama Ayah / NIK &emsp; &ensp; </td>
            <td width="549">
                :&emsp; {{ $siswa->nama_ayah}} / {{ $siswa->nik_ayah}}
            </td>
        </tr>
        <tr>
            <td>Nama Ibu / NIK &emsp; &ensp; </td>
            <td width="549">
                :&emsp; {{ $siswa->nama_ibu}} / {{ $siswa->nik_ibu}}
            </td>
        </tr>
        <tr>
            <td>Alamat &emsp; &ensp; </td>
            <td width="549">
                :&emsp; {{ $siswa->alamat_orangtua }}
            </td>
        </tr>
        <tr>
            <td>Nomor HP &emsp; &ensp; </td>
            <td width="549">
                :&emsp; {{ $siswa->noHp_orangtua }}
            </td>
        </tr>
        <tr>
            <td>Status Pendaftaran &emsp; &ensp; </td>
            <td width="549">
                :&emsp; {{ $siswa->status_pendaftaran }}
            </td>
        </tr>
    </table>
    <table width="750">
        <tr class="text">
            Checklist Persyaratan Administrasi (✔) <i> Diisi Oleh Panitia PPDB <i>
        </tr>
        <tr>
            <td>1. Formulir Pendaftaran</td>
            <td width="549">
                &emsp; ⬜
            </td>
        </tr>
        <tr>
            <td>2. Fotokopi Ijazah <i>(Menyusul)</i></td>
            <td width="549">
                &emsp; ⬜
            </td>
        </tr>
        <tr>
            <td>3. Fotokopi NISN</td>
            <td width="549">
                &emsp; ⬜
            </td>
        </tr>
        <tr>
            <td>4. Fotokopi Raport Kelas 6</td>
            <td width="549">
                &emsp; ⬜
            </td>
        </tr>
        <tr>
            <td>5. Fotokopi KTP Orang Tua</td>
            <td width="549">
                &emsp; ⬜
            </td>
        </tr>
        <tr>
            <td>6. Fotokopi Akta Kelahiran</td>
            <td width="549">
                &emsp; ⬜
            </td>
        </tr>
        <tr>
            <td>7. Fotokopi KK</td>
            <td width="549">
                &emsp; ⬜
            </td>
        </tr>
        <tr>
            <td>8. Pas Foto 3x4 (3 lembar) & <br> Pas Foto 2x3 (1 lembar)</td>
            <td width="549">
                &emsp; ⬜
            </td>
        </tr>
    <!-- <br> -->
    <table width="750">
        <tr>
            <td width="400"></td>
          <td class="text">
            <br>
            <br> Orang Tua/Wali, <br><br><br><br>
            __________________

          </td>
            <td width="400"></td>
          <td class="text3">
            <br>
            <br> Calon Santri, <br><br><br><br>
            __________________

          </td>
          <td width="400"></td>
          <td class="text2"> <br>
            Banyuwangi,
            <br> Panitia PPDB, <br><br><br><br>
            __________________
          </td>
        </tr>

    </table>
    <br><br>
    <td><i>*Silahkan dicetak rangkap 2</i></td>
  </center>
  <div class="container-lg text-center mt-4 mb-4 pt-4">
      <button name="cetak" type="button" id="cetak" value="Cetak" onclick="Cetakan()" class="btn btn-primary" style="margin-right: 4cm;">cetak</button>
      <a href="{{ url('siswa') }}" name="selanjutnya" id="selanjutnya" class="btn btn-success">Kembali</a>
  </div>
  <script>
        function Cetakan() {
            var x = document.getElementsByName("cetak");
            var y = document.getElementsByName("selanjutnya");
            for (i = 0; i < x.length; i++) {
                x[i].style.visibility = "hidden";
                // y[i].style.visibility = "hidden";
            }
            for (i = 0; i < y.length; i++) {
                y[i].style.visibility = "hidden";
            }


            var css = '@page { size: portrait; }',
            head = document.head || document.getElementsByTagName('head')[0],
            style = document.createElement('style');

            style.type = 'text/css';
            style.media = 'print';

            if (style.styleSheet){
            style.styleSheet.cssText = css;
            } else {
            style.appendChild(document.createTextNode(css));
            }

            head.appendChild(style);
            window.print();
            // alert("Jangan di tekan tombol Selanjutnya sebelum dokumen selesai tercetak!");
            for (i = 0; i < x.length; i++) {
                x[i].style.visibility = "visible";
            }
            for (i = 0; i < y.length; i++) {
                y[i].style.visibility = "visible";
            }

        }
  </script>
</body>
</html>
