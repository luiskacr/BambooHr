<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>


<li class="divider"></li>
<li class="nav-title">Empleados</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('deparment') }}'><i class='nav-icon la la-building'></i> Departamentos</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('employee') }}'><i class='nav-icon la la-user'></i> Empleados</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('employee-history') }}'><i class='nav-icon la la-question'></i> Employee histories</a></li>


<li class="divider"></li>
<li class="nav-title">Perfiles</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('person') }}'><i class='nav-icon la la-user-plus'></i> Personas</a></li>


<li class="divider"></li>
<li class="nav-title">Concursos</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('job-offers') }}'><i class='nav-icon la la-suitcase'></i> Carteles</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('contests') }}'><i class='nav-icon la la-user-tag'></i> Concursantes</a></li>


<li class="divider"></li>
<li class="nav-title">Configuracion</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-users'></i> Usuarios</a></li>
