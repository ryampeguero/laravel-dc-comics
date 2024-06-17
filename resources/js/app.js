import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const deleteButtons = document.querySelectorAll('.prova');

// console.log(deleteButtons);
const deleteForm = document.querySelectorAll('#formDelete');

// console.log(deleteForm);

deleteForm.forEach((currForm, index) => {
    console.log(currForm);

    currForm.addEventListener('submit', (event) => {
        event.preventDefault(); //Blocca il form dal submit
        const deleteModalButton = document.querySelector('#delete');
        console.log(deleteModalButton);
        deleteModalButton.addEventListener('click', () => {
            currForm.submit();
        });
    });

});

