@extends('_layouts.base')

@section('title', 'Dashboard - Sistem')

@section('content_title')
@endsection

@section('content')
<section style="background:white;">
    <div class="container-det-tab">
        <div class="board">
            <div class="board-inner">
                <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                    <li class="active">
                        <a href="#home" data-toggle="tab" title="welcome">
                            <span class="round-tabs one">
                                <i class="glyphicon glyphicon-home"></i>
                            </span> 
                        </a>
                    </li>

                    <li>
                        <a href="#profile" data-toggle="tab" title="profile">
                            <span class="round-tabs two">
                                <i class="glyphicon glyphicon-user"></i>
                            </span> 
                        </a>
                    </li>

                    <li>
                        <a href="#profile2" data-toggle="tab" title="bootsnipp goodies">
                            <span class="round-tabs three">
                                <i class="glyphicon glyphicon-gift"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 det-des">
                            <h2>Maharaja Suratma</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. 
                            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.A small river named Duden flows by their place and supplies it with the necessary regelialia. 
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 det-event">
                            <div class="search-list">
                                <h3>Detail Event</h3>
                                <table class="table" id="detevent_tab">
                                    <tbody>
                                    <tr>
                                        <td>Tanggal Mulai</td>
                                        <td class="td-r">Web Development</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Berakhir</td>
                                        <td class="td-r">Web Development</td>
                                    </tr>
                                    <tr>
                                        <td>Customer</td>
                                        <td class="td-r">Programming Language</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td class="td-r">Web Development</td>
                                    </tr>
                                    <tr>
                                        <td>Fee Event</td>
                                        <td class="td-r">Web Design</td>
                                    </tr>
                                    <tr>
                                        <td>Phone Customer</td>
                                        <td class="td-r">Programming Language</td>
                                    </tr>
                                    <tr>
                                        <td>Email Customer</td>
                                        <td class="td-r">App Development</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Panitia</td>
                                        <td class="td-r">Web Delopment</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>   

                <div class="tab-pane fade" id="profile">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h2>Panitia Event</h2>
                                    <div class="panel-body">
                                            <a href="{{ URL::to('event/create') }}" class="btn-det-e btn btn-primary" type="button">
                                                Tambah
                                            </a>
                                            <div class="table-container">
                                                <table class="table-users table" border="0">
                                                    <thead>
                                                        <th>Foto</th>
                                                        <th>Nama Panitia</th>
                                                        <th>Jabatan</th>
                                                        <th>No. Telepon</th>
                                                        <th>Email</th>
                                                        <th width="80px">Action</th>
                                                    </thead>
                                                    <tbody class="pani-list">
                                                        <tr>
                                                            <td width="10">
                                                                <img class="pull-left img-circle nav-user-photo" width="50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxhcCYW4QDWMOjOuUTxOd50KcJvK-rop9qE9zRltSbVS_bO-cfWA" />  
                                                            </td>
                                                            <td>
                                                                Herbert Hoover<br>
                                                            </td>
                                                            <td>
                                                                Builder Sales Agent
                                                            </td>
                                                            <td>
                                                                Builder Sales Agent
                                                            </td>
                                                            <td>
                                                                Builder Sales Agent
                                                            </td>
                                                            <td align="center">
                                                                <a href="#" type="button" data-toggle="modal" data-target="#hapusevent" 
                                                                    class="btn btn-flat btn-danger"><i class="fa fa-times"></i></a> 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="10">
                                                                <img class="pull-left img-circle nav-user-photo" width="50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxhcCYW4QDWMOjOuUTxOd50KcJvK-rop9qE9zRltSbVS_bO-cfWA" />  
                                                            </td>
                                                            <td>erbert Hoover<br></td>
                                                                <td>
                                                                    Builder Sales Agent
                                                                </td>    
                                                                <td>
                                                                    Builder Sales Agent
                                                                </td>
                                                                <td>
                                                                    Builder Sales Agent
                                                                </td>
                                                                <td align="center">
                                                                    <a href="#" type="button" data-toggle="modal" data-target="#hapusevent" 
                                                                        class="btn btn-flat btn-danger"><i class="fa fa-times"></i></a> 
                                                                </td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                
                <div class="tab-pane fade" id="profile2">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2>Absensi Event</h2>
                            <div class="panel-body">
                                <div class="table-container">
                                    <table class="table-users table" border="0">
                                        <thead>
                                            <th>Tanggal</th>
                                            <th width="100px">Action</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12-Januari-2019</td>
                                                <td>
                                                    <a href="#" type="button" data-toggle="modal" data-target="#hapusevent" 
                                                    class="btn btn-flat btn-success"><i class="fa fa-calendar"></i></a> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12-Januari-2019</td>
                                                <td>
                                                    <a href="#" type="button" data-toggle="modal" data-target="#hapusevent" 
                                                    class="btn btn-flat btn-success"><i class="fa fa-calendar"></i></a> 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
