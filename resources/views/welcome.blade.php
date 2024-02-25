@extends('layouts.main')

@section('container')
    {{-- Hero Section Start --}}
    <section id="home" class="pt-36" >
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2" >
                    <h1 class="text-base font-semibold text-blue md:text-xl">Hallo semua , <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">
                    Saya Piyo Aswandi</span></h1>
                    <h2 class="font-medium text-slate-500 text-lg mb-5 lg:text-2xl ">Freelance & Web Developer</h2>
                    <p class="font-medium text-slate-400 mb-10">Bahasa yang di gunakan :
                        <span class="block text-dark">
                            html | css | php | laravel | talwind | boostrapt
                        </span>
                    </p>
                   

                    <a href="#Contact" class="text-base font-semibold text-white bg-blue py-3 px-8 rounded-full hover:shadow-lg  hover:opacity-80 duration-300 ease-in-out" >Hubungi Saya</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-0 lg:right-0">
                        <img src="img/piyoaswandi.png" alt="Piyo Aswandi" class="max-w-full mx-auto">
                        <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-12">
                              <svg  width="300" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#3b82f6" d="M41.7,24.4C28.2,47.5,-26.5,47.2,-40.3,23.9C-54.1,0.5,-27,-45.8,0.3,-45.6C27.6,-45.4,55.3,1.2,41.7,24.4Z" transform="translate(100 100)  scale(2.2) " />
                              </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section  end --}}

    {{-- aboute Section Start --}}
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap ">
                <div class="w-full px-4 mb-10 lg:w-1/2 ">
                    <h4 class="font-bold uppercase text-blue text-lg mb-3">Tentang Saya</h4>
                    <h2 class="font-bold text-dark text-3xl mb-3 mx-w-md lg:text-4xl" >Bio Singkat</h2>
                    <p class="font-medium text-base text-secondary mx-w-xl ">Saya adalah seorang pengembang perangkat lunak yang sedang berkembang, dengan semangat untuk belajar dan tumbuh dalam dunia teknologi. Saya memiliki pengetahuan dasar dalam pemrograman dan sedang menjelajahi berbagai bahasa dan teknologi. Meskipun saya baru dalam industri ini, saya memiliki minat yang kuat dalam mengembangkan keterampilan saya dan menyediakan solusi teknologi yang kreatif. Saya siap untuk mengambil tantangan baru dan bekerja sama dengan tim untuk mencapai tujuan bersama.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Media Social</h3>
                    <p class="font-medium text-base text-secondary mb-6">Jika ingin mengetahui tentang saya lebih lanjut mari kunjugi media social saya yang lain nya.</p>
                    <div class="flex items-center">
                        {{-- instagram --}}
                        <a href="https://www.instagram.com/pyo_awndi?igsh=MXdwZ2g0NnJ6bjFtMQ==" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-blue hover:bg-blue hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                        </a>
                        {{-- link keddin --}}
                        <a href="https://www.linkedin.com/in/piyo-aswandi-3477812a0/" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-blue hover:bg-blue hover:text-white">
                            <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        {{-- git hub --}}
                        <a href="https://github.com/piyo12052004" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-blue hover:bg-blue hover:text-white">
                            <svg role="img"  width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                        {{-- whatshapp --}}
                        <a href="https://api.whatsapp.com/send?phone=6285770485606" target="blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-blue hover:bg-blue hover:text-white">
                            <svg role="img"width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- aboute Section end --}}

    {{-- Portfolio Section Start --}}
        <section id="Portfolio" class="pt-36 pb-32 bg-slate-100">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-semibold text-lg text-blue mb-2">Portfolio</h4>
                        <h2 class="font-bold text-dark text-3xl mb-4">Project Terbaru</h2>
                        <p class="font-medium text-medium text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut perferendis magnam suscipit neque officiis veritatis.</p>
                    </div>
                </div>

                <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto ">
                    <div class="mb-12 p-4 md:w-1/2">
                        <div class="rounded-md shodow-md overflow-hidden">
                            <a href="https://www.sinyalbekasi.com/" target="blank"><img src="img/project-1.png" alt="Projek Berita"></a>
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5 mb-3">
                            sinyalbekasi.com: Situs Web Terkini dengan Teknologi Blogger
                        </h3>
                        <p class="font-medium text-base text-secondary">Project ini menampilkan sebuah situs web berita yang dibangun menggunakan platform Blogger. Situs ini bertujuan untuk menyajikan berita dan artikel terbaru mengenai perkembangan di daerah Bekasi. Dibangun dengan teknologi Blogger yang dikembangkan oleh Google, situs ini memberikan akses yang mudah dan cepat kepada pembaca untuk mendapatkan informasi terkini.</p>
                    </div>
                    
                </div>
            </div>
        </section>
    {{-- Portfolio Section end --}}

    {{-- Clien Section Start --}}
    <section id="Clien" class="pt-36 pb-32 bg-blue">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-dark mb-2">Clien</h4>
                        <h2 class="font-bold text-white text-3xl mb-4">
                            Yang Pernah Bekerja Sama
                        </h2>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="https://www.sinyalbekasi.com/" target="blank" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-100 hover:grayscale-0 hover:opacity-100 lg:max-w-[190px] lg:mx-6 xl:mx-10">
                        <img src="img/sinyalbekasi.png" alt="" >
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Clien Section End --}}

    {{-- Sertifikat Section Start --}}
    <section id="sertifikat" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-blue mb-2">Sertifikat </h4>
                        <h2 class="font-bold text-dark text-3xl mb-4">
                            Sertifikat Yang Pernah Di Dapat
                        </h2>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap justify-center items-center">
                    {{-- sertifikat 1 --}}
                    <!-- Modal toggle -->
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class=" max-w-[500px] block text-dark bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm px-5 py-2.5 text-center  " type="button">
                        <img src="img/ser-1.jpeg" alt="">
                    </button>
                    
                    <!-- Main modal -->
                    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-20 w-full max-w-1xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Sertifikat BBPVP
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        <img src="img/ser-1.jpeg" alt="">
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <a href="https://drive.google.com/file/d/1GZimXp7tX_L3cFrOWFL_xvTXHrmvSgYK/view?usp=sharing" data-modal-hide="default-modal" type="a" class="text-white bg-blue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Drive</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- sertifikat 2 --}}
                    <button data-modal-target="default-modal-2" data-modal-toggle="default-modal-2" class=" max-w-[500px] block text-dark bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm px-5 py-2.5 text-center  " type="button">
                        <img src="img/ser-2.jpeg" alt="">
                    </button>   
                    <!-- Main modal -->
                    <div id="default-modal-2" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-20 w-full max-w-1xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Sertifikat Seminar
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-2">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        <img src="img/ser-2.jpeg" alt="">
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <a  href="https://drive.google.com/file/d/1ffliZrWs3xICKtxLZWJWmMibve0MZJR3/view?usp=sharing" data-modal-hide="default-modal" type="button" class="text-white bg-blue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Drive</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Sertifikat 3 --}}
                    <button data-modal-target="default-modal-3" data-modal-toggle="default-modal-3" class=" max-w-[500px] block text-dark bg-blue-700 hover:bg-blue-800  font-medium rounded-lg text-sm px-5 py-2.5 text-center  " type="button">
                        <img src="img/ser-3.jpeg" alt="">
                    </button>
                    
                    <!-- Main modal -->
                    <div id="default-modal-3" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-20 w-full max-w-1xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Sertifikat BBPVP
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-3">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        <img src="img/ser-3.jpeg" alt="">
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <a href="https://drive.google.com/file/d/1dew8desS_XVJNzPGI2g3vObVg_2NWcqj/view?usp=sharing" data-modal-hide="default-modal" type="button" class="text-white bg-blue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Drive</a>
                                </div>
                            </div>
                        </div>
                    </div>
  
                    
                </div>
            </div>
        </div>
    </section>
    {{-- Sertifikat Section And --}}

    {{-- Contact Section Start --}}
    <section id="Contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-blue mb-2">Contact</h4>
                        <h2 class="font-bold text-drak text-3xl mb-4">
                            Hubungi Kami
                        </h2>
                </div>
                @if (session('success'))
                <div class="alert alert-success">
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                {{ session('success') }}
                          </div>
                        
                    </div>
                @endif
                @if (session()->has('success')) 
                    <script>
                        Swal.fire({
                        title: "Terkirim",
                        text: "{{ session('success') }}",
                        icon: "success"
                        });
                    </script>
                    @endif
                <div class="w-full px-4 flex justify-center">
                    <form method="POST" action="{{ route('post.massange') }}" class="w-full lg:w-1/2">
                        @csrf
                        <div class="mb-5">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="nama" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />
                        </div>
                        <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <div class="mb-5">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
                            <textarea id="message" name="pesan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
                        <button type="submit" class="text-white bg-blue hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 lg:w-full">Kirim</button>
                    </form>
  
                </div>
            </div>
    </section>
    {{-- Contact Section end --}}
@endsection