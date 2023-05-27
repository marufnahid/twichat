<!-- feed starts -->
<div class="feed">
    <div class="feed__header">
        <h2>Borhan Ul Arif</h2>
    </div>


    <div class="profile_wrap">
        <div class="profile_items">
            <div class="profile_banner">
                <img src="assets/images/banner.png" alt="Cover" />
            </div>
            <div class="profile_meta">
                <div class="profile_meta_wrap d-flex">
                    <div class="profile_pic d-flex">
                        <div class="profile_pic_box">
                            <img
                                src="assets/images/avatar5.png"
                                alt=""
                            />
                        </div>
                        <div class="profile_edit_link">
                            <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit Profile</a>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <form action="{{ route('profile.save') }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6  mb-3">
                                                    <label for="fname">First Name</label>
                                                    <input type="text" class="form-control" name="fname" placeholder="First name" aria-label="First name">
                                                </div>
                                                <div class="col-md-6  mb-3">
                                                    <label for="lname">Last Name</label>
                                                    <input type="text" class="form-control" name="lname" placeholder="Last name" aria-label="Last name">
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="bio" class="form-label">Bio</label>
                                                    <textarea class="form-control" id="bio" rows="3" name="bio"></textarea>
                                                </div>

                                                <div class="col-md-12  mb-3">
                                                    <label for="location" class="form-label">Location</label>
                                                    <input type="text" class="form-control" id="location" name="location">
                                                </div>

{{--                                                <div class="col-md-6 mb-3">--}}
{{--                                                    <label class="form-label" for="inputGroupFile01">Cover Image</label>--}}
{{--                                                    <input type="file" class="form-control" id="inputGroupFile01" name="profileimage">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-6 mb-3">--}}
{{--                                                    <label class="form-label" for="inputGroupFile02">Profile Image</label>--}}
{{--                                                    <input type="file" class="form-control" id="inputGroupFile02" name="coverimage">--}}
{{--                                                </div>--}}
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile_name">
                        <h4>
                            Borhanul Arif
                            <span class="badge"
                            ><i class="fa fa-solid fa-badge-check"></i
                                ></span>
                        </h4>
                        <span>@borhanarif</span>
                    </div>
                    <div class="profile_bio">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo molestias, amet officiis soluta esse praesentium?</p>
                    </div>
                    <div class="profile_created">
                        <span><i class="fa fa-solid fa-location-dot"></i>Khulna, Dhaka</span>
                        <span><i class="fa fa-solid fa-calendar-days"></i>Joined August 2018</span>
                    </div>
                    <div class="profile_follow_following">
                        <span><span> 200</span> followers</span>
                        <span><span> 200</span> followings</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="profile_feeds">
        <div class="profile-feed">
            <div class="tab">
                <button class="tablinks active" onclick="openTabs(event, 'profile_posts')">
                    Posts
                </button>
                <button class="tablinks" onclick="openTabs(event, 'comments')">
                    Comments
                </button>
                <button class="tablinks" onclick="openTabs(event, 'likes')">
                    Likes
                </button>
            </div>

            <div id="profile_posts" class="tabcontent active">
                <div class="posts">
                    <div class="post">
                        <div class="post__avatar">
                            <img src="assets/images/avatar3.png" alt="" />
                        </div>

                        <div class="post__body">
                            <div class="post__header">
                                <div class="post__headerText">
                                    <h3>
                                        Arafat Jamil
                                        <span class="post__headerSpecial"
                                        ><span class="material-icons post__badge"> verified </span
                                            >@arafatjamil</span
                                        >
                                    </h3>
                                </div>
                                <div class="post__headerDescription">
                                    <p>
                                        Lorem ipsum, dolo Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Minus commodi ipsum sequi voluptatum,
                                        voluptate vel! r sit amet consectetur adipisicing elit. lo
                                    </p>
                                </div>
                            </div>
                            <div class="post__media">
                                <img src="assets/images/avatar3.png" alt="Avatar" />
                            </div>
                            <div class="post__footer">
                                <div class="post__comments">
                                    <a href="#"><i class="fa-sharp fa-regular fa-comment"></i></a>
                                    <span class="count">45</span>
                                </div>
                                <div class="post__reaction">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    <span class="count">5</span>
                                </div>
                                <div class="post__views">
                                    <a href="#"><i class="fa-solid fa-chart-simple"></i></a>
                                    <span class="count">445</span>
                                </div>
                                <div class="post__shares">
                                    <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                                    <span class="count">4</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- post starts -->
                    <div class="post">
                        <div class="post__avatar">
                            <img src="assets/images/avatar1.png" alt="" />
                        </div>

                        <div class="post__body">
                            <div class="post__header">
                                <div class="post__headerText">
                                    <h3>
                                        Mohammad Maruf
                                        <span class="post__headerSpecial"
                                        ><span class="material-icons post__badge"> verified </span
                                            >@mohammad</span
                                        >
                                    </h3>
                                </div>
                                <div class="post__headerDescription">
                                    <p>
                                        Lorem ipsum, dolo Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Minus commodi ipsum sequi voluptatum,
                                        voluptate vel! r sit amet consectetur adipisicing elit. lo
                                    </p>
                                </div>
                            </div>
                            <div class="post__media">
                                <img src="assets/images/avatar1.png" alt="Avatar" />
                            </div>
                            <div class="post__footer">
                                <div class="post__comments">
                                    <a href="#"><i class="fa-sharp fa-regular fa-comment"></i></a>
                                    <span class="count">45</span>
                                </div>
                                <div class="post__reaction">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    <span class="count">5</span>
                                </div>
                                <div class="post__views">
                                    <a href="#"><i class="fa-solid fa-chart-simple"></i></a>
                                    <span class="count">445</span>
                                </div>
                                <div class="post__shares">
                                    <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                                    <span class="count">4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- post ends -->

                    <!-- post starts -->
                    <div class="post">
                        <div class="post__avatar">
                            <img src="assets/images/avatar5.png" alt="" />
                        </div>

                        <div class="post__body">
                            <div class="post__header">
                                <div class="post__headerText">
                                    <h3>
                                        Borhan Arif
                                        <span class="post__headerSpecial"
                                        ><span class="material-icons post__badge"> verified </span
                                            >@borhanarif</span
                                        >
                                    </h3>
                                </div>
                                <div class="post__headerDescription">
                                    <p>
                                        Lorem ipsum, dolo Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Minus commodi ipsum sequi voluptatum,
                                        voluptate vel! r sit amet consectetur adipisicing elit. lo
                                    </p>
                                </div>
                            </div>
                            <div class="post__media">
                                <img src="assets/images/avatar5.png" alt="Avatar" />
                            </div>
                            <div class="post__footer">
                                <div class="post__comments">
                                    <a href="#"><i class="fa-sharp fa-regular fa-comment"></i></a>
                                    <span class="count">45</span>
                                </div>
                                <div class="post__reaction">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    <span class="count">5</span>
                                </div>
                                <div class="post__views">
                                    <a href="#"><i class="fa-solid fa-chart-simple"></i></a>
                                    <span class="count">445</span>
                                </div>
                                <div class="post__shares">
                                    <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                                    <span class="count">4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- post ends -->

                    <!-- post starts -->
                    <div class="post">
                        <div class="post__avatar">
                            <img src="assets/images/avatar2.png" alt="Avatar" />
                        </div>

                        <div class="post__body">
                            <div class="post__header">
                                <div class="post__headerText">
                                    <h3>
                                        Jhon Doe
                                        <span class="post__headerSpecial"
                                        ><span class="material-icons post__badge"> verified </span
                                            >@jhondoe</span
                                        >
                                    </h3>
                                </div>
                                <div class="post__headerDescription">
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="post__media">
                                <img src="assets/images/avatar2.png" alt="" />
                            </div>
                            <div class="post__footer">
                                <div class="post__comments">
                                    <a href="#"><i class="fa-sharp fa-regular fa-comment"></i></a>
                                    <span class="count">45</span>
                                </div>
                                <div class="post__reaction">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    <span class="count">5</span>
                                </div>
                                <div class="post__views">
                                    <a href="#"><i class="fa-solid fa-chart-simple"></i></a>
                                    <span class="count">445</span>
                                </div>
                                <div class="post__shares">
                                    <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                                    <span class="count">4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- post ends -->

                </div>
            </div>

            <div id="comments" class="tabcontent">
                <div class="posts">
                    <div class="post">
                        <div class="post__avatar">
                            <img src="assets/images/avatar3.png" alt="" />
                        </div>

                        <div class="post__body">
                            <div class="post__header">
                                <div class="post__headerText">
                                    <h3>
                                        Arafat Jamil
                                        <span class="post__headerSpecial"
                                        ><span class="material-icons post__badge"> verified </span
                                            >@arafatjamil</span
                                        >
                                    </h3>
                                </div>
                                <div class="post__headerDescription">
                                    <p>
                                        Lorem ipsum, dolo Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Minus commodi ipsum sequi voluptatum,
                                        voluptate vel! r sit amet consectetur adipisicing elit. lo
                                    </p>
                                </div>
                            </div>
                            <div class="post__media">
                                <img src="assets/images/avatar3.png" alt="Avatar" />
                            </div>
                            <div class="post__footer">
                                <div class="post__comments">
                                    <a href="#"><i class="fa-sharp fa-regular fa-comment"></i></a>
                                    <span class="count">45</span>
                                </div>
                                <div class="post__reaction">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    <span class="count">5</span>
                                </div>
                                <div class="post__views">
                                    <a href="#"><i class="fa-solid fa-chart-simple"></i></a>
                                    <span class="count">445</span>
                                </div>
                                <div class="post__shares">
                                    <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                                    <span class="count">4</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- post starts -->
                    <div class="post">
                        <div class="post__avatar">
                            <img src="assets/images/avatar1.png" alt="" />
                        </div>

                        <div class="post__body">
                            <div class="post__header">
                                <div class="post__headerText">
                                    <h3>
                                        Mohammad Maruf
                                        <span class="post__headerSpecial"
                                        ><span class="material-icons post__badge"> verified </span
                                            >@mohammad</span
                                        >
                                    </h3>
                                </div>
                                <div class="post__headerDescription">
                                    <p>
                                        Lorem ipsum, dolo Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Minus commodi ipsum sequi voluptatum,
                                        voluptate vel! r sit amet consectetur adipisicing elit. lo
                                    </p>
                                </div>
                            </div>
                            <div class="post__media">
                                <img src="assets/images/avatar1.png" alt="Avatar" />
                            </div>
                            <div class="post__footer">
                                <div class="post__comments">
                                    <a href="#"><i class="fa-sharp fa-regular fa-comment"></i></a>
                                    <span class="count">45</span>
                                </div>
                                <div class="post__reaction">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    <span class="count">5</span>
                                </div>
                                <div class="post__views">
                                    <a href="#"><i class="fa-solid fa-chart-simple"></i></a>
                                    <span class="count">445</span>
                                </div>
                                <div class="post__shares">
                                    <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                                    <span class="count">4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- post ends -->

                    <!-- post starts -->
                    <div class="post">
                        <div class="post__avatar">
                            <img src="assets/images/avatar5.png" alt="" />
                        </div>

                        <div class="post__body">
                            <div class="post__header">
                                <div class="post__headerText">
                                    <h3>
                                        Borhan Arif
                                        <span class="post__headerSpecial"
                                        ><span class="material-icons post__badge"> verified </span
                                            >@borhanarif</span
                                        >
                                    </h3>
                                </div>
                                <div class="post__headerDescription">
                                    <p>
                                        Lorem ipsum, dolo Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Minus commodi ipsum sequi voluptatum,
                                        voluptate vel! r sit amet consectetur adipisicing elit. lo
                                    </p>
                                </div>
                            </div>
                            <div class="post__media">
                                <img src="assets/images/avatar5.png" alt="Avatar" />
                            </div>
                            <div class="post__footer">
                                <div class="post__comments">
                                    <a href="#"><i class="fa-sharp fa-regular fa-comment"></i></a>
                                    <span class="count">45</span>
                                </div>
                                <div class="post__reaction">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    <span class="count">5</span>
                                </div>
                                <div class="post__views">
                                    <a href="#"><i class="fa-solid fa-chart-simple"></i></a>
                                    <span class="count">445</span>
                                </div>
                                <div class="post__shares">
                                    <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                                    <span class="count">4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- post ends -->

                    <!-- post starts -->
                    <div class="post">
                        <div class="post__avatar">
                            <img src="assets/images/avatar2.png" alt="Avatar" />
                        </div>

                        <div class="post__body">
                            <div class="post__header">
                                <div class="post__headerText">
                                    <h3>
                                        Jhon Doe
                                        <span class="post__headerSpecial"
                                        ><span class="material-icons post__badge"> verified </span
                                            >@jhondoe</span
                                        >
                                    </h3>
                                </div>
                                <div class="post__headerDescription">
                                    <p>
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="post__media">
                                <img src="assets/images/avatar2.png" alt="" />
                            </div>
                            <div class="post__footer">
                                <div class="post__comments">
                                    <a href="#"><i class="fa-sharp fa-regular fa-comment"></i></a>
                                    <span class="count">45</span>
                                </div>
                                <div class="post__reaction">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                    <span class="count">5</span>
                                </div>
                                <div class="post__views">
                                    <a href="#"><i class="fa-solid fa-chart-simple"></i></a>
                                    <span class="count">445</span>
                                </div>
                                <div class="post__shares">
                                    <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                                    <span class="count">4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- post ends -->
                </div>
            </div>

            <div id="likes" class="tabcontent">
                <div class="followers">
                    <div class="single-follower">
                        <div class="followers_body d-flex">
                            <div class="followers_avater">
                                <img
                                    src="assets/images/avatar1.png"
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
                                        <span class="username">@borhanarif</span>
                                        <p>Lorem ipsum emmit sds dfs shdsf ssf sfh.</p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-follower">
                        <div class="followers_body d-flex">
                            <div class="followers_avater">
                                <img
                                    src="assets/images/avatar2.png"
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
                                        <span class="username">@borhanarif</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quae, odio.
                                        </p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-follower">
                        <div class="followers_body d-flex">
                            <div class="followers_avater">
                                <img
                                    src="assets/images/avatar3.png"
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
                                        <span class="username">@borhanarif</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quae, odio.
                                        </p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-follower">
                        <div class="followers_body d-flex">
                            <div class="followers_avater">
                                <img
                                    src="assets/images/avatar4.png"
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
                                        <span class="username">@borhanarif</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quae, odio.
                                        </p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                        <span class="username">@borhanarif</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quae, odio.
                                        </p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-follower">
                        <div class="followers_body d-flex">
                            <div class="followers_avater">
                                <img
                                    src="assets/images/avatar1.png"
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
                                        <span class="username">@borhanarif</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quae, odio.
                                        </p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-follower">
                        <div class="followers_body d-flex">
                            <div class="followers_avater">
                                <img
                                    src="assets/images/avatar2.png"
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
                                        <span class="username">@borhanarif</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quae, odio.
                                        </p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-follower">
                        <div class="followers_body d-flex">
                            <div class="followers_avater">
                                <img
                                    src="assets/images/avatar3.png"
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
                                        <span class="username">@borhanarif</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quae, odio.
                                        </p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-follower">
                        <div class="followers_body d-flex">
                            <div class="followers_avater">
                                <img
                                    src="assets/images/avatar3.png"
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
                                        <span class="username">@borhanarif</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quae, odio.
                                        </p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-follower">
                        <div class="followers_body d-flex">
                            <div class="followers_avater">
                                <img
                                    src="assets/images/avatar4.png"
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
                                        <span class="username">@borhanarif</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quae, odio.
                                        </p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <span class="username">@borhanarif</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quae, odio.
                                        </p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <span class="username">@borhanarif</span>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Quae, odio.
                                        </p>
                                    </div>
                                    <div class="followers_follow">
                                        <button>Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="show_more">
                        <button>Show more</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- feed ends -->


@section('scripts')
    <script>
        tabcontentFirst = document.getElementById("profile_posts");
        tabcontentFirst.style.display = "block";
        function openTabs(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

@endsection
