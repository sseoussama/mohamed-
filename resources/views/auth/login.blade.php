@extends('home.home')

@section('title','CHU | login')

@section('content')

    <!-- ======= Login forme  ======= -->

  <section id="login">
    <div class="continer">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="section-title">
                    <h2>Veuillez-vous connecter</h2>
                    <p>Vous étes </p>
                  </div>
                <form method="POST" action="{{ route('login')}}">
                    @csrf

                    @error('email')
                        <div class="alert alert-danger text-center" role="alert">
                            {{ $message }}
                        </div>
                    @enderror


                    @error('password')
                        <div class="alert alert-danger text-center" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{old('email')}}" required autocomplete="email" autofocus>

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-3 @error('password') is-invalid @enderror"  required autocomplete="current-password" autofocus>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="remember" name="remember" {{old('remember') ? 'checked' : ''}}>
                                <label class="form-check-label " for="remember">souviens de moi</label>
                              </div>
                        </div>

                        <div class="col-md-6 text-end">
                            <a href="#">Mot de passe oublié </a>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Se Connecter</button>
                    </div>

                    <p class="text-center text-muted mt-5">Pas Encore inscrit ? <a href="{{ route('register')}}">S'inscrire</a></p>
                </form>
            </div>
        </div>
  </section><!-- End Login forme -->

@endsection
