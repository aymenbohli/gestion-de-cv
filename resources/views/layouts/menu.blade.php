<li class="{{ Request::is('domaines*') ? 'active' : '' }}">
    <a href="{!! route('admin.domaines.index') !!}"><i class="fa fa-home"></i><span>Tableau de bord</span></a>
</li>
<li class="{{ Request::is('domaines*') ? 'active' : '' }}">
    <a href="{!! route('admin.domaines.index') !!}"><i class="fa fa-list"></i><span>domaines</span></a>
</li>

<li class="{{ Request::is('competences*') ? 'active' : '' }}">
    <a href="{!! route('admin.competences.index') !!}"><i class="fa fa-free-code-camp"></i><span>competences</span></a>
</li>

<li class="{{ Request::is('centreinterets*') ? 'active' : '' }}">
    <a href="{!! route('admin.centreinterets.index') !!}"><i class="fa fa-shower"></i><span>centreinterets</span></a>
</li>

<li class="{{ Request::is('experiences*') ? 'active' : '' }}">
    <a href="{!! route('admin.experiences.index') !!}"><i class="fa fa-thumbs-o-up"></i><span>experiences</span></a>
</li>

<li class="{{ Request::is('formations*') ? 'active' : '' }}">
    <a href="{!! route('admin.formations.index') !!}"><i class="fa fa-id-card"></i><span>formations</span></a>
</li>

<li class="{{ Request::is('offretravails*') ? 'active' : '' }}">
    <a href="{!! route('admin.offretravails.index') !!}"><i class="fa fa-leanpub"></i><span>offretravails</span></a>
</li>

<li class="{{ Request::is('entretiens*') ? 'active' : '' }}">
    <a href="{!! route('admin.entretiens.index') !!}"><i class="fa fa-arrows-h"></i><span>entretiens</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('admin.users.index') !!}"><i class="fa fa-users"></i><span>users</span></a>
</li>

