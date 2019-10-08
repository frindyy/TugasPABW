
	
		<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('pesan'); ?>"></div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<a href="<?php echo base_url('penduduk/tambah_penduduk') ?>" class="btn btn-success" style="margin:10px;">Tambah</a>
						<table class="table table-striped table-bordered" id="table" style="width: 100%">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Nik</th>
						      <th scope="col">Nama</th>
						      <th scope="col">Jenis Kelamin</th>
						      <th scope="col">Tempat Lahir</th>
						      <th scope="col">Tgl Lahir</th>
						      <th scope="col">Alamat</th>
						      <th scope="col">Aksi</th>
						    </tr>
						  </thead>
						  <tbody>

						  	<?php 
						  		$no=1;
						  		foreach ($penduduk as $row) 
						  	{ ?>
							    <tr>
							      <th scope="row"><?php echo $no++; ?></th>
							      <td><?php echo $row['nik']; ?></td>
							      <td><?php echo $row['nama']; ?></td>
							      <td><?php echo $row['jenis_kelamin']; ?></td>
							      <td><?php echo $row['tempat_lahir']; ?></td>
							      <td><?php echo date('d M Y',strtotime($row['tgl_lahir'])); ?></td>
							      <td><?php echo $row['alamat']; ?></td>
							      <td>
							      	<a href="<?php echo base_url().'penduduk/edit_penduduk/'.$row['nik'] ?>" class="btn btn-primary">Edit</a>
							      	<a href="<?php echo base_url().'penduduk/hapus_penduduk/'.$row['nik'] ?>" class="btn btn-danger hapus_penduduk">Hapus</a>
							      </td>
							    </tr>
							 <?php	} ?>
						  </tbody>
						</table>
				</div>
			</div>
		</div>

		<script>
			const flashdata = $(".flash-data").data('flashdata');
            if (flashdata) {
              Swal.fire({
                title: 'Data Penduduk',
                text: 'Berhasil ' + flashdata,
                type: 'success'
              });
            }

            $('.hapus_penduduk').on('click',function(e){
              e.preventDefault();
              const href = $(this).attr('href');
              Swal.fire({
                  title: 'Apakah Anda Yakin?',
                  text: "Data penduduk akan dihapus",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Hapus Data'
                }).then((result) => {
                  if (result.value) {
                      document.location.href = href;
                  }
                });
            });
		</script>