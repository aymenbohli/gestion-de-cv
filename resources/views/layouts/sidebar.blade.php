<li>
    <a href="/home"><i class="fa fa-home"></i><span>Tableau de bord</span></a>
</li>
@if(Auth::user()->hasRole('clt'))
<li class="has-sub">
    <a href="{!! route('admin.competences.index') !!}"><i class="fa fa-image"></i><span>Competences</span></a>
    <ul>
        <li>
            <a href="{!! route('admin.competences.create') !!}">
                <span>Ajouter</span>
            </a>
        </li>
        <li>
            <a href="{!! route('admin.competences.index') !!}">
                <span>Liste</span>
            </a>
        </li>
    </ul>
</li>

<li class="has-sub">
    <a href="{!! route('admin.centreinterets.index') !!}"><i class="fa fa-sliders"></i><span>Centre Interets</span></a>
    <ul>
        <li>
            <a href="{!! route('admin.centreinterets.create') !!}">
                <span>Ajouter</span>
            </a>
        </li>
        <li>
            <a href="{!! route('admin.centreinterets.index') !!}">
                <span>Liste</span>
            </a>
        </li>
    </ul>
</li>
<li class="has-sub">
    <a href="{!! route('admin.experiences.index') !!}"><i class="fa fa-flask"></i><span>Experiences</span></a>
    <ul>
        <li>
            <a href="{!! route('admin.experiences.create') !!}">
                <span>Ajouter</span>
            </a>
        </li>
        <li>
            <a href="{!! route('admin.experiences.index') !!}">
                <span>Liste</span>
            </a>
        </li>
    </ul>
</li>
<li class="has-sub">
    <a href="{!! route('admin.formations.index') !!}"><i class="fa fa-columns"></i><span>formations</span></a>
    <ul>
        <li>
            <a href="{!! route('admin.formations.create') !!}">
                <span>Ajouter</span>
            </a>
        </li>
        <li>
            <a href="{!! route('admin.formations.index') !!}">
                <span>Liste</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="{!! route('admin.cv') !!}"><i class="fa fa-columns"></i><span>Mon CV</span></a>
</li>

<li>
    <a href="{!! route('admin.entretien') !!}"><i class="fa fa-columns"></i><span>Entretien</span></a>
</li>

 


 @elseif(Auth::user()->hasRole('company'))
<li class="has-sub"> 
    <a href="{!! route('admin.entretiens.index') !!}"><i class="fa fa-arrows-h"></i><span>Entretiens</span></a>
    <ul>
        <li>
            <a href="{!! route('admin.entretiens.create') !!}">
                <span>Ajouter</span>
            </a>
        </li>
        <li>
            <a href="{!! route('admin.entretiens.index') !!}">
                <span>Liste</span>
            </a>
        </li>
    </ul>
</li>

<li class="has-sub">
    <a href="{!! route('admin.offretravails.index') !!}"><i class="fa fa-leanpub"></i><span>Offre Travails</span></a>
    <ul>
        <li>
            <a href="{!! route('admin.offretravails.create') !!}">
                <span>Ajouter</span>
            </a>
        </li>
        <li>
            <a href="{!! route('admin.offretravails.index') !!}">
                <span>Liste</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a href="{!! route('admin.allcv') !!}"><i class="fa fa-list"></i><span>Rechercher les cv</span></a>
</li>
@else
<li class="has-sub">
    <a href="{!! route('admin.users.index') !!}"><i class="fa fa-users"></i><span>users</span></a>
    <ul>
        <li>
            <a href="{!! route('admin.users.create') !!}">
                <span>Ajouter Admin</span>
            </a>
        </li>
        <li>
            <a href="{!! route('admin.users.index') !!}">
                <span>Liste</span>
            </a>
        </li>
    </ul>
</li>
<li class="has-sub">
    <a href="{!! route('admin.domaines.index') !!}"><i class="fa fa-list"></i><span>Domaines</span></a>
    <ul>
        <li>
            <a href="{!! route('admin.domaines.create') !!}">
                <span>Ajouter</span>
            </a>
        </li>
        <li>
            <a href="{!! route('admin.domaines.index') !!}">
                <span>Liste</span>
            </a>
        </li>
    </ul>
</li>



@endif 