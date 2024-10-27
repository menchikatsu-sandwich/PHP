<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pengalihan Halaman</title>
<meta http-equiv="refresh" content="5; url=baru.html">
<script>
// Fungsi untuk menghitung mundur
function countdown() {
  var seconds = 5; // Waktu countdown dalam detik

  // Update countdown setiap 1 detik
  var countdownInterval = setInterval(function() {
    // Kurangi waktu mundur setiap 1 detik
    seconds--;

    // Tampilkan waktu mundur
    var countdownElement = document.getElementById("countdown");
    countdownElement.innerHTML = seconds;

    // Hentikan countdown jika waktu habis
    if (seconds <= 0) {
      clearInterval(countdownInterval);
    }
  }, 1000); // 1 detik
}

// Mulai countdown saat halaman dimuat
window.onload = function() {
  countdown();
};
</script>
</head>
<body>
    Halaman web kami sudah dipindah. Anda akan dipindahkan ke halaman tersebut dalam waktu <span id="countdown">5</span>.
</body>
</html>
