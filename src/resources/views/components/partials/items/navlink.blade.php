<li class="nav-item">
    <a href="{{ route("{$route}") }}"
        class="nav-link {{ request()->route()->getName() == "{$route}" ? 'active ' . ($bg ?? '') : '' }}{{ str_replace('.', '-', $route) ?? '' }}">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $label }}
        </p>
    </a>
</li>