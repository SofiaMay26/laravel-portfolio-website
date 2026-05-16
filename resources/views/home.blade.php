<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<body class="scroll-smooth bg-gray-950 text-white">

<!-- Navbar -->
<nav class="fixed top-0 left-0 w-full z-50 bg-gray-900/80 backdrop-blur-md border-b border-gray-800 shadow-lg">

    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
        <a href="#"
           class="text-2xl font-bold text-white tracking-wide hover:text-blue-400 transition duration-300">
            Sofia.dev
        </a>

        <!-- Menu -->
        <div class="hidden md:flex items-center gap-8">

            <a href="#home"
               class="relative text-gray-300 hover:text-blue-400 transition duration-300 group">

                Home

                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </a>

            <a href="#about"
               class="relative text-gray-300 hover:text-blue-400 transition duration-300 group">

                About

                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </a>

            <a href="#projects"
               class="relative text-gray-300 hover:text-blue-400 transition duration-300 group">

                Projects

                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </a>

            <a href="#contact"
               class="relative text-gray-300 hover:text-blue-400 transition duration-300 group">

                Contact

                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-400 transition-all duration-300 group-hover:w-full"></span>
            </a>

        </div>

        <!-- Resume Button -->
        <a href="/sofia_CV/sofia_CV.pdf" download
   class="px-5 py-2 bg-blue-600 rounded-xl text-white">
   Download Resume
</a>

    </div>

</nav>



<!-- HERO WITH VIDEO BACKGROUND -->
<section class="relative h-screen flex items-center justify-center text-center overflow-hidden">

    <!-- Background Video -->
    <video autoplay muted loop playsinline class="absolute w-full h-full object-cover z-0">
    <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
</video>

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- Content -->
    <div class="relative z-10 px-6">

        <h1 class="text-5xl md:text-6xl font-bold text-white">
            Hi, I'm <span class="text-blue-400">Sofia</span> 👋
        </h1>

        <p class="mt-4 text-xl text-gray-300">
            I am a <span id="typewriter" class="text-blue-400 font-semibold"></span>
        </p>

        <p class="mt-3 text-gray-400">
            Building modern Laravel & JavaScript web applications
        </p>

        <!-- Buttons -->
<div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">

   <!-- Buttons -->
<div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">

    <!-- My Works Button -->

    <!-- GitHub / Portfolio Link -->
    <a href="https://github.com/SofiaMay26"
    title="My Works"
       target="_blank"
       class="px-8 py-3 border border-gray-400 hover:border-blue-400 text-white font-semibold rounded-xl transition duration-300 transform hover:scale-105 hover:bg-white/5">
       
        Visit My GitHub
    </a>

</div>

  
    

</div>

    </div>

</section>

<!-- About Me Section -->
<section id="about"
         class="min-h-screen bg-gray-950 text-white flex items-center justify-center px-6 py-20">

    <div class="max-w-6xl w-full grid md:grid-cols-2 gap-12 items-center">

        <!-- Left Side Image -->
        <div class="flex justify-center">

            <div class="relative group">

                <!-- Glow Effect -->
                <div class="absolute inset-0 bg-blue-500 blur-3xl opacity-20 group-hover:opacity-40 transition duration-500 rounded-full"></div>

                <!-- Profile Image -->
                <img src="/images/profile_pic.jpg"
                     
                     alt="Profile"
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
                <span class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                    HTML5
                </span>
                <span class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                    CSS
                </span>
                 <span class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                    Bootstrap
                </span>

                <span class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                    Laravel
                </span>

                

                <span class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                    Tailwind CSS
                </span>

                <span class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                    JavaScript
                </span>

                <span class="px-4 py-2 bg-gray-800 rounded-xl border border-gray-700 hover:border-blue-400 transition">
                    MySQL
                </span>

            </div>

           
            

        </div>

    </div>

</section>
<section class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="w-full max-w-2xl bg-white shadow-lg rounded-2xl p-8">

        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">
            Contact Me
        </h2>

        <p class="text-center text-gray-500 mb-8">
            Got a project or question? Send me a message 👇
        </p>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-5 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
            @csrf

           {{-- Name --}}
<input
    type="text"
    name="name"
    placeholder="Your Name"
    class="w-full border border-gray-300 rounded-lg p-3 text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400"
    required
>

{{-- Email --}}
<input
    type="email"
    name="email"
    placeholder="Your Email"
    class="w-full border border-gray-300 rounded-lg p-3 text-black placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400"
    required
>

            {{-- Message --}}
           <textarea
    name="message"
    rows="5"
    placeholder="Your Message"
    class="w-full border border-gray-300 rounded-lg p-3 text-black focus:outline-none focus:ring-2 focus:ring-blue-400"
    required
></textarea>

            {{-- Button --}}
            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition"
            >
                Send Message
            </button>
        </form>
    </div>
</section>

<!-- PROJECTS -->
<section class="px-10 py-16 bg-gray-900">
    <h3 class="text-3xl font-bold mb-6">Projects</h3>

    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-gray-800 p-5 rounded-xl">
            <h4 class="font-bold">E-Commerce App</h4>
            <p class="text-gray-400 text-sm">Laravel + Bootstrap</p>
        </div>

        <div class="bg-gray-800 p-5 rounded-xl">
            <h4 class="font-bold">Portfolio Website</h4>
            <p class="text-gray-400 text-sm">Laravel + Tailwind</p>
        </div>

        <div class="bg-gray-800 p-5 rounded-xl">
            <h4 class="font-bold">Task Manager</h4>
            <p class="text-gray-400 text-sm">PHP + MySQL</p>
        </div>
    </div>
</section>



<!-- CONTACT -->
<section class="px-10 py-16 text-center">
    <h3 class="text-3xl font-bold">Contact Me</h3>
    <p class="text-gray-400 mt-2">email: tempsofiemae@gmail.com</p>
    <p class="text-gray-400 mt-2">mobile number: 0967-387-2723</p>
</section>

<!-- FOOTER -->
<footer class="text-center p-6 bg-gray-900 text-gray-500">
    © 2026 Sofia May. All rights reserved.
</footer>


<script src="{{ asset('js/hero.js') }}"></script>
<script src="{{ asset('js/typewriter_animation.js') }}"></script>
</body>

</html>