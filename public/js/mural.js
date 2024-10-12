const buttonEl = document.querySelector('.b-1')
buttonEl.addEventListener('click', () => {
    const formTemplateEl = document.getElementById('formTemplate').content.cloneNode(true)
    document.querySelector('.form-view').appendChild(formTemplateEl)
    buttonEl.disabled = true
})



