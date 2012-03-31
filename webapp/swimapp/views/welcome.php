<div class="form">
<?php
echo form_open('welcome/login');
echo form_input('email', 'E-mail');
echo form_password('password', 'Password');
echo form_submit('submit', 'Entrar');
echo anchor('welcome/registro', 'Crear nueva cuenta');
echo form_close();
?>
</div>