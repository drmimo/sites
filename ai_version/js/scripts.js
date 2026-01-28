let filesToResize = []
const uploadedFiles = document.querySelector('#uploadedImg')
let counter = document.querySelector("#imgCounter")
const processButton = document.querySelector("#processBtn")
const selectedHeight = document.querySelector("#height").value;
const selectedWidth = document.querySelector("#width").value;
const selectedFormat = document.querySelector("#format").value;

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
    }
    return
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
        closeBtn.classList.add("h-7",  "w-7", "rounded-full", "bg-red-500", "text-white", "absolute", "flex", "justify-center", "items-center", "right-4", "cursor-pointer")
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
const calculateDimensions = (originalWidth, originalHeight, maxWidth, maxHeight) => {
    let width = originalWidth;
    let height = originalHeight;

    console.log(`Preparing for calculating dimensions ${maxWidth}:${maxHeight}`)

    if (width > height) {
        if (width > maxWidth) {
            height *= maxWidth / width;
            width = maxWidth;
        }
    } else {
        if (height > maxHeight) {
            width *= maxHeight / height;
            console.log(`Calculated dimensions ${width}:${height}`)
            height = maxHeight;
        }
    }
    return { width, height };
};

/** 4. Draw image to a canvas and export as DataURL */
const getResizedCanvasData = (img, width, height, format = 'image/jpeg', quality = 0.9) => {
    const canvas = document.createElement('canvas');
    canvas.width = width;
    canvas.height = height;
    const ctx = canvas.getContext('2d');
    ctx.drawImage(img, 0, 0, width, height);
    return canvas.toDataURL(format, quality);
};

/** 5. Trigger a browser download */
const triggerDownload = (dataUrl, filename) => {
    const link = document.createElement('a');
    link.href = dataUrl;
    link.download = filename;
    link.click();
};

 async function handleImageResizeAndDownload(file) {
    try {
        // Step 1: File -> DataURL
        const imageDataUrl = await fileToDataURL(file);
        
        // Step 2: DataURL -> Image Object
        const img = await loadImage(imageDataUrl);
        
        // Step 3: Math (Dimensions)
        alert(selectedWidth+':'+selectedHeight)
        const { width, height } = calculateDimensions(img.width, img.height, selectedWidth, selectedHeight);
        
        // Step 4: Canvas Processing
        const resizedDataUrl = getResizedCanvasData(img, width, height, selectedFormat);
        
        // Step 5: Download
        triggerDownload(resizedDataUrl, `resized-${file.name}`);
        
    } catch (error) {
        console.error("Image processing failed:", error);
    }
}