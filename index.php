<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cek</h1>
        <div class="navigation">
            <button onclick="showSection('khodam')">Cek Khodam</button>
            <button onclick="showSection('bau')">Cek Bau</button>
        </div>
        
        <div id="khodam-section" class="section">
            <h2>Cek Khodam</h2>
            <div id="input-container">
                <input type="text" id="name-input" placeholder="Masukkan nama...">
                <button onclick="cekKhodam()">Cek</button>
            </div>
            <div id="khodam-result-container">
                <p id="khodam-result-text"></p>
            </div>
            <h3>Riwayat Khodam</h3>
            <ul id="khodam-history"></ul>
        </div>


        <div id="bau-section" class="section">
            <h2>Cek Bau</h2>
            <div id="input-container-bau">
                <input type="text" id="bau-input" placeholder="Masukkan nama...">
                <button onclick="cekBau()">Cek</button>
            </div>
            <div id="bau-result-container">
                <p id="bau-result-text"></p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
