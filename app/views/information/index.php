<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>
<body class="bg-gradient-to-b from-sky-950 to-cyan-200">

    <!-- HERO START -->
    <section>
        <div class="relative bg-cover bg-center h-screen" style="background-image: url('<?= BASEURL; ?>/img/bg-info.jpg'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-20"></div>
            <div class="absolute inset-0"></div>
                <div class="relative flex items-center justify-center h-full">
                    <div class="text-center text-white " data-aos="fade-up">
                        <h2 class="text-4xl font-bold mb-4" data-aos="fade-up">
                            <?= $data['info'] ?>
                        </h2>
                        <p class="mx-32" data-aos="fade-up" data-aos-delay="200">
                            <?= $data['infodesk'] ?>
                        </p>

                        <a href="#destination">
                            <button class="px-5 py-1  mt-5 border-2 rounded-full hover:text-white hover:backdrop-blur-sm hover:border-2 transform transition-transform hover:scale-75 duration-1000" data-aos-delay="400">
                                Start Journey
                            </button>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <!-- HERO END -->

    <!-- Destination -->
    <section id="destination" >
        <div class="container mt-5 ">
            <h2 class="text-center text-white text-2xl font-bold mb-8 mt-16" data-aos="fade-up">Destination Information</h2>
            <!-- Looping Konten -->
            <?php foreach ($data['inf'] as $index => $inf): ?>
                <!-- Card Info -->
                <div class="flex flex-col lg:even:flex-row lg:odd:flex-row-reverse items-center bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 mb-6 p-6" data-aos="fade-up" data-aos-delay="100">
                    <!-- Gambar konten -->
                    <div class="w-full lg:w-1/3 mb-4 lg:mb-0" data-aos="zoom-in" data-aos-delay="150">
                        <?php if (!empty($inf['image'])): ?>
                            <img src="<?= BASEURL; ?>/img/Destination/<?= htmlspecialchars($inf['image']); ?>"
                                alt="<?= htmlspecialchars($inf['title']); ?>"
                                class="w-96 h-64 object-cover hover:scale-105 transition-transform duration-300 rounded-2xl">
                        <?php else: ?>
                            <img src="<?= BASEURL; ?>/img/Destination/default.jpg" 
                                alt="Default product image"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        <?php endif; ?>
                    </div> 
                    <!-- Deskripsi konten -->
                    <div class="w-full lg:w-2/3" data-aos="fade-left" data-aos-delay="200">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4"><?= $inf['title']; ?></h3>
                        <p class="text-gray-600 mb-4"><?= $inf['deskripsi']; ?></p>
                        <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                            <a href="<?= $inf['links']; ?>">More Information</a>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Destination End -->

    <!-- AOS Library -->
    <script>
    AOS.init({
        duration: 1200, // Durasi animasi dalam milidetik
        once: true,     // Animasi hanya akan diputar sekali
        });
    </script>
    <!-- AOS END -->

</body>
</html>