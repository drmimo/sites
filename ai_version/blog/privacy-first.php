<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Privacy-First Authority Guide | Protecting Your Digital Assets</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        "display": ["Inter", "sans-serif"]
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

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display transition-colors duration-200">
    <!-- Top Navigation Bar -->
    
    <?php include "../includes/header.php"; ?>

    <main class="max-w-[1280px] mx-auto px-4 md:px-10 py-10">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Main Content Area -->
            <div class="flex-1 max-w-[840px]">
                <!-- Hero Section -->
                <section class="mb-12">
                    <div class="bg-primary/5 dark:bg-primary/10 rounded-2xl p-8 md:p-12 border border-primary/10">
                        <span
                            class="inline-block bg-primary text-white text-[10px] font-bold uppercase tracking-widest px-2 py-1 rounded mb-4">Official
                            Authority Guide</span>
                        <h1 class="text-3xl md:text-5xl font-black leading-tight tracking-tight mb-6 dark:text-white">
                            Why Privacy-First Image Tools Matter: Protecting Your Digital Assets
                        </h1>
                        <p class="text-lg text-slate-600 dark:text-slate-300 mb-8 leading-relaxed">
                            Experience the power of browser-side processing. Your data never leaves your device,
                            ensuring total security and lightning-fast performance without server-side risks.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <button
                                class="bg-primary text-white px-6 py-3 rounded-lg font-bold flex items-center gap-2 shadow-lg shadow-primary/20 hover:scale-[1.02] transition-transform">
                                <span class="material-symbols-outlined">bolt</span>
                                Start Processing Locally
                            </button>
                            <button
                                class="border border-slate-300 dark:border-slate-700 px-6 py-3 rounded-lg font-bold text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                                Read White Paper
                            </button>
                        </div>
                    </div>
                </section>
                <!-- Section: The Hidden Risk -->
                <section class="mb-16">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="material-symbols-outlined text-red-500">warning</span>
                        <h2 class="text-2xl font-bold dark:text-white">The Hidden Risk: Why Server Uploads Matter</h2>
                    </div>
                    <div class="space-y-4 text-slate-600 dark:text-slate-400 leading-7 text-base">
                        <p>
                            Every time you upload an image to a conventional online tool, you are handing over your
                            digital footprint to a third-party server. Most users assume these files are deleted
                            immediately, but the reality is often more complex. Data breaches are at an all-time high,
                            and your sensitive visuals could be stored, analyzed, or even used for <strong>unauthorized
                                training of AI models</strong>.
                        </p>
                        <p>
                            When you use cloud-based editors, your private metadata—including GPS coordinates, device
                            information, and timestamps—is exposed. Our commitment to privacy means we never see your
                            files. Our tools leverage the power of your browser's hardware acceleration to process
                            images right where they are: on your machine.
                        </p>
                        <!--a class="inline-flex items-center text-primary font-semibold underline underline-offset-4 hover:opacity-80"
                            href="#">
                            Visit our Privacy Center for detailed security protocols
                            <span class="material-symbols-outlined text-sm ml-1">open_in_new</span>
                        </a-->
                    </div>
                </section>
                <!-- Section: How Browser-Side Processing Works -->
                <section
                    class="mb-16 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl overflow-hidden">
                    <div class="p-8 border-b border-slate-200 dark:border-slate-800">
                        <h2 class="text-2xl font-bold dark:text-white mb-2">How Browser-Side Processing Works</h2>
                        <p class="text-slate-500 text-sm">A technical but accessible look at 100% local data flow.</p>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                            <!-- Step 1 -->
                            <div class="flex flex-col items-center text-center group">
                                <div
                                    class="size-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                                    <span class="material-symbols-outlined text-3xl">upload_file</span>
                                </div>
                                <h3 class="font-bold mb-2">1. Image Input</h3>
                                <p class="text-sm text-slate-500">You select an image. It is loaded into your browser's
                                    temporary memory (RAM).</p>
                            </div>
                            <!-- Arrow -->
                            <div class="hidden md:block absolute left-[28%] top-8 text-slate-300">
                                <span class="material-symbols-outlined text-4xl">arrow_forward</span>
                            </div>
                            <!-- Step 2 -->
                            <div class="flex flex-col items-center text-center group">
                                <div
                                    class="size-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                                    <span class="material-symbols-outlined text-3xl">memory</span>
                                </div>
                                <h3 class="font-bold mb-2">2. Local Compute</h3>
                                <p class="text-sm text-slate-500">Your CPU/GPU performs the resize or compression. 0
                                    bytes leave your machine.</p>
                            </div>
                            <!-- Arrow -->
                            <div class="hidden md:block absolute left-[62%] top-8 text-slate-300">
                                <span class="material-symbols-outlined text-4xl">arrow_forward</span>
                            </div>
                            <!-- Step 3 -->
                            <div class="flex flex-col items-center text-center group">
                                <div
                                    class="size-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                                    <span class="material-symbols-outlined text-3xl">download_done</span>
                                </div>
                                <h3 class="font-bold mb-2">3. Instant Output</h3>
                                <p class="text-sm text-slate-500">The processed file is saved back to your storage
                                    instantly. Secure and fast.</p>
                            </div>
                        </div>
                        <div
                            class="mt-10 p-4 bg-slate-50 dark:bg-slate-800 rounded-lg border border-dashed border-slate-300 dark:border-slate-700 text-center">
                            <p class="text-sm font-medium">Try it yourself with our 
                                <a class="text-primary hover:underline" href="<?= BASE_URL.'/resize.php'; ?>">Smart Resizer</a> or 
                                <a class="text-primary hover:underline" href="<?= BASE_URL.'/compressor.php';?>">Image Compressor</a>.</p>
                        </div>
                    </div>
                </section>
                <!-- Comparison Table Section -->
                <section class="mb-16">
                    <h2 class="text-2xl font-bold dark:text-white mb-6">Local vs. Traditional Cloud Tools</h2>
                    <div class="overflow-x-auto rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 dark:bg-slate-800/50">
                                    <th class="p-4 font-bold text-sm">Feature</th>
                                    <th class="p-4 font-bold text-sm text-primary">Browser-Based (Us)</th>
                                    <th class="p-4 font-bold text-sm text-slate-500">Traditional Cloud</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                                <tr>
                                    <td class="p-4 text-sm font-medium">Data Transfer</td>
                                    <td
                                        class="p-4 text-sm text-green-600 dark:text-green-400 font-bold flex items-center gap-2">
                                        <span class="material-symbols-outlined text-sm">check_circle</span> No Upload
                                        Needed
                                    </td>
                                    <td class="p-4 text-sm text-slate-500">Required (Server Side)</td>
                                </tr>
                                <tr>
                                    <td class="p-4 text-sm font-medium">Security</td>
                                    <td
                                        class="p-4 text-sm text-green-600 dark:text-green-400 font-bold flex items-center gap-2">
                                        <span class="material-symbols-outlined text-sm">check_circle</span>
                                        Zero-Knowledge
                                    </td>
                                    <td class="p-4 text-sm text-slate-500">Third-party Trust Needed</td>
                                </tr>
                                <tr>
                                    <td class="p-4 text-sm font-medium">Processing Speed</td>
                                    <td
                                        class="p-4 text-sm text-green-600 dark:text-green-400 font-bold flex items-center gap-2">
                                        <span class="material-symbols-outlined text-sm">check_circle</span>
                                        Instantaneous
                                    </td>
                                    <td class="p-4 text-sm text-slate-500">Depends on Network</td>
                                </tr>
                                <tr>
                                    <td class="p-4 text-sm font-medium">File Storage</td>
                                    <td
                                        class="p-4 text-sm text-green-600 dark:text-green-400 font-bold flex items-center gap-2">
                                        <span class="material-symbols-outlined text-sm">check_circle</span> Never Stored
                                    </td>
                                    <td class="p-4 text-sm text-slate-500">Often Logged/Stored</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- FAQ Section -->
                <section class="mb-16">
                    <h2 class="text-2xl font-bold dark:text-white mb-6">Security FAQ</h2>
                    <div class="space-y-4">
                        <div class="border border-slate-200 dark:border-slate-800 rounded-lg p-5">
                            <h4 class="font-bold mb-2 flex justify-between items-center cursor-pointer">
                                Are my images really not being uploaded?
                                <span class="material-symbols-outlined text-primary">expand_more</span>
                            </h4>
                            <p class="text-sm text-slate-500">Yes. You can verify this by checking your browser's
                                "Network" tab in developer tools while processing. No data is sent to our servers during
                                the image transformation process.</p>
                        </div>
                        <div class="border border-slate-200 dark:border-slate-800 rounded-lg p-5">
                            <h4 class="font-bold mb-2 flex justify-between items-center cursor-pointer">
                                Does this work on mobile devices?
                                <span class="material-symbols-outlined text-primary">expand_more</span>
                            </h4>
                            <p class="text-sm text-slate-500">Absolutely. Modern mobile browsers are powerful enough to
                                handle sophisticated image processing locally.</p>
                        </div>
                    </div>
                </section>
                <!-- CTA Section -->
                <section class="bg-primary rounded-2xl p-10 text-center text-white">
                    <h2 class="text-3xl font-black mb-4">Ready to process securely?</h2>
                    <p class="text-white/80 mb-8 text-lg">Join 100k+ privacy-conscious users who trust our local
                        processing suite.</p>
                    <button
                        class="bg-white text-primary px-8 py-4 rounded-xl font-black text-lg hover:bg-slate-50 transition-colors shadow-xl">
                        Explore Home Hub
                    </button>
                </section>
            </div>
            <!-- Sidebar -->
            <aside class="w-full lg:w-[320px] space-y-8">
                <!-- AdSense Placeholder -->
                <div
                    class="w-full aspect-square bg-slate-100 dark:bg-slate-800/50 rounded-xl border border-slate-200 dark:border-slate-800 flex flex-col items-center justify-center p-4">
                    <span class="text-[10px] uppercase font-bold text-slate-400 mb-2">Sponsored Content</span>
                    <div class="w-full h-full bg-slate-200 dark:bg-slate-700/50 rounded-lg flex items-center justify-center"
                        data-alt="Abstract placeholder for advertising unit">
                        <span class="material-symbols-outlined text-slate-300 text-4xl">ads_click</span>
                    </div>
                </div>
                <!-- Related Resources -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6">
                    <h3 class="font-bold text-lg mb-4 dark:text-white">Related Resources</h3>
                    <ul class="space-y-4">
                        <li>
                            <a class="group flex items-start gap-3" href="<?= BASE_URL.'/blog/performance-guide.php'; ?>">
                                <div
                                    class="size-10 shrink-0 bg-slate-100 dark:bg-slate-800 rounded-lg flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined text-xl">speed</span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold leading-snug group-hover:text-primary transition-colors">Web Performance Guide</h4>
                                    <p class="text-xs text-slate-500">Why local tools are 3x faster</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="group flex items-start gap-3" href="#">
                                <div
                                    class="size-10 shrink-0 bg-slate-100 dark:bg-slate-800 rounded-lg flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined text-xl">database</span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold leading-snug group-hover:text-primary transition-colors">The Cost of Cloud Storage</h4>
                                    <p class="text-xs text-slate-500">Hidden privacy expenses</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="group flex items-start gap-3" href="#">
                                <div
                                    class="size-10 shrink-0 bg-slate-100 dark:bg-slate-800 rounded-lg flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined text-xl">lock</span>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold leading-snug group-hover:text-primary transition-colors">Encryption Basics</h4>
                                    <p class="text-xs text-slate-500">Securing your metadata</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Table of Contents Sticky -->
                <div
                    class="sticky top-24 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6">
                    <h3 class="font-bold text-lg mb-4 dark:text-white">Quick Navigation</h3>
                    <nav class="space-y-3">
                        <a class="block text-sm text-slate-600 dark:text-slate-400 hover:text-primary border-l-2 border-transparent hover:border-primary pl-3 transition-all"
                            href="#">The Hidden Risk</a>
                        <a class="block text-sm text-slate-600 dark:text-slate-400 hover:text-primary border-l-2 border-transparent hover:border-primary pl-3 transition-all"
                            href="#">Local Processing Logic</a>
                        <a class="block text-sm text-slate-600 dark:text-slate-400 hover:text-primary border-l-2 border-transparent hover:border-primary pl-3 transition-all"
                            href="#">Performance Benefits</a>
                        <a class="block text-sm text-slate-600 dark:text-slate-400 hover:text-primary border-l-2 border-transparent hover:border-primary pl-3 transition-all"
                            href="#">Comparison Table</a>
                        <a class="block text-sm text-slate-600 dark:text-slate-400 hover:text-primary border-l-2 border-transparent hover:border-primary pl-3 transition-all"
                            href="#">Security FAQ</a>
                    </nav>
                </div>
            </aside>
        </div>
    </main>
    <!-- Footer -->
    
    <?php include "../includes/footer.php"; ?>

</body>

</html>