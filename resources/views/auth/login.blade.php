<div>
    <h1>Se connecter</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('auth.login') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="email">
                        Email
                    </label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}">
                    @error("email")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">
                        Mot de passe
                    </label>
                    <input type="password" id="password" name="password">
                    @error("password")
                    {{ $message }}
                    @enderror
                </div>

                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>
    
</div>
