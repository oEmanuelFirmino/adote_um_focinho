<?php
function renderField($label, $type, $name, $options = null) {
    echo '<div class="form-field">';
    echo '<label for="' . $name . '">' . $label . '</label>';
    
    if ($type === 'select') {
        echo '<select name="' . $name . '" id="' . $name . '">';
        foreach ($options as $option) {
            echo '<option value="' . strtolower($option) . '">' . $option . '</option>';
        }
        echo '</select>';
    } elseif ($type === 'textarea') {
        echo '<textarea name="' . $name . '" id="' . $name . '" rows="5"></textarea>';
    } else {
        echo '<input type="' . $type . '" name="' . $name . '" id="' . $name . '" required>';
    }
    
    echo '</div>';
}

function renderForm($formType) {
    if ($formType === 'animal') {
        $fields = [
            ['label' => 'Imagem', 'type' => 'file', 'name' => 'imagem'],
            ['label' => 'Nome', 'type' => 'text', 'name' => 'nome'],
            ['label' => 'Idade', 'type' => 'number', 'name' => 'idade'],
            ['label' => 'Personalidade', 'type' => 'text', 'name' => 'personalidade'],
            ['label' => 'Porte', 'type' => 'select', 'name' => 'porte', 'options' => ['Pequeno', 'Médio', 'Grande']],
            ['label' => 'Raça', 'type' => 'text', 'name' => 'raca']
        ];
    } elseif ($formType === 'contact') {
        $fields = [
            ['label' => 'Nome', 'type' => 'text', 'name' => 'nome'],
            ['label' => 'Email', 'type' => 'email', 'name' => 'email'],
            ['label' => 'Mensagem', 'type' => 'textarea', 'name' => 'mensagem']
        ];
    }

    // Renderizando os campos no formulário
    echo '<div id="formFields">';
    foreach ($fields as $field) {
        renderField($field['label'], $field['type'], $field['name'], $field['options'] ?? null);
    }
    echo '</div>';
}
