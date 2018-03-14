<button class="btn btn-primary" data-toggle="modal" data-target="#Tambah">
    <i class="fa fa-plus"></i> Tambah
</button>
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">Tambah data?</h4>
</div>
<div class="modal-body">
    
<?php
// Validasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Form buka 
echo form_open(base_url('admin/satker'));
?>

<div class="form-group">
<input type="text" name="nama_satker" class="form-control" placeholder="Nama satker satker" value="<?php echo set_value('nama_satker') ?>" required>
</div>

<div class="form-group">
<textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo set_value('keterangan'); ?></textarea>
</div>

<div class="form-group">
<input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo set_value('urutan') ?>" required>
</div>

<div class="form-group text-center">
<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Data">
</div>
<div class="clearfix"></div>

<?php
// Form close 
echo form_close();
?>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
    

</div>
</div>
</div>
</div>
