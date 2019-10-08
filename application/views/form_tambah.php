	<div class="container">
			<form action="<?php echo base_url('penduduk/tambah_penduduk') ?>" method="post">
			  <div class="form-group">
			    <label for="nik">Nik</label>
			    <input type="number" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo set_value('nik') ?>">
			    <div style="color: red"><?php echo form_error('nik'); ?></div>
			  </div>
			  <div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo set_value('nama') ?>">
			    <div style="color: red"><?php echo form_error('nama'); ?></div>
			  </div>
			  <div class="form-group">
			    <label for="jenis_kelamin">Jenis Kelamin</label>
			    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
			      <option>--Jenis Kelamin--</option>
			      <option value="laki-laki" <?php echo set_select('jenis_kelamin','laki-laki'); ?>>Laki-Laki</option>
			      <option value="perempuan" <?php echo set_select('jenis_kelamin','perempuan'); ?>>Perempuan</option>
			    </select>
			    <div style="color: red"><?php echo form_error('jenis_kelamin'); ?></div>
			  </div>
			  <div class="form-group">
			    <label for="tempat_lahir">Tempat Lahir</label>
			    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo set_value('tempat_lahir') ?>">
			    <div style="color: red"><?php echo form_error('tempat_lahir'); ?></div>
			  </div>
			  <div class="form-group">
			    <label for="tgl_lahir">Tanggal Lahir</label>
			    <input type="text" class="form-control tgl_lahir" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo set_value('tgl_lahir') ?>">
			    <div style="color: red"><?php echo form_error('tgl_lahir'); ?></div>
			  </div>
			  <div class="form-group">
			    <label for="alamat">Alamat</label>
			    <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo set_value('alamat') ?></textarea>
			    <div style="color: red"><?php echo form_error('alamat'); ?></div>
			  </div>
				  <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
				  <button type="reset" name="reset" class="btn btn-danger">Reset</button>
				  <a href="<?php echo base_url('penduduk') ?>" class="btn btn-danger">Kembali</a>
			</form>
		</div>


		<script>
			$(document).ready(function(){
				$('.tgl_lahir').datepicker({
	              changeMonth: true, 
	              changeYear: true,
	              dateFormat:'dd MM yy'
            });
			})
            
          </script>

		