<!-- setup page -->
<script>
    const linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "style/studi_programs_profile.css"; 
    document.head.appendChild(linkElement);
</script>
<!-- common content -->
<!-- banner -->
<div class="content-banner">
        <div class="cb-overlay"></div>
        <h1><?php echo $lang_studi_programs_profile_page_title; ?></h1>
</div>
<!-- breadcrumb -->
<div class="breadcrumb"> 
    <a href="index.php?page=profile"> <?php echo $lang_navigation_profile; ?></a> | 
    <a href="index.php?page=studi_programs_profile">  <?php echo $lang_navigation_studi_programs_profile; ?></a> 
</div>

<div class="page">
    <div class="prodi-list">
        <div class="prodi-list-title">
            <h2><?php echo $lang_studi_programs; ?></h2>
        </div>
        <div class="prodi-list-item">
            <h3> nama prodi 1</h3>
        </div>
        <div class="prodi-list-item">
            <h3> nama prodi 1</h3>
        </div>
    </div>
    <div class="prodi-profile">
        <div class="prodi-profile-title">
            <h2>nama prodi</h2>
            <p>descripsi dummy text dummy text dummy text dummy text</p>
        </div>
        <div class="prodi-detail">
            <div class="prodi-detail-vision">
                <h3>Vision</h3>
                <p>descripsi dummy text dummy text dummy text dummy text</p>
            </div>
            <div class="prodi-detail-objective">
                <h3>Objective</h3>
                <p>descripsi dummy text dummy text dummy text dummy text</p>
            </div>
            <div class="prodi-detail-mission">
                <h3>Mission</h3>
                <p>descripsi dummy text dummy text dummy text dummy text</p>
            </div>

            <div class="prodi-graduate-profession">
                <h3> nama prodi 1</h3>
            </div>
        </div>
    </div>
    <h2><?php echo $lang_studi_programs_profile_page_title; ?></h2>
    <p><?php echo $lang_studi_programs_profile_page_description; ?></p>
</div>  