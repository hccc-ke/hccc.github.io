<header class="page_header header_white table_section columns_padding_0 toggler-xs-right">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-5">
                <a href="/" class="logo">
                    HCCC
                </a>
                <!-- header toggler -->
                <span class="toggle_menu visible-xs">
                    <span></span>
                </span>
            </div>
            <div class="col-md-6 col-sm-2 text-center">
                <!-- main nav start -->
                <nav class="mainmenu_wrapper">
                    <ul class="mainmenu nav sf-menu">
                    @foreach ($items as $label => $item)
                        @if ($url = is_string($item) ? $item : $item->url)
                            <li class="{{ $page->isActive($url) ? 'active' : '' }}">
                                <a href="{{ $page->url($url) }}">{{ $label }}</a>
                                @if (! is_string($item) && isset($item['children']))
                                    <ul>
                                        @foreach($item['children'] as $childLabel => $childMenu)
                                            @if ($childUrl = is_string($childMenu) ? $childMenu : $childMenu->url)
                                                <li>
                                                    <a href="{{ $page->url($childUrl) }}">{{ $childLabel }}</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="#">{{ $childLabel }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @else
                            <li>
                                <a href="#"> {{ $label }}</a>
                            </li>
                        @endif
                    @endforeach
                        <li>
                            <a href="#contact-us">Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <!-- eof main nav -->
                <span class="toggle_menu hidden-xs">
                    <span></span>
                </span>
            </div>
            <div class="col-md-3 col-sm-5 text-right hidden-xs lightgreylinks">
                <div class="page_social_icons divided_content">
                    <span>
                        <a class="social-icon soc-facebook" href="#" title="Facebook"></a>
                    </span>
                    <span>
                        <a class="social-icon soc-twitter" href="#" title="Twitter"></a>
                    </span>
                    <span>
                        <a class="social-icon soc-google" href="#" title="Google"></a>
                    </span>
                    <span>
                        <a class="social-icon soc-linkedin" href="#" title="LinkedIn"></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>