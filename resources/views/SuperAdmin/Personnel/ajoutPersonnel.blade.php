@extends('defaultSuperAdmin')


@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="ui-typography">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <strong>Ajout</strong> Personnel
                        </div>
                        <div class="card-body card-block">
                            {!!
                            Form::open(['class'=>'form-horizontal','url'=>route('superAdmin.personnels.store')])
                            !!}
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nom" class=" form-control-label">Nom :</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text" id="nom" name="nom"
                                        class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="prenom" class=" form-control-label">Prenom
                                        :</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text" id="prenom" name="prenom"
                                        class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="mail" class=" form-control-label">Email</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="email" id="mail" name="mail"
                                     class="form-control" required></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="tel" class=" form-control-label">Telephone
                                        Personnel :</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="tel" id="tel" name="tel"
                                        pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" required><small
                                        class="form-text text-muted">Format: 0610582366 </small></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="fax" class=" form-control-label">Fax :</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="tel" id="fax" name="fax"
                                        pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" required><small
                                        class="form-text text-muted">Format: 0510582366 </small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="addresse" class=" form-control-label">Address
                                        :</label>
                                </div>
                                <div class="col-12 col-md-9"><input type="text" id="addresse" name="addresse"
                                        class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="type" class=" form-control-label">Select</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="type" id="type" class="form-control">
                                        <option value="permanent">Permanent</option>
                                        <option value="doctorant">Doctorant</option>
                                        <option value="non permanent">Non Permanent</option>
                                        <option value="stagiaire">Stagiaire</option>
                                    </select>
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