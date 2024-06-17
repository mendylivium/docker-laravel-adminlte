@props(['icon' => '', 'label' => '', 'route' => '','parent' => true])

@php
    $isActive = strpos( request()->route()->getName(),$route,) !==  false;
@endphp
<li class="nav-item {{ $isActive ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ $isActive ? 'active' : '' }}">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $label }}
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        {{ $slot }}
    </ul>
</li>