<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Smart Image Compressor Tool</title>
  <!-- Tailwind CSS -->
  <script src="./js/tailwindcss.js?plugins=forms,container-queries"></script>
  <!-- Google Fonts: Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet" />
  <!-- Material Symbols -->
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

<body class="bg-background-light dark:bg-background-dark font-display text-[#0d141b] dark:text-slate-100 min-h-screen">
  <!-- Top Navigation Bar -->
  <?php include './includes/header.php'; ?>
  <main class="max-w-[1280px] mx-auto px-4 lg:px-10 py-8">
    <!-- Breadcrumbs -->
    <div class="flex flex-wrap gap-2 mb-4">
      <a class="text-[#4c739a] hover:text-primary text-sm font-medium leading-normal" href="./index.php">Home</a>
      <span class="text-[#4c739a] text-sm font-medium">/</span>
      <a class="text-[#4c739a] hover:text-primary text-sm font-medium leading-normal" href="./tools.php">Tools</a>
      <span class="text-[#4c739a] text-sm font-medium">/</span>
      <span class="text-[#0d141b] dark:text-slate-200 text-sm font-medium leading-normal">Smart Image Compressor</span>
    </div>
    <!-- Page Heading -->
    <div class="flex flex-wrap justify-between gap-3 mb-8">
      <div class="flex min-w-72 flex-col gap-3">
        <h1 class="text-[#0d141b] dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Smart Image
          Compressor</h1>
        <p class="text-[#4c739a] dark:text-slate-400 text-lg font-normal leading-normal max-w-2xl">
          Reduce file size while maintaining pixel-perfect quality. Optimization is handled directly in your browser for
          total privacy.
        </p>
      </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      <!-- Main Tool Area -->
      <div class="lg:col-span-8 space-y-8">
        <!-- Security Badge -->
        <div
          class="flex items-center gap-3 bg-green-50 dark:bg-green-900/20 border border-green-100 dark:border-green-800/30 p-4 rounded-xl">
          <span class="material-symbols-outlined text-green-600 dark:text-green-400"
            data-icon="verified_user">verified_user</span>
          <p class="text-green-800 dark:text-green-300 text-sm font-semibold">
            Private Processing: No images are uploaded to our servers. All work is done locally.
          </p>
        </div>
        <!-- Drop Zone / Tool Interface -->
        <div
          class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-[#e7edf3] dark:border-slate-800 overflow-hidden">
          <div class="p-8">
            <div
              class="relative flex flex-col items-center gap-6 rounded-xl border-2 border-dashed border-[#cfdbe7] dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50 px-6 py-14 hover:border-primary/50 transition-colors group cursor-pointer">
              <div
                class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-4xl" data-icon="cloud_upload">cloud_upload</span>
              </div>
              <div class="flex max-w-[480px] flex-col items-center gap-2">
                <p
                  class="text-[#0d141b] dark:text-white text-xl font-bold leading-tight tracking-[-0.015em] text-center">
                  Drag &amp; Drop Image Here</p>
                <p class="text-[#4c739a] dark:text-slate-400 text-sm font-normal text-center">Supports JPG, PNG, and
                  WebP up to 20MB.</p>
              </div>
              <button
                class="flex min-w-[140px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-blue-600 transition-colors">
                <span class="truncate">Select Image</span>
              </button>
              <input class="absolute inset-0 opacity-0 cursor-pointer" multiple="multiple" type="file" accept="image/*" id="filesInput"/>
            </div>
          </div>
          <!-- Uploaded images will be shown here on the stage -->
           <div class="border-t border-[#e7edf3] dark:border-slate-800 p-8 space-y-8">
            <h3 class="text-[#0d141b] dark:text-white text-lg font-bold mb-4 flex items-center gap-2">
              <span class="material-symbols-outlined text-primary" data-icon="tune">image</span>
              Uploaded Images
            </h3>
            <ul id="uploadedFilesList" class="bg-gray-100 py-4 px-4 rounded-md">

            </ul> 
           </div>
          <!-- Tool Settings & Preview (Active State Simulation) -->
          <div class="border-t border-[#e7edf3] dark:border-slate-800 p-8 space-y-8">
            <div>
              <h3 class="text-[#0d141b] dark:text-white text-lg font-bold mb-4 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary" data-icon="tune">tune</span>
                Compression Strength
              </h3>
              <div class="grid grid-cols-3 gap-4 buttons-group compressionLevels">
                <button
                  data-value="0.9"
                  class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-[#e7edf3] dark:border-slate-800 hover:border-primary/30 transition-all text-center">
                  <span class="btnTitle text-sm font-bold text-[#0d141b] dark:text-white">Lossless</span>
                  <span class="btnDescription text-xs text-[#4c739a]">Zero quality loss</span>
                </button>
                <button
                  data-value="0.75"
                  class="chosen flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-primary bg-primary/5 dark:bg-primary/10 text-center relative">
                  <span
                    class="absolute -top-2 -right-2 bg-primary text-white text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Best
                    Value</span>
                  <span class="btnTitle text-sm font-bold text-primary">Recommended</span>
                  <span class="btnDescription text-xs text-primary/80">Great balance</span>
                </button>
                <button
                  data-value="0.5"
                  class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-[#e7edf3] dark:border-slate-800 hover:border-primary/30 transition-all text-center">
                  <span class="btnTitle text-sm font-bold text-[#0d141b] dark:text-white">Maximum</span>
                  <span class="btnDescription text-xs text-[#4c739a]">Smallest file size</span>
                </button>
              </div>
            </div>
            <!-- Estimated Savings Counter -->
            <div
              class="grid grid-cols-1 md:grid-cols-3 gap-4 bg-slate-50 dark:bg-slate-800/50 p-6 rounded-xl border border-[#e7edf3] dark:border-slate-800">
              <div class="flex flex-col items-center justify-center border-r border-[#e7edf3] dark:border-slate-700">
                <span class="text-xs font-semibold text-[#4c739a] uppercase tracking-wider mb-1">Original Size</span>
                <span class="text-2xl font-black text-[#0d141b] dark:text-white">4.2 MB</span>
              </div>
              <div class="flex flex-col items-center justify-center border-r border-[#e7edf3] dark:border-slate-700">
                <span class="text-xs font-semibold text-[#4c739a] uppercase tracking-wider mb-1">New Size</span>
                <span class="text-2xl font-black text-primary">1.4 MB</span>
              </div>
              <div class="flex flex-col items-center justify-center">
                <span class="text-xs font-semibold text-[#4c739a] uppercase tracking-wider mb-1">Total Savings</span>
                <span class="text-2xl font-black text-green-600">-67%</span>
              </div>
            </div>
            <!-- LIst of elements compressed -->
            <div class="border-t border-[#e7edf3] dark:border-slate-800 p-8 space-y-8">
              <h3 class="text-[#0d141b] dark:text-white text-lg font-bold mb-4 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary" data-icon="tune">image</span>
                Uploaded Images
              </h3>
              <ul id="uploadedFilesList" class="bg-gray-100 py-4 px-4 rounded-md">

              </ul> 
            </div>
            <!-- Live Preview Split-Pane -->
            <div>
              <div class="flex items-center justify-between mb-4">
                <h3 class="text-[#0d141b] dark:text-white text-lg font-bold flex items-center gap-2">
                  <span class="material-symbols-outlined text-primary" data-icon="compare">compare</span>
                  Live Preview (1:1)
                </h3>
                <div class="flex gap-2">
                  <button
                    class="p-2 rounded-lg bg-[#e7edf3] dark:bg-slate-800 text-[#0d141b] dark:text-white hover:bg-[#cfdbe7] transition-colors">
                    <span class="material-symbols-outlined" data-icon="zoom_in">zoom_in</span>
                  </button>
                  <button
                    class="p-2 rounded-lg bg-[#e7edf3] dark:bg-slate-800 text-[#0d141b] dark:text-white hover:bg-[#cfdbe7] transition-colors">
                    <span class="material-symbols-outlined" data-icon="zoom_out">zoom_out</span>
                  </button>
                </div>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 h-96">
                <div
                  class="relative rounded-lg overflow-hidden border border-[#e7edf3] dark:border-slate-800 bg-slate-100 dark:bg-slate-800">
                  <div
                    class="absolute top-2 left-2 bg-black/50 text-white text-[10px] font-bold px-2 py-1 rounded backdrop-blur-sm z-10">
                    ORIGINAL</div>
                  <img alt="Original landscape photo" class="w-full h-full object-cover"
                    data-alt="High resolution landscape photograph of mountains"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6fnYUJFbRZoSEe0M6lphZTLZ_OStZFXsfUBY5rpCDOW91i11W5ZZXjqxj4bMK8fVshl6veKrB9LxXtFqi6viYN6hNv-SyqjBY7Cm57KhZKYI6UGGwAWs11PRy2myT2iXuLbBOE4HKHsklcKOY1IZMHRKbZU-9E5PmLV1AERlXZVQrIo8NzN0-d_rS_tzMWlo4qY2phTIKXlYj9jBL-JCwpjR6g4h62tcKkilTj9dm0AtoUKHJX1I06s4rA2cWxuVoyjHObEXc-K4" />
                </div>
                <div
                  class="relative rounded-lg overflow-hidden border border-[#e7edf3] dark:border-slate-800 bg-slate-100 dark:bg-slate-800">
                  <div
                    class="absolute top-2 left-2 bg-primary/80 text-white text-[10px] font-bold px-2 py-1 rounded backdrop-blur-sm z-10">
                    COMPRESSED</div>
                  <img alt="Compressed landscape photo" class="w-full h-full object-cover opacity-95"
                    data-alt="Compressed version of landscape photograph"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEfia3f8EQ5qGg3tZQsaCXT7Mf7BIrGxNktCVmMkVQtZM73QC1NX7ykXLD7B_n3OaLeg8kfOAQ3nTWVvC2wj7AdLbtaFm4ow_UO8wDF_85KpUm62s2Aejbu_ApunvIKULlUrHCSWadPV7yuJr9uHY03lAtwMIBR2yL7sIVo0qoMgTTr7J77UOdafW_0B9Q9L4pVg9PnST22xmSnMSb6AD3_PJIaTeAakWPcELIVZhf68gfxXFBH0dKH9ZHNQfwH4NADUDa5FYx8Ac" />
                </div>
              </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
              <button
                id="compressButton"
                class="flex-1 flex min-w-[140px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 px-6 bg-primary text-white text-lg font-black leading-normal tracking-[0.015em] hover:bg-blue-600 transition-colors shadow-lg shadow-primary/20">
                <span class="material-symbols-outlined mr-2" data-icon="download">download</span>
                Compress Images
              </button>
              <button
                class="flex min-w-[140px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 px-6 bg-[#e7edf3] dark:bg-slate-800 text-[#0d141b] dark:text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-[#cfdbe7] dark:hover:bg-slate-700 transition-colors">
                Start Over
              </button>
            </div>
          </div>
        </div>
        <!-- Ad Placement: Below Main Tool -->
        <div
          class="w-full bg-[#f0f4f8] dark:bg-slate-800/30 rounded-lg p-4 text-center border border-dashed border-[#cfdbe7] dark:border-slate-700">
          <p class="text-[10px] text-[#4c739a] font-bold tracking-widest uppercase mb-2">Advertisement</p>
          <div class="w-full h-[120px] flex items-center justify-center text-[#4c739a] text-sm italic">
            Display Ad Slot (Horizontal)
          </div>
        </div>
      </div>
      <!-- Sidebar -->
      <aside class="lg:col-span-4 space-y-8">
        <!-- Educational Sidebar -->
        <section
          class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-[#e7edf3] dark:border-slate-800 overflow-hidden">
          <h2
            class="text-[#0d141b] dark:text-white text-xl font-bold leading-tight tracking-[-0.015em] px-6 py-5 border-b border-[#e7edf3] dark:border-slate-800">
            Why Compress Images?
          </h2>
          <div class="p-6 space-y-4">
            <div class="space-y-2">
              <h3 class="text-sm font-bold text-[#0d141b] dark:text-white">Faster Page Speeds</h3>
              <p class="text-sm text-[#4c739a] dark:text-slate-400">Smaller images load faster, reducing your website's
                Bounce Rate and improving user experience.</p>
            </div>
            <div class="space-y-2">
              <h3 class="text-sm font-bold text-[#0d141b] dark:text-white">Better SEO Ranking</h3>
              <p class="text-sm text-[#4c739a] dark:text-slate-400">Google uses page speed as a ranking factor.
                Optimized images help you climb the SERPs.</p>
            </div>
            <div class="space-y-2">
              <h3 class="text-sm font-bold text-[#0d141b] dark:text-white">Save Storage Space</h3>
              <p class="text-sm text-[#4c739a] dark:text-slate-400">Reduce the hosting costs and storage requirements
                for your web applications.</p>
            </div>
            <hr class="border-[#e7edf3] dark:border-slate-800 my-4" />
            <a class="inline-flex items-center text-primary text-sm font-bold hover:underline" href="./blog/performance-guide.php">
              Read the Full Performance Guide
              <span class="material-symbols-outlined text-sm ml-1" data-icon="arrow_forward">arrow_forward</span>
            </a>
          </div>
        </section>
        <!-- Ad Placement: Sidebar -->
        <div
          class="w-full bg-[#f0f4f8] dark:bg-slate-800/30 rounded-lg p-4 text-center border border-dashed border-[#cfdbe7] dark:border-slate-700 h-[400px] flex flex-col justify-center">
          <p class="text-[10px] text-[#4c739a] font-bold tracking-widest uppercase mb-2">Advertisement</p>
          <div class="w-full grow flex items-center justify-center text-[#4c739a] text-sm italic">
            Vertical Display Ad Slot
          </div>
        </div>
        <!-- Footer-like privacy blurb -->
        <div class="bg-primary/5 dark:bg-primary/10 rounded-xl p-6 border border-primary/10">
          <h4 class="text-[#0d141b] dark:text-white text-sm font-bold mb-2 flex items-center gap-2">
            <span class="material-symbols-outlined text-primary text-lg" data-icon="lock">lock</span>
            Your Privacy is Our Priority
          </h4>
          <p class="text-xs text-[#4c739a] dark:text-slate-400 leading-relaxed">
            We don't store your photos. The compression engine runs using <b>WebAssembly (WASM)</b> technology directly
            inside your browser. No data ever leaves your device.
          </p>
        </div>
      </aside>
    </div>
    <!-- Section Header for more context -->
    <div class="mt-16 pb-12">
      <h2 class="text-[#0d141b] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] mb-6">Frequently
        Asked Questions</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="space-y-2">
          <h4 class="text-base font-bold text-[#0d141b] dark:text-white">Is it really free?</h4>
          <p class="text-sm text-[#4c739a] dark:text-slate-400">Yes, ImageToolbox is completely free to use with no
            hidden subscriptions or limits on the number of images you can process.</p>
        </div>
        <div class="space-y-2">
          <h4 class="text-base font-bold text-[#0d141b] dark:text-white">What is 'Lossless' compression?</h4>
          <p class="text-sm text-[#4c739a] dark:text-slate-400">Lossless compression removes metadata and optimizes data
            patterns without losing a single pixel of visual information. Perfect for professional photography.</p>
        </div>
      </div>
    </div>
  </main>
  <?php include './includes/footer.php'; ?>
  <script src="./js/uploadAndShow.js" defer></script>
  <script src="./js/buttons-group.js" defer></script>
  <script src="./js/compress.js"></script>
</body>

</html>