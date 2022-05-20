
<script>
    const linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "style/major_profile.css"; 
    document.head.appendChild(linkElement);
</script>
<!-- common content -->
<!-- banner -->
<div class="content-banner">
        <div class="cb-overlay"></div>
        <h1><?php echo $lang_major_profile_page_title; ?></h1>
</div>
<!-- breadcrumb -->
<div class="breadcrumb"> 
    <a href="index.php?page=profile"> <?php echo $lang_navigation_profile; ?></a> | 
    <a href="index.php?page=major_profile">  <?php echo $lang_navigation_major_profile; ?></a> 
</div>
<div class="content-wrapper"> 
    <!-- widget -->
    <div class="page">
        <!-- query for major profile data -->
        <?php 
        include "data-base/data_base_handler.php"; 
        $language_code = pick_data_base_by_language($_SESSION['lang']);
        $major_sql = "SELECT * FROM `major$language_code`";
        $major_query = mysqli_query($db, $major_sql);
        $major = mysqli_fetch_array($major_query);
        ?>

        <!-- jurusan title -->
        <div class="page-title">
            <h2><?php echo $major['code']; ?></h2>
            <h2><?php echo $major['name']; ?></h2>
        </div>

        <!-- jurusan description -->
        <div class="jurusan-description">
            <img src="assets/images/jurusan/banner-jurusan.jpg">
            <p><?php echo $major['description']; ?></p>
        </div>

        <!-- work prospect -->
        <div class="work-prospect">
            <!-- work prospect title -->
            <div> 
                <h2 class="wp-title">
                    <img src="assets/images/icon/work-prospect.png">
                    <?php echo $lang_major_profile_work_prospect_title; ?>
                </h2>
                <p class="wp-descirption"><?php echo $lang_major_profile_work_prospect_description; ?></p>
            </div>
            <!-- work prospect content -->
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
            echo `<div class="wp-content">`;
            $index = 1;
            while($work_prospect = mysqli_fetch_array($work_prospect_query)){
                $work_prospect_name = $work_prospect["name"];
                $work_prospect_deskripsi = $work_prospect["description"];
                echo <<<HEREDOC
                    <div class="wpc-element">
                        <h3> $index. $work_prospect_name </h3>
                        <p> $work_prospect_deskripsi </p>
                    </div>
                HEREDOC;
                $index ++;
            }
            echo "</div>";
            ?>
            <!-- work prospect footer -->
            <div>
                <p><?php echo $lang_major_profile_work_prospect_footer ?></p>
            </div>
        </div>
    </div> 
</div>