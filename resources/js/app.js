import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

//Prendo dal dom tutti gli elementi con id formDelete
const deleteForm = document.querySelectorAll('#formDelete');

// console.log(deleteForm);
//Aggiungo ad ognuno degli elementi un eventListenr
deleteForm.forEach((currForm, index) => {
    // console.log(currForm);

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

