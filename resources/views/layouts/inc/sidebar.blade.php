<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo"><a href="#" class="simple-text logo-normal">
            E-Shop
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active':''}}  ">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('categories') ? 'active':''}} ">
                <a class="nav-link" href="{{ url('categories') }}">
                    <i class="material-icons">person</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('add-category') ? 'active':''}} ">
                <a class="nav-link" href="{{ url('add-category') }}">
                    <i class="material-icons">person</i>
                    <p>Add Category</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('products') ? 'active':''}} ">
                <a class="nav-link" href="{{ url('products') }}">
                    <i class="material-icons">person</i>
                    <p>Products</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('add-products') ? 'active':''}} ">
                <a class="nav-link" href="{{ url('add-products') }}">
                    <i class="material-icons">person</i>
                    <p>Add Products</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
            </li>

        </ul>
    </div>
</div>
