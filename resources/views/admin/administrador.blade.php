@extends('layouts.appAdmin')

@section('contentAdm')
<div class="">
        <!--Barra de busqueda de usuarios-->
          <div class="">
            <nav>
              <div class="nav-wrapper left">
                <form>
                  <div class="input-field">
                    <input id="search" type="search" placeholder="Buscar"  required>
                    <label class="label-icon" for="search">
                      <i class="material-icons">search</i>
                    </label>
                  </div>
                </form>
              </div>
              <ul class="right hide-on-med-and-down">
               <li><a class="waves-effect waves-light btn" href="{{ route('register') }}">
                      Nuevo Usuario
                      <i class="material-icons left ">person_add</i>
                    </a>
               </li>
              </ul>
            </nav>

           </div>

      <div class="">
        <!--tabla de datos de usuarios-->
        <table class="centered ">
         <thead>
           <tr>
               <th>Nombre</th>
               <th>Apellidos</th>
               <th>Correo</th>
               <th>Telefono</th>
               <th>Sede</th>
               <th>Cargo</th>
           </tr>
         </thead>

         <tbody>
           <tr>
             <td>Guiosep</td>
             <td>Tunqui Cutipa</td>
             <td>gtunqui@gmail.com</td>
             <td>987353070</td>
             <td>Lima</td>
             <td>Administrador</td>
           </tr>
           <tr>
             <td>Alonso</td>
             <td>Tunqui Cutipa</td>
             <td>gtunqui@gmail.com</td>
             <td>987353070</td>
             <td>Lima</td>
             <td>Empleado</td>
           </tr>
           <tr>
             <td>Guiosep</td>
             <td>Tunqui Cutipa</td>
             <td>gtunqui@gmail.com</td>
             <td>987353070</td>
             <td>Lima</td>
             <td>Empleado</td>
           </tr>
           <tr>
             <td>Guiosep</td>
             <td>Tunqui Cutipa</td>
             <td>gtunqui@gmail.com</td>
             <td>987353070</td>
             <td>Lima</td>
             <td>Empleado</td>
           </tr>
         </tbody>
       </table>
      </div>
</div>


<!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar la contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
