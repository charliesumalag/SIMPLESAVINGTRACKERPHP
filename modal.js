const showModalEl = document.querySelector('.show-modal');
const modalFormEl = document.querySelector('.modal');
const overlayEl = document.querySelector('.overlay');
const savingList = document.querySelector('.saving');

const openModal = () => {
    savingList.classList.add('.overflow-hidden');
    modalFormEl.classList.remove('hidden');
    overlayEl.classList.remove('hidden');

    console.log('show modal clicked')
}

showModalEl.addEventListener('click', openModal);
