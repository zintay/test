const list = document.querySelector(seLectors: '.list')

list.addEventListener(type: 'click', listerer: (event)=>{
    const target = event.target
    target.classList.add('active')
})