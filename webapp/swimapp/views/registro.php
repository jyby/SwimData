<div class="form">
<?php

echo form_open('welcome/registro');

echo form_input('nombre', 'Nombre');
echo form_input('email', 'E-mail');
echo form_input('password', 'Contraseña');
echo form_input('password2', 'Repita Contraseña');
echo form_input('codigo_curso', 'Codigo del Curso');
echo form_input('edad', 'Edad');
echo form_input('estatura', 'Estatura');
echo form_input('peso', 'Peso');
echo 'Participa en la rama? ' . form_checkbox('participa_rama', 'participa_rama');

echo form_submit('submit', 'Registrarse');
echo form_close();
?>
</div>