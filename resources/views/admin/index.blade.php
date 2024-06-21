@extends('admin.fixe')
@section('titre', 'Accueil')
@section('body')

    <!--page-wrapper-->
    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">
                        {{ Auth::user()->projet_name }}
                    </div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}">
                                        <i class='bx bx-home-alt'></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Emploi de temps</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleLargeModal">
                                <i class='bx bx-time-five'></i>
                                Ajouter un programme
                            </button>
                            <a href="{{ route('gerer_programmes') }}" class="btn btn-sm btn-dark">
                                <i class='bx bx-cog' ></i> Gérer le temps
                            </a>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page-content-wrapper-->
    </div>

    <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize">
                        Ajouter un programme
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('Programmes.Ajouter')
                </div>
            </div>
        </div>
    </div>
@endsection


@section('header')
    <link href="/admin/plugins/fullcalendar/css/main.min.css" rel="stylesheet" />
    <link href="/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />

@endsection

@section('scripts')
    <script src="/admin/plugins/fullcalendar/js/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/locales/fr.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                },
                initialView: 'dayGridMonth',
                initialDate: new Date().toISOString().slice(0, 10), // Set to current date
                locale: 'fr', // Set locale to French
                navLinks: true, // can click day/week names to navigate views
                selectable: true,
                nowIndicator: true,
                dayMaxEvents: true, // allow "more" link when too many events
                editable: true,
                businessHours: true,
                events: function(fetchInfo, successCallback, failureCallback) {
                    $.ajax({
                        url: '/api/programmes',
                        method: 'GET',
                        success: function(data) {
                            successCallback(data);
                        },
                        error: function() {
                            failureCallback();
                        }
                    });
                }
            });
            calendar.render();

            document.addEventListener('livewire:init', () => {
                Livewire.on('programmeAdded', () => {
                    // Reload the calendar events
                    calendar.refetchEvents();
                });
            });
        });
    </script>
    
@endsection
