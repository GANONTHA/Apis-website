@extends('layouts.layout')
@section('content')
@include('includes.topbar')
@include('includes.navbar')


<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{__('Nos Actualités')}}</h2>
            </div>
            <div class="col-12">
                <a href="/">{{__('Accueil')}}</a>
                <a href="/blogs">{{__('Actualités')}}</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->



<!-- Single Post Start-->
<div class="single partial-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content">
                    <h1 class="domaine-title blog">{{$blog->title}}</h1>
                    <img src="{{asset('storage/' . $blog->image)}}" alt="image" />
                    <p>
                        {!!$blog->content!!}
                    </p>

                    <h3>{{__('Plus dimages')}}</h3>
                    {{-- display more images horizontally, we can click an image to expand and loop through all , original display not too large --}}
                    <div class="row">
                        @if($blog->images->count()==0)
                        <div class="m-4">
                            <p class="text-center mt-4 alert-success">{{__('Pas dimages supplémentaires')}}</p>
                        </div>
                        @endif
                        @foreach($blog->images as $image)
                        <div class="col-md-4">
                            <a href="{{asset('storage/' . $image->image)}}" data-lightbox="blog-images">
                                <img src="{{asset('storage/' . $image->image)}}" alt="image" class="img-fluid" />
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <p class="font-weight-100 text-right">
                        {{__('Publié le')}} <b> {{substr($blog->created_at, 0,10)}} </b>, {{__('par')}} {{$blog->author}}
                    </p>
                </div>


                <div class="comments">
                    {{-- display compte registered success message from session --}}
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @elseif(session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                    @endif
                    <h3>{{__('Commentaires')}}</h3>
                    @if ($blog->comments->count()==0)
                    <p class="mt-4 text-alert">{{__('Pas de commentaires encore')}}</p>
                    @else
                    @foreach($blog->comments as $comment)
                    <div class="comment">
                        <!-- <h4>{{ $comment->user_name }}</h4> -->
                        <p>{{ $comment->comment }}</p>
                        <p class="comment-added">Ajoutée par {{$comment->user->name}} , {{$comment->created_at->locale('fr')->diffForHumans()}} </p>
                    </div>
                    @endforeach
                    @endif
                    {{-- Login --}}
                    <div class="login-card card">
                        <h3>{{__('Connectez-vous pour commenter')}}</h3>
                        <!-- cross to close the modal -->
                        <span class="close">
                            <i class="fas fa-times"></i>

                        </span>

                        <div class="modal-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{__('Email')}}</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">{{__('Mot de passe')}}</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <button type="submit" class="btn btn-primary">{{__('Se connecter')}}</button>
                                <span style="font-size: 20;">{{__('Nouvel utilisateur?')}} <span class="register-btn" style="text-decoration: underline">{{__('Creer un Compte')}}
                                        </> </span>
                            </form>
                        </div>

                    </div>
                    {{-- Register Modal --}}
                    <div class="register-card">
                        <h3>{{__('Enregistrez-vous pour commenter')}}</h3>
                        <!-- cross to close the modal -->
                        <span class="fermer">
                            <i class="fas fa-times"></i>

                        </span>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('registerFromBlog') }}" enctype=" multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label">{{__('Nom')}}</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{__('Email')}}</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">{{__('Mot de passe')}}</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password-confirm" class="form-label">{{__('Confirmer le mot de passe')}}</label>
                                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required>
                                </div>

                                <button type="submit" class="btn btn-primary">{{__('Sinscrire')}}</button>
                                <span style="font-size: 20;">{{__('Deja un utilisateur?')}} <span class="login-btn" style="text-decoration: underline">{{__('Se connecter')}}</span> </span>
                            </form>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('comments.store') }}">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <textarea class="form-control  {{ auth()->check() ? '' : 'not-logged-in' }}" name="comment" required></textarea>
                        <button class="btn comment-button" type="submit">{{__('Ajouter un commentaire')}}</button>
                    </form>
                </div>


                <h6>{{__('Dautres liens')}}</h6>
                @include('partials.other-links')
            </div>

            {{-- Side bar Sarts --}}
            @include('includes.sidebar')
            {{-- Side bar Ends --}}
        </div>
    </div>
</div>
<!-- Single Post End-->





<script>
    var elemen = document.querySelector('.not-logged-in');
    var loginModal = document.querySelector('.login-card');
    var registerModal = document.querySelector('.register-card');
    var closeBtn = document.querySelector('.close');
    var closeBtnR = document.querySelector('.fermer');
    var registerBtn = document.querySelector('.register-btn');

    registerModal.style.display = 'none';

    elemen.addEventListener('click', function(e) {
        e.preventDefault();
        if (elemen) {
            loginModal.style.display = 'block';
        }
    });
    closeBtnR.addEventListener('click', function(e) {
        e.preventDefault();
        // console.log(registerModal);
        registerModal.style.display = 'none'
    })
    closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        loginModal.style.display = 'none';
    });
    //show register modal if the register btn is clicked
    registerBtn.addEventListener('click', function(e) {
        e.preventDefault();
        loginModal.style.display = 'none';
        registerModal.style.display = 'block';
    });
</script>


@stop