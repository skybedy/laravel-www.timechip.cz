    <input type="hidden" name="registration_type" value="1" />
    
    <div class="row mb-3">
        <label for="firstname" class="col-sm-2 col-form-label text-end">Jméno</label>
        <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-text"><span class="fas fa-user-large"></span></span>
            <input class="form-control" id="firstname" name="firstname" type="text" value="{{ old('firstname') }}"/>
        </div>
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="lastname" class="col-sm-2 col-form-label text-end">Příjmení</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-user-large" style="width:1.2rem"></span></span>
                <input class="form-control" id="lastname" name="lastname" type="text" value="{{ old('lastname') }}"/>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="gender" class="col-sm-2 col-form-label text-end">Pohlaví</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-venus-mars" style="width:1.2rem"></span></span>
                <select class="form-select" id="gender" name="gender">
                    <option selected disabled></option>
                    <option {{ old('gender') == 'M' ? 'selected=selected' : '' }} value="M">Muž</option>
                    <option {{ old('gender') == 'Z' ? 'selected=selected' : '' }} value="Z">Žena</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="birthyear" class="col-sm-2 col-form-label text-end">Ročník</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-calendar" style="width:1.2rem"></span></span>
                <select class="form-select" id="birthyear" name="birthyear">
                    <option selected disabled></option>
                     @for ($i = $event_age_range[0]->year_start; $i <= $event_age_range[0]->year_end ; $i++)
                        <option {{ old('birthyear') == $i ? 'selected=selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="country" class="col-sm-2 col-form-label text-end">Stát</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-globe" style="width:1.2rem"></span></span>
                <select class="form-select" id="country" name="country">
                    <option selected disabled></option>
                    <option value="CZE">Česká republika</option>
                    <option value="SVK">Slovenská republika</option>
                    @foreach ($countries as $country)
                        <option {{ old('country') == $country->code ? 'selected=selected' : '' }} value="{{ $country->code }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="team" class="col-sm-2 col-form-label text-end">Město/Obec/Tým</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-house" style="width:1.2rem"></span></span>
                <input class="form-control" id="team" name="team" type="text" value="{{ old('team') }}"/>
            </div>
        </div>
    </div>


    <div class="row mb-3">
        <label for="phone1" class="col-sm-2 col-form-label text-end">Telefon</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-phone" style="width:1.2rem"></span></span>
                <input class="form-control" id="phone1" name="phone1" type="tel" value="{{ old('phone1') }}" />
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone2" class="col-sm-2 col-form-label text-end">Telefon alternativní</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-phone" style="width:1.2rem"></span></span>
                <input class="form-control" id="phone2" name="phone2" type="tel" value="{{ old('phone2') }}" />
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label text-end">Email</label>
        <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-text"><span class="fas fa-envelope" style="width:1.2rem"></span></span>
            <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}" />
        </div>
        </div>
    </div>

    @if($selects->count() > 0)
        @foreach ($selects as $select)
            <div class="row mb-3">
                <label for="tricko" class="col-sm-2 col-form-label text-end">{{ $select['name'] }}</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <span class="input-group-text"><span class="fas fa-globe" style="width:1.2rem"></span></span>
                        <select class="form-select" id="tricko" name="tricko">
                            <option selected>Vyberte</option>
                            @foreach(json_decode($select['content']) as $x)
                                <option value="{{ $x }}">{{ $x }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    
           <button type="submit" class="btn btn-primary ms-5">Submit</button>
