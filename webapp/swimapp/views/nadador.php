<table>
  <tr>
    <td>Nombre:</td>
    <td><?php echo $nadador['nombre']; ?></td>
  </tr>
  <tr>
    <td>E-Mail:</td>
    <td><?php echo $nadador['email']; ?></td>
  </tr>
  <tr>
    <td>Curso:</td>
    <td><?php echo $nadador['codigo_curso']; ?></td>
  </tr>
  <tr>
    <td>Participa en la Rama?:</td>
    <td><?php echo $nadador['participa_rama'] ? 'Si' : 'No'; ?></td>
  </tr>
  <tr>
    <td>Edad:</td>
    <td><?php echo $nadador['edad']; ?></td>
  </tr>
  <tr>
    <td>Estatura:</td>
    <td><?php echo $nadador['estatura']; ?></td>
  </tr>
  <tr>
    <td>Peso:</td>
    <td><?php echo $nadador['peso']; ?></td>
  </tr>
</table>

<br />
<br />


<div>
<span>Subir archivo CSV</span>
</div>
<?php
echo form_open_multipart('nadadores/upload');
echo form_upload('file', 'Archivo CSV');
echo form_submit('submit', 'Subir');
echo '<br />';
echo form_close();
?>

<br />
<br />

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Log Date</th>
      <th>Log Time</th>
      <th>Log Type</th>
      <th>Pool</th>
      <th>Total Duration</th>
      <th>Calories</th>
      <th>Total Lengths</th>
      <th>Total Distance</th>
      <th>N Set</th>
      <th>Duration</th>
      <th>Strokes</th>
      <th>Distance</th>
      <th>Speed</th>
      <th>Efficiency</th>
      <th>Stroke Rate</th>
      <th>HR Min</th>
      <th>HR Max</th>
      <th>HR Avg</th>
      <th>HR Begin</th>
      <th>HR End</th>
      <th>Version</th>      
    </tr>
  </thead>

  
<tbody> 
  <?php foreach($series as $s) { ?>
  <tr>
    <td><?php echo $s['id']; ?></td>
    <td><?php echo $s['log_date']; ?></td>
    <td><?php echo $s['log_time']; ?></td>
    <td><?php echo $s['log_type']; ?></td>
    <td><?php echo $s['pool'] . ' ' . $s['units']; ?></td>
    <td><?php echo $s['total_duration']; ?></td>
    <td><?php echo $s['calories']; ?></td>
    <td><?php echo $s['total_lengths']; ?></td>
    <td><?php echo $s['total_distance']; ?></td>
    <td><?php echo $s['nset']; ?></td>
    <td><?php echo $s['duration']; ?></td>
    <td><?php echo $s['strokes']; ?></td>
    <td><?php echo $s['distance']; ?></td>
    <td><?php echo $s['speed']; ?></td>
    <td><?php echo $s['efficiency']; ?></td>
    <td><?php echo $s['stroke_rate']; ?></td>
    <td><?php echo $s['hr_min']; ?></td>
    <td><?php echo $s['hr_max']; ?></td>
    <td><?php echo $s['hr_avg']; ?></td>
    <td><?php echo $s['hr_begin']; ?></td>
    <td><?php echo $s['hr_end']; ?></td>
    <td><?php echo $s['version']; ?> </td>
  </tr>
  <?php } ?>
</tbody>
</table>
