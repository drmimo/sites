
<?php include 'config.php'; ?>
<header
    class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-gray-800 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2 shrink-0">
            <a class="flex items-center gap-2" href="https://www.imagefilesize.com">
                <div class="flex size-12 items-center justify-center rounded-lg bg-primary/5 text-primary">
                    <img src="<?= BASE_URL; ?>/img/logo.png" alt="Logo" />
                </div>
            </a>
        </div>
        <nav class="hidden md:flex items-center gap-8">
            <a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors"
                href=<?php echo BASE_URL.'/tools.php'; ?>>Tools</a>
            <a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors"
                href="<?= BASE_URL; ?>/blog/">Blog</a>
            <a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors"
                href="<?= BASE_URL; ?>/about.php">About</a>
            <a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors"
                href="<?= BASE_URL.'/contact.php';?>">Contact</a>
        </nav>
        <div class="flex items-center gap-4">
            <!--button
                        class="hidden sm:flex h-9 items-center justify-center rounded-lg bg-primary px-4 text-sm font-semibold text-white shadow-sm hover:bg-primary-dark focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-all">
                        Get Started
                    </button-->
            <button class="md:hidden p-2 text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </div>
</header>