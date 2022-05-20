
<div class="video-banner">    
    <video autoplay muted loop id="myVideo">
        <source src="<?php echo COMMON_VIDEO;?>polban.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="user-interest-navigation max-width-outter">
        <a class="more">
            <span><?php echo $lang_navigation_for_registrant;?></span>
            <img src="<?php echo COMMON_ICON?>writing-student-white.png"> 
        </a>
            
        <a class="more">
            <span><?php echo $lang_navigation_for_active_student;?></span>
            <img src="<?php echo COMMON_ICON?>learning-student-white.png"> 
        </a>
            
        <a class="more">
            <span><?php echo $lang_navigation_for_company;?></span>
            <img src="<?php echo COMMON_ICON?>company-white.png"> 
        </a>
            
        <a class="more">
            <span><?php echo $lang_navigation_for_graduate;?></span>
            <img src="<?php echo COMMON_ICON?>graduated-white.png"> 
        </a>
    </div>
</div>
<div>
    <section class="major banner">
        <div class="description">
            <h2 class="title"><b><?php echo $lang_major_code;?></b></h2>
            <div class="content">
                <?php 
                echo <<<HEREDOC
                <h2>$lang_major_short</h2>
                <p>$lang_major_description
                </p>
                HEREDOC;
                ?>
            </div>
            <button class="more">
                <span><?php echo $lang_navigation_major_profile;?></span>
                <img src="<?php echo COMMON_ICON?>arrow-white-right.png"> 
            </button>
        </div>
        <div 
            class="image"
            style="background-image: url(<?php echo COMMON_IMAGE?>major-banner.jpg)"
            >
        </div>
    </section>
    <section class="study-program banner">
        <div class="description">
            <h2 class="title"><b>Study Program</b></h2>
        </div>
        <div class="image">
            <div class="d3">
                <div 
                class="img"
                style="background-image: url('<?php echo COMMON_IMAGE?>study-program-banner-2.jpg')">
                    <div class="sub-title">
                        <h3>D-3</h3>
                    </div>
                </div>
            </div>
            <div class="d4">
                <div 
                class="img"
                style="background-image: url('<?php echo COMMON_IMAGE?>study-program-banner-1.jpg')">
                    <div class="sub-title">
                        <h3>D-4</h3>
                    </div>
                </div>
            </div>
        </div>
        <button class="more">
                    <span>Profile Prodi....</span>
                    <img src="<?php echo COMMON_ICON?>arrow-white-right.png"> 
        </button>
        <!-- <div class="icon">
            <img src="<?php echo COMMON_ICON?>course-white.png">
        </div> -->
    </section>
    <section class="research-list banner"
        style="background-image: url(<?php echo COMMON_IMAGE?>research-list-banner.jpg)"
        >
        <div class="wrapper">
            <div class="description">
                <h2 class="title"><b>Penelitian</b></h2>
            </div>
            <div class="list-slider">
                <div class="go prev">
                    <button>
                        <img src="<?php echo COMMON_ICON?>arrow-white-left.png"> 
                    </button>
                </div>
                <div class="content">
                    <div class="image-wrapper">
                        <img src="<?php echo RESEARCH_IMAGE?>Analisis Penerapan Pemeringkatan ReconRank Query Singleterm untuk Query Multiterm Web Semantik.jpg">
                    </div>
                    <div class="detail">
                        <div class="title">
                            <h3>Analisis Penerapan Pemeringkatan ReconRank Query 
                                Singleterm untuk Query Multiterm Web Semantik
                            </h3>
                        </div>
                        <div class="description">
                            <p>
                            Informasi yang tersedia di internet sekarang ini 
                            sangat banyak sehingga untuk mendapatkan suatu 
                            informasi dibutuhkan alat untuk mencari informasi 
                            tersebut dengan cepat. Search engine atau mesin 
                            pencari menyediakan fasilitas untuk pencarian 
                            informasi yang dibutuhkan dari World Wide Web 
                            (WWW) yang berisi berbagai halaman HTML dan link 
                            lainnya. Search engine ini dapat menampilkan 
                            informasi yang relevan sesuai dengan query berupa 
                            keyword yang diinputkan oleh user. 
                            </p>
                            <a class="more">
                                <span><?php echo $lang_navigation_for_more;?></span>
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
            </div>
        </div>
    </section>
</div>