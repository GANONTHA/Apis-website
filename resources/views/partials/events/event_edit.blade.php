<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{config('app.name')}}-ADMIN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/apis.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel=" apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>
  <!-- ======= Header ======= -->
  @include('partials.admin.header')
  <!-- End Header -->
  <!-- ======= Sidebar ======= -->
  @include('partials.admin.sidebar')
  <!-- End Sidebar-->



<main class="main" id="main">
  {{-- edit event form --}}
  <div class="container-fluid px-4">
    <h1 class="mt-4">{{__('Modifier un événement')}}</h1>
    {{-- display success message if event is updated --}}
    @if (session()->has('event-updated'))
    <div class="alert alert-success" role="alert">
      {{ session()->get('event-updated') }}
    </div>
    @endif
    {{-- create form --}}
    <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label"><{{__('Titre')}}/label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">{{__('Description')}}</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $event->description }}</textarea>
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">{{__('Date')}}</label>
        <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}">
      </div>
      <div class="mb-3">
        <label for="start_time" class="form-label">{{__('Heure de début')}}</label>
        <input type="time" class="form-control" id="start_time" name="start_time" value="{{ $event->start_time }}">
      </div>
      <div class="mb-3">
        <label for="end_time" class="form-label">{{__('Heure de fin')}}</label>
        <input type="time" class="form-control" id="end_time" name="end_time" value="{{ $event->end_time }}">
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">{{__('Lieu')}}</label>
        <input type="text" class="form-control" id="location" name="location" value="{{ $event->location }}">
      </div>
       <div class="mb-3">
          <label for="image" class="form-label">{{__('Image')}}</label>
          <input type="file" class="form-control" id="image" name="image">
        </div>
      <button type="submit" class="btn btn-primary">{{__('Sauvegarder')}}</button>
    </form>
  </div>
</main>


  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/quill.js')}}"></script>
  <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
