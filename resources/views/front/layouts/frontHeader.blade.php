<div class="main-header">
    <h5 class="head-title mt-0">
        Dashboard
    </h5>
    <div>
        <nav class="nav align-items-center">

            <li class="nav-item d-none">
                <div class="workspace-info-wrap">
                    <div class="btn-drop workspace-info-inner" data-target="#workspace-dropdown">
                        <img class="workspace-img" src="/front/icons/dry-clean.svg" alt="workspace icon">
                        <div>
                            <div class="title">Workspace</div>
                            <div class="workspace-name">New Business Link</div>
                        </div>
                    </div>

                    <div class="workspace-options" id="workspace-dropdown">
                        <div class="form-search-workspace">
                            <input type="text" class="form-control no-shadow" name="" id=""
                                placeholder="Find Workspace">
                            <button class="btn btn-search">
                                <i class="flaticon-search icons search-icon"></i>
                            </button>
                        </div>
                        <div class="workspace-list">
                            <div class="workspace-list-item">
                                <div class="workspace-name">
                                    <img src="/front/icons/dry-clean.svg" alt="">
                                    Kevin Hart
                                </div>
                                <div class="workspace-status">
                                    Active
                                    <i class="flaticon-check-mark icons"></i>
                                </div>
                            </div>
                        </div>
                        <div class="workspace-option-foot">
                            <a class="btn btn-block" href="workspace.html">
                                <i class="flaticon-plus icons icon-all-workspace"></i>
                                New workspace
                            </a>
                            <a class="btn btn-block mt-0" href="workspace.html">
                                <i class="flaticon-workspace icons icon-all-workspace"></i>
                                All Workspace
                            </a>
                        </div>
                    </div>
                </div>
            
            </li>

            <li class="nav-item mr-2">
                <a class="nav-link" href="#">
                    <i class="flaticon-bell icons notif-icon"></i>
                </a>
            </li>

            <li class="nav-item">
                <div class="position-relative">
                    <div class="btn-drop workspace-info-inner" data-target="#profile-dropdown">
                        @if (Auth::user()->profile_picture == 'avatar.png')
                            <span class="workspace-img alt">{{ shortName(Auth::user()->name) }}</span>
                        @else
                            <img class="workspace-img" src="/front/icons/dry-clean.svg" alt="workspace icon"> 
                        @endif
                        
                        
                        <div>
                            <div class="title">{{ Auth::user()->name }}</div>
                            <div class="workspace-name">{{ Auth::user()->role }}</div>
                        </div>
                    </div>
                    <!---dropdown target--->
                    <div class="profile-option" id="profile-dropdown">
                        <div class="top-section">
                            <div class="user-info">
                                <div class="user-image">
                                    <img class="user-icon" src="/front/icons/dry-clean.svg" alt="">
                                </div>
                                <div class="username-wrap">
                                    <div class="name">
                                        ugo@gmail.com
                                    </div>
                                    <div class="desc">
                                        Account settings and more
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-section">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="flaticon-information-button icons dropdown-icons"></i>
                                        <div class="nav drop-items">
                                            <span class="text">Support</span>
                                            <span class="desc">Contact Support</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i
                                            class="flaticon-open-book icons dropdown-icons"></i>
                                        <div class="nav drop-items">
                                            <span class="text">Knowledge base</span>
                                            <span class="desc">Everything explained here</span>
                                        </div>

                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}">
                                        <i class="flaticon-exit icons dropdown-icons dropdown-icon-exit"></i>
                                        <span class="text-logout">Log Me Out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </nav>
    </div>
</div>