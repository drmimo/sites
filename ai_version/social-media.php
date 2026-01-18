<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Social Media Image Optimizer - Prepare Images for Social Media</title>
    <script src="./js/tailwindcss.js?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
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
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-size: 24px;
            vertical-align: middle;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col">
    <!-- Top Navigation -->
    
    <?php include './includes/header.php'; ?>
    
    <main class="flex-grow">
        <!-- Hero Section & CTA -->
        <section class="max-w-[1200px] mx-auto px-4 py-12 lg:py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="flex flex-col gap-6">
                    <h1
                        class="text-4xl lg:text-6xl font-black leading-tight tracking-tight text-slate-900 dark:text-white">
                        Optimize Images for Instagram, Facebook &amp; Twitter
                    </h1>
                    <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-lg">
                        Professional-grade image optimization tailored for every social platform. Fast, free, and secure
                        browser-based processing. No data leaves your machine.
                    </p>
                    <div class="flex flex-wrap gap-4 mt-4">
                        <div
                            class="flex items-center gap-2 px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 rounded-full text-xs font-bold uppercase tracking-wider">
                            <span class="material-symbols-outlined text-sm">security</span> 100% Secure
                        </div>
                        <div
                            class="flex items-center gap-2 px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 rounded-full text-xs font-bold uppercase tracking-wider">
                            <span class="material-symbols-outlined text-sm">bolt</span> Instant Processing
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-xl shadow-slate-200/50 dark:shadow-none border border-slate-100 dark:border-slate-700">
                    <div
                        class="border-2 border-dashed border-slate-300 dark:border-slate-600 rounded-xl p-10 flex flex-col items-center justify-center text-center gap-4 hover:border-primary transition-colors cursor-pointer bg-slate-50 dark:bg-slate-900/50">
                        <span
                            class="material-symbols-outlined text-5xl text-slate-400 dark:text-slate-500">cloud_upload</span>
                        <div>
                            <p class="text-lg font-bold text-slate-900 dark:text-white">Upload Your Image to Begin</p>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Drag and drop files here or click to
                                browse</p>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-col gap-3">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-widest">Or enter an image
                            URL</label>
                        <div class="flex gap-2">
                            <input
                                class="flex-1 bg-slate-50 dark:bg-slate-900 border-none rounded-lg focus:ring-2 focus:ring-primary text-sm p-3"
                                placeholder="https://example.com/image.jpg" type="text" />
                            <button
                                class="bg-primary text-white px-6 py-3 rounded-lg font-bold text-sm shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all">Upload</button>
                        </div>
                        <p class="text-[10px] text-slate-400 text-center mt-2">Supports JPG, PNG, and WebP up to 25MB.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Platform Grid -->
        <section class="bg-white dark:bg-slate-900 py-16 border-y border-slate-200 dark:border-slate-800">
            <div class="max-w-[1200px] mx-auto px-4">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
                    <div>
                        <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Select Your Platform</h2>
                        <p class="text-slate-500 dark:text-slate-400">Choose a destination to automatically apply the
                            perfect aspect ratio and dimensions.</p>
                    </div>
                    <a class="text-primary font-bold text-sm hover:underline" href="#cheat-sheet">View full dimensions
                        guide →</a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        class="group p-5 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary transition-all cursor-pointer">
                        <div class="w-full h-40 bg-slate-200 dark:bg-slate-700 rounded-lg mb-4 flex items-center justify-center bg-cover bg-center"
                            data-alt="Instagram square post preview layout"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCRan0fQDosCWzUMgX1PgkNtg0VQFymkPUrmY3caj8wfbu2jZjBxA80gaG_opI2U2FfgAYl3ZOu6hkpnNmvnGOUAi9jnnE27yilkfOA73CkW4W4oCvaJcMpRP6gEr5eF9QsMWccQu4WNT8FbqVaMsjdaAzFHhrhG7UJ6UXTyJwF2AKSxWNyfqCcrUTKG17sgOA5Hl6XTAv8SxG486QWeWHFojQdUIimvL-8MWsg3cX_xDOIGQPQhJjv1zt0FNOxQkl91twFpCu9tNo')">
                            <div
                                class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-white text-3xl">aspect_ratio</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Instagram Post</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm">Square • 1080 x 1080 px</p>
                    </div>
                    <div
                        class="group p-5 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary transition-all cursor-pointer">
                        <div class="w-full h-40 bg-slate-200 dark:bg-slate-700 rounded-lg mb-4 flex items-center justify-center bg-cover bg-center"
                            data-alt="Instagram stories vertical preview layout"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBD11zLVrqp-P4ejUvoCfoIbTprSOhJjcXjI4yT8ku7FMSDvMi0Mox6dxS9FEXZdIo_QkZg72_Zl3olgRf_y9TrE-mb2m6T9tXEBDKOY9qQy1BWlwZ-YgBqDK4DjtGfDUFkluB3TGZgU_rS___Cg_UDVtfx_x6lsaCxuSjbU7qW6e-78Ht6ap_OuRJK4ne008G2F3fzcm7pmPJkjnJUGBPV5GwurJMD67MRmcfDP933b4ktkiFNNgGM0I8oNEdRDM1QviQ03vAp8G4')">
                            <div
                                class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-white text-3xl">aspect_ratio</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">Instagram Stories</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm">Vertical • 1080 x 1920 px</p>
                    </div>
                    <div
                        class="group p-5 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary transition-all cursor-pointer">
                        <div class="w-full h-40 bg-slate-200 dark:bg-slate-700 rounded-lg mb-4 flex items-center justify-center bg-cover bg-center"
                            data-alt="LinkedIn professional banner preview layout"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD5Xcc2rtzIl5fyrnNYREfUFgQPY1cJo10ygRxDlz5iagYYe12tLjg4HIhe9naQ-zokyIIu_jEqj3G65t-KKVKI5N3-20MSamzPbruX8xF5rD0RzgJXDW7aYezW7bAji7lhqb9TRY7ZU6pJdgSVCNhBqtPBTopnPElY-xOLqhyaNGIM_FCxqyF8qRcbqDTjxg2990ql2BH_2JhT5lOF000VN6rGGkWnhDhu0bSRZ1L0uio_JzaRaPVcC3SnYeTBTVukqgZmjt7M1Tw')">
                            <div
                                class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-white text-3xl">aspect_ratio</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">LinkedIn Header</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm">Wide • 1584 x 396 px</p>
                    </div>
                    <div
                        class="group p-5 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary transition-all cursor-pointer">
                        <div class="w-full h-40 bg-slate-200 dark:bg-slate-700 rounded-lg mb-4 flex items-center justify-center bg-cover bg-center"
                            data-alt="LinkedIn post and activity feed layout"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC_SwEGNVv0qfkVe6jSDqk1Ug-nhf9yts_ZrB5bzXo0qZUBGfX2VptR2Ae-eatHXN6jbiG7CoEaDGvthqomKQBqBYziqFvlQ9FDc_ibYPqGPR-6ItDsflVgzL16HwS2eU_cInTnJlEhC1y5RzulAexi2HHSKP_6IgwRW32rLoljdjGBhkL2IOUwvatO0UMcIGvyVW0TyjAfOzRzoTakzzRw9ACX178FHM4jlShjTfW2wcHcDnfIpu8EIeSGn5qXZfQSYT87Lh2EL6c')">
                            <div
                                class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-white text-3xl">aspect_ratio</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">LinkedIn Post</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm">Landscape • 1200 x 627 px</p>
                    </div>
                    <div
                        class="group p-5 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary transition-all cursor-pointer">
                        <div class="w-full h-40 bg-slate-200 dark:bg-slate-700 rounded-lg mb-4 flex items-center justify-center bg-cover bg-center"
                            data-alt="YouTube video thumbnail preview mockup"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCscEsA0K0V38NPJZJJeAcXFTPSERabQ6TZKDgLJ6Mha892_IEa9eU0qVg4VyQauw4YtWyGfrobo2YJ-ddCchGOvZqHvYP4PufJg1yDb40_EdFt6j2aKaYPrpSfS2fBmUiPIkbaUK-HoveMEnOUHl_ndrB7ekNcGCTBVwU185ZHJtjbDxNS040PGkMI_sbzQGuLuNF8qo3rFepdawuxXvl1WzUvAQpuH_99JijrsVSTo9o3OYKnZDfzZ6b3t_O_ypOA9nSyQyhjKLs')">
                            <div
                                class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-white text-3xl">aspect_ratio</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">YouTube Thumbnail</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm">16:9 • 1280 x 720 px</p>
                    </div>
                    <div
                        class="group p-5 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary transition-all cursor-pointer">
                        <div class="w-full h-40 bg-slate-200 dark:bg-slate-700 rounded-lg mb-4 flex items-center justify-center bg-cover bg-center"
                            data-alt="YouTube channel banner art header layout"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAw65vqJSTx_00lt_SITXUU_iGGX4FO-gj6E1Yj7FYSMEi_87I2GHuKC_GmMdT_49OXbX6dunkWopHW7hucyA6dMkVTw8F2xu__s3F3jhoydpfaKzGwyodQx0MNri-tkoVqhIC3JdE-k2fKussZ78LY57cXw7_96vfJIq7Su3Ke6uj7pTlhnDoAmcDd_zmPOlmDxuzyw_nh8hd_-6bL9lPunYv8a5cV5t6J4kaNAcna8uufqkQSSwzSec6rIQKfybBLXf2nD2KMgR0')">
                            <div
                                class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-white text-3xl">aspect_ratio</span>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white">YouTube Channel Art</h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm">Multi-device • 2560 x 1440 px</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Educational Section -->
        <section class="max-w-[1200px] mx-auto px-4 py-16" id="educational">
            <div class="grid lg:grid-cols-[1fr_300px] gap-12">
                <article class="prose prose-slate dark:prose-invert max-w-none">
                    <h2 class="text-3xl font-bold mb-6">Why Social Media Image Sizes Matter</h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        In the fast-paced world of social media, first impressions are everything. When you share an
                        image on Instagram, Facebook, or LinkedIn, the platform's algorithm automatically processes your
                        file. If your image doesn't match the recommended aspect ratio, it might be awkwardly cropped or
                        compressed, leading to a loss in quality and brand professionalism.
                    </p>
                    <h3 class="text-2xl font-bold mt-10 mb-4">Engagement and Algorithms</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        Studies have shown that posts with correctly formatted images receive up to 120% more
                        engagement. Platforms like Instagram favor high-resolution, correctly-sized content in their
                        "Explore" feeds. Using the right dimensions ensures that your text remains legible and your
                        visual focal points are not cut out by the UI elements of the app.
                    </p>
                    <h3 class="text-2xl font-bold mt-10 mb-4">The Importance of Aspect Ratios</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        An aspect ratio is the proportional relationship between its width and its height. For example,
                        a square image has an aspect ratio of 1:1. Stories on Instagram and Facebook use a 9:16 vertical
                        ratio. Understanding these ratios is crucial because even if your file size is correct, a wrong
                        ratio will result in "black bars" or forced cropping that ruins your composition.
                    </p>
                </article>
                <aside class="flex flex-col gap-8">
                    <div class="bg-slate-100 dark:bg-slate-800 p-6 rounded-xl">
                        <h4 class="font-bold mb-4 text-slate-900 dark:text-white flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">link</span> Related Tools
                        </h4>
                        <div class="flex flex-col gap-3">
                            <a class="text-sm p-3 bg-white dark:bg-slate-900 rounded-lg hover:text-primary border border-slate-200 dark:border-slate-700 transition-colors"
                                href="#">Image Cropper</a>
                            <a class="text-sm p-3 bg-white dark:bg-slate-900 rounded-lg hover:text-primary border border-slate-200 dark:border-slate-700 transition-colors"
                                href="#">Batch Resizer</a>
                            <a class="text-sm p-3 bg-white dark:bg-slate-900 rounded-lg hover:text-primary border border-slate-200 dark:border-slate-700 transition-colors"
                                href="#">PNG to WebP Converter</a>
                            <a class="text-sm p-3 bg-white dark:bg-slate-900 rounded-lg hover:text-primary border border-slate-200 dark:border-slate-700 transition-colors"
                                href="#">Background Remover</a>
                        </div>
                    </div>
                    <!-- Placeholder for AdSense -->
                    <div
                        class="bg-slate-50 dark:bg-slate-900/30 border-2 border-dashed border-slate-200 dark:border-slate-800 h-[400px] rounded-xl flex items-center justify-center text-slate-400 text-xs font-bold uppercase tracking-widest">
                        Ad Placement Slot
                    </div>
                </aside>
            </div>
        </section>
        <!-- Cheat Sheet Table -->
        <section class="bg-slate-50 dark:bg-slate-900/50 py-16 border-t border-slate-200 dark:border-slate-800"
            id="cheat-sheet">
            <div class="max-w-[1200px] mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-center text-slate-900 dark:text-white">Social Media Dimensions
                    Cheat Sheet</h2>
                <div
                    class="overflow-x-auto bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="p-4 font-bold text-sm">Platform</th>
                                <th class="p-4 font-bold text-sm">Placement</th>
                                <th class="p-4 font-bold text-sm">Dimensions (px)</th>
                                <th class="p-4 font-bold text-sm">Aspect Ratio</th>
                            </tr>
                        </thead>
                        <tbody class="text-slate-600 dark:text-slate-400">
                            <tr class="border-b border-slate-100 dark:border-slate-700">
                                <td class="p-4 font-medium text-slate-900 dark:text-white">Instagram</td>
                                <td class="p-4">Square Feed</td>
                                <td class="p-4">1080 x 1080</td>
                                <td class="p-4">1:1</td>
                            </tr>
                            <tr class="border-b border-slate-100 dark:border-slate-700">
                                <td class="p-4 font-medium text-slate-900 dark:text-white">Instagram</td>
                                <td class="p-4">Portrait Feed</td>
                                <td class="p-4">1080 x 1350</td>
                                <td class="p-4">4:5</td>
                            </tr>
                            <tr class="border-b border-slate-100 dark:border-slate-700">
                                <td class="p-4 font-medium text-slate-900 dark:text-white">Facebook</td>
                                <td class="p-4">Cover Photo</td>
                                <td class="p-4">820 x 312</td>
                                <td class="p-4">16:9 (approx)</td>
                            </tr>
                            <tr class="border-b border-slate-100 dark:border-slate-700">
                                <td class="p-4 font-medium text-slate-900 dark:text-white">Twitter</td>
                                <td class="p-4">In-Stream Photo</td>
                                <td class="p-4">1600 x 900</td>
                                <td class="p-4">16:9</td>
                            </tr>
                            <tr class="border-b border-slate-100 dark:border-slate-700">
                                <td class="p-4 font-medium text-slate-900 dark:text-white">LinkedIn</td>
                                <td class="p-4">Post Image</td>
                                <td class="p-4">1200 x 627</td>
                                <td class="p-4">1.91:1</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-medium text-slate-900 dark:text-white">YouTube</td>
                                <td class="p-4">Thumbnail</td>
                                <td class="p-4">1280 x 720</td>
                                <td class="p-4">16:9</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    
    <?php include './includes/footer.php'; ?>

</body>

</html>