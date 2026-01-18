<footer aria-labelledby="footer-heading"
    class="bg-white dark:bg-background-dark border-t border-gray-200 dark:border-gray-800" id="contact">
    <h2 class="sr-only" id="footer-heading">Footer</h2>
    <div class="mx-auto max-w-7xl px-4 pb-8 pt-16 sm:px-6 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-6">
                <div class="flex items-center gap-2">
                    <div class="flex size-8 items-center justify-center rounded bg-primary/10 text-primary">
                        <span class="material-symbols-outlined text-xl">photo_library</span>
                    </div>
                    <span class="text-lg font-bold text-gray-900 dark:text-white">ImageTools</span>
                </div>
                <p class="text-sm leading-6 text-gray-600 dark:text-gray-400 max-w-xs">
                    Professional grade image tools that run entirely in your browser. Fast, free, and secure.
                </p>
                <div
                    class="flex items-center gap-3 rounded-xl bg-green-50 dark:bg-green-900/10 border border-green-100 dark:border-green-900/30 p-4 max-w-xs">
                    <span
                        class="material-symbols-outlined text-green-600 dark:text-green-400 text-2xl">verified_user</span>
                    <div>
                        <p class="text-sm font-bold text-green-800 dark:text-green-300">Privacy Guaranteed</p>
                        <p class="text-xs text-green-700 dark:text-green-400">Your images never leave your
                            computer.</p>
                    </div>
                </div>
            </div>
            <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-bold leading-6 text-gray-900 dark:text-white uppercase tracking-wider">
                            Tool Categories</h3>
                        <ul class="mt-6 space-y-4" role="list">
                            <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                    href="./resize.php">Resize Images</a></li>
                            <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                    href="./compressor.php">Compress Images</a></li>
                            <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                    href="./converter.php">Convert Formats</a></li>
                            <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                    href="/edit">Photo Editor</a></li>
                            <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                    href="/watermark">Add Watermark</a></li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-bold leading-6 text-gray-900 dark:text-white uppercase tracking-wider">
                            Company</h3>
                        <ul class="mt-6 space-y-4" role="list">
                            <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                    href="<?= BASE_URL.'/about.php';?>">About Us</a></li>
                            <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                    href="<?= BASE_URL.'/blog/index.php';?>">Blog &amp; Guides</a></li>
                            <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                    href="<?= BASE_URL.'/contact.php';?>">Contact Us</a></li>
                            <!--li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                            href="#">Careers</a></li-->
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <!--div>
                                <h3
                                    class="text-sm font-bold leading-6 text-gray-900 dark:text-white uppercase tracking-wider">
                                    Resources</h3>
                                <ul class="mt-6 space-y-4" role="list">
                                    <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                            href="#">Documentation</a></li>
                                    <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                            href="#">Developer API</a></li>
                                    <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                            href="#">Status</a></li>
                                </ul>
                            </div-->
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-bold leading-6 text-gray-900 dark:text-white uppercase tracking-wider">
                            Legal</h3>
                        <ul class="mt-6 space-y-4" role="list">
                            <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                    href="/privacy">Privacy Policy</a></li>
                            <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                    href="/terms">Terms of Service</a></li>
                            <li><a class="text-sm leading-6 text-gray-600 dark:text-gray-400 hover:text-primary transition-colors"
                                    href="/cookies">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="mt-16 border-t border-gray-200 dark:border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs leading-5 text-gray-500 dark:text-gray-400">© 2025 ImageFileSize Tools. Built for the privacy-conscious creator.</p>
            <div class="flex gap-6">
                <a class="text-gray-400 hover:text-primary transition-colors" href="#">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M13.682 10.622 20.231 3h-1.554l-5.693 6.618L8.445 3H3.209l6.866 10-6.866 7.996h1.554l6.012-6.99 4.833 6.99h5.235l-7.165-10.434Zm-2.127 2.473-.697-.996-5.543-7.925h2.388l4.47 6.39.697.997 5.815 8.313h-2.387l-4.743-6.779Z">
                        </path>
                    </svg>
                </a>
                <a class="text-gray-400 hover:text-primary transition-colors" href="#">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.43.372.823 1.102.823 2.222 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>