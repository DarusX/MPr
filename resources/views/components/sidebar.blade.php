
<aside class="menu is-dark">
    <p class="menu-label">
        Proyectos
    </p>
    @foreach($users as $user)
    <ul class="menu-list">
        <li>
            <a class="">{{$user->name}}</a>
            <ul>
                <li>
                    <a>Members</a>
                </li>
                <li>
                    <a>Plugins</a>
                </li>
                <li>
                    <a>Add a member</a>
                </li>
            </ul>
        </li>
    </ul>
    @endforeach
</aside>
