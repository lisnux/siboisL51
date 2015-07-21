@extends('app')
@section('employee')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">Daftar Pegawai</div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID Pegawai</th>
                <th>Nama Depan</th>
                <th>Nama Tengah</th>
                <th>Nama Belakang</th>
                <th>Tanggal Lahir</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>{{$employee->EmpComId}}</td>
            <td>{{$employee->FirstName}}</td>
            <td>{{$employee->MidName}}</td>
            <td>{{$employee->LastName}}</td>
            <td>{{$employee->BornDate}}</td>
            <td><div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-zoom-in"></span> </button>
                    <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> </button>
                    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> </button>
                </div>
            </td>
        </tr>
    @endforeach
            </tbody>
        </table>
    </div>
        </div>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection