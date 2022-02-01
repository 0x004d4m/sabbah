<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
@if(backpack_user()->can('Manage Main'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('main') }}"><i class="la la-door-open nav-icon"></i> {{ trans('Main') }}</a></li>
@endif
@if(backpack_user()->can('Manage Section'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('section') }}"><i class="la la-bullseye nav-icon"></i> {{ trans('Section') }}</a></li>
@endif
@if(backpack_user()->can('Manage Feature'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('feature') }}"><i class="la la-lightbulb nav-icon"></i> {{ trans('Feature') }}</a></li>
@endif
@if(backpack_user()->can('Manage Service'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('service') }}"><i class="la la-bolt nav-icon"></i> {{ trans('Service') }}</a></li>
@endif
@if(backpack_user()->can('Manage Plan'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('plan') }}"><i class="la la-money nav-icon"></i> {{ trans('Plan') }}</a></li>
@endif
@if(backpack_user()->can('Manage Screenshot'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('screenshot') }}"><i class="la la-images nav-icon"></i> {{ trans('Screenshot') }}</a></li>
@endif
@if(backpack_user()->can('Manage Sponser'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('sponser') }}"><i class="la la-hands-helping nav-icon"></i> {{ trans('Sponser') }}</a></li>
@endif
@if(backpack_user()->can('Manage Expert'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('expert') }}"><i class="la la-user-tie nav-icon"></i> {{ trans('Expert') }}</a></li>
@endif
@if(backpack_user()->can('Manage Team'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('team') }}"><i class="la la-users nav-icon"></i> {{ trans('Team') }}</a></li>
@endif
@if(backpack_user()->can('Manage Video'))
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('video') }}"><i class="la la-video nav-icon"></i> {{ trans('Video') }}</a></li>
@endif
<li class="nav-item"><a class="nav-link" href="https://fontawesome.com/v5.9/icons?d=gallery&p=2" target="_blank"><i class="la la-icons nav-icon"></i> {{ trans('Browse Icons') }}</a></li>
@if(backpack_user()->can('Manage Auth'))
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        </ul>
    </li>
@endif
