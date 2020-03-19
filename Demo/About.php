<?php
include("includes/header.php");


if(isset($_POST['post'])){
    $post = new Post($con, $userLoggedIn);
    $post->submitPost($_POST['post_text'], 'none');
}
?>
<style>

    body{
        line-height: 17px;
        background-color: #E6EAE8;
    }

    .fadeIn .first{
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
    @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

    .fadeIn {
        opacity:0;
        -webkit-animation:fadeIn ease-in 1;
        -moz-animation:fadeIn ease-in 1;
        animation:fadeIn ease-in 1;

        -webkit-animation-fill-mode:forwards;
        -moz-animation-fill-mode:forwards;
        animation-fill-mode:forwards;

        -webkit-animation-duration:1s;
        -moz-animation-duration:1s;
        animation-duration:1s;
    }

    .fadeIn.first {
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .fadeIn.second {
        -webkit-animation-delay: 0.6s;
        -moz-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .fadeIn.third {
        -webkit-animation-delay: 0.8s;
        -moz-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }

    .fadeIn.fourth {
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
    }
    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    .card-about{
        width: 90%;
        max-width: 450px;
        position: relative;
        padding: 0px;
        -webkit-box-shadow: 20px 30px 60px 0;
        text-align: center;
        border: white;
        border-radius: 10px; padding: 30px;
        margin: 10px 10px 10px 10px;
    }
</style>
<body>



<!--    <div id="formContent">-->
        <div class="col card-about btn btn-dark">
            <form>
                <div class="fadeIn first">
                    <img src="assets/images/profile_pics/nael.jpeg" style="border-radius: 50%;margin: 10px 10px 10px 10px" id="icon" alt="User Icon" />
                    <p style="color: black">NIM : 00000028452</p>
                    <p style="color: black">Nama : Nathnael Christianto Amadea</p>
                    <p style="color: black">Angkatan  : 2018</p>
                </div>
            </form>
            <p style="color: black ">THE COOLEST PERSON EVER</p>
            <a href="data.php" class="btn btn-danger" style="margin:10px 10px 10px 10px ">Go Back</a>

        </div>

        <div class="col card-about btn btn-dark">
            <form>
                <div class="fadeIn first">
                    <img src="assets/images/profile_pics/nael.jpeg" style="border-radius: 50%;margin: 10px 10px 10px 10px" id="icon" alt="User Icon" />
                    <p style="color: black">NIM : 00000028452</p>
                    <p style="color: black">Nama : Nathnael Christianto Amadea</p>
                    <p style="color: black">Angkatan  : 2018</p>
                </div>
            </form>
            <p style="color: black ">THE COOLEST PERSON EVER</p>
            <a href="data.php" class="btn btn-danger" style="margin:10px 10px 10px 10px ">Go Back</a>

        </div>



            <!--    <div id="formContent">-->
            <div class="col card-about btn btn-dark">
                <form>
                    <div class="fadeIn first">
                        <img src="assets/images/profile_pics/nael.jpeg" style="border-radius: 50%;margin: 10px 10px 10px 10px" id="icon" alt="User Icon" />
                        <p style="color: black">NIM : 00000028452</p>
                        <p style="color: black">Nama : Nathnael Christianto Amadea</p>
                        <p style="color: black">Angkatan  : 2018</p>
                    </div>
                </form>
                <p style="color: black ">THE COOLEST PERSON EVER</p>
                <a href="data.php" class="btn btn-danger" style="margin:10px 10px 10px 10px ">Go Back</a>

            </div>

            <div class="col card-about btn btn-dark"    >
                <form>
                    <div class="fadeIn first">
                        <img src="assets/images/profile_pics/nael.jpeg" style="border-radius: 50%;margin: 10px 10px 10px 10px" id="icon" alt="User Icon" />
                        <p style="color: black">NIM : 00000028452</p>
                        <p style="color: black">Nama : Nathnael Christianto Amadea</p>
                        <p style="color: black">Angkatan  : 2018</p>
                    </div>
                </form>
                <p style="color: black ">THE COOLEST PERSON EVER</p>
                <a href="data.php" class="btn btn-danger" style="margin:10px 10px 10px 10px ">Go Back</a>

            </div>


</body>
</html>