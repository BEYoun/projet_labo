@extends('defaultSuperAdmin')

@section('content')
<div class="content mt-3">
<div class="animated fadeIn">
    <div class="ui-typography">
        <div class="row">
            <div class="col-md-12">
                    
                <div class="card">
                    <div class="card-header">
                        <strong>Voir</strong> paragraphe existant
                    </div>
                    <div class="card-body card-block">
                        @foreach ($presentations as $item)
                        <div class="card-body card-block">
                                {!! Form::open(['class'=>'form-horizontal','url'=>route('superAdmin.presentations.update',$item),'method'=>'put']) !!}
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="title" class=" form-control-label">Titre</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="title" name="title" value="{{$item->title}}"
                                            class="form-control"><small class="form-text text-muted">Ancien: {{$item->title}}</small></div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="content" class="form-control-label">Mot du
                                            directeur</label></div>
                                    <div class="col-12 col-md-9"><textarea name="content" id="content" rows="9"
                                            class="form-control">{{$item->content}}
                                        </textarea></div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> editer
                                    </button>
                                </div>
                                {!! Form::close() !!}
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong>Ajout</strong> paragraphe
                    </div>
                    <div class="card-body card-block">
                        {!! Form::open(['class'=>'form-horizontal','url'=>route('superAdmin.presentations.store')]) !!}
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="title" class=" form-control-label">Titre du nouveau paragraphe</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="title" name="title" placeholder="Text"
                                        class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="content" class=" form-control-label">contenu</label></div>
                                <div class="col-12 col-md-9"><textarea name="content" id="content" rows="9"
                                        placeholder="Content..." class="form-control"></textarea></div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Ajout
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
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


@endsection