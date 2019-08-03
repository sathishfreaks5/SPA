<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ _('My') }}</a>
            <a href="#" class="simple-text logo-normal">{{ _('Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ _('Settings') }}</p>
                </a>
            </li>
            {{--
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Standard Managements') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ _('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            --}}


             <li>
                <a data-toggle="collapse" href="#Block-Managements" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Block Sections') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="Block-Managements">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'Logo Management') class="active " @endif>
                            <a href="{{ route('admin.blocks.standard.logo') }}">
                                <i class="tim-icons icon-chart-pie-36"></i>
                                <p>{{ _('Logo Management') }}</p>
                            </a>
                        </li>

                         <li @if ($pageSlug == 'Banner Management') class="active " @endif>
                            <a href="{{ route('banner-management.index') }}">
                                <i class="tim-icons icon-chart-pie-36"></i>
                                <p>{{ _('Banner Management') }}</p>
                            </a>
                        </li>

                       
                    </ul>
                </div> 
                
            </li> 


              <li>
                <a data-toggle="collapse" href="#Activity-Managements" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Activity Sections') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse show" id="Activity-Managements">
                    <ul class="nav pl-4">
                       

                        <li @if ($pageSlug == 'Promotion Management') class="active " @endif>
                            <a href="{{ route('promotion-management.index') }}">
                                <i class="tim-icons icon-chart-pie-36"></i>
                                <p>{{ _('Promotion Management') }}</p>
                            </a>
                        </li>
                        
                        <li @if ($pageSlug == 'Content Management') class="active " @endif>
                            <a href="{{ route('admin.blocks.activity.content') }}">
                                <i class="tim-icons icon-chart-pie-36"></i>
                                <p>{{ _('Content Management') }}</p>
                            </a>
                        </li>
                      
                         <li @if ($pageSlug == 'Clientele Management') class="active " @endif>
                            <a href="{{ route('admin.blocks.activity.clientele') }}">
                                <i class="tim-icons icon-chart-pie-36"></i>
                                <p>{{ _('Clientele Management') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            
        </ul>
    </div>
</div>
