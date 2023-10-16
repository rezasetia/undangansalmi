<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Sofia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" /> -->

    <!-- <script src="script.js"></script> -->
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
    <!-- partikel js -->
    <!-- <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>  -->

</head>

<body>

    <style>
        .snowflakes-container {
            position: fixed;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 9999;
        }

        .blur {
            filter: blur(1px);
        }

        .text22 {
            font-size: xx-small;
        }

        .text32 {
            font-size: 50px;
        }

        .snowflake {
            position: absolute;
            background: #fff;
            width: 5px;
            height: 5px;
            border-radius: 100%;
            animation: fall linear infinite;
        }

        @keyframes fall {
            to {
                transform: translateY(100vh);
            }
        }


        /* efek scale */
        @keyframes scaleIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes scaleOut {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            100% {
                transform: scale(0);
                opacity: 0;
            }
        }

        .scale-in {
            animation: scaleIn 0.5s ease-in-out forwards;
        }

        .scale-out {
            animation: scaleOut 0.5s ease-in-out forwards;
        }

        /* efek denyut */
        .pulse-element {
            display: inline-block;
            animation: pulse 1s infinite alternate ease-in-out;
            z-index: -1;
        }

        .pulse-element1 {
            display: inline-block;
            animation: pulse 6s infinite alternate cubic-bezier(0.4, 0, 0.6, 1);
            z-index: -1;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.3);
            }
        }

        /* Optional styles for better appearance */
        .pulse-element p {
            font-size: 24px;
            font-weight: bold;
            padding: 20px;
            background-color: lightblue;
            border-radius: 10px;
            text-align: center;
        }



        canvas {
            display: block;
            vertical-align: bottom;
        }



        /* ---- stats.js ---- */
        .count-particles {
            background: #000022;
            position: absolute;
            top: 48px;
            left: 0;
            width: 80px;
            color: #13E8E9;
            font-size: .8em;
            text-align: left;
            text-indent: 4px;
            line-height: 14px;
            padding-bottom: 2px;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
        }

        /* CSS */


        .js-count-particles {
            font-size: 1.1em;
        }

        @keyframes slideLeft {
            from {
                opacity: 0;
                transform: translateX(-100%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideRight {
            from {
                opacity: 0;
                transform: translateX(100%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(100%);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes blur-to-clear {
            0% {
                filter: blur(10px);
                opacity: 0;
            }

            100% {
                filter: blur(0);
                opacity: 1;
            }
        }

        @keyframes colorChange {
            0% {
                background-color: red;
            }

            25% {
                background-color: blue;
            }

            50% {
                background-color: green;
            }

            75% {
                background-color: yellow;
            }

            100% {
                background-color: red;
            }
        }


        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
                /* Atas */
            }

            40% {
                transform: translateY(-30px);
                /* Loncat ke atas */
            }

            60% {
                transform: translateY(-15px);
                /* Kembali sebagian ke atas */
            }
        }

        .bounce-effect {
            animation: bounce 5s ease infinite;
            /* Ubah durasi dan timing sesuai keinginan */
        }

        .main {
            height: 800px;
        }

        .main1 {
            height: 1000px;
        }

        /* Terapkan animasi ke elemen */
        .color-change {
            animation: colorChange 4s infinite;
            /* Ubah durasi sesuai keinginan */
        }


        .animate-slide-bottom {
            animation: blur-to-clear 5s forwards;
            /* Gunakan animasi blur-to-clear selama 1 detik */
        }

        .animate-slide-up {
            animation: slideUp 3s forwards;
            animation-delay: 0, 5s;
        }

        .animate-slide-left {
            animation: slideLeft 3s forwards;
            animation-delay: 0, 5s;
        }


        .animate-slide-right {
            animation: slideRight 3s forwards;
            animation-delay: 0, 5s;
        }

        .custom-text {
            font-family: 'Sofia', 'cursive';

        }

        .custom-text2 {
            font-family: 'Roboto', 'sans-serif';
        }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });


        // Set your target date (replace this with your desired target date)
        const targetDate = new Date('2023-12-17T23:59:59');

        function updateCountdown() {
            const currentDate = new Date();
            const timeDifference = targetDate - currentDate;

            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            document.getElementById('days').innerText = days;
            document.getElementById('hours').innerText = hours;
            document.getElementById('minutes').innerText = minutes;
            document.getElementById('seconds').innerText = seconds;
        }

        // Update the countdown every second
        setInterval(updateCountdown);

        // Initial call to set the initial values
        updateCountdown();


        // untuk manggil salju
        var count_particles, stats, update;
        stats = new Stats;
        stats.setMode(0);
        stats.domElement.style.position = 'absolute';
        stats.domElement.style.left = '0px';
        stats.domElement.style.top = '0px';
        document.body.appendChild(stats.domElement);
        count_particles = document.querySelector('.js-count-particles');
        update = function() {
            stats.begin();
            stats.end();
            if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
            }
            requestAnimationFrame(update);
        };
        requestAnimationFrame(update);
    </script>
    <script type="text/javascript">
        var el = document.getElementById("audioNotifikasi");

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
    </script>

</body>

</html>