<html>
<body>
 
<!-- <h1>LOLOK</h1> -->
<?php
echo '<div style="font-size:90px;">HALO ANAK MUDA!</div>';
?>

<div id="timer" style="font-size:30px;"></div>

<script>
function mulaiHitungMundur(durasi, display) {
    var timer = durasi, detik;
    setInterval(function () {
        detik = parseInt(timer % 60, 10);

        detik = detik < 10 ? "0" + detik : detik;

        display.textContent = detik;

        if (--timer < 0) {
            timer = durasi;
        }
    }, 1000);
}

window.onload = function () {
    var waktuSekarang = 10,
        display = document.querySelector('#timer');
    mulaiHitungMundur(waktuSekarang, display);
};
</script>

</body>
</html>
