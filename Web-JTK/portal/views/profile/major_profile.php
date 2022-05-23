
<script>
    const linkElement = document.createElement("link");
    linkElement.rel = "stylesheet"; 
    linkElement.href = "<?php echo STYLE_PATH ?>major_profile.css"; 
    linkElement.type = "text/css";
    document.head.appendChild(linkElement);
</script>
<!-- common content -->
<div class="page-title"
        style="background-image: url('<?php echo COMMON_IMAGE ?>profile-page-major.jpg');"
        >
        <div class="title">
            <h1><?php echo $lang_navigation_major_profile ?></h1>
        </div>
        <div class="breadcrumb">
            <a href = "<?php echo HOME_PATH ?>">
                <img src="<?php echo COMMON_ICON ?>home-white.png"> 
            </a>    
            <?php
            $profile_path = PROFILE_PATH;
            echo <<<HEREDOC
            <span> > </span>
            <span><a href="{$profile_path}"> $lang_navigation_profile </a></span>
            <span > > </span>
            <span >
                <a class="active" href="#"> $lang_navigation_major_profile </a>
            </span>
            HEREDOC;
            ?>
        </div>
</div>
<div class="content-wrapper"> 
    <?php 
    // include "data-base/data_base_handler.php"; 
    $language_code = pick_data_base_by_language($_SESSION['lang']);
    $major = mysqli_fetch_array($get_major);
    ?>
    <div class="title">
            <h2><?php echo $major['code']; ?></h2>
            <h2><?php echo $major['name']; ?></h2>
    </div>
    <div class="content">
        <div class="c-eyecatch">
            <div class="major-op">
                <img src="<?php echo MAJOR_IMAGE ?>papan-jtk.jpg">
                <p><b>Mengapa JTK ??</b></br><?php echo $major['description']; ?></p>
            </div>
        </div>
        <div class="c-main">
            <div class="work-prospect">
                <!-- work prospect title -->
                <div class="wp-title-wrapper"> 
                    <div class="wp-title-1">
                        <img src=" <?php echo COMMON_ICON; ?>work-prospect.png">
                        <h3> <?php echo $lang_major_profile_work_prospect_title; ?></h3>
                        <p class="wp-descirption"><?php echo $lang_major_profile_work_prospect_description; ?></p>
                    </div>
                    <div class="wp-title-2">
                        <img src=" <?php echo MAJOR_IMAGE; ?>dream-Job.jpg">
                    </div>
                </div>
                <!-- work prospect content -->
                <div class="wp-content">
                    <?php 
                    $work_prospect_sql = 
                    "SELECT `major$language_code`.code, `work-prospect$language_code`.`name`,`work-prospect$language_code`.`description`
                    FROM `major$language_code`
                    JOIN `major-work-prospect`
                        ON `major$language_code`.id = `major-work-prospect`.`major-id`
                    JOIN `work-prospect$language_code`
                        ON `work-prospect$language_code`.id = `major-work-prospect`.`work-prospect-id`";
                    $work_prospect_query = mysqli_query($db, $work_prospect_sql);
                    $work_prospect = mysqli_fetch_array($work_prospect_query);
                    // echo ``;
                    $index = 1;
                    while($work_prospect = mysqli_fetch_array($work_prospect_query)){
                        $work_prospect_name = $work_prospect["name"];
                        $work_prospect_deskripsi = $work_prospect["description"];
                        echo <<<HEREDOC
                            <div class="wpc-element">
                                <h3>$work_prospect_name </h3>
                                <p> $work_prospect_deskripsi </p>
                            </div>
                        HEREDOC;
                        $index ++;
                    }

                    ?>
                    <!-- work prospect footer -->
                    <div>
                        <p><?php echo $lang_major_profile_work_prospect_footer ?></p>
                    </div>
                </div>                  
        </div>
    </div>
</div>