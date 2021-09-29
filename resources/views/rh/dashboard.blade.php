@extends('layouts.app2')

@section('title', 'Dashboard')

@section('content')
    <div class="content-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mon espace</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs mb-2">Mon espace</h4>
            <p>
                Vous pouvez ajouter un évènement par double clic sur le planning.
            </p>
        </div>
    </div><!-- content-header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- Mes soldes -->
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="card-title">Mes soldes</h5>
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Compteurs</th>
                                <th scope="col">Congés</th>
                                <th scope="col">RTT</th>
                                <th scope="col">RCR</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Acquis</th>
                                <td>35</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th scope="row">Pris</th>
                                <td>0</td>
                                <td>0,000</td>
                                <td>0,000</td>
                            </tr>
                            <tr>
                                <th scope="row">Reste</th>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Mes demandes -->

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mes demandes</h5>
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Intitulé</th>
                                <th scope="col">Date</th>
                                <th scope="col">Formulaire</th>
                                <th scope="col">Etat</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Acompte</th>
                                <td>24/02/21</td>
                                <td>Montant</td>
                                <td>En cours</td>
                            </tr>
                            <tr>
                                <th scope="row">Duplicata</th>
                                <td>13/03/21</td>
                                <td>Libre</td>
                                <td>Valider</td>
                            </tr>
                            <tr>
                                <th scope="row">Attestation de mutuelle</th>
                                <td>28/06/21</td>
                                <td>Libre</td>
                                <td>En attente</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Profile infos -->
                <div class="row row-xs">
                    <div class="col-md-4">
                        <ul class="list-group list-group-settings">
                            <li class="list-group-item list-group-item-action">
                                <a href="#paneProfile" data-toggle="tab" class="media active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <div class="media-body">
                                        <h6>Mes informations</h6>
                                        <span>Mes informations personnelles</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <a href="#paneAccount" data-toggle="tab" class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                    <div class="media-body">
                                        <h6>Coordonnées</h6>
                                        <span>Gérer vos coordonnées</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <a href="#paneSecurity" data-toggle="tab" class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                    <div class="media-body">
                                        <h6>Données admin</h6>
                                        <span>Vos données admin</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <a href="#paneNotification" data-toggle="tab" class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                    <div class="media-body">
                                        <h6>Contrat</h6>
                                        <span>Votre contrat</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <a href="#paneBilling" data-toggle="tab" class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                    <div class="media-body">
                                        <h6>Eléments variables</h6>
                                        <span>Vos éléments variables</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div><!-- col -->
                    <div class="col-md-8">
                        <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                            <div class="tab-content">
                                <div id="paneProfile" class="tab-pane show active">
                                    <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Mes informations</h6>
                                    <hr>
                                    <div class="form-settings">
                                        <div class="form-group">
                                            <label class="form-label" for="u-lastname">Nom</label>
                                            <input type="text" class="form-control" id="u-lastname" placeholder="Entrer votre nom complet" value="Doe">
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label" for="u-firstname">Prénom</label>
                                            <input type="text" class="form-control" id="u-firstname" placeholder="Enter votre prénom" value="John">

                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label" for="u-securitysociale">Numéro de sécurité sociale</label>
                                            <input type="text" class="form-control" id="u-securitysociale" placeholder="Enter votre numéro de sécurité sociale" value="--">
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label" for="u-status">Situation familiale</label>
                                            <input type="text" class="form-control" id="u-status" placeholder="Enter votre situation familiale" value="--">
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label" for="u-people">Personne à prévenir</label>
                                            <input type="text" class="form-control" id="u-people" placeholder="Enter une personne à prévenir" value="--">

                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label" for="u-matricule">Matricule</label>
                                            <input type="text" class="form-control" id="u-matricule" placeholder="Enter votre matricule" value="--">
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label" for="u-quality">Qualité</label>
                                            <input type="text" id="u-quality" class="form-control" placeholder="Qualité" value="--">
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label" for="u-responsable">Responsable</label>
                                            <input type="text" class="form-control" id="u-responsable" placeholder="Entrer le nom de votre responsable" value=" -- ">
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label" for="u-society">Société</label>
                                            <input type="text" class="form-control" id="u-society" placeholder="Société de rattachement" value="--">
                                        </div><!-- form-group -->


                                        <hr class="op-0">

                                        <button class="btn btn-brand-02" type="submit">Modifier votre Profile</button>
                                        <button class="btn btn-white mg-l-2" type="reset">Annulez</button>

                                        <hr>

                                        <div class="form-group">
                                            <label class="form-label text-danger">Supprimer le compte</label>
                                            <p class="tx-sm tx-color-04">
                                                Une fois que vous avez supprimé votre compte, vous ne pouvez plus revenir en arrière. S'il vous plaît soyez certain.
                                            </p>
                                            <button class="btn btn-sm btn-danger">Supprimer le compte</button>
                                        </div><!-- form-group -->

                                    </div>
                                </div><!-- tab-pane -->
                                <div id="paneAccount" class="tab-pane">
                                    <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Coordonnées</h6>

                                    <hr>
                                    <div class="form-settings">
                                        <div class="form-group">
                                            <label class="form-label" for="u-address">Adresse</label>
                                            <input type="text" class="form-control" id="u-address" placeholder="Entrer votre adresse" value="--">
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label" for="u-address-c">Complément d'adresse</label>
                                            <input type="text" class="form-control" id="u-address-c" placeholder="Complément d'adresse" value="--">
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label" for="u-address-cp">Code postal</label>
                                            <input type="text" class="form-control" id="u-address-cp" placeholder="Code postal" value="--">
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label" for="u-address-cm">Commune</label>
                                            <input type="text" class="form-control" id="u-address-cm" placeholder="Votre commune" value="--">
                                        </div><!-- form-group -->

                                        <hr class="op-0">

                                        <button class="btn btn-brand-02" type="submit">Modifier votre adresse</button>
                                        <button class="btn btn-white mg-l-2" type="reset">Annulez</button>
                                    </div><!-- form-settings -->
                                </div><!-- tab-pane -->
                                <div id="paneSecurity" class="tab-pane">
                                    <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Données admin</h6>
                                    <hr>
                                    <div class="form-settings">
                                        <div class="form-group">
                                            <label class="form-label">Changer votre mot de passe</label>
                                            <input type="text" class="form-control" placeholder="Ancien mot de passe">
                                            <input type="text" class="form-control mg-t-5" placeholder="Nouveau mot de passe">
                                            <input type="text" class="form-control mg-t-5" placeholder="Confirmer le nouveau mot de passe">
                                        </div><!-- form-group -->

                                        <hr>

                                        <div class="form-group">
                                            <label class="form-label">Two Factor Authentication</label>
                                            <button class="btn btn-brand-02 tx-sm">Enable two-factor authentication</button>
                                            <div class="tx-11 tx-sans tx-color-04 mg-t-7">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.</div>
                                        </div><!-- form-group -->

                                        <hr>

                                        <div class="form-group">
                                            <label class="form-label">Sessions</label>
                                            <p class="tx-sm tx-color-03">This is a list of devices that have logged into your account. Revoke any sessions that you do not recognize.</p>

                                            <ul class="list-group list-group-session">
                                                <li class="list-group-item">
                                                    <div>
                                                        <h6>San Francisco City 190.24.335.55</h6>
                                                        <span>Your current session seen in United States</span>
                                                    </div>
                                                    <a href="" class="btn btn-xs btn-white">More Info</a>
                                                </li>
                                            </ul>
                                        </div><!-- form-group -->
                                    </div><!-- form-settings -->
                                </div><!-- tab-pane -->
                                <div id="paneNotification" class="tab-pane">
                                    <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Contrat</h6>
                                    <hr>
                                    <div class="form-settings mx-wd-100p">
                                        <div class="form-group">
                                            <label class="form-label mg-b-2">Security Alerts</label>
                                            <p class="tx-sm tx-color-04">Receive security alert notifications via email</p>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Email each time a vulnerability is found</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Email a digest summary of vulnerabilities</label>
                                            </div>
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label">SMS Notifications</label>
                                            <ul class="list-group list-group-notification">
                                                <li class="list-group-item">
                                                    <p class="mg-b-0">Comments</p>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                        <label class="custom-control-label" for="customSwitch1">&nbsp;</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="mg-b-0">Updates From People</p>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                        <label class="custom-control-label" for="customSwitch2">&nbsp;</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="mg-b-0">Reminders</p>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                        <label class="custom-control-label" for="customSwitch3">&nbsp;</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="mg-b-0">Events</p>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                                        <label class="custom-control-label" for="customSwitch4">&nbsp;</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="mg-b-0">Pages You Follow</p>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                                        <label class="custom-control-label" for="customSwitch5">&nbsp;</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- form-group -->
                                    </div><!-- form-setting -->
                                </div><!-- tab-pane -->
                                <div id="paneBilling" class="tab-pane">
                                    <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Eléments variables</h6>
                                    <hr>
                                    <div class="form-settings mx-wd-100p">
                                        <div class="form-group">
                                            <label class="form-label mg-b-2">Payment Method</label>
                                            <p class="tx-color-04 tx-13">You have not added a payment method</p>
                                            <button class="btn btn-brand-02 btn-sm">Add Payment Method</button>
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label class="form-label">Payment History</label>
                                            <div class="bd bg-gray-100 pd-20 tx-center">
                                                <p class="tx-13 mg-b-0">You have not made any payment.</p>
                                            </div>
                                        </div><!-- form-group -->
                                    </div><!-- form-settings -->
                                </div><!-- tab-pane -->
                            </div><!-- tab-content -->
                        </div><!-- card -->
                    </div><!-- col -->
                </div><!-- Fin profile infos -->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <h3 class="mt-4">Agenda</h3>
    </div>
    <div class="content-body content-body-calendar">
        <div id="calendar" class="content-calendar"></div>
    </div><!-- content-body -->
@endsection






@section('js')

    <script src="{{ asset('assets/js/calendar-events.js') }}"></script>
    <script src="{{ asset('assets/js/calendar.js') }}"></script>
@endsection

