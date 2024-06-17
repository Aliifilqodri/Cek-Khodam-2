<?php
header('Content-Type: application/json');

// Array of funny smells
$funnySmells = [
    "Bau Ketiak Basah",
    "Bau Mulut Naga",
    "Bau Badan Cap Gajah",
    "Bau Jengkol",
    "Bau Petai",
    "Bau Kaki Belum Cuci",
    "Bau Sikat Gigi Siang Hari",
    "Bau Rambut Berminyak",
    "Bau Kamar Kos",
    "Bau Kantor Lama",
    "Bau Hantu Tersinggung",
    "Bau Perut Kosong",
    "Bau Telur Busuk",
    "Bau Keringat Malam",
    "Bau Popok Bayi",
    "Bau Kaos Kaki Olahraga",
    "Bau Sepatu Usang",
    "Bau Udara Pantai",
    "Bau Tanah Basah",
    "Bau Bauan Misterius",
    "Bau Masakan Hangus",
    "Bau Kamar Mandi",
    "Bau Lemari Tua",
    "Bau Hewan Peliharaan",
    "Bau Tas Gym",
    "Bau Tumpukan Laundry",
    "Bau Mobil Tua",
    "Bau Ranjang Tua",
    "Bau Tumpukan Buku",
    "Bau Sampah"
];

// Retrieve the name from POST data
$name = $_POST['name'] ?? '';

if (empty($name)) {
    // If name is empty, return an error response
    http_response_code(400);
    echo json_encode(['error' => 'Nama tidak boleh kosong']);
    exit;
}

// Generate a random funny smell
$randomIndex = array_rand($funnySmells);
$randomSmell = $funnySmells[$randomIndex];

// Prepare the response
$response = [
    'bau' => $randomSmell
];

// Send the JSON response
echo json_encode($response);
?>
