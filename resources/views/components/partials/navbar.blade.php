<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"  aria-label="Toggle navigation">
                <span class="sr-only">This button display the navigetion area</span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="navbar-item active">
                    <a class="nav-link" href="{{ url()->current() }}">{{ __('navbar.home') }}</a>
                </li>
                <li class="navbar-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ __('navbar.service') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    	@foreach(__('navbar.service-items') as $serviceItem)
                        	<a class="dropdown-item" href="#">{{ $serviceItem }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="navbar-item">
                    <a class="nav-link" href="#">{{ __('navbar.about-us') }}</a>
                </li>
            </ul>
            <ul class="navbar-nav auto">
                <?php
                //if(ControlSession::isSessionStarted()) {
                    ?>
<!--                     <li class="navbar-item my-2 my-lg-0">
                        <a class="nav-link" href="{{ url('/') }}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                             ss Username ss
                        </a>
                    </li>
                    <li class="navbar-item my-2 my-lg-0">
                        <a class="nav-link" href="{{ url('/') }}">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                            Gestor
                        </a>
                    </li>
                    <li class="navbar-item my-2 my-lg-0">
                        <a class="nav-link" href="{{ url('/') }}">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                            Log out
                        </a>
                    </li> -->
                <?php
                //} else {
                    ?>
                    <li class="navbar-item my-2 my-lg-0">
                        <a class="nav-link" href="{{ url('/en') }}">{{ __('navbar.en') }}</a>
                    </li>
                    <li class="navbar-item my-2 my-lg-0">
                        <a class="nav-link" href="{{ url('/es') }}">{{ __('navbar.es') }}</a>
                    </li>
                    <?php
                //}
                ?>
            </ul>
        </div>
    </nav>
</header>
<br>
