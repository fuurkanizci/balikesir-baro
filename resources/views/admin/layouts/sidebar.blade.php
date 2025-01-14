<aside class="sidebar">
    <a href="{{route('admin.dashboard')}}">
        <div class="sidebar-logo">
            <img class="img-fluid mb-3" src="{{ Vite::asset('resources/images/logo.png') }}">
            <h5>Yönetim Paneli</h5>
        </div>
    </a>
    <div class="sidebar-nav">
        <ul class="nav flex-column accordion accordion-flush">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.aboutUs.index')}}">
                    <i class="fa-solid fa-person-chalkboard"></i>
                    <span>{{__('Hakkımızda')}}</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
