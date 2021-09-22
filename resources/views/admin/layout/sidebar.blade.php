<div class="sidebar-wrapper sidebar-theme">
            
    <nav id="sidebar">
        <div class="shadow-bottom"></div>

        <ul class="list-unstyled menu-categories ps" id="accordionExample">
            <li class="menu">
                <a href="{{ route('dashboard') }}" data-active="{{ set_true('dashboard') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span> Dashboard</span>
                    </div>
                </a>
            </li>
            

            @if(user_akses2('penduduk',Session()->get('level'))->view ?? 0 =='1' OR user_akses2('dusun',Session()->get('level'))->view ?? 0 =='1')
                <li class="menu">

                    <a href="#kelola" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">

                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                            <span> Desa {{ $desa->nama_desa }}</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>

                    <ul class="collapse submenu list-unstyled {{ set_show('dusun.index') }} {{ set_show('dusun.create') }} {{ set_show('dusun.edit') }} {{ set_show('penduduk.index') }} {{ set_show('penduduk.create') }} {{ set_show('penduduk.edit') }}" id="kelola" data-parent="#accordionExample">

                        @if(user_akses2('penduduk',Session()->get('level'))->view ?? 0 =='1')    
                        <li class="{{ set_active('penduduk.index') }} {{ set_active('penduduk.create') }} {{ set_active('penduduk.edit') }}">
                            <a href="{{ route('penduduk.index') }}"> Kelola Penduduk </a>
                        </li>
                        @endif
                        
                        @if(user_akses2('dusun',Session()->get('level'))->view ?? 0 =='1')  
                        <li class="{{ set_active('dusun.index') }} {{ set_active('dusun.create') }} {{ set_active('dusun.edit') }}">
                            <a href="{{ route('dusun.index') }}"> Kelolah Dusun </a>
                        </li>
                        @endif         

                    </ul>
                </li>
            @endif
            
           

            @if(user_akses2('desa',Session()->get('level'))->update ?? 0 =='1' OR user_akses2('config',Session()->get('level'))->update ?? 0 =='1' OR user_akses2('slider',Session()->get('level'))->view ?? 0 =='1')

                <li class="menu">

                    <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">

                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span> Profile Desa</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>

                    <ul class="collapse submenu list-unstyled {{ set_show('desa.index') }} {{ set_show('configuration.index') }} {{ set_show('slider.index') }} {{ set_show('slider.create') }} {{ set_show('slider.edit') }}" id="profile" data-parent="#accordionExample">

                        @if(user_akses2('desa',Session()->get('level'))->update ?? 0 =='1')    
                        <li class="{{ set_active('desa.index') }}">
                            <a href="{{ route('desa.index') }}"> Kelola Profile </a>
                        </li>
                        @endif
                        
                        @if(user_akses2('config',Session()->get('level'))->update ?? 0 =='1')  
                        <li class="{{ set_active('configuration.index') }}">
                            <a href="{{ route('configuration.index') }}"> Kelolah Config </a>
                        </li>
                        @endif         
                        @if(user_akses2('slider',Session()->get('level'))->view ?? 0 =='1')  
                        <li class="{{ set_active('slider.index') }} {{ set_active('slider.create') }} {{ set_active('slider.edit') }}">
                            <a href="{{ route('slider.index') }}"> Kelolah Slider </a>
                        </li>
                        @endif         

                    </ul>
                </li>
            @endif



            @if(user_akses2('user',Session()->get('level'))->view ?? 0 =='1' OR user_akses2('roles',Session()->get('level'))->view ?? 0 =='1')
                <li class="menu">
                    <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                            <span> Setting Website</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ set_show('user.index') }} {{ set_show('user.create') }} {{ set_show('user.edit') }} {{ set_show('role.index') }} {{ set_show('role.create') }} {{ set_show('role.edit') }} {{ set_show('role.access') }}" id="submenu" data-parent="#accordionExample">

                        @if(user_akses2('user',Session()->get('level'))->view ?? 0 =='1')    
                        <li class="{{ set_active('user.index') }} {{ set_active('user.create') }} {{ set_active('user.edit') }}">
                            <a href="{{ route('user.index') }}"> User Akun </a>
                        </li>
                        @endif
                        
                        @if(user_akses2('roles',Session()->get('level'))->view ?? 0 =='1')  
                        <li class="{{ set_active('role.index') }} {{ set_active('role.create') }} {{ set_active('role.edit') }} {{ set_active('role.access') }}">
                            <a href="{{ route('role.index') }}"> Role Akses </a>
                        </li>
                        @endif         

                    </ul>
                </li>
            @endif

            {{-- <li class="menu">
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                        <span> Menu 3</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="submenu2" data-parent="#accordionExample">
                    <li>
                        <a href="javascript:void(0);"> Submenu 1 </a>
                    </li>
                    <li>
                        <a href="#sm2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Submenu 2 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="sm2" data-parent="#submenu2"> 
                            <li>
                                <a href="javascript:void(0);"> Sub-Submenu 1 </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Sub-Submenu 2 </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Sub-Submenu 3 </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
        </ul>
        
    </nav>

</div>