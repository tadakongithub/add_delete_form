const addPerson = document.querySelector('.add-person');
const fieldContainer = document.querySelector('.field-container');

addPerson.addEventListener('click', (e) => {
    e.preventDefault();
    fieldContainer.insertAdjacentHTML('beforeend',  `
        <div class="each-person">
            <button class="close">&times;</button>
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name[]" required><br>
            <label for="hobby">Hobby</label><br>
            <input type="text" id="hobby" name="hobby[]" required>
        </div>
    `)
});

fieldContainer.addEventListener('click', (e) => {
    if(e.target.classList.contains('close')) {
        e.target.parentNode.remove();
    }
});