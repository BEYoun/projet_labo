@extends('defaultSuperAdmin')

@section('content')
<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="ui-typography">
                <div class="row">
                    <div class="col-md-12">
    
                        <div class="card">
                            <div class="card-header">
                                <strong>Ajout</strong> prix These
                            </div>
                            <div class="card-body card-block">
                                {!!
                                Form::open(['class'=>'form-horizontal','url'=>route('superAdmin.departements.store')])
                                !!}
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="titre" class=" form-control-label">Titre</label>
                                    </div>
                                    <div class="col-12 col-md-9"><input type="text" id="titre" name="titre"
                                            class="form-control"></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Affecter à:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="select" id="select" class="form-control">
                                            
                                            <option value="0">selectionner</option>
                                            @foreach ($responsable as $item)
                                        <option value="{{$item->id}}">{{$item->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="description"
                                            class=" form-control-label">Description</label></div>
                                    <div class="col-12 col-md-9"><textarea name="description" id="description" rows="9"
                                            placeholder="Description sur le departement..." class="form-control"></textarea>
                                    </div>
                                </div>
    
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Ajout
                                    </button>
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