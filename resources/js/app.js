import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const deleteModalBtn = document.querySelectorAll('#modal-btn');

deleteModalBtn.forEach(element => {

    element.addEventListener('click', function(){
        let windowLocation = window.location.origin;
        let path = element.getAttribute('data-path');
        let id = element.getAttribute('data-id');
      
        const url = `${windowLocation}/dashboard/${path}/${id}`;
        const form = document.getElementById('record-to-delete');

        form.setAttribute('action', url);
    })
});

