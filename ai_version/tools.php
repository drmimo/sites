<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>All Image Tools Directory - ImageToolbox</title>
    <script src="./js/tailwindcss.js?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
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
                        "display": ["Inter"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#0d141b] dark:text-slate-50 min-h-screen">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <!-- Top Navigation Bar -->
            
            <?php include './includes/header.php'; ?>

            <main class="flex flex-1 flex-col items-center">
                <div class="w-full max-w-[1200px] px-6 lg:px-10 py-8">
                    <!-- Breadcrumbs -->
                    <div class="flex flex-wrap gap-2 py-2 mb-4">
                        <a class="text-[#4c739a] dark:text-slate-400 text-sm font-medium leading-normal hover:text-primary"
                            href="./index.php">Home</a>
                        <span class="text-[#4c739a] dark:text-slate-400 text-sm font-medium leading-normal">/</span>
                        <span
                            class="text-[#0d141b] dark:text-slate-50 text-sm font-medium leading-normal">Directory</span>
                    </div>
                    <!-- Page Heading -->
                    <div class="flex flex-col gap-3 mb-8">
                        <h1
                            class="text-[#0d141b] dark:text-slate-50 text-4xl font-black leading-tight tracking-[-0.033em]">
                            All Image Tools Directory</h1>
                        <p class="text-[#4c739a] dark:text-slate-400 text-lg font-normal leading-normal max-w-2xl">
                            The central index for every professional image processing tool on our platform. Find exactly
                            what you need to transform your media.
                        </p>
                    </div>
                    <!-- Search Bar Section 
                    <div class="w-full mb-10">
                        <label class="flex flex-col min-w-40 h-14 w-full group">
                            <div
                                class="flex w-full flex-1 items-stretch rounded-xl h-full shadow-sm group-focus-within:ring-2 group-focus-within:ring-primary/50 transition-all">
                                <div
                                    class="text-[#4c739a] flex border-none bg-white dark:bg-slate-800 items-center justify-center pl-5 rounded-l-xl border-r-0">
                                    <span class="material-symbols-outlined">search</span>
                                </div>
                                <input
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-xl text-[#0d141b] dark:text-slate-50 focus:outline-0 focus:ring-0 border-none bg-white dark:bg-slate-800 focus:border-none h-full placeholder:text-[#4c739a] px-4 pl-2 text-lg font-normal leading-normal"
                                    placeholder="Search for a tool (e.g., 'compress', 'social media')..." value="" />
                            </div>
                        </label>
                    </div>-->
                    <div class="flex flex-col lg:flex-row gap-10">
                        <!-- Main Content: Tool Categories -->
                        <div class="flex-1 flex flex-col gap-12">
                            <!-- Category: Image Resizing -->
                            <section>
                                <div class="flex items-center gap-2 px-1 mb-4">
                                    <span class="material-symbols-outlined text-primary">aspect_ratio</span>
                                    <h2
                                        class="text-[#0d141b] dark:text-slate-50 text-2xl font-bold leading-tight tracking-[-0.015em]">
                                        Image Resizing</h2>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="#">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">share</span></div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            Social Media Resizer</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Optimize
                                            images for Instagram, Twitter, and LinkedIn dimensions.</p>
                                    </a>
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="#">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">settings_overscan</span>
                                        </div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            Custom Resizer</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Input
                                            exact pixel widths and heights for precision scaling.</p>
                                    </a>
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="#">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">layers</span></div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            Batch Resizer</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Resize
                                            hundreds of images simultaneously with one click.</p>
                                    </a>
                                </div>
                            </section>
                            <!-- Category: Image Compression -->
                            <section>
                                <div class="flex items-center gap-2 px-1 mb-4">
                                    <span class="material-symbols-outlined text-primary">compress</span>
                                    <h2
                                        class="text-[#0d141b] dark:text-slate-50 text-2xl font-bold leading-tight tracking-[-0.015em]">
                                        Image Compression</h2>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="./compressor.php">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">photo_camera</span></div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            JPEG Compressor</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Shrink
                                            JPEG file size while maintaining excellent visual quality.</p>
                                    </a>
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="#">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">folder_zip</span></div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            PNG Compressor</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Lossless
                                            compression for transparent PNG images.</p>
                                    </a>
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="#">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">speed</span></div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            WebP Optimizer</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Maximize
                                            performance for modern web browsers.</p>
                                    </a>
                                </div>
                            </section>
                            <!-- Category: Format Conversion -->
                            <section>
                                <div class="flex items-center gap-2 px-1 mb-4">
                                    <span class="material-symbols-outlined text-primary">swap_horiz</span>
                                    <h2
                                        class="text-[#0d141b] dark:text-slate-50 text-2xl font-bold leading-tight tracking-[-0.015em]">
                                        Format Conversion</h2>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="./converter.php">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">transform</span></div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            Convert to WebP</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Transform
                                            any format into high-efficiency WebP.</p>
                                    </a>
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="#">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">slide_library</span></div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            SVG to PNG</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Rasterize
                                            vector graphics for wider compatibility.</p>
                                    </a>
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="#">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">raw_on</span></div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            RAW to JPG</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Convert
                                            camera RAW files into accessible JPEG formats.</p>
                                    </a>
                                </div>
                            </section>
                            <!-- Category: Essential Editing -->
                            <section>
                                <div class="flex items-center gap-2 px-1 mb-4">
                                    <span class="material-symbols-outlined text-primary">edit_note</span>
                                    <h2
                                        class="text-[#0d141b] dark:text-slate-50 text-2xl font-bold leading-tight tracking-[-0.015em]">
                                        Essential Editing</h2>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="#">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">crop</span></div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            Crop Tool</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Quickly
                                            trim edges or focus on subjects.</p>
                                    </a>
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="#">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">rotate_right</span></div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            Image Rotator</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Rotate
                                            images 90, 180, or 270 degrees clockwise.</p>
                                    </a>
                                    <a class="group p-5 bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:shadow-lg transition-all"
                                        href="#">
                                        <div class="mb-3 text-primary"><span
                                                class="material-symbols-outlined text-3xl">flip</span></div>
                                        <h3 class="font-bold text-lg mb-1 group-hover:text-primary transition-colors">
                                            Flip Image</h3>
                                        <p class="text-sm text-[#4c739a] dark:text-slate-400 leading-relaxed">Mirror
                                            images horizontally or vertically instantly.</p>
                                    </a>
                                </div>
                            </section>
                        </div>
                        <!-- Sidebar -->
                        <aside class="w-full lg:w-[320px] flex flex-col gap-6">
                            <!-- Most Used Tools -->
                            <div
                                class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6">
                                <h3 class="text-[#0d141b] dark:text-slate-50 text-lg font-bold mb-4">Most Used Tools</h3>
                                <ul class="flex flex-col gap-4">
                                    <li>
                                        <a class="flex items-center gap-3 group" href="./compressor.php">
                                            <div
                                                class="size-8 rounded bg-primary/10 text-primary flex items-center justify-center">
                                                <span class="material-symbols-outlined text-xl">compress</span>
                                            </div>
                                            <span
                                                class="text-sm font-medium group-hover:text-primary transition-colors">JPEG Compressor</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center gap-3 group" href="#">
                                            <div
                                                class="size-8 rounded bg-primary/10 text-primary flex items-center justify-center">
                                                <span class="material-symbols-outlined text-xl">share</span>
                                            </div>
                                            <span
                                                class="text-sm font-medium group-hover:text-primary transition-colors">Social Resizer</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center gap-3 group" href="./converter.php">
                                            <div
                                                class="size-8 rounded bg-primary/10 text-primary flex items-center justify-center">
                                                <span class="material-symbols-outlined text-xl">transform</span>
                                            </div>
                                            <span
                                                class="text-sm font-medium group-hover:text-primary transition-colors">Convert to WebP</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Performance Guides -->
                            <div
                                class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6">
                                <h3 class="text-[#0d141b] dark:text-slate-50 text-lg font-bold mb-4">Recent Guides</h3>
                                <div class="flex flex-col gap-4">
                                    <a class="flex flex-col gap-1 group" href="./blog/performance-guide.php">
                                        <p class="text-xs font-semibold uppercase tracking-wider text-primary/70">Optimization</p>
                                        <h4 class="text-sm font-bold group-hover:underline">How to optimize for Core Web Vitals</h4>
                                        <p class="text-xs text-[#4c739a] dark:text-slate-400">Improve your site's SEO through image performance.</p>
                                    </a>
                                    <div class="h-px bg-slate-100 dark:bg-slate-700"></div>
                                    <a class="flex flex-col gap-1 group" href="#">
                                        <p class="text-xs font-semibold uppercase tracking-wider text-primary/70">Social
                                            Media</p>
                                        <h4 class="text-sm font-bold group-hover:underline">Resizing for Instagram Guide
                                            (2024)</h4>
                                        <p class="text-xs text-[#4c739a] dark:text-slate-400">A complete cheat sheet for
                                            post and story sizes.</p>
                                    </a>
                                </div>
                            </div>
                            <!-- CTA Banner -->
                            <div class="bg-primary rounded-xl p-6 text-white relative overflow-hidden">
                                <div class="relative z-10">
                                    <h3 class="font-bold text-lg mb-2">Need a Custom API?</h3>
                                    <p class="text-sm text-white/80 mb-4">Integrate our tools directly into your
                                        workflow.</p>
                                    <button
                                        class="bg-white text-primary px-4 py-2 rounded-lg text-sm font-bold hover:bg-slate-100 transition-colors">Contact Sales</button>
                                </div>
                                <div class="absolute -right-4 -bottom-4 opacity-10">
                                    <span class="material-symbols-outlined text-[100px]">api</span>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </main>
            <!-- Footer -->
            
            <?php include './includes/footer.php'; ?>

        </div>
    </div>
</body>

</html>