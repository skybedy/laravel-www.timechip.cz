<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
    @csrf
    <div class="row mb-3">
        <label for="firstname" class="col-sm-2 col-form-label text-end">Jméno</label>
        <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-text"><span class="fas fa-user-large"></span></span>
            <input class="form-control" id="firstname" name="firstname" type="text"/>
        </div>
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="surname" class="col-sm-2 col-form-label text-end">Příjmení</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-user-large" style="width:1.2rem"></span></span>
                <input class="form-control" id="surname" name="surname" type="text"/>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="pohlavi" class="col-sm-2 col-form-label text-end">Pohlaví</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-venus-mars" style="width:1.2rem"></span></span>
                <select class="form-select" id="pohlavi" name="pohlavi">
                    <option selected>Vyberte</option>
                    <option value="M">Muž</option>
                    <option value="Z">Žena</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="den_narozeni" class="col-sm-2 col-form-label text-end">Ročník</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-calendar" style="width:1.2rem"></span></span>
                <select class="form-select" id="den_narozeni" name="den_narozeni">
                    <option selected>Vyberte</option>
                     @for ($i = $event_age_range[0]->year_start; $i <= $event_age_range[0]->year_end ; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="stat" class="col-sm-2 col-form-label text-end">Stát</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-globe" style="width:1.2rem"></span></span>
                <select class="form-select" id="stat" name="stat">
                    <option selected>Vyberte</option>
                    <option value="CZE">Česká republika</option>
                    <option value="SVK">Slovenská republika</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->code }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone1" class="col-sm-2 col-form-label text-end">Telefon</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-phone" style="width:1.2rem"></span></span>
                <input class="form-control" id="phone1" name="phone1" type="tel"/>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone2" class="col-sm-2 col-form-label text-end">Telefon alternativní</label>
        <div class="col-sm-9">
            <div class="input-group">
                <span class="input-group-text"><span class="fas fa-phone" style="width:1.2rem"></span></span>
                <input class="form-control" id="phone2" name="phone2" type="tel"/>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="Email" class="col-sm-2 col-form-label text-end">Email</label>
        <div class="col-sm-9">
        <div class="input-group">
            <span class="input-group-text"><span class="fas fa-envelope" style="width:1.2rem"></span></span>
            <input class="form-control" id="Email" name="Email" type="email"/>
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
</form>