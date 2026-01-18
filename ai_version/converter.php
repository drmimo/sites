<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>All-in-One Image Converter Tool | ImageToolbox</title>
    <script src="./js/tailwindcss.js?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
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
    <style type="text/tailwindcss">
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .drop-zone-active {
            border-color: #137fec;
            background-color: rgba(19, 127, 236, 0.05);
        }
        input[type='range']::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 18px;
            height: 18px;
            background: #137fec;
            cursor: pointer;
            border-radius: 50%;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-[#0d141b] dark:text-slate-50 transition-colors duration-200">
    
    <?php include './includes/header.php'; ?>

    <main class="max-w-[1280px] mx-auto px-4 lg:px-10 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="flex-1 space-y-8">
                <header class="mb-6">
                    <h1 class="text-3xl font-extrabold tracking-tight text-[#0d141b] dark:text-white mb-2">All-in-One
                        Image Converter</h1>
                    <p class="text-[#4c739a] max-w-2xl">Convert any image format in your browser. Fast, free, and
                        private – your files never leave your computer.</p>
                </header>
                <div class="relative group">
                    <div
                        class="border-2 border-dashed border-[#d1d5db] dark:border-slate-700 bg-white dark:bg-slate-800/50 rounded-2xl p-12 flex flex-col items-center justify-center transition-all hover:border-primary group-hover:bg-primary/5 cursor-pointer">
                        <div
                            class="size-16 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-4 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined !text-4xl">cloud_upload</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Select Images to Convert</h3>
                        <p class="text-[#4c739a] text-sm text-center mb-6">Drag and drop files here, or click to browse</p>
                        <div class="flex gap-3">
                            <span class="text-xs bg-slate-100 dark:bg-slate-700 px-2 py-1 rounded">JPG</span>
                            <span class="text-xs bg-slate-100 dark:bg-slate-700 px-2 py-1 rounded">PNG</span>
                            <span class="text-xs bg-slate-100 dark:bg-slate-700 px-2 py-1 rounded">WebP</span>
                            <span class="text-xs bg-slate-100 dark:bg-slate-700 px-2 py-1 rounded">HEIC</span>
                            <span class="text-xs bg-slate-100 dark:bg-slate-700 px-2 py-1 rounded">+ More</span>
                        </div>
                    </div>
                    <input class="absolute inset-0 opacity-0 cursor-pointer" multiple="multiple" type="file" accept="image/*" />
                </div>
                <div
                    class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6 shadow-sm">
                    <div class="flex flex-col md:flex-row gap-8 items-start">
                        <div class="flex-1 w-full">
                            <div class="flex items-center justify-between mb-4">
                                <label class="font-bold text-sm uppercase tracking-wide text-[#4c739a]">Convert
                                    To</label>
                                <a class="text-primary text-xs font-semibold hover:underline flex items-center gap-1"
                                    href="./blog/formats-guide.php">
                                    <span class="material-symbols-outlined !text-sm">help</span>
                                    Help me choose
                                </a>
                            </div>
                            <div class="grid grid-cols-3 gap-3">
                                <button
                                    class="flex flex-col items-center p-3 rounded-lg border-2 border-primary bg-primary/5 ring-2 ring-primary/20">
                                    <span class="text-sm font-bold">WebP</span>
                                    <span class="text-[10px] text-primary uppercase font-bold">Best for Web</span>
                                </button>
                                <button
                                    class="flex flex-col items-center p-3 rounded-lg border border-slate-200 dark:border-slate-700 hover:border-primary transition-colors">
                                    <span class="text-sm font-bold">JPG</span>
                                    <span class="text-[10px] text-slate-400 uppercase font-bold">Photos</span>
                                </button>
                                <button
                                    class="flex flex-col items-center p-3 rounded-lg border border-slate-200 dark:border-slate-700 hover:border-primary transition-colors">
                                    <span class="text-sm font-bold">PNG</span>
                                    <span class="text-[10px] text-slate-400 uppercase font-bold">Graphics</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex-1 w-full">
                            <div class="flex items-center justify-between mb-4">
                                <label class="font-bold text-sm uppercase tracking-wide text-[#4c739a]">Image Quality</label>
                                <span id="sliderValue" class="text-primary font-bold text-sm">80%</span>
                            </div>
                            <div class="pt-4">
                                <input
                                    class="w-full h-2 bg-slate-200 dark:bg-slate-700 rounded-lg appearance-none cursor-pointer accent-primary"
                                    max="100" min="1" type="range" value="80"/>
                                <div class="flex justify-between mt-2 text-[10px] text-slate-400 font-bold uppercase">
                                    <span>Small Size</span>
                                    <span>High Quality</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-700 flex flex-wrap items-center justify-between gap-4">
                        <div class="flex items-center gap-3 text-[#4c739a]">
                            <span class="material-symbols-outlined text-green-500">lock</span>
                            <span class="text-xs">Browser-based processing. Your data stays private.</span>
                        </div>
                        <button
                            class="bg-primary text-white font-bold px-8 py-3 rounded-lg shadow-lg shadow-primary/20 hover:scale-[1.02] transition-all flex items-center gap-2">
                            <span class="material-symbols-outlined">play_arrow</span>
                            Start Conversion
                        </button>
                    </div>
                </div>
                <section class="pt-12">
                    <h2 class="text-xl font-bold mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">auto_stories</span>
                        Master Image Optimization
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a class="group p-4 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl hover:border-primary transition-all flex items-start gap-4"
                            href="./blog/formats-guide.php">
                            <div
                                class="size-12 rounded-lg bg-slate-100 dark:bg-slate-900 flex-shrink-0 flex items-center justify-center group-hover:bg-primary/10 group-hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">compare</span>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1 group-hover:text-primary transition-colors">Image Formats Ultimate Guide</h4>
                                <p class="text-xs text-[#4c739a] line-clamp-2">Learn the critical differences between
                                    WebP, JPEG, and PNG for better performance.</p>
                            </div>
                        </a>
                        <a class="group p-4 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl hover:border-primary transition-all flex items-start gap-4"
                            href="./blog/performance-guide.php">
                            <div
                                class="size-12 rounded-lg bg-slate-100 dark:bg-slate-900 flex-shrink-0 flex items-center justify-center group-hover:bg-primary/10 group-hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">speed</span>
                            </div>
                            <div>
                                <h4 class="font-bold mb-1 group-hover:text-primary transition-colors">How to Optimize Performance</h4>
                                <p class="text-xs text-[#4c739a] line-clamp-2">Step-by-step guide on reducing file size without losing visual quality.</p>
                            </div>
                        </a>
                    </div>
                </section>
                <div
                    class="w-full bg-[#f0f2f4] dark:bg-slate-800/50 border-2 border-dashed border-[#d1d5db] dark:border-slate-700 h-28 flex items-center justify-center rounded-xl">
                    <p class="text-[#9ca3af] text-xs font-mono uppercase tracking-widest">Advertisement - 728x90 Banner
                    </p>
                </div>
            </div>
            <aside class="w-full lg:w-[320px] space-y-6">
                <div
                    class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6 shadow-sm">
                    <h4 class="font-bold text-sm uppercase tracking-wider text-slate-500 mb-4">Quick Format Guide</h4>
                    <div class="space-y-4">
                        <div class="flex gap-3">
                            <div class="size-2 mt-1.5 rounded-full bg-green-500 flex-shrink-0"></div>
                            <p class="text-sm"><strong class="text-primary">WebP:</strong> Use for 30%+ better
                                performance on modern web browsers.</p>
                        </div>
                        <div class="flex gap-3">
                            <div class="size-2 mt-1.5 rounded-full bg-blue-500 flex-shrink-0"></div>
                            <p class="text-sm"><strong>JPEG:</strong> Best for photos where slight loss in quality is
                                acceptable for small sizes.</p>
                        </div>
                        <div class="flex gap-3">
                            <div class="size-2 mt-1.5 rounded-full bg-purple-500 flex-shrink-0"></div>
                            <p class="text-sm"><strong>PNG:</strong> Essential for graphics requiring transparent
                                backgrounds.</p>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-slate-100 dark:border-slate-700 text-center">
                        <a class="text-xs font-bold text-primary hover:underline" href="./blog/formats-guide.php">Read full guide →</a>
                    </div>
                </div>
                <div
                    class="w-full h-[250px] bg-[#f0f2f4] dark:bg-slate-800 border border-[#d1d5db] dark:border-slate-700 flex items-center justify-center rounded-xl">
                    <p class="text-[#9ca3af] text-xs font-mono uppercase tracking-widest text-center px-4">AdSense Ready
                        - 300x250</p>
                </div>
                <div
                    class="p-6 bg-gradient-to-br from-primary to-[#0052cc] text-white rounded-xl shadow-lg relative overflow-hidden group">
                    <div class="relative z-10">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="material-symbols-outlined !text-lg">verified_user</span>
                            <h4 class="font-bold text-sm uppercase tracking-wider">100% Private</h4>
                        </div>
                        <p class="text-sm text-white/90 leading-relaxed">Images are processed locally using your
                            browser's power. We never upload your original files to any server.</p>
                    </div>
                    <div
                        class="absolute -bottom-6 -right-6 text-white/10 group-hover:scale-110 transition-transform duration-500">
                        <span class="material-symbols-outlined !text-[120px]">shield</span>
                    </div>
                </div>
                <div class="p-6 border-l-4 border-primary bg-white dark:bg-slate-800 rounded-r-xl shadow-sm">
                    <div class="flex items-center gap-2 text-primary font-bold mb-2 text-sm">
                        <span class="material-symbols-outlined !text-base">lightbulb</span>
                        PRO TIP
                    </div>
                    <p class="text-xs leading-relaxed italic text-[#4c739a]">
                        Converting to WebP can improve your site's LCP score by reducing image weight by up to 75%
                        without visible quality loss.
                    </p>
                </div>
            </aside>
        </div>
    </main>
    
    <?php include './includes/footer.php'; ?>

</body>

</html>