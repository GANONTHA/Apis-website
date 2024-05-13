
     <div class="navbar navbar-expand-lg bg-dark navbar-dark include">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                    <img src="{{asset('img/apis.png')}}" alt="">
                </a>
                <button
                    type="button"
                    class="navbar-toggler"
                    data-toggle="collapse"
                    data-target="#navbarCollapse"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div
                    class="collapse navbar-collapse justify-content-between"
                    id="navbarCollapse"
                >
                    <div class="navbar-nav ml-auto">
                        <a href="/" class="nav-item nav-link  {{ Request::is('/') ? 'active' : '' }}"
                            >Accueil</a
                        >

                    <div class="nav-item dropdown">
                            <a
                                href="#"
                                class="nav-link dropdown-toggle {{ Request::is('about*') ? 'active' : '' }}"
                                data-toggle="dropdown"
                                >Qui sommes-nous?</a
                            >
                            <div class="dropdown-menu">
                                <a href="{{route('about.index')}}" class="dropdown-item"
                                    >Mot du Secrétaire</a
                                >
                                <a href="{{route('about.index')}}" class="dropdown-item"
                                    >Notre histoire</a
                                >
                                <a href="{{route('report')}}" class="dropdown-item"
                                    >Rapports d'activités </a
                                >
                               
                            </div>
                        </div> 
                        
                        <div class="nav-item dropdown">
                            <a
                                href="#"
                                class="nav-link dropdown-toggle  {{ Request::is('domaines*') ? 'active' : '' }}"
                                data-toggle="dropdown"
                                >Domaines d'intervention</a
                            >
                            <div class="dropdown-menu">
                                <a href="{{route('domaines.securitealimentaire')}}" class="dropdown-item"
                                    >Sécurité alimentaire</a
                                >
                                <a href="{{route('domaines.santenutrition')}}" class="dropdown-item"
                                    >Santé et Nutrition</a
                                >
                                <a href="{{route('domaines.urgencehumanitaire')}}" class="dropdown-item"
                                    >Urgence humanitaire</a
                                >
                                <a href="{{route('domaines.educationdeveloppement')}}" class="dropdown-item"
                                    >Éducation et développement Social</a
                                >
                               
                            </div>
                    </div> 
                        <a href="{{route('events.index')}}" class="nav-item nav-link {{ Request::routeIs('events.index') ? 'active' : '' }}"> Événements</a
                        >
                        <a href="{{route('blogs.index')}}" class="nav-item nav-link {{ Request::routeIs('blogs.index') ? 'active' : '' }} ">Actualités</a>
                        <a href="{{route('contacts.index')}}" class="nav-item nav-link {{ Request::routeIs('contacts.index') ? 'active' : '' }} "
                            >Contact</a
                        >
                    </div>
                </div>
            </div>
        </div>
