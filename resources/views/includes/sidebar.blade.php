 <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <div class="search-widget">
                                    <form>
                                        <input class="form-control" type="text" placeholder="Taper pour rechercher">
                                        <button class="btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2 class="widget-title">Publications récentes<h2>
                                <div class="recent-post ">
                                   @foreach ($blogs as $blog)
                                         <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{asset('storage/' . $blog -> image)}}" />
                                        </div>
                                        <div class="post-text domaine-links">
                                            <a href="{{route('blogs.show',['id'=>$blog->id])}}"> {{ substr($blog -> content,0,60) }}... </a>
                                            <div class="post-meta">
                                                <p>Par<a href="">Admin</a></p>
                                                <p>Sur<a href="">APIS Sahel</a></p>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <div class="image-widget">
                                    @php
                                    $latestBlog = $blogs->sortByDesc('created_at')->first();
                                    $firstBlog = $blogs->sortBy('created_at')->first();
                                    @endphp

                                   @if($latestBlog)
                                    <a href="{{ route('blogs.show', ['id' => $latestBlog->id]) }}"><img src="{{asset('storage/' . $latestBlog->image)}}" alt="{{ $latestBlog->title }}"></a>
                                    @else
                                    <p>No blogs found.</p>
                                    @endif
                                    {{-- <a href="#"><img src="{{asset('img/blog-1.jpg')}}" alt="Image"></a> --}}
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <div class="tab-post">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#featured">Importants</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#popular">Populaires</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#latest">récentes</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <div class="image-widget">
                                    @if($firstBlog)
                                    <a href="{{ route('blogs.show', ['id' => $firstBlog->id]) }}"><img src="{{asset('storage/' . $firstBlog->image)}}" alt="{{ $latestBlog->title }}"></a>
                                    @else
                                    <p>No blogs found.</p>
                                    @endif
                                    {{-- <a href="#"><img src="{{asset('img/side-bar-image.png')}}" alt="Image"></a> --}}
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2 class="widget-title">Catégories</h2>
                                <div class="category-widget domaine-links">
                                    <ul>
                                        <li><a  href="">Education</a><span>(1)</span></li>
                                        <li><a href="">Santé</a><span>(1)</span></li>
                                        <li><a href="">Social</a><span>(1)</span></li>
                                        {{-- <li><a href="">Politics</a><span>(65)</li> --}}
                                    </ul>
                                </div>
                            </div>

                            {{-- <div class="sidebar-widget">
                                <div class="image-widget">
                                    <a href="#"><img src="img/blog-3.jpg" alt="Image"></a>
                                </div>
                            </div> --}}

                             <div class="sidebar-widget">
                                <h2 class="widget-title">Liens Importants</h2>
                                <div class="tag-widget">
                                    <a href="{{route('blogs.index')}}">Articles</a>
                                    <a href="{{route('events.index')}}">Événements</a>
                                    <a href="{{route('contacts.index')}}">Contact</a>
                                </div>
                            </div>

                            {{-- <div class="sidebar-widget">
                                <h2 class="widget-title">Text Widget</h2>
                                <div class="text-widget">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea nec eros. Nunc eu enim non turpis id augue.
                                    </p>
                                </div>
                            </div> --}}
                        </div>
                    </div>