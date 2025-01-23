function loadComponent(id, file, callback) {
    fetch(file)
        .then(response => response.text())
        .then(data => {
            document.getElementById(id).innerHTML = data;
            callback();
        })
        .catch(error => console.error('Erro ao carregar o componente:', error));
}

function addField(labelText, inputType, inputName, inputOptions = null) {
    const formFields = document.getElementById('formFields');

    const fieldWrapper = document.createElement('div');
    fieldWrapper.className = 'form-field';

    const label = document.createElement('label');
    label.innerText = labelText;
    label.setAttribute('for', inputName);

    let input;
    if (inputType === 'select') {
        input = document.createElement('select');
        input.name = inputName;

        inputOptions.forEach(option => {
            const opt = document.createElement('option');
            opt.value = option.toLowerCase();
            opt.innerText = option;
            input.appendChild(opt);
        });
    } else if (inputType === 'textarea') {
        input = document.createElement('textarea');
        input.name = inputName;
        input.rows = 5; // Define o número de linhas visíveis
    } else {
        input = document.createElement('input');
        input.type = inputType;
        input.name = inputName;
        input.required = true;
    }

    fieldWrapper.appendChild(label);
    fieldWrapper.appendChild(input);
    formFields.appendChild(fieldWrapper);
}


function addFormFields(fields) {
    fields.forEach(field => {
        addField(field.label, field.type, field.name, field.options);
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const animalFields = [
        { label: 'Imagem', type: 'file', name: 'imagem' },
        { label: 'Nome', type: 'text', name: 'nome' },
        { label: 'Idade', type: 'number', name: 'idade' },
        { label: 'Personalidade', type: 'text', name: 'personalidade' },
        { label: 'Porte', type: 'select', name: 'porte', options: ['Pequeno', 'Médio', 'Grande'] },
        { label: 'Raça', type: 'text', name: 'raca' }
    ];

    const contactFields = [
        { label: 'Nome', type: 'text', name: 'nome' },
        { label: 'Email', type: 'email', name: 'email' },
        { label: 'Mensagem', type: 'textarea', name: 'mensagem' }, // Alterado para textarea
    ];

    loadComponent('formContainer', '/src/components/form.php', function () {
        addFormFields(animalFields);
    });

    loadComponent('contactContainer', '/src/components/form.php', function () {
        addFormFields(contactFields);
    });
});

loadComponent('header', 'src/components/header.php');
loadComponent('footer', 'src/components/footer.php');
