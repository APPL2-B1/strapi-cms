
<script>
    const linkElement = document.createElement("link");
    linkElement.rel = "stylesheet"; 
    linkElement.href = "<?php echo STYLE_PATH ?>staff_profile_list.css"; 
    linkElement.type = "text/css";
    document.head.appendChild(linkElement);
</script>

<div class="page-title"
        style="background-image: url('<?php echo COMMON_IMAGE ?>staff-list-page-banner.jpg');"
        >
        <div class="title">
            <h1><?php echo $lang_navigation_staff_profile_list ?></h1>
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
                <a class="active" href="#"> $lang_navigation_staff_profile_list </a>
            </span>
            HEREDOC;
            ?>
        </div>
</div>
<div class="content-wrapper">
    <div class="title">
            <h2><?php echo $lang_staff_profile_list_page_title;?></h2>
    </div>
    <div class="content">
        <div class="c-eyecatch">
            <div class="list-tool-bar">
                <div class="search-bar">
                    <div class="search">
                        <input type="text" class="searchTerm" placeholder="What are you looking for?">
                        <button type="submit" class="searchButton">
                            <img src="<?php echo COMMON_ICON ?>search-white.png">
                        </button>
                    </div>
                </div>
                <div class="filter-bar">
                    <form action="#">
                        <label class="filter" for="filter">
                            <img src="<?php echo COMMON_ICON?>filter-white.png">    
                            Filter:
                        </label>
                        <select name="filter" id="filter">
                            <option value="filter1">filter1</option>
                            <option value="filter2">filter2</option>
                            <option value="filter3">filter3</option>
                            <option value="filter4">filter4</option>
                        </select>
                        <select name="filter2" id="filter2">
                            <option value="filter1">filter1</option>
                            <option value="filter2">filter2</option>
                            <option value="filter3">filter3</option>
                            <option value="filter4">filter4</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="c-main"> 
                <div class="c-main-element">
                    <div class="sub-content">  
                        <div class="list-staff">
                            <?php 
                                $img_linkdin = COMMON_ICON."linkedin-white.png";
                                $img_mail = COMMON_ICON."mail-white.png";
                                $img_go = COMMON_ICON."arrow-white-right.png";
                                while($staff = mysqli_fetch_array($get_all_staff)){
                                    $img_url = STAFF_IMAGE.$staff['image-name'];
                                    $staff_link = STAFF_PROFILE_PATH."&id=".$staff['id'];
                                    echo <<<HEREDOC
                                    <a href=" {$staff_link}" class="ls-staff-element">
                                        <div class="ls-staff-photo">
                                            <img src="{$img_url}">
                                        </div>
                                        <div class="ls-desc">
                                            <h3>{$staff['name']}</h3>
                                            <p>{$staff['position']}</p>
                                            <p>{$staff['expertise']}</p>
                                        </div>
                                        <div href="#" class="ls-staff-go-button">
                                            <img src="{$img_go}">
                                        </div>
                                    </a>
                                    HEREDOC;
                                }
                            ?>
                            <!-- <div class="ls-staff-element">
                                <div class="ls-staff-photo">
                                    <img src="{STAFF_IMAGE}">
                                </div>
                                <div class="ls-desc">
                                    <h3>{var nama}</h3>
                                    <p>{var expert}</p>
                                </div>
                                <a class="ls-staff-go-button">
                                    <img src="{url right arrow}">
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>          
        </div>
    </div>
</div>