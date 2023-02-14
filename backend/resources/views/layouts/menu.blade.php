
<li class="nav-item">
    <a href="{{ route('contacts.index') }}" class="nav-link {{ Request::is('contacts*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Contacts</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('phones.index') }}" class="nav-link {{ Request::is('phones*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Phones</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('contactPhones.index') }}" class="nav-link {{ Request::is('contactPhones*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Contact Phones</p>
    </a>
</li>
