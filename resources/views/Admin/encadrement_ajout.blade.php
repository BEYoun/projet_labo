@extends('defaultAdmin')


@section('content')
<div class="card">
      <div class="card-header">
            <strong>Ajout d'un</strong> Encadrement
      </div>
      <div class="card-body card-block">
            {!! Form::open(['method'=>'POST','enctype'=>'multipart/form-data','class'=>'form-horizontal']) !!}     
                  <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Selectionner
                                    Categorie</label></div>
                        <div class="col-12 col-md-9">
                              <select name="select" id="select" class="form-control">
                                    <option value="These">These</option>
                                    <option value="Stage">Stage</option>
                              </select>
                        </div>
                  </div>

                  <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sujet</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input"
                                    placeholder="Text" class="form-control"><small class="form-text text-muted">Sujet de l'encadrement</small></div>
                  </div>
                  <div class="row form-group">
                        <div class="col col-md-3"><label for="multiple-select" class=" form-control-label">Selection des
                                    etudiants</label></div>
                        <div class="col col-md-9">
                              <select name="multiple-select[ ]" size="{{ sizeof($etudiants) }}" id="multiple-select" multiple="multiple" class="form-control">
                                    @foreach ($etudiants as $et )
                                          <option value="{{ $et->id }}">{{ $et->nom }} {{ $et->prenom }}</option>
                                    @endforeach
                              </select>
                        </div>
                  </div>

                  <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input"
                                    class="form-control-file"></div>
                  </div>
                  <div class="row form-group">
                        <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Multiple
                                    File input</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="file-multiple-input"
                                    name="file-multiple-input" multiple="" class="form-control-file"></div>
                  </div>
                  <div class="col-md-6 offset-md-6 col-sm-6 ml-auto">
                        <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Ajout
                        </button>
                  </div>
            </form>
      </div>
</div>
@endsection