@extends('home.home')

@section('title','CHU | Register')

@section('content')

<div id="register">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="section-title">
                <h2>Veuillez-vous connecter</h2>
                <p>officiis commodi quidem hic quas gfgfg rroif ghamrd ryl hduhds.</p>
            </div>
            <form method="POST" action="{{ route('register')}}" class="row g-3" id="form-register">
                @csrf
                    <div class="col-md-6">
                        <label for="firstname" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname')}}" required autocomplete="firstname">
                        <small class="text-danger fw-bold" id="error-register-firstname"></small>
                      </div>
                      <div class="col-md-6">

                        <label for="lastname" class="form-label">Pénom</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname')}}" required autocomplete="lastname">
                        <small class="text-danger fw-bold" id="error-register-lastname"></small>
                    </div>

                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email')}}" required autocomplete="email">
                        <small class="text-danger fw-bold" id="error-register-email"></small>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Mot de Passe</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password')}}" required autocomplete="password">
                        <small class="text-danger fw-bold" id="error-register-password"></small>
                    </div>
                    <div class="col-md-6">
                        <label for="confirmpassword" class="form-label">Confirmation Password</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="{{ old('confirmpassword')}}" required autocomplete="confirmpassword">
                        <small class="text-danger fw-bold" id="error-register-confirmpassword"></small>
                    </div>
                  <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address')}}" required autocomplete="address">
                        <small class="text-danger fw-bold" id="error-register-address"></small>
                    </div>

                    <div class="col-md-8">
                        <label for="ville" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="ville" name="ville" value="{{ old('ville')}}" required autocomplete="ville">
                        <small class="text-danger fw-bold" id="error-register-ville"></small>
                    </div>
                    <div class="col-md-4">
                        <label for="telphone" class="form-label">Télphone</label>
                        <input type="tel" class="form-control" id="telphone" name="telphone" value="{{ old('telphone')}}" required autocomplete="telphone">
                        <small class="text-danger fw-bold" id="error-register-telphone"></small>
                    </div>

                    <div class="col-12">
                       <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            J'accepte les <a href="https://media.doctolib.com/image/upload/v1661263390/legal/B2C-CU-VDef-July-22-FR.pdf">Conditions d'Utilisation de CHU MOSTAGANEM</a>
                          </label>
                          <small class="text-danger fw-bold" id="error-register-agreeterms"></small>
                        </div>
                    </div>
                      <div class="d-grid gap-2">
                        @csrf
                        <button class="btn btn-primary" type="button" id="register-user" >S'INSCRIRE</button>
                    </div>
                    <p class="text-center text-muted mt-5">Vous avez déja un compte <a href="{{ route('login')}}">Se Connecter</a></p>
            </form>
        </div>
    </div>

</div>
@endsection
