<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/hm.png" type="image/icon type">
    <title>HM | Registrasi</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="left">
        <iframe width="500" height="245" src="https://www.youtube.com/embed/bupMljjEWdY" title="Apa itu History Maker Impact ?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <br>
        <div class="content">
            <h3 class="judul">Apa itu History Maker Semarang?</h3>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;History Maker adalah komunitas anak muda Kristen kota Semarang yang terdiri dari kumpulan pelajar SMP, SMA/K, Mahasiswa dan Gen-Z yang sudah kerja. History Maker berdiri sejak tahun 2017 oleh karena kerinduan untuk terjadinya kegerakan pelajar sekota Semarang. </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;History Maker merupakan komunitas oikumene dimana terdiri dari berbagai denominasi gereja dan tidak membeda-bedakan dari aliran gereja. Komunitas History Maker adalah rumah bagi generasi ini. Dimana banyak anak muda dibawa untuk bisa mengalami dan kenal dengan Tuhan Yesus.</p>
        </div>
    </div>
    <div class="right">
        <div class="form-container">
            <div class="form-title">
                <span>Form Registrasi HM</span>
            </div>
            <form action="validatesec.php" method="POST">
                <input type="text" name="email" class="input-field" placeholder="Email" required>
                <input type="text" name="ig" class="input-field" placeholder="Username IG" required>
                <select id="instansi" name="instansi" class="input-field" required>
                    <option value="" disabled selected>Sekolah/Kerja</option>
                    <option value="sekolah">Sekolah</option>
                    <option value="kerja">Kerja</option>
                </select>
                <input type="text" name="fullname" class="input-field" placeholder="Nama Lengkap" required>
                <input name="date" placeholder="Tanggal Lahir" class="input-field" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required/>
                <input type="number" name="phone" class="input-field" placeholder="No. Whatsapp (Format 628)" required>
                <select id="kecamatan" name="kecamatan" class="input-field" required>
                    <option value="" disabled selected>Kecamatan Kamu Tinggal</option>
                    <option value="banyumanik">Banyumanik</option>
                    <option value="candisari">Candisari</option>
                    <option value="gajahmungkur">Gajahmungkur</option>
                    <option value="gayamsari">Gayamsari</option>
                    <option value="gunungpati">Gunungpati</option>
                    <option value="mijen">Mijen</option>
                    <option value="ngaliyan">Ngaliyan</option>
                    <option value="pedurungan">Pedurungan</option>
                    <option value="semarangbarat">Semarang Barat</option>
                    <option value="semarangselatan">Semarang Selatan</option>
                    <option value="semarangtengah">Semarang Tengah</option>
                    <option value="semarangtimur">Semarang Timur</option>
                    <option value="semarangutara">Semarang Utara</option>
                    <option value="tembalang">Tembalang</option>
                    <option value="tugu">Tugu</option>
                </select>
                <select id="fc" name="fc" class="input-field" required>
                    <option value="" disabled selected>Pilih FC Kamu</option>
                    <option value="FC Wilayah 1">FC Wilayah 1</option>
                    <option value="FC Wilayah 2">FC Wilayah 2</option>
                    <option value="FC Wilayah 3">FC Wilayah 3</option>
                    <option value="FC Wilayah 4">FC Wilayah 4</option>
                    <option value="FC Wilayah 5">FC Wilayah 5</option>
                    <option value="FC Wilayah 6">FC Wilayah 6</option>
                    <option value="FC Wilayah 7">FC Wilayah 7</option>
                    <option value="FC Wilayah 8">FC Wilayah 8</option>
                    <option value="FC Wilayah 9">FC Wilayah 9</option>
                    <option value="belumjoin">Belum Join FC</option>
                </select>
                <button type="submit" class="input-submit">
                    <span>Daftar Ah!</span>
                    <i class="bx bx-right-arrow-alt"></i>
                </button>
            </form>
            <div class="social-login">
                <a href="https://www.instagram.com/historymaker.semarang/" target="_blank"><i class="bx bxl-instagram"></i></a>
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
        <p>Registrasi Berhasil!<br>Silahkan melakukan Daftar Ulang <span id="userName"></span></p> <!-- Updated span with id -->
        <button onclick="redirectToIndex()">Okay!</button>
    </div>
</div>
<div class="modul">
    <div class="popup">
        <h1>Yahh!!!</h1>
        <h1 class="emot">😫</h1>
        <p>Registrasi Gagal!<br>Silahkan Registrasi lagi</p>
        <button onclick="closePopup('modul')">Registrasi</button>
    </div>
</div>

<script>
    function closePopup(className) {
        document.querySelector('.' + className).classList.remove('active');
    }

    function redirectToIndex() {
        window.location.href = 'index.php';
    }

    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');
        const fullname = urlParams.get('name'); // Get the fullname parameter from the URL

        if (status) {
            if (status === 'success') {
                document.querySelector('.modal').classList.add('active');
                if (fullname) {
                    document.getElementById('userName').textContent = fullname; // Insert the fullname into the HTML
                }
            } else if (status === 'failure') {
                document.querySelector('.modul').classList.add('active');
            }
            const newUrl = window.location.href.split('?')[0];
            history.replaceState(null, null, newUrl);
        }
    };
</script>
<script src="assets/js/main.js"></script>
</body>
</html>
