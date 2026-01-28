const compressionResults = []
const resultedImagesList = document.querySelector('#resultedFilesList')

async function compress(images){
    let compressionLevel = document.querySelector('.chosen').getAttribute('data-value')

    console.log(`You triggered compression over ${uploadedImages} with a level of: ${compressionLevel}`)
    for(const file of images){
        const format = file.type;
        console.log(`Your file is ${format} format`)

        try {
        // Step 1: File -> DataURL
        const imageDataUrl = await fileToDataURL(file);
        
        // Step 2: DataURL -> Image Object
        const img = await loadImage(imageDataUrl);
        
        // Step 3: Img in Canvas
        const canvas = drawImageToCanvas(img)
        
        // Step 4: Canvas Processing
        const compressedToBlob = await compressCanvasToBlob(canvas, format, compressionLevel)
        compressionResults.push(compressedToBlob)

        resultedImagesList.appendChild(createListItem('compressed-'+file.name, compressedToBlob, "download", "close"))
        
    } catch (error) {
        console.error("Image processing failed:", error);
    }

    }
}