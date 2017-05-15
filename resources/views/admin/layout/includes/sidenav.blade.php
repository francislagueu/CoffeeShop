{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Menu
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('menu.index')}}">Menus</a></li>
                    <li><a href="{{route('menu.create')}}">Add Menu</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-user"></i> Users
                    <span class="caret pull-right"></span>
                </a>
                <ul>
                    <li><a href="{{route('user.index')}}">users</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Orders
                    <span class="caret pull-right"></span>
                </a>
                <ul>
                    <li><a href="{{route('orders')}}">orders</a></li>
                </ul>
                
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->