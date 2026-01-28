const fileToDataURL = (file) => {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.onload = (e) => resolve(e.target.result);
        reader.onerror = reject;
        reader.readAsDataURL(file);
    });
};

/** Convert a DataURL to an HTMLImageElement */
const loadImage = (url) => {
    return new Promise((resolve, reject) => {
        const img = new Image();
        img.onload = () => resolve(img);
        img.onerror = reject;
        img.src = url;
    });
};


/** Draw image to a canvas and export as DataURL */
const getResizedCanvasData = (img, width, height, format = 'image/jpeg', quality = 0.9) => {
    const canvas = document.createElement('canvas');
    canvas.width = width;
    canvas.height = height;
    const ctx = canvas.getContext('2d');
    ctx.drawImage(img, 0, 0, width, height);
    return canvas.toDataURL(format, quality);
};

/** Draw Image To Canvas And Return Canvas */
const drawImageToCanvas = (img)=>{
    const canvas = document.createElement('canvas')
    canvas.width = img.width
    canvas.height = img.height
    const ctx = canvas.getContext('2d')
    ctx.clearRect(0, 0, canvas.width, canvas.height)
    ctx.drawImage(img, 0, 0, canvas.width, canvas.height)
    return canvas;
}

/** Compress Canvas To Blob */
const compressCanvasToBlob = (canvas, format = 'image/jpeg', quality = 0.7) => {
    console.log(`You wanted ${quality} level of compression?`)
    return new Promise((resolve) => {
        canvas.toBlob((blob) => {
            resolve(blob);
        }, format, quality);
    });
};

/** Trigger a browser download */
const triggerDownload = (dataUrl, filename) => {
    const link = document.createElement('a');
    link.href = dataUrl;
    link.download = filename;
    link.click();
};