@extends('base')

@section('title', 'ZAVODY')

@section('h1', 'Hlavní strana')

@section('container-type',"container")

@section('content')

<div class="row heading">
            <div class="col-xs-12">
                <h2>Co se děje u nás...</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    
                    <div class="col-lg-3 mb-3"">
                        <div class="img-thumbnail boxwrapper">
                            <div class="list-group indexbox our-news">
                                <div class="list-group-item-heading clearfix">
                                    <h6>Nejbližší akce</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-calendar3 bi-home" viewBox="0 0 16 16"><path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/><path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>                               
                                </div>    
                                    @foreach ($next_events_and_last_results[0] as $val)
                                        <a class="list-group-item next-event-box" target="_blank" href="" class="clearfix">
                                            <div class="race-type-icon-wrapper">
                                                <img src="./img/race-type-icons/{{ $val->typZavodu->icon }}-icon.gif" />
                                            </div>
                                            <h3>{{ $val->datum_zavodu }}</h3>
                                            <p>{{ $val->nazev_zavodu }}</p>
        
                                        </a>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="img-thumbnail homepage-imagewrapper">
                            <div class="img-thumbnail p-0">
                                <img src="./img/grafika.jpg" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 mb-3">
                        <div class="img-thumbnail boxwrapper">
                            <div class="list-group indexbox our-news">
                                <div class="list-group-item-heading clearfix">
                                    <h6>Poslední výsledky</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-table bi-home" viewBox="0 0 16 16"> <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/></svg>
                                </div>
                                @foreach ($next_events_and_last_results[1] as $val)
                                    <a class="list-group-item next-event-box" target="_blank" href="" class="clearfix">
                                        <div class="race-type-icon-wrapper">
                                            <img src="./img/race-type-icons/{{ $val->typZavodu->icon }}-icon.gif" />
                                        </div>
                                        <h3>{{ $val->datum_zavodu }}</h3>
                                        <p>{{ $val->nazev_zavodu }}</p>
    
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 mb-3">
                <div class="img-thumbnail">
                    <img src="img/tag-heuer-logo.png" class="img-fluid" alt="...">
                </div>
            </div>
            <div class="col-lg-3 mb-3">
                <div class="img-thumbnail">
                    <img src="img/j-chip-logo.jpeg" class="img-fluid" alt="...">
                </div>
            </div>
            <div class="col-lg-3 mb-3">
                <div class="img-thumbnail">
                    <img src="img/rfidtiming-logo.png" class="img-fluid" alt="...">
                </div>
            </div>
            <div class="col-lg-3 mb-3">
                <div class="img-thumbnail">
                    <img src="img/j-chip-logo.jpeg" class="img-fluid" alt="...">
                </div>
            </div>

        </div>



@endsection