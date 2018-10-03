<?php
echo form_open('mahasiswa/edit');
echo form_input('nrp',$m->nrp);
echo form_input('nama',$m->nama);
echo form_submit('','Koreksi');
echo form_close();
?>