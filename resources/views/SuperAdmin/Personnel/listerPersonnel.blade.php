@extends('defaultSuperAdmin')
@section('css')

<link rel="stylesheet" href="{{ asset('/designAdmin/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('/designAdmin/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">Data table</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <!-- /# column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Liste du Personnel</h4>
                    </div>
                    <div class="card-body">
                        <div class="custom-tab">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab"
                                        href="#custom-nav-home" role="tab" aria-controls="custom-nav-home"
                                        aria-selected="true">Doctorants</a>
                                    <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab"
                                        href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile"
                                        aria-selected="false">Stagiare</a>
                                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab"
                                        href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact"
                                        aria-selected="false">Permanant</a>
                                </div>
                            </nav>
                            <div class="tab-content pl-12 pt-8" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel"
                                    aria-labelledby="custom-nav-home-tab">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>tel</th>
                                                <th>fix</th>
                                                <th>type</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($doctorants as $item)
                                            <tr>
                                                <td>{{$item->personnel->nom}}</td>
                                                <td>{{$item->personnel->prenom}}</td>
                                                <td>{{$item->personnel->mail}}</td>
                                                <td>{{$item->personnel->tel}}</td>
                                                <td>{{$item->personnel->fax}}</td>
                                                <td>{{$item->personnel->type}}</td>
                                                <td>{{$item->personnel->status}}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel"
                                    aria-labelledby="custom-nav-profile-tab">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>tel</th>
                                                <th>fix</th>
                                                <th>type</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($stagiaires as $item)
                                            <tr>
                                                <td>{{$item->personnel->nom}}</td>
                                                <td>{{$item->personnel->prenom}}</td>
                                                <td>{{$item->personnel->mail}}</td>
                                                <td>{{$item->personnel->tel}}</td>
                                                <td>{{$item->personnel->fax}}</td>
                                                <td>{{$item->personnel->type}}</td>
                                                <td>{{$item->personnel->status}}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel"
                                    aria-labelledby="custom-nav-contact-tab">
                                    <table id="bootstrap-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>tel</th>
                                                <th>fix</th>
                                                <th>type</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($permanents as $item)
                                            <tr>
                                                <td>{{$item->personnel->nom}}</td>
                                                <td>{{$item->personnel->prenom}}</td>
                                                <td>{{$item->personnel->mail}}</td>
                                                <td>{{$item->personnel->tel}}</td>
                                                <td>{{$item->personnel->fax}}</td>
                                                <td>{{$item->personnel->type}}</td>
                                                <td>{{$item->personnel->status}}</td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>

    </div></div>
        @endsection

        @section('js')

        <script src="{{ asset('/designAdmin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('/designAdmin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('/designAdmin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('/designAdmin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}">
        </script>
        <script src="{{ asset('/designAdmin/vendors/jszip/dist/jszip.min.js') }}"></script>
        <script src="{{ asset('/designAdmin/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('/designAdmin/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
        <script src="{{ asset('/designAdmin/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('/designAdmin/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('/designAdmin/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('/designAdmin/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>

        @endsection