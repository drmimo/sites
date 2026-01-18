<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Image Tools - The Ultimate Online Image Processing Hub</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="./js/tailwindcss.js?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "primary-dark": "#0b5cb5",
                        "background-light": "#ffffff",
                        "background-dark": "#101922",
                        "surface-light": "#f8fafc",
                        "surface-dark": "#1e293b",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.375rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-900 dark:text-white font-display antialiased overflow-x-hidden selection:bg-primary/30 selection:text-primary">
    <div class="relative flex min-h-screen w-full flex-col">
        
    <?php include './includes/header.php'; ?>

        <main class="flex-grow">
            <section class="relative overflow-hidden pt-12 pb-16 lg:pt-20 lg:pb-24">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                    <div class="mx-auto max-w-4xl">
                        <h1
                            class="text-4xl font-black tracking-tight text-gray-900 dark:text-white sm:text-5xl lg:text-6xl mb-6">
                            Online Image Tools for <br class="hidden sm:block" />
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400">Resize,
                                Convert, Compress &amp; Edit</span>
                        </h1>
                        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600 dark:text-gray-300">
                            The professional suite for creators and developers. Privacy-first processing that happens
                            entirely in your browser—your photos never leave your device.
                        </p>
                    </div>
                    <div class="mx-auto mt-10 max-w-2xl">
                        <!--div
                            class="relative flex items-center w-full p-2 bg-white dark:bg-surface-dark rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 ring-1 ring-gray-900/5">
                            <div class="flex items-center justify-center pl-3 text-gray-400">
                                <span class="material-symbols-outlined">search</span>
                            </div>
                            <input
                                class="w-full bg-transparent border-none focus:ring-0 text-gray-900 dark:text-white placeholder-gray-400 text-base h-12"
                                placeholder="Search for a tool (e.g., 'Resize for Instagram')..." type="text" />
                            <button
                                class="hidden sm:flex ml-2 shrink-0 items-center justify-center rounded-lg bg-primary px-6 py-2.5 text-sm font-bold text-white shadow-sm hover:bg-primary-dark transition-colors">
                                Find Tool
                            </button>
                        </div-->
                    </div>
                </div>
                <div
                    class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.blue.100),white)] dark:bg-[radial-gradient(45rem_50rem_at_top,theme(colors.slate.800),theme(colors.background-dark))] opacity-40">
                </div>
                <div
                    class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white dark:bg-background-dark shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 dark:ring-white/5 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
                </div>
            </section>
            <section class="py-12 sm:py-16 bg-white dark:bg-background-dark" id="tools">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tool Categories
                            </h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Navigate to our specialized image
                                processing suites.</p>
                        </div>
                        <a class="text-sm font-semibold text-primary hover:text-primary-dark flex items-center gap-1"
                            href="./tools.php">
                            View all tools <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        <a class="group relative flex flex-col gap-4 rounded-2xl border border-gray-200 dark:border-gray-800 bg-surface-light dark:bg-surface-dark p-6 hover:border-primary/50 hover:shadow-xl dark:hover:border-primary/50 transition-all duration-300"
                            href="./resize.php">
                            <div
                                class="flex size-12 items-center justify-center rounded-xl bg-blue-100 dark:bg-blue-900/30 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-2xl">aspect_ratio</span>
                            </div>
                            <div>
                                <h3
                                    class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-primary transition-colors">
                                    Image Resizing</h3>
                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Change dimensions by pixel or
                                    percentage. Perfect for social media standards.</p>
                            </div>
                            <div class="mt-auto pt-4 border-t border-gray-200 dark:border-gray-700">
                                <span class="text-xs font-bold text-primary flex items-center gap-1">
                                    Open Resizer <span class="material-symbols-outlined text-sm">chevron_right</span>
                                </span>
                            </div>
                        </a>
                        <a class="group relative flex flex-col gap-4 rounded-2xl border border-gray-200 dark:border-gray-800 bg-surface-light dark:bg-surface-dark p-6 hover:border-green-500/50 hover:shadow-xl dark:hover:border-green-500/50 transition-all duration-300"
                            href="./compressor.php">
                            <div
                                class="flex size-12 items-center justify-center rounded-xl bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 group-hover:bg-green-600 group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-2xl">compress</span>
                            </div>
                            <div>
                                <h3
                                    class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-green-600 transition-colors">
                                    Image Compression</h3>
                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Reduce file size significantly
                                    without noticeable quality loss.</p>
                            </div>
                            <div class="mt-auto pt-4 border-t border-gray-200 dark:border-gray-700">
                                <span class="text-xs font-bold text-green-600 flex items-center gap-1">
                                    Open Compressor <span class="material-symbols-outlined text-sm">chevron_right</span>
                                </span>
                            </div>
                        </a>
                        <a class="group relative flex flex-col gap-4 rounded-2xl border border-gray-200 dark:border-gray-800 bg-surface-light dark:bg-surface-dark p-6 hover:border-purple-500/50 hover:shadow-xl dark:hover:border-purple-500/50 transition-all duration-300"
                            href="./converter.php">
                            <div
                                class="flex size-12 items-center justify-center rounded-xl bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-2xl">transform</span>
                            </div>
                            <div>
                                <h3
                                    class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-purple-600 transition-colors">
                                    Image Conversion</h3>
                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Switch seamlessly between JPG,
                                    PNG, WebP, GIF, and TIFF formats.</p>
                            </div>
                            <div class="mt-auto pt-4 border-t border-gray-200 dark:border-gray-700">
                                <span class="text-xs font-bold text-purple-600 flex items-center gap-1">
                                    Open Converter <span class="material-symbols-outlined text-sm">chevron_right</span>
                                </span>
                            </div>
                        </a>
                        <a class="group relative flex flex-col gap-4 rounded-2xl border border-gray-200 dark:border-gray-800 bg-surface-light dark:bg-surface-dark p-6 hover:border-orange-500/50 hover:shadow-xl dark:hover:border-orange-500/50 transition-all duration-300"
                            href="/edit">
                            <div
                                class="flex size-12 items-center justify-center rounded-xl bg-orange-100 dark:bg-orange-900/30 text-orange-600 dark:text-orange-400 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined text-2xl">edit</span>
                            </div>
                            <div>
                                <h3
                                    class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-orange-600 transition-colors">
                                    Image Editing</h3>
                                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Crop, rotate, flip, and adjust
                                    basic filters and color settings.</p>
                            </div>
                            <div class="mt-auto pt-4 border-t border-gray-200 dark:border-gray-700">
                                <span class="text-xs font-bold text-orange-600 flex items-center gap-1">
                                    Open Editor <span class="material-symbols-outlined text-sm">chevron_right</span>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="py-12 bg-surface-light dark:bg-surface-dark/50">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-6">Quick Actions &amp;
                        Use-Cases</h2>
                    <div class="flex flex-wrap gap-4">
                        <a class="flex items-center gap-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark px-5 py-3 shadow-sm hover:border-primary hover:ring-1 hover:ring-primary transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-primary">speed</span>
                            <span class="text-sm font-semibold text-gray-900 dark:text-white">Optimize for Website
                                Speed</span>
                        </a>
                        <a class="flex items-center gap-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark px-5 py-3 shadow-sm hover:border-pink-500 hover:ring-1 hover:ring-pink-500 transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-pink-500">photo_camera</span>
                            <span class="text-sm font-semibold text-gray-900 dark:text-white">Prepare for Social
                                Media</span>
                        </a>
                        <a class="flex items-center gap-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark px-5 py-3 shadow-sm hover:border-blue-500 hover:ring-1 hover:ring-blue-500 transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-blue-500">shield</span>
                            <span class="text-sm font-semibold text-gray-900 dark:text-white">Remove Metadata
                                (EXIF)</span>
                        </a>
                        <a class="flex items-center gap-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark px-5 py-3 shadow-sm hover:border-gray-500 hover:ring-1 hover:ring-gray-500 transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-gray-500">picture_as_pdf</span>
                            <span class="text-sm font-semibold text-gray-900 dark:text-white">Images to PDF</span>
                        </a>
                        <a class="flex items-center gap-3 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark px-5 py-3 shadow-sm hover:border-purple-500 hover:ring-1 hover:ring-purple-500 transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-purple-500">water_drop</span>
                            <span class="text-sm font-semibold text-gray-900 dark:text-white">Add Watermark</span>
                        </a>
                    </div>
                </div>
            </section>
            <section
                class="py-16 sm:py-20 bg-white dark:bg-background-dark border-t border-gray-100 dark:border-gray-800"
                id="blog">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4">
                        <div class="max-w-2xl">
                            <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-3xl">
                                Learn &amp; Optimize</h2>
                            <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">Deep dives into image formats,
                                compression algorithms, and web performance.</p>
                        </div>
                        <a class="inline-flex items-center gap-2 text-primary font-semibold hover:underline decoration-2 underline-offset-4"
                            href="./blog/index.php">
                            Visit our Blog &amp; Guides <span class="material-symbols-outlined">open_in_new</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                        <article class="flex flex-col items-start justify-between group cursor-pointer"
                            onclick="location.href='./blog/resizing-vs-compression.php'">
                            <div
                                class="relative w-full overflow-hidden rounded-2xl bg-gray-100 dark:bg-surface-dark aspect-[16/9]">
                                <img class="absolute inset-0 h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                    data-alt="Abstract visualization of digital data compression and technology"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnNDpVGYReq4qUFMfTj5Vi3S1T1jasZHhfriDeZ-8GT66SmcjM1sQy5ntyXgcjc7R1F6lnZ95fBR48JeAq7bF7VJSvR-hdWikcPCpfK2V1lz7KiTXCc73voDBX3IZbxQbNzgJPwQWRt_oWSWH1Nl0_d4xx125qW-7ZSzm5z7MDz0p0vV6tL3Y8ZFMae05XiNQuPhMaDjQyIotQn6OCIzeay2s829paKV8BRKgsNgwrOf2SmnJ4UyTGt8cHulbvVoMLPU9JipZG80I" />
                                <div
                                    class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10 dark:ring-white/10">
                                </div>
                            </div>
                            <div class="max-w-xl">
                                <div class="mt-4 flex items-center gap-x-4 text-xs">
                                    <time class="text-gray-500 dark:text-gray-400" datetime="2023-10-16">Oct 16,
                                        2023</time>
                                    <span
                                        class="relative z-10 rounded-full bg-primary/10 px-3 py-1.5 font-medium text-primary">Guides</span>
                                </div>
                                <div class="group relative">
                                    <h3
                                        class="mt-3 text-lg font-bold leading-6 text-gray-900 dark:text-white group-hover:text-primary transition-colors">
                                        <a href="./blog/resizing-vs-compression.php">
                                            <span class="absolute inset-0"></span>
                                            Image Resizing vs. Compression: What's the difference?
                                        </a>
                                    </h3>
                                    <p class="mt-2 text-sm leading-6 text-gray-600 dark:text-gray-400 line-clamp-3">
                                        Understanding when to resize pixel dimensions and when to simply compress file
                                        size is crucial for web performance.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="flex flex-col items-start justify-between group cursor-pointer"
                            onclick="location.href='./blog/formats-guide.php'">
                            <div
                                class="relative w-full overflow-hidden rounded-2xl bg-gray-100 dark:bg-surface-dark aspect-[16/9]">
                                <img class="absolute inset-0 h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                    data-alt="Colorful geometric patterns representing different image file formats"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHWLIeNU0J30DpOBO_E5hHNJyaNfIUqPeTguIm-5zdcvxsKO9XxvbeL1U4GgA0LZZjzUUkyrRrtI14q0EmQ1puto_BYPYL8GnLrVDVLGhBe_eNwFbDZRZnRk_uaG5tzofrrt7oTVGjH51lKI4LuZ1WRodi5NFBr6XlHQgdXHksSNF4lyCl3mGuKqwA-Q2OYqctJQrAZXnVLHVRtqxJCm7M8ArFFH3Jjn7l5T6tSufFT-063On5tWE3tp9EJrQCDigVo2BD_3ZqvV4" />
                                <div
                                    class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10 dark:ring-white/10">
                                </div>
                            </div>
                            <div class="max-w-xl">
                                <div class="mt-4 flex items-center gap-x-4 text-xs">
                                    <time class="text-gray-500 dark:text-gray-400" datetime="2023-10-10">Oct 10,
                                        2023</time>
                                    <span
                                        class="relative z-10 rounded-full bg-primary/10 px-3 py-1.5 font-medium text-primary">Comparison</span>
                                </div>
                                <div class="group relative">
                                    <h3
                                        class="mt-3 text-lg font-bold leading-6 text-gray-900 dark:text-white group-hover:text-primary transition-colors">
                                        <a href="./blog/formats-guide.php">
                                            <span class="absolute inset-0"></span>
                                            JPEG vs PNG vs WebP: The Ultimate Guide
                                        </a>
                                    </h3>
                                    <p class="mt-2 text-sm leading-6 text-gray-600 dark:text-gray-400 line-clamp-3">
                                        Which format should you choose for your website? We break down the pros and cons
                                        of modern image formats.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="flex flex-col items-start justify-between group cursor-pointer"
                            onclick="location.href='./blog/image-size-effect.php'">
                            <div
                                class="relative w-full overflow-hidden rounded-2xl bg-gray-100 dark:bg-surface-dark aspect-[16/9]">
                                <img class="absolute inset-0 h-full w-full object-cover transition-transform duration-300 group-hover:scale-105"
                                    data-alt="Data analytics dashboard showing website speed metrics"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmO1ZXvUuv4jo6QnLSV-hpgPikUOyWqqFRVinJxZ23cwWQ5BJrh2PjGR14CpxAMKrpeZ54lBa5e5EamHXArqRmf2gGF9z9MekfZGi7VtEJrF6--qkliN5L3mcP-2UOyKwPyzU7n79LmPBIPjHo6Gqf7puULZhTl15_cbAj8-UscIlvlCgyHFVCtAHr7neEe4LwHAysSU4BR3knefHC6c3BdWCVn68UKBqfOOFuwxEu1kR0khy9OUJMf3H2pH6RsyYfi8y68Yf5hK8" />
                                <div
                                    class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10 dark:ring-white/10">
                                </div>
                            </div>
                            <div class="max-w-xl">
                                <div class="mt-4 flex items-center gap-x-4 text-xs">
                                    <time class="text-gray-500 dark:text-gray-400" datetime="2023-09-28">Sep 28,
                                        2023</time>
                                    <span
                                        class="relative z-10 rounded-full bg-primary/10 px-3 py-1.5 font-medium text-primary">Performance</span>
                                </div>
                                <div class="group relative">
                                    <h3
                                        class="mt-3 text-lg font-bold leading-6 text-gray-900 dark:text-white group-hover:text-primary transition-colors">
                                        <a href="./blog/image-size-effect.php">
                                            <span class="absolute inset-0"></span>
                                            How Image Size Affects Your Core Web Vitals
                                        </a>
                                    </h3>
                                    <p class="mt-2 text-sm leading-6 text-gray-600 dark:text-gray-400 line-clamp-3">
                                        Large images are the #1 reason for slow websites. Learn how to optimize load
                                        times and improve SEO rankings.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="py-16 bg-surface-light dark:bg-surface-dark/30" id="about">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">Privacy-First
                            Processing</h2>
                        <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                            ImageTools was built on the principle that your data is yours alone. Unlike traditional
                            online editors, we use modern browser technologies to process your images locally.
                            <strong>Zero uploads. Zero tracking. Total privacy.</strong>
                        </p>
                        <div class="mt-8 flex items-center justify-center gap-6">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-green-500">lock</span>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Client-Side
                                    Tech</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-green-500">cloud_off</span>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">No Server
                                    Storage</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-green-500">visibility_off</span>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">No Data
                                    Collection</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php include './includes/footer.php'?>

    </div>

</body>

</html>