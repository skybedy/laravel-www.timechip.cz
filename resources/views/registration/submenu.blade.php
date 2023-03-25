<div class="row mb-5">
    <div class="col-sm-11 text-end">
        <a class="btn  btn-outline-danger" href="{{ route('registration',['raceName' => $raceName, 'raceYear' => $raceYear,'raceId' => $raceId]) }}" role="button">Registrační formulář formulář</a>
        <a class="btn  btn-outline-danger" href="{{ route('registration_list',['raceYear' => $raceYear,'raceId' => $raceId,'raceName' => $raceName]) }}" role="button">Seznam registrací</a>
    </div>
</div>   
