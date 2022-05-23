<!-- setup page -->
<script>
    const linkElement = document.createElement("link");
    linkElement.rel = "stylesheet"; 
    linkElement.href = "<?php echo STYLE_PATH ?>studi_programs_profile.css"; 
    linkElement.type = "text/css";
    document.head.appendChild(linkElement);
</script>
<!-- common content -->
<!-- banner -->
<?php 
$degree;
    if(isset($_GET['degree'])){
    $degree = $_GET['degree'];
    }
    else{
        $degree = "D3";
    }
?>
<div class="page-title"
        style="background-image: url('<?php echo COMMON_IMAGE ?>profile-page-banner-prodi.jpg');"
        >
        <div class="title">
            <h1><?php echo $lang_navigation_studi_programs_profile ?></h1>
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
    $major = mysqli_fetch_array($get_major);
    ?>
    <div class="title">
        
            <h2><?php echo $degree.$lang_studi_programs_profile_page_title ?></h2>
    </div>
    <div class="content">
        <div class="c-eyecatch">
        <section class="study-program banner">
            <div class="image">
                <a href= "<?php echo PRODI_PATH?>&degree=D3" class="d3">
                    <div 
                    class="img"
                    style="background-image: url('<?php echo COMMON_IMAGE?>study-program-banner-2.jpg')">
                        <div class="sub-title">
                            <h3> <?php echo $lang_study_program_D3; ?> </h3>
                        </div>
                    </div>
                </a>
                <a href= "<?php echo PRODI_PATH?>&degree=D4" class="d4">
                    <div 
                    class="img"
                    style="background-image: url('<?php echo COMMON_IMAGE?>study-program-banner-1.jpg')">
                        <div class="sub-title">
                            <h3> <?php echo $lang_study_program_D4; ?> </h3>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        </div>
        <div class="c-main">    
                <?php 
                if ($degree == "D3") {
                    $get_study_program = $get_study_program_D3;
                    $study_program_competencies = $get_all_D3_competencies;
                }else{
                    $get_study_program = $get_study_program_D4;
                    $study_program_competencies = $get_all_D4_competencies;
                }
                $study_program = mysqli_fetch_array($get_study_program);
                ?> 
                <div class="c-main-element">
                    <div class="sub-title">
                        <h3><?php echo $degree.$study_program['name'] ?></h3>
                    </div>
                    <div class="sub-content">  
                        <div class="sp-show-case">
                            <div class="accreditation">
                                Akreditasi 
                                <h3>
                                    <?php echo $study_program['accreditation'] ?>
                                <h3>
                            </div>
                            <div class="active-students">
                                Total Siswa Aktif 
                                <h3>
                                    <?php echo $study_program['active-students'] ?>
                                <h3>
                            </div>
                            <div class="active-staff">
                                Total Siswa Aktif 
                                <h3>
                                    <?php echo $study_program['active-staff'] ?>
                                <h3>
                            </div>
                        </div>  
                        <div class="sp-description">
                            <p><?php echo $study_program['description'] ?></p>
                        </div>
                    </div>
                </div>     
                <div class="c-main-element">
                    <div class="sub-title">
                        <h3><?php echo $lang_studi_programs_profile_subt_biodata ?></h3>
                    </div>
                    <div class="sub-content">
                        <?php 
                        echo <<<HEREDOC
                        <div class="tb-row">
                            <div>
                                $lang_biodata_tb_head_name
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$study_program['name']}
                            </div>
                        </div>
                        <div class="tb-row">
                            <div>
                                $lang_biodata_tb_head_code
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$study_program['code']}
                            </div>
                        </div> 
                        <div class="tb-row">
                            <div>
                                $lang_biodata_tb_head_degree
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$study_program['degree']}
                            </div>
                        </div> 
                        <div class="tb-row">
                            <div>
                                $lang_biodata_tb_head_accre
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$study_program['accreditation']}
                            </div>
                        </div>
                        <div class="tb-row">
                            <div>
                                $lang_biodata_tb_head_letter
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$study_program['certificate-of-operation']}
                            </div>
                        </div>
                        <div class="tb-row">
                            <div>
                                $lang_biodata_tb_head_address
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$study_program['address']}
                            </div>
                        </div> 
                        <div class="tb-row">
                            <div>
                                $lang_biodata_tb_head_pos
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$study_program['postal-code']}
                            </div>
                        </div>
                        <div class="tb-row">
                            <div>
                                $lang_biodata_tb_head_phone
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$study_program['phone']}
                            </div>
                        </div>
                        <div class="tb-row">
                            <div>
                                $lang_biodata_tb_head_fax
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$study_program['fax']}
                            </div>
                        </div>  
                        <div class="tb-row">
                            <div>
                                $lang_biodata_tb_head_email
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$study_program['e-mail']}
                            </div>
                        </div> 
                        <div class="tb-row">
                            <div>
                                $lang_biodata_tb_head_web
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$study_program['website']}
                            </div>
                        </div>  
                        HEREDOC;
                        ?>
                    <!-- row template
                        <div class="tb-row">
                            <div>
                                $
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$D3['degree']}
                            </div>
                        </div> 
                    -->
                    <div class="vm-wrapper">
                        <div class="vm-element">
                            <div class="vm-title">
                                <h3> <?php echo $lang_studi_programs_profile_subt_visi ?> </h3>
                                <div class="vm-img">
                                    <img src="<?php echo COMMON_ICON?>vision-white.png">
                                </div>
                            </div>
                            <div class="vm-description">
                                <?php echo $study_program['vision']?>
                            </div>
                        </div>
                        <div class="vm-element">
                            <div class="vm-title">
                                <h3> <?php echo $lang_studi_programs_profile_subt_misi ?> </h3>
                                <div class="vm-img">
                                    <img src="<?php echo COMMON_ICON?>mission-white.png">
                                 </div>
                            </div>
                            <div class="vm-description">
                                <?php echo $study_program['mission']?>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>            
                <div class="c-main-element">
                    <div class="sub-title sp-competencies">
                        <h3><?php echo $lang_studi_programs_profile_subt_competention ?></h3>
                        <img src="<?php echo COMMON_ICON?>worker-white.png">
                    </div>
                    <div class="sub-content sp-competencies-content">
                    <?php 
                    while($competencies = mysqli_fetch_array($study_program_competencies)){
                    echo <<<HEREDOC
                    <div class="tb-row">
                        <div>
                            {$competencies['name']}
                        </div>
                        <div>
                            :
                        </div>
                        <div>
                            {$competencies['description']}
                        </div>
                    </div> 
                    HEREDOC;
                    }
                    ?> 

                        
                    <!-- row template
                        <div class="tb-row">
                            <div>
                                $
                            </div>
                            <div>
                                :
                            </div>
                            <div>
                                {$D3['degree']}
                            </div>
                        </div> 
                    -->
                    </div>
                </div>                
        </div>
    </div>