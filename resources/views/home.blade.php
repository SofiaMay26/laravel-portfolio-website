<!doctype html>
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

    <!-- Swiper  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/1x1.JPG') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/1x1.JPG') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

</head>


<body class="scroll-smooth bg-gray-950 text-white">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-gray-900/80 backdrop-blur-md border-b border-gray-800 shadow-lg">

        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <!-- Logo -->
            <a href="#"
                class="flex items-center gap-3 text-2xl font-black tracking-tight text-white transition duration-300 hover:text-pink-400">

                <!-- Profile Image -->
                <img src="{{ asset('images/1x1.JPG') }}" alt="Sofia May"
                    class="w-10 h-10 rounded-full object-cover border-2 border-pink-400 shadow-lg">

                <!-- Logo Text -->
                <span>
                    <span class="text-pink-400">&lt;</span>
                    Laravel Portfolio
                    <span class="text-pink-400">/&gt;</span>
                </span>

            </a>

            <div class="flex gap-4 mt-6">



            </div>

            <!-- Menu -->
            <div class="hidden md:flex items-center gap-8">

                <a href="#home"
                    class="relative text-gray-300 hover:text-pink-400 transition duration-300 group
               ">

                    Home

                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-pink-400 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="#about" class="relative text-gray-300 hover:text-pink-400 transition duration-300 group">

                    About

                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-pink-400 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="#projects" class="relative text-gray-300 hover:text-pink-400 transition duration-300 group">

                    Projects

                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-pink-400 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="#contact" class="relative text-gray-300 hover:text-pink-400 transition duration-300 group">

                    Contact

                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-pink-400 transition-all duration-300 group-hover:w-full"></span>
                </a>

            </div>

            {{-- Login Button --}}


            <!-- Resume Button -->
            <a href="/sofia_CV/sofia_CV.pdf" download
                class="px-5 py-2 rounded-xl text-white font-semibold bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1">
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
                    Hi, I'm <span class="text-pink-400">Sofia May M. Temperante</span> 👋
                </h1>

                <p class="mt-5 text-xl md:text-2xl text-gray-300">
                    I am a
                    <span id="typewriter" class="text-pink-400 font-semibold"></span>
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

        ```html
        <!-- About Me Section -->
        <section id="about" class="relative overflow-hidden bg-[#faf9fb] px-6 py-24">

            <!-- Soft Background Decorations -->
            <div class="absolute -left-40 top-20 h-80 w-80 rounded-full
        bg-pink-100/50 blur-3xl"></div>

            <div class="absolute -right-40 bottom-10 h-80 w-80 rounded-full
        bg-purple-100/50 blur-3xl"></div>


            <div class="relative mx-auto grid w-full max-w-6xl
        items-center gap-14 md:grid-cols-2">


                <!-- =========================
             LEFT SIDE - IMAGE
        ========================== -->
                <div class="flex justify-center">

                    <div class="group relative">


                        <!-- Soft Glow -->
                        <div
                            class="absolute -inset-5 rounded-[2rem]
                    bg-gradient-to-r from-pink-200
                    to-purple-200 opacity-50 blur-2xl
                    transition duration-500
                    group-hover:opacity-80">
                        </div>


                        <!-- Image Frame -->
                        <div
                            class="relative overflow-hidden rounded-[2rem]
                    border-8 border-white
                    bg-white
                    shadow-[0_20px_50px_rgba(0,0,0,0.10)]
                    transition duration-500
                    group-hover:-translate-y-2">


                            <img src="/images/my-laptop.jpg" alt="Sofia working on web development"
                                class="h-80 w-80 object-cover
                            transition duration-700
                            group-hover:scale-105
                            md:h-96 md:w-96">


                            <!-- Image Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t
                        from-pink-500/10 to-transparent
                        opacity-0 transition duration-500
                        group-hover:opacity-100">
                            </div>

                        </div>


                        <!-- Small Floating Badge -->
                        <div
                            class="absolute -bottom-5 -right-5
                    rounded-2xl border border-pink-100
                    bg-white px-5 py-4
                    shadow-lg shadow-pink-100/50">

                            <p class="text-xs font-medium text-gray-400">
                                Currently
                            </p>

                            <p class="mt-1 text-sm font-bold text-gray-700">
                                Learning & Growing
                            </p>

                        </div>

                    </div>

                </div>



                <!-- =========================
             RIGHT SIDE - CONTENT
        ========================== -->
                <div>


                    <!-- Label -->
                    <div class="mb-4 flex items-center gap-3">

                        <span class="h-px w-10 bg-pink-400"></span>

                        <p class="text-sm font-semibold uppercase
                    tracking-[0.2em] text-pink-500">
                            About Me
                        </p>

                    </div>


                    <!-- Heading -->
                    <h2 class="mb-6 text-4xl font-bold leading-tight
                text-gray-800 md:text-5xl">

                        Aspiring
                        <span class="text-pink-500">
                            Web Developer
                        </span>

                    </h2>


                    <!-- Description -->
                    <p class="mb-5 text-lg leading-relaxed text-gray-500">

                        Hi! I'm Sofia, an aspiring web developer passionate
                        about building modern and responsive websites using
                        Laravel, Tailwind CSS, JavaScript, and MySQL.

                    </p>


                    <p class="mb-8 text-lg leading-relaxed text-gray-500">

                        I enjoy creating clean UI designs, learning new
                        technologies, and developing projects that help me
                        grow my skills in both frontend and backend development.

                    </p>



                    <!-- Skills Title -->
                    <div class="mb-4 flex items-center gap-3">

                        <h3 class="text-sm font-bold uppercase
                    tracking-wider text-gray-700">
                            Technologies I Use
                        </h3>

                        <div class="h-px flex-1 bg-gray-200"></div>

                    </div>



                    <!-- Skills -->
                    <div class="flex flex-wrap gap-3">


                        <!-- HTML -->
                        <span
                            class="rounded-xl border border-orange-200
                    bg-orange-50 px-4 py-2 text-sm font-medium
                    text-orange-600 transition duration-300
                    hover:-translate-y-1 hover:shadow-md">
                            HTML5
                        </span>


                        <!-- CSS -->
                        <span
                            class="rounded-xl border border-blue-200
                    bg-blue-50 px-4 py-2 text-sm font-medium
                    text-blue-600 transition duration-300
                    hover:-translate-y-1 hover:shadow-md">
                            CSS3
                        </span>


                        <!-- Bootstrap -->
                        <span
                            class="rounded-xl border border-purple-200
                    bg-purple-50 px-4 py-2 text-sm font-medium
                    text-purple-600 transition duration-300
                    hover:-translate-y-1 hover:shadow-md">
                            Bootstrap
                        </span>


                        <!-- Laravel -->
                        <span
                            class="rounded-xl border border-red-200
                    bg-red-50 px-4 py-2 text-sm font-medium
                    text-red-600 transition duration-300
                    hover:-translate-y-1 hover:shadow-md">
                            Laravel
                        </span>


                        <!-- Tailwind -->
                        <span
                            class="rounded-xl border border-cyan-200
                    bg-cyan-50 px-4 py-2 text-sm font-medium
                    text-cyan-600 transition duration-300
                    hover:-translate-y-1 hover:shadow-md">
                            Tailwind CSS
                        </span>


                        <!-- JavaScript -->
                        <span
                            class="rounded-xl border border-yellow-200
                    bg-yellow-50 px-4 py-2 text-sm font-medium
                    text-yellow-600 transition duration-300
                    hover:-translate-y-1 hover:shadow-md">
                            JavaScript
                        </span>


                        <!-- MySQL -->
                        <span
                            class="rounded-xl border border-sky-200
                    bg-sky-50 px-4 py-2 text-sm font-medium
                    text-sky-600 transition duration-300
                    hover:-translate-y-1 hover:shadow-md">
                            MySQL
                        </span>

                    </div>



                    <!-- Bottom Highlight -->
                    <div
                        class="mt-9 flex items-center gap-4
                rounded-2xl border border-pink-100
                bg-pink-50/50 p-4">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center
                    justify-center rounded-xl bg-white
                    text-pink-500 shadow-sm">
                            ✦
                        </div>

                        <div>

                            <p class="text-sm font-semibold text-gray-700">
                                Always learning, always improving.
                            </p>

                            <p class="mt-1 text-xs text-gray-400">
                                Building projects and growing as a developer.
                            </p>

                        </div>

                    </div>


                </div>

            </div>

        </section>
        ```


        <section id="projects" class="projects-section">

            <div class="projects-container">

                <!-- Section Header -->
                <div class="projects-header">
                    <span class="projects-label">MY WORK</span>

                    <h2>
                        Featured <span>Projects</span>
                    </h2>

                    <p>
                        A collection of projects I've created while developing my
                        skills in web development and modern UI design.
                    </p>
                </div>


                <!-- Swiper -->
                <div class="swiper mySwiper">

                    <div class="swiper-wrapper">


                        <!-- PROJECT 1 -->
                        <div class="swiper-slide">

                            <div class="project-card">

                                <div class="project-image">

                                    <video autoplay muted loop playsinline>
                                        <source src="{{ asset('videos/my_first_website.mp4') }}" type="video/mp4">
                                    </video>

                                    <div class="project-overlay">
                                        <span>2024</span>
                                    </div>

                                </div>


                                <div class="project-content">

                                    <div class="project-number">
                                        01
                                    </div>

                                    <h3>
                                        My First Website
                                    </h3>

                                    <p>
                                        My very first website project where I started
                                        learning HTML, CSS, and JavaScript. This project
                                        helped me understand responsive layouts and basic
                                        web development fundamentals.
                                    </p>


                                    <div class="project-tech">

                                        <span class="html">HTML5</span>
                                        <span class="css">CSS & UI Design</span>
                                        <span class="js">JavaScript</span>

                                    </div>


                                    <a href="https://github.com/SofiaMay26/sofia-business-website-2024.git"
                                        target="_blank" class="project-button">

                                        View Project

                                        <span>↗</span>

                                    </a>

                                </div>

                            </div>

                        </div>



                        <!-- PROJECT 2 -->
                        <div class="swiper-slide">

                            <div class="project-card">

                                <div class="project-image">

                                    <video autoplay muted loop playsinline>
                                        <source src="{{ asset('videos/website_assignment.mp4') }}" type="video/mp4">
                                    </video>

                                    <div class="project-overlay">
                                        <span>2024</span>
                                    </div>

                                </div>


                                <div class="project-content">

                                    <div class="project-number">
                                        02
                                    </div>

                                    <h3>
                                        Website Assignment
                                    </h3>

                                    <p>
                                        A responsive website project showcasing modern
                                        UI design and web development features with a
                                        focus on clean layouts and responsive design.
                                    </p>


                                    <div class="project-tech">

                                        <span class="html">HTML5</span>
                                        <span class="bootstrap">Bootstrap</span>
                                        <span class="js">JavaScript</span>

                                    </div>


                                    <a href="https://github.com/SofiaMay26/web-builder-assignment.git" target="_blank"
                                        class="project-button">

                                        View Project

                                        <span>↗</span>

                                    </a>

                                </div>

                            </div>

                        </div>



                        <!-- PROJECT 3 -->
                        <div class="swiper-slide">

                            <div class="project-card">

                                <div class="project-image">

                                    <video autoplay muted loop playsinline>
                                        <source src="{{ asset('videos/spc_computer_hardware.mp4') }}"
                                            type="video/mp4">
                                    </video>

                                    <div class="project-overlay">
                                        <span>2025</span>
                                    </div>

                                </div>


                                <div class="project-content">

                                    <div class="project-number">
                                        03
                                    </div>

                                    <h3>
                                        SPC Computer Hardware
                                    </h3>

                                    <p>
                                        A responsive computer hardware e-commerce
                                        website showcasing PC parts, accessories,
                                        and product listings built using Laravel
                                        and Tailwind CSS.
                                    </p>


                                    <div class="project-tech">

                                        <span class="html">HTML5</span>
                                        <span class="css">CSS & UI Design</span>
                                        <span class="js">JavaScript</span>
                                        <span class="bootstrap">Bootstrap</span>

                                    </div>


                                    <a href="https://github.com/marvinjagonio/Sofias_Final_Project.git"
                                        target="_blank" class="project-button">

                                        View Project

                                        <span>↗</span>

                                    </a>

                                </div>

                            </div>

                        </div>



                        <!-- PROJECT 4 -->
                        <div class="swiper-slide">

                            <div class="project-card">

                                <div class="project-image">

                                    <video autoplay muted loop playsinline>
                                        <source src="{{ asset('videos/longevity_website_2026.mp4') }}"
                                            type="video/mp4">
                                    </video>

                                    <div class="project-overlay">
                                        <span>2026</span>
                                    </div>

                                </div>


                                <div class="project-content">

                                    <div class="project-number">
                                        04
                                    </div>

                                    <h3>
                                        Longevity Website
                                    </h3>

                                    <p>
                                        A modern health and wellness e-commerce website
                                        featuring longevity supplements, healthy foods,
                                        wellness equipment, and educational resources.
                                    </p>


                                    <div class="project-tech">

                                        <span class="html">HTML5</span>
                                        <span class="css">CSS3</span>
                                        <span class="js">JavaScript</span>
                                        <span class="bootstrap">Bootstrap 5</span>
                                        <span class="ghl">GoHighLevel</span>

                                    </div>


                                    <a href="https://github.com/SofiaMay26/longevity-website-2026" target="_blank"
                                        class="project-button">

                                        View Project

                                        <span>↗</span>

                                    </a>

                                </div>

                            </div>

                        </div>


                    </div>


                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>


                    <!-- Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

            </div>

        </section>




        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
        </div>

        ```html
        {{-- SEND ME A MESSAGE --}}

        <section id="contact" class="relative overflow-hidden bg-[#faf9fb] px-4 py-24">

            {{-- Soft Background Decorations --}}
            <div class="absolute -left-32 top-20 h-72 w-72 rounded-full
        bg-pink-100/50 blur-3xl"></div>

            <div class="absolute -right-32 bottom-10 h-72 w-72 rounded-full
        bg-purple-100/50 blur-3xl"></div>


            <div class="relative mx-auto max-w-5xl">


                {{-- Section Heading --}}
                <div class="mb-12 text-center">

                    <p class="mb-3 text-sm font-semibold uppercase
                tracking-[0.25em] text-pink-500">
                        Get In Touch
                    </p>

                    <h2 class="text-4xl font-bold text-gray-800 md:text-5xl">
                        Let's Work
                        <span class="text-pink-500">Together</span>
                    </h2>

                    <p class="mx-auto mt-4 max-w-xl text-gray-500">
                        Have a project, question, or opportunity?
                        Feel free to send me a message. I'd love to hear from you.
                    </p>

                </div>



                {{-- Contact Card --}}
                <div
                    class="grid overflow-hidden rounded-3xl
            border border-gray-200 bg-white
            shadow-[0_15px_50px_rgba(0,0,0,0.06)]
            md:grid-cols-5">


                    {{-- Left Information --}}
                    <div
                        class="relative overflow-hidden
                bg-gradient-to-br from-pink-50 to-purple-50
                p-8 md:col-span-2 md:p-10">

                        {{-- Decorative Circle --}}
                        <div
                            class="absolute -right-16 -top-16 h-40 w-40
                    rounded-full bg-pink-200/40">
                        </div>


                        <div class="relative">

                            <div class="mb-8">

                                <span class="text-3xl text-pink-400">
                                    ✦
                                </span>

                                <h3 class="mt-4 text-2xl font-bold text-gray-800">
                                    Say Hello
                                </h3>

                                <p class="mt-3 text-sm leading-6 text-gray-500">
                                    Whether you have a project idea, a job opportunity,
                                    or simply want to connect, you're welcome to reach out.
                                </p>

                            </div>


                            {{-- Contact Details --}}
                            <div class="space-y-6">


                                {{-- Email --}}
                                <div class="flex items-start gap-4">

                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center
                                justify-center rounded-xl bg-white
                                text-pink-500 shadow-sm">

                                        ✉

                                    </div>

                                    <div>

                                        <p
                                            class="text-xs font-semibold uppercase
                                    tracking-wide text-gray-400">
                                            Email
                                        </p>

                                        <p class="mt-1 text-sm font-medium text-gray-700">
                                            your-email@example.com
                                        </p>

                                    </div>

                                </div>


                                {{-- Location --}}
                                <div class="flex items-start gap-4">

                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center
                                justify-center rounded-xl bg-white
                                text-pink-500 shadow-sm">

                                        📍

                                    </div>

                                    <div>

                                        <p
                                            class="text-xs font-semibold uppercase
                                    tracking-wide text-gray-400">
                                            Location
                                        </p>

                                        <p class="mt-1 text-sm font-medium text-gray-700">
                                            Philippines
                                        </p>

                                    </div>

                                </div>


                                {{-- Availability --}}
                                <div class="flex items-start gap-4">

                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center
                                justify-center rounded-xl bg-white
                                text-pink-500 shadow-sm">

                                        ●

                                    </div>

                                    <div>

                                        <p
                                            class="text-xs font-semibold uppercase
                                    tracking-wide text-gray-400">
                                            Status
                                        </p>

                                        <p class="mt-1 text-sm font-medium text-gray-700">
                                            Open to opportunities
                                        </p>

                                    </div>

                                </div>

                            </div>


                            {{-- Small Quote --}}
                            <div class="mt-10 border-l-2 border-pink-300 pl-4">

                                <p class="text-sm italic leading-6 text-gray-500">
                                    "Good design is not just about how it looks,
                                    but how it works."
                                </p>

                            </div>

                        </div>

                    </div>



                    {{-- Form --}}
                    <div class="p-8 md:col-span-3 md:p-10">


                        {{-- Success Message --}}
                        @if (session('success'))
                            <div
                                class="mb-6 rounded-xl border border-green-100
                        bg-green-50 p-4 text-center text-sm
                        font-medium text-green-600">

                                ✓ {{ session('success') }}

                            </div>
                        @endif


                        {{-- Errors --}}
                        @if ($errors->any())

                            <div
                                class="mb-6 rounded-xl border border-red-100
                        bg-red-50 p-4 text-sm text-red-500">

                                <ul class="space-y-1">

                                    @foreach ($errors->all() as $error)
                                        <li>• {{ $error }}</li>
                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">

                            @csrf


                            {{-- Name --}}
                            <div>

                                <label for="name" class="mb-2 block text-sm font-semibold text-gray-700">

                                    Your Name

                                </label>

                                <input id="name" type="text" name="name" value="{{ old('name') }}"
                                    placeholder="Enter your name"
                                    class="w-full rounded-xl border border-gray-200
                                bg-gray-50 px-4 py-3.5 text-gray-700
                                outline-none transition duration-300
                                placeholder:text-gray-400
                                hover:border-gray-300
                                focus:border-pink-400
                                focus:bg-white
                                focus:ring-4
                                focus:ring-pink-100"
                                    required>

                            </div>


                            {{-- Email --}}
                            <div>

                                <label for="email" class="mb-2 block text-sm font-semibold text-gray-700">

                                    Email Address

                                </label>

                                <input id="email" type="email" name="email" value="{{ old('email') }}"
                                    placeholder="your@email.com"
                                    class="w-full rounded-xl border border-gray-200
                                bg-gray-50 px-4 py-3.5 text-gray-700
                                outline-none transition duration-300
                                placeholder:text-gray-400
                                hover:border-gray-300
                                focus:border-pink-400
                                focus:bg-white
                                focus:ring-4
                                focus:ring-pink-100"
                                    required>

                            </div>


                            {{-- Message --}}
                            <div>

                                <label for="message" class="mb-2 block text-sm font-semibold text-gray-700">

                                    Your Message

                                </label>

                                <textarea id="message" name="message" rows="6" placeholder="Tell me about your project..."
                                    class="w-full resize-none rounded-xl
                                border border-gray-200
                                bg-gray-50 px-4 py-3.5
                                text-gray-700 outline-none
                                transition duration-300
                                placeholder:text-gray-400
                                hover:border-gray-300
                                focus:border-pink-400
                                focus:bg-white
                                focus:ring-4
                                focus:ring-pink-100"
                                    required>{{ old('message') }}</textarea>

                            </div>


                            {{-- Button --}}
                            <button type="submit"
                                class="group flex w-full items-center
                            justify-center gap-3 rounded-xl
                            bg-gray-800 px-6 py-4
                            font-semibold text-white
                            transition duration-300
                            hover:-translate-y-1
                            hover:bg-pink-500
                            hover:shadow-lg
                            hover:shadow-pink-200">

                                Send Message

                                <span
                                    class="transition-transform duration-300
                            group-hover:translate-x-1">
                                    →
                                </span>

                            </button>


                        </form>

                    </div>

                </div>


                {{-- Footer Note --}}
                <p class="mt-8 text-center text-sm text-gray-400">
                    Thank you for visiting my portfolio.
                </p>

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

                <div class="swiper contactSwiper mt-10">

                    <div class="swiper-wrapper">

                        <!-- Email -->
                        <div class="swiper-slide">
                            <div class="contact-card">
                                <div class="contact-icon">📧</div>
                                <h4>Email</h4>
                                <p>tempsofiemae@gmail.com</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="swiper-slide">
                            <div class="contact-card">
                                <div class="contact-icon">📱</div>
                                <h4>Mobile</h4>
                                <p>+63 987 387 2723</p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="swiper-slide">
                            <div class="contact-card">
                                <div class="contact-icon">📍</div>
                                <h4>Location</h4>
                                <p>Sampaloc Manila, Philippines</p>
                            </div>
                        </div>

                        <!-- GitHub -->
                        <div class="swiper-slide">
                            <div class="contact-card">
                                <div class="contact-icon">💻</div>
                                <h4>GitHub</h4>
                                <p>github.com/SofiaMay26</p>
                            </div>
                        </div>
                        <!-- Linked In -->
                        <div class="swiper-slide">
                            <div class="contact-card">
                                <div class="contact-icon">💻</div>
                                <h4>Linked In</h4>
                                <p>www.linkedin.com/in/sofia-may-m-temperante-93940a237
                                </p>
                            </div>
                        </div>


                    </div>

                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>

                <div class="mt-10">
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=tempsofiemae@gmail.com" target="_blank"
                        class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition">
                        Send Email
                    </a>
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

        <!-- Swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{ asset('js/swiper.js') }}"></script>
        <!-- Custom JavaScript -->
        <script src="{{ asset('js/hero.js') }}"></script>

        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>
