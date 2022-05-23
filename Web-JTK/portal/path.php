<?php
// Multimedia asset paths
define("ASSET_PATH","asset/");
// academic-calender
define("ACADEMIC_CALENDAR_PATH",ASSET_PATH."academic-calender/");
define("ACADEMIC_CALENDAR_DOCUMENT",ACADEMIC_CALENDAR_PATH."document/");
define("ACADEMIC_CALENDAR_IMAGE",ACADEMIC_CALENDAR_PATH."image/");
// activity
define("ACTIVITY_PATH",ASSET_PATH."activity/");
define("ACTIVITY_IMAGE",ACTIVITY_PATH."image/");
// agenda
define("AGENDA_ASSET_PATH",ASSET_PATH."agenda/");
define("AGENDA_IMAGE",AGENDA_ASSET_PATH."image/");
// common
define("COMMON_ASSET_PATH",ASSET_PATH."common/");
define("COMMON_IMAGE",COMMON_ASSET_PATH."image/");
define("COMMON_LOGO",COMMON_ASSET_PATH."logo/");
define("COMMON_VIDEO",COMMON_ASSET_PATH."video/");
define("COMMON_ICON",COMMON_ASSET_PATH."icon/");
// dummy
define("DUMMY_ASSET_PATH",ASSET_PATH."dummy/");
define("DUMMY_IMAGE",DUMMY_ASSET_PATH."image/");
// galery
define("GALERY_ASSET_PATH",ASSET_PATH."galery/");
define("GALERY_IMAGE",GALERY_ASSET_PATH."image/");
// major
define("MAJOR_ASSET_PATH",ASSET_PATH."major/");
define("MAJOR_IMAGE",MAJOR_ASSET_PATH."image/");
// news
define("NEWS_ASSET_PATH",ASSET_PATH."news/");
define("NEWS_IMAGE",NEWS_ASSET_PATH."image/");
// research
define("RESEARCH_ASSET_PATH",ASSET_PATH."research/");
define("RESEARCH_IMAGE",RESEARCH_ASSET_PATH."image/");
define("RESEARCH_DOCUMENT",RESEARCH_ASSET_PATH."document/");
// staff
define("STAFF_ASSET_PATH",ASSET_PATH."staff/");
define("STAFF_IMAGE",STAFF_ASSET_PATH."image/");
// student
define("STUDENT_ASSET_PATH",ASSET_PATH."student/");
define("STUDENT_IMAGE",STUDENT_ASSET_PATH."image/");
// user
define("USER_ASSET_PATH",ASSET_PATH."user/");
define("USER_IMAGE",USER_ASSET_PATH."image/");

// Data base asset paths
define("DATA_BASE_PATH","data-base/");

// Langguage asset paths
define("LANGUAGE_PATH","language/");

// Style asset paths
define("STYLE_PATH","style/");

// View asset paths
define("VIEW_PATH","views/");
define("VIEW_HOME",VIEW_PATH."home.php");
    // Profile 
define("VIEW_PROFILE",VIEW_PATH."profile.php");
define("VIEW_MAJOR_PROFILE",VIEW_PATH."profile/major_profile.php");
define("VIEW_STAFF_LIST",VIEW_PATH."profile/staff_profile_list.php");
define("VIEW_STAFF_PROFILE",VIEW_PATH."profile/staff_profile.php");
define("VIEW_PRODI_PROFILE",VIEW_PATH."profile/studi_programs_profile.php");
    // Education 
define("VIEW_EDUCATION",VIEW_PATH."education.php");
define("VIEW_CURRICULUM",VIEW_PATH."education/curriculum.php");
define("VIEW_AGENDA",VIEW_PATH."education/agenda.php");
define("VIEW_ACHIVEMENT_LIST",VIEW_PATH."education/achievement_list.php");
define("VIEW_ACHIVEMENT",VIEW_PATH."education/achievement.php");
define("VIEW_RESEARCH_LIST",VIEW_PATH."education/research_list.php");
define("VIEW_RESEARCH",VIEW_PATH."education/research.php");
    // Information and documentation 
define("VIEW_INF_DOC",VIEW_PATH."information_documentation.php");
define("VIEW_GALLERY",VIEW_PATH."information-documentation/gallery.php");
define("VIEW_TRACER_STUDY",VIEW_PATH."/information-documentation/tracer_study.php");
    // Others
define("VIEW_PARTNERSHIP",VIEW_PATH."partnership.php");
define("VIEW_FACILITY",VIEW_PATH."facility.php");
define("VIEW_NEWS",VIEW_PATH."news.php");
define("VIEW_CONTACT",VIEW_PATH."contact.php");
define("VIEW_SEARCH",VIEW_PATH."search.php");

// Style asset paths
define("COMPONENT_PATH",VIEW_PATH."components/");

// Website navigation paths
define("ROOT_PATH","index.php?");
define("HOME_PATH",ROOT_PATH."page=home");
define("PROFILE_PATH",ROOT_PATH."page=profile");
define("MAJOR_PATH",ROOT_PATH."page=major_profile");
define("PRODI_PATH",ROOT_PATH."page=studi_programs_profile");
define("STAFF_PROFILE_LIST_PATH",ROOT_PATH."page=staff_profile_list");
define("STAFF_PROFILE_PATH",ROOT_PATH."page=staff_profile");
define("EDUCATION_PATH",ROOT_PATH."page=education");
define("CURRICULUM_PATH",ROOT_PATH."page=curriculum");
define("AGENDA_PATH",ROOT_PATH."page=agenda");
define("ACHIVEMENT_LIST_PATH",ROOT_PATH."page=achievement_list");
define("ACHIVEMENT_PATH",ROOT_PATH."page=achievement&id=");
define("RESEARCH_LIST_PATH",ROOT_PATH."page=research_list");
define("RESEARCH_PATH",ROOT_PATH."page=research&id=");
define("INF_DOC_PATH",ROOT_PATH."page=information_documentation");
define("GALLERY_PATH",ROOT_PATH."page=gallery");
define("TRACER_STUDY_PATH",ROOT_PATH."page=tracer_study");
define("PARTNERSHIP_PATH",ROOT_PATH."page=partnership");
define("FACILITY_PATH",ROOT_PATH."page=facility");
define("NEWS_PATH",ROOT_PATH."page=news");
define("CONTACT_PATH",ROOT_PATH."page=contact");
?>