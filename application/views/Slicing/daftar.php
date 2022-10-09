<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('berkas/'); ?>./bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('berkas/'); ?>./bootstrap-4.6.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('berkas/'); ?>./fontawesome-free-6.2.0-web/fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="<?= base_url('berkas/'); ?>./Form daftar.css">
    <title>Form Daftar</title>
</head>

<body>
    <div class="container background-linear">
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>

                                    <?= $this->session->flashdata('message'); ?>

                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password"><br>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                            <hr>
                                            <div class="text-center">
                                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                                            </div>
                                            <p class="text-center">Masuk dengan akun lain</p>
                                            <p class="text-center"><a href="https://google.com"><img src="<?= base_url('berkas/'); ?>./icon/google.svg" width="80" alt=""></a></p>
                                            <br />
                                            Note :
                                            <ul>
                                                <li>Kelengkapan administrasi dan syarat perpanjangan akan diinfokan lebih lanjut melalui email yang tersimpan pada saat pendaftaran.</li>
                                                <li>Pemilihan mentor akan dilakukan setelah proses administrasi selesai.</li>
                                                <li>Untuk perpanjangan tidak bisa memilih mentor ulang cukup menghubungi nomor admin</li>
                                            </ul>
                                            <br />
                                            <h2>MWriter</h2>

                                            <!-- Optional JavaScript; choose one of the two! -->

                                            <!-- Option 1: Bootstrap Bundle with Popper -->
                                            <script src="<?= base_url('berkas/'); ?>https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                                            <!-- Option 2: Separate Popper and Bootstrap JS -->
                                            <!--
    <script src="<?= base_url('berkas/'); ?>https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="<?= base_url('berkas/'); ?>https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>