@include ('WMI.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Data Mentee</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <form method="post" action="">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>ID Mentee</label>
                                    <input type="text" class="form-control" value="{{ old('id_mentee') }}"
                                        name="id_mentee" required placeholder="Enter ID Mentee">
                                    {{-- <div style="color: red">
                                        {{ $errors->first('id_mentor') }}
                                    </div> --}}

                                </div>

                                <div class="form-group">
                                    <label>Nama Mentee</label>
                                    <input type="text" class="form-control" value="{{ old('name') }}"
                                        name="name" required placeholder="Enter Name Mentee">

                                </div>

                                <div class="form-group">
                                    <label>Role Mentee</label>
                                    <input type="text" class="form-control" value="{{ old('role') }}"
                                        name="role" required placeholder="Enter Role Mentee">
                                </div>

                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="text" class="form-control" value="{{ old('email') }}"
                                        name="email" required placeholder="Enter email">
                                    {{-- <div style="color: red">
                                        {{ $errors->first('email') }}
                                    </div> --}}
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" required
                                        placeholder="Password">
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Tambah</button> &nbsp; &nbsp;
                                <a href="{{ route('datamentee') }}"
                                    style="display: inline-block; padding: 7px 20px; background-color: #ff0000; color: #fff; text-decoration: none; border-radius: 5px; position :absolute; bottom:2%;">Batal</a>

                            </div>



                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
