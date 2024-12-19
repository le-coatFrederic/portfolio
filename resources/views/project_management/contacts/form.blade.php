<div>
    <h1>
        @if($contact->id)
            Editer ce contact
        @else
            Créer un contact
        @endif
    </h1>

    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf

                <div class="form-group">
                    <label for="first_name">
                        first_name
                    </label>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $contact->first_name) }}">
                    @error("first_name")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="last_name">
                        last_name
                    </label>
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $contact->last_name) }}">
                    @error("last_name")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">
                        email
                    </label>
                    <input type="email" id="email" name="email" value="{{ old('email', $contact->email) }}">
                    @error("email")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">
                        phone
                    </label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone', $contact->phone) }}">
                    @error("phone")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address">
                        address
                    </label>
                    <input type="text" id="address" name="address" value="{{ old('address', $contact->address) }}">
                    @error("address")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="city">
                        city
                    </label>
                    <input type="text" id="city" name="city" value="{{ old('city', $contact->city) }}">
                    @error("city")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="state">
                        state
                    </label>
                    <input type="text" id="state" name="state" value="{{ old('state', $contact->state) }}">
                    @error("state")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="country">
                        country
                    </label>
                    <input type="text" id="country" name="country" value="{{ old('country', $contact->country) }}">
                    @error("country")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="zip">
                        zip
                    </label>
                    <input type="text" id="zip" name="zip" value="{{ old('zip', $contact->zip) }}">
                    @error("zip")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="company">
                        company
                    </label>
                    <input type="text" id="company" name="company" value="{{ old('company', $contact->company) }}">
                    @error("company")
                    {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="job_title">
                        job_title
                    </label>
                    <input type="text" id="job_title" name="job_title" value="{{ old('job_title', $contact->job_title) }}">
                    @error("job_title")
                    {{ $message }}
                    @enderror
                </div>

                <button class="btn" type="submit">
                    @if($contact->id)
                        Enregistrer
                    @else
                        Créer
                    @endif
                </button>

            </form>
        </div>
    </div>

</div>