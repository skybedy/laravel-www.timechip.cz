    <input type="hidden" name="registration_type" value="3" />
    
    <div class="row mb-3">
        <label for="team_phone" class="col-sm-2 col-form-label text-end">Týmový telefon</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-phone" style="width:1.2rem"></span></span>
                <input class="form-control" id="team_phone" name="team_phone" type="tel" value="{{ old('team_phone') }}" />
            </div>
        </div>
    </div>
  
    
    <div class="row mb-3">
        <label for="team_email" class="col-sm-2 col-form-label text-end">Týmový email</label>
        <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-text"><span class="fas fa-envelope" style="width:1.2rem"></span></span>
            <input class="form-control" id="team_email" name="team_email" type="email" value="{{ old('team_email') }}" />
        </div>
        </div>
    </div>

    
    
    
    @for ($x = 1; $x <= 2; $x++)

         

   <h4 class="text-center mt-5">Závodník {{ $x }}</h4> 
    
    
    
    <div class="row mb-3">
        <label for="firstname_{{ $x }}" class="col-sm-2 col-form-label text-end">Jméno</label>
        <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-text"><span class="fas fa-user-large"></span></span>
            <input class="form-control" id="firstname_{{ $x }}" name="firstname_{{ $x }}" type="text" value="{{ old('firstname_'.$x) }}"/>
        </div>
        </div>
    </div>
  
    
    <div class="row mb-3">
        <label for="lastname_{{ $x }}" class="col-sm-2 col-form-label text-end">Příjmení</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-user-large" style="width:1.2rem"></span></span>
                <input class="form-control" id="lastname_{{ $x }}" name="lastname_{{ $x }}" type="text" value="{{ old('lastname'.$x) }}"/>
            </div>
        </div>
    </div>

   

    <div class="row mb-3">
        <label for="gender_{{ $x }}" class="col-sm-2 col-form-label text-end">Pohlaví</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-venus-mars" style="width:1.2rem"></span></span>
                <select class="form-select" id="gender_{{ $x }}" name="gender_{{ $x }}">
                    <option selected disabled></option>
                    <option {{ old('gender_'.$x) == 'M' ? 'selected=selected' : '' }} value="M">Muž</option>
                    <option {{ old('gender_'.$x) == 'Z' ? 'selected=selected' : '' }} value="Z">Žena</option>
                </select>
            </div>
        </div>
    </div>
      


    <div class="row mb-3">
        <label for="birthyear_{{ $x }}" class="col-sm-2 col-form-label text-end">Ročník</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-calendar" style="width:1.2rem"></span></span>
                <select class="form-select" id="birthyear_{{ $x }}" name="birthyear_{{ $x }}">
                    <option selected disabled></option>
                     @for ($i = $event_age_range[0]->year_start; $i <= $event_age_range[0]->year_end ; $i++)
                        <option {{ old('birthyear_'.$x) == $i ? 'selected=selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>
    </div>
  
         

    <div class="row mb-3">
        <label for="country_{{ $x }}" class="col-sm-2 col-form-label text-end">Stát</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-globe" style="width:1.2rem"></span></span>
                <select class="form-select" id="country_{{ $x }}" name="country_{{ $x }}">
                    <option selected disabled></option>
                    <option value="CZE">Česká republika</option>
                    <option value="SVK">Slovenská republika</option>
                    @foreach ($countries as $country)
                        <option {{ old('country_'.$x) == $country->code ? 'selected=selected' : '' }} value="{{ $country->code }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

  



    <div class="row mb-3">
        <label for="phone1_{{ $x }}" class="col-sm-2 col-form-label text-end">Telefon</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-phone" style="width:1.2rem"></span></span>
                <input class="form-control" id="phone1_{{ $x }}" name="phone1_{{ $x }}" type="tel" value="{{ old('phone1_'.$x) }}" />
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone2_{{ $x }}" class="col-sm-2 col-form-label text-end">Telefon alternativní</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-phone" style="width:1.2rem"></span></span>
                <input class="form-control" id="phone2_{{ $x }}" name="phone2_{{ $x }}" type="tel" value="{{ old('phone2_'.$x) }}" />
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="email_{{ $x }}" class="col-sm-2 col-form-label text-end">Email</label>
        <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-text"><span class="fas fa-envelope" style="width:1.2rem"></span></span>
            <input class="form-control" id="email_{{ $x }}" name="email_{{ $x }}" type="email" value="{{ old('email_'.$x) }}" />
        </div>
        </div>
    </div>



    @if($selects->count() > 0)
        @foreach ($selects as $select)
            <div class="row mb-3">
                <label for="tricko_{{ $x }}" class="col-sm-2 col-form-label text-end">{{ $select['name'] }}</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <span class="input-group-text"><span class="fas fa-globe" style="width:1.2rem"></span></span>
                        <select class="form-select" id="tricko_{{ $x }}" name="tricko_{{ $x }}">
                            <option selected>Vyberte</option>
                            @foreach(json_decode($select['content']) as $c)
                                <option value="{{ $c }}">{{ $c }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
   @endfor



    
           <button type="submit" class="btn btn-primary ms-5">Submit</button>
