@extends('defaultSuperAdmin')

@section('content')
    
<div class="content mt-3">
        <div class="card">
                <div class="card-header">
                    <strong class="card-title">Table Head</strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Description</th>
                                <th scope="col">Responsable</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($nominations as $item)
                                <tr>
                                <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->titre}}</td>
                                    <td>{{$item->descriptif}}</td>
                                    <td>{{$item->id}}</td>
                                    <td><button class="btn btn-success">Modifier</button></td>
                                </tr>
                            @endforeach
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                            <td><a href="{{ url('superAdmin/distinctions/add-nomination') }}"><button class="btn btn-danger btn-lg btn-block" type="button">Ajout nomination</button></a></td>
                            </tr>

                        </tbody>
                    </table>
            
                </div>
            </div>
</div>   


@endsection