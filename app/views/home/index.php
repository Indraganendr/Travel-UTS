<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gradient-to-b from-sky-950 to-cyan-200">

     <!-- HERO START -->
     <section>
        <div class="relative bg-cover bg-center h-screen" style="background-image: url('<?= BASEURL; ?>/img/bg-home.jpg'); background-size: cover; background-position: center;">
            <div class="absolute inset-0"></div>
                <div class="relative flex items-center justify-center h-full">
                    <div class="text-center text-white" data-aos="fade-up">
                        <h2 class="text-4xl font-bold mb-4" data-aos="fade-up">
                            <?= $data['nama'] ?>
                        </h2>
                        <p class="mx-32" data-aos="fade-up" data-aos-delay="200">
                            <?= $data['desk'] ?>
                        </p>
                        <a href="#information">
                            <button class="px-5 py-1  mt-5 border-2 rounded-full hover:text-white hover:backdrop-blur-sm hover:border-2 transform transition-transform hover:scale-75 duration-1000"  data-aos-delay="400">
                                More Information
                            </button>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <!-- HERO END -->

    <!-- INFORMATION -->
    <section id="information" class=" p-8" data-aos="fade-up">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-center text-white text-2xl font-bold mb-8 mt-16"  data-aos="fade-down" data-aos-delay="100">Information</h2>
            <div class="relative flex flex-col items-center">
                <div id="garis-teng ah"  class="absolute h-full border-l-2 border-white" data-aos="fade-down" data-aos-delay="200"></div>
                <div class="flex flex-col md:flex-row items-center justify-between w-full mb-8" data-aos="fade-up" data-aos-delay="300">

                    <!-- BEST TRAVEL PROVIDER -->
                    <div class="w-full md:w-5/12 mb-8 md:mb-0 md:mr-4 flex flex-col items-end backdrop-blur" data-aos="fade-right" data-aos-delay="400">
                        <div class="rounded-lg p-6 w-full md:w-10/12 shadow-xl transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                            <h3 class="text-lg text-white font-semibold mb-2">Best travel provider</h3>
                            <p class="text-sm text-white mb-4">
                                Your travel memories and stories are our top priority. We ensure that the entire process of your holiday goes well and is unforgettable.
                            </p>
                            <div class="flex justify-center items-center rounded-lg">
                                <img src="<?= BASEURL; ?>/img/Informasi/Gambar Informasi 1.jpg" alt="" class="rounded-lg shadow-lg">
                            </div>
                        </div>
                    </div>


                    <!-- EXPERIENCED AGENT -->
                    <div class="w-full md:w-5/12 mb-8 md:mb-0 md:ml-4 flex flex-col items-start backdrop-blur" data-aos="fade-left" data-aos-delay="500">
                        <div class="rounded-lg shadow-2xl p-6 w-full md:w-10/12 transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                            <h3 class="text-lg text-white font-semibold mb-2">	
                                Experienced agent</h3>
                            <p class="text-sm text-white mb-4">
                                Our experience and flying hours have proven that the satisfaction of customers who keep coming back and the various things we have gone through are our basis for providing the best and always being ready to provide solutions for you.
                            </p>
                            <div class="flex justify-center items-center bg-gray-600 rounded-lg">
                                <img src="<?= BASEURL; ?>/img/Informasi/Gambar Informasi 2.jpg" alt="" class="rounded-lg shadow-xl">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- BEST AND PERSONAL SERVICE -->
                <div class="flex flex-col md:flex-row items-center justify-between w-full mb-8">
                    <div class="w-full md:w-5/12 mb-8 md:mb-0 md:mr-4 flex flex-col items-end backdrop-blur" data-aos="fade-right" data-aos-delay="400">
                        <div class="rounded-lg shadow-2xl p-6 w-full md:w-10/12 transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                            <h3 class="text-lg text-white font-semibold mb-2">Best and Personal Service</h3>
                            <p class="text-sm text-white mb-4">
                                We know that your interests are more important than any program we can offer. Providing the best service for each individual is our principle in perfecting your trip.
                            </p>
                            <div class="flex justify-center items-center bg-gray-600 rounded-lg">
                                <img src="<?= BASEURL; ?>/img/Informasi/Gambar Informasi 3.jpg" alt="" class="rounded-lg shadow-2xl">
                            </div>
                        </div>
                    </div>


                    <!-- FREE FROM PROBLEMS -->
                    <div class="w-full md:w-5/12 mb-8 md:mb-0 md:ml-4 flex flex-col items-start" data-aos="fade-left" data-aos-delay="500">
                        <div class="rounded-lg shadow-2xl p-6 w-full md:w-10/12 transform transition duration-500 hover:scale-105 hover:shadow-2xl backdrop-blur">
                            <h3 class="text-white text-lg font-semibold mb-2">Free from problems</h3>
                            <p class="text-sm text-white mb-4">
                                Through comprehensive service in all aspects, you don't need to take care of many things and make your holiday like work. We will do it for you so you can enjoy every moment without any problems.
                            </p>
                            <div class="flex justify-center items-center bg-gray-600 rounded-lg">
                                <img src="<?= BASEURL; ?>/img/Informasi/Gambar Informasi 4.jpg" alt="" class="rounded-lg">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- EXCLUSIVE DESTINATION -->
                <div class="flex flex-col md:flex-row items-center justify-between w-full mb-8" >
                    <div class="w-full md:w-5/12 mb-8 md:mb-0 md:mr-4 flex flex-col items-end backdrop-blur" data-aos="fade-right" data-aos-delay="400">
                        <div class="rounded-lg shadow-2xl p-6 w-full md:w-10/12 transform transition duration-500 hover:scale-105 hover:shadow-2xl backdrop-blur">
                            <h3 class="text-lg text-white font-semibold mb-2">Exclusive Destinations</h3>
                            <p class="text-sm text-white mb-4">
                                Unique and luxurious tourist spots that offer experiences that cannot be found elsewhere. These destinations usually have limited access and highly personalized services.
                            </p>
                            <div class="flex justify-center items-center bg-gray-600 rounded-lg">
                                <img src="<?= BASEURL; ?>/img/Informasi/Gambar Informasi 5.jpg" alt="" class="rounded-lg">
                            </div>
                        </div>
                    </div>

                    <!-- FREE FROM PROBLEMS -->
                    <div class="w-full md:w-5/12 mb-8 md:mb-0 md:ml-4 flex flex-col items-start  backdrop-blur" data-aos="fade-left" data-aos-delay="500">
                        <div class="rounded-lg shadow-2xl p-6 w-full md:w-10/12 transform transition duration-500 hover:scale-105 hover:shadow-2xl backdrop-blur">
                            <h3 class="text-white text-lg font-semibold mb-2">Sustainable Tourism</h3>
                            <p class="text-sm text-white mb-4">
                                Approach to tourism that considers the environmental, economic, and social impacts of tourism activities. The goal is to ensure that tourist destinations remain beautiful and enjoyable for future generations.
                            </p>
                            <div class="flex justify-center items-center bg-gray-600 rounded-lg">
                                <img src="<?= BASEURL; ?>/img/Informasi/Gambar Informasi 6.jpg" alt="" class="rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- INFORMATION END -->

    <!-- Service -->
    <section class="">
        <div class="max-w-4xl mx-auto text-center px-4 text-white">
            <!-- Judul dan Deskripsi -->
            <h2 class="text-2xl font-semibold text-white-800 mb-4" data-aos="fade-up">Other Services</h2>
            <p class="text-white-600 mb-12" data-aos="fade-up" data-aos-delay="200">
                In principle, because what we offer is an unforgettable journey and experience, we understand that there are important elements that cannot be separated from just planning, but also ensuring that your travel process is perfectly accommodated. Here are other services that we provide for you:
            </p>
            
            <!-- Service Items Container -->
            <div class="flex flex-wrap justify-center gap-8">
                <!-- Item 1 -->
                <div class="w-full md:w-1/4 text-center text-white">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-ticket-alt text-white-600 text-5xl" data-aos="fade-up"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white-800 mb-2" data-aos="fade-up">Ticket & Attraction</h3>
                    <p class="text-ehitr-600 text-sm" data-aos="fade-up" data-aos-delay="200">
                        No need to imagine long queues to enter amusement parks and various attractions every day.
                    </p>
                </div>

                <!-- Item 2 -->
                <div class="w-full md:w-1/4 text-center text-white">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-car-side text-white-600 text-5xl" data-aos="fade-up"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white-800 mb-2" data-aos="fade-up">Car Hire</h3>
                    <p class="text-white-600 text-sm" data-aos="fade-up" data-aos-delay="200">
                        In order to explore every corner, we have a car rental service at every destination, so that you can...
                    </p>
                </div>

                <!-- Item 3 -->
                <div class="w-full md:w-1/4 text-center text-white">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-passport text-white-600 text-5xl" data-aos="fade-up"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white-800 mb-2" data-aos="fade-up">Passport & Visa</h3>
                    <p class="text-ehitr-600 text-sm" data-aos="fade-up" data-aos-delay="200">
                        Don't let your journey be hampered by time-consuming document processing. We provide
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

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