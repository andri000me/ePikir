<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @foreach ($menu as $nav)
                @if ($nav['header'] != null)
                    <li class=" navigation-header">
                        <span>{{ $nav['header'] }}</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                            data-placement="right" data-original-title="{{ $nav['header'] }}"></i>
                    </li>
                @else
                    <li class="nav-item {{ $nav['index'] == $active ? 'active' : '' }}">
                        <a href="{{ $nav['url'] }}">
                            <i class="{{ $nav['icon'] }}"></i>
                            <span class="menu-title">{{ $nav['title'] }}</span>
                            @if (isset($nav['bubble']) && $nav['bubble'] != null)
                                @foreach ($bubble as $idx => $bub)
                                    @if (strpos($idx, $nav['bubble']) !== false)
                                        @if ($bub['count'] != null)
                                            <span class="badge badge badge-{{ $bub['color'] }} badge-pill float-right"
                                                style="position: relative;">{{ $bub['count'] }}</span>
                                        @endif
                                    @endif
                                @endforeach
                            @endif
                        </a>
                        @if ($nav['child'] != null)
                            <ul class="menu-content">
                                @foreach ($nav['child'] as $subnav)
                                    <li class="{{ $subnav['index'] == $active ? 'active' : '' }}">
                                        <a class="menu-item" href="{{ $subnav['url'] }}">
                                            {{ $subnav['title'] }}
                                            @if (isset($subnav['bubble']) && $subnav['bubble'] != null)
                                                @if ($bubble[$subnav['bubble']]['count'] != null)
                                                    <span
                                                        class="badge badge badge-{{ $bubble[$subnav['bubble']]['color'] }} badge-pill float-right">{{ $bubble[$subnav['bubble']]['count'] }}</span>
                                                @endif
                                            @endif
                                        </a>
                                        @if ($subnav['child'] != null)
                                            <ul class="menu-content">
                                                @foreach ($subnav['child'] as $item)
                                                    <li class="{{ $item['index'] == $active ? 'active' : '' }}">
                                                        <a class="menu-item" href="{{ $item['url'] }}">
                                                            {{ $item['title'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                    </li>
                @endif
            @endforeach

        </ul>
    </div>
</div>
