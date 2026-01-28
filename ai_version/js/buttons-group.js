const buttonsGroup = document.querySelectorAll(".buttons-group button")

buttonsGroup.forEach((button)=>{
    button.addEventListener('click', (ev)=>{
        for(const btn of buttonsGroup){
            btn.classList.remove('chosen')
            btn.classList.remove('bg-primary/5')
            btn.classList.remove('border-primary')

            btn.querySelector('.btnTitle').classList.remove('text-primary')
            btn.querySelector('.btnDescription').classList.remove('text-primary/80')
        }
        button.classList.add("chosen")
        button.classList.add('bg-primary/5')
        button.classList.add('border-primary')

        button.querySelector('.btnTitle').classList.add('text-primary')
        button.querySelector('.btnDescription').classList.add('text-primary/80')
    })
})