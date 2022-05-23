<?php 
include DATA_BASE_PATH."data_base_handler.php";

$language_code = pick_data_base_by_language($_SESSION['lang']);
// declare database table name filtered by language
$major_data_base_name = "major".$language_code;
$research_data_base_name = "research".$language_code;
$activity_data_base_name = "activity".$language_code;
$news_data_base_name = "news".$language_code;
$staff_data_base_name = "staff".$language_code;
$study_program_data_base_name = "study-program".$language_code;
$study_program_competencies_data_base_name = "study-program-competencies".$language_code;
$competencies_data_base_name = "competencies".$language_code;
$user_data_base_name = "user".$language_code;
$sys_category_data_base_name = "sys_category".$language_code;
$sys_expertise_data_base_name = "sys_expertise".$language_code;
$activity_data_base_name = "activity".$language_code;

// 
// activity
// 
// academic-calender
// 
// agenda
// 
// galery
// 
// activity
// 
// major 
    // get major
    $query_sql_get_major="SELECT * FROM `$major_data_base_name`";
    $get_major = mysqli_query($db, $query_sql_get_major);

// 
// news 
    // get all news
    $query_sql_get_all_news_sql = "
    SELECT 
    `$news_data_base_name`.`id` as `id`,
    `$news_data_base_name`.`title` as `title`,
    `$user_data_base_name`.`nama` as `creator`,
    `$news_data_base_name`.`publish-date` as `publish-date`,
    `$sys_category_data_base_name`.`name` as `category`,
    `$sys_category_data_base_name`.`color` as `category-color`,
    `$news_data_base_name`.`content` as `content`,
    `$news_data_base_name`.`image-name` as `primary-image`
    FROM `$news_data_base_name`
    join `$sys_category_data_base_name` on `$sys_category_data_base_name`.`id`= `news`.`sys-category-id` 
    join `$user_data_base_name` on `$user_data_base_name`.`id`= `news`.`user-id` ";
    $get_all_news = mysqli_query($db, $query_sql_get_all_news_sql);
    // get all news by date descending
    $query_sql_get_all_news_desc_by_publish_date = $query_sql_get_all_news_sql."ORDER BY `publish-date` DESC";
    $get_all_news_desc_by_publish_date = mysqli_query($db, $query_sql_get_all_news_desc_by_publish_date);
    // get all news research
    $query_sql_get_all_news_research_sql = "SELECT * FROM `$research_data_base_name`";
    $get_all_news_research = mysqli_query($db, $query_sql_get_all_news_research_sql);
    // get all news activity
    $query_sql_get_all_news_activity_sql = "
    SELECT 
    `$news_data_base_name`.`id` as `id`,
    `$news_data_base_name`.`title` as `title`,
    `$user_data_base_name`.`nama` as `creator`,
    `$news_data_base_name`.`publish-date` as `publish-date`,
    `$sys_category_data_base_name`.`name` as `category`,
    `$sys_category_data_base_name`.`color` as `category-color`,
    `$news_data_base_name`.`content` as `content`,
    `$activity_data_base_name`.`date` as `activity-date`,
    `$activity_data_base_name`.`time` as `activity-time`,
    `$activity_data_base_name`.`image-name` as `primary-image`,
    `$news_data_base_name`.`image-name` as `secondary-image`,
    `$activity_data_base_name`.`description` as `description`
    
    FROM `$news_data_base_name` 
    join `$sys_category_data_base_name` on `$sys_category_data_base_name`.`id`= `$news_data_base_name`.`sys-category-id` 
    join `$user_data_base_name` on `$user_data_base_name`.`id`= `$news_data_base_name`.`user-id` 
    join `news-by-category` on `$news_data_base_name`.`id` = `news-by-category`.`news-id` 
    join `$activity_data_base_name` on `news-by-category`.`child-category-id`=`activity`.`id`
        WHERE `$news_data_base_name`.`sys-category-id` = 4 
    ";
    $get_all_news_activity = mysqli_query($db, $query_sql_get_all_news_activity_sql);
    
    // get all news activity
    // ORDER BY `publish-date` DESC
    $query_sql_get_all_news_activity_sql_desc_by_publish_date = $query_sql_get_all_news_activity_sql." ORDER BY `publish-date` DESC";
    $get_all_news_activity_desc_by_publish_date = mysqli_query($db, $query_sql_get_all_news_activity_sql_desc_by_publish_date);// 
    // get all news activity
    // ORDER BY `publish-date` ASC
    $query_sql_get_all_news_activity_sql_asc_by_publish_date = $query_sql_get_all_news_activity_sql." ORDER BY `publish-date` ASC";
    $get_all_news_activity_asc_by_publish_date = mysqli_query($db, $query_sql_get_all_news_activity_sql_desc_by_publish_date);// 
// category 
// 
// research
    // get all research
    $query_sql_get_all_research_sql = "SELECT * FROM `$research_data_base_name`";
    $get_all_research = mysqli_query($db, $query_sql_get_all_research_sql);
// 
// role 
// 
// staff
    // get all staff
    $query_sql_get_all_staff = "
    SELECT 
	`$staff_data_base_name`.`id` as `id`,
    `$staff_data_base_name`.`name` as `name`,
    `$staff_data_base_name`.`gender` as `gender`,
    `$staff_data_base_name`.`staff-number` as `staff-number`,
    `$staff_data_base_name`.`position` as `position`,
    `$staff_data_base_name`.`degree`as`degree`,
    `$sys_expertise_data_base_name`.`name`as`expertise`,
    `$staff_data_base_name`.`employment-bond`as`employment-bond`,
    `$staff_data_base_name`.`status`as`staff`,
    `$staff_data_base_name`.`image-name`as`image-name`,
    `$staff_data_base_name`.`mini-bio`as`mini-bio`
    FROM `$staff_data_base_name` join `$sys_expertise_data_base_name` on 
    `$staff_data_base_name`.`expertise` = `$sys_expertise_data_base_name`.`id`
    ";
    $get_all_staff = mysqli_query($db, $query_sql_get_all_staff);
    // get all staff by id
        // langsung di query di php viewnya
        // gunakan $query_sql_get_all_staff
        // tambah kan keterangan where `id` = id ;
// 
// student
// 
// studi program
    // gett all studi program
    $query_sql_get_all_study_program = "
    SELECT * FROM `$study_program_data_base_name`
    ";
    
    // get all studi program competencies
    $query_sql_get_all_relation_competencies = "
    SELECT * FROM 
    `$study_program_competencies_data_base_name` 
    JOIN `$competencies_data_base_name` on 
    `$study_program_competencies_data_base_name`.`competencies-id` = `$competencies_data_base_name`.`id`";
    
    $get_all_staff_study_program = mysqli_query($db, $query_sql_get_all_study_program);
    // get D-3 studi program
    $query_sql_get_study_program_D3 = 
    $query_sql_get_all_study_program . 
    "WHERE `name` = 'Teknik Informatika D-3'";
    $get_study_program_D3 = mysqli_query($db, $query_sql_get_study_program_D3);

    // get D-3 studi program competencies
    $query_sql_get_all_D3_competencies = 
    $query_sql_get_all_relation_competencies.
    "WHERE `$study_program_competencies_data_base_name`.`study-program-id`= 1 ";
    $get_all_D3_competencies = mysqli_query($db, $query_sql_get_all_D3_competencies);

    // get D-4 studi program
    $query_sql_get_study_program_D4 = 
    $query_sql_get_all_study_program . 
    "WHERE `name` = 'Teknik Informatika D-4'";
    $get_study_program_D4 = mysqli_query($db, $query_sql_get_study_program_D4);

    // get D-3 studi program competencies
    $query_sql_get_all_D4_competencies = 
    $query_sql_get_all_relation_competencies.
    "WHERE `$study_program_competencies_data_base_name`.`study-program-id`= 2 ";
    $get_all_D4_competencies = mysqli_query($db, $query_sql_get_all_D4_competencies);
// 
// user
 
?>