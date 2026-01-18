<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Core Web Vitals &amp; Image Size Guide | ImageGuide Pro</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-[#0d141b] dark:text-slate-50 transition-colors duration-200">
    <!-- Top Navigation Bar -->
    
    <?php include "../includes/header.php"; ?>

    <main class="max-w-[1280px] mx-auto px-4 md:px-10 py-8">
        <!-- Ad Placement Zone: Top Banner -->
        <div
            class="w-full h-24 bg-[#e7edf3] dark:bg-slate-800 rounded-xl mb-10 flex items-center justify-center border border-dashed border-slate-300 dark:border-slate-700">
            <span class="text-[#4c739a] text-xs font-medium uppercase tracking-widest">Advertisement</span>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Left Sidebar Navigation -->
            <aside class="hidden lg:block lg:col-span-2">
                <div class="sticky top-24 space-y-6">
                    <div>
                        <h3 class="text-xs font-bold text-[#4c739a] uppercase tracking-wider mb-4">Guide Sections</h3>
                        <nav class="flex flex-col gap-1">
                            <a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary font-semibold text-sm"
                                href="#overview">
                                <span class="material-symbols-outlined text-lg">dashboard</span> Overview
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#e7edf3] dark:hover:bg-slate-800 text-sm transition-colors"
                                href="#lcp">
                                <span class="material-symbols-outlined text-lg">timer</span> LCP Breakdown
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#e7edf3] dark:hover:bg-slate-800 text-sm transition-colors"
                                href="#cls">
                                <span class="material-symbols-outlined text-lg">aspect_ratio</span> CLS Dimensions
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#e7edf3] dark:hover:bg-slate-800 text-sm transition-colors"
                                href="#impact">
                                <span class="material-symbols-outlined text-lg">table_chart</span> Impact Table
                            </a>
                            <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#e7edf3] dark:hover:bg-slate-800 text-sm transition-colors"
                                href="#fixes">
                                <span class="material-symbols-outlined text-lg">build</span> Actionable Fixes
                            </a>
                        </nav>
                    </div>
                    <div class="pt-6 border-t border-[#e7edf3] dark:border-slate-800">
                        <h3 class="text-xs font-bold text-[#4c739a] uppercase tracking-wider mb-4">Privacy Guide</h3>
                        <div
                            class="p-3 bg-white dark:bg-slate-900 border border-[#e7edf3] dark:border-slate-800 rounded-lg">
                            <p class="text-[11px] leading-relaxed text-[#4c739a]">All image processing is done
                                client-side. Your data never leaves your browser. <strong>GDPR Compliant.</strong></p>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Main Content Area -->
            <div class="lg:col-span-7 space-y-12">
                <!-- Hero Section -->
                <section class="space-y-6" id="overview">
                    <div class="space-y-4">
                        <h1
                            class="text-4xl md:text-5xl font-black leading-tight tracking-tight text-[#0d141b] dark:text-white">
                            How Image Size Affects Your Core Web Vitals
                        </h1>
                        <p class="text-lg text-[#4c739a] dark:text-slate-400 max-w-2xl leading-relaxed">
                            Images often account for 60% of a page's total weight. Optimize LCP, CLS, and FID to boost
                            your Search Console performance and maximize AdSense revenue.
                        </p>
                    </div>
                    <div
                        class="p-6 bg-white dark:bg-slate-900 rounded-2xl border border-[#cfdbe7] dark:border-slate-800 shadow-sm">
                        <h2 class="text-lg font-bold mb-6">The Core Web Vitals Scoreboard</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div
                                class="flex flex-col items-center p-4 bg-[#f0f9ff] dark:bg-primary/5 rounded-xl border border-primary/20">
                                <div class="relative size-20 flex items-center justify-center mb-3">
                                    <svg class="size-full -rotate-90" viewbox="0 0 36 36">
                                        <circle class="stroke-slate-200 dark:stroke-slate-800" cx="18" cy="18"
                                            fill="none" r="16" stroke-width="3"></circle>
                                        <circle class="stroke-primary" cx="18" cy="18" fill="none" r="16"
                                            stroke-dasharray="85, 100" stroke-linecap="round" stroke-width="3"></circle>
                                    </svg>
                                    <span class="absolute text-sm font-bold">1.2s</span>
                                </div>
                                <span class="text-xs font-bold uppercase tracking-wider mb-1">LCP</span>
                                <span
                                    class="text-[10px] px-2 py-0.5 bg-green-100 text-green-700 font-bold rounded-full">GOOD</span>
                            </div>
                            <div
                                class="flex flex-col items-center p-4 bg-[#f0f9ff] dark:bg-primary/5 rounded-xl border border-primary/20">
                                <div class="relative size-20 flex items-center justify-center mb-3">
                                    <svg class="size-full -rotate-90" viewbox="0 0 36 36">
                                        <circle class="stroke-slate-200 dark:stroke-slate-800" cx="18" cy="18"
                                            fill="none" r="16" stroke-width="3"></circle>
                                        <circle class="stroke-primary" cx="18" cy="18" fill="none" r="16"
                                            stroke-dasharray="95, 100" stroke-linecap="round" stroke-width="3"></circle>
                                    </svg>
                                    <span class="absolute text-sm font-bold">0.05</span>
                                </div>
                                <span class="text-xs font-bold uppercase tracking-wider mb-1">CLS</span>
                                <span
                                    class="text-[10px] px-2 py-0.5 bg-green-100 text-green-700 font-bold rounded-full">GOOD</span>
                            </div>
                            <div
                                class="flex flex-col items-center p-4 bg-[#fff9f0] dark:bg-orange-900/5 rounded-xl border border-orange-200 dark:border-orange-900/30">
                                <div class="relative size-20 flex items-center justify-center mb-3">
                                    <svg class="size-full -rotate-90" viewbox="0 0 36 36">
                                        <circle class="stroke-slate-200 dark:stroke-slate-800" cx="18" cy="18"
                                            fill="none" r="16" stroke-width="3"></circle>
                                        <circle class="stroke-orange-500" cx="18" cy="18" fill="none" r="16"
                                            stroke-dasharray="60, 100" stroke-linecap="round" stroke-width="3"></circle>
                                    </svg>
                                    <span class="absolute text-sm font-bold">12ms</span>
                                </div>
                                <span class="text-xs font-bold uppercase tracking-wider mb-1">FID</span>
                                <span
                                    class="text-[10px] px-2 py-0.5 bg-orange-100 text-orange-700 font-bold rounded-full">FAIR</span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- LCP Section -->
                <section class="space-y-6" id="lcp">
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-primary rounded-lg text-white">
                            <span class="material-symbols-outlined">timer</span>
                        </div>
                        <h2 class="text-2xl font-bold">1. Largest Contentful Paint (LCP)</h2>
                    </div>
                    <div class="prose prose-slate dark:prose-invert max-w-none">
                        <p class="text-[#4c739a] dark:text-slate-400 leading-relaxed">
                            LCP measures the time it takes for the largest element on the screen to be fully rendered.
                            For 85% of websites, this element is an <strong>image</strong> (hero banner, product image,
                            or article feature).
                        </p>
                        <div
                            class="my-6 aspect-video bg-slate-200 dark:bg-slate-800 rounded-xl overflow-hidden relative group">
                            <div class="absolute inset-0 bg-gradient-to-tr from-primary/20 to-transparent"></div>
                            <div
                                class="absolute bottom-4 left-4 right-4 bg-white/90 dark:bg-slate-900/90 p-4 rounded-lg border border-white/20">
                                <p class="text-xs font-bold text-primary uppercase mb-1">Technical Insight</p>
                                <p class="text-sm font-medium">Unoptimized hero images can delay LCP by over 3 seconds
                                    on 4G connections.</p>
                            </div>
                            <div
                                class="w-full h-full flex items-center justify-center text-slate-400 opacity-20 group-hover:opacity-40 transition-opacity">
                                <span class="material-symbols-outlined text-8xl">image</span>
                            </div>
                        </div>
                        <p class="text-[#4c739a] dark:text-slate-400 leading-relaxed">
                            The #1 cause of slow LCP is "Unsized Content" and "Legacy Formats". By switching from PNG to
                            WebP and compressing the file, you can often cut LCP times by 50% or more.
                        </p>
                    </div>
                </section>
                <!-- Ad Placement Zone: Mid Content -->
                <div
                    class="w-full h-32 bg-[#e7edf3] dark:bg-slate-800 rounded-xl flex items-center justify-center border border-dashed border-slate-300 dark:border-slate-700">
                    <span class="text-[#4c739a] text-xs font-medium uppercase tracking-widest">Advertisement</span>
                </div>
                <!-- CLS Section -->
                <section class="space-y-6" id="cls">
                    <div class="flex items-center gap-3">
                        <div class="p-2 bg-primary rounded-lg text-white">
                            <span class="material-symbols-outlined">aspect_ratio</span>
                        </div>
                        <h2 class="text-2xl font-bold">2. Cumulative Layout Shift (CLS)</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="space-y-4">
                            <p class="text-[#4c739a] dark:text-slate-400 leading-relaxed">
                                CLS measures visual stability. If your images don't have defined width and height
                                attributes, the browser doesn't know how much space to reserve while the image loads.
                            </p>
                            <p class="text-[#4c739a] dark:text-slate-400 leading-relaxed font-semibold italic">
                                Result: The text "jumps" down once the image appears, frustrating users and hurting your
                                SEO.
                            </p>
                        </div>
                        <div
                            class="p-4 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl space-y-4">
                            <h4 class="text-sm font-bold uppercase tracking-wider text-[#4c739a]">The Fix: Define
                                Dimensions</h4>
                            <div
                                class="font-mono text-xs bg-slate-100 dark:bg-slate-800 p-3 rounded-lg overflow-x-auto text-primary">
                                &lt;img src="hero.webp" <br />
                                    width="1200" <br />
                                    height="630" <br />
                                    alt="SEO Optimization"&gt;
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Impact Table Section -->
                <section class="space-y-6" id="impact">
                    <h2 class="text-2xl font-bold">The Correlation: File Size vs. Mobile Speed</h2>
                    <div class="overflow-x-auto rounded-xl border border-slate-200 dark:border-slate-800">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-slate-50 dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#4c739a]">
                                        Format</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#4c739a]">File
                                        Size (KB)</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#4c739a]">Load
                                        Time (Mobile)</th>
                                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#4c739a]">LCP
                                        Score</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-900 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium">Original PNG</td>
                                    <td class="px-6 py-4 text-sm">850 KB</td>
                                    <td class="px-6 py-4 text-sm text-red-500 font-bold">4.2s</td>
                                    <td class="px-6 py-4"><span
                                            class="px-2 py-1 bg-red-100 text-red-700 text-[10px] font-bold rounded">POOR</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-900 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium">Compressed JPG</td>
                                    <td class="px-6 py-4 text-sm">240 KB</td>
                                    <td class="px-6 py-4 text-sm text-orange-500 font-bold">1.8s</td>
                                    <td class="px-6 py-4"><span
                                            class="px-2 py-1 bg-orange-100 text-orange-700 text-[10px] font-bold rounded">NEEDS
                                            WORK</span></td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-900 transition-colors">
                                    <td class="px-6 py-4 text-sm font-medium">Optimized WebP</td>
                                    <td class="px-6 py-4 text-sm">45 KB</td>
                                    <td class="px-6 py-4 text-sm text-green-600 font-bold">0.6s</td>
                                    <td class="px-6 py-4"><span
                                            class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded">EXCELLENT</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- Fixes CTA Section -->
                <section class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-8" id="fixes">
                    <div class="p-8 bg-primary rounded-2xl text-white space-y-4 shadow-lg shadow-primary/20">
                        <span class="material-symbols-outlined text-4xl">compress</span>
                        <h3 class="text-xl font-bold">Reduce File Size</h3>
                        <p class="text-primary/10 text-sm leading-relaxed text-white/80">
                            Our AI-powered compressor reduces file sizes by up to 90% without visible quality loss.
                        </p>
                        <button
                        onClick="location.href='../compressor.php'"
                            class="w-full bg-white text-primary font-bold py-3 rounded-lg hover:bg-slate-50 transition-colors">
                            Compress Image
                        </button>
                    </div>
                    <div
                        class="p-8 bg-white dark:bg-slate-900 border border-primary/20 rounded-2xl space-y-4 shadow-sm">
                        <span class="material-symbols-outlined text-4xl text-primary">straighten</span>
                        <h3 class="text-xl font-bold">Resize &amp; Fix CLS</h3>
                        <p class="text-[#4c739a] text-sm leading-relaxed">
                            Automatically set correct width and height attributes to stop layout shifts and improve
                            stability.
                        </p>
                        <button
                        onClick="location.href='../resize.php'"
                            class="w-full bg-[#e7edf3] dark:bg-slate-800 text-[#0d141b] dark:text-white font-bold py-3 rounded-lg hover:bg-[#dbe4ee] dark:hover:bg-slate-700 transition-colors">
                            Resize Image
                        </button>
                    </div>
                </section>
                <!-- Search Console Tips -->
                <section class="bg-[#f0f9ff] dark:bg-primary/5 border-l-4 border-primary p-6 rounded-r-xl">
                    <div class="flex gap-4">
                        <span class="material-symbols-outlined text-primary">info</span>
                        <div class="space-y-2">
                            <h4 class="font-bold">Search Console Pro-Tip</h4>
                            <p class="text-sm text-[#4c739a] leading-relaxed">
                                Google Search Console flags pages as "Poor" even if just 1 image is over the threshold.
                                Use the <strong>PageSpeed Insights API</strong> to identify specific image URLs causing
                                LCP failure before applying bulk fixes.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Right Sidebar -->
            <aside class="lg:col-span-3 space-y-8">
                <!-- Ad Placement Zone: Sidebar Rectangle -->
                <div
                    class="w-full h-[250px] bg-[#e7edf3] dark:bg-slate-800 rounded-xl flex flex-col items-center justify-center border border-dashed border-slate-300 dark:border-slate-700">
                    <span
                        class="text-[#4c739a] text-[10px] font-medium uppercase tracking-widest mb-2">Advertisement</span>
                    <div class="text-slate-400">
                        <span class="material-symbols-outlined text-4xl">ads_click</span>
                    </div>
                </div>
                <!-- Recommended Tools Widget -->
                <div
                    class="p-6 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                    <h3 class="font-bold mb-4">Recommended Tools</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <div
                                class="size-8 rounded bg-green-50 text-green-600 flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-lg">image_search</span>
                            </div>
                            <div>
                                <h5 class="text-xs font-bold">WebP Converter</h5>
                                <p class="text-[11px] text-[#4c739a]">Next-gen format generator</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="size-8 rounded bg-orange-50 text-orange-600 flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-lg">batch_prediction</span>
                            </div>
                            <div>
                                <h5 class="text-xs font-bold">Bulk Processor</h5>
                                <p class="text-[11px] text-[#4c739a]">Optimize 100+ images at once</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="size-8 rounded bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-lg">analytics</span>
                            </div>
                            <div>
                                <h5 class="text-xs font-bold">Core Vitals Audit</h5>
                                <p class="text-[11px] text-[#4c739a]">Real-time site scanning</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Ad Placement Zone: Sidebar Sticky Sticky Skyscraper -->
                <div
                    class="sticky top-24 w-full h-[600px] bg-[#e7edf3] dark:bg-slate-800 rounded-xl flex flex-col items-center justify-center border border-dashed border-slate-300 dark:border-slate-700">
                    <span
                        class="text-[#4c739a] text-[10px] font-medium uppercase tracking-widest mb-2">Advertisement</span>
                    <div class="text-slate-400">
                        <span class="material-symbols-outlined text-4xl">featured_video</span>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    
    <?php include "../includes/footer.php"; ?>

</body>

</html>