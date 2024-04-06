const clientForm = document.getElementById('clientForm');
const filmmakerForm = document.getElementById('filmmakerForm');

document.getElementById('client-btn').addEventListener('click', function () {
    clientForm.classList.remove('hidden');
    filmmakerForm.classList.add('hidden');
});

document.getElementById('filmmaker-btn').addEventListener('click', function () {
    clientForm.classList.add('hidden');
    filmmakerForm.classList.remove('hidden');
});
