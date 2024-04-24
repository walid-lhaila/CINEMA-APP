const btn = document.getElementById('btn');
const form = document.getElementById('form');
const close = document.getElementById('close');

btn.addEventListener('click', function(){
    form.classList.remove('scale-0');
    form.classList.add('scale-100');
})
close.addEventListener('click', function(){
    form.classList.remove('scale-100');
    form.classList.add('scale-0');
})
