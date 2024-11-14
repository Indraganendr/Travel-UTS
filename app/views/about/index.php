<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>
<body class="bg-gradient-to-b from-sky-950 to-cyan-200">
    <div class="container mx-auto px-4 py-12">
        <div class="text-center mb-12" data-aos="fade-up">
        <h2 class="text-3xl font-semibold text-white" data-aos="fade-up">
            <?= $data['who'] ?>
        </h2>
        <div class="h-1 w-16 bg-red-500 mx-auto my-4"></div>
        <p class="text-lg max-w-2xl mx-auto text-white">
            <?= $data['whoinfo'] ?>
        </p>
        </div>

        <div class="text-center" data-aos="fade-up">
        <h2 class="text-3xl font-semibold text-white" data-aos="fade-up">
            <?= $data['why'] ?>
        </h2>
        <div class="h-1 w-16 bg-red-500 mx-auto my-4"></div>
        <p class="text-lg max-w-2xl mx-auto text-white">
            <?= $data['whyinfo'] ?>
        </p>
        </div>
  </div>

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