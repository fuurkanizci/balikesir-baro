<section class="topbar fixed-top">
    <nav class="navbar">
        <div class="container-fluid justify-content-end py-3 pe-5">
            <div class="dropdown">
                @auth()
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <span><i class="fa-solid fa-user"></i></span> <span class="ms-2">{{\Illuminate\Support\Facades\Auth::guard('admin')->user()->name}}</span>
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><form action="{{route('admin.logout')}}" method="get"><button type="submit" class="btn navbar-btn">Çıkış yap</button></form></li>
                </ul>
                @endauth
            </div>
        </div>
    </nav>
</section>
