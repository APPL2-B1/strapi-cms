<?php 
include "path.php"; 
include LANGUAGE_PATH."language_config.php"; 
include DATA_BASE_PATH."data_base_config.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $lang_web_title; ?></title>
    <meta charset="UTF-8">
    <meta name="description" contents="<?php echo $lang_web_description; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" type="image/png" href="<?php echo COMMON_LOGO?>polban-without-text.png"/>
    <link rel="stylesheet" href="<?php echo STYLE_PATH?>index.css" type="text/css">
</head>
<body class="">
<span id="top"></span>
    <!-- header -->
    <header>
        <!-- toolbars -->
        <div class="bg-secondary toolbar-wrapper">
            <div class="container toolbar">
                <!-- change language button set -->
                    <div class="toolbar-element">
                    <a href="?lang=lang_english">
                        <img src="<?php echo COMMON_ICON?>um.svg" 
                        title="<?php echo $lang_navigation_english; ?>" 
                        class="icon-flag" style="width:25px">
                    </a>
                    </div>
                    <div class="toolbar-element">
                    <a href="?lang=lang_indonesian">
                        <img src="<?php echo COMMON_ICON?>id.svg" 
                        title="<?php echo $lang_navigation_indonesian; ?>" 
                        class="icon-flag" style="width:25px">
                    </a>
                    </div>
                    <div class="toolbar-element">
                    <a href="?lang=lang_japanese">
                        <img src="<?php echo COMMON_ICON?>jp.svg" 
                        title="<?php echo $lang_navigation_japanese; ?>" 
                        class="icon-flag" style="width:25px">
                    </a>
                    </div>
                <!-- search bar -->
                <div class="toolbar-element">
                     <a href="index.php?page=search">
                        <img class="search-icon"src="<?php echo COMMON_ICON?>magnifier.png" 
                        title="<?php echo $lang_navigation_search; ?>" class="icon-flag" style="width:25px">
                      </a>
                </div>
                <!-- toggle bar -->
                <div class="toolbar-element toggle-bar">
                    <label class="switch"  title="<?php echo $lang_navigation_toggle_template; ?>" >
                        <div>
                        <input class="toggle-theme" type="checkbox" />
                        <span class="slider round"></span>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <div>
            <nav class="full-page-menu" id="navigation">
                <ul>
                    <img class="logo" src="<?php echo COMMON_LOGO;?>polban.png">
                    <li><a href="<?php echo HOME_PATH?>"><?php echo $lang_navigation_home; ?></a></li>
                    <li>
                        <a href="<?php echo PROFILE_PATH?>"><?php echo $lang_navigation_profile; ?></a>
                        <div class="dropdown">
                            <a href="<?php echo MAJOR_PATH?>"><?php echo $lang_navigation_major_profile;?></a>
                            <a href="<?php echo PRODI_PATH?>"><?php echo $lang_navigation_studi_programs_profile;?></a>
                            <a href="<?php echo STAFF_PROFILE_LIST_PATH?>"><?php echo $lang_navigation_staff_profile_list;?></a>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo EDUCATION_PATH?>"><?php echo $lang_navigation_education; ?></a>
                        <div class="dropdown">
                            <a href="<?php echo CURRICULUM_PATH?>"><?php echo $lang_navigation_curriculum;?></a>
                            <a href="<?php echo AGENDA_PATH?>"><?php echo $lang_navigation_agenda;?></a>
                            <a href="<?php echo ACHIVEMENT_LIST_PATH?>"><?php echo $lang_navigation_achievement_list;?></a>
                            <a href="<?php echo ACHIVEMENT_PATH?>"><?php echo $lang_navigation_achievement;?></a>
                        </div>
                    </li>
                    <li><a href="<?php echo PARTNERSHIP_PATH?>"><?php echo $lang_navigation_partnership; ?></a></li>
                    <li><a href="<?php echo FACILITY_PATH?>"><?php echo $lang_navigation_facility; ?></a></li>
                    <li><a href="<?php echo NEWS_PATH?>"><?php echo $lang_navigation_news; ?></a></li>
                    <li>
                        <a href="<?php echo INF_DOC_PATH?>"><?php echo $lang_navigation_information_documentation; ?></a>
                        <div class="dropdown">
                            <a>Galeri</a>
                            <a>Tracer study</a>
                        </div>
                    </li>
                    <li><a href="<?php echo CONTACT_PATH?>"><?php echo $lang_navigation_contact; ?></a></li>
                </ul>
            </nav>

        </div>
        <!-- hamburger -->
        <div class="hamburger-menu" id="menu">
            <div class="menu-bar" id="menu-bar" onclick="menuOnClick()">
                <div id="bar1" class="bar"></div>
                <div id="bar2" class="bar"></div>
                <div id="bar3" class="bar"></div>
            </div>
            <nav class="nav" id="nav">
                <ul>
                    <li><a href="<?php echo HOME_PATH?>"><?php echo $lang_navigation_home; ?></a></li>
                    <li><a href="<?php echo PROFILE_PATH?>"><?php echo $lang_navigation_profile; ?></a></li>
                    <li><a href="<?php echo EDUCATION_PATH?>"><?php echo $lang_navigation_education; ?></a></li>
                    <li><a href="<?php echo PARTNERSHIP_PATH?>"><?php echo $lang_navigation_partnership; ?></a></li>
                    <li><a href="<?php echo FACILITY_PATH?>"><?php echo $lang_navigation_facility; ?></a></li>
                    <li><a href="<?php echo NEWS_PATH?>"><?php echo $lang_navigation_news; ?></a></li>
                    <li><a href="<?php echo INF_DOC_PATH?>"><?php echo $lang_navigation_information_documentation_burger; ?></a></li>
                    <li><a href="<?php echo CONTACT_PATH?>"><?php echo $lang_navigation_contact; ?></a></li>
                </ul>
            </nav> 
        </div>
        <div class="menu-bg" id="menu-bg"></div>
    </header>
    <!-- content -->
    <div class="contents" id="contents"> 
        <?php 
        if(isset($_GET['page'])){
                $page = $_GET['page'];
                switch ($page) {
                    case 'home':
                    include VIEW_HOME;
                    break;
                        // profile
                    case 'profile':
                    include VIEW_PROFILE;
                    break;        
                    case 'major_profile':
                    include VIEW_MAJOR_PROFILE;
                    break;                
                    case 'studi_programs_profile':
                    include VIEW_PRODI_PROFILE;
                    break;        
                    case 'staff_profile_list':
                    include VIEW_STAFF_LIST;
                    break;        
                    case 'staff_profile':
                    include VIEW_STAFF_PROFILE;
                    break;  
                        // education
                    case 'education':
                    include VIEW_EDUCATION;
                    break;         
                    case 'curriculum':
                    include VIEW_CURRICULUM;
                    break;           
                    case 'agenda':
                    include VIEW_AGENDA;
                    break;          
                    case 'achievement_list':
                    include VIEW_ACHIVEMENT_LIST;
                    break;          
                    case 'achievement':
                    include VIEW_ACHIVEMENT;
                    break;          
                    case 'research_list':
                    include VIEW_RESEARCH_LIST;
                    break;          
                    case 'research':
                    include VIEW_RESEARCH;
                    break;     
                        // information and documentation      
                    case 'information_documentation':
                    include VIEW_INF_DOC;
                    break;       
                    case 'gallery':
                    include VIEW_GALLERY;
                    break;          
                    case 'tracer_study':
                    include VIEW_TRACER_STUDY;
                    break;   
                        // others
                    case 'partnership':
                    include VIEW_PARTNERSHIP;
                    break;  
                    case 'facility':
                    include VIEW_FACILITY;
                    break;     
                    case 'news':
                    include VIEW_NEWS;
                    break;   
                    case 'contact':
                    include VIEW_CONTACT;
                    break;        
                    case 'search';
                    include VIEW_SEARCH;
                    break;          
                }
            }
            else{
                include "views/home.php";
            }
            ?>
    </div>
    <!-- footer -->
    <footer>
        <div class="max-width-inner">
            <a href="#top">
                    <img class="go-top" 
                    src="<?php echo COMMON_ICON;?>circle-arrow-up-black.png" 
                    style="width:50px;">
                    </img>
            </a>
            <div class="wrapper">
                <div class="content">
                    <div class="contact">
                        <div class="logo">
                            <img class="logo" src="<?php echo COMMON_LOGO;?>polban.png">
                        </div>
                        <div class="detail">
                            <h3><?php echo $lang_major_name;?></h3></br>
                            <p><?php echo $lang_major_address;?></p></br>
                            <p><?php echo $lang_major_phone;?></p>
                        </div>
                    </div>
                    <div class="navigation">
                        <div class="nav-profile">
                            <h3><a href="<?php echo PROFILE_PATH?>">
                            <?php echo $lang_navigation_profile; ?></a></h3>
                            <a href="<?php echo MAJOR_PATH?>"><?php echo $lang_navigation_major_profile; ?></a></br>
                            <a href="<?php echo PRODI_PATH?>"><?php echo $lang_navigation_studi_programs_profile; ?></a></br>
                            <a href="<?php echo STAFF_PROFILE_LIST_PATH?>"><?php echo $lang_navigation_staff_profile_list; ?></a>
                        </div>
                        <div class="nav-education">
                            <h3><a href="<?php echo EDUCATION_PATH?>"><?php echo $lang_navigation_education; ?></a></h3>
                            <a href="<?php echo CURRICULUM_PATH?>"><?php echo $lang_navigation_curriculum; ?></a></br>
                            <a href="<?php echo AGENDA_PATH?>"><?php echo $lang_navigation_agenda; ?></a></br>
                            <a href="<?php echo ACHIVEMENT_LIST_PATH?>"><?php echo $lang_navigation_achievement_list; ?></a></br>
                            <a href="<?php echo RESEARCH_LIST_PATH?>"><?php echo $lang_navigation_research_list; ?></a>
                        </div>
                        <div class="nav-documentation">   
                            <h3><a href="<?php echo INF_DOC_PATH?>"><?php echo $lang_navigation_information_documentation; ?></a></h3>
                            <a href="<?php echo GALLERY_PATH?>"><?php echo $lang_navigation_gallery; ?></a></br>
                            <a href="<?php echo AGENDA_PATH?>"><?php echo $lang_navigation_agenda; ?></a>
                        </div>
                        <div class="nav-others">
                            <h3><a href="<?php echo PARTNERSHIP_PATH?>"><?php echo $lang_navigation_partnership; ?></a></h3>
                            <h3><a href="<?php echo FACILITY_PATH?>"><?php echo $lang_navigation_facility; ?></a></h3>
                            <h3><a href="<?php echo NEWS_PATH?>"><?php echo $lang_navigation_news; ?></a></h3>
                            <h3><a href="<?php echo CONTACT_PATH?>"><?php echo $lang_navigation_contact; ?></a></h3>
                        </div>
                    </div>
                    <div class="sosmed">
                        <img src="<?php echo COMMON_ICON;?>youtube.png">
                        <img src="<?php echo COMMON_ICON;?>facebook.png">
                        <img src="<?php echo COMMON_ICON;?>gmail.png">
                    </div>
                    <div class="copyright">
                        <p>Copyright &copy <?php echo $lang_creator; ?> |2022, Allrights Reserved.</p>
                    </div> 
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9767.568741993287!2d107.56834898606374!3d-6.873649935237124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e420f79fc621%3A0x742a0cf97c929be6!2sGedung%20JTK%20Polban!5e0!3m2!1sja!2sid!4v1652855776232!5m2!1sja!2sid" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </footer>   
    <script src="script/index.js"></script>
</body>
</html>