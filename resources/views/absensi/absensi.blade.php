@extends('_layouts.base')

@section('title', 'Absensi - Sistem')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">      
                <div class="box-header">
                    <h3 class="box-title">Generate Absensi Karyawan</h3>
                </div>
                
                <div class="box-body">
                    <form id="frm-absenkar" method="POST" action="">
                        {{ csrf_field() }} {{ method_field('POST') }}
                        <div class="bd-absen-k">
                            <label class="col-sm-2 wd-t control-label">Absen Event</label>
                            <div class="col-sm-5">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" id="absensi" name="absensi" class="form-control pull-right" required>
                                </div>
                                <span id="req_dateab" class="help-block red-error"></span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <a onclick="getDataAbsensikar()" type="button" class="btn btn-flat btn-success"><i class="fa fa-calendar"></i></a> 
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="box">      
                <div class="box-header">
                    <h3 class="box-title">Absensi Karyawan</h3>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <div class="table-container">
                            <table id="absensikrdata" class="table-users table">
                                <thead class="hd-tb">
                                    <tr>
                                        <th>Tanggal Absensi</th>
                                        <th>Status</th>
                                        <th width="100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
</section>

@endsection

@section('script')
<script>
     var tableabsensikr = $('#absensikrdata').DataTable({
                      ordering  : false,  
                      processing: false,
                      retrieve: true,
                      serverSide: true,
                      ajax: "{{ route('data.absensi') }}",
                      columns: [
                        {data: 'tanggal_absensi', name:'tgl_absen'},
                        {data:'status', nme:'sts_absensi'},
                        {data: 'action', class:'td-c action-align', name: 'action', orderable: false, searchable: false}
                      ]
                    });

    function getDataAbsensikar()
    {
        $.ajax({
        url : "{{ url('absenkarstore') }}",
        type : "POST",
        dataType: "JSON",
        data: new FormData($("#frm-absenkar")[0]),
        contentType: false,
        processData: false,
            success : function(data) {
                swal({
                        title: 'Success',
                        text: data.message,
                        type: 'success',
                        showConfirmButton: false,
                        timer: '1000'
                    }).catch(swal.noop);
                tableabsensikr.ajax.reload();
            },
            error : function(data){

            }
        });
    }


    $("#absensi").datepicker({
        format: "d-MM-yyyy",
        showOn: "button",
        forceParse: false,
        autoclose: true,
    }); 
</script>
@endsection
