<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">Daftar User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($users as $user)
                    <tr class="align-middle">
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->profiles->tanggal_lahir }}</td>
                        <td class="text-center"><span class="badge text-bg-danger">Administrator</span></td>
                        <td class="text-center" style="width: 20%">
                            <a class="btn btn-icon btn-primary"><i class="ti ti-eye"></i></a>
                            <a class="btn btn-icon btn-warning"><i class="ti ti-pencil"></i></a>
                            <a class="btn btn-icon btn-danger"><i class="ti ti-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-end">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
</div>
