<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Resizing vs Compression Guide | ImageMaster</title>
    <script src="../js/tailwindcss.js?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "sans": ["Noto Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-sans text-slate-900 dark:text-slate-100 min-h-screen">
    <!-- Top Navigation Bar -->
    
    <?php include '../includes/header.php'; ?>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-sm font-medium text-slate-500 dark:text-slate-400 mb-8">
            <a class="hover:text-primary" href="../index.php">Home</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <a class="hover:text-primary" href="./index.php">Guides</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-900 dark:text-white">Resizing vs Compression</span>
        </nav>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Main Content Area -->
            <article class="lg:col-span-8">
                <!-- Page Heading -->
                <div class="mb-10">
                    <h2
                        class="font-display text-4xl sm:text-5xl font-black leading-tight tracking-tight mb-4 text-slate-900 dark:text-white">
                        Image Resizing vs. Compression: What's the Difference?
                    </h2>
                    <p class="text-xl text-slate-600 dark:text-slate-400 leading-relaxed">
                        Optimize your web performance by understanding when to change pixel dimensions and when to
                        reduce data weight.
                    </p>
                </div>
                <!-- Visual Comparison Slider Section -->
                <section
                    class="mb-16 bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-slate-200 dark:border-slate-800">
                    <h3 class="font-display text-2xl font-bold mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">compare</span>
                        Visual Comparison
                    </h3>
                    <div
                        class="relative group aspect-video bg-slate-200 dark:bg-slate-800 rounded-lg overflow-hidden mb-6">
                        <img class="w-full h-full object-cover"
                            data-alt="Landscape photo showing high detail for comparison"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3OJ8GJfqMvb1NN7Tz8PE0POWwIdC0fW7GW-x7amYmJ6xoNr8aIZJChELzGzKTph0LJ0_gM4P2CtaCCJ_CUocGJ74dpp9FhuoSNpUGKjsqL9VJv08BszARiyNs_afuciKRNWptRPsZ8-HrisYcqP-CbQ1QGeKc4KnmFUrBbS_iDksJ-ONdv711K6CMzYjI-kg6ZeBYcte1lsRyQhXdjH-IFtp_6QDZ0WlqP09FBuJ4W1RTBtkp2jrUMiRWfD9Fwfc6-yz_0UFyKOM" />
                        <!-- Simulated Split Screen -->
                        <div class="absolute inset-0 flex">
                            <div class="w-1/2 border-r-2 border-primary relative">
                                <span
                                    class="absolute top-4 left-4 bg-black/50 text-white px-3 py-1 rounded-full text-xs font-bold backdrop-blur">Resized:
                                    800px</span>
                            </div>
                            <div class="w-1/2 relative">
                                <span
                                    class="absolute top-4 right-4 bg-black/50 text-white px-3 py-1 rounded-full text-xs font-bold backdrop-blur">Compressed:
                                    85%</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex flex-col @[480px]:flex-row items-center justify-between gap-4">
                            <p class="text-sm font-medium text-slate-500">Drag to compare: Resized (Left) vs Compressed
                                (Right)</p>
                            <div class="flex h-6 w-full max-w-md items-center">
                                <div class="relative w-full h-1 bg-slate-200 dark:bg-slate-700 rounded-full">
                                    <div class="absolute inset-y-0 left-0 w-1/2 bg-primary rounded-full"></div>
                                    <div
                                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 size-5 bg-primary rounded-full ring-4 ring-white dark:ring-slate-900 shadow-lg cursor-pointer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div class="p-3 bg-primary/5 rounded-lg border border-primary/10">
                                <p class="text-xs font-bold text-primary uppercase mb-1">Pixel Loss</p>
                                <p class="text-sm text-slate-600 dark:text-slate-400 leading-snug">Sharp details but
                                    physically smaller dimensions.</p>
                            </div>
                            <div
                                class="p-3 bg-slate-100 dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <p class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase mb-1">
                                    Artifacting</p>
                                <p class="text-sm text-slate-600 dark:text-slate-400 leading-snug">Original size
                                    maintained but minor color banding.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Technical Mechanics Content -->
                <section class="prose prose-slate dark:prose-invert max-w-none mb-16">
                    <div class="grid md:grid-cols-2 gap-10">
                        <div>
                            <h4 class="font-display text-xl font-bold mb-4">What is Resizing?</h4>
                            <p class="text-slate-600 dark:text-slate-400">
                                Resizing involves changing the actual pixel dimensions of an image. If you have a photo
                                that is 4000x3000 pixels and you resize it to 800x600, you are discarding actual pixels.
                                This is achieved through <strong>interpolation</strong> algorithms like Lanczos or
                                Bicubic.
                            </p>
                            <ul class="text-sm space-y-2 mt-4 text-slate-600 dark:text-slate-400">
                                <li class="flex gap-2"><span
                                        class="material-symbols-outlined text-green-500 text-sm">check_circle</span>
                                    Perfect for matching website layout slots</li>
                                <li class="flex gap-2"><span
                                        class="material-symbols-outlined text-green-500 text-sm">check_circle</span>
                                    Dramatically reduces file size by removing data</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-display text-xl font-bold mb-4">What is Compression?</h4>
                            <p class="text-slate-600 dark:text-slate-400">
                                Compression reduces file size without changing the dimensions. It uses
                                <strong>quantization</strong> to group similar color values together. In "lossy"
                                compression (like JPEG), some data is permanently lost to reach a smaller size.
                            </p>
                            <ul class="text-sm space-y-2 mt-4 text-slate-600 dark:text-slate-400">
                                <li class="flex gap-2"><span
                                        class="material-symbols-outlined text-green-500 text-sm">check_circle</span>
                                    Keeps images looking full-screen/hero ready</li>
                                <li class="flex gap-2"><span
                                        class="material-symbols-outlined text-green-500 text-sm">check_circle</span>
                                    Optimized for fast loading without layout shifts</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- Ad Slot 1 -->
                <div
                    class="w-full h-32 bg-slate-50 dark:bg-slate-900/50 border-2 border-dashed border-slate-200 dark:border-slate-800 rounded-xl mb-16 flex flex-col items-center justify-center">
                    <span
                        class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Advertisement</span>
                    <div class="text-slate-300 dark:text-slate-700 material-symbols-outlined text-4xl">ads_click</div>
                </div>
                <!-- Comparison Matrix -->
                <section class="mb-16">
                    <h3 class="font-display text-2xl font-bold mb-8">Key Differences Matrix</h3>
                    <div class="overflow-x-auto rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 dark:bg-slate-800/50">
                                    <th class="p-4 font-bold border-b border-slate-200 dark:border-slate-800">Feature
                                    </th>
                                    <th
                                        class="p-4 font-bold border-b border-slate-200 dark:border-slate-800 text-primary">
                                        Resizing</th>
                                    <th
                                        class="p-4 font-bold border-b border-slate-200 dark:border-slate-800 text-primary">
                                        Compression</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                                <tr>
                                    <td class="p-4 font-medium">Dimensions</td>
                                    <td class="p-4 text-slate-600 dark:text-slate-400">Changes (e.g. 1000px → 500px)
                                    </td>
                                    <td class="p-4 text-slate-600 dark:text-slate-400">Stays the same</td>
                                </tr>
                                <tr>
                                    <td class="p-4 font-medium">File Size</td>
                                    <td class="p-4 text-slate-600 dark:text-slate-400">Reduced by pixel removal</td>
                                    <td class="p-4 text-slate-600 dark:text-slate-400">Reduced by data optimization</td>
                                </tr>
                                <tr>
                                    <td class="p-4 font-medium">Visual Quality</td>
                                    <td class="p-4 text-slate-600 dark:text-slate-400">Sharp, but smaller</td>
                                    <td class="p-4 text-slate-600 dark:text-slate-400">May show artifacts/blurriness
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4 font-medium">Best For</td>
                                    <td class="p-4 text-slate-600 dark:text-slate-400">Thumbnails, Product cards</td>
                                    <td class="p-4 text-slate-600 dark:text-slate-400">Hero images, Wallpapers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- Decision Logic Block -->
                <section class="mb-16 bg-primary/5 dark:bg-primary/10 rounded-2xl p-8 border border-primary/20">
                    <h3 class="font-display text-2xl font-bold mb-6 text-center">Which one do I need?</h3>
                    <div class="grid sm:grid-cols-3 gap-6">
                        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl shadow-sm text-center">
                            <span class="material-symbols-outlined text-3xl text-primary mb-3">grid_view</span>
                            <h5 class="font-bold mb-2">Social Feed</h5>
                            <p class="text-xs text-slate-500">You need specific aspect ratios and small file sizes.</p>
                            <div
                                class="mt-4 px-3 py-1 bg-primary text-white text-[10px] font-bold rounded-full inline-block uppercase">
                                Resizing</div>
                        </div>
                        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl shadow-sm text-center">
                            <span class="material-symbols-outlined text-3xl text-primary mb-3">speed</span>
                            <h5 class="font-bold mb-2">Fast Loading</h5>
                            <p class="text-xs text-slate-500">The image looks great but takes 3 seconds to load.</p>
                            <div
                                class="mt-4 px-3 py-1 bg-primary text-white text-[10px] font-bold rounded-full inline-block uppercase">
                                Compression</div>
                        </div>
                        <div class="bg-white dark:bg-slate-900 p-6 rounded-xl shadow-sm text-center">
                            <span class="material-symbols-outlined text-3xl text-primary mb-3">auto_fix_high</span>
                            <h5 class="font-bold mb-2">Both Works</h5>
                            <p class="text-xs text-slate-500">For the ultimate web performance, do both!</p>
                            <div
                                class="mt-4 px-3 py-1 bg-primary text-white text-[10px] font-bold rounded-full inline-block uppercase">
                                Hybrid</div>
                        </div>
                    </div>
                </section>
                <!-- Tool Links -->
                <div class="grid md:grid-cols-2 gap-6">
                    <a class="group flex items-center justify-between p-6 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl hover:border-primary transition-all"
                        href="<?= BASE_URL.'/resize.php'; ?>">
                        <div class="flex items-center gap-4">
                            <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">aspect_ratio</span>
                            </div>
                            <div>
                                <h4 class="font-bold">Smart Resizer</h4>
                                <p class="text-sm text-slate-500">Change dimensions instantly</p>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                    <a class="group flex items-center justify-between p-6 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl hover:border-primary transition-all"
                        href="<?= BASE_URL.'/compressor.php'; ?>">
                        <div class="flex items-center gap-4">
                            <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">photo_size_select_small</span>
                            </div>
                            <div>
                                <h4 class="font-bold">Image Compressor</h4>
                                <p class="text-sm text-slate-500">Reduce file size without loss</p>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </article>
            <!-- Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Related Tools Card -->
                <div
                    class="bg-white dark:bg-slate-900 p-6 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800">
                    <h4 class="font-display font-bold text-lg mb-4">Related Tools</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-slate-400">crop</span>
                            <a class="text-sm font-medium hover:text-primary" href="../editor.php">Image Cropper</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-slate-400">transform</span>
                            <a class="text-sm font-medium hover:text-primary" href="../converter.php">Format Converter</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-slate-400">background_replace</span>
                            <a class="text-sm font-medium hover:text-primary" href="../bg-remover.php">Background Remover</a>
                        </li>
                    </ul>
                </div>
                <!-- Ad Slot 2 (Vertical) -->
                <div
                    class="w-full aspect-[3/4] bg-slate-50 dark:bg-slate-900/50 border-2 border-dashed border-slate-200 dark:border-slate-800 rounded-xl flex flex-col items-center justify-center">
                    <span
                        class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Advertisement</span>
                    <div class="text-slate-300 dark:text-slate-700 material-symbols-outlined text-5xl">ad_units</div>
                </div>
                <!-- Popular Articles -->
                <div
                    class="bg-white dark:bg-slate-900 p-6 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800">
                    <h4 class="font-display font-bold text-lg mb-4">Popular Guides</h4>
                    <div class="space-y-6">
                        <div class="group cursor-pointer">
                            <p class="text-xs font-bold text-primary mb-1 uppercase tracking-tighter">Performance</p>
                            <a href="./performance-guide.php" class="text-sm font-bold group-hover:text-primary transition-colors">How to achieve 100/100 Core Web Vitals</a>
                        </div>
                        <div class="group cursor-pointer">
                            <p class="text-xs font-bold text-primary mb-1 uppercase tracking-tighter">Formats</p>
                            <a href="./formats-guide.php" class="text-sm font-bold group-hover:text-primary transition-colors">WebP vs AVIF: Which is better in 2026?</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    
    <?php include '../includes/footer.php'; ?>

</body>

</html>