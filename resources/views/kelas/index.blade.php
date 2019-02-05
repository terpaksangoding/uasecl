@extends ('template/header')
@section ('content')

    <section class="content-header">
      <h1>
       Data Kelas
        <small>Universitas Komputer Indonesia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Datas Kelas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

        <a href="{{url('kelas/add')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i>tambah</a>
         

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-stripped">
          <thead>
            <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Action</th>
            </tr>
          </thead> 
            @foreach ($result as $row)
            <tr>
                <td>{{ !empety ($i ? ++$i : $i =1 )}}</td>
                <td>{{$row-> nama_kelas}}</td>
                <td>{{$row-> nama_kelas}}</td>
                <td>

                <a href="{{url('kelas/$row->id_kelas/edit')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i>tambah</a>
         
                
                </td>
            </tr>
          <tbody>

          </tbody>
          </table>   
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  @endsection