<?php
include 'index3.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="bg-cover bg-center w-screen h-screen relative max-w-sm   " style="background-image:url(./asset/m1.png)">

        <div class="  w-full h-screen flex ">
            <!-- row 1 -->
            <div class="w-1/3 h-full flex  justify-start items-end ">
                <img src="./asset/bungga1 6.svg" alt="Gambar2" width="=1000" class="animate-slide-left absolute">
            </div>

            <!-- row2 -->
            <div class="w-1/3 h-screen   ">

                <div class=" animate-slide-bottom flex mt-7">

                </div>

                <div class="custom-text font-serif text32 static " style="color: #586D23;">
                    <div class=" mt-24 absolute  text-start left-16">Dodi</div>
                    <div class=" mt-36 absolute  text-center left-40 ">&</div>
                    <div class=" mt-44  absolute  text-end right-16">Salmi</div>
                </div>

                <img src="./asset/mempelai 1.svg" alt="" width="250" class=" left-24   mt-64 absolute">
                <div>


                    <div class="relative mt-96  translate-y-20">
                        <div class=" mt-2 rounded-xl -left-16  w-64 h-40 absolute " style="background-color:  #F5FFD4;">
                            <div class="   text-center p-4 text-sm font-semibold animate-slide-up ">Yth Bapak/Ibu/Saudara/i</div>
                            <div class=" text-center text-lg   animate-slide-up ">Nama Tamu</div>
                            <div class=" flex justify-center items-center">
                                <a href="index2.php" onclick="showFireworks(event)">
                                    <button class="text-xs mt-5 text-white bounce-effect w-24 h-6" onclick="toggleAudio()" type="button" style="background-color: #586D23;">
                                        Buka Undangan
                                    </button>
                                </a>

                                <div id="fireworks-container"></div>
                            </div>
                        </div>
                    </div>

                </div>




            </div>
            <!-- row3 -->
            <div class="w-1/3 h-64  flex   justify-end static">
                <img src="./asset/bungga1 5.svg" alt="Gambar3" width="190" class=" absolute animate-slide-right">
            </div>

        </div>
    </div>


    <audio id="audioNotifikasi" autoplay>
        <source src="./asset/lagu_nikah.mp3" type="audio/mpeg">
    </audio>



    <script type="text/javascript">
        var el = document.getElementById("audioNotifikasi");

        // Fungsi untuk memainkan atau menghentikan audio
        function toggleAudio() {
            if (el.paused) {
                playAudio();
            } else {
                pauseAudio();
            }
        }

        function playAudio() {
            console.log('Memainkan audio...');
            el.play();
        }

        function pauseAudio() {
            console.log('Menghentikan audio...');
            el.pause();
        }

        function showFireworks(event) {
            // Fungsi untuk menampilkan kembang api (implementasikan sesuai kebutuhan Anda)
            // ...

            // Panggil fungsi toggleAudio ketika tombol ditekan
            toggleAudio();
        }

        // Simpan status pemutaran audio ke sessionStorage saat halaman ditutup
        window.addEventListener("beforeunload", function() {
            sessionStorage.setItem("audioStatus", el.paused ? "paused" : "playing");
        });

        // Periksa dan atur status pemutaran audio saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            var audioStatus = sessionStorage.getItem("audioStatus");
            if (audioStatus === "playing") {
                playAudio();
            }
        });
    </script>

</body>

<!-- <script>
    // Tanggal target countdown (ganti dengan tanggal yang Anda inginkan)
    var targetDate = new Date("2023-12-31 00:00:00").getTime();

    // Fungsi untuk menghitung dan memperbarui countdown
    function updateCountdown() {
        var currentDate = new Date().getTime();
        var timeLeft = targetDate - currentDate;

        if (timeLeft <= 0) {
            document.getElementById("countdown").innerHTML = "Waktu habis!";
        } else {
            var days = Math.floor(timeLeft / (2000 * 60 * 60 * 24));
            var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById("days").innerText = days;
            document.getElementById("hours").innerText = hours;
            document.getElementById("minutes").innerText = minutes;
            document.getElementById("seconds").innerText = seconds;
        }
    }

    // Memanggil updateCountdown setiap 1 detik
    setInterval(updateCountdown, 1000);
</script> -->


</html>