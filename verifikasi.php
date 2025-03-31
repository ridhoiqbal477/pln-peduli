<head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <!-- Plugins CSS -->
        <link rel="stylesheet" href="assets/css/plugins.css">
        <!-- Icon Plugins CSS -->
        <link rel="stylesheet" href="assets/css/iconplugins.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="assets/css/theme-dark.css">
 
        <!-- Title -->
        <title>PLN Peduli</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>

    <!-- Pre Loader -->
    <div id="preloader">
            <div id="preloader-area">
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
                <div class="spinner"></div>
            </div>
            <div class="preloader-section preloader-left"></div>
            <div class="preloader-section preloader-right"></div>
        </div>
        <!-- End Pre Loader -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2500">
      <img src="assets/images/plnpeduli.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <body>
        
    <!-- Register Area -->
        <div class="register-area pb-70 mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="register-form">
                            <div class="top-header">
                                <h5 class="text-center">Pendaftaran Berhasil</h5>

                                <div class="progress-bar bg-danger progress-bar-striped" style="min-width: 20px;"></div>

                                <span style="color:red">Dimohon untuk tidak menutup Website sebelum proses pendaftaran selesai</span>

                                

                            </div>
                            <br>
                            <center>
                            <span>Silahkan untuk menunggu proses pendaftaran selesai.</span>
                            </center>
                            <img src="assets/images/load.gif" class="rounded mx-auto d-block" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Area End -->

         <!-- jQuery Script -->
                <script>
                var i = 0;
                function makeProgress(){
                    if(i < 100){
                        i = i + 1;
                        $(".progress-bar").css("width", i + "%").text(i + "%");
                    }
                
                    // Wait for sometime before running this script again
                    setTimeout("makeProgress()", 1000);
                }
                makeProgress();
                </script>

        

        <!-- Enrolled Area -->
        <div class="enrolled-area-two pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="enrolled-img-three mb-30 pr-20">
                            <img src="assets/images/plnbumn.webp" alt="Enrolled">
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="enrolled-content mb-30">
                            <div class="section-title">
                                <span>Jenis PLN Peduli</span>
                                <p>
                                DTKS ini merupakan data induk yang memuat nama-nama masyarakat yang berhak 
                                menerima manfaat pelayanan kesejahteraan sosial, menerima bantuan hingga potensi 
                                dan sumber kesejahteraan sosial.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                    <ul class="enrolled-list">
                                        <li><i class="flaticon-check"></i> Program Keluarga Harapan (PKH) </li>
                                        <li><i class="flaticon-check"></i> Bantuan Pangan Non Tunai </li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <ul class="enrolled-list">
                                        <li><i class="flaticon-check"></i> Bantuan Pangan Beras</li>
                                        <li><i class="flaticon-check"></i> BLT Mitigasi Risiko Pangan</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="login.php" class="default-btn border-radius-50">Daftar Sekarang</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Enrolled Area End --> <!-- Footer Area -->
        <footer class="footer-area">
            <div class="copyright-area">
                <div class="container">
                    <div class="copy-right-text text-center">
                        <p>
                            Copyright <b>2024</b> All Rights Reserved 
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->
        <!-- Jquery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Plugins JS -->
        <script src="assets/js/plugins.js"></script>
        <!-- Custom  JS -->
        <script src="assets/js/custom.js"></script>
    </body>