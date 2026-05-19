<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sofia May | Laravel Developer Portfolio</title>

    <!-- SEO (important for hiring visibility) -->
    <meta name="description" content="Portfolio of Sofia May - Laravel and Frontend Web Developer">
    <meta name="keywords" content="Laravel, PHP, Web Developer, Portfolio, JavaScript, Frontend Developer">
    <meta name="author" content="Sofia May">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Optional: Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">

</head>


<body class="scroll-smooth bg-gray-950 text-white">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-gray-900/80 backdrop-blur-md border-b border-gray-800 shadow-lg">

        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <!-- Logo -->
            <a href="#"
                class="text-2xl font-black tracking-tight text-white transition duration-300 hover:text-blue-400">

                <span class="text-blue-400">&lt;</span>
                SofiaMay.dev
                <span class="text-blue-400">/&gt;</span>

            </a>

            <div class="flex gap-4 mt-6">



            </div>

            <!-- Menu -->
            <div class="hidden md:flex items-center gap-8">

                <a href="#home"
                    class="relative text-gray-300 hover:text-blue-400 transition duration-300 group
               ">

                    Home

                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="#about" class="relative text-gray-300 hover:text-blue-400 transition duration-300 group">

                    About

                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="#projects" class="relative text-gray-300 hover:text-blue-400 transition duration-300 group">

                    Projects

                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="#contact" class="relative text-gray-300 hover:text-blue-400 transition duration-300 group">

                    Contact

                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
                </a>

            </div>

            {{-- Login Button --}}


            <!-- Resume Button -->
            <a href="/sofia_CV/sofia_CV.pdf" download class="px-5 py-2 bg-blue-600 rounded-xl text-white">
                Download Resume
            </a>

        </div>


    </nav>

    <section id="home" class="min-h-screen">

        <!-- HERO WITH VIDEO BACKGROUND -->
        <section class="relative h-screen flex items-center justify-center text-center overflow-hidden">

            <!-- Background Video -->
            <video autoplay muted loop playsinline class="absolute w-full h-full object-cover z-0">
                <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
            </video>

            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-black/70"></div>

            <!-- Content -->
            <div class="relative z-10 px-6 text-center max-w-3xl mx-auto">

                <h1 class="text-5xl md:text-6xl font-bold text-white leading-tight">
                    Hi, I'm <span class="text-blue-400">Sofia May M. Temperante</span> 👋
                </h1>

                <p class="mt-5 text-xl md:text-2xl text-gray-300">
                    I am a
                    <span id="typewriter" class="text-blue-400 font-semibold"></span>
                </p>

                <p class="mt-4 text-gray-400 text-base md:text-lg">
                    Building modern Laravel & JavaScript web applications with clean UI, performance, and user-focused
                    design.
                </p>

                <!-- Buttons -->
                <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">

                    <a href="#projects"
                        class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl transition transform hover:scale-105">
                        View Projects
                    </a>

                    <a href="#contact"
                        class="px-6 py-3 border border-gray-400 text-white hover:border-blue-400 rounded-xl transition transform hover:scale-105">
                        Contact Me
                    </a>

                    <a href="https://github.com/SofiaMay26" title="My Works" target="_blank"
                        class="px-8 py-3 border border-gray-400 hover:border-blue-400 text-white font-semibold rounded-xl transition duration-300 transform hover:scale-105 hover:bg-white/5">

                        Visit My GitHub
                    </a>

                </div>

            </div>



            </div>

        </section>

        <!-- About Me Section -->
        <section id="about" class="min-h-screen bg-gray-950 text-white flex items-center justify-center px-6 py-20">

            <div class="max-w-6xl w-full grid md:grid-cols-2 gap-12 items-center">

                <!-- Left Side Image -->
                <div class="flex justify-center">

                    <div class="relative group">

                        <!-- Glow Effect -->
                        <div
                            class="absolute inset-0 bg-blue-500 blur-3xl opacity-20 group-hover:opacity-40 transition duration-500 rounded-full">
                        </div>

                        <!-- Profile Image -->
                        <img src="/images/profile_pic.jpg" alt="Profile"
                            class="relative w-72 h-72 object-cover rounded-3xl border-4 border-gray-800 shadow-2xl transition duration-500 group-hover:scale-105">

                    </div>

                </div>

                <!-- Right Side Content -->
                <div>

                    <p class="text-blue-400 font-semibold tracking-widest uppercase mb-3">
                        About Me
                    </p>

                    <h2 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                        Aspiring <span class="text-blue-400">Web Developer</span>
                    </h2>

                    <p class="text-gray-400 leading-relaxed text-lg mb-6">
                        Hi! I'm Sofia, an aspiring web developer passionate about
                        building modern and responsive websites using Laravel,
                        Tailwind CSS, JavaScript, and MySQL.
                    </p>

                    <p class="text-gray-400 leading-relaxed text-lg mb-8">
                        I enjoy creating clean UI designs, learning new technologies,
                        and developing projects that improve my skills in frontend
                        and backend development.
                    </p>

                    <!-- Skills -->
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span
                            class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                            HTML5
                        </span>
                        <span
                            class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                            CSS
                        </span>
                        <span
                            class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                            Bootstrap
                        </span>

                        <span
                            class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                            Laravel
                        </span>



                        <span
                            class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                            Tailwind CSS
                        </span>

                        <span
                            class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                            JavaScript
                        </span>

                        <span
                            class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                            MySQL
                        </span>

                    </div>




                </div>

            </div>

        </section>




        <section id="projects" class="py-20 bg-gray-50">
            <div class="max-w-6xl mx-auto px-6">

                <!-- Section Title -->
                <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-12">
                    My Projects
                </h2>

                <!-- Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">





                    <!-- Project Card 1(First Website)-->
                    <div
                        class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">

                        <!-- Video -->
                        <video class="w-full h-48 object-cover" autoplay muted loop playsinline>
                            <source src="{{ asset('videos/my_first_website.mp4') }}" type="video/mp4">
                        </video>

                        <!-- Content -->
                        <div class="p-5">

                            <!-- Title -->
                            <h3 class="text-xl font-bold text-gray-800 mb-3">
                                My First Website!
                            </h3>

                            <!-- Description -->
                            <p class="text-gray-600 mb-4">
                                My very first website project where I started learning HTML, CSS, and JavaScript. This
                                project helped me understand responsive layouts and basic web development fundamentals.
                            </p>

                            <!-- Tech Stack -->
                            <div class="flex flex-wrap gap-2 mb-5">
                                <span class="text-xs bg-orange-100 text-orange-600 px-2 py-1 rounded"> HTML5 </span>
                                <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded"> CSS & UI
                                    Design</span>
                                <span class="text-xs bg-yellow-100 text-yellow-600 px-2 py-1 rounded">JavaScript</span>
                            </div>

                            <!-- Button -->
                            <a href="https://github.com/SofiaMay26/sofia-business-website-2024.git"
                                class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                                View Project
                            </a>

                        </div>
                    </div>

                    <!-- Project Card 2 (Website Assignment)-->
                    <div
                        class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">

                        <video class="w-full h-48 object-cover" autoplay muted loop playsinline>
                            <source src="{{ asset('videos/website_assignment.mp4') }}" type="video/mp4">
                        </video>



                        <div class="p-5">
                            <h3 class="text-xl font-bold text-gray-800 mb-3">
                                Website Assignment
                            </h3>
                            <p class="text-gray-600 mb-4">
                                A responsive website project showcasing modern UI design and web development features.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">HTML5</span>
                                <span class="text-xs bg-purple-100 text-purple-600 px-2 py-1 rounded">Bootstrap</span>
                                <span class="text-xs bg-yellow-100 text-yellow-600 px-2 py-1 rounded">JS</span>

                            </div>

                            <div class="flex gap-3">
                                <a href="https://github.com/SofiaMay26/web-builder-assignment.git" target="_blank"
                                    class="flex-1 text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                                    View Project
                                </a>


                            </div>
                        </div>
                    </div>

                    <!-- Project Card 3 (SPC Website 2025)-->
                    <div
                        class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-2">

                        <video class="w-full h-48 object-cover" autoplay muted loop playsinline>
                            <source src="{{ asset('videos/spc_computer_hardware.mp4') }}" type="video/mp4">
                        </video>



                        <div class="p-5">

                            <h3 class="text-xl font-bold text-gray-800 mb-3 ">
                                SPC Computer Hardware 2025
                            </h3>

                            <p class="text-gray-600 mb-4">
                                A responsive computer hardware e-commerce website showcasing PC parts, accessories, and
                                product listings built using Laravel and Tailwind CSS.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded">HTML5</span>
                                <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">CSS & UI
                                    Design</span>
                                <span class="text-xs bg-green-100 text-green-600 px-2 py-1 rounded">Javascript</span>
                                <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Bootstrap</span>
                            </div>

                            <div class="flex gap-3">
                                <a href="https://github.com/marvinjagonio/Sofias_Final_Project.git" target="_blank"
                                    class="flex-1 text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                                    View Project
                                </a>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- SEND ME A MESSAGE --}}

        <section class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
            <div class="w-full max-w-2xl bg-white shadow-lg rounded-2xl p-8">

                <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">
                    Contact Me
                </h2>

                <p class="text-center text-gray-500 mb-8">
                    Got a project or question? Send me a message 👇
                </p>

                {{-- Success Message --}}
                @if (session('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-5 text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                    @csrf

                    {{-- Name --}}
                    <input type="text" name="name" placeholder="Your Name"
                        class="w-full border border-gray-300 rounded-lg p-3 text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>

                    {{-- Email --}}
                    <input type="email" name="email" placeholder="Your Email"
                        class="w-full border border-gray-300 rounded-lg p-3 text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>

                    {{-- Message --}}
                    <textarea name="message" rows="5" placeholder="Your Message"
                        class="w-full border border-gray-300 rounded-lg p-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required></textarea>

                    {{-- Button --}}
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Send Message
                    </button>
                </form>
            </div>
        </section>



        <!-- CONTACT SECTION -->
        <section id="contact" class="py-20 bg-white">
            <div class="max-w-4xl mx-auto px-6 text-center">

                <h3 class="text-3xl md:text-4xl font-bold text-gray-800">
                    Get In Touch
                </h3>

                <p class="text-gray-500 mt-3">
                    Feel free to contact me for job opportunities or collaborations.
                </p>

                <!-- Contact Cards -->
                <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Email Card -->
                    <div class="bg-gray-50 rounded-2xl shadow-md p-6 hover:shadow-xl transition">
                        <div class="text-blue-600 text-2xl mb-2">📧</div>
                        <h4 class="font-semibold text-gray-800">Email</h4>
                        <p class="text-gray-600 mt-2">tempsofiemae@gmail.com</p>
                    </div>

                    <!-- Phone Card -->
                    <div class="bg-gray-50 rounded-2xl shadow-md p-6 hover:shadow-xl transition">
                        <div class="text-green-600 text-2xl mb-2">📱</div>
                        <h4 class="font-semibold text-gray-800">Mobile</h4>
                        <p class="text-gray-600 mt-2">0967-387-2723</p>
                    </div>

                </div>

                <div class="mt-10">
                    <div class="mt-10">
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=tempsofiemae@gmail.com" target="_blank"
                            class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700">
                            Send Email
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="bg-gray-900 text-gray-400 py-6">
            <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">

                <p class="text-sm">
                    © 2026 Sofia May. All rights reserved.
                </p>

                <div class="flex gap-4 mt-3 md:mt-0">
                    <a href="#home" class="hover:text-white transition">Home</a>
                    <a href="#projects" class="hover:text-white transition">Projects</a>
                    <a href="#contact" class="hover:text-white transition">Contact</a>
                </div>

            </div>
        </footer>
        <!-- Custom JavaScript -->
        <script src="{{ asset('js/hero.js') }}"></script>

        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
