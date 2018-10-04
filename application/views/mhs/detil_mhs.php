<?php
echo validation_errors();
$hidden = array('old_key' => $m->nrp);
echo form_open("mahasiswa/show/$m->nrp",'',$hidden);
echo form_input('nrp',set_value('nrp',$m->nrp));
echo form_input('nama',set_value('nama',$m->nama));
echo form_submit('','Koreksi');
echo form_close();
?>