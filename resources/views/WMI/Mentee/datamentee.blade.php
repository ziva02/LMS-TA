@include ('WMI.sidebar')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Mentee</h1>
                    </div>
                    <div class="col-sm-6" style="text-align:right;">
                        <a href="{{ url('WMI/Mentee/add') }}" class="btn btn-primary"> Tambah Data Mentee</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Mentee</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="format" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Mentee</th>
                                            <th>Nama Mentee</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php $number = 1; ?>
                                    <tbody>
                                        @foreach ($mentee as $mentees)
                                            <tr>
                                                <td><?php echo $number++; ?></td>
                                                <td>{{ $mentees->id_mentee }}</td>
                                                <td>{{ $mentees->name }}</td>
                                                <td>{{ $mentees->role }}</td>
                                                <td>{{ $mentees->email }}</td>
                                                <td>
                                                    <a href="{{ url('WMI/Mentee/edit/' . $mentees->id) }}"
                                                        class="btn btn-primary">Ubah</a>
                                                    <form id="deleteForm{{ $mentees->id }}"
                                                        action="{{ route('delete.mentee', ['id' => $mentees->id]) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data mentee ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table><br>
                                <div class="pagination justify-content-end">
                                    {{ $mentee->links() }}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        function deleteMentor(id) {
            if (confirm("Apakah Anda yakin ingin menghapus data mentor ini?")) {
                document.getElementById('deleteForm' + id).submit();
            }
        }
    </script>
