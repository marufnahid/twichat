<div class="sidebar">
    <div class="sidebar_logo">
        <div class="logo">
            <a href="#">
                <img src="assets/images/twitter.png" alt="Logo">
            </a>
        </div>
    </div>

    <div class="sidebar_menu">
        <ul class="menu_items">
            <li>
                <a href="{{route('home')}}" class="active">
                    <span><i class="fa fa-solid fa-home"></i> </span>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="./explore.html">
                    <span><i class="fa-solid fa-hashtag"></i> </span>
                    <span>Explore</span>
                </a>
            </li>
            <li>
                <a href="./search.html">
                    <span><i class="fa fa-solid fa-search"></i> </span>
                    <span>Search</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span><i class="fa fa-solid fa-message"></i> </span>
                    <span>Messages</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span><i class="fa fa-solid fa-bell"></i></span>
                    <span>Notification</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span><i class="fa fa-solid fa-user-group"></i> </span>
                    <span>Follows</span>
                </a>
            </li>

            <li>
                <a href="{{route('profile')}}">
                    <span><i class="fa fa-solid fa-user"></i> </span>
                    <span>Profile</span>
                </a>
            </li>
        </ul>
    </div>

    <button type="button" class="sidebar__tweet">Post</button>

    <div class="sidebarOption">
        <div class="single-follower">
            <div class="followers_body d-flex">
                <div class="followers_avater">
                    <img
                        src="assets/images/avatar5.png"
                        alt=""
                    />
                </div>
                <div class="followers_meta">
                    <div class="meta-wrap d-flex">
                        <div class="followers_name">
                            <h4>
                                Borhanul Arif
                                <span class="badge"
                                ><i class="fa fa-solid fa-badge-check"></i
                                    ></span>
                            </h4>
                            <span>@borhanarif</span>
                        </div>
                        <div class="logout_settings">
                            <button><i class="fa fa-solid fa-ellipsis"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
