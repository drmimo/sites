<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Resizer - Image Tools</title>
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
            <nav aria-label="Breadcrumb" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-6">
                <ol class="flex items-center space-x-2 text-sm text-gray-500 dark:text-gray-400">
                    <li><a class="hover:text-primary transition-colors" href="https://www.imagefilesize.com">Home</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-base">chevron_right</span>
                        <a class="hover:text-primary transition-colors" href="#">Tools</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-base text-gray-300">chevron_right</span>
                        <span class="font-medium text-gray-900 dark:text-white">Resizer</span>
                    </li>
                </ol>
            </nav>
            <section class="py-10">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="lg:grid lg:grid-cols-12 lg:gap-12">
                        <div class="lg:col-span-8">
                            <div class="mb-8">
                                <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                                    Image Resizer</h1>
                                <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">Change image dimensions locally
                                    in your browser. No data leaves your computer.</p>
                            </div>
                            <div class="relative group cursor-pointer">
                                <div
                                    class="flex flex-col items-center justify-center w-full h-80 border-2 border-dashed border-gray-300 dark:border-gray-700 rounded-2xl bg-surface-light dark:bg-surface-dark/50 hover:border-primary/50 hover:bg-primary/5 transition-all">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <div class="p-4 rounded-full bg-primary/10 text-primary mb-4">
                                            <span class="material-symbols-outlined text-4xl">upload_file</span>
                                        </div>
                                        <p class="mb-2 text-sm font-semibold text-gray-900 dark:text-white">Click to upload or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, WebP (Max. 50MB)
                                        </p>
                                    </div>
                                    
                                </div>
                                <input class="absolute inset-0 opacity-0 cursor-pointer" multiple="multiple" type="file" accept="image/*" id="fileInput" onChange="showUploaded(this)"/>
                            </div>

                            <div class="flex flex-col gap-4 items-center bg-gray py-2 px-4 rounded-xl border mt-6">
                                <h3>Uploaded images [<span id="imgCounter">0</span>] file(s):</h3>
                                <ul class="bg-white self-stretch px-3 py-2" id="uploadedImg">

                                </ul>
                            </div>
                            <div
                                class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 bg-white dark:bg-surface-dark p-6 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-sm">
                                <div class="space-y-4">
                                    <h3 class="font-bold text-gray-900 dark:text-white flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary text-xl">settings</span>
                                        Resize Settings
                                    </h3>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="space-y-1">
                                            <label class="text-xs font-semibold text-gray-500 uppercase">Width (px)</label>
                                            <input
                                                class="w-full px-4 py-2 rounded-lg border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-background-dark text-sm focus:ring-primary"
                                                id="width"
                                                type="number" value="1080" min="10"/>
                                        </div>
                                        <div class="space-y-1">
                                            <label class="text-xs font-semibold text-gray-500 uppercase">Height (px)</label>
                                            <input
                                                class="w-full px-4 py-2 rounded-lg border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-background-dark text-sm focus:ring-primary"
                                                id="height"
                                                type="number" value="720" min="10"/>
                                        </div>
                                    </div>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input checked=""
                                            class="rounded text-primary focus:ring-primary border-gray-300"
                                            id="lockedAscpectRatio"
                                            type="checkbox" />
                                        <span class="text-sm text-gray-600 dark:text-gray-400">Lock Aspect Ratio</span>
                                    </label>
                                </div>
                                <div class="space-y-4">
                                    <h3 class="font-bold text-gray-900 dark:text-white flex items-center gap-2">
                                        <span class="material-symbols-outlined text-primary text-xl">file_save</span>
                                        Output Format
                                    </h3>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="space-y-1 col-span-2">
                                            <label class="text-xs font-semibold text-gray-500 uppercase">Format</label>
                                            <select
                                                id="format"
                                                class="w-full rounded-lg px-4 py-2 border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-background-dark text-sm focus:ring-primary">
                                                <option value="">Match Original</option>
                                                <option value="jpeg">JPG</option>
                                                <option vlaue="png">PNG</option>
                                                <option value="webp">WebP</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="text-xs font-semibold text-gray-500 uppercase">Progress:</div>
                                    <div class="w-full bg-gray-200 rounded-full h-2 border-1" id="progressBar">
                                        <div class="bg-green-500 h-2 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <button 
                                    type="button" 
                                    class="text-fg-disabled bg-disabled w-full h-11 flex items-center justify-center gap-2 rounded-lg box-border border border-default-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 cursor-pointer focus:outline-none" 
                                    disabled
                                    id="processBtn"
                                    onClick="processAndDownload()">
                                        <span class="material-symbols-outlined">download</span>
                                        Process &amp; Download
                                    </button>
                                    <!--button disabled
                                        class="w-full h-11 flex items-center justify-center gap-2 rounded-lg bg-primary px-4 text-sm font-bold text-white shadow-sm hover:bg-primary-dark transition-all mt-4">
                                        <span class="material-symbols-outlined">download</span>
                                        Process &amp; Download
                                    </button-->
                                </div>
                            </div>
                            <div class="flex flex-col justify-center bg-gray py-2 px-4 rounded-xl border mt-6">
                                <h3>Result images:</h3>
                                <ul class="w-full flex flex-col gap-2" id="resultedImages">

                                </ul>
                            </div>
                        </div>
                        <aside class="mt-12 lg:mt-0 lg:col-span-4 space-y-8">
                            <div
                                class="rounded-2xl border border-gray-200 dark:border-gray-800 bg-surface-light dark:bg-surface-dark p-6">
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-6">Related Tools</h3>
                                <div class="space-y-4">
                                    <a class="group flex items-center gap-4 p-4 rounded-xl bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-800 hover:border-primary/50 transition-all shadow-sm"
                                        href="./compressor.php">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-green-100 dark:bg-green-900/30 text-green-600">
                                            <span class="material-symbols-outlined text-xl">compress</span>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p class="font-bold text-sm text-gray-900 dark:text-white truncate">Image
                                                Compressor</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">Shrink file size without
                                                quality loss.</p>
                                        </div>
                                    </a>
                                    <a class="group flex items-center gap-4 p-4 rounded-xl bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-800 hover:border-primary/50 transition-all shadow-sm"
                                        href="./converter.php">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-purple-100 dark:bg-purple-900/30 text-purple-600">
                                            <span class="material-symbols-outlined text-xl">transform</span>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p class="font-bold text-sm text-gray-900 dark:text-white truncate">Image
                                                Converter</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">Convert between PNG,
                                                JPG, and WebP.</p>
                                        </div>
                                    </a>
                                    <a class="group flex items-center gap-4 p-4 rounded-xl bg-white dark:bg-background-dark border border-gray-100 dark:border-gray-800 hover:border-primary/50 transition-all shadow-sm"
                                        href="#">
                                        <div
                                            class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-orange-100 dark:bg-orange-900/30 text-orange-600">
                                            <span class="material-symbols-outlined text-xl">edit</span>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p class="font-bold text-sm text-gray-900 dark:text-white truncate">Image
                                                Editor</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">Crop, rotate and apply
                                                filters.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="p-6 rounded-2xl bg-primary/5 border border-primary/10">
                                <div class="flex items-center gap-3 text-primary mb-3">
                                    <span class="material-symbols-outlined">shield</span>
                                    <h4 class="font-bold">Privacy First</h4>
                                </div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                    Unlike other tools, we use your browser's processing power. Your files are never
                                    uploaded to a server, ensuring 100% data privacy.
                                </p>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
        </main>
        
        <?php include './includes/footer.php'; ?>

    </div>
<script defer>
    let filesToResize = [];
    let resultedImagesArray = [];
    let progress = 0.0;
    const uploadedFiles = document.querySelector('#uploadedImg')
    let counter = document.querySelector("#imgCounter")
    const processButton = document.querySelector("#processBtn")
    const resultedImages = document.querySelector('#resultedImages')
    const progressBar = document.querySelector("#progressBar > div")

function updateCounter(){
    console.log(`There are ${filesToResize.length} File(s).`)
    counter.innerText = filesToResize.length
    if(filesToResize.length >= 1){
        processButton.disabled = false
        processButton.classList.add("bg-primary", "text-white", "hover:bg-primary-dark");
    }else{
        processButton.disabled = true
        processButton.classList.remove('bg-primary', "text-white", "hover:bg-primary-dark")
        processButton.classList.add("bg-disabled", "text-fg-disabled")
    }

}

function redrawElement(el){
    el.innerHTML = "";
}


/*----------------------Resize Then download--------------------------*/
function processAndDownload(){
    console.log("CLICKED!!!")
    
    for(let file of filesToResize){
        handleImageResizeAndDownload(file);
        console.log(progress*100+"%")
        progress += (1 / filesToResize.length)
        progressBar.style.width = (progress * 100) + "%"
    }
    uploadedFiles.parentNode.remove()
    filesToResize = []
    updateCounter()
}

/*------------------Show Uploaded Images-----------------------------*/
function showUploaded(a){

    filesToResize = filesToResize.concat(Array.from(a.files))
    updateCounter()
    redrawElement(uploadedFiles)

    for (const file of filesToResize){
        let li = document.createElement('li')
        li.classList.add("fileItem", "py-2", "px-4", "my-2", "bg-gray-100", "rounded-md", "flex", "items-center", "gap-2", "relative")
        
        let img = document.createElement('img')
        img.src = URL.createObjectURL(file)
        img.style.height = "60px"
        img.style.width = "auto"

        let fileName = document.createElement('span')
        fileName.innerText = file.name

        let closeBtn = document.createElement('div')
        closeBtn.innerText = "✖"
        closeBtn.classList.add("h-7",  "w-7", "rounded-full", "bg-red-500", "hover:bg-red-700", "text-white", "absolute", "flex", "justify-center", "items-center", "right-4", "cursor-pointer")
        closeBtn.onclick = function(ev){
            ev.target.parentNode.remove()
            //filesToResize.splice(filesToResize.indexOf(ev.target), 1)
            //console.log(`You deleted ${file.name} File in the index ${filesToResize.indexOf(file)}`)
            filesToResize.splice(filesToResize.indexOf(file), 1)
            console.log(filesToResize)
            updateCounter()
        }

        li.appendChild(img)
        li.appendChild(fileName)
        li.appendChild(closeBtn)

        uploadedFiles.appendChild(li)
    }
}

/** 1. Convert a File object to a DataURL string */
const fileToDataURL = (file) => {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.onload = (e) => resolve(e.target.result);
        reader.onerror = reject;
        reader.readAsDataURL(file);
    });
};

/** 2. Convert a DataURL to an HTMLImageElement */
const loadImage = (url) => {
    return new Promise((resolve, reject) => {
        const img = new Image();
        img.onload = () => resolve(img);
        img.onerror = reject;
        img.src = url;
    });
};

/** 3. Pure Logic: Calculate new dimensions while maintaining aspect ratio */
const calculateDimensions = (originalWidth, originalHeight, targetWidth, targetHeight) => {
    // 1. Determine the scale factor for both width and height
    const widthRatio = targetWidth / originalWidth;
    const heightRatio = targetHeight / originalHeight;

    // 2. Use the smaller ratio to ensure the image fits within the "box" 
    // without overflowing or distorting the aspect ratio.
    const ratio = Math.min(widthRatio, heightRatio);

    return {
        width: Math.round(originalWidth * ratio),
        height: Math.round(originalHeight * ratio)
    };
};

/** 4. Draw image to a canvas and export as DataURL */
const getResizedCanvasData = (img, width, height, format = 'image/jpeg', quality = 0.9) => {
    const canvas = document.createElement('canvas');
    canvas.width = width;
    canvas.height = height;
    const ctx = canvas.getContext('2d');
    ctx.drawImage(img, 0, 0, width, height);
    console.log(`The targeted format is : ${format}`)
    return canvas.toDataURL(format, quality);
};

/** 5. Trigger a browser download */
const triggerDownload = (dataUrl, filename) => {
    const item = document.createElement('li')
    const img = document.createElement('img')
    const span = document.createElement('span')
    const link = document.createElement('a');

    img.src = dataUrl
    img.style.height = "60px"
    img.style.width = "auto"

    span.innerText = filename
    span.classList.add("text-sm", "flex-1")

    //link.style.display = "block"
    link.classList.add("size-8", "rounded-full", "text-white", "bg-primary", "flex", "justify-center", "items-center", "hover:bg-primary-dark")
    link.innerHTML = '<span class="material-symbols-outlined">download</span>'
    link.href = dataUrl;
    link.download = filename;
    //link.click();
    item.classList.add("flex", "items-center", "gap-4", "bg-gray-100", "py-2", "px-4", "rounded-md")
    item.appendChild(img)
    item.appendChild(span)
    item.appendChild(link)

    resultedImages.appendChild(item)
};

 async function handleImageResizeAndDownload(file) {
    try {
        // Step 1: File -> DataURL
        const imageDataUrl = await fileToDataURL(file);
        
        // Step 2: DataURL -> Image Object
        const img = await loadImage(imageDataUrl);
        
        // Step 3: Math (Dimensions)
        let selectedHeight = document.querySelector("#height").value;
        let selectedWidth = document.querySelector("#width").value;
        let selectedFormat = document.querySelector("#format").value;
        alert('YOu selected (format): '+selectedFormat)
        alert(`Your file's type: ${file.type}`)

        const { width, height } = calculateDimensions(img.width, img.height, selectedWidth, selectedHeight);
        
        // Step 4: Canvas Processing
        const targetFormat = selectedFormat == "" ? file.type : selectedFormat;
        const resizedDataUrl = getResizedCanvasData(img, width, height, targetFormat);
                
        
        // Step 5: Download
        const filename = 'resized-' +file.name.substring(0, file.name.lastIndexOf('.'))+'.'+targetFormat.substring(targetFormat.indexOf('/')+1, targetFormat.length);
        triggerDownload(resizedDataUrl, filename);
        
    } catch (error) {
        console.error("Image processing failed:", error);
    }
}
</script>
</body>

</html>