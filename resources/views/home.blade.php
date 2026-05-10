<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<body class="bg-gray-950 text-white">

<!-- NAVBAR -->
<nav class="fixed top-0 left-0 w-full flex justify-between items-center p-6 
bg-gray-900/70 backdrop-blur-md z-50 border-b border-white/10">
    <h1 class="text-xl font-bold">Sofia.dev</h1>
    <div class="space-x-6">
        <a href="#" class="hover:text-blue-400">Home</a>
        <a href="#" class="hover:text-blue-400">About</a>
        <a href="#" class="hover:text-blue-400">Projects</a>
        <a href="#" class="hover:text-blue-400">Contact</a>
    </div>
</nav>

<!-- HERO -->
<!-- <section class="text-center py-28">

    <h2 class="text-5xl font-bold">
        Hi, I'm <span class="text-blue-400">Sofia</span> 👋
    </h2>

    <p class="mt-4 text-lg text-gray-300">
        I am a <span id="typewriter" class="text-blue-400 font-semibold"></span>
    </p>

    <p class="text-gray-400 mt-2 text-lg">
        Junior Web Developer | Laravel & JavaScript
    </p>

    <button class="mt-8 px-6 py-3 bg-blue-600 hover:bg-blue-700 rounded-xl transition transform hover:scale-105">
        View My Work
    </button>

</section> -->

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
        <div class="mt-8 flex justify-center gap-4">
            <a href="#projects"
               class="px-6 py-3 bg-blue-600 hover:bg-blue-700 rounded-xl transition transform hover:scale-105">
                View Projects
            </a>

            <a href="#contact"
               class="px-6 py-3 border border-gray-400 hover:border-blue-400 rounded-xl transition transform hover:scale-105">
                Contact Me
            </a>
        </div>

    </div>

</section>

<!-- ABOUT -->
<section class="px-10 py-16 bg-gray-900">
    <h3 class="text-3xl font-bold mb-4">About Me</h3>
    <p class="text-gray-300 leading-7">
        I am a beginner web developer focused on Laravel, PHP, and frontend design.
        I love building clean, modern, and responsive web applications.
    </p>
</section>

<!-- SKILLS -->
<section class="px-10 py-16">
    <h3 class="text-3xl font-bold mb-6">Skills</h3>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-gray-800 p-4 rounded-xl text-center">HTML</div>
        <div class="bg-gray-800 p-4 rounded-xl text-center">CSS</div>
        <div class="bg-gray-800 p-4 rounded-xl text-center">JavaScript</div>
        <div class="bg-gray-800 p-4 rounded-xl text-center">Laravel</div>
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