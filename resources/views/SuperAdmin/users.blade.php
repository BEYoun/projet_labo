@extends('defaultSuperAdmin')

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
                              <li class="active">Basic table</li>
                        </ol>
                  </div>
            </div>
      </div>
</div>

<div class="content mt-3">
      <div class="animated fadeIn">
            <div class="row">


                  <div class="col-lg-10">
                        <div class="card">
                              <div class="card-header">
                                    <strong class="card-title">Table Head</strong>
                              </div>
                              <div class="card-body">
                                    <table class="table">
                                          <thead class="thead-dark">
                                                <tr>
                                                      <th scope="col">#</th>
                                                      <th scope="col">Nom</th>
                                                      <th scope="col">Prenom</th>
                                                      <th scope="col">Email</th>
                                                      <th scope="col">role</th>
                                                      <th scope="col">Profession</th>
                                                      <th scope="col">droit super admin</th>
                                                      <th scope="col">Handle</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                <?php $i=0 ?>
                                                @foreach ($users as $user)
                                                @if (Auth::user()->email==$user->email)
                                                <?php 
                                                      continue;
                                                    ?>
                                                @endif
                                                <tr>
                                                      <th scope="row">{{ ++$i }}</th>
                                                      <td>{{ $user->name }}</td>
                                                      <td>{{ $user->firstName }}</td>
                                                      <td>{{ $user->email }}</td>
                                                      <td>{{ $user->role }}</td>
                                                      <td>{{ $user->profession }}</td>
                                                      <td>

                                                            @if ($user->role=="superadmin")
                                                            <button class="btn btn-danger"
                                                                  type="submit">revoquer</button>
                                                            @else
                                                            <input class="btn btn-success" type="submit"
                                                                  value="ajouter">
                                                            @endif
                                                      </td>
                                                      <td>@mdo</td>
                                                </tr>

                                                @endforeach

                                          </tbody>
                                    </table>

                              </div>
                        </div>
                  </div>






            </div>
      </div><!-- .animated -->
</div>
@endsection