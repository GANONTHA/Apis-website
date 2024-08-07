@extends('layouts.admin_layout')
@section('admin-content')

{{-- table of events list with edit and update button --}}
<main class="main" id="main">
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{__('Liste des événements')}} </h1>
          <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">{{__('Home')}} </a></li>
        <li class="breadcrumb-item active">{{__('Evenements')}} </li>
      </ol>
    </nav>
        {{-- display success message if event is updated --}}
        @if (session()->has('event-updated'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('event-updated') }}
        </div>
        @endif
        {{-- display success message if event is created --}}
        @if (session()->has('event-created'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('event-created') }}
        </div>
        @endif
        {{-- display success message if event is deleted --}}
        @if (session()->has('event-deleted'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('event-deleted') }}
        </div>
        @endif

        <table id="eventsTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>{{__('Titre')}} </th>
                    <th>{{__('Description admin')}} </th>
                    <th>{{__('Date')}} </th>
                    <th> {{__('Heure de début')}} </th>
                    <th> {{__('Heure de fin')}} </th>
                    <th>{{__('Lieu')}} </th>
                    <th>{{__('Actions')}} </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)

                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ substr($event->description,0,50) }}...</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->start_time }}</td>
                    <td>{{ $event->end_time }}</td>
                    <td>{{ $event->location }}</td>
                    <td>
                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Modifier</a>
                        <button type="button" class="btn btn-danger confirm-delete" data-form="deleteForm{{$event->id}}" data-toggle="modal" data-target="#deleteModal{{$event->id}}">{{__('Supprimer')}} </button>

                        <form id="deleteForm{{$event->id}}" action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                        </form>
                </tr>

                  <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel"> {{__('Confirm Delete')}} </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{__('Are you sure you want to delete this Event?')}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Cancel')}} </button>
                                        <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$event->id}}">{{__('Delete')}} </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach

            </tbody>
        </table>
         {{-- add new testimonial button --}}
        <a href="{{route('admin.createEvent')}}" class="btn btn-primary">{{__('Ajouter un testimonial')}} </a>


    </div>
</main>
@endsection