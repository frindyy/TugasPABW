	<div class="container">
			<form action="<?php echo base_url('penduduk/edit_penduduk_proses') ?>" method="post">
			  <div class="form-group">
			    <label for="nik">Nik</label>
			    <input type="number" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $penduduk['nik']; ?>" readonly>
			    <div style="color: red"><?php echo form_error('nik'); ?></div>
			  </div>
			  <div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $penduduk['nama']; ?>">
			    <div style="color: red"><?php echo form_error('nama'); ?></div>
			  </div>
			  <div class="form-group">
			    <label for="jenis_kelamin">Jenis Kelamin</label>
			    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
			      <option>--Jenis Kelamin--</option>
			      <option value="laki-laki" <?php echo set_select('jenis_kelamin','laki-laki'); ?> <?php if($penduduk['jenis_kelamin'] == 'laki-laki'){ echo 'selected'; } ?>>Laki-Laki</option>
			      <option value="perempuan" <?php echo set_select('jenis_kelamin','perempuan'); ?> <?php if($penduduk['jenis_kelamin'] == 'perempuan'){ echo 'selected'; } ?>>Perempuan</option>
			    </select>
			    <div style="color: red"><?php echo form_error('jenis_kelamin'); ?></div>
			  </div>
			  <div class="form-group">
			    <label for="tempat_lahir">Tempat Lahir</label>
			    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $penduduk['tempat_lahir']; ?>">
			    <div style="color: red"><?php echo form_error('tempat_lahir'); ?></div>
			  </div>
			  <div class="form-group">
			    <label for="tgl_lahir">Tanggal Lahir</label>
			    <input type="text" class="form-control tgl_lahir" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $penduduk['tgl_lahir']; ?>">
			    <div style="color: red"><?php echo form_error('tgl_lahir'); ?></div>
			  </div>
			  <div class="form-group">
			    <label for="alamat">Alamat</label>
			    <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $penduduk['alamat'] ?></textarea>
			    <div style="color: red"><?php echo form_error('alamat'); ?></div>
			  </div>
				  <button type="submit" name="edit" class="btn btn-primary">Edit</button>
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

		