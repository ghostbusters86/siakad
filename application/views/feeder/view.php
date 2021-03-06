<div class="row">
	<div class="col-md-6">
		<div class="panel panel-success">
		  <div class="panel-heading">Export Data Mahasiswa</div>
		  <div class="panel-body">
		  	<p style="red">
		  		*) <i>Mahasiswa yg di export hanya berstatus mahasiswa baru</i>
		  	</p>
		  	<form action="<?php echo base_url() ?>feeder/data_mahasiswa" method="GET">

				<div class="form-group">
					<label>Tahun Angkatan</label>
					<select name="thn_angkatan" class="form-control">
						<?php 
						$this->db->order_by('angkatan_id', 'desc');
						foreach ($this->db->get('student_angkatan')->result() as $key => $rw): ?>
							<option value="<?php echo $rw->angkatan_id ?>"><?php echo $rw->keterangan ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
		  			<label>Status</label>
		  			<select name="keterangan_mhs" class="form-control">
                       <option value="">-- Pilih -- </option>
                       <option value="mahasiswa aktif">mahasiswa aktif</option>
                       <option value="cuti resmi">cuti resmi</option>
                       <option value="cuti tanpa keterangan">cuti tanpa keterangan</option>
                       <option value="mahasiswa baru">mahasiswa baru</option>
                       <option value="meninggal dunia">meninggal dunia</option>
                       <option value="drop out">drop out</option>
                       <option value="mengundurkan diri">mengundurkan diri</option>
                       <option value="mutasi keluar perguruan tinggi">mutasi keluar perguruan tinggi</option>
                     </select>
		  		</div>
		  		<div class="form-group">
		  			<label>Nim</label>
		  			<input type="text" name="nim" class="form-control" placeholder="Masukkan nim">
		  		</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Download</button>
				</div>
			</form>
		  </div>
		</div>
		
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-success">
		  <div class="panel-heading">Export Data KRS</div>
		  <div class="panel-body">
		  	<form action="<?php echo base_url() ?>feeder/data_krs" method="GET">
				<div class="form-group">
					<label>Tahun Akademik</label>
					<select name="thn_akademik" class="form-control">
						<?php 
						$this->db->order_by('tahun_akademik_id', 'desc');
						foreach ($this->db->get('akademik_tahun_akademik')->result() as $key => $rw): ?>
							<option value="<?php echo $rw->tahun_akademik_id ?>"><?php echo $rw->keterangan ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
		  			<label>Nim</label>
		  			<input type="text" name="nim" class="form-control" placeholder="Masukkan nim">
		  		</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Download</button>
				</div>
			</form>
		  </div>
		</div>
		
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-success">
		  <div class="panel-heading">Export Data Nilai</div>
		  <div class="panel-body">
		  	<form action="<?php echo base_url() ?>feeder/data_khs" method="GET">
				<div class="form-group">
					<label>Tahun Akademik</label>
					<select name="thn_akademik" class="form-control">
						<?php 
						$this->db->order_by('tahun_akademik_id', 'desc');
						foreach ($this->db->get('akademik_tahun_akademik')->result() as $key => $rw): ?>
							<option value="<?php echo $rw->tahun_akademik_id ?>"><?php echo $rw->keterangan ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
		  			<label>Nim</label>
		  			<input type="text" name="nim" class="form-control" placeholder="Masukkan nim">
		  		</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Download</button>
				</div>
			</form>
		  </div>
		</div>
		
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-success">
		  <div class="panel-heading">Export Data AKM</div>
		  <div class="panel-body">
		  	<form action="<?php echo base_url() ?>feeder/data_akm" method="GET">
				<div class="form-group">
					<label>Tahun Akademik</label>
					<select name="thn_akademik" class="form-control">
						<?php 
						$this->db->order_by('tahun_akademik_id', 'desc');
						foreach ($this->db->get('akademik_tahun_akademik')->result() as $key => $rw): ?>
							<option value="<?php echo $rw->tahun_akademik_id ?>"><?php echo $rw->keterangan ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
		  			<label>Nim</label>
		  			<input type="text" name="nim" class="form-control" placeholder="Masukkan nim">
		  		</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Download</button>
				</div>
			</form>
		  </div>
		</div>
		
	</div>
</div>




