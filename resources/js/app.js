import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const body = document.getElementsByTagName('body');

const modal = document.createElement('p');
modal.innerHTML += `
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
`;



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




function submitForm(formToSubmit) {
    console.log('ciao');
    // formToSubmit.submit();
}

function prevent() {
    console.log(this);
    this.preventDefault();
}