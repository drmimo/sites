<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Connected Learning Hub - Image Tools Blog</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="../js/tailwindcss.js?plugins=forms,container-queries"></script>
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
        
        <?php include '../includes/header.php'; ?>

        <main class="flex-grow">
            <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-8">
                <ol class="flex items-center space-x-2 text-xs font-medium text-gray-500 dark:text-gray-400">
                    <li><a class="hover:text-primary transition-colors" href="https://www.imagefilesize.com">Home</a></li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-xs">chevron_right</span>
                        <span class="text-gray-900 dark:text-white">Blog</span>
                    </li>
                </ol>
            </nav>
            <section class="pt-8 pb-12">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h1
                        class="text-4xl font-black tracking-tight text-gray-900 dark:text-white sm:text-5xl lg:text-6xl">
                        Learning <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400">Hub</span>
                    </h1>
                    <p class="mt-4 max-w-2xl text-lg text-gray-600 dark:text-gray-400">
                        Master image optimization, understand formats, and improve your workflow with our expert guides
                        and technical deep dives.
                    </p>
                </div>
            </section>
            <section class="pb-24">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 gap-12 lg:grid-cols-12">
                        <div class="lg:col-span-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <article class="flex flex-col items-start group">
                                    <div
                                        class="relative w-full overflow-hidden rounded-2xl bg-gray-100 dark:bg-surface-dark aspect-[16/9]">
                                        <img alt="Image Resizing vs Compression"
                                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnNDpVGYReq4qUFMfTj5Vi3S1T1jasZHhfriDeZ-8GT66SmcjM1sQy5ntyXgcjc7R1F6lnZ95fBR48JeAq7bF7VJSvR-hdWikcPCpfK2V1lz7KiTXCc73voDBX3IZbxQbNzgJPwQWRt_oWSWH1Nl0_d4xx125qW-7ZSzm5z7MDz0p0vV6tL3Y8ZFMae05XiNQuPhMaDjQyIotQn6OCIzeay2s829paKV8BRKgsNgwrOf2SmnJ4UyTGt8cHulbvVoMLPU9JipZG80I" />
                                        <div
                                            class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10 dark:ring-white/10">
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="mt-4 flex items-center gap-x-4 text-xs">
                                            <time class="text-gray-500 dark:text-gray-400" datetime="2023-10-16">Oct 16,
                                                2023</time>
                                            <span
                                                class="relative z-10 rounded-full bg-primary/10 px-3 py-1.5 font-medium text-primary">Guides</span>
                                        </div>
                                        <div class="group relative">
                                            <h3
                                                class="mt-3 text-xl font-bold leading-6 text-gray-900 dark:text-white group-hover:text-primary transition-colors">
                                                <a href="./resizing-vs-compression.php">
                                                    <span class="absolute inset-0"></span>
                                                    Image Resizing vs. Compression: What's the difference?
                                                </a>
                                            </h3>
                                            <p
                                                class="mt-2 text-sm leading-6 text-gray-600 dark:text-gray-400 line-clamp-3">
                                                Understanding when to resize pixel dimensions and when to simply
                                                compress file size is crucial for web performance. Learn how to choose
                                                the right method for your needs.
                                            </p>
                                        </div>
                                        <a class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary hover:text-primary-dark"
                                            href="./resizing-vs-compression.php">
                                            Read Full Guide <span
                                                class="material-symbols-outlined text-sm">arrow_forward</span>
                                        </a>
                                    </div>
                                </article>
                                <article class="flex flex-col items-start group">
                                    <div
                                        class="relative w-full overflow-hidden rounded-2xl bg-gray-100 dark:bg-surface-dark aspect-[16/9]">
                                        <img alt="JPEG vs PNG vs WebP"
                                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHWLIeNU0J30DpOBO_E5hHNJyaNfIUqPeTguIm-5zdcvxsKO9XxvbeL1U4GgA0LZZjzUUkyrRrtI14q0EmQ1puto_BYPYL8GnLrVDVLGhBe_eNwFbDZRZnRk_uaG5tzofrrt7oTVGjH51lKI4LuZ1WRodi5NFBr6XlHQgdXHksSNF4lyCl3mGuKqwA-Q2OYqctJQrAZXnVLHVRtqxJCm7M8ArFFH3Jjn7l5T6tSufFT-063On5tWE3tp9EJrQCDigVo2BD_3ZqvV4" />
                                        <div
                                            class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10 dark:ring-white/10">
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="mt-4 flex items-center gap-x-4 text-xs">
                                            <time class="text-gray-500 dark:text-gray-400" datetime="2023-10-10">Oct 10,
                                                2023</time>
                                            <span
                                                class="relative z-10 rounded-full bg-primary/10 px-3 py-1.5 font-medium text-primary">Comparison</span>
                                        </div>
                                        <div class="group relative">
                                            <h3
                                                class="mt-3 text-xl font-bold leading-6 text-gray-900 dark:text-white group-hover:text-primary transition-colors">
                                                <a href="./formats-guide.php">
                                                    <span class="absolute inset-0"></span>
                                                    JPEG vs PNG vs WebP: The Ultimate Guide
                                                </a>
                                            </h3>
                                            <p
                                                class="mt-2 text-sm leading-6 text-gray-600 dark:text-gray-400 line-clamp-3">
                                                Which format should you choose for your website? We break down the pros
                                                and cons of modern image formats and how they impact load times.
                                            </p>
                                        </div>
                                        <a class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary hover:text-primary-dark"
                                            href="./formats-guide.php">
                                            Read Full Guide <span
                                                class="material-symbols-outlined text-sm">arrow_forward</span>
                                        </a>
                                    </div>
                                </article>
                                <article class="flex flex-col items-start group">
                                    <div
                                        class="relative w-full overflow-hidden rounded-2xl bg-gray-100 dark:bg-surface-dark aspect-[16/9]">
                                        <img alt="Core Web Vitals Performance"
                                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmO1ZXvUuv4jo6QnLSV-hpgPikUOyWqqFRVinJxZ23cwWQ5BJrh2PjGR14CpxAMKrpeZ54lBa5e5EamHXArqRmf2gGF9z9MekfZGi7VtEJrF6--qkliN5L3mcP-2UOyKwPyzU7n79LmPBIPjHo6Gqf7puULZhTl15_cbAj8-UscIlvlCgyHFVCtAHr7neEe4LwHAysSU4BR3knefHC6c3BdWCVn68UKBqfOOFuwxEu1kR0khy9OUJMf3H2pH6RsyYfi8y68Yf5hK8" />
                                        <div
                                            class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10 dark:ring-white/10">
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="mt-4 flex items-center gap-x-4 text-xs">
                                            <time class="text-gray-500 dark:text-gray-400" datetime="2023-09-28">Sep 28,
                                                2023</time>
                                            <span
                                                class="relative z-10 rounded-full bg-primary/10 px-3 py-1.5 font-medium text-primary">Performance</span>
                                        </div>
                                        <div class="group relative">
                                            <h3
                                                class="mt-3 text-xl font-bold leading-6 text-gray-900 dark:text-white group-hover:text-primary transition-colors">
                                                <a href="./image-size-effect.php">
                                                    <span class="absolute inset-0"></span>
                                                    How Image Size Affects Your Core Web Vitals
                                                </a>
                                            </h3>
                                            <p
                                                class="mt-2 text-sm leading-6 text-gray-600 dark:text-gray-400 line-clamp-3">
                                                Large images are the #1 reason for slow websites. Learn how to optimize
                                                load times and improve SEO rankings using the right toolset.
                                            </p>
                                        </div>
                                        <a class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary hover:text-primary-dark"
                                            href="./image-size-effect.php">
                                            Read Full Guide <span
                                                class="material-symbols-outlined text-sm">arrow_forward</span>
                                        </a>
                                    </div>
                                </article>
                                <article class="flex flex-col items-start group">
                                    <div
                                        class="relative w-full overflow-hidden rounded-2xl bg-gray-100 dark:bg-surface-dark aspect-[16/9]">
                                        <div
                                            class="absolute inset-0 flex items-center justify-center bg-gray-200 dark:bg-slate-800">
                                            <span class="material-symbols-outlined text-4xl text-gray-400">image</span>
                                        </div>
                                        <div
                                            class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10 dark:ring-white/10">
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="mt-4 flex items-center gap-x-4 text-xs">
                                            <time class="text-gray-500 dark:text-gray-400" datetime="2023-09-15">Sep 15, 2023</time>
                                            <span
                                                class="relative z-10 rounded-full bg-primary/10 px-3 py-1.5 font-medium text-primary">Security</span>
                                        </div>
                                        <div class="group relative">
                                            <h3
                                                class="mt-3 text-xl font-bold leading-6 text-gray-900 dark:text-white group-hover:text-primary transition-colors">
                                                <a href="./privacy-first.php">
                                                    <span class="absolute inset-0"></span>
                                                    Why Privacy-First Image Processing Matters
                                                </a>
                                            </h3>
                                            <p
                                                class="mt-2 text-sm leading-6 text-gray-600 dark:text-gray-400 line-clamp-3">
                                                Most online tools upload your photos. Discover why local browser
                                                processing is the safer alternative for your data.
                                            </p>
                                        </div>
                                        <a class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-primary hover:text-primary-dark"
                                            href="./privacy-first.php">
                                            Read Full Guide <span
                                                class="material-symbols-outlined text-sm">arrow_forward</span>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <aside class="lg:col-span-4">
                            <div class="sticky top-24 space-y-8">
                                <div
                                    class="rounded-2xl border border-gray-200 dark:border-gray-800 bg-surface-light dark:bg-surface-dark p-6 shadow-sm">
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary">handyman</span>
                                        Try Our Tools
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                        Apply what you've learned instantly. No uploads required.
                                    </p>
                                    <div class="mt-6 space-y-3">
                                        <a class="group flex items-center justify-between p-3 rounded-xl bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-700 hover:border-primary hover:ring-1 hover:ring-primary transition-all"
                                            href="../resize.php">
                                            <div class="flex items-center gap-3">
                                                <span
                                                    class="material-symbols-outlined text-blue-500">aspect_ratio</span>
                                                <span class="text-sm font-semibold">Image Resizer</span>
                                            </div>
                                            <span
                                                class="material-symbols-outlined text-gray-300 group-hover:text-primary transition-colors">chevron_right</span>
                                        </a>
                                        <a class="group flex items-center justify-between p-3 rounded-xl bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-700 hover:border-primary hover:ring-1 hover:ring-primary transition-all"
                                            href="../compressor.php">
                                            <div class="flex items-center gap-3">
                                                <span class="material-symbols-outlined text-green-500">compress</span>
                                                <span class="text-sm font-semibold">Image Compressor</span>
                                            </div>
                                            <span
                                                class="material-symbols-outlined text-gray-300 group-hover:text-primary transition-colors">chevron_right</span>
                                        </a>
                                        <a class="group flex items-center justify-between p-3 rounded-xl bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-700 hover:border-primary hover:ring-1 hover:ring-primary transition-all"
                                            href="../converter.php">
                                            <div class="flex items-center gap-3">
                                                <span class="material-symbols-outlined text-purple-500">transform</span>
                                                <span class="text-sm font-semibold">Image Converter</span>
                                            </div>
                                            <span
                                                class="material-symbols-outlined text-gray-300 group-hover:text-primary transition-colors">chevron_right</span>
                                        </a>
                                    </div>
                                    <button
                                        onClick="location.href='../tools.php'"
                                        class="mt-6 w-full py-2.5 rounded-xl bg-primary text-white text-sm font-bold hover:bg-primary-dark transition-colors">
                                        View All Tools
                                    </button>
                                </div>
                                <!--div class="rounded-2xl bg-gradient-to-br from-primary to-blue-600 p-6 text-white">
                                    <h3 class="text-lg font-bold">Optimization Tips</h3>
                                    <p class="mt-2 text-sm text-blue-100">Get the latest web performance guides directly
                                        in your inbox.</p>
                                    <div class="mt-4">
                                        <input
                                            class="w-full px-4 py-2 rounded-lg bg-white/10 border border-white/20 placeholder-blue-200 text-sm focus:ring-white focus:border-white outline-none"
                                            placeholder="Email address" type="email" />
                                        <button
                                            class="mt-3 w-full bg-white text-primary py-2 rounded-lg text-sm font-bold hover:bg-blue-50 transition-colors">Subscribe</button>
                                    </div>
                                </div-->
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
        </main>
        
        <?php include '../includes/footer.php'; ?>

    </div>

</body>

</html>