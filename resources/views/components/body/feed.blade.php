
<div class="feed">
    <div class="feed__header">
        <h2>Home</h2>
    </div>

    <!-- tweetbox starts -->
    <div class="tweetBox_wrap">
        <div class="tweetBox d-flex">
            <div class="tweetBox__avatar">
                <div class="post__avatar">
                    <img
                        src="assets/images/avatar5.png"
                        alt=""
                    />
                </div>
            </div>

            <div class="tweetbox__input">
                <form method="POST" action="{{ route( 'home.savepost') }}" enctype="multipart/form-data">
                    @csrf
                <textarea
                    placeholder="What's happening?"
                    name="status"
                    rows="3"
                    cols="50"
                ></textarea>
                    <div id="inputed_media">
                        <button type="button" id="imag_close_btn">X</button>
                        <img id="inputed_media_src" src="#">
                    </div>
                    <div class="tweet_upload_wrap  d-flex">
                        <div class="media_placeholder">
                            <input type="file" onchange="loadFile(event)" name="images[]" multiple id="upload_content">

                        </div>
                        <button type="submit" class="tweetBox__tweetButton">Post</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- tweetbox ends -->

    <div class="posts_wrap">

        <div class="post">
            <div class="post__avatar">
                <img src="assets/images/avatar5.png" alt="Avatar" />
            </div>

            <div class="post__body">
                <div class="post__header">
                    <div class="post__headerText">
                        <h3>
                            Asif Adnan
                            <span class="post__headerSpecial"
                            ><span class="material-icons post__badge"> verified </span
                                >@asifadnan</span
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


        <div class="post">
            <div class="post__avatar">
                <img src="assets/images/avatar4.png" alt="" />
            </div>

            <div class="post__body">
                <div class="post__header">
                    <div class="post__headerText">
                        <h3>
                            Nahid Bro
                            <span class="post__headerSpecial"
                            ><span class="material-icons post__badge"> verified </span
                                >@nahidbro</span
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
                    <img src="assets/images/avatar4.png" alt="Avatar" />
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
