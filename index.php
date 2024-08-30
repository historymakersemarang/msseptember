<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/hm.png" type="image/icon type">
    <title>HM | Daftar Ulang MS</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>
    <div class="form-container">
        <div class="col col-1">
            <div class="image-layer">
                <img src="assets/img/dots.png" class="form-image dots">
                <img src="assets/img/spring.png" class="form-image spring">
                <img src="assets/img/hmi.png" class="form-image-main rocket">
                <img src="assets/img/cloud.png" class="form-image cloud">
                <img src="assets/img/stars.png" class="form-image stars.png">
            </div>
            <p class="featured-words">Win The Lost at <span>Any Cost</span></p>
        </div>
        <div class="col col-2">
            <div class="btn-box">
                <button class="btn" id="login"> Welcome to MS <br/> Open Heaven & A New Earth
                </button>
            </div>
            <div class="login-form">
                <div class="form-title">
                    <span>Daftar Ulang MS</span>
                </div>
                <form class="form-inputs" id="daftarUlangForm" action="validate.php" method="post">
                    <div class="input-box">
                        <input type="text" class="input-field" name="phone" placeholder="Masukin Nomor WA Kamu" required>
                        <i class="bx bx-user icon"></i>
                    </div>
                    <p>&nbsp;&nbsp;&nbsp;*Format Nomornya pake 628 ya ges yak</p>
                    <br>
                    <div class="input-box">
                        <button type="submit" class="input-submit">
                            <span>Konfirmasi Kehadiran</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                        <a href="register.php">&nbsp;&nbsp;&nbsp;Belum Pernah Registrasi?</a>
                    </div>
                </form>

                <div class="social-login">
                    <a href="https://www.instagram.com/historymaker.semarang/"target="_blank"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.youtube.com/@historymakerimpact4636" target="_blank"><i class="bx bxl-youtube"></i></a>
                    <a href="https://www.tiktok.com/@historymakersemarang" target="_blank"><i class="bx bxl-tiktok"></i></a>
                    <a href="https://wa.me/6285929094695" target="_blank"><i class="bx bxl-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal">
        <div class="popup">
            <h1>Yeayy!</h1>
            <img src="assets/img/hmi.png">
            <p>Daftar Ulang Berhasil!<br>Selamat beribadah (nama)</p>
            <button>Okay!</button>
        </div>
    </div>
    <div class="modul">
        <div class="popup">
            <h1>Yahh!!!</h1>
            <h1 class="emot">😫</h1>
            <p>Data Tidak Ditemukan!<br>Silahkan Registrasi Terlebih Dahulu!</p>
            <button>Registrasi</button>
        </div>
    </div>

    <script>
    const scriptURL = 'validate.php'; 
    const form = document.getElementById('daftarUlangForm');
    const modal = document.querySelector('.modal'); 
    const modalButton = modal.querySelector('button');
    const modalMessage = modal.querySelector('p'); 
    const modul = document.querySelector('.modul'); 
    const modulButton = modul.querySelector('button');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(form);
        try {
            const response = await fetch(scriptURL, {
                method: 'POST',
                body: formData
            });
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            const result = await response.json();

            if (result.status === 'success') {
                modalMessage.innerHTML = `Daftar Ulang Berhasil!<br>Selamat beribadah ${result.fullname}`;
                modal.classList.add('active');
                modalButton.addEventListener('click', () => {
                    modal.classList.remove('active');
                    window.location.href = result.redirect; 
                });

                const googleFormData = new FormData();
                googleFormData.append('email', result.email);
                googleFormData.append('ig', result.ig);
                googleFormData.append('instansi', result.instansi);
                googleFormData.append('fullname', result.fullname);
                googleFormData.append('date', result.date);
                googleFormData.append('phone', result.phone);
                googleFormData.append('kecamatan', result.kecamatan);
                googleFormData.append('fc', result.fc);

                await fetch('https://script.google.com/macros/s/AKfycbz9zl_goeNeSwCBZF42payMbaOCKWf6GKkF06Aq4la_9OU2L4LReAmccSdulekJUPVulQ/exec', {
                    method: 'POST',
                    body: googleFormData
                });
            } else {
                modul.classList.add('active');
                modulButton.addEventListener('click', () => {
                    modul.classList.remove('active');
                    window.location.href = result.redirect; 
                });
            }
        } catch (error) {
            console.error('Error:', error);
        }
    });


    </script>
    <script src="assets/js/main.js"></script>
</body>
</html>
       