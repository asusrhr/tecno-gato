require("./bootstrap");

require("alpinejs");

const titulo = document.querySelector('#titulo');
const submit = document.querySelector('#submit');

submit.addEventListener('click', () => {
    if (titulo.validity.typeMismatch) {
        tiutlo.setCustomValidity('Please enter correct email');
    } else {
        titulo.setCustomValidity('');
    }
})