
<div class="page-title"
        style="background-image: url('<?php #__isi__ ?>profile-page-banner-prodi.jpg');"
        >
        <div class="title">
            <h1><?php echo $__isi__ ?></h1>
        </div>
        <div class="breadcrumb">
            <a href = "<?php echo HOME_PATH ?>">
                <img src="<?php echo COMMON_ICON ?>home-white.png"> 
            </a>    
            <?php
            // $profile_path = __isi__;
            echo <<<HEREDOC
            <span> > </span>
            <span><a href="{$__isi__}"> $__isi__ </a></span>
            <span > > </span>
            <span >
                <a class="active" href="#"> $__isi__ </a>
            </span>
            HEREDOC;
            ?>
        </div>
</div>
<div class="content-wrapper"> 
    <?php 
    // jika perlu
    // $__isi__ = mysqli_fetch_array($__isi__);
    ?>
    <div class="title">
            <h2><?php #__isi__ ?></h2>
    </div>
    <div class="content">
        <div class="c-eyecatch">
            #__isi__
        </div>
        <div class="c-main">    
                <?php 
                // jika perlu
                // $__isi__ = mysqli_fetch_array($__isi__);
                ?> 
                <div class="c-main-element">
                    <div class="sub-title">
                        <h3><?php #__isi__ ?></h3>
                    </div>
                    <div class="sub-content">  
                        __isi__
                    </div>
                </div>          
        </div>
    </div>
</div>