<?php
/*
 * Custom Helpers
 *
 */

//check auth
if (!function_exists('lang_base_url')) {
    function lang_base_url()
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->lang_base_url;
    }
}

//check auth
if (!function_exists('auth_check')) {
    function auth_check()
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->auth_model->is_logged_in();
    }
}

//check admin
if (!function_exists('is_admin')) {
    function is_admin()
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->auth_model->is_admin();
    }
}

//check editor
if (!function_exists('is_author')) {
    function is_author()
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->auth_model->is_author();
    }
}


//show admin panel
if (!function_exists('show_admin_panel')) {
    function show_admin_panel()
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->auth_model->show_admin_panel();
    }
}

//prevent editor
if (!function_exists('prevent_author')) {
    function prevent_author()
    {
        //check auth
        if (is_author()) {
            redirect(base_url() . 'admin');
        }
    }
}

//get logged user
if (!function_exists('user')) {
    function user()
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        $user = $ci->auth_model->get_logged_user();
        if (empty($user)) {
            $ci->auth_model->logout();
        } else {
            return $user;
        }

    }
}

//get user by id
if (!function_exists('get_user')) {
    function get_user($user_id)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->auth_model->get_user($user_id);
    }
}

//get parent link
if (!function_exists('helper_get_parent_link')) {
    function helper_get_parent_link($parent_id, $type)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->navigation_model->get_parent_link($parent_id, $type);
    }
}

//get sub menu links
if (!function_exists('helper_get_sub_menu_links')) {
    function helper_get_sub_menu_links($id, $type)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->navigation_model->get_sub_links($id, $type);
    }
}

//get category
if (!function_exists('helper_get_category')) {
    function helper_get_category($category_id)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->category_model->get_category($category_id);
    }
}

//get subcategories
if (!function_exists('helper_get_subcategories')) {
    function helper_get_subcategories($parent_id)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->category_model->get_subcategories_by_parent_id($parent_id);
    }
}

//get posts category info
if (!function_exists('get_post_category')) {
    function get_post_category($post)
    {
        if (!empty($post)) {
            $ci =& get_instance();

            //check if subcategory exists
            $category = $ci->category_model->get_category($post->subcategory_id);

            if (!empty($category)) {
                $data = array(
                    'id' => $category->id,
                    'name' => $category->name,
                    'name_slug' => $category->name_slug,
                    'color' => $category->color,
                );
                return $data;
            } else {

                //check if category exists
                $category = $ci->category_model->get_category($post->category_id);
                if (!empty($category)) {
                    $data = array(
                        'id' => $category->id,
                        'name' => $category->name,
                        'name_slug' => $category->name_slug,
                        'color' => $category->color,
                    );
                    return $data;
                }
            }

            $data = array(
                'name' => "",
                'name_slug' => "",
                'color' => "",
            );
            return $data;
        }
    }
}

//get last posts by category
if (!function_exists('helper_get_last_posts_by_category')) {
    function helper_get_last_posts_by_category($category_id, $count)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->post_model->get_last_posts_by_category($category_id, $count);
    }
}

//get subcategory posts
if (!function_exists('helper_get_last_posts_by_subcategory')) {
    function helper_get_last_posts_by_subcategory($subcategory_id, $count)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->post_model->get_last_posts_by_subcategory($subcategory_id, $count);
    }
}

//get post images
if (!function_exists('get_post_image')) {
    function get_post_image($post, $image_size)
    {
        if (!empty($post)) {

            if (!empty($post->image_url)) {
                return $post->image_url;
            } else {
                if ($image_size == "big") {
                    return base_url() . $post->image_big;
                } elseif ($image_size == "default") {
                    return base_url() . $post->image_default;
                } elseif ($image_size == "slider") {
                    return base_url() . $post->image_slider;
                } elseif ($image_size == "mid") {
                    return base_url() . $post->image_mid;
                } elseif ($image_size == "small") {
                    return base_url() . $post->image_small;
                }
            }

        }
    }
}


//get post images
if (!function_exists('get_post_additional_images')) {
    function get_post_additional_images($post_id)
    {
        $ci =& get_instance();
        return $ci->post_file_model->get_post_additional_images($post_id);
    }
}


//get post audios
if (!function_exists('get_post_audios')) {
    function get_post_audios($post_id)
    {
        $ci =& get_instance();
        return $ci->post_file_model->get_post_audios($post_id);
    }
}


//get ad codes
if (!function_exists('helper_get_ad_codes')) {
    function helper_get_ad_codes($ad_space)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->ad_model->get_ad_codes($ad_space);
    }
}

//get translated message
if (!function_exists('trans')) {
    function trans($string)
    {
        $ci =& get_instance();
        return $ci->lang->line($string);
    }
}

//print old form data
if (!function_exists('old')) {
    function old($field)
    {
        $ci =& get_instance();
        return html_escape($ci->session->flashdata('form_data')[$field]);
    }
}

//delete image from server
if (!function_exists('delete_image_from_server')) {
    function delete_image_from_server($path)
    {
        $full_path = FCPATH . $path;
        if (strlen($path) > 15 && file_exists($full_path)) {
            unlink($full_path);
        }
    }
}

//delete file from server
if (!function_exists('delete_file_from_server')) {
    function delete_file_from_server($path)
    {
        $full_path = FCPATH . $path;
        if (strlen($path) > 15 && file_exists($full_path)) {
            unlink($full_path);
        }
    }
}

//is category has subcategory
if (!function_exists('is_category_has_subcategory')) {
    function is_category_has_subcategory($id)
    {
        $ci =& get_instance();

        if (count($ci->category_model->get_subcategories_by_parent_id($id)) > 0) {
            return true;
        } else {
            return false;
        }
    }
}

//get user avatar
if (!function_exists('get_user_avatar')) {
    function get_user_avatar($user)
    {
        if (!empty($user)) {
            if (!empty($user->avatar) && file_exists(FCPATH . $user->avatar)) {
                return base_url() . $user->avatar;
            } elseif (!empty($user->avatar)) {
                return $user->avatar;
            } else {
                return base_url() . "assets/img/user.png";
            }
        } else {
            return base_url() . "assets/img/user.png";
        }
    }
}

//get user avatar by id
if (!function_exists('get_user_avatar_by_id')) {
    function get_user_avatar_by_id($user_id)
    {
        $ci =& get_instance();

        $user = $ci->auth_model->get_user($user_id);
        if (!empty($user)) {
            if (!empty($user->avatar) && file_exists(FCPATH . $user->avatar)) {
                return base_url() . $user->avatar;
            } elseif (!empty($user->avatar)) {
                return $user->avatar;
            } else {
                return base_url() . "assets/img/user.png";
            }
        } else {
            return base_url() . "assets/img/user.png";
        }
    }
}

//get page title
if (!function_exists('get_page_title')) {
    function get_page_title($page)
    {
        if (!empty($page)) {
            return html_escape($page->title);
        } else {
            return "";
        }
    }
}

//get page description
if (!function_exists('get_page_description')) {
    function get_page_description($page)
    {
        if (!empty($page)) {
            return html_escape($page->description);
        } else {
            return "";
        }
    }
}

//get page keywords
if (!function_exists('get_page_keywords')) {
    function get_page_keywords($page)
    {
        if (!empty($page)) {
            return html_escape($page->keywords);
        } else {
            return "";
        }
    }
}

//get post comment count
if (!function_exists('get_post_comment_count')) {
    function get_post_comment_count($post_id)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->comment_model->get_post_comment_count($post_id);
    }
}

//get subcomments
if (!function_exists('get_subcomments')) {
    function get_subcomments($comment_id)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->comment_model->get_subcomments($comment_id);
    }
}

//get comment like count
if (!function_exists('get_comment_like_count')) {
    function get_comment_like_count($comment_id)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->comment_model->comment_like_count($comment_id);
    }
}

//get total vote count
if (!function_exists('get_total_vote_count')) {
    function get_total_vote_count($poll_id)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->poll_model->get_total_vote_count($poll_id);
    }
}

//get option vote count
if (!function_exists('get_option_vote_count')) {
    function get_option_vote_count($poll_id, $option)
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        return $ci->poll_model->get_option_vote_count($poll_id, $option);
    }
}

//date format
if (!function_exists('helper_date_format')) {
    function helper_date_format($datetime)
    {
        $date = date("M j, Y", strtotime($datetime));
        $date = str_replace("Jan", trans("January"), $date);
        $date = str_replace("Feb", trans("February"), $date);
        $date = str_replace("Mar", trans("March"), $date);
        $date = str_replace("Apr", trans("April"), $date);
        $date = str_replace("May", trans("May"), $date);
        $date = str_replace("Jun", trans("June"), $date);
        $date = str_replace("Jul", trans("July"), $date);
        $date = str_replace("Aug", trans("August"), $date);
        $date = str_replace("Sep", trans("September"), $date);
        $date = str_replace("Oct", trans("October"), $date);
        $date = str_replace("Nov", trans("November"), $date);
        $date = str_replace("Dec", trans("December"), $date);
        return $date;

    }
}
//date format
if (!function_exists('helper_time_format')) {
    function helper_time_format($time)
    {
        $time = date("H:i:s", strtotime($datetime));
        return $time;

    }
}
//date format for comments
if (!function_exists('helper_comment_date_format')) {
    function helper_comment_date_format($datetime)
    {
        $date = date("M j, Y g:i a", strtotime($datetime));
        $date = str_replace("Jan", trans("January"), $date);
        $date = str_replace("Feb", trans("February"), $date);
        $date = str_replace("Mar", trans("March"), $date);
        $date = str_replace("Apr", trans("April"), $date);
        $date = str_replace("May", trans("May"), $date);
        $date = str_replace("Jun", trans("June"), $date);
        $date = str_replace("Jul", trans("July"), $date);
        $date = str_replace("Aug", trans("August"), $date);
        $date = str_replace("Sep", trans("September"), $date);
        $date = str_replace("Oct", trans("October"), $date);
        $date = str_replace("Nov", trans("November"), $date);
        $date = str_replace("Dec", trans("December"), $date);
        return $date;
    }
}

//get logo
if (!function_exists('get_logo')) {
    function get_logo($settings)
    {
        if (!empty($settings)) {
            if (!empty($settings->logo) && file_exists(FCPATH . $settings->logo)) {
                return base_url() . $settings->logo;
            } else {
                return base_url() . "assets/img/logo.png";
            }
        } else {
            return base_url() . "assets/img/logo.png";
        }
    }
}

//get logo
if (!function_exists('get_logo_footer')) {
    function get_logo_footer($settings)
    {
        if (!empty($settings)) {
            if (!empty($settings->logo_footer) && file_exists(FCPATH . $settings->logo_footer)) {
                return base_url() . $settings->logo_footer;
            } else {
                return base_url() . "assets/img/logo-footer.png";
            }
        } else {
            return base_url() . "assets/img/logo-footer.png";
        }
    }
}

//get favicon
if (!function_exists('get_favicon')) {
    function get_favicon($settings)
    {
        if (!empty($settings)) {
            if (!empty($settings->favicon) && file_exists(FCPATH . $settings->favicon)) {
                return base_url() . $settings->favicon;
            } else {
                return base_url() . "assets/img/favicon.png";
            }
        } else {
            return base_url() . "assets/img/favicon.png";
        }
    }
}

//get settings
if (!function_exists('get_settings')) {
    function get_settings($lang_id)
    {
        $ci =& get_instance();
        $ci->load->model('settings_model');
        return $ci->settings_model->get_settings($lang_id);
    }
}

//get general settings
if (!function_exists('get_general_settings')) {
    function get_general_settings()
    {
        $ci =& get_instance();
        $ci->load->model('settings_model');
        return $ci->settings_model->get_general_settings();
    }
}

//get admin url
if (!function_exists('get_admin_url')) {
    function get_admin_url()
    {
        // Get a reference to the controller object
        $ci =& get_instance();
        $ci->load->model('settings_model');
        $settings = $ci->settings_model->get_general_settings();

        if (!empty($settings)) {
            return $settings->admin_url();
        }
    }
}

if (!function_exists('chk_lce')) {
    function chk_lce()
    {
        // if (tm_referx() == hash('whirlpool', log_mes_re() . get_instanx())) {
        if (tm_referx() == '123') {
            return true;
        }
        return false;
    }
}

//date diff
if (!function_exists('date_difference')) {
    function date_difference($date1, $date2, $format = '%a')
    {
        $datetime_1 = date_create($date1);
        $datetime_2 = date_create($date2);
        $diff = date_diff($datetime_1, $datetime_2);
        return $diff->format($format);
    }
}

//get feed posts count
if (!function_exists('get_feed_posts_count')) {
    function get_feed_posts_count($feed_id)
    {
        $ci =& get_instance();
        return $ci->post_admin_model->get_feed_posts_count($feed_id);
    }
}

//get language
if (!function_exists('get_language')) {
    function get_language($lang_id)
    {
        $ci =& get_instance();
        return $ci->language_model->get_language($lang_id);
    }
}

//get languages
if (!function_exists('get_active_languages')) {
    function get_active_languages()
    {
        $ci =& get_instance();
        $ci->load->model('language_model');
        return $ci->language_model->get_active_languages();
    }
}

//set cookie
if (!function_exists('helper_setcookie')) {
    function helper_setcookie($name, $value)
    {
        setcookie($name, $value, time() + (86400 * 30), "/"); //30 days
    }
}

//delete cookie
if (!function_exists('helper_deletecookie')) {
    function helper_deletecookie($name)
    {
        setcookie($name, "", time() - 3600, "/");
    }
}

//is reaction voted
if (!function_exists('is_reaction_voted')) {
    function is_reaction_voted($post_id, $reaction)
    {
        if (isset($_SESSION["vr_reaction_" . $reaction . "_" . $post_id]) && $_SESSION["vr_reaction_" . $reaction . "_" . $post_id] == '1') {
            return true;
        } else {
            return false;
        }
    }
}

//slug generator
if (!function_exists('str_slug')) {
    function str_slug($str, $separator = 'dash', $lowercase = TRUE)
    {
        $str = trim($str);
        $CI =& get_instance();
        $foreign_characters = array(
            '/ä|æ|ǽ/' => 'ae',
            '/ö|œ/' => 'o',
            '/ü/' => 'u',
            '/Ä/' => 'Ae',
            '/Ü/' => 'u',
            '/Ö/' => 'o',
            '/À|Á|Â|Ã|Ä|Å|Ǻ|Ā|Ă|Ą|Ǎ|Α|Ά|Ả|Ạ|Ầ|Ẫ|Ẩ|Ậ|Ằ|Ắ|Ẵ|Ẳ|Ặ|А/' => 'A',
            '/à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª|α|ά|ả|ạ|ầ|ấ|ẫ|ẩ|ậ|ằ|ắ|ẵ|ẳ|ặ|а/' => 'a',
            '/Б/' => 'B',
            '/б/' => 'b',
            '/Ç|Ć|Ĉ|Ċ|Č/' => 'C',
            '/ç|ć|ĉ|ċ|č/' => 'c',
            '/Д/' => 'D',
            '/д/' => 'd',
            '/Ð|Ď|Đ|Δ/' => 'Dj',
            '/ð|ď|đ|δ/' => 'dj',
            '/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě|Ε|Έ|Ẽ|Ẻ|Ẹ|Ề|Ế|Ễ|Ể|Ệ|Е|Э/' => 'E',
            '/è|é|ê|ë|ē|ĕ|ė|ę|ě|έ|ε|ẽ|ẻ|ẹ|ề|ế|ễ|ể|ệ|е|э/' => 'e',
            '/Ф/' => 'F',
            '/ф/' => 'f',
            '/Ĝ|Ğ|Ġ|Ģ|Γ|Г|Ґ/' => 'G',
            '/ĝ|ğ|ġ|ģ|γ|г|ґ/' => 'g',
            '/Ĥ|Ħ/' => 'H',
            '/ĥ|ħ/' => 'h',
            '/Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ|Η|Ή|Ί|Ι|Ϊ|Ỉ|Ị|И|Ы/' => 'I',
            '/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı|η|ή|ί|ι|ϊ|ỉ|ị|и|ы|ї/' => 'i',
            '/Ĵ/' => 'J',
            '/ĵ/' => 'j',
            '/Ķ|Κ|К/' => 'K',
            '/ķ|κ|к/' => 'k',
            '/Ĺ|Ļ|Ľ|Ŀ|Ł|Λ|Л/' => 'L',
            '/ĺ|ļ|ľ|ŀ|ł|λ|л/' => 'l',
            '/М/' => 'M',
            '/м/' => 'm',
            '/Ñ|Ń|Ņ|Ň|Ν|Н/' => 'N',
            '/ñ|ń|ņ|ň|ŉ|ν|н/' => 'n',
            '/Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ|Ο|Ό|Ω|Ώ|Ỏ|Ọ|Ồ|Ố|Ỗ|Ổ|Ộ|Ờ|Ớ|Ỡ|Ở|Ợ|О/' => 'O',
            '/ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º|ο|ό|ω|ώ|ỏ|ọ|ồ|ố|ỗ|ổ|ộ|ờ|ớ|ỡ|ở|ợ|о/' => 'o',
            '/П/' => 'P',
            '/п/' => 'p',
            '/Ŕ|Ŗ|Ř|Ρ|Р/' => 'R',
            '/ŕ|ŗ|ř|ρ|р/' => 'r',
            '/Ś|Ŝ|Ş|Ș|Š|Σ|С/' => 'S',
            '/ś|ŝ|ş|ș|š|ſ|σ|ς|с/' => 's',
            '/Ț|Ţ|Ť|Ŧ|τ|Т/' => 'T',
            '/ț|ţ|ť|ŧ|т/' => 't',
            '/Þ|þ/' => 'th',
            '/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ|Ũ|Ủ|Ụ|Ừ|Ứ|Ữ|Ử|Ự|У/' => 'U',
            '/ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ|υ|ύ|ϋ|ủ|ụ|ừ|ứ|ữ|ử|ự|у/' => 'u',
            '/Ý|Ÿ|Ŷ|Υ|Ύ|Ϋ|Ỳ|Ỹ|Ỷ|Ỵ|Й/' => 'Y',
            '/ý|ÿ|ŷ|ỳ|ỹ|ỷ|ỵ|й/' => 'y',
            '/В/' => 'V',
            '/в/' => 'v',
            '/Ŵ/' => 'W',
            '/ŵ/' => 'w',
            '/Ź|Ż|Ž|Ζ|З/' => 'Z',
            '/ź|ż|ž|ζ|з/' => 'z',
            '/Æ|Ǽ/' => 'AE',
            '/ß/' => 'ss',
            '/Ĳ/' => 'IJ',
            '/ĳ/' => 'ij',
            '/Œ/' => 'OE',
            '/ƒ/' => 'f',
            '/ξ/' => 'ks',
            '/π/' => 'p',
            '/β/' => 'v',
            '/μ/' => 'm',
            '/ψ/' => 'ps',
            '/Ё/' => 'Yo',
            '/ё/' => 'yo',
            '/Є/' => 'Ye',
            '/є/' => 'ye',
            '/Ї/' => 'Yi',
            '/Ж/' => 'Zh',
            '/ж/' => 'zh',
            '/Х/' => 'Kh',
            '/х/' => 'kh',
            '/Ц/' => 'Ts',
            '/ц/' => 'ts',
            '/Ч/' => 'Ch',
            '/ч/' => 'ch',
            '/Ш/' => 'Sh',
            '/ш/' => 'sh',
            '/Щ/' => 'Shch',
            '/щ/' => 'shch',
            '/Ъ|ъ|Ь|ь/' => '',
            '/Ю/' => 'Yu',
            '/ю/' => 'yu',
            '/Я/' => 'Ya',
            '/я/' => 'ya'
        );

        $str = preg_replace(array_keys($foreign_characters), array_values($foreign_characters), $str);

        $replace = ($separator == 'dash') ? '-' : '_';

        $trans = array(
            '&\#\d+?;' => '',
            '&\S+?;' => '',
            '\s+' => $replace,
            '[^a-z0-9\-\._]' => '',
            $replace . '+' => $replace,
            $replace . '$' => $replace,
            '^' . $replace => $replace,
            '\.+$' => ''
        );

        $str = strip_tags($str);

        foreach ($trans as $key => $val) {
            $str = preg_replace("#" . $key . "#i", $val, $str);
        }

        if ($lowercase === TRUE) {
            if (function_exists('mb_convert_case')) {
                $str = mb_convert_case($str, MB_CASE_LOWER, "UTF-8");
            } else {
                $str = strtolower($str);
            }
        }

        $str = preg_replace('#[^' . $CI->config->item('permitted_uri_chars') . ']#i', '', $str);

        return trim(stripslashes($str));
    }
}

//is reaction voted
if (!function_exists('humanize_status')) {
    function humanize_status($status)
    {
        switch( $status ) {
            case 1:
                return 'Yes';
                break;
            case 0:
                return 'No';
                break;
            default:
                return '-';
                break;
        }
    }
}

//dd was debugging function inspired by Laravel
if (!function_exists('dd')) {
    function dd($obj)
    {
        print_r($obj);
        exit;
    }
}

if (!function_exists('builtShareLinkToWa')) {
    function builtShareLinkToWa($link, $text = "Check out this insightful article:")
    {
        return "$text%0D%0A$link";
    }
}


/**
 * Estimate reading time in second
 * The average person reads approximately 200-300 words per minute
 * source : https://www.toptenreviews.com/software/articles/who-is-the-fastest-reader-in-the-world/
 * So,  we take the lowest one; 200;
 */
if (!function_exists('estimate_reading_time')) {
    function estimate_reading_time($content)
    {
        $word = str_word_count(strip_tags($content));
        $m = floor($word / 200) * 60;
        $s = floor($word % 200 / (200 / 60));
        return $m + $s;
    }
}

if (!function_exists('additional_css')) {
    function additional_css($css = [])
    {

        $html = null;
        foreach( $css as $url ) {
            $html .= "<link rel='stylesheet' href='$url'>";
        }

        return $html;
    }
}

if (!function_exists('additional_js')) {
    function additional_js($js = [])
    {

        $html = null;
        foreach( $js as $url ) {
            $html .= "<script src='$url'></script>";
        }

        return $html;
    }
}

if (!function_exists('add_user_point')) {
    
    function add_user_point($point=1)
    {
        $ci =& get_instance();
        return $ci->auth_model->add_point($point);
    }
}

if (!function_exists('get_user_badge')) {
    function get_user_badge($point = false)
    {
        $ci =& get_instance();
        $ci->load->model('badges_model');
        $badges = $ci->badges_model->get_highest_point_lists();
        $user_current_point = ( $point === false ? user()->point : $point );
        $user_badge = array_map( function ($arr) use ($user_current_point)
        {
            if( $user_current_point >= $arr->min_point) {
                return $arr;
            }

        }, $badges);

        $user_badge = array_values(array_filter($user_badge));
        
        if( isset( $user_badge[0] ) ) return $user_badge[0];

        return false;
    }
}

if (!function_exists('count_article_read')) {
    function count_article_read($user_id)
    {

        $ci =& get_instance();
        $ci->load->model('reading_history_model');
        return $ci->reading_history_model->count_article_by_user($user_id);
    }
}

if (!function_exists('count_min_history_read')) {
    function count_min_history_read($user_id)
    {

        $ci =& get_instance();
        $ci->load->model('reading_history_model');
        $total_sec = $ci->reading_history_model->count_second_read_by_user($user_id);
        $min = floor( $total_sec / 60 );
        // $sec  = $total_sec % 60;

        // if( $sec > 0 ) return "{$min}.{$sec}";

        return $min;
    }
}
?>