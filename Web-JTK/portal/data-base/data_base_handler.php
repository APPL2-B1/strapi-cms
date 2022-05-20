<?php
function pick_data_base_by_language($language) {
    $lang = "";
    switch ($language) {
        case "lang_indonesian":
            $lang = "";
            break;
        case "lang_english":
            $lang = "-en";
            break;
        case "lang_japanese":
            $lang = "-jp";
            break;
    }
    return $lang;
}
?>