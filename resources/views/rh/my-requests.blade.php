@extends('layouts.app2')

@section('title', 'Mes demandes RH')

@section('content')
    <div class="content-header justify-content-between">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="homepage.html">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mes demandes</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Mes demandes</h4>
        </div>
        <div class="d-none d-sm-flex">
                        <a href="" class="btn btn-light"><i data-feather="print" class="svg-14"></i> Imprimer</a>
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="ask-form" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nouvelle demande
                </button>
                <div class="dropdown-menu tx-14" aria-labelledby="ask-form" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#">Congés</a>
                    <a class="dropdown-item" href="#">RTT</a>
                    <a class="dropdown-item" href="#">Absence</a>
                    <a class="dropdown-item" href="#">Arrêt maladie</a>
                    <a class="dropdown-item" href="#">Demande RH</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="filter-nature" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filtre par nature
                </button>
                <div class="dropdown-menu tx-14" aria-labelledby="filter-nature" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#">Congés</a>
                    <a class="dropdown-item" href="#">RTT</a>
                    <a class="dropdown-item" href="#">Absences</a>
                    <a class="dropdown-item" href="#">Arrêts maladie</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="filter-status" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filtre par statut
                </button>
                <div class="dropdown-menu tx-14" aria-labelledby="filter-status" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#">En cours</a>
                    <a class="dropdown-item" href="#">Validé</a>
                    <a class="dropdown-item" href="#">En attente</a>
                    <a class="dropdown-item" href="#">refusées</a>
                </div>
            </div>
        </div>
    </div><!-- content-header -->
    <div class="content-body">
        <div class=" no-code">
            <h5 id="section7" class="tx-semibold">Filtre par date</h5>
            <p class="mg-b-25">Sélectionnez la plage de dates à rechercher.</p>

            <div class="row">
                <div class="col-3">
                    <input type="date" id="dateFrom" class="form-control hasDatepicker" placeholder="Du">
                </div><!-- col -->
                <div class="col-3">
                    <input type="date" id="dateTo" class="form-control hasDatepicker" placeholder="Au">
                </div><!-- col -->
            </div><!-- row -->
        </div>

        <div class="alert alert-success alert-dismissible fade show mt-5 mb-5" role="alert">
            Votre demande à bien été prise en compte.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="card mt-5 mb-2">
            <div class="card-body">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nature</th>
                        <th scope="col">Date de début</th>
                        <th scope="col">Date de fin</th>
                        <th scope="col">Durée</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Commentaire</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu tx-14" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                                    <a class="dropdown-item" href="#">Réémettre</a>
                                    <a class="dropdown-item" href="#">Imprimer</a>
                                    <a class="dropdown-item" href="#">Annuler</a>
                                    <a class="dropdown-item" href="#">Modifier</a>
                                </div>
                            </div>
                        </th>
                        <td>Titre requête</td>
                        <td>24/09/21</td>
                        <td>28/09/21</td>
                        <td>4</td>
                        <td>En cours</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mb-3">
           Ici pagination si nécéssaire
        </div>

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
                        <th scope="row">Titre</th>
                        <td>24/02/21</td>
                        <td>Montant</td>
                        <td>En cours</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- content-body -->
@endsection

@section('js')

    <script src="{{ asset('assets/js/flot.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-one.js') }}"></script>

    <script>
        $(function(){
            'use strict'

            $('#datepicker1').datepicker();

            $('#datepicker2').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true
            });

            $('#datepicker3').datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
                changeMonth: true,
                changeYear: true
            });

            $('#datepicker4').datepicker();

            $('#datepicker5').datepicker({
                showButtonPanel: true
            });

            $('#datepicker6').datepicker({
                numberOfMonths: 2
            });

            var dateFormat = 'mm/dd/yy',
                from = $('#dateFrom')
                    .datepicker({
                        defaultDate: '+1w',
                        numberOfMonths: 2
                    })
                    .on('change', function() {
                        to.datepicker('option','minDate', getDate( this ) );
                    }),
                to = $('#dateTo').datepicker({
                    defaultDate: '+1w',
                    numberOfMonths: 2
                })
                    .on('change', function() {
                        from.datepicker('option','maxDate', getDate( this ) );
                    });

            function getDate( element ) {
                var date;
                try {
                    date = $.datepicker.parseDate( dateFormat, element.value );
                } catch( error ) {
                    date = null;
                }

                return date;
            }


        });
    </script>
@endsection
