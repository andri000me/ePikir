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
                                @if (isset($bubble[$nav['bubble']]))
                                    @if ($bubble[$nav['bubble']]['count'] != null)
                                        <span
                                            class="badge badge badge-{{ $bubble[$nav['bubble']]['color'] }} badge-pill float-right"
                                            style="position: relative;">{{ $bubble[$nav['bubble']]['count'] }}</span>
                                    @endif
                                @else
                                    @foreach ($bubble as $idx => $bub)
                                        @if (strpos($idx, $nav['bubble']) !== false)
                                            @if ($bub['count'] != null)
                                                <span
                                                    class="badge badge badge-{{ $bub['color'] }} badge-pill float-right"
                                                    style="position: relative;">{{ $bub['count'] }}</span>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            @endif
                        </a>
                        @if ($nav['child'] != null)
                            <ul class="menu-content">
                                @foreach ($nav['child'] as $subnav)
                                    <li class="{{ $subnav['index'] == $active ? 'active' : '' }}">
                                        <a class="menu-item" href="{{ $subnav['url'] }}"
                                            style="{{ isset($subnav['bubble']) && $subnav['bubble'] != null ? 'padding-right: 40px;' : '' }}">
                                            {{ $subnav['title'] }}
                                            @if (isset($subnav['bubble']))
                                                @if ($subnav['bubble'] != null)
                                                    @if (isset($bubble[$subnav['bubble']]))
                                                        @if ($bubble[$subnav['bubble']]['count'] != null)
                                                            <span
                                                                class="badge badge badge-{{ $bubble[$subnav['bubble']]['color'] }} badge-pill float-right">{{ $bubble[$subnav['bubble']]['count'] }}</span>
                                                        @endif
                                                    @else
                                                        @foreach ($bubble as $idx => $bub)
                                                            @if (strpos($idx, $subnav['bubble']) !== false)
                                                                @if ($bub['count'] != null)
                                                                    <span
                                                                        class="badge badge badge-{{ $bub['color'] }} badge-pill float-right"
                                                                        style="position: relative;">{{ $bub['count'] }}</span>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endif
                                            @endif
                                        </a>
                                        @if ($subnav['child'] != null)
                                            <ul class="menu-content">
                                                @foreach ($subnav['child'] as $item)
                                                    <li class="{{ $item['index'] == $active ? 'active' : '' }}">
                                                        <a class="menu-item" href="{{ $item['url'] }}">
                                                            {{ $item['title'] }}
                                                            @if (isset($item['bubble']) && $item['bubble'] != null)
                                                                @if ($item['bubble'] != null)
                                                                    @if (isset($bubble[$item['bubble']]))
                                                                        @if ($bubble[$item['bubble']]['count'] != null)
                                                                            <span
                                                                                class="badge badge badge-{{ $bubble[$item['bubble']]['color'] }} badge-pill float-right">{{ $bubble[$item['bubble']]['count'] }}</span>
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endif
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
