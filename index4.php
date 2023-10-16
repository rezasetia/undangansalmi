<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="bg-cover bg-center w-screen h-screen  " style="background-image:url('4.png')">

    <div class="snowflakes-container" aria-hidden="true">
    <div class="snowflake">

        <div class="relative" id="particles-js"></div>
        <div class="  w-full h-screen flex ">
            <!-- row 1 -->
            <div class="w-1/3 h-28  flex justify-start  ">
                <img src="a2.png" alt="Gambar2" width="500" class="  animate-slide-left ">
            </div>
            <!-- row2 -->
            <div class="w-1/3 h-screen  ">

                <div class=" mt-10 relative right-24" style="width: 350px; ">
                    <img src="Group 1.png" alt="Gambar4" width="100%" class=" animate-slide-bottom ">
                </div>
                <div class=" mt-96 text-center  text-sm font-semibold animate-slide-up custom-text2" style="color: 00000;">Yth Bapak/Ibu <br>/Saudara</div>

                <div class=" mt-2 text-center text-lg  font-semibold animate-slide-up custom-text2  " style="color: 00000;">Nama Tamu</div>
                <div class=" mt-9 flex justify-center items-center">
                    <!-- <button class="bg-amber-700 text-white px-2 py-2 text-xs rounded-lg bounce-effect ">
                        Buka Undangan
                    </button> -->
                </div>
            </div>
            <!-- row3 -->
            <div class="w-1/3 h-28  flex  justify-end">
                <img src="a3.png" alt="Gambar3" width="500" class=" animate-slide-right">
            </div>
        </div>
    </div>
    </div>
    <style>
        .snowflakes-container {
            position: fixed;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 9999;
        }

        .snowflake {
            position: absolute;
            background: #fff;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            animation: fall linear infinite;
        }

        @keyframes fall {
            to {
                transform: translateY(100vh);
            }
        }
    </style>

    <script>
        const numberOfSnowflakes = 50; // Adjust the number of snowflakes
        const container = document.querySelector('.snowflakes-container');

        for (let i = 0; i < numberOfSnowflakes; i++) {
            const snowflake = document.createElement('div');
            snowflake.className = 'snowflake';
            snowflake.style.left = `${Math.random() * 100}vw`;
            snowflake.style.animationDuration = `${Math.random() * 5 + 2}s`;
            snowflake.style.animationDelay = `${Math.random() * 2}s`;
            container.appendChild(snowflake);
        }
    </script>
    <!-- <script src="script.js"></script> -->
</body>

</html>