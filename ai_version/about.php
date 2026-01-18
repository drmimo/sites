<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>About Us &amp; Privacy Policy | ImageTools Hub</title>
    <script src="./js/tailwindcss.js?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800;900&amp;display=swap"
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
                        "display": ["Work Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        body { font-family: 'Work Sans', sans-serif; }
        .material-symbols-outlined { vertical-align: middle; }
        .prose h2 { @apply text-2xl font-bold mt-12 mb-6 text-[#0d141b] dark:text-white; }
        .prose h3 { @apply text-xl font-bold mt-8 mb-4 text-[#0d141b] dark:text-white; }
        .prose p { @apply text-base leading-relaxed text-[#4c739a] dark:text-slate-400 mb-6; }
        .prose ul { @apply list-disc list-outside ml-6 mb-6 text-[#4c739a] dark:text-slate-400 space-y-2; }
        .toc-link { @apply block py-2 text-sm text-[#4c739a] hover:text-primary transition-colors border-l-2 border-transparent pl-4; }
        .toc-link.active { @apply text-primary border-primary font-semibold; }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-[#0d141b] dark:text-slate-50 transition-colors duration-200">
    <?php include './includes/header.php'; ?>
    <main class="max-w-[1280px] mx-auto px-6 py-12">
        <div class="flex flex-col lg:flex-row gap-16">
            <aside class="hidden lg:block w-64 shrink-0">
                <div class="sticky top-24">
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-6">On this page</h4>
                    <nav class="flex flex-col gap-1">
                        <a class="toc-link active" href="#about-us">About Us</a>
                        <a class="toc-link" href="#our-mission">Our Mission</a>
                        <a class="toc-link" href="#commitment">Privacy Commitment</a>
                        <hr class="my-4 border-[#e7edf3] dark:border-slate-800" />
                        <a class="toc-link" href="#privacy-policy">Privacy Policy</a>
                        <a class="toc-link" href="#data-collection">Data Collection</a>
                        <a class="toc-link" href="#cookies-ads">Cookies and Ads</a>
                        <a class="toc-link" href="#security">Security</a>
                        <a class="toc-link" href="#third-party">Third-Party Links</a>
                    </nav>
                    <div
                        class="mt-12 p-6 bg-white dark:bg-slate-900 border border-[#e7edf3] dark:border-slate-800 rounded-xl">
                        <span
                            class="text-[10px] text-slate-400 uppercase mb-4 block tracking-widest text-center">Advertisement</span>
                        <div
                            class="aspect-square bg-slate-100 dark:bg-slate-800 rounded-lg flex items-center justify-center border border-dashed border-slate-300 dark:border-slate-700">
                            <span class="text-xs text-[#4c739a] text-center px-2">Ad Slot<br />250 x 250</span>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="flex-1 max-w-3xl">
                <article class="prose">
                    <section id="about-us">
                        <h1 class="text-4xl font-black mb-4">About Us</h1>
                        <p class="text-lg text-[#4c739a] dark:text-slate-400 leading-relaxed font-medium">
                            Welcome to ImageTools Hub, your professional destination for efficient, private, and
                            high-quality image processing.
                        </p>
                        <div class="aspect-video w-full rounded-xl bg-cover bg-center my-8"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAwQrT14fVRbtr7to8gqnDEfS_MRVN9pF0hEvf1LCDKWyyWiNfheCZWG8-nhKRvllxpbTzps2mMzUGRUtiznlPOOGGx8aS4KNoLNhxgKh-bYCu9fVvaJ8eCWKouJCktGQjtOYF60hiGuzvBBkswnMAFCTgNcY7YvNzehHqXGfF-R1Nzh0Bg59tc92oAZLRYENLSzZ-OPGXh6JLCcz3B7TM-orrdGLQWI4wtJlFwCSHDy9MyhU_NDjjTuxySXDbHD6dBwmt8CpoAQ_c");'>
                        </div>
                    </section>
                    <section id="our-mission">
                        <h2>Our Mission</h2>
                        <p>
                            Our mission is to democratize high-end image processing tools by making them accessible,
                            free, and incredibly fast for everyone. We believe that professional-grade editing shouldn't
                            require expensive software or compromise your privacy.
                        </p>
                        <p>
                            What sets ImageTools Hub apart is our <strong>'no-upload' architecture</strong>. Unlike
                            traditional online converters that upload your sensitive files to their servers, our tools
                            leverage modern browser technology to process your images directly on your device. Your data
                            never leaves your computer, ensuring total privacy and near-instant processing speeds.
                        </p>
                    </section>
                    <section class="bg-primary/5 dark:bg-primary/10 border border-primary/20 p-8 rounded-2xl my-12"
                        id="commitment">
                        <div class="flex items-center gap-3 text-primary mb-4">
                            <span class="material-symbols-outlined text-3xl">verified_user</span>
                            <h2 class="text-2xl font-bold !m-0">Our Commitment to Privacy</h2>
                        </div>
                        <p class="!mb-4">We are built on a foundation of trust. Here is our promise to you:</p>
                        <ul class="!mb-0">
                            <li><strong>No Server Storage:</strong> Your images are processed locally in your browser.
                                We never store, see, or have access to your files.</li>
                            <li><strong>No Data Selling:</strong> We do not sell your personal information or usage
                                habits to third parties.</li>
                            <li><strong>Transparency:</strong> We are clear about how we monetize (via non-intrusive
                                ads) to keep this service free for everyone.</li>
                        </ul>
                    </section>
                    <div class="h-px bg-[#e7edf3] dark:border-slate-800 w-full my-16"></div>
                    <section id="privacy-policy">
                        <h1 class="text-4xl font-black mb-4">Privacy Policy</h1>
                        <p class="text-sm text-[#4c739a] dark:text-slate-400 italic mb-8">Last Updated: May 20, 2024</p>
                        <p>
                            This Privacy Policy describes how your personal information is collected, used, and shared
                            when you visit ImageTools Hub. We take our responsibility to protect your privacy seriously
                            and aim to be as transparent as possible about the data we handle.
                        </p>
                        <h3 id="data-collection">Data Collection</h3>
                        <p>
                            We do not collect any personal data through the use of our image processing tools. Because
                            processing happens on your local machine, we do not receive copies of your files. However,
                            we do collect certain standard technical information through log files:
                        </p>
                        <ul>
                            <li>IP addresses</li>
                            <li>Browser type and version</li>
                            <li>Time zone settings and location</li>
                            <li>Operating system and platform</li>
                        </ul>
                        <h3 id="cookies-ads">Cookies and Advertising</h3>
                        <p>
                            To keep our tools free, we use <strong>Google AdSense</strong> to display advertisements.
                            Google uses cookies to serve ads based on a user's prior visits to our website or other
                            websites.
                        </p>
                        <p>
                            Google's use of advertising cookies enables it and its partners to serve ads to our users
                            based on their visit to our sites and/or other sites on the Internet. Users may opt out of
                            personalized advertising by visiting <a class="text-primary hover:underline" href="#">Ads
                                Settings</a>.
                        </p>
                        <h3 id="security">Security</h3>
                        <p>
                            The security of your data is important to us. We use industry-standard SSL encryption
                            (HTTPS) to protect the data transmitted between your browser and our website. Since your
                            images stay on your device, the risk of data breaches involving your content is effectively
                            eliminated.
                        </p>
                        <h3 id="third-party">Third-Party Links</h3>
                        <p>
                            Our website may contain links to other sites that are not operated by us. If you click on a
                            third-party link, you will be directed to that third party's site. We strongly advise you to
                            review the Privacy Policy of every site you visit. We have no control over and assume no
                            responsibility for the content, privacy policies, or practices of any third-party sites or
                            services.
                        </p>
                    </section>
                </article>
                <div class="mt-16 py-8 border-t border-[#e7edf3] dark:border-slate-800">
                    <div
                        class="bg-white dark:bg-slate-900 h-[90px] rounded-lg flex flex-col items-center justify-center border border-dashed border-slate-300 dark:border-slate-600">
                        <span class="text-[10px] text-slate-400 uppercase mb-2 tracking-widest">Advertisement</span>
                        <div class="text-[#4c739a] font-medium italic">Supporting Free Browser-Based Tools</div>
                        <div class="text-xs text-[#4c739a]">728 x 90 Banner Slot</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include './includes/footer.php'; ?>

</body>

</html>