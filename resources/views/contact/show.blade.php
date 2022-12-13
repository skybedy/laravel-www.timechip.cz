@extends('base')

@section('title', 'kontakt')

@section('h1',  'Kontakt')

@section('content')
    
<div class="row">
                <div class="col-lg-6">
                    <div class="card contact">

                        <div class="card-body">
                            <h5>Kontaktní formulář</h5>
                            
                            <div id="form-contact-wrapper">
                                <form action="{{ route('contact.send') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="contactFormInputName">Jméno a příjmení</label>
                                        <input type="text" class="form-control" id="contactFormInputName" name="contactFormInputName" placeholder="Něco tu napište.. " />
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="contactFormInputEmail">Email</label>
                                        <input type="email" class="form-control" id="contactFormInputEmail" name="email" placeholder=".. tady taky.. ">
                                    </div>


                                    <div class="form-group mb-3">
                                        <label for="contactFormInputMessage">Vaše zpráva</label>
                                        <textarea name="message" id="contactFormInputMessage" class="form-control" rows="10" placeholder=".. a teď, co máte na srdci. :-)"></textarea>
                                    </div>
                                    
                                     <button type="submit" class="btn btn-default btn-primary">Odeslat</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card contact">
                        <div class="card-body">
                            <h5>Kontaktní údaje</h5>
                            <address>
                                <h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 2 16 16"><path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/></svg> 
                                    Fakturační adresa
                                </h6>
                                <strong>Visalajka, s.r.o.</strong><br>
                                Františkova 903/1<br>
                                198 00 Praha 9
                                <hr>
                                <h6>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 1 16 16"><path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>    
                                Identifikační údaje</h6>
                                IČ: 25834525<br>
                                DIČ:CZ25834525
                                <hr>
                                <h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 2 16 16"><path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/></svg> 
                                    Doručovací adresa
                                </h6>
                                <strong>Visalajka, s.r.o.</strong><br>
                                č.e. 0550<br>
                                739 04 Krásná
                                <hr>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 1 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                                +420 776131313<br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 1 16 16"><path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/><path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/></svg>
                                <a href="mailto:timechip.cz@gmail.com">timechip.cz@gmail.com</a>
                            </address>
                        </div>
                    </div>
                </div>
            
            
        </div>
    </div>
    
    @endsection

