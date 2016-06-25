@extends('layouts.master')

@section('content')
    <div class="blank">
        <div class="row">
            <div class="col-md-12">
                <div class=""></div>
                <div class="panel-heading">
                    <h3>Update Data User</h3>
                </div>
                <div class="panel-body mailbox-content">
                    <form class="form-horizontal" method="POST" action="{{URL('user/'.$data['id'])}}">
                        <input type="hidden" value="PUT" name="_method">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="name" value="{{$data['name']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="email" value="{{$data['email']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                <p class="help-block">Kosongkan jika tidak dirubah.</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-3">
                                <select name="id_level" class="form-control">
                                    <option value="">Pilih Level</option>
                                    @foreach($level as $l)
                                        <option value="{{$l['id']}}" {{$data['id_level']==$l['id']? 'selected':''}} >{{$l['nama_level']}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-info">Save</button>
                                <a href="{{URL('user')}}" class="btn btn-warning">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection