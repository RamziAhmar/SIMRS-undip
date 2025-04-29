@if ($title == 'Tambah Data User') 
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Tambah User</h5>
        </div>
        <div class="card-body bordered-bottom">
            <form action="/user/insert" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form-control">
                            <option disabled selected>Pilih</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Petugas">Petugas</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                </div>
                <a href="/user" class="btn btn-danger">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@elseif ($title == 'Detail User')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Detail User</h5>
        </div>
        <div class="card-body bordered-bottom">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" placeholder="{{ $users->username }}" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="{{ $users->profiles->nama_lengkap }}" disabled>                    
                    </div>
                    <div class="form-group col-md-4">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form-control" disabled>
                            <option value="Administrator" {{ $users->role == 'Administrator' ? 'selected' : null }}>Administrator</option>
                            <option value="Dokter" {{ $users->role == 'Dokter' ? 'selected' : null }}>Dokter</option>
                            <option value="Petugas" {{ $users->role == 'Petugas' ? 'selected' : null }}>Petugas</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control" placeholder="{{ $users->profiles->tanggal_lahir }}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="{{ $users->profiles->tempat_lahir }}" disabled>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" placeholder="{{ $users->profiles->alamat }}" disabled>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="foto">Foto</label>
                        <img src="" alt="">
                    </div>
                </div>
                <a href="/user" class="btn btn-danger">Kembali</a>
        </div>
    </div>
</div>
@endif
