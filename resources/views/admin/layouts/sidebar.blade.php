<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/home') }}">Gummlas</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/home') }}">KL</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active"><a class="nav-link" href="{{ url('/home') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Starter</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Post</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('post.index') }}">List Post</a></li>
                    <li><a class="nav-link" href="{{ route('post.trash') }}">List Post Trash</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-clipboard"></i> <span>Kategori</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('category.index') }}">List Kategori</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-bookmark"></i> <span>Tag</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('tag.index') }}">List Tag</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>User</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('user.index') }}">List User</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>