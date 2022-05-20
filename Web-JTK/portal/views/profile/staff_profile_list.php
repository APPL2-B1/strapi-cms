
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
    <a href="index.php?page=staff_profile_list">  <?php echo $lang_navigation_staff_profile_list; ?></a> 
</div>
<div class="page">
    <!-- staffs list -->
    <div class="staffs-profile-c-container">
        <h2><?php echo $lang_staff_profile_table_title ?></h2>
        <div class="staffs-profile-list-toolbar">
            <div class="toolbar-element search-bar">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
            </div>
            <div class="toolbar-element filter-bar">
                <select id="mySelect" onchange="">
                    <option value="Audi">Audi</option>
                    <option value="BMW">BMW</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Volvo">Volvo</option>
                </select>
            </div>
            <div class="toolbar-element reset-bar">
                <button><?php echo $lang_staff_profile_list_table_tool_bar_reset?></button>
            </div>
        </div>
        <div class="staffs-profile-list">
            <a href="index.php?page=staff_profile">
                <div class="staffs-profile">
                    Name | Expert
                </div>
            <a>
            <div class="staffs-profile">
                <p>Name | Expert<p>
            </div>
            <div class="staffs-profile">
                <p>Name | Expert<p>
            </div>
        </div>
    </div>
</div>  