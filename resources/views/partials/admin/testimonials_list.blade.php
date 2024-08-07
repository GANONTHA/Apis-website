@extends('layouts.admin_layout')

@section('admin-content')
<main class="main" id="main">
    {{-- create Bootstrap table with three columns --}}
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{__('Liste des témoignage')}} </h1>
          <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">{{__('Home')}} </a></li>
        <li class="breadcrumb-item active">{{__('Témoignages')}} </li>
      </ol>
    </nav>
        {{-- display success message if testimonial is created --}}
        @if (session()->has('testimonial-success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('testimonial-success') }}
        </div>
        @endif
        {{-- display success message if testimonial is deleted --}}
        @if (session()->has('testimonial-deleted'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('testimonial-deleted') }}
        </div>
        @endif

        {{-- create table --}}
        <table id="articlesTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>{{__('Author Name')}} </th>
                    <th>{{__('Author Position')}} </th>
                    <th>{{__('Content')}} </th>
                    <th>{{__('Actions')}} </th>
                </tr>
            </thead>
            <tbody>
                {{-- loop through blogs and display them in table --}}
                @foreach ($testimonials as $testimonial)

                <tr>
                    <td>{{ $testimonial->authorName }}</td>
                    <td>{{ $testimonial->authorPosition }}</td>
                    <td>{{ substr($testimonial->content,0,50) }}...</td>
                    <td>
                        {{-- create edit button --}}
                        <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-primary">Modifier</a>
                        {{-- create delete button --}}
                        <!-- Delete Button -->
                        <button type="button" class="btn btn-danger confirm-delete" data-form="deleteForm{{$testimonial->id}}" data-toggle="modal" data-target="#deleteModal{{$testimonial->id}}">{{__('Supprimer')}} </button>

                        <form id="deleteForm{{$testimonial->id}}" action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')

                            {{-- <button type="submit" class="btn btn-danger">Supprimer</button> --}}
                        </form>
                       
                    </td>
                </tr>
                 <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{$testimonial->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">{{__('Confirm Delete')}} </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{__('Are you sure you want to delete this testimonial?')}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Cancel')}} </button>
                                        <button type="button" class="btn btn-danger confirmDelete" id="confirmDelete{{$testimonial->id}}">{{__('Delete')}} </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </tbody>
        </table>
        {{-- add new testimonial button --}}
        <a href="{{route('admin.createTestimonial')}}" class="btn btn-primary">{{__('Ajouter un témoignage')}} </a>


</main>
@endsection