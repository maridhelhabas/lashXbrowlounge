<script src="https://kit.fontawesome.com/231ebe179a.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script language="javascript" type="text/javascript">
window.history.forward();
</script>



<div class="sidebar">
    <div class="sidebar-header">
        <h4>Admin Panel</h4>
    </div>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link{{ request()->is('admin.dashboard') ? ' active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ request()->is('admin.services.index') ? ' active' : '' }}" href="{{ route('admin.services.index') }}">
                <i class="fas fa-cogs"></i> Services
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{ request()->is('admin.bookings.index') ? ' active' : '' }}" href="{{ route('admin.bookings.index') }}">
                <i class="fas fa-calendar-check"></i> Bookings
            </a>
        </li>
    </ul>
    <div class="sidebar-profile">
        <div class="profile-info" id="profile-info">
            <img src="{{ asset('home-images/avatar.jpg') }}" alt="Admin Profile" class="profile-img">
            <p class="profile-name">Admin</p>
            <i class="fas fa-chevron-down profile-dropdown-icon"></i>
            <div class="dropdown-menu" id="dropdown-menu">
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a class="dropdown-item" href="{{ route('admin.admin-login') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            </div>
        </div>
        
    </div>
</div>


<script>
document.getElementById('profile-info').addEventListener('click', function() {
    var dropdownMenu = document.getElementById('dropdown-menu');
    dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
});

document.getElementById('logout-form').addEventListener('submit', function(event) {
    event.preventDefault(); 

    setTimeout(function() {
        window.location.href = '{{ route('admin.admin-login') }}';
        window.history.pushState(null, '', '{{ route('admin.admin-login') }}');
        window.addEventListener('popstate', function(event) {
            history.go(1); 
        });
    }, 0);
});

</script>



<style>
.sidebar {
    width: 250px;
    background-color: #333;
    color: white;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    overflow-y: auto;
    padding-top: 20px;
}

.sidebar-header {
    padding: 0 20px;
    margin-bottom: 20px;
}

.sidebar-header h4 {
    margin: 0;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
}

.sidebar .navbar-nav {
    margin-bottom: 30px;
}

.sidebar .navbar-nav .nav-link {
    padding: 15px 20px;
    font-size: 16px;
    transition: all 0.3s ease;
}

.sidebar .navbar-nav .nav-link i {
    margin-right: 10px;
}

.sidebar .navbar-nav .nav-link:hover,
.sidebar .navbar-nav .nav-link.active {
    background-color: #555;
    border-left: 5px solid #17a2b8;
}

.sidebar .navbar-nav .nav-link:hover i,
.sidebar .navbar-nav .nav-link.active i {
    color: #17a2b8;
}

.sidebar .navbar-nav .nav-link.active {
    font-weight: bold;
}

.sidebar-profile {
    padding: 20px;
    border-top: 1px solid #444;
}

.sidebar-profile .profile-info {
    display: flex;
    align-items: center;
    cursor: pointer;
    position: relative;
}

.sidebar-profile .profile-img {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    margin-right: 10px;
}

.sidebar-profile .profile-name {
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    margin-right: 10px;
}

.sidebar-profile .profile-dropdown-icon {
    color: #fff;
}

.sidebar-profile .dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #444;
    width: 100%;
    z-index: 1000;
    padding: 10px 0;
    border: 1px solid #555;
}

.sidebar-profile .dropdown-menu .dropdown-item {
    padding: 10px 20px;
    color: #fff;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s ease;
}

.sidebar-profile .dropdown-menu .dropdown-item i {
    margin-right: 10px;
}

.sidebar-profile .dropdown-menu .dropdown-item:hover {
    background-color: #555;
}
</style>


