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
        let slug = element.getAttribute('data-slug');
      
        const url = `${windowLocation}/dashboard/${path}/${slug}`;
        const form = document.getElementById('record-to-delete');

        form.setAttribute('action', url);
    })
});

