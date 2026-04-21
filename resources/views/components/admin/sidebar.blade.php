<nav>
    <div class="app-logo">
        <a class="logo d-inline-block" href="{{ route('dashboard') }}">
            <img src="{{ asset('admin/images/logo/1.png') }}" alt="#">
        </a>

        <span class="bg-light-primary toggle-semi-nav">
            <i class="ti ti-chevrons-right f-s-20"></i>
        </span>
    </div>
    <div class="app-nav" id="app-simple-bar">
        <ul class="main-nav p-0 mt-2">
            <li class="menu-title">
                <span>Dashboard</span>
            </li>
            <li>
                <a class="" data-bs-toggle="collapse" href="#dashboard" aria-expanded="false">
                    <i class="ph-duotone  ph-house-line"></i>
                    dashboard
                    <span class="badge text-bg-success badge-notification ms-2">4</span>
                </a>
                <ul class="collapse" id="dashboard">
                    <li><a href="{{ route('dashboard') }}">Ecommerce</a></li>
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Crypto</a></li>
                    <li><a href="#">Education</a></li>
                </ul>
            </li>

            {{-- Access Control Section --}}
            <li class="menu-title"> <span>Access Control</span></li>
            <li>
                <a class="" data-bs-toggle="collapse" href="#rbac" aria-expanded="false">
                    <i class="ph-duotone ph-shield-check"></i>
                    RBAC
                </a>
                <ul class="collapse shadow-sm" id="rbac">
                    <li><a href="{{ route('admin.roles.index') }}">Roles Management</a></li>
                    <li><a href="{{ route('admin.permissions.index') }}">Permissions List</a></li>
                    <li><a href="{{ route('admin.users.index') }}">User Assignments</a></li>
                </ul>
            </li>
            <li>
                <a class="" data-bs-toggle="collapse" href="#apps" aria-expanded="false">
                    <i class="ph-duotone  ph-stack"></i>
                    Apps
                </a>
                <ul class="collapse" id="apps">
                    <li><a href="#">Calender</a></li>
                    <li class="another-level">
                        <a class="" data-bs-toggle="collapse" href="#Profile-page" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="collapse" id="Profile-page">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Setting</a></li>
                        </ul>
                    </li>
                    <li class="another-level">
                        <a class="" data-bs-toggle="collapse" href="#projects-page" aria-expanded="false">
                            Projects Page
                        </a>
                        <ul class="collapse" id="projects-page">
                            <li><a href="#">projects</a></li>
                            <li><a href="#">projects Details</a></li>
                        </ul>
                    </li>
                    <li><a href="#">To-Do</a></li>
{{-- <li><a href="#">Team</a></li> --}}
                    <li><a href="#">API</a></li>
                    <li class="another-level">
                        <a class="" data-bs-toggle="collapse" href="#ticket-page" aria-expanded="false">
                            Ticket
                        </a>
                        <ul class="collapse" id="ticket-page">
                            <li><a href="#">Ticket</a></li>
                            <li><a href="#">Ticket Details</a></li>
                        </ul>
                    </li>
                    <li class="another-level">
                        <a class="" data-bs-toggle="collapse" href="#email-page" aria-expanded="false">
                            Email Page
                        </a>
                        <ul class="collapse" id="email-page">
                            <li><a href="#"> Email</a></li>
                            <li><a href="#">Read Email</a></li>
                        </ul>
                    </li>
                    <li class="another-level">
                        <a class="" data-bs-toggle="collapse" href="#e-shop" aria-expanded="false">
                            E-shop
                        </a>
                        <ul class="collapse" id="e-shop">
                            <li><a href="#">Cart</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Add Product</a></li>
                            <li><a href="#">Product-Details</a></li>
                            <li><a href="#">Product list</a></li>
                            <li><a href="#">Orders</a></li>
                            <li><a href="#">Orders Details</a></li>
                            <li><a href="#">Orders List</a></li>
                            <li><a href="#">Check out</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Invoice</a></li>
                    <li><a href="#">Chat</a></li>
                    <li><a href="#">File manager</a></li>
                    <li><a href="#">Bookmark</a></li>
                    <li><a href="#">Kanban board</a></li>
                    <li><a href="#">Timeline</a></li>
                    <li><a href="#">FAQS</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li class="another-level">
                        <a class="" data-bs-toggle="collapse" href="#blog-page" aria-expanded="false">
                            Blog Page
                        </a>
                        <ul class="collapse" id="blog-page">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Blog Details</a></li>
                            <li><a href="#">Add Blog</a></li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li class="no-sub">
                <a class="" href="#">
                    <i class="ph-duotone  ph-squares-four"></i> Widgets
                </a>
            </li>

            <li class="menu-title"> <span>Component</span></li>
            <li>
                <a class="" data-bs-toggle="collapse" href="#ui-kits" aria-expanded="false">

                    <i class="ph-duotone  ph-briefcase"></i>
                    UI kits
                </a>
                <ul class="collapse" id="ui-kits">
                    <li><a href="#">Cheatsheet</a></li>
                    <li><a href="#">Alert</a></li>
                    <li><a href="#">Badges</a></li>
                    <li><a href="#">Buttons</a></li>
                    <li><a href="#">Cards</a></li>
                    <li><a href="#">Dropdown</a></li>
                    <li><a href="#">Grid</a></li>
                    <li><a href="#">Avtar</a></li>
                    <li><a href="#">Tabs</a></li>
                    <li><a href="#">Accordions</a></li>
                    <li><a href="#">Progress</a></li>
                    <li><a href="#">Notifications</a></li>
                    <li><a href="#">Lists</a></li>
                    <li><a href="#">Helper Classes</a></li>
                    <li><a href="#">Background</a></li>
                    <li><a href="#">Divider</a></li>
                    <li><a href="#">Ribbons</a></li>
                    <li><a href="#">Editor </a></li>
                    <li><a href="#">Collapse</a></li>
                    <li><a href="#">Footer</a></li>
                    <li><a href="#">Shadow</a></li>
                    <li><a href="#">Wrapper</a></li>
                    <li><a href="#">Bullet</a></li>
                    <li><a href="#">Placeholder</a></li>
                    <li><a href="#">Alignment Thing</a></li>
                </ul>
            </li>


            <li>
                <a class="" data-bs-toggle="collapse" href="#advance-ui" aria-expanded="false">
                    <i class="ph-duotone  ph-briefcase-metal"></i> Advance UI
                    <span class=" badge rounded-pill bg-warning badge-notification ms-2">
                        12+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </a>
                <ul class="collapse" id="advance-ui">
                    <li><a href="#">Modals</a></li>
                    <li><a href="#">Offcanvas Toggle</a></li>
                    <li><a href="#">Sweat Alert</a></li>
                    <li><a href="#">Scrollbar</a></li>
                    <li><a href="#">Spinners</a></li>
                    <li><a href="#">Animation</a></li>
                    <li><a href="#">Video Embed</a></li>
                    <li><a href="#">Tour</a></li>
                    <li><a href="#">Slider</a></li>
                    <li><a href="#">Bootstrap Slider</a></li>
                    <li><a href="#">Scrollpy</a></li>
                    <li><a href="#">Tooltip & Popovers</a></li>
                    <li><a href="#">Rating</a></li>
                    <li><a href="#">Prismjs</a></li>
                    <li><a href="#">Count Down</a></li>
                    <li><a href="#"> Count up </a></li>
                    <li><a href="#">Draggable</a></li>
                    <li><a href="#">Tree View</a></li>
                    <li><a href="#">Block Ui </a></li>
                </ul>
            </li>
            <li>
                <a class="" data-bs-toggle="collapse" href="#icons" aria-expanded="false">
                    <i class="ph-duotone  ph-shapes"></i> Icons
                </a>
                <ul class="collapse" id="icons">
                    <li><a href="#">Fontawesome</a></li>
                    <li><a href="#">Flag</a></li>
                    <li><a href="#">Tabler</a></li>
                    <li><a href="#">Weather</a></li>
                    <li><a href="#">Animated</a></li>
                    <li><a href="#">Iconoir</a></li>
                    <li><a href="#">Phosphor</a></li>
                </ul>
            </li>
            <li class="no-sub">
                <a class="" href="#">
                    <i class="ph-duotone  ph-certificate"></i> Misc
                </a>
            </li>
            <li class="menu-title"> <span>Map & Charts </span></li>
            <li>
                <a class="" href="#maps" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="ph-duotone  ph-map-pin-line"></i> Map
                </a>
                <ul class="collapse" id="maps">
                    <li><a href="#">Google Maps</a></li>
                    <li><a href="#">Leaflet map</a></li>
                    <li><a href="#">Vector map</a></li>
                </ul>
            </li>
            <li>
                <a class="" data-bs-toggle="collapse" href="#chart" aria-expanded="false">
                    <i class="ph-duotone  ph-chart-pie-slice"></i> Chart
                </a>
                <ul class="collapse" id="chart">


                    <li><a href="#">Chart js</a></li>


                    <li class="another-level">
                        <a class="" data-bs-toggle="collapse" href="#apexcharts-page" aria-expanded="false">
                            Apexcharts
                        </a>
                        <ul class="collapse" id="apexcharts-page">
                            <li><a href="#">Line</a></li>
                            <li><a href="#">Area</a></li>
                            <li><a href="#">Column</a></li>
                            <li><a href="#">Bar</a></li>
                            <li><a href="#">Mixed</a></li>
                            <li><a href="#">Timeline & Range-Bars</a></li>
                            <li><a href="#">Candlestick</a></li>
                            <li><a href="#">Boxplot</a></li>
                            <li><a href="#">Bubble</a></li>
                            <li><a href="#">Scatter</a></li>
                            <li><a href="#">Heatmap</a></li>
                            <li><a href="#">Treemap</a></li>
                            <li><a href="#">Pie</a></li>
                            <li><a href="#">Radial bar</a></li>
                            <li><a href="#">Radar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu-title"> <span>Table & forms </span></li>

            <li>
                <a class="" data-bs-toggle="collapse" href="#table" aria-expanded="false">
                    <i class="ph-duotone  ph-table"></i> Table
                </a>
                <ul class="collapse" id="table">
                    <li><a href="#">BasicTable</a></li>
                    <li><a href="#">Data Table</a></li>
                    <li><a href="#">List Js</a></li>
                    <li><a href="#">Advance Table</a></li>
                </ul>
            </li>


            <li>
                <a class="" data-bs-toggle="collapse" href="#forms" aria-expanded="false">
                    <i class="ph-duotone  ph-cardholder"></i> Forms elements
                </a>
                <ul class="collapse" id="forms">
                    <li><a href="#">Form Validation</a></li>
                    <li><a href="#">Base Input</a></li>
                    <li><a href="#">Checkbox & Radio</a></li>
                    <li><a href="#">Input Groups</a></li>
                    <li><a href="#">Input Masks</a></li>
                    <li><a href="#">Floating Labels</a></li>
                    <li><a href="#">Datetimepicker</a></li>
                    <li><a href="#">Touch spin</a></li>
                    <li><a href="#">Select2</a></li>
                    <li><a href="#">Switch</a></li>
                    <li><a href="#">Range Slider</a></li>
                    <li><a href="#">Typeahead</a></li>
                    <li><a href="#">Textarea</a></li>
                    <li><a href="#">Clipboard</a></li>
                    <li><a href="#">File Upload</a></li>
                    <li><a href="#">Dual List Boxes</a></li>
                    <li><a href="#">Default Forms</a></li>
                </ul>
            </li>

            <li>
                <a class="" data-bs-toggle="collapse" href="#ready_to_use" aria-expanded="false">
                    <i class="ph-duotone  ph-hand-heart"></i>
                    Ready to use <span class="badge text-light-success badge-notification ms-2">New</span>
                </a>
                <ul class="collapse" id="ready_to_use">
                    <li><a href="#">Form wizards</a></li>
                    <li><a href="#">Form wizards 1</a></li>
                    <li><a href="#">Form wizards 2</a></li>
                    <li><a href="#">Ready To Use Form</a></li>
                    <li><a href="#">Ready To Use Tables</a></li>
                </ul>
            </li>

            <li class="menu-title"> <span>Pages</span></li>

            <li>
                <a class="" data-bs-toggle="collapse" href="#auth_pages" aria-expanded="false">
                    <i class="ph-duotone  ph-notebook"></i> Auth Pages
                </a>
                <ul class="collapse" id="auth_pages">
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Sign In with Bg-image</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Sign Up with Bg-image</a></li>
                    <li><a href="#">Password Reset</a></li>
                    <li><a href="#">Password Reset with Bg-image</a></li>
                    <li><a href="#">Password Create</a></li>
                    <li><a href="#">Password Create with Bg-image</a></li>
                    <li><a href="#">Lock Screen</a></li>
                    <li><a href="#">Lock Screen with Bg-image</a></li>
                    <li><a href="#">Two-Step Verification</a></li>
                    <li><a href="#">Two-Step Verification with Bg-image</a></li>
                </ul>
            </li>
            <li>
                <a class="" data-bs-toggle="collapse" href="#error_pages" aria-expanded="false">
                    <i class="ph-duotone  ph-warning-octagon"></i> Error Pages
                </a>
                <ul class="collapse" id="error_pages">
                    <li><a href="#">Bad Request </a></li>
                    <li><a href="#">Forbidden </a></li>
                    <li><a href="#">Not Found</a></li>
                    <li><a href="#">Internal Server</a></li>
                    <li><a href="#">Service Unavailable</a></li>
                </ul>
            </li>

            <li>
                <a class="" data-bs-toggle="collapse" href="#other_pages" aria-expanded="false">
                    <i class="ph-duotone  ph-newspaper"></i> Other Pages
                </a>
                <ul class="collapse" id="other_pages">
                    <li><a href="#">Blank</a></li>
                    <li><a href="#">Maintenance</a></li>
                    <li><a href="#">Landing Page</a></li>
                    <li><a href="#">Coming Soon</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Condition</a></li>
                </ul>
            </li>

            <li class="menu-title"> <span>Others</span></li>

            <li>
                <a class="" data-bs-toggle="collapse" href="#level" aria-expanded="false">
                    <i class="ph-duotone  ph-number-circle-two"></i> 2 level
                </a>
                <ul class="collapse" id="level">
                    <li><a href="#">Blank</a></li>
                    <li class="another-level">
                        <a class="" data-bs-toggle="collapse" href="#level2" aria-expanded="false">
                            Another level
                        </a>
                        <ul class="collapse" id="level2">
                            <li><a href="#">Blank</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="no-sub">
                <a class="" href="#">
                    <i class="ph-duotone  ph-file-doc"></i> Document
                </a>
            </li>

            <li class="no-sub">
                <a class="" href="mailto:teqlathemes@gmail.com">
                    <i class="ph-duotone  ph-chats"></i> Support
                </a>
            </li>


        </ul>
    </div>

    <div class="menu-navs">
        <span class="menu-previous"><i class="ti ti-chevron-left"></i></span>
        <span class="menu-next"><i class="ti ti-chevron-right"></i></span>
    </div>

</nav>
