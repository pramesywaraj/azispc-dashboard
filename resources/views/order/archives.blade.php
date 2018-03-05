@extends('templates.dashboard')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Archive Finished Work</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pemilik</th>
                                <th>Laptop</th>
                                <th>Jenis Service</th>
                                <th>Tanggal Selesai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Internet Explorer 4.0 </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                                <td><button type="submit">Detail</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Netscape Navigator 9</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                                <td><button type="submit">Detail</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mozilla 1.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1</td>
                                <td>A</td>
                                <td><button type="submit">Detail</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Mozilla 1.1</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.1</td>
                                <td>A</td>
                                <td><button type="submit">Detail</button></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Mozilla 1.2</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.2</td>
                                <td>A</td>
                                <td><button type="submit">Detail</button></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Mozilla 1.3</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.3</td>
                                <td>A</td>
                                <td><button type="submit">Detail</button></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Mozilla 1.4</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.4</td>
                                <td>A</td>
                                <td><button type="submit">Detail</button></td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@endsection