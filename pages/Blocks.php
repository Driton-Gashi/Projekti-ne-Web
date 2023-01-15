<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/img/icons/favicon.ico" type="image/x-icon" />
    <title>Minecraft Project- Blocks</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/sub-pages.css" />
    <link rel="stylesheet" href="../css/slider.css" />
</head>
<!-- Loading Effect -->

<body class="noScroll">
    <div class="loader-wrapper">
        <img src="../assets/img/icons/Minecraft-block.png" alt="" class="loader" />
        <img src="../assets/img/icons/Minecraft-Logo.png" width="300px" alt="" />
    </div>
    <script>
    window.addEventListener("load", () => {
        document.querySelector(".loader-wrapper").classList.add("hide");
        document.body.classList.remove("noScroll");
    });
    </script>
    <!-- Loading Effect end -->

    <!-- Website under Construction image -->
    <img src="../assets/img/site-under-construction.jpg" alt="" class="under-construction" />
    <!--Shto autoplay tek audio per mu dhez muzika vet  -->
    <audio loop class="minecraft-audio">
        <source src="../assets/audio/Minecraft-Theme-Song.mp3" type="audio/mp3" />
    </audio>

    <div class="background">
        <header>
            <div class="logo">
                <a href="../index.php">
                    <img width="130px" src="../assets/img/icons/Minecraft-Logo.png" alt="" />
                </a>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../index.php#about">About</a></li>
                    <li class="dropdown-parent">
                        <a href="#">Guide <i class="bi bi-chevron-down dropdown-icon"></i></a>
                        <ul class="dropdown hide">
                            <li onclick="(()=>{
                window.location = '../pages/Mobs.php'
              })()">
                                Mobs
                            </li>
                            <li onclick="(()=>{
                window.location = '../pages/Blocks.php'
              })()">
                                Blocks
                            </li>
                            <li onclick="(()=>{
                window.location = '../pages/Foods.php'
              })()">
                                Foods
                            </li>
                            <li onclick="(()=>{
                window.location = '../pages/Tools.php'
              })()">
                                Tools
                            </li>
                        </ul>
                    </li>
                    <li><a href="../index.php#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="header-icons">
                <i class="bi bi-volume-up-fill unMute"></i>

                <i class="bi bi-volume-mute-fill mute hide"></i>

                <div class="profile hide">
                    <img src="../assets/img/icons/profile-image(default).png" alt="" />
                    <ul class="profile-menu hide">
                        <li onclick="changeName()" class="edit-profile-li">
                            <i class="bi bi-person-circle"></i>
                            <div class="edit-profile-text-wrapper">
                                Edit Username &ThinSpace;
                            </div>
                            <input title="Press Enter to save changes" disabled class="name" type="text"
                                value="admin" />
                        </li>
                        <li class="status-wrapper">
                            <i class="bi bi-chat-dots"></i>
                            <select title="Change your status" onchange="statusChange()" class="status" name="" id="">
                                <option value="active">
                                    Active <span class="dot green"></span>
                                </option>
                                <option value="busy">Busy</option>
                                <option value="invisible">Invisible</option>
                            </select>
                        </li>
                        <li><i class="bi bi-gear-fill"></i> Settings</li>
                        <li onclick="logOut()">
                            <i class="bi bi-box-arrow-left"></i> Log Out
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="hero">
            <div class="slideshow">
                <div class="moving">
                    <div class="slide-box">
                        <img src="../assets/img/slider/new blocks.jpg" alt="" />
                        <h1 class="slide-box-text">New Blocks</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/boom.jpg" alt="" />
                        <h1 class="slide-box-text">Booooooooom!</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/tools.jpg" alt="" />
                        <h1 class="slide-box-text">Gather Your Strength</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/friends.jpg" alt="" />
                        <h1 class="slide-box-text">Unite. Fight. Survive</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/lapiz.png" alt="" />
                        <h1 class="slide-box-text">I Thought I Found Diamonds</h1>
                    </div>
                    <div class="slide-box">
                        <img src="../assets/img/slider/building.jpg" alt="" />
                        <h1 class="slide-box-text">Bob The Builder</h1>
                    </div>
                </div>
                <div class="slider-command">
                    <button onclick="forward()" class="slider-btn">
                        <i class="bi bi-forward-fill"></i>
                    </button>

                    <button onclick="back()" class="slider-btn">
                        <i class="bi bi-forward-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="collection" class="collection">
        <h1 class="collection-title flex-center">
            Blocks Collection &MediumSpace;
            <img width="50px" src="../assets/img/icons/block.gif" alt="" />
        </h1>
        <div class="collection-content">
            <div class="collection-header">
                <div class="collection-buttons-wrapper">
                    <button onclick="filterBox('block')" class="collection-btn">Block</button>
                    <button onclick="filterBox('bricks')" class="collection-btn">Bricks</button>
                    <button onclick="filterBox('stone')" class="collection-btn">Stone</button>
                    <button onclick="filterBox('')" class="collection-btn">Resetg</button>
                </div>
                <div class="collection-search-wrapper">
                    <input type="text" class="collection-search-input" placeholder="Search Block" />
                    <button class="collection-search-btn">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            <div class="collection-body">
            </div>
        </div>
    </div>


    <div class="before-footer">
        <img src="../assets/img/blocks/dirt.png" alt="" />
        <img src="../assets/img/blocks/emerald.png" alt="" />
        <img src="../assets/img/blocks/lapis.png" alt="" />
        <img src="../assets/img/blocks/obsidian.png" alt="" />
        <img src="../assets/img/blocks/diamond.png" alt="" />
        <img src="../assets/img/blocks/bricks.png" alt="" />
        <img src="../assets/img/blocks/cobblestone.png" alt="" />
        <img src="../assets/img/blocks/glass.png" alt="" />
        <img src="../assets/img/blocks/mossy.png" alt="" />
    </div>
    <footer>
        <div class="footer-blur">
            <div class="footer-top">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>
                        Explore infinite worlds and build everything from the simplest of homes to the grandest of
                        castles. Play in creative mode with unlimited resources or mine deep into the world in survival
                        mode, crafting weapons and armor to fend off dangerous mobs. Create, explore and survive alone
                        or with friends
                    </p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#top">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="../index.php#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>123 Lorem ipsum.</p>
                    <p>Peje, 30000</p>
                    <p>04* *** ***</p>
                    <p>
                        <a href="mailto:dritongashi1995@gmail.com">dritongashi1995@gmail.com</a>
                    <p><a href="mailto:ermalmusaj0@gmail.com">ermalmusaj0@gmail.com</a></p>

                    </p>
                </div>
                <div class="footer-section">
                    <img src="../assets/img/icons/Minecraft-Logo.png" alt="" />
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">copyright Minecraft &copy; 2023 || Created by Driton Gashi && Ermal Musaj (Shota)
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="../js/header.js"></script>
<script src="../js/sign-up.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/blocks-data.js"></script>

</html>