@extends('_layouts.base')

@section('title', 'Event - Sistem')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">      
            <div class="box-header">
              <h3 class="box-title">Data Event</h3>
              <div style="float:right;">
                <a href="{{ URL::to('event/create') }}" class="btn btn-primary" type="button">
                 Tambah
                </a>
              </div>
            </div>
            <div class="box-body">
            <table id="dataevent" class="table table-bordered table-striped">
                  <thead>
                    <tr style="border-color:blue;">
                      <th style="width: 100px" class="actionth">Action</th>
                      <th>Nama Event</th>
                       <th>Tempat Event</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Fee Per Hari</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($list_event as $event)
                        <tr class="karyawan-list">
                            <td class="action">
                              <div class="btn-group btn-ac">
                                <a href="{{ URL::to('event/'.$event->id . '/edit') }}" 
                                class="btn btn-flat btn-warning" type="button"><i class="fa fa-pencil"></i></a>
                                <a href="{{ URL::to('event/'.$event->id) }}" 
                                  class="btn btn-flat btn-success" type="button"><i class="fa fa-eye"></i></a>
                                <a href="#" type="button" data-toggle="modal" data-target="#hapusevent" 
                                class="btn btn-flat btn-danger"><i class="fa fa-times"></i></a> 
                              </div>
                            </td>
                            <td>{{$event->nama_event}}</td>
                            <td>{{$event->tempat_event}}</td>
                            <td>{{$event->tanggal_mulai}}</td>
                            <td>{{$event->tanggal_selesai}}</td>
                            <td>{{$event->fee_per_hari}}</td>
                          </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>

        <div class="modal fade" id="hapusevent">
            <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="icon-warning">
                          <i class="icon fa fa-warning"></i>
                      </div>
                      <div class="error-text">
                          <h2>Yakin Hapus Data</h2>
                      </div>
                  </div>
                      
                <div class="modal-footer modal-footer-center">
                  <div class="btn-group btn-ac-d">
                    @if(!empty($event))
                    <form action="{{URL('event/'. $event->id) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <a href=""><button type="submit" class="btn btn-flat btn-danger">Yakin</i></button></a>
                    </form>
                    @endif
                    <button type="submit" class="btn btn-primary btn-save" data-dismiss="modal">Batal</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>
</section>

@endsection

@section('script')
<script>
 $('#dataevent').dataTable({});
</script>

@endsection