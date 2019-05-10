@extends('defaultSuperAdmin')


@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="ui-typography">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <strong>Ajout</strong> Departement
                        </div>
                        <div class="card-body card-block">
                            {!!
                            Form::open(['class'=>'form-horizontal','url'=>route('superAdmin.departements.store')])
                            !!}
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="title" class=" form-control-label">Titre</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text" id="title" name="title"
                                        class="form-control"><small class="form-text text-muted">Ancien: </small></div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection