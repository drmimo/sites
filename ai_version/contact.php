<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Contact Us - ImageTools</title>
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
            <nav class="bg-surface-light dark:bg-surface-dark/30 border-b border-gray-200 dark:border-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-4">
                    <ol class="flex items-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
                        <li>
                            <a class="hover:text-primary flex items-center gap-1 transition-colors" href="./index.php">
                                <span class="material-symbols-outlined text-lg">home</span>
                                Home
                            </a>
                        </li>
                        <li>
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </li>
                        <li class="font-medium text-gray-900 dark:text-white">Contact</li>
                    </ol>
                </div>
            </nav>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    <aside class="lg:col-span-3 space-y-8 order-2 lg:order-1">
                        <div
                            class="rounded-2xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-surface-dark p-6 shadow-sm">
                            <h3 class="text-sm font-bold text-gray-900 dark:text-white uppercase tracking-wider mb-6">
                                Quick Tools</h3>
                            <nav class="space-y-4">
                                <a class="group flex items-center gap-3 p-3 rounded-xl hover:bg-primary/5 transition-all border border-transparent hover:border-primary/10"
                                    href="./resize.php">
                                    <div class="flex size-10 items-center justify-center rounded-lg bg-blue-100 dark:bg-blue-900/30 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-xl">aspect_ratio</span>
                                    </div>
                                    <div>
                                        <span class="block text-sm font-bold text-gray-900 dark:text-white">Image Resizer</span>
                                        <span class="text-[10px] text-gray-500 dark:text-gray-400">Change dimensions</span>
                                    </div>
                                </a>
                                <a class="group flex items-center gap-3 p-3 rounded-xl hover:bg-green-50 dark:hover:bg-green-900/10 transition-all border border-transparent hover:border-green-200 dark:hover:border-green-900/30"
                                    href="./compressor.php">
                                    <div
                                        class="flex size-10 items-center justify-center rounded-lg bg-green-100 dark:bg-green-900/30 text-green-600 group-hover:bg-green-600 group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-xl">compress</span>
                                    </div>
                                    <div>
                                        <span class="block text-sm font-bold text-gray-900 dark:text-white">Compressor</span>
                                        <span class="text-[10px] text-gray-500 dark:text-gray-400">Reduce file size</span>
                                    </div>
                                </a>
                                <a class="group flex items-center gap-3 p-3 rounded-xl hover:bg-purple-50 dark:hover:bg-purple-900/10 transition-all border border-transparent hover:border-purple-200 dark:hover:border-purple-900/30"
                                    href="./converter.php">
                                    <div
                                        class="flex size-10 items-center justify-center rounded-lg bg-purple-100 dark:bg-purple-900/30 text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                        <span class="material-symbols-outlined text-xl">transform</span>
                                    </div>
                                    <div>
                                        <span
                                            class="block text-sm font-bold text-gray-900 dark:text-white">Converter</span>
                                        <span class="text-[10px] text-gray-500 dark:text-gray-400">Change formats</span>
                                    </div>
                                </a>
                            </nav>
                        </div>
                        <div class="rounded-2xl bg-primary p-6 text-white shadow-lg relative overflow-hidden">
                            <div class="relative z-10">
                                <h4 class="font-bold mb-2">Need Help?</h4>
                                <p class="text-sm text-primary-light opacity-90 mb-4">Check out our detailed guides and
                                    tutorials to get the most out of our tools.</p>
                                <a class="inline-flex items-center text-xs font-bold py-2 px-4 bg-white/10 hover:bg-white/20 rounded-lg transition-colors border border-white/20"
                                    href="#">
                                    Visit Documentation
                                </a>
                            </div>
                            <span
                                class="material-symbols-outlined absolute -bottom-4 -right-4 text-8xl opacity-10">help_outline</span>
                        </div>
                    </aside>
                    <div class="lg:col-span-9 order-1 lg:order-2">
                        <div class="max-w-3xl">
                            <h1
                                class="text-3xl font-black tracking-tight text-gray-900 dark:text-white sm:text-4xl mb-4">
                                Get in Touch
                            </h1>
                            <p class="text-lg text-gray-600 dark:text-gray-400 mb-10">
                                Have questions about our browser-based image tools? We're here to help. Send us a
                                message and we'll respond as soon as possible.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                                <div
                                    class="p-6 rounded-2xl bg-surface-light dark:bg-surface-dark border border-gray-100 dark:border-gray-800">
                                    <div
                                        class="flex size-10 items-center justify-center rounded-lg bg-primary/10 text-primary mb-4">
                                        <span class="material-symbols-outlined">alternate_email</span>
                                    </div>
                                    <h3 class="font-bold text-gray-900 dark:text-white mb-2">Email Us</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">General support, bug reports,
                                        and feedback.</p>
                                    <p class="mt-2 text-primary font-medium">business.overview0@gmail.com</p>
                                </div>
                                <div
                                    class="p-6 rounded-2xl bg-surface-light dark:bg-surface-dark border border-gray-100 dark:border-gray-800">
                                    <div
                                        class="flex size-10 items-center justify-center rounded-lg bg-primary/10 text-primary mb-4">
                                        <span class="material-symbols-outlined">forum</span>
                                    </div>
                                    <h3 class="font-bold text-gray-900 dark:text-white mb-2">Community</h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">Join our community discussions
                                        and feature requests.</p>
                                    <p class="mt-2 text-primary font-medium">Join our Discord</p>
                                </div>
                            </div>
                            <form action="#" class="space-y-6">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2"
                                            for="name">Full Name</label>
                                        <input class="w-full rounded-xl px-4 border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark text-gray-900 dark:text-white focus:border-primary focus:ring-primary h-12"
                                            id="name" name="name" placeholder="Jane Doe" type="text" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2"
                                            for="email">Email Address</label>
                                        <input class="w-full rounded-xl px-4 border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark text-gray-900 dark:text-white focus:border-primary focus:ring-primary h-12"
                                            id="email" name="email" placeholder="jane@example.com" type="email" />
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2" for="subject">Subject</label>
                                    <select
                                        class="w-full rounded-xl border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark text-gray-900 dark:text-white focus:border-primary focus:ring-primary h-12"
                                        id="subject" name="subject">
                                        <option>Technical Support</option>
                                        <option>Bug Report</option>
                                        <option>Feature Request</option>
                                        <option>General Inquiry</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2" for="message">Message</label>
                                    <textarea class="w-full rounded-xl px-4 py-2 border-gray-200 dark:border-gray-700 bg-white dark:bg-surface-dark text-gray-900 dark:text-white focus:border-primary focus:ring-primary"
                                        id="message" name="message" placeholder="How can we help you?"
                                        rows="5"></textarea>
                                </div>
                                <button
                                    class="w-full sm:w-auto px-8 py-3 bg-primary hover:bg-primary-dark text-white font-bold rounded-xl shadow-lg transition-all flex items-center justify-center gap-2"
                                    type="submit">
                                    Send Message
                                    <span class="material-symbols-outlined text-xl">send</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
<?php include './includes/footer.php'; ?>

    </div>

</body>

</html>