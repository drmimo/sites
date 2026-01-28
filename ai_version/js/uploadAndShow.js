let inputElement = document.querySelector("#filesInput")
let uploadedImages = []

inputElement.addEventListener('change', (ev)=>{
    ev.preventDefault()
    uploadedImages = [...uploadedImages, ...ev.target.files]
    //console.log(files)
    showUploadedFiles(uploadedImages)
});

function createListItem(name, file, ...icons){
    const listItem =  document.createElement('li')
    listItem.classList.add("fileItem", "py-2", "px-4", "my-2", "bg-white", "rounded-md", "flex", "items-center", "gap-2", "relative")

    const img = document.createElement('img')
    img.src = URL.createObjectURL(file)
    img.style.height = "60px"
    img.style.width = "auto"
    listItem.appendChild(img)

    const fileName = document.createElement('span')
    fileName.classList.add("flex-1")
    fileName.innerText = name
    listItem.appendChild(fileName)

    if(icons.includes('close')){
        let closeBtn = document.createElement('div')
        closeBtn.innerText = "✖"
        closeBtn.classList.add("size-8", "rounded-full", "bg-red-500", "hover:bg-red-700", "text-white", "flex", "justify-center", "items-center", "cursor-pointer")
        closeBtn.onclick = function(ev){
            ev.target.parentNode.remove()
            uploadedImages.splice(uploadedImages.indexOf(file), 1)
        }
        listItem.appendChild(closeBtn)
    }

    if(icons.includes('download')){
        const link = document.createElement('a');
        link.classList.add("size-8", "rounded-full", "text-white", "bg-primary", "flex", "justify-center", "items-center", "hover:bg-primary-dark")
        link.innerHTML = '<span class="material-symbols-outlined">download</span>'
        link.href = URL.createObjectURL(file);
        link.download = name;
        listItem.appendChild(link)
    }
    
    return listItem;
}

function showUploadedFiles(filesList){
    const uploadedFilesListElement = document.querySelector("#uploadedFilesList")
    for(const file of filesList){
        uploadedFilesListElement.appendChild(createListItem(null, file, 'close'))
    }
}

document.querySelector("#compressButton").addEventListener('click', (ev)=>{
    compress(uploadedImages)
})


