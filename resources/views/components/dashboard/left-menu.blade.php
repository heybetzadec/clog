<div>
    <aside class="left-panel">

        <!-- brand -->
        <div class="logo">
            <a href="./index.html" class="logo-expanded">
                <i class="ion-social-buffer"></i>
                <span class="nav-label">Velonic</span>
            </a>
        </div>
        <!-- / brand -->

        <!-- Navbar Start -->
        <nav class="navigation">
            <ul class="list-unstyled">
                @foreach($menuList as $key => $value)
                    @isset($value['subMenuList'])
                        <li class="has-submenu">
                            <a href="#"><i class="zmdi zmdi-format-underlined"></i> <span class="nav-label">{{ $value['name'] }}</span><span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                @foreach($value['subMenuList'] as $k => $val)
                                    <li><a href="{{ $value['urlPath'] }}">{{ $val }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ $value['urlPath'] }}"><i class="{{ $value['icon'] }}"></i> <span class="nav-label">{{ $value['name'] }}</span></a></li>
                    @endisset
                @endforeach
            </ul>
        </nav>

    </aside>
</div>
