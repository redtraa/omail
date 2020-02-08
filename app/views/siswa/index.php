<div class="container mt-3">
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary mb-3 tombolTambahData" data-toggle="modal" data-target="#formModal">Tambah Data Siswa</button>
			<h3>Daftar Siswa</h3>
			<ul class="list-group">
				<?php foreach ($data['siswa'] as $siswa): ?>
					<li class="list-group-item">
						<?= $siswa['nama'] ?><a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa['id'] ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin?')">Hapus</a>
						<a href="<?= BASEURL; ?>/siswa/edit/<?= $siswa['id'] ?>" class="badge badge-secondary float-right mr-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $siswa['id'] ?>">Edit</a>
						<a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa['id'] ?>" class="badge badge-primary float-right mr-2">Detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
			
		</div>
	</div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah data siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		<form action="<?= BASEURL; ?>/siswa/tambah" method="post">
			<input type="hidden" name="id" id="id">
			<div class="modal-body">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
				<div class="form-group">
					<label for="nisn">Nisn</label>
					<input type="number" class="form-control" id="nisn" name="nisn">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<select class="form-control" name="jurusan" id="jurusan">
						<option value="RPL">RPL</option>
						<option value="TKJ">TKJ</option>
						<option value="MM">MM</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-primary">Tambah data</button>
			</div>
		</form>
    </div>
  </div>
</div>