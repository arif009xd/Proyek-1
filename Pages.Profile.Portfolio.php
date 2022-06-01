<? require 'koneksi.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pembayaran SPP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            <div class="search" data-search-path="Pages.Search.php?q=">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div>

            <a class="btn btn-sm btn-outline-primary ml-3 d-none d-md-inline-block"
                href="https://1.envato.market/5kAb">&nbsp;BUY&nbsp;</a>
        </div>


        <a class="navbar-logo" href="Dashboard.Default.php">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1" 
                        data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>

                <div class="position-relative d-none d-sm-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-equalizer d-block"></i>
                            <span>Settings</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-male-female d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-puzzle d-block"></i>
                            <span>Components</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-bar-chart-4 d-block"></i>
                            <span>Profits</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-file d-block"></i>
                            <span>Surveys</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-suitcase d-block"></i>
                            <span>Tasks</span>
                        </a>

                    </div>
                </div>

                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 position-absolute" id="notificationDropdown">
                        <div class="scroll">
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/profiles/l-2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/1.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                <a href="#">
                                    <img src="img/notifications/2.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-3 pb-3 ">
                                <a href="#">
                                    <img src="img/notifications/3.jpg" alt="Notification Image"
                                        class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                                </a>
                                <div class="pl-3">
                                    <a href="#">
                                        <p class="font-weight-medium mb-1">3 items just added to wish list by a user!
                                        </p>
                                        <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Sarah Kortney</span>
                    <span>
                        <img alt="Profile Picture" src="img/profiles/l-1.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="#">Account</a>
                    <a class="dropdown-item" href="#">Features</a>
                    <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Support</a>
                    <a class="dropdown-item" href="#">Sign out</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li>
                        <a href="#dashboard">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#layouts">
                            <i class="iconsminds-digital-drawing"></i> Pages
                        </a>
                    </li>
                    <li>
                        <a href="#applications">
                            <i class="iconsminds-air-balloon-1"></i> Applications
                        </a>
                    </li>
                    <li>
                        <a href="#ui">
                            <i class="iconsminds-pantone"></i> UI
                        </a>
                    </li>
                    <li>
                        <a href="#menu">
                            <i class="iconsminds-three-arrow-fork"></i> Menu
                        </a>
                    </li>
                    <li>
                        <a href="Blank.Page.php">
                            <i class="iconsminds-bucket"></i> Blank Page
                        </a>
                    </li>
                    <li>
                        <a href="https://dore-jquery-docs.coloredstrategies.com" target="_blank">
                            <i class="iconsminds-library"></i> Docs
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li>
                        <a href="Dashboard.Default.php">
                            <i class="simple-icon-rocket"></i> <span class="d-inline-block">Default</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Analytics.php">
                            <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Ecommerce.php">
                            <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block">Ecommerce</span>
                        </a>
                    </li>
                    <li>
                        <a href="Dashboard.Content.php">
                            <i class="simple-icon-doc"></i> <span class="d-inline-block">Content</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="layouts" id="layouts">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Authorization</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Auth.Login.php">
                                        <i class="simple-icon-user-following"></i> <span
                                            class="d-inline-block">Login</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Auth.Register.php">
                                        <i class="simple-icon-user-follow"></i> <span
                                            class="d-inline-block">Register</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Auth.ForgotPassword.php">
                                        <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Forgot
                                            Password</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true"
                            aria-controls="collapseProduct" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Product</span>
                        </a>
                        <div id="collapseProduct" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Product.List.php">
                                        <i class="simple-icon-credit-card"></i> <span class="d-inline-block">Data
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Thumbs.php">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">Thumb
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Images.php">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Image
                                            List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Product.Detail.php">
                                        <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="true"
                            aria-controls="collapseProfile" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Profile</span>
                        </a>
                        <div id="collapseProfile" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Profile.Social.php">
                                        <i class="simple-icon-share"></i> <span class="d-inline-block">Social</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true"
                            aria-controls="collapseBlog" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Blog</span>
                        </a>
                        <div id="collapseBlog" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Blog.php">
                                        <i class="simple-icon-list"></i> <span class="d-inline-block">List</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Blog.Detail.php">
                                        <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Blog.Detail.Alt.php">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Detail
                                            Alt</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMisc" aria-expanded="true"
                            aria-controls="collapseMisc" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Miscellaneous</span>
                        </a>
                        <div id="collapseMisc" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Misc.Coming.Soon.php">
                                        <i class="simple-icon-hourglass"></i> <span class="d-inline-block">Coming
                                            Soon</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Error.php">
                                        <i class="simple-icon-exclamation"></i> <span
                                            class="d-inline-block">Error</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Faq.php">
                                        <i class="simple-icon-question"></i> <span class="d-inline-block">Faq</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Invoice.php">
                                        <i class="simple-icon-bag"></i> <span class="d-inline-block">Invoice</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Knowledge.Base.php">
                                        <i class="simple-icon-graduation"></i> <span class="d-inline-block">Knowledge
                                            Base</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Mailing.php">
                                        <i class="simple-icon-envelope-open"></i> <span
                                            class="d-inline-block">Mailing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Pricing.php">
                                        <i class="simple-icon-diamond"></i> <span class="d-inline-block">Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Misc.Search.php">
                                        <i class="simple-icon-magnifier"></i> <span class="d-inline-block">Search</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="applications">
                    <li>
                        <a href="Apps.MediaLibrary.php">
                            <i class="simple-icon-picture"></i> <span class="d-inline-block">Library</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Todo.List.php">
                            <i class="simple-icon-check"></i> <span class="d-inline-block">Todo</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Survey.List.php">
                            <i class="simple-icon-calculator"></i> <span class="d-inline-block">Survey</span>
                        </a>
                    </li>
                    <li>
                        <a href="Apps.Chat.php">
                            <i class="simple-icon-bubbles"></i> <span class="d-inline-block">Chat</span>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="ui">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true"
                            aria-controls="collapseForms" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Forms</span>
                        </a>
                        <div id="collapseForms" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Forms.Components.php">
                                        <i class="simple-icon-event"></i> <span class="d-inline-block">Components</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Layouts.php">
                                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Layouts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Validation.php">
                                        <i class="simple-icon-check"></i> <span class="d-inline-block">Validation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Forms.Wizard.php">
                                        <i class="simple-icon-magic-wand"></i> <span
                                            class="d-inline-block">Wizard</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseDataTables" aria-expanded="true"
                            aria-controls="collapseDataTables" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Datatables</span>
                        </a>
                        <div id="collapseDataTables" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Datatables.Rows.php">
                                        <i class="simple-icon-screen-desktop"></i> <span class="d-inline-block">Full
                                            Page UI</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Scroll.php">
                                        <i class="simple-icon-mouse"></i> <span class="d-inline-block">Scrollable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Pagination.php">
                                        <i class="simple-icon-notebook"></i> <span
                                            class="d-inline-block">Pagination</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Datatables.Default.php">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Default</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="true"
                            aria-controls="collapseComponents" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Components</span>
                        </a>
                        <div id="collapseComponents" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Ui.Components.Alerts.php">
                                        <i class="simple-icon-bell"></i> <span class="d-inline-block">Alerts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Badges.php">
                                        <i class="simple-icon-badge"></i> <span class="d-inline-block">Badges</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Buttons.php">
                                        <i class="simple-icon-control-play"></i> <span
                                            class="d-inline-block">Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Cards.php">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Cards</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="Ui.Components.Carousel.php">
                                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Carousel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Charts.php">
                                        <i class="simple-icon-chart"></i> <span class="d-inline-block">Charts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Collapse.php">
                                        <i class="simple-icon-arrow-up"></i> <span
                                            class="d-inline-block">Collapse</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Dropdowns.php">
                                        <i class="simple-icon-arrow-down"></i> <span
                                            class="d-inline-block">Dropdowns</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Editors.php">
                                        <i class="simple-icon-book-open"></i> <span
                                            class="d-inline-block">Editors</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Icons.php">
                                        <i class="simple-icon-star"></i> <span class="d-inline-block">Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.InputGroups.php">
                                        <i class="simple-icon-note"></i> <span class="d-inline-block">Input
                                            Groups</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Jumbotron.php">
                                        <i class="simple-icon-screen-desktop"></i> <span
                                            class="d-inline-block">Jumbotron</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Modal.php">
                                        <i class="simple-icon-docs"></i> <span class="d-inline-block">Modal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Navigation.php">
                                        <i class="simple-icon-cursor"></i> <span
                                            class="d-inline-block">Navigation</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="Ui.Components.PopoverandTooltip.php">
                                        <i class="simple-icon-pin"></i> <span class="d-inline-block">Popover &
                                            Tooltip</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Sortable.php">
                                        <i class="simple-icon-shuffle"></i> <span class="d-inline-block">Sortable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Ui.Components.Tables.php">
                                        <i class="simple-icon-grid"></i> <span class="d-inline-block">Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

                <ul class="list-unstyled" data-link="menu" id="menuTypes">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                            aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Types</span>
                        </a>
                        <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Menu.Default.php">
                                        <i class="simple-icon-control-pause"></i> <span
                                            class="d-inline-block">Default</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Subhidden.php">
                                        <i class="simple-icon-arrow-left mi-subhidden"></i> <span
                                            class="d-inline-block">Subhidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Hidden.php">
                                        <i class="simple-icon-control-start mi-hidden"></i> <span
                                            class="d-inline-block">Hidden</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Menu.Mainhidden.php">
                                        <i class="simple-icon-control-rewind mi-hidden"></i> <span
                                            class="d-inline-block">Mainhidden</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true"
                            aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Levels</span>
                        </a>
                        <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel2"
                                        aria-expanded="true" aria-controls="collapseMenuLevel2"
                                        class="rotate-arrow-icon collapsed">
                                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Another
                                            Level</span>
                                    </a>
                                    <div id="collapseMenuLevel2" class="collapse">
                                        <ul class="list-unstyled inner-level-menu">
                                            <li>
                                                <a href="#">
                                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                                        Level</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached" aria-expanded="true"
                            aria-controls="collapseMenuDetached" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>
                        </a>
                        <div id="collapseMenuDetached" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="dont-close-menu">
                            <a href="#">
                                <i class="simple-icon-arrow-right"></i> <span class="d-inline-block">Keep Sub Open</span>
                            </a>
                        </div>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
    <main>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="mb-2">
                        <h1>Sarah Kortney</h1>
                        <div class="text-zero top-right-button-container">
                        </div>
                        <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        </nav>
                    </div>


                    <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab"
                                aria-controls="first" aria-selected="true">PROFILE</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                            <div class="row">
                                <div class="col-12 col-lg-5 col-xl-4 col-left">
                                    <div class="card mb-4">
                                        <div class="position-absolute card-top-buttons">
                                            <button class="btn btn-outline-white icon-button ">
                                                <i class="simple-icon-pencil"></i>
                                            </button>
                                        </div>
                                        <img src="img/profiles/1.jpg" alt="Detail Picture" class="card-img-top" />

                                        <div class="card-body">
                                            <p class="text-muted text-small mb-2">About</p>
                                            <p class="mb-3">
                                                I’m a web developer. I spend my whole day, practically every day,
                                                experimenting with HTML, CSS, and JavaScript; dabbling with Python and
                                                Ruby; and inhaling a wide variety of potentially useless information
                                                through a few hundred RSS feeds. I build websites that delight and
                                                inform. I do it well.
                                            </p>

                                            <p class="text-muted text-small mb-2">Location</p>
                                            <p class="mb-3">Nairobi, Kenya</p>

                                            <p class="text-muted text-small mb-2">Responsibilities</p>
                                            <p class="mb-3">
                                                <a href="#">
                                                    <span
                                                        class="badge badge-pill badge-outline-theme-2 mb-1">FRONTEND</span>
                                                </a>
                                                <a href="#">
                                                    <span
                                                        class="badge badge-pill badge-outline-theme-2 mb-1">JAVASCRIPT</span>
                                                </a>
                                                <a href="#">
                                                    <span
                                                        class="badge badge-pill badge-outline-theme-2 mb-1">SECURITY</span>
                                                </a>
                                                <a href="#">
                                                    <span
                                                        class="badge badge-pill badge-outline-theme-2 mb-1">DESIGN</span>
                                                </a>
                                            </p>
                                            <p class="text-muted text-small mb-2">Contact</p>
                                            <div class="social-icons">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#"><i class="simple-icon-social-facebook"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><i class="simple-icon-social-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><i class="simple-icon-social-instagram"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4 d-none d-lg-block">
                                        <div class="position-absolute card-top-buttons">
                                            <button class="btn btn-header-light icon-button">
                                                <i class="simple-icon-refresh"></i>
                                            </button>
                                        </div>

                                        <div class="card-body">
                                            <h5 class="card-title">Recent Posts</h5>
                                            <div>
                                                <div class="d-flex flex-row mb-3">
                                                    <a class="d-block position-relative" href="#">
                                                        <img src="img/products/marble-cake-thumb.jpg" alt="Marble Cake"
                                                            class="list-thumbnail border-0" />
                                                        <span
                                                            class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                                    </a>
                                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                                        <a href="#">
                                                            <p class="list-item-heading">Progressively Maintain
                                                                Extensive Infomediaries</p>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row mb-3">
                                                    <a class="d-block position-relative" href="#">
                                                        <img src="img/products/fruitcake-thumb.jpg" alt="Fruitcake"
                                                            class="list-thumbnail border-0" />
                                                    </a>
                                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                                        <a href="#">
                                                            <p class="list-item-heading">Assertively Iterate Resource
                                                                Maximizing</p>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row mb-3">
                                                    <a class="d-block position-relative" href="#">
                                                        <img src="img/products/chocolate-cake-thumb.jpg" alt="Chocolate Cake"
                                                            class="list-thumbnail border-0" />
                                                    </a>
                                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                                        <a href="#">
                                                            <p class="list-item-heading">Podcasting Operational Change
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row">
                                                    <a class="d-block position-relative" href="#">
                                                        <img src="img/products/fat-rascal-thumb.jpg" alt="Fat Rascal"
                                                            class="list-thumbnail border-0" />
                                                    </a>
                                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                                        <a href="#">
                                                            <p class="list-item-heading">Manufactured Products</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0">Order Status</h6>
                                            <div role="progressbar" class="progress-bar-circle position-relative"
                                                data-color="#922c88" data-trailColor="#d7d7d7" aria-valuemax="100"
                                                aria-valuenow="40" data-show-percent="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0">Bake Progress</h6>
                                            <div role="progressbar" class="progress-bar-circle position-relative"
                                                data-color="#922c88" data-trailColor="#d7d7d7" aria-valuemax="100"
                                                aria-valuenow="60" data-show-percent="true">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7 col-xl-8 col-right">
                                    <div class="row listing-card-container">

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/marble-cake-thumb.jpg" alt="Card image cap"></a>
                                                    <span
                                                        class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Podcasting Operational Change
                                                            Management Inside of Workflows
                                                        </h6>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            18.08.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/goose-breast-thumb.jpg" alt="Card image cap"></a>
                                                    <span
                                                        class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>
                                                    <span
                                                        class="badge badge-pill badge-secondary position-absolute badge-top-left-2">TRENDING</span>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Power of Choice is Untrammelled
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            14.06.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/chocolate-cake-thumb.jpg" alt="Card image cap"></a>
                                                    <span
                                                        class="badge badge-pill badge-theme-1 position-absolute badge-top-left">NEW</span>

                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Progressively Maintain Extensive
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            24.05.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/souffle-thumb.jpg" alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Assertively Iterate Infomediaries
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            23.05.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/cremeschnitte-thumb.jpg" alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Progressively Maintain Extensive Infomediaries
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            19.04.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/napoleonshat-thumb.jpg" alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Podcasting Operational Resource Maximizing
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            01.03.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/tea-loaf-thumb.jpg" alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Podcasting Operational Change
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            23.05.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/merveilleux-thumb.jpg" alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Objectively Innovate Empowered Manufactured Products
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            19.04.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/financier-thumb.jpg" alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Empowered Manufactured Products
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            01.03.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/fat-rascal-thumb.jpg" alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Podcasting Operational Change
                                                            Management Inside of Workflows
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            18.08.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/petit-gateau-thumb.jpg" alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Resource Maximizing Bandwidth
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            14.06.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/souffle-thumb.jpg" alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Green Space Global Policymaker
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            24.05.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/souffle-thumb.jpg" alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Assertively Iterate Infomediaries
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            23.05.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/cremeschnitte-thumb.jpg" alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Progressively Maintain Extensive Infomediaries
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            19.04.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-4 col-12 mb-4">
                                            <div class="card">
                                                <div class="position-relative">
                                                    <a href="Pages.Details.html"><img class="card-img-top"
                                                            src="img/products/salzburger-nockerl-thumb.jpg"
                                                            alt="Card image cap"></a>
                                                </div>
                                                <div class="card-body">
                                                    <a href="Pages.Details.html">
                                                        <h6 class="mb-3 listing-heading ellipsis">
                                                            Podcasting Operational Resource Maximizing
                                                            </h5>
                                                    </a>
                                                    <footer>
                                                        <p class="text-muted text-small mb-0 font-weight-light">
                                                            01.03.2018</p>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
s
                    </div>
                </div>
            </div>
        </div>
    </main>
    

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/progressbar.min.js"></script>
    <script src="js/vendor/jquery.autoellipsis.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>