@extends('templates.dashboard')

@section('content')
    <section class="content-header">
        <h1>
            List Staff
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-12"> 
                <div class="panel panel-default">
                        <div class="panel-body">      
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Umar</td>
                                        <td>umar@example.com</td>
                                        <td>
                                            <a type="button" class="btn btn-danger" style="font-size: 10px">Hapus</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Wiradani</td>
                                        <td>wira@example.com</td>
                                        <td>
                                            <a type="button" class="btn btn-danger" style="font-size: 10px">Hapus</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>
        </div>
    </section>
@endsection