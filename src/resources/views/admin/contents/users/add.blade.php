<div class="modal fade text-left" id="modal-add-data" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<h4 class="modal-title white">Tambah Pengguna</h4>
				<button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x">X</i>
                </button>
			</div>

			<div class="modal-body">
				<form action="{{ route('store.user') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<label>Nama</label>
					<div class="form-group">
						<input type="text" class="form-control" name="name" required>
					</div>

					<label>Email</label>					
					<div class="form-group">
						<input type="email" class="form-control" name="email" required>
					</div>

					<label>Password</label>					
					<div class="form-group">
						<input type="password" class="form-control" name="password" required>
					</div>					
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                </button>
                <button type="submit" class="btn btn-primary ml-1">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Simpan</span>
                </button>
				</form>
			</div>
			
		</div>
	</div>
</div>