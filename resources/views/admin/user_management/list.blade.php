@extends('layouts.master')

@section('content')
    <div class="blank">
        <div class="row">
            <div class="col-md-12">
                <div class=""></div>
                <div class="panel-heading">
                    <h3>List Data User</h3>
                </div>
                <div class="panel-body mailbox-content">
                    <a href="{{URL('user/create')}}" class="btn btn-primary btn-xs">Tambah</a>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        @foreach($data as $d)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$d['name']}}</td>
                                <td>{{$d['email']}}</td>
                                <td>{{$d['level']['nama_level']}}</td>
                                <td>
                                    <a href="{{URL('user/'.$d['id'])}}" class="btn btn-primary btn-xs">Edit</a>
                                    <a href="javascript:void(0);" id="{{$d['id']}}" class="btn btn-danger btn-xs btn-del">Del</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Confirm</h4>
                </div>
                <div class="modal-body">
                    Are you sure ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary btn-exc">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="iduser" value="">
@endsection

@section('script')
    <script>
        var pk = $('#iduser');
$('.btn-del').click(function(){
    var iduser = this.id;
    pk.val(iduser);
    $('#confirm').modal('show');
});
$('.btn-exc').click(function(){
//    console.log(this.id);
    $('#confirm').modal('hide');
    var id_user = pk.val();
    $.ajax({
        beforeSend:function(){
            $("#loading").modal('show');
        },
        type: "DELETE",
//        data: {id:iduser},
        url: "{{ URL('user') }}/"+id_user,
        success: function(respon) {
            $("#loading").modal('hide');
            location.reload();
        }
    })
});
    </script>
@endsection