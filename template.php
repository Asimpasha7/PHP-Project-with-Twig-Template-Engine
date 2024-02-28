<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>My Dashboard</title>

        <!--[if lt IE 10]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="icon" href="./template_files/images/favicon.ico" type="image/x-icon" />

        <link href="./template_files/css" rel="stylesheet" />
        <link href="./template_files/css(1)" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="./template_files/bootstrap.min.css" />

        <link rel="stylesheet" href="./template_files/waves.min.css" type="text/css" media="all" />

        <link rel="stylesheet" type="text/css" href="./template_files/feather.css" />

        <link rel="stylesheet" type="text/css" href="./template_files/font-awesome-n.min.css" />

        <link rel="stylesheet" href="./template_files/chartist.css" type="text/css" media="all" />

        <link rel="stylesheet" type="text/css" href="./template_files/style.css" />
        <link rel="stylesheet" type="text/css" href="./template_files/widget.css" />


		<!-- Resources -->
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    </head>
    <body themebg-pattern="theme1" data-new-gr-c-s-check-loaded="14.1156.0" data-gr-ext-installed="">
        <div class="loader-bg" style="display: none;">
            <div class="loader-bar"></div>
        </div>

        <div
            id="pcoded"
            class="pcoded iscollapsed"
            nav-type="st2"
            theme-layout="vertical"
            vertical-placement="left"
            vertical-layout="wide"
            pcoded-device-type="desktop"
            vertical-nav-type="offcanvas"
            vertical-effect="shrink"
            vnavigation-view="view1"
            fream-type="theme1"
            layout-type="light"
        >
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header iscollapsed" header-theme="themelight1" pcoded-header-position="fixed">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo" logo-theme="theme6">
                            <a href="#">
                                <img class="img-fluid" src="./template_files/logo.png" alt="Theme-Logo" />
                            </a>
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="feather icon-menu icon-toggle-left"></i>
                            </a>
                            <a class="mobile-options waves-effect waves-light">
                                <i class="feather icon-more-horizontal"></i>
                            </a>
                        </div>
                        <div class="navbar-container container-fluid">
                            <ul class="nav-left">
                                <li class="header-search">
                                    <div class="main-search morphsearch-search">
                                        <div class="input-group">
                                            <span class="input-group-prepend search-close">
                                                <i class="feather icon-x input-group-text"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Enter Keyword" />
                                            <span class="input-group-append search-btn">
                                                <i class="feather icon-search input-group-text"></i>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                        <i class="full-screen feather icon-maximize"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav-right">
                                <li class="header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="feather icon-bell"></i>
                                            <span class="badge bg-c-red">5</span>
                                        </div>
                                        <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <li>
                                                <h6>Notifications</h6>
                                                <label class="label label-danger">New</label>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="img-radius" src="./template_files/avatar-4.jpg" alt="Generic placeholder image" />
                                                    <div class="media-body">
                                                        <h5 class="notification-user">John Doe</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="img-radius" src="./template_files/avatar-3.jpg" alt="Generic placeholder image" />
                                                    <div class="media-body">
                                                        <h5 class="notification-user">Joseph William</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="img-radius" src="./template_files/avatar-4.jpg" alt="Generic placeholder image" />
                                                    <div class="media-body">
                                                        <h5 class="notification-user">Sara Soudein</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                            <i class="feather icon-message-square"></i>
                                            <span class="badge bg-c-green">3</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="user-profile header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="./template_files/avatar-4.jpg" class="img-radius" alt="User-Profile-Image" />
                                            <span>John Doe</span>
                                            <i class="feather icon-chevron-down"></i>
                                        </div>
                                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <li>
                                                <a href="#!"> <i class="feather icon-settings"></i> Settings </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="feather icon-user"></i> Profile </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="feather icon-mail"></i> My Messages </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="feather icon-lock"></i> Lock Screen </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="feather icon-log-out"></i> Logout </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div id="sidebar" class="users p-chat-user showChat">
                    <div class="had-container">
                        <div class="p-fixed users-main">
                            <div class="user-box">
                                <div class="chat-search-box">
                                    <a class="back_friendlist">
                                        <i class="feather icon-x"></i>
                                    </a>
                                    <div class="right-icon-control">
                                        <div class="input-group input-group-button">
                                            <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend" />
                                            <div class="input-group-append">
                                                <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 519px;">
                                    <div class="main-friend-list" style="overflow: hidden; width: auto; height: 519px;">
                                        <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                                            <a class="media-left" href="#!">
                                                <img class="media-object img-radius img-radius" src="./template_files/avatar-3.jpg" alt="Generic placeholder image " />
                                                <div class="live-status bg-success"></div>
                                            </a>
                                            <div class="media-body">
                                                <div class="chat-header">Josephin Doe</div>
                                            </div>
                                        </div>
                                        <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                                            <a class="media-left" href="#!">
                                                <img class="media-object img-radius" src="./template_files/avatar-2.jpg" alt="Generic placeholder image" />
                                                <div class="live-status bg-success"></div>
                                            </a>
                                            <div class="media-body">
                                                <div class="f-13 chat-header">Lary Doe</div>
                                            </div>
                                        </div>
                                        <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                                            <a class="media-left" href="#!">
                                                <img class="media-object img-radius" src="./template_files/avatar-4.jpg" alt="Generic placeholder image" />
                                                <div class="live-status bg-success"></div>
                                            </a>
                                            <div class="media-body">
                                                <div class="f-13 chat-header">Alice</div>
                                            </div>
                                        </div>
                                        <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                                            <a class="media-left" href="#!">
                                                <img class="media-object img-radius" src="./template_files/avatar-3.jpg" alt="Generic placeholder image" />
                                                <div class="live-status bg-default"></div>
                                            </a>
                                            <div class="media-body">
                                                <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                                            </div>
                                        </div>
                                        <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                                            <a class="media-left" href="#!">
                                                <img class="media-object img-radius" src="./template_files/avatar-2.jpg" alt="Generic placeholder image" />
                                                <div class="live-status bg-default"></div>
                                            </a>
                                            <div class="media-body">
                                                <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                                    <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="showChat_inner">
                    <div class="media chat-inner-header">
                        <a class="back_chatBox"> <i class="feather icon-x"></i> Josephin Doe </a>
                    </div>
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 444px;">
                        <div class="main-friend-chat" style="overflow: hidden; width: auto; height: 444px;">
                            <div class="media chat-messages">
                                <a class="media-left photo-table" href="#!">
                                    <img class="media-object img-radius img-radius m-t-5" src="./template_files/avatar-2.jpg" alt="Generic placeholder image" />
                                </a>
                                <div class="media-body chat-menu-content">
                                    <div class="">
                                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                                    </div>
                                    <p class="chat-time">8:20 a.m.</p>
                                </div>
                            </div>
                            <div class="media chat-messages">
                                <div class="media-body chat-menu-reply">
                                    <div class="">
                                        <p class="chat-cont">Ohh! very nice</p>
                                    </div>
                                    <p class="chat-time">8:22 a.m.</p>
                                </div>
                            </div>
                            <div class="media chat-messages">
                                <a class="media-left photo-table" href="#!">
                                    <img class="media-object img-radius img-radius m-t-5" src="./template_files/avatar-2.jpg" alt="Generic placeholder image" />
                                </a>
                                <div class="media-body chat-menu-content">
                                    <div class="">
                                        <p class="chat-cont">can you come with me?</p>
                                    </div>
                                    <p class="chat-time">8:20 a.m.</p>
                                </div>
                            </div>
                        </div>
                        <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
                        <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                    </div>
                    <div class="chat-reply-box">
                        <div class="right-icon-control">
                            <div class="input-group input-group-button">
                                <input type="text" class="form-control" placeholder="Write hear . . " />
                                <div class="input-group-append">
                                    <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pcoded-main-container" style="margin-top: 73px;">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar" style="display:none!Important;" navbar-theme="theme1" active-item-theme="theme1" sub-item-theme="theme2" active-item-style="style0" pcoded-navbar-position="fixed">
                            <div class="nav-list">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: 100%;">
                                    <div class="pcoded-inner-navbar main-menu" style="overflow: hidden; width: 100%; height: 100%;">
                                        <div class="pcoded-navigation-label" menu-title-theme="theme1">Navigation</div>
                                        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="solid" subitem-border="false">
                                            <li class="pcoded-hasmenu active" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                                    <span class="pcoded-mtext">Dashboard</span>
                                                </a>
                                                <ul class="pcoded-submenu" style="display: none;">
                                                    <li class="active">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Default</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">CRM</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Analytics</span>
                                                            <span class="pcoded-badge label label-info">NEW</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                                    <span class="pcoded-mtext">Page layouts</span>
                                                    <span class="pcoded-badge label label-warning">NEW</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Vertical</span>
                                                        </a>
                                                        <ul class="pcoded-submenu">
                                                            <li class="">
                                                                <a href="#" class="waves-effect waves-dark">
                                                                    <span class="pcoded-mtext">Static Layout</span>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#" class="waves-effect waves-dark">
                                                                    <span class="pcoded-mtext">Header Fixed</span>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#" class="waves-effect waves-dark">
                                                                    <span class="pcoded-mtext">Compact</span>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#" class="waves-effect waves-dark">
                                                                    <span class="pcoded-mtext">Sidebar Fixed</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Horizontal</span>
                                                        </a>
                                                        <ul class="pcoded-submenu">
                                                            <li class="">
                                                                <a href="#" target="_blank" class="waves-effect waves-dark">
                                                                    <span class="pcoded-mtext">Static Layout</span>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#" target="_blank" class="waves-effect waves-dark">
                                                                    <span class="pcoded-mtext">Fixed layout</span>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#" target="_blank" class="waves-effect waves-dark">
                                                                    <span class="pcoded-mtext">Static With Icon</span>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#" target="_blank" class="waves-effect waves-dark">
                                                                    <span class="pcoded-mtext">Fixed With Icon</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Bottom Menu</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-menu"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Navigation</span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-layers"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Widget</span>
                                                    <span class="pcoded-badge label label-danger">100+</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Statistic</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Data</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Chart Widget</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="pcoded-navigation-label" menu-title-theme="theme1">UI Element</div>
                                        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="solid" subitem-border="false">
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-box"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Basic</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Alert</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Breadcrumbs</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Button</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Box-Shadow</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Accordion</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Generic Class</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Tabs</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Color</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Label Badge</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Progress Bar</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">List</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Tooltip And Popover</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Typography</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Other</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-gitlab"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Advance</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Draggable</span>
                                                        </a>
                                                    </li>

                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Modal</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Notifications</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Rating</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Range Slider</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Slider</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Syntax Highlighter</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Tour</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Tree View</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Nestable</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Toolbar</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-package"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Extra</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Session Timeout</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Session Idle Timeout</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Offline</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-aperture rotate-refresh"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Animations</span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-command"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Icons</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Font Awesome</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Themify</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Simple Line Icon</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="pcoded-navigation-label" menu-title-theme="theme1">Forms</div>
                                        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="solid" subitem-border="false">
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-clipboard"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Form</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Components</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Add-On</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Advance</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Validation</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-edit-1"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Form Picker</span>
                                                    <span class="pcoded-badge label label-warning">NEW</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-feather"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Form Select</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-shield"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Form Masking</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-tv"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Form Wizard</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="pcoded-navigation-label" menu-title-theme="theme1">Tables</div>
                                        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="solid" subitem-border="false">
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-credit-card"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Bootstrap Table</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Basic Table</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Sizing Table</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Border Table</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Styling Table</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-inbox"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Data Table</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Basic Initialization</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Advance Initialization</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Styling</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">API</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Ajax</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Server Side</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Plug-In</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Data Sources</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-server"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">DT Extensions</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">AutoFill</span>
                                                        </a>
                                                    </li>
                                                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Button</span>
                                                        </a>
                                                        <ul class="pcoded-submenu">
                                                            <li class="">
                                                                <a href="#" class="waves-effect waves-dark">
                                                                    <span class="pcoded-mtext">Basic Button</span>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#" class="waves-effect waves-dark">
                                                                    <span class="pcoded-mtext">Data Export</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Col Reorder</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Fixed Columns</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Fixed Header</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Key Table</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Responsive</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Row Reorder</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Scroller</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Select Table</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-hash"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">FooTable</span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-airplay"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Handson Table</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Appearance</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Data Operation</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Rows Columns</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Columns Only</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Cell Features</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Cell Types</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Integrations</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Rows Only</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Utilities</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-edit"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Editable Table</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="pcoded-navigation-label" menu-title-theme="theme1">Chart And Maps</div>
                                        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="solid" subitem-border="false">
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-pie-chart"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Charts</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Google Chart</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">ChartJs</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">List Chart</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Float Chart</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Knob chart</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Morris Chart</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Nvd3 Chart</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Peity Chart</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Radial Chart</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Rickshaw Chart</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Sparkline Chart</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">C3 Chart</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-map"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Maps</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Google Maps</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Vector Maps</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Google Map Search API</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Location</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="pcoded-navigation-label" menu-title-theme="theme1">Pages</div>
                                        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="solid" subitem-border="false">
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-unlock"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Authentication</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Login</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Registration</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" target="_blank" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Forgot Password</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" target="_blank" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Lock Screen</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-sliders"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Maintenance</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Error</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Comming Soon</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Offline UI</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-mail"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Email</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Compose Email</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Inbox</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Read Mail</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="pcoded-navigation-label" menu-title-theme="theme1">App</div>
                                        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="solid" subitem-border="false">
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-bookmark"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">To-Do</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="pcoded-navigation-label" menu-title-theme="theme1">Extension</div>
                                        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="solid" subitem-border="false">
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-file-plus"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Editor</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">CK-Editor</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">WYSIWYG Editor</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-calendar"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Event Calendar</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Full Calendar</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">CLNDER</span>
                                                            <span class="pcoded-badge label label-info">NEW</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-scissors"></i>
                                                        <b>IC</b>
                                                    </span>
                                                    <span class="pcoded-mtext">Image Cropper</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-upload-cloud"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">File Upload</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-briefcase"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Change Loges</span>
                                                    <span class="pcoded-badge label label-warning">1.0</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="pcoded-navigation-label" menu-title-theme="theme1">Other</div>
                                        <ul class="pcoded-item pcoded-left-item" item-border="true" item-border-style="solid" subitem-border="false">
                                            <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-list"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Menu Levels</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Menu Level 2.1</span>
                                                        </a>
                                                    </li>
                                                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Menu Level 2.2</span>
                                                        </a>
                                                        <ul class="pcoded-submenu">
                                                            <li class="">
                                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                                    <span class="pcoded-mtext">Menu Level 3.1</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Menu Level 2.3</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="javascript:void(0)" class="disabled waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-power"></i>
                                                        <b>D</b>
                                                    </span>
                                                    <span class="pcoded-mtext">Disabled Menu</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="waves-effect waves-dark">
                                                    <span class="pcoded-micon">
                                                        <i class="feather icon-watch"></i>
                                                    </span>
                                                    <span class="pcoded-mtext">Sample Page</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 124.873px;"></div>
                                    <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                                </div>
                            </div>
                        </nav>

                        <div class="pcoded-content" style="margin-left:0px!important;">
                            <div class="page-header card">
                                <div class="row align-items-end">
                                    <div class="col-lg-8">
                                        <div class="page-header-title">
                                            <i class="feather icon-home bg-c-blue"></i>
                                            <div class="d-inline">
                                                <h5>Dashboard</h5>
                                                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="#"><i class="feather icon-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <div class="page-body">

                                            <div class="row">
                                                <div class="col-md-12 col-xl-8">
                                                    <div class="card sale-card">
                                                        <div class="card-header">
                                                            <h5>{{ widgetData1.title }}</h5>
                                                        </div>
                                                        <div class="card-block">
                                                            <div id="sales-analytics" class="chart-shadow" style="height: 380px; overflow: hidden; text-align: left;"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-xl-4">
                                                    {% for item in widgetData1.summary %}
                                                        <div class="card comp-card">
                                                            <div class="card-body">
                                                                <div class="row align-items-center">
                                                                    <div class="col">
                                                                        <h6 class="m-b-25">{{ item.title }}</h6>
                                                                        <h3 class="f-w-700 text-c-blue">{{ item.value }}</h3>
                                                                        <p class="m-b-0">{{ item.duration }} ({{ item.year }})</p>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        {% if item.title == "Impressions" %}
                                                                            <i class="fas fa-eye bg-c-blue"></i>
                                                                        {% elseif item.title == "Goal" %}
                                                                            <i class="fas fa-bullseye bg-c-green"></i>
                                                                        {% elseif item.title == "Impact" %}
                                                                            <i class="fas fa-hand-paper bg-c-yellow"></i>
                                                                        {% endif %}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {% endfor %}
                                                </div>

                                                <!-- Published Project -->
                                                <div class="col-xl-12">
                                                    <div class="card proj-progress-card">
                                                        <div class="card-block">
                                                            <div class="row">
                                                                {% for item in widgetData2.project_progress_summary %}
                                                                    <div class="col-xl-3 col-md-6">
                                                                        <h6>{{ item.title }}</h6>
                                                                        <h5 class="m-b-30 f-w-700">{{ item.value }}<span class="{% if item.percentage | first == '+' %}text-c-green{% elseif item.percentage | first == '-' %}text-c-red{% else %}text-c-blue{% endif %} m-l-10">{{ item.percentage }}</span></h5>
                                                                        <div class="progress">
                                                                            <div class="progress-bar {% if item.percentage | first == '+' %}bg-c-green{% elseif item.percentage | first == '-' %}bg-c-red{% else %}bg-c-blue{% endif %}" style="width: {{ item.percentage | trim('%') }};"></div>
                                                                        </div>
                                                                    </div>
                                                                {% endfor %}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-xl-4">
                                                    <div class="card card-blue text-white">
                                                        <div class="card-block p-b-0">
                                                            <div class="row m-b-50">
                                                                <div class="col">
                                                                    <h6 class="m-b-5">Sales In July</h6>
                                                                    <h5 class="m-b-0 f-w-700">$2665.00</h5>
                                                                </div>
                                                                <div class="col-auto text-center">
                                                                    <p class="m-b-5">Direct Sale</p>
                                                                    <h6 class="m-b-0">$1768</h6>
                                                                </div>
                                                                <div class="col-auto text-center">
                                                                    <p class="m-b-5">Referal</p>
                                                                    <h6 class="m-b-0">$897</h6>
                                                                </div>
                                                            </div>
                                                            <div id="sec-ecommerce-chart-line" class="" style="height: 60px; padding: 0px; position: relative;">
                                                                <canvas class="flot-base" width="367" height="60" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 367px; height: 60px;"></canvas>
                                                                <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                                                    <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                                                                        <div style="position: absolute; max-width: 52px; top: 60px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 8px; text-align: center;">0.0</div>
                                                                        <div style="position: absolute; max-width: 52px; top: 60px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 71px; text-align: center;">2.5</div>
                                                                        <div style="position: absolute; max-width: 52px; top: 60px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 133px; text-align: center;">5.0</div>
                                                                        <div style="position: absolute; max-width: 52px; top: 60px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 196px; text-align: center;">7.5</div>
                                                                        <div style="position: absolute; max-width: 52px; top: 60px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 259px; text-align: center;">
                                                                            10.0
                                                                        </div>
                                                                        <div style="position: absolute; max-width: 52px; top: 60px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 321px; text-align: center;">
                                                                            12.5
                                                                        </div>
                                                                    </div>
                                                                    <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                                                                        <div style="position: absolute; top: 52px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 0px; text-align: right;">0</div>
                                                                        <div style="position: absolute; top: 37px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 0px; text-align: right;">10</div>
                                                                        <div style="position: absolute; top: 23px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 0px; text-align: right;">20</div>
                                                                        <div style="position: absolute; top: 8px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 0px; text-align: right;">30</div>
                                                                    </div>
                                                                </div>
                                                                <canvas class="flot-overlay" width="367" height="60" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 367px; height: 60px;"></canvas>
                                                            </div>
                                                            <div id="sec-ecommerce-chart-bar" style="height: 195px; padding: 0px; position: relative;">
                                                                <canvas class="flot-base" width="367" height="195" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 367px; height: 195px;"></canvas>
                                                                <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                                                    <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                                                                        <div style="position: absolute; max-width: 45px; top: 195px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 8px; text-align: center;">0.0</div>
                                                                        <div style="position: absolute; max-width: 45px; top: 195px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 70px; text-align: center;">2.5</div>
                                                                        <div style="position: absolute; max-width: 45px; top: 195px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 133px; text-align: center;">
                                                                            5.0
                                                                        </div>
                                                                        <div style="position: absolute; max-width: 45px; top: 195px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 196px; text-align: center;">
                                                                            7.5
                                                                        </div>
                                                                        <div style="position: absolute; max-width: 45px; top: 195px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 259px; text-align: center;">
                                                                            10.0
                                                                        </div>
                                                                        <div style="position: absolute; max-width: 45px; top: 195px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 322px; text-align: center;">
                                                                            12.5
                                                                        </div>
                                                                    </div>
                                                                    <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                                                                        <div style="position: absolute; top: 195px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 0px; text-align: right;">0</div>
                                                                        <div style="position: absolute; top: 163px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 0px; text-align: right;">5</div>
                                                                        <div style="position: absolute; top: 130px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 0px; text-align: right;">10</div>
                                                                        <div style="position: absolute; top: 98px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 0px; text-align: right;">15</div>
                                                                        <div style="position: absolute; top: 65px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 0px; text-align: right;">20</div>
                                                                        <div style="position: absolute; top: 33px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 0px; text-align: right;">25</div>
                                                                        <div style="position: absolute; top: 0px; font: 400 0px / 0px 'open sans', sans-serif; color: transparent; left: 0px; text-align: right;">30</div>
                                                                    </div>
                                                                </div>
                                                                <canvas class="flot-overlay" width="367" height="195" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 367px; height: 195px;"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- What’s New -->
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card latest-update-card">
                                                        <div class="card-header">
                                                            <h5>What’s New</h5>
                                                            <div class="card-header-right">
                                                                <ul class="list-unstyled card-option">
                                                                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                                                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                                    <li><i class="feather icon-trash close-card"></i></li>
                                                                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 290px;">
                                                                <div class="scroll-widget" style="overflow: hidden; width: auto; height: 290px;">
                                                                    <div class="latest-update-box">
                                                                        {% for item in widgetData3.what_new_items %}
                                                                            <div class="row p-t-20 p-b-30">
                                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                                    {% if 'Your Manager Posted.' in item.message %}
                                                                                        <!-- <i class="feather icon-check f-w-600 bg-c-green update-icon"></i> -->
                                                                                        <img src="./template_files/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon" />

                                                                                    {% elseif 'You have 3 pending Task.' in item.message %}
                                                                                        <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                                                    {% elseif 'New Order Received.' in item.message %}
                                                                                        <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                                                    {% else %}
                                                                                        <img src="./template_files/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon" />
                                                                                    {% endif %}
                                                                                </div>
                                                                                <div class="col p-l-5">
                                                                                    <a href="#!"><h6>{{ item.message }}</h6></a>
                                                                                    <p class="text-muted m-b-0">{{ item.created_by }}</p>
                                                                                </div>
                                                                            </div>
                                                                        {% endfor %}
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="slimScrollBar"
                                                                    style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 186.475px;"
                                                                ></div>
                                                                <div
                                                                    class="slimScrollRail"
                                                                    style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"
                                                                ></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Latest Activity -->
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="card latest-update-card">
                                                        <div class="card-header">
                                                            <h5>Latest Activity</h5>
                                                            <div class="card-header-right">
                                                                <ul class="list-unstyled card-option">
                                                                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                                                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                                    <li><i class="feather icon-trash close-card"></i></li>
                                                                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 290px;">
                                                                <div class="scroll-widget" style="overflow: hidden; width: auto; height: 290px;">
                                                                    <div class="latest-update-box">
                                                                        {% for activity in widgetData4.latest_activity %}
                                                                            <div class="row p-t-20 p-b-30">
                                                                                <div class="col-auto text-right update-meta p-r-0">
                                                                                    {% set icon_color = {
                                                                                        'Devlopment & Update': 'b-primary',
                                                                                        'Showcases': 'b-primary',
                                                                                        'Miscellaneous': 'b-success',
                                                                                        'Your Manager Posted.': 'b-danger'
                                                                                    } %}
                                                                                    <i class="{{ icon_color[activity.activity_type] }} update-icon ring"></i>
                                                                                </div>
                                                                                <div class="col p-l-5">
                                                                                    <a href="{{ activity.readmore_link | default('#') }}"><h6>{{ activity.activity_type }}</h6></a>
                                                                                    <p class="text-muted m-b-0">{{ activity.activity | raw }}{% if activity.readmore_link %}{% if not loop.last %}{% if activity.activity_type != 'Miscellaneous' %}, <a href="{{ activity.readmore_link }}" class="text-c-blue">Read More</a>{% endif %}{% endif %}{% endif %}</p>
                                                                                </div>
                                                                            </div>
                                                                        {% endfor %}
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="slimScrollBar"
                                                                    style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 186.475px;"
                                                                ></div>
                                                                <div
                                                                    class="slimScrollRail"
                                                                    style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"
                                                                ></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- New Products-->
                                                <div class="col-md-12">
                                                    <div class="card table-card">
                                                        <div class="card-header">
                                                            <h5>New Products</h5>
                                                            <div class="card-header-right">
                                                                <ul class="list-unstyled card-option">
                                                                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                                                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                                    <li><i class="feather icon-trash close-card"></i></li>
                                                                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-block p-b-0">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover m-b-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Product Code</th>
                                                                            <th>Customer</th>
                                                                            <th>Status</th>
                                                                            <th>Rating</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        {% for product in widgetData5.new_products %}
                                                                            <tr>
                                                                                <td>{{ product.name }}</td>
                                                                                <td>{{ product.product_code }}</td>
                                                                                <td>{{ product.customer }}</td>
                                                                                <td>
                                                                                    {% if product.status == 'In Stock' %}
                                                                                        <label class="label label-success">In Stock</label>
                                                                                    {% else %}
                                                                                        <label class="label label-danger">Out Stock</label>
                                                                                    {% endif %}
                                                                                </td>
                                                                                <td>
                                                                                    {% for star in range(1, 6) %}
                                                                                        {% if star <= product.rating %}
                                                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                                                        {% else %}
                                                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                                                        {% endif %}
                                                                                    {% endfor %}
                                                                                </td>
                                                                            </tr>
                                                                        {% endfor %}
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="styleSelector"></div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="./template_files/jquery.min.js.download"></script>
        <script type="text/javascript" src="./template_files/jquery-ui.min.js.download"></script>
        <script type="text/javascript" src="./template_files/popper.min.js.download"></script>
        <script type="text/javascript" src="./template_files/bootstrap.min.js.download"></script>

        <script src="./template_files/waves.min.js.download"></script>

        <script type="text/javascript" src="./template_files/jquery.slimscroll.js.download"></script>

        <script src="./template_files/jquery.flot.js.download"></script>
        <script src="./template_files/jquery.flot.categories.js.download"></script>
        <script src="./template_files/curvedLines.js.download"></script>
        <script src="./template_files/jquery.flot.tooltip.min.js.download"></script>

        <script src="./template_files/chartist.js.download"></script>

        <script src="./template_files/amcharts.js.download"></script>
        <script src="./template_files/serial.js.download"></script>
        <script src="./template_files/light.js.download"></script>

        <script src="./template_files/pcoded.min.js.download"></script>
        <script src="./template_files/vertical-layout.min.js.download"></script>
        <script type="text/javascript" src="./template_files/custom-dashboard.min.js.download"></script>
        <script type="text/javascript" src="./template_files/script.min.js.download"></script>

		<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("sales-analytics");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);

root.dateFormatter.setAll({
  dateFormat: "yyyy",
  dateFields: ["valueX"]
});

var data = [{
  "date": "2012-07-27",
  "value": 13
}, {
  "date": "2012-07-28",
  "value": 11
}, {
  "date": "2012-07-29",
  "value": 15
}, {
  "date": "2012-07-30",
  "value": 16
}, {
  "date": "2012-07-31",
  "value": 18
}, {
  "date": "2012-08-01",
  "value": 13
}, {
  "date": "2012-08-02",
  "value": 22
}, {
  "date": "2012-08-03",
  "value": 23
}, {
  "date": "2012-08-04",
  "value": 20
}, {
  "date": "2012-08-05",
  "value": 17
}, {
  "date": "2012-08-06",
  "value": 16
}, {
  "date": "2012-08-07",
  "value": 18
}, {
  "date": "2012-08-08",
  "value": 21
}, {
  "date": "2012-08-09",
  "value": 26
}, {
  "date": "2012-08-10",
  "value": 24
}, {
  "date": "2012-08-11",
  "value": 29
}, {
  "date": "2012-08-12",
  "value": 32
}, {
  "date": "2012-08-13",
  "value": 18
}, {
  "date": "2012-08-14",
  "value": 24
}, {
  "date": "2012-08-15",
  "value": 22
}, {
  "date": "2012-08-16",
  "value": 18
}, {
  "date": "2012-08-17",
  "value": 19
}, {
  "date": "2012-08-18",
  "value": 14
}, {
  "date": "2012-08-19",
  "value": 15
}, {
  "date": "2012-08-20",
  "value": 12
}, {
  "date": "2012-08-21",
  "value": 8
}, {
  "date": "2012-08-22",
  "value": 9
}, {
  "date": "2012-08-23",
  "value": 8
}, {
  "date": "2012-08-24",
  "value": 7
}, {
  "date": "2012-08-25",
  "value": 5
}, {
  "date": "2012-08-26",
  "value": 11
}, {
  "date": "2012-08-27",
  "value": 13
}, {
  "date": "2012-08-28",
  "value": 18
}, {
  "date": "2012-08-29",
  "value": 20
}, {
  "date": "2012-08-30",
  "value": 29
}, {
  "date": "2012-08-31",
  "value": 33
}, {
  "date": "2012-09-01",
  "value": 42
}, {
  "date": "2012-09-02",
  "value": 35
}, {
  "date": "2012-09-03",
  "value": 31
}, {
  "date": "2012-09-04",
  "value": 47
}, {
  "date": "2012-09-05",
  "value": 52
}, {
  "date": "2012-09-06",
  "value": 46
}, {
  "date": "2012-09-07",
  "value": 41
}, {
  "date": "2012-09-08",
  "value": 43
}, {
  "date": "2012-09-09",
  "value": 40
}, {
  "date": "2012-09-10",
  "value": 39
}, {
  "date": "2012-09-11",
  "value": 34
}, {
  "date": "2012-09-12",
  "value": 29
}, {
  "date": "2012-09-13",
  "value": 34
}, {
  "date": "2012-09-14",
  "value": 37
}, {
  "date": "2012-09-15",
  "value": 42
}, {
  "date": "2012-09-16",
  "value": 49
}, {
  "date": "2012-09-17",
  "value": 46
}, {
  "date": "2012-09-18",
  "value": 47
}, {
  "date": "2012-09-19",
  "value": 55
}, {
  "date": "2012-09-20",
  "value": 59
}, {
  "date": "2012-09-21",
  "value": 58
}, {
  "date": "2012-09-22",
  "value": 57
}, {
  "date": "2012-09-23",
  "value": 61
}, {
  "date": "2012-09-24",
  "value": 59
}, {
  "date": "2012-09-25",
  "value": 67
}, {
  "date": "2012-09-26",
  "value": 65
}, {
  "date": "2012-09-27",
  "value": 61
}, {
  "date": "2012-09-28",
  "value": 66
}, {
  "date": "2012-09-29",
  "value": 69
}, {
  "date": "2012-09-30",
  "value": 71
}, {
  "date": "2012-10-01",
  "value": 67
}, {
  "date": "2012-10-02",
  "value": 63
}, {
  "date": "2012-10-03",
  "value": 46
}, {
  "date": "2012-10-04",
  "value": 32
}, {
  "date": "2012-10-05",
  "value": 21
}, {
  "date": "2012-10-06",
  "value": 18
}, {
  "date": "2012-10-07",
  "value": 21
}, {
  "date": "2012-10-08",
  "value": 28
}, {
  "date": "2012-10-09",
  "value": 27
}, {
  "date": "2012-10-10",
  "value": 36
}, {
  "date": "2012-10-11",
  "value": 33
}, {
  "date": "2012-10-12",
  "value": 31
}, {
  "date": "2012-10-13",
  "value": 30
}, {
  "date": "2012-10-14",
  "value": 34
}, {
  "date": "2012-10-15",
  "value": 38
}, {
  "date": "2012-10-16",
  "value": 37
}, {
  "date": "2012-10-17",
  "value": 44
}, {
  "date": "2012-10-18",
  "value": 49
}, {
  "date": "2012-10-19",
  "value": 53
}, {
  "date": "2012-10-20",
  "value": 57
}, {
  "date": "2012-10-21",
  "value": 60
}, {
  "date": "2012-10-22",
  "value": 61
}, {
  "date": "2012-10-23",
  "value": 69
}, {
  "date": "2012-10-24",
  "value": 67
}, {
  "date": "2012-10-25",
  "value": 72
}, {
  "date": "2012-10-26",
  "value": 77
}, {
  "date": "2012-10-27",
  "value": 75
}, {
  "date": "2012-10-28",
  "value": 70
}, {
  "date": "2012-10-29",
  "value": 72
}, {
  "date": "2012-10-30",
  "value": 70
}, {
  "date": "2012-10-31",
  "value": 72
}, {
  "date": "2012-11-01",
  "value": 73
}, {
  "date": "2012-11-02",
  "value": 67
}, {
  "date": "2012-11-03",
  "value": 68
}, {
  "date": "2012-11-04",
  "value": 65
}, {
  "date": "2012-11-05",
  "value": 71
}, {
  "date": "2012-11-06",
  "value": 75
}, {
  "date": "2012-11-07",
  "value": 74
}, {
  "date": "2012-11-08",
  "value": 71
}, {
  "date": "2012-11-09",
  "value": 76
}, {
  "date": "2012-11-10",
  "value": 77
}, {
  "date": "2012-11-11",
  "value": 81
}, {
  "date": "2012-11-12",
  "value": 83
}, {
  "date": "2012-11-13",
  "value": 80
}, {
  "date": "2012-11-14",
  "value": 81
}, {
  "date": "2012-11-15",
  "value": 87
}, {
  "date": "2012-11-16",
  "value": 82
}, {
  "date": "2012-11-17",
  "value": 86
}, {
  "date": "2012-11-18",
  "value": 80
}, {
  "date": "2012-11-19",
  "value": 87
}, {
  "date": "2012-11-20",
  "value": 83
}, {
  "date": "2012-11-21",
  "value": 85
}, {
  "date": "2012-11-22",
  "value": 84
}, {
  "date": "2012-11-23",
  "value": 82
}, {
  "date": "2012-11-24",
  "value": 73
}, {
  "date": "2012-11-25",
  "value": 71
}, {
  "date": "2012-11-26",
  "value": 75
}, {
  "date": "2012-11-27",
  "value": 79
}, {
  "date": "2012-11-28",
  "value": 70
}, {
  "date": "2012-11-29",
  "value": 73
}, {
  "date": "2012-11-30",
  "value": 61
}, {
  "date": "2012-12-01",
  "value": 62
}, {
  "date": "2012-12-02",
  "value": 66
}, {
  "date": "2012-12-03",
  "value": 65
}, {
  "date": "2012-12-04",
  "value": 73
}, {
  "date": "2012-12-05",
  "value": 79
}, {
  "date": "2012-12-06",
  "value": 78
}, {
  "date": "2012-12-07",
  "value": 78
}, {
  "date": "2012-12-08",
  "value": 78
}, {
  "date": "2012-12-09",
  "value": 74
}, {
  "date": "2012-12-10",
  "value": 73
}, {
  "date": "2012-12-11",
  "value": 75
}, {
  "date": "2012-12-12",
  "value": 70
}, {
  "date": "2012-12-13",
  "value": 77
}, {
  "date": "2012-12-14",
  "value": 67
}, {
  "date": "2012-12-15",
  "value": 62
}, {
  "date": "2012-12-16",
  "value": 64
}, {
  "date": "2012-12-17",
  "value": 61
}, {
  "date": "2012-12-18",
  "value": 59
}, {
  "date": "2012-12-19",
  "value": 53
}, {
  "date": "2012-12-20",
  "value": 54
}, {
  "date": "2012-12-21",
  "value": 56
}, {
  "date": "2012-12-22",
  "value": 59
}, {
  "date": "2012-12-23",
  "value": 58
}, {
  "date": "2012-12-24",
  "value": 55
}, {
  "date": "2012-12-25",
  "value": 52
}, {
  "date": "2012-12-26",
  "value": 54
}, {
  "date": "2012-12-27",
  "value": 50
}, {
  "date": "2012-12-28",
  "value": 50
}, {
  "date": "2012-12-29",
  "value": 51
}, {
  "date": "2012-12-30",
  "value": 52
}, {
  "date": "2012-12-31",
  "value": 58
}, {
  "date": "2013-01-01",
  "value": 60
}, {
  "date": "2013-01-02",
  "value": 67
}, {
  "date": "2013-01-03",
  "value": 64
}, {
  "date": "2013-01-04",
  "value": 66
}, {
  "date": "2013-01-05",
  "value": 60
}, {
  "date": "2013-01-06",
  "value": 63
}, {
  "date": "2013-01-07",
  "value": 61
}, {
  "date": "2013-01-08",
  "value": 60
}, {
  "date": "2013-01-09",
  "value": 65
}, {
  "date": "2013-01-10",
  "value": 75
}, {
  "date": "2013-01-11",
  "value": 77
}, {
  "date": "2013-01-12",
  "value": 78
}, {
  "date": "2013-01-13",
  "value": 70
}, {
  "date": "2013-01-14",
  "value": 70
}, {
  "date": "2013-01-15",
  "value": 73
}, {
  "date": "2013-01-16",
  "value": 71
}, {
  "date": "2013-01-17",
  "value": 74
}, {
  "date": "2013-01-18",
  "value": 78
}, {
  "date": "2013-01-19",
  "value": 85
}, {
  "date": "2013-01-20",
  "value": 82
}, {
  "date": "2013-01-21",
  "value": 83
}, {
  "date": "2013-01-22",
  "value": 88
}, {
  "date": "2013-01-23",
  "value": 85
}, {
  "date": "2013-01-24",
  "value": 85
}, {
  "date": "2013-01-25",
  "value": 80
}, {
  "date": "2013-01-26",
  "value": 87
}, {
  "date": "2013-01-27",
  "value": 84
}, {
  "date": "2013-01-28",
  "value": 83
}, {
  "date": "2013-01-29",
  "value": 84
}, {
  "date": "2013-01-30",
  "value": 81
}];


// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(am5xy.XYChart.new(root, {
  focusable: true,
  panX: true,
  panY: true,
  wheelX: "panX",
  wheelY: "zoomX",
  pinchZoomX:true,
  paddingLeft: 0
}));

var easing = am5.ease.linear;


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
  maxDeviation: 0.1,
  groupData: false,
  baseInterval: {
    timeUnit: "day",
    count: 1
  },
  renderer: am5xy.AxisRendererX.new(root, {
    minorGridEnabled: true,
    minGridDistance: 70
  }),
  tooltip: am5.Tooltip.new(root, {})
}));

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  maxDeviation: 0.2,
  renderer: am5xy.AxisRendererY.new(root, {})
}));


// Add series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(am5xy.LineSeries.new(root, {
  minBulletDistance: 10,
  connect: false,
  xAxis: xAxis,
  yAxis: yAxis,
  valueYField: "value",
  valueXField: "date",
  tooltip: am5.Tooltip.new(root, {
    pointerOrientation: "horizontal",
    labelText: "{valueY}"
  })
}));

series.fills.template.setAll({
  fillOpacity: 0.2,
  visible: true
});

series.strokes.template.setAll({
  strokeWidth: 2
});


// Set up data processor to parse string dates
// https://www.amcharts.com/docs/v5/concepts/data/#Pre_processing_data
series.data.processor = am5.DataProcessor.new(root, {
  dateFormat: "yyyy-MM-dd",
  dateFields: ["date"]
});

series.data.setAll(data);

series.bullets.push(function() {
  var circle = am5.Circle.new(root, {
    radius: 4,
    fill: root.interfaceColors.get("background"),
    stroke: series.get("fill"),
    strokeWidth: 2
  })

  return am5.Bullet.new(root, {
    sprite: circle
  })
});


// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
  xAxis: xAxis,
  behavior: "none"
}));
cursor.lineY.set("visible", false);

// add scrollbar
chart.set("scrollbarX", am5.Scrollbar.new(root, {
  orientation: "horizontal"
}));


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
chart.appear(1000, 100);

}); // end am5.ready()
</script>
    </body>
</html>
