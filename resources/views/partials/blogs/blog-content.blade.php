 <div class="row">
     @if($blogs->count())
     @foreach ($blogs as $blog)
     <div class="col-lg-4">
         <div class="blog-item">
             <div class="blog-img">
                 <img src="{{ asset('storage/' . $blog->image )}}" alt="Image">
             </div>
             <div class="blog-text">
                 <h3><a href="{{route('blogs.show', ['id' => $blog->id])}}">{{$blog->title}}</a></h3>
                 <p>

                     {!! substr($blog->content,0,150) !!}...
                 </p>
             </div>
             <div class="blog-meta">
                 <p><i class="fa fa-user"></i><a href="">{{$blog->author}}</a></p>
                 <p><i class="fa fa-comments"></i><a href="">{{$blog->comments->count()}} {{__('Commentaires')}}</a></p>
             </div>
         </div>
     </div>
     @endforeach
     @else
     <div class="alert alert-warning col-md-8 offset-md-2 mt-3">{{__('Aucune actualité enregistrée pour le moment !')}}</div>
     @endif
 </div>