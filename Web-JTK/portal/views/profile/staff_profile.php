
<!-- setup page -->
<script>
    const linkElement = document.createElement("link");
    linkElement.rel = "stylesheet";
    linkElement.href = "style/staff_profile.css"; 
    document.head.appendChild(linkElement);
</script>
<!-- common content -->
<!-- banner -->
<div class="content-banner">
        <div class="cb-overlay"></div>
        <h1><?php echo $lang_staff_profile_list_page_title; ?></h1>
</div>
<!-- breadcrumb -->
<div class="breadcrumb"> 
    <a href="index.php?page=profile"> <?php echo $lang_navigation_profile; ?></a> | 
    <a href="index.php?page=staff_profile">  <?php echo $lang_navigation_staff_profile_list; ?></a> 
</div>
<div class="page">
    <!-- staffs Details -->
    <div class="staffs-profile-details">
        <div class="staffs-profile-wrapper">
            <!-- staffs photo -->
            <div class="staff-photo-profile">
                <img src="assets/images/dummy-foto-profile.png">
            </div>
            <!-- staffs identity -->
            <div class="staff-identity">
                <table>
                    <?php 
                        echo <<<HEREDOC
                        <tr><td>$lang_staff_profile_table_header_number</td><td>:</td><td>1</td></tr>
                        <tr><td>$lang_staff_profile_table_header_name</td><td>:</td><td>fachri</td></tr>
                        <tr><td>$lang_staff_profile_table_header_profession</td><td>:</td><td>dosen</td></tr>
                        <tr><td>$lang_staff_profile_table_header_expert</td><td>:</td><td>AR/VR</td></tr>
                        <tr><td>$lang_staff_profile_table_header_email</td><td>:</td><td>fachri.muhammad.tif419@polban.ac.id</td></tr>
                        <tr><td>$lang_staff_profile_table_header_phone</td><td>:</td><td>AR/VR</td></tr>
                        <tr><td>$lang_staff_profile_table_header_biodata</td><td>:</td></tr>
                        <tr><td colspan="3">...............</td></tr>
                        HEREDOC;
                    ?>
                </table>
            </div>
            <!-- staffs publications -->
            <div class="staff-publications-wrapper">
                <div class="staff-publications-title">
                    <h3>Publikasi</h3>
                </div>
                <div class="staff-publications-list">
                    <div class="staff-publication">
                        <h4>Judul Publikasi</h4>
                        <span>dd/mm/yyy</span>
                        <div>
                            <p>type...</p>
                            <p>publisher...</p>
                            <p>description...</p>
                            <p>deskripsi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>
                    <div class="staff-publication">
                        <h4>Judul Publikasi</h4>
                        <span>dd/mm/yyy</span>
                        <div>
                            <p>type...</p>
                            <p>publisher...</p>
                            <p>description...</p>
                            <p>deskripsi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>
                    <div class="staff-publication">
                        <h4>Judul Publikasi</h4>
                        <span>dd/mm/yyy</span>
                        <div>
                            <p>type...</p>
                            <p>publisher...</p>
                            <p>description...</p>
                            <p>deskripsi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  