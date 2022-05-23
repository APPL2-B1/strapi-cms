
<!-- setup page -->
<script>
    const linkElement = document.createElement("link");
    linkElement.rel = "stylesheet"; 
    linkElement.href = "<?php echo STYLE_PATH ?>staff_profile.css"; 
    linkElement.type = "text/css";
    document.head.appendChild(linkElement);
</script>

<div class="page-title"
        style="background-image: url('<?php echo COMMON_IMAGE ?>staff-list-page-banner.jpg');"
        >
        <div class="title">
            <h1><?php echo $lang_navigation_staff_profile ?></h1>
        </div>
        <div class="breadcrumb">
            <a href = "<?php echo HOME_PATH ?>">
                <img src="<?php echo COMMON_ICON ?>home-white.png"> 
            </a>    
            <?php
            $profile_path = PROFILE_PATH;
            $staff_list_path = STAFF_PROFILE_PATH;
            echo <<<HEREDOC
            <span> > </span>
            <span><a href="{$profile_path}"> $lang_navigation_profile </a></span>
            <span > > </span>
            <span><a href="{$staff_list_path}"> $lang_navigation_staff_profile_list </a></span>
            <span > > </span>
            <span >
                <a class="active" href="#"> $lang_navigation_staff_profile </a>
            </span>
            HEREDOC;
            ?>
        </div>
</div>
<?php 
    $staf_db_id;
    if(isset($_GET['id'])){
        $staf_db_id = $_GET['id'];
    }
    else{
        $staf_db_id = "1";
    }
?>
<div class="content-wrapper"> 
    <?php 
    $query_sql_get_staff_by_id = $query_sql_get_all_staff . "WHERE `staff`.`id` =".$staf_db_id;
    $get_staff = mysqli_query($db, $query_sql_get_staff_by_id);
    $staff = mysqli_fetch_array($get_staff);
    $img_linkdin = COMMON_ICON."linkedin-white.png";
    $img_mail = COMMON_ICON."mail-white.png";
    ?>
    <div class="title">
            <h2><?php echo $lang_staff_profile_page_title ?></h2>
    </div>
    <div class="content">
        <div class="c-eyecatch c-staff">
            <div class="photo">
                <img src="<?php echo STAFF_IMAGE.$staff['image-name']?>">
            </div>
            <div class="mini-bio">
                <div class="sosmed">
                    <button>
                        <img src="<?php echo $img_linkdin?>">
                    </button>
                    <button>
                        <img src="<?php echo $img_mail?>">
                    </button>
                </div>
                <div class="detail">
                    <div class="about-job">
                        <?php
                        echo <<<HEREDOC
                        <h2> {$staff['name']} </h2>
                        <h2> {$staff['position']} </h2>
                        <h2> {$staff['expertise']} </h2>
                        HEREDOC;
                        ?>
                    </div>
                    <div class="description">
                        <p>  <?php echo $staff['mini-bio'] ?> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-main">    
                <?php 
                ?> 
                <div class="c-main-element">
                    <div class="sub-title">
                        <h3><?php echo $lang_staff_profile_table_header_biodata ?></h3>
                    </div>
                    <div class="sub-content">  
                        __isi__
                    </div>
                </div>  
                <div class="c-main-element">
                    <div class="sub-title">
                        <h3><?php echo $lang_staff_profile_table_header_education ?></h3>
                    </div>
                    <div class="sub-content">  
                        __isi__
                    </div>
                </div>   
                <div class="c-main-element">
                    <div class="sub-title">
                        <h3><?php echo $lang_staff_profile_table_header_project ?></h3>
                    </div>
                    <div class="sub-content">  
                        __isi__
                    </div>
                </div>    
                <div class="c-main-element">
                    <div class="sub-title">
                        <h3><?php echo $lang_staff_profile_table_header_achievement ?></h3>
                    </div>
                    <div class="sub-content">  
                        __isi__
                    </div>
                </div>    
                <div class="c-main-element">
                    <div class="sub-title">
                        <h3><?php echo $lang_staff_profile_table_header_ativity ?></h3>
                    </div>
                    <div class="sub-content">  
                        __isi__
                    </div>
                </div>          
        </div>
    </div>
</div>