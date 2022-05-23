
<script>
    const linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.type = "text/css";
    linkElement.href = "<?php echo STYLE_PATH ?>profile.css"; 
    document.head.appendChild(linkElement);
</script>

<div class="page">
    <div class="page-title"
        style="background-image: url('<?php echo COMMON_IMAGE ?>profile-page-banner.jpg');"
        >
        <div class="title">
            <h1><?php echo $lang_navigation_profile ?></h1>
        </div>
        <div class="breadcrumb">
            <a href = "<?php echo HOME_PATH ?>">
                <img src="<?php echo COMMON_ICON ?>home-white.png"> 
            </a>   
            <span> > </span>
            <span><a class="active" href="#"><?php echo $lang_navigation_profile ?></a></span>
        </div>
    </div>
    <section class="major banner">
        <div class="description">
            <?php 
                // get major
                $major = mysqli_fetch_array($get_major);
            ?>
            <h2 class="title"><b><?php echo $major['code'];?></b></h2>
            <div class="content">
                <h2><?php echo $major['name'];?></h2>
                <p><?php echo $major['description'];?></p>
            </div>
            <a href="<?php echo PRODI_PATH;?>" class="more">
                <span><?php echo $lang_navigation_major_profile;?></span>
                <img src="<?php echo COMMON_ICON?>arrow-white-right.png"> 
            </a>
        </div>
        <div 
            class="image"
            style="background-image: url(<?php echo COMMON_IMAGE?>major-banner.jpg)"
            >
        </div>
    </section>
    <section class="study-program banner">
        <div class="description">
            <h2 class="title"><b> <?php echo $lang_study_program_long; ?> </b></h2>
        </div>
        <div class="image">
            <div class="d3">
                <div 
                class="img"
                style="background-image: url('<?php echo COMMON_IMAGE?>study-program-banner-2.jpg')">
                    <div class="sub-title">
                        <h3> <?php echo $lang_study_program_D3; ?> </h3>
                    </div>
                </div>
            </div>
            <div class="d4">
                <div 
                class="img"
                style="background-image: url('<?php echo COMMON_IMAGE?>study-program-banner-1.jpg')">
                    <div class="sub-title">
                        <h3> <?php echo $lang_study_program_D4; ?> </h3>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo PRODI_PATH;?>" class="more">
                    <span> <?php echo $lang_navigation_studi_programs_profile; ?> </span>
                    <img src="<?php echo COMMON_ICON?>arrow-white-right.png"> 
        </a>
        <!-- <div class="icon">
            <img src="<?php echo COMMON_ICON?>course-white.png">
        </div> -->
    </section>
    <section class="staff banner"
        style="background-image: url('<?php echo COMMON_IMAGE?>staff-banner.jpg')">
        <div class="staff-overlay"></div>
        <div class="description">
            <h2 class="title"><b>Staff JTK</b></h2>
        </div>
        <div class="staff-list">
        <?php 
                $max_list = 4;
                $iterator = 0;
                $img_linkdin = COMMON_ICON."linkedin-white.png";
                $img_mail = COMMON_ICON."mail-white.png";
                $img_go = COMMON_ICON."arrow-white-right.png";
                while($staff = mysqli_fetch_array($get_all_staff)){
                    $img_url = STAFF_IMAGE.$staff['image-name'];
                    echo <<<HEREDOC
                    <div class="staff">
                        <div class="wrapper">
                            <img class="photo" src= "{$img_url}">
                            <div class="detail">
                                <div class="text">
                                        <h3>{$staff['name']}</h3>
                                        <p>{$staff['position']}</p>
                                        <p>{$staff['expertise']}</p>
                                </div>
                                <div class="sosmed">
                                        <button>
                                            <img src="{$img_linkdin}">
                                        </button>
                                        <button>
                                            <img src="{$img_mail}">
                                        </button>
                                        <a href="#">
                                            <img src="{$img_go}">
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    HEREDOC;
                    $iterator ++;
                    if($iterator>=$max_list){
                        break;
                    }
                }
                ?>
        <!-- static sample
            <div class="staff">
                <div class="wrapper">
                    <img class="photo" src= "<?php echo STAFF_IMAGE?>wendi.jpg">
                    <div class="detail">
                        <div class="text">
                                <h3>nama</h3>
                                <p>posisi</p>
                                <p>expertise</p>
                        </div>
                        <div class="sosmed">
                                <button>
                                    <img src="<?php echo COMMON_ICON?>linkedin-white.png">
                                </button>
                                <button>
                                    <img src="<?php echo COMMON_ICON?>mail-white.png">
                                </button>
                                <a href="#">
                                    <img src="<?php echo COMMON_ICON?>arrow-white-right.png">
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="staff">
                <div class="wrapper">
                    <img class="photo" src= "<?php echo STAFF_IMAGE?>wendi.jpg">
                    <div class="detail">
                        <div class="text">
                                <h3>nama</h3>
                                <p>posisi</p>
                                <p>expertise</p>
                        </div>
                        <div class="sosmed">
                                <button>
                                    <img src="<?php echo COMMON_ICON?>linkedin-white.png">
                                </button>
                                <button>
                                    <img src="<?php echo COMMON_ICON?>mail-white.png">
                                </button>
                                <a href="#">
                                    <img src="<?php echo COMMON_ICON?>arrow-white-right.png">
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="staff">
                <div class="wrapper">
                    <img class="photo" src= "<?php echo STAFF_IMAGE?>wendi.jpg">
                    <div class="detail">
                        <div class="text">
                                <h3>nama</h3>
                                <p>posisi</p>
                                <p>expertise</p>
                        </div>
                        <div class="sosmed">
                                <button>
                                    <img src="<?php echo COMMON_ICON?>linkedin-white.png">
                                </button>
                                <button>
                                    <img src="<?php echo COMMON_ICON?>mail-white.png">
                                </button>
                                <a href="#">
                                    <img src="<?php echo COMMON_ICON?>arrow-white-right.png">
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="staff">
                <div class="wrapper">
                    <img class="photo" src= "<?php echo STAFF_IMAGE?>wendi.jpg">
                    <div class="detail">
                        <div class="text">
                                <h3>nama</h3>
                                <p>posisi</p>
                                <p>expertise</p>
                        </div>
                        <div class="sosmed">
                                <button>
                                    <img src="<?php echo COMMON_ICON?>linkedin-white.png">
                                </button>
                                <button>
                                    <img src="<?php echo COMMON_ICON?>mail-white.png">
                                </button>
                                <a href="#">
                                    <img src="<?php echo COMMON_ICON?>arrow-white-right.png">
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        -->
        </div>
    </section>
</div>