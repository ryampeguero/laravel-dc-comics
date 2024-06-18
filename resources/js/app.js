import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const btnForm = document.getElementById('btn-form');
console.log(btnForm);
//Prendo dal dom tutti gli elementi con id formDelete
const deleteForm = document.querySelectorAll('#formDelete');

if (deleteForm.length > 0) {
    // console.log(deleteForm);
    //Aggiungo ad ognuno degli elementi un eventListenr
    deleteForm.forEach((currForm, index) => {
        // console.log(currForm);
        const comicTitle = currForm.dataset.comicTitle;
        console.log(comicTitle);
        const modalTitle = document.querySelector('.modal-title');
        modalTitle.innerHTML = `Sicuro di voler cancellare ${comicTitle}`;
        currForm.addEventListener('submit', (event) => {
            //Blocca il form dal submit
            event.preventDefault();

            //Prendo l'elemento del modal con id delete
            const deleteModalButton = document.querySelector('#delete');
            // console.log(deleteModalButton);

            //Aggiungo eventListener
            deleteModalButton.addEventListener('click', () => {
                //Faccio il submit del form corrente selezionato
                currForm.submit();
            });
        });

    });

}
