
<div class="video-banner">    
    <video autoplay muted loop id="myVideo">
        <source src="<?php echo COMMON_VIDEO;?>polban.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="user-interest-navigation max-width-outter">
        <a href="#" class="more">
            <span><?php echo $lang_navigation_for_registrant;?></span>
            <img src="<?php echo COMMON_ICON?>writing-student-white.png"> 
        </a>
            
        <a href="#" class="more">
            <span><?php echo $lang_navigation_for_active_student;?></span>
            <img src="<?php echo COMMON_ICON?>learning-student-white.png"> 
        </a>
            
        <a href="#" class="more">
            <span><?php echo $lang_navigation_for_company;?></span>
            <img src="<?php echo COMMON_ICON?>company-white.png"> 
        </a>
            
        <a href="#" class="more">
            <span><?php echo $lang_navigation_for_graduate;?></span>
            <img src="<?php echo COMMON_ICON?>graduated-white.png"> 
        </a>
    </div>
</div>
<div>
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
            <a href= "<?php echo PRODI_PATH; ?>"  class="d3">
                <div 
                class="img"
                style="background-image: url('<?php echo COMMON_IMAGE?>study-program-banner-2.jpg')">
                    <div class="sub-title">
                        <h3> <?php echo $lang_study_program_D3; ?> </h3>
                    </div>
                </div>
            </a>
            <a href= "<?php echo PRODI_PATH; ?>"  class="d4">
                <div 
                class="img"
                style="background-image: url('<?php echo COMMON_IMAGE?>study-program-banner-1.jpg')">
                    <div class="sub-title">
                        <h3> <?php echo $lang_study_program_D4; ?> </h3>
                    </div>
                </div>
            </a>
        </div>
        <a href="<?php echo PRODI_PATH;?>" class="more">
                    <span> <?php echo $lang_navigation_studi_programs_profile; ?> </span>
                    <img src="<?php echo COMMON_ICON?>arrow-white-right.png"> 
        </a>
        <!-- <div class="icon">
            <img src="<?php echo COMMON_ICON?>course-white.png">
        </div> -->
    </section>
    <section class="research-list banner"
        style="background-image: url(<?php echo COMMON_IMAGE?>research-list-banner.jpg)"
        >
        <?php 
            $research = mysqli_fetch_array($get_all_research); 
            // query untuk mendapatkan news dengan category research, dan berisikan data khusus research
            // SELECT * FROM `news` 
            //     join `sys_category` on `sys_category`.`id`= `news`.`sys-category-id` 
            //     join `user` on `user`.`id`= `news`.`user-id` 
            //     join `news-by-category` on `news`.`id` = `news-by-category`.`news-id` 
            //     join `research` on `news-by-category`.`child-category-id`=`research`.`id`
            //     	WHERE `news`.`sys-category-id` = 2;

            // `news`.`id` as `id`,
            // `user`.`nama` as `creator`,
            // `news`.`title` as `title`
            // get all news activity
            // SELECT * FROM `news` 
            // join `sys_category` on `sys_category`.`id`= `news`.`sys-category-id` 
            // join `user` on `user`.`id`= `news`.`user-id` 
            // join `news-by-category` on `news`.`id` = `news-by-category`.`news-id` 
            // join `activity` on `news-by-category`.`child-category-id`=`activity`.`id`
            //     WHERE `news`.`sys-category-id` = 4;

        ?>
        <div class="wrapper">
            <div class="description">
                <h2 class="title"><b><?php echo $lang_navigation_research;?></b></h2>
            </div>
            <div class="list-slider">
                <div class="go prev">
                    <button>
                        <img src="<?php echo COMMON_ICON?>arrow-white-left.png"> 
                    </button>
                </div>
                <div class="content">
                    <div class="image-wrapper">
                        <img src="<?php echo RESEARCH_IMAGE.$research["image-name"];?>">
                    </div>
                    <div class="detail">
                        <div class="title">
                            <h3><?php echo $research["title"];?></h3>
                        </div>
                        <div class="description">
                            <p>
                            <?php echo $research["description"];?>
                            </p>
                            <a href="<?php echo ACHIVEMENT_LIST_PATH ?>" class="more">
                                <span><?php echo $lang_navigation_research_list;?></span>
                                <img src="<?php echo COMMON_ICON?>arrow-white-right.png"> 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="go next">
                    <button>
                        <img src="<?php echo COMMON_ICON?>arrow-white-right.png"> 
                    </button>
                </div>
                <div class="navigation-marker">
                . . . . .     
                </div>
            </div>
        </div>
    </section>
    <section class="agenda banner"
        style="background-image: url(<?php echo COMMON_IMAGE?>agenda-banner.jpg)"
        >
        <div class="wrapper">
            <div class="description">
                <div class="icon">
                    <img src="<?php echo COMMON_ICON?>calendar-white.png">
                </div>
                <div class="title">
                    <h2>
                        <b>
                        <?php echo $lang_navigation_agenda;?>
                        </b>
                    </h2>
                </div>
                <div class="more-wrapper">
                    <a class="more">
                        <span><?php echo $lang_navigation_for_more;?></span>
                        <img src="<?php echo COMMON_ICON?>arrow-white-right.png"> 
                    </a>
                </div>
            </div>
            <div class="event-list">
                <?php 
                $max_list = 4;
                $iterator = 0;
                while($news_activity = mysqli_fetch_array($get_all_news_activity)){
                    if (is_null($news_activity['primary-image'])){
                        $img_url = ACTIVITY_IMAGE.$news_activity['secondary-image'];
                    }else{
                        $img_url = ACTIVITY_IMAGE.$news_activity['primary-image'];
                    }
                    echo <<<HEREDOC
                    <a href="#" class="card"
                        style="background-image: url('$img_url')">
                        <div class="card-description">
                            <h3>{$news_activity['title']}</h3> </br>
                            <span>{$news_activity['activity-date']}</span> </br>
                            <span>{$news_activity['activity-time']}</span>
                        </div>
                    </a>
                    HEREDOC;
                    $iterator ++;
                    if($iterator>=$max_list){
                        break;
                    }
                }
                ?>
            <!-- Static sample
                <a href="#" class="card"
                    style="background-image: url('<?php echo AGENDA_IMAGE?>Kajian Sains dan Teknologi Islam Seri 3.jpg')">
                    <div class="card-description">
                        <h3>Kajian Sains dan Teknologi Islam Seri #3</h3> </br>
                        <span>Sabtu, 18 Desember 2021</span> </br>
                        <span>09.00 ~ 11.00</span>
                    </div>
                </a>
                <a href="#" class="card"
                    style="background-image: url('<?php echo AGENDA_IMAGE?>Kajian Sains dan Teknologi Islam Seri 2.jpg')">
                    <div class="card-description">
                        <h3>Kajian Sains dan Teknologi Islam Seri #2</h3> </br>
                        <span>Sabtu, 16 Oktober 2021</span> </br>
                        <span>09.00 ~ 11.00</span>
                    </div>
                </a>
                <a href="#" class="card"
                    style="background-image: url('<?php echo AGENDA_IMAGE?>Kajian Sains dan Teknologi Islam Seri 1.jpg')">
                    <div class="card-description">
                        <h3>Kajian Sains dan Teknologi Islam Seri #1</h3> </br>
                        <span>Sabtu, 7 Juli 2021</span> </br>
                        <span>09.00 ~ 11.00</span>
                    </div>
                </a>
                <a href="#" class="card"
                    style="background-image: url('<?php echo AGENDA_IMAGE?>Kajian Sains dan Teknologi Islam Seri 2.jpg')">
                    <div class="card-description">
                        <h3>Kajian Sains dan Teknologi Islam Seri #1</h3> </br>
                        <span>Sabtu, 7 Juli 2021</span> </br>
                        <span>09.00 ~ 11.00</span>
                    </div>
                </a>  
            -->
            </div>
        </div>
    </section>
    <section class="news banner">
        <div class="wrapper">
            <div class="description">
                <div class="more-wrapper">
                    <a class="more">
                        <span><?php echo $lang_navigation_news;?></span>
                        <img src="<?php echo COMMON_ICON?>arrow-white-right.png"> 
                    </a>
                </div>
                <div class="title">
                    <h2>
                        <b>
                        <?php echo $lang_navigation_news;?>
                        </b>
                    </h2>
                </div>
                <div class="icon">
                    <img src="<?php echo COMMON_ICON?>news-black.png">
                </div>
            </div>
            <div class="news-list">
                <?php 
                $max_list = 4;
                $iterator = 0;
                while($news = mysqli_fetch_array($get_all_news_desc_by_publish_date)){
                    echo <<<HEREDOC
                    <a href="#" class="news-item">
                        <div class="date">
                            {$news['publish-date']}
                        </div>
                        <div class="category"
                        style="border-color: {$news['category-color']};"
                        >
                            {$news['category']}
                        </div>
                        <div class="news-title">
                            {$news['title']}
                        </div>
                    </a>
                    HEREDOC;
                    $iterator ++;
                    if($iterator>=$max_list){
                        break;
                    }
                }
                ?>
            <!-- Static sample
                <a href="#" class="news-item">
                    <div class="date">
                    2019-04-26
                    </div>
                    <div class="category"
                    style="border-color: green;"
                    >
                    Beasiswa
                    </div>
                    <div class="news-title">
                    pendaftaran beasiswa Digital Talent Scholarship 2019
                    </div>
                </a>
                <a href="#"  class="news-item">
                    <div class="date">
                    2018-11-28
                    </div>
                    <div class="category">
                    Informasi
                    </div>
                    <div class="news-title">
                    Pemilihan Ketua Jurusan JTK Masa Bakti 2019-2022
                    </div>
                </a>
                <a href="#"  class="news-item">
                    <div class="date">
                    2018-08-28
                    </div>
                    <div class="category"
                    style="border-color: orange;">
                    PKM
                    </div>
                    <div class="news-title">
                    Pengabdian kepada Masyarakat (PKM) di Sekolah Dasar IT Ibnu Khaldun
                    </div>
                </a>
                <a href="#"  class="news-item">
                    <div class="date">
                    2015-04-17
                    </div>
                    <div class="category">
                    Informasi
                    </div>
                    <div class="news-title">
                    Tim Robotika POLBAN di Coffee Break, tvOne, 17 April 2015
                    </div>
                </a>
            -->
            </div>
        </div>
    </section>

</div>