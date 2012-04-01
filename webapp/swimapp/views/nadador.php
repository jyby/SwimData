<?php print_r($nadador); ?>

<?php print_r($series); ?>


<div>
<span>Subir archivo CSV</span>
</div>
<?php
echo form_open_multipart('nadadores/upload');
echo form_upload('file', 'Archivo CSV');
echo form_submit('submit', 'Subir');
echo form_close();
?>