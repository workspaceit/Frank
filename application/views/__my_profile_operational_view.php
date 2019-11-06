<?php include 'header.php' ?>
<!--For Tabs-->

<script type="text/javascript" src="<?php echo base_url(); ?>jQuery/tytabs.jquery.min.js"></script>
<style>
    .editBioDataDiv {
        color: black;
        text-align: left;
        background: white;
        border: 1px solid #111111;
        float: left;
        weight: 17px;
        height: 20px;
        margin: 0;
        width: 175px;

    }
</style>

<script type="text/javascript">
    function load_notification_bar(content) {
        $('#all_notification').css('top', '135px');
        $('#all_notification').css('left', '366px');
        $('#all_notification_content').html(content);
        $('#all_notification').fadeIn(500, function () {
            $('#all_notification_content').html(content);
        });
    }
    function chage_notification_content(content) {
        $('#all_notification_content').html(content);
    }
    function hide_notification_bar() {

        $('#all_notification').fadeOut(500, function () {
            $('#all_notification_loading_img').show();
            $('#all_notification_notify_done_img').hide();
            $('#all_notification_error_img').hide();
            $('#all_notification_content').html("");
        });
    }
    function delay_and_hide_notification_bar(duration) {

        $('#all_notification').delay(duration).fadeOut(500, function () {
            $('#all_notification_loading_img').show();
            $('#all_notification_notify_done_img').hide();
            $('#all_notification_error_img').hide();
            $('#all_notification_content').html("");
        });
    }
    function submit_update_about_me_data() {
        var about_me_text = $('#user_about_me_text').val();
        $.ajax({
            type: "POST",
            data: {about_me_text: about_me_text},
            url: $('#site_url').attr("value") + "user_about_me/submit_update_about_me_data",
            success: function (data) {
                var resp = data.split(";");
                if (resp[1] == "True") {
                    $('#user_about_me_content').fadeOut(500, function () {
                        $('#user_about_me_content').html(about_me_text);
                        $('#user_about_me_content').fadeIn(100);

                    });
                    console.log(about_me_text);
                } else if (resp[1] == "False") {

                    alert("Internal Server Error.. Update unsuccessful");
                }
            }

        });
    }
    function load_user_about_me_update_view() {
        $.ajax({
            type: "POST",
            url: $('#site_url').attr("value") + "user_about_me/get_user_about_me_update_view",
            success: function (data) {
                $('#user_about_me_content').fadeOut(500, function () {

                    $('#user_about_me_content').html(data);
                    $('#user_about_me_content').fadeIn(100);
                    $('#user_about_me_text').focus();
                });
            }

        });
    }
    function disabled_edit_bio_data_anchor() {
        $('#edit_bio_data_anchor').attr("disabled", "disabled");
    }
    function remove_disabled_from_edit_bio_data_anchor() {
        $('#edit_bio_data_anchor').removeAttr("disabled");
    }
    function edit_operation() {
        var state = $('#edit_bio_data_anchor').attr("disabled");
        var keyWord = $('#edit_bio_data_anchor').html();
        if (state != "disabled" && keyWord == "Edit") {
            show_all_edit_anchor();
            $('#edit_bio_data_anchor').fadeOut(500, function () {
                $('#edit_bio_data_anchor').html("Done");
                $('#edit_bio_data_anchor').fadeIn(500, function () {
                });
            });
        } else if (state != "disabled" && keyWord == "Done") {
            hide_all_edit_anchor();
            $('#edit_bio_data_anchor').fadeOut(500, function () {
                $('#edit_bio_data_anchor').html("Edit");
                $('#edit_bio_data_anchor').fadeIn(500, function () {
                });
            });
        }
    }
    function show_all_edit_anchor() {
        $('.bio_data_process').fadeOut(500, function () {
            $('.bio_data_edit_anchor').fadeIn(500, function () {
            });
        });

    }
    function show_edit_anchor(prefix) {
        $('#' + prefix + '_anchor').fadeIn(500, function () {
        });
    }
    function hide_all_edit_anchor() {
        $('.bio_data_edit_anchor').fadeOut(500, function () {
        });
    }
    function hide_edit_anchor(prefix) {
        $('#' + prefix + '_anchor').fadeOut(500, function () {
        });
    }

    function show_process(prefix) {
        $('#' + prefix + '_anchor').fadeOut(10, function () {
            $('#' + prefix + '_process').fadeIn(10);
        });
    }
    function hide_process(prefix) {
        $('#' + prefix + '_process').hide();

    }
    function show_login_form() {
        $('#search_form_div').fadeOut(500, function () {
            $('#login_form_div').fadeIn(500, function () {
            });
            $('#sign_in_btn_span').fadeOut(500, function () {
                $('#search_btn_span').fadeIn(500, function () {
                });
            });
        });
    }
    function load_content(prefix) {
        hide_all_edit_anchor();
        disabled_edit_bio_data_anchor();
        load_notification_bar("Loading...");
        $.ajax({
            type: "POST",
            url: "user_basic_info/" + prefix + "_update_view_by_u_id",
            success: function (data) {
                hide_notification_bar();
                $('#' + prefix + '_value').fadeIn(1000, function () {
                    $('#' + prefix + '_value').html(data);
                });
            }

        });
        console.log(prefix);

    }
    function load_content_of_user_profile_data(prefix) {
        hide_all_edit_anchor();
        disabled_edit_bio_data_anchor();
        load_notification_bar("Loading..");
        $.ajax({
            type: "POST",
            url: "user_profile_data/" + prefix + "_update_view_by_u_id",
            success: function (data) {
                hide_notification_bar();
                $('#' + prefix + '_value').fadeIn(1000, function () {
                    $('#' + prefix + '_value').html(data);
                });

            }

        });

    }
    function submit_update_data_of_user_profile_data(prefix, col1, col2) {
        load_notification_bar("Uploading Data...");
        var col1_data = $('#' + prefix + "_" + col1).val();
        var col2_data = $('#' + prefix + "_" + col2).val();
        var temp_array = prefix.split('get_');
        var url = "update_" + temp_array[1];
        $.ajax({
            type: "GET",
            url: "user_profile_data/" + url + "?" + col1 +
            "=" + col1_data +
            "&" + col2 +
            "=" + col2_data,
            success: function (data) {
                load_notification_bar("Successfully Updated");
                $('#all_notification_loading_img').fadeOut(100, function () {
                    $('#all_notification_notify_done_img').fadeIn(100);
                    delay_and_hide_notification_bar(1000);
                });
                $('#' + prefix + '_value').fadeIn(1000, function () {

                    if (col1_data != "" && col2_data != "") {
                        var col1_dot = "";
                        if (col1_data.length > 10) {
                            col1_dot = "...";
                        }
                        var col2_dot = "";
                        if (col2_data.length > 10) {
                            col2_dot = "...";
                        }
                        $('#' + prefix + '_value').html(col1_data.substring(0, 8) + col1_dot + " &#38 " + col2_data.substring(0, 8) + col2_dot);
                    } else if (col1_data != "") {
                        var col1_dot = "";
                        if (col1_data.length > 25) {
                            col1_dot = "...";
                        }
                        $('#' + prefix + '_value').html(col1_data.substring(0, 25) + col1_dot);
                    } else if (col2_data != "") {
                        var col2_dot = "";
                        if (col2_data.length > 25) {
                            col2_dot = "...";
                        }
                        $('#' + prefix + '_value').html(col2_data.substring(0, 25) + col2_dot);
                    }
                    show_all_edit_anchor();
                    remove_disabled_from_edit_bio_data_anchor();
                });
            }

        });

    }
    function submit_update_birthday(prefix, col1) {
        load_notification_bar("Uploading Data....");
        var day = $('#' + prefix + "_day").val();
        var month = $('#' + prefix + "_month").val();
        var year = $('#' + prefix + "_year").val();
        var col1_data = year + "-" + month + "-" + day;

        $.ajax({
            type: "GET",
            url: "user_basic_info/update_any_col_get?" + col1 +
            "=" + col1_data,
            success: function (data) {
                load_notification_bar("Successfully Updated");
                $('#all_notification_loading_img').fadeOut(100, function () {
                    $('#all_notification_notify_done_img').fadeIn(100);
                    delay_and_hide_notification_bar(1000);
                });
                $('#' + prefix + '_value').fadeIn(1000, function () {

                    $('#' + prefix + '_value').html(day + "/" + month + "/" + year);

                    show_all_edit_anchor();
                    remove_disabled_from_edit_bio_data_anchor();
                });
            }

        });

    }
    function submit_update_data_of_user_basic_info(prefix, col1) {
        var col1_data = $('#' + prefix + "_" + col1).val();
        load_notification_bar("Uploading Data...");
        $.ajax({
            type: "GET",
            url: "user_basic_info/update_any_col_get?" + col1 +
            "=" + col1_data,
            success: function (data) {
                load_notification_bar("Successfully Updated");
                $('#all_notification_loading_img').fadeOut(100, function () {
                    $('#all_notification_notify_done_img').fadeIn(100);
                    delay_and_hide_notification_bar(1000);
                });
                $('#' + prefix + '_value').fadeIn(1000, function () {
                    $('#' + prefix + '_value').html(col1_data);
                    show_all_edit_anchor();
                    remove_disabled_from_edit_bio_data_anchor();
                });
            }

        });

    }
</script>


<script type="text/javascript">
    <!--
    $(document).ready(function () {
        $("#tabsholder").tytabs({
            tabinit: "2",
            fadespeed: "slow"
        });
        $("#tabsholder2").tytabs({
            prefixtabs: "tabz",
            prefixcontent: "contentz",
            classcontent: "tabscontent",
            tabinit: "3",
            catchget: "tab2",
            fadespeed: "slow"
        });
    });
    -->
</script>
<!-- End Tabs-->
<script type="text/javascript">

    function show_login_form() {
        $('#search_form_div').fadeOut(500, function () {
            $('#login_form_div').fadeIn(500, function () {
            });
            $('#sign_in_btn_span').fadeOut(500, function () {
                $('#search_btn_span').fadeIn(500, function () {
                });
            });
        });

    }
    function show_search_form() {
        $('#login_form_div').fadeOut(500, function () {
            $('#search_form_div').fadeIn(500, function () {
            });
            $('#search_btn_span').fadeOut(500, function () {
                $('#sign_in_btn_span').fadeIn(500, function () {
                });
            });
        });

    }
    $(function () {
        $("div#toggle").click(function () {
            $("#show_img").fadeOut(1000, function () {

                $("#head_slide").slideToggle();
                $("#show_img").show();
                return false;
            });

        });

    });
    $(function () {
        $("div#toggle1").click(function () {
            $("#show_img1").fadeOut(1000, function () {

                $("#head_slide1").slideToggle();
                $("#show_img1").show();
                return false;
            });

        });
    });
    $(function () {
        $("div#toggle2").click(function () {
            $("#show_img2").fadeOut(1000, function () {

                $("#head_slide2").slideToggle();
                $("#show_img2").show();
                return false;
            });

        });
    });
    $(function () {
        $("div#toggle3").click(function () {
            $("#show_img3").fadeOut(1000, function () {

                $("#head_slide3").slideToggle();
                $("#show_img3").show();
                return false;
            });

        });

    });
</script>

<script>
    function like() {
        var current_val = Math.round($('#like_val').height() / $('#like_val').parent().height() * 100);
        if (current_val < 100) {
            var c_height = $('#like_val').height();
            c_height++;
            $('#like_val').height(c_height);

        }
    }
    function dislike() {
        var current_val = Math.round($('#like_val').height() / $('#like_val').parent().height() * 100);
        if (current_val > 0) {
            var c_height = $('#like_val').height();
            c_height--;
            $('#like_val').height(c_height);

        }
    }
    $(function () {
        var timeout_like, clicker_like = $('#like_div');

        clicker_like.mousedown(function () {
            timeout_like = setInterval(function () {
                like();
            }, 85);

            return false;
        });

        $(document).mouseup(function () {
            clearInterval(timeout_like);
            return false;
        });
        var timeout_dislike, clicker_dislike = $('#dislike_div');

        clicker_dislike.mousedown(function () {
            timeout_dislike = setInterval(function () {
                dislike();
            }, 85);

            return false;
        });

        $(document).mouseup(function () {
            clearInterval(timeout_dislike);
            return false;
        });
    });


</script>
<script type="text/javascript">
    function hide_profile(suffix) {

        $.ajax({
            url: $('#base_url').val() + 'user_privacy/hide_' + suffix,
            type: "POST",
            success: function (data) {
                var resp = data.split(";")
                if (resp[1] == "True") {
                    if (resp[2] == 1) {
                        $('#' + suffix + '_hidden').fadeOut(500, function () {
                            $('#' + suffix + '_hidden').removeClass('small_circle').addClass('small_circle_grey');
                            $('#' + suffix + '_hidden').fadeIn(500, function () {
                            });
                        });

                    }
                    else if (resp[2] == 0) {
                        $('#' + suffix + '_hidden').fadeOut(500, function () {
                            $('#' + suffix + '_hidden').removeClass('small_circle_grey').addClass('small_circle');
                            $('#' + suffix + '_hidden').fadeIn(500, function () {
                            });
                        });
                    }
                }
                else
                    console.log('hello');

            }
        });
    }
</script>
<body>
<!-- Hidden Tags -->
<input type="hidden" id="site_url" value="<?php echo $site_url; ?>"/>
<!-- -->
<?php include 'advertise_left.php' ?>
<?php include 'advertise_right.php' ?>
<!--<div id="contentwrap">-->
<div class="uni_content">
    <div class="infoBar">
        <p>My Profile</p>
    </div>
    <div class="mp2_top_container">
        <div class="profile_pic_div"><!--Profile Picture-->
            <?php foreach ($basic_info_all as $basic_data) { ?>
                <div class="pic_div">
                    <span><?php echo $basic_data->f_name; ?>&nbsp &nbsp<?php echo $basic_data->l_name; ?></span><br>
                    <?php if ($basic_data->pic_path != "") { ?>
                        <img id="user_profile_picture"
                             src="<?php echo base_url() . 'uploads/' . $basic_data->pic_path; ?>" height="154"
                             width="125"/>
                    <?php } else { ?>
                        <img id="user_profile_picture" src="<?php echo base_url() . 'images/user.png'; ?>" height="154"
                             width="125"/>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="pp_progress">
                <div class="progressbar" style="margin: 7px 0 2px 0px;"><!--green-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:85%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span
                                class="span_score">85</span></span></div>
                </div>
                <div class="change_picture">
                    <!-- <input type="hidden" id="pic_path" name="pic_path" value=""/> -->
                    <input type="file" id="change_profile_picture" name="change_profile_picture"
                           class="change_file_browse"/>
                </div>
            </div>
        </div>
        <?php foreach ($basic_info_all as $basic_data_one){ ?>
        <div class="bio_data">
            <span>Bio Data</span><a id="edit_bio_data_anchor" style="float:right;" href="javascript:edit_operation()">Edit</a>

            <div class="bio_info">
                <div class="bi_span">
                    <span class="span_bi">Gender:</span>
                </div>
                <div class="bi_input">
                    <?php
                    if ($gender == 0) {
                        ?>
                        <div class="small_circle" id="gender_hidden">
                            <a href="javascript:hide_profile('gender')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <?php
                    if ($gender == 1) {
                        ?>
                        <div class="small_circle_grey" id="gender_hidden">
                            <a href="javascript:hide_profile('gender')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>

                    <div class="editBioDataDiv">

                        <div id="get_gender_value" style="float: left;"><?php echo $basic_data_one->gender; ?></div>
                        <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_gender_anchor"
                           href="javascript:load_content('get_gender')">
                            <img id="get_gender_loader" style="width:10px;height:10px;"
                                 src="<?php echo base_url() . 'images/edit.png'; ?>"/>
                        </a>
                        <img class="bio_data_process" id="get_gender_process"
                             style="width:10px;height:10px;float:right;display:none;"
                             src="<?php echo base_url() . 'images/process.gif'; ?>"/>
                    </div>
                    <?php
                    $rowData = explode("-", $basic_data_one->birthday);
                    $year = $rowData[0];
                    $month = $rowData[1];
                    $day = $rowData[2];
                    ?>
                </div>
            </div>
            <div class="bio_info">
                <div class="bi_span">
                    <span class="span_bi">Birthday:</span>
                </div>
                <div class="bi_input">
                    <?php if ($birthday == 0) { ?>
                        <div class="small_circle" id="birthday_hidden">
                            <a href="javascript:hide_profile('birthday')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <?php if ($birthday == 1) { ?>
                        <div class="small_circle_grey" id="birthday_hidden">
                            <a href="javascript:hide_profile('birthday')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <div class="editBioDataDiv">

                        <div id="get_birthday_value"
                             style="float: left;"><?php echo $day . '/' . $month . '/' . substr($year, 2, 2) ?></div>
                        <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_birthday_anchor"
                           href="javascript:load_content('get_birthday')">
                            <img id="get_birthday_loader" style="width:10px;height:10px;"
                                 src="<?php echo base_url() . 'images/edit.png'; ?>"/>
                        </a>
                        <img class="bio_data_process" id="get_birthday_process"
                             style="width:10px;height:10px;float:right;display:none;"
                             src="<?php echo base_url() . 'images/process.gif'; ?>"/>
                    </div>


                </div>
            </div>
            <?php } ?>
            <?php foreach ($user_profile_data_all as $profile_data){ ?>
            <div class="bio_info">
                <div class="bi_span">
                    <span class="span_bi">Location:</span>
                </div>
                <div class="bi_input">
                    <?php if ($location == 0) { ?>
                        <div class="small_circle" id="location_hidden">
                            <a href="javascript:hide_profile('location')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <?php if ($location == 1) { ?>
                        <div class="small_circle_grey" id="location_hidden">
                            <a href="javascript:hide_profile('location')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <div class="editBioDataDiv">

                        <div id="get_location_value" style="float: left;">
                            <?php
                            if ($profile_data->current_location_1 != "" && $profile_data->current_location_2 != "") {
                                echo substr($profile_data->current_location_1, 0, 9);
                                if (strlen($profile_data->current_location_1) > 9) {
                                    echo '...';
                                }
                                echo ' & ';
                                echo substr($profile_data->current_location_2, 0, 9);
                                if (strlen($profile_data->current_location_2) > 9) {
                                    echo '...';
                                }
                            } elseif ($profile_data->current_location_1 != "") {
                                echo substr($profile_data->current_location_1, 0, 25);
                                if (strlen($profile_data->current_location_1) > 25) {
                                    echo '...';
                                }
                            } elseif ($profile_data->current_location_2 != "") {
                                echo substr($profile_data->current_location_2, 0, 25);
                                if (strlen($profile_data->current_location_2) > 25) {
                                    echo '...';
                                }
                            }
                            ?>

                        </div>
                        <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_location_anchor"
                           href="javascript:load_content_of_user_profile_data('get_location')">
                            <img id="get_location_loader" style="width:10px;height:10px;"
                                 src="<?php echo base_url() . 'images/edit.png'; ?>"/>
                        </a>
                        <img class="bio_data_process" id="get_location_process"
                             style="width:10px;height:10px;float:right;display:none;"
                             src="<?php echo base_url() . 'images/process.gif'; ?>"/>
                    </div>
                </div>
            </div>
            <div class="bio_info">
                <div class="bi_span">
                    <span class="span_bi">Home Town:</span>
                </div>
                <div class="bi_input">
                    <?php if ($home_town == 0) { ?>
                        <div class="small_circle" id="home_town_hidden">
                            <a href="javascript:hide_profile('home_town')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <?php if ($home_town == 1) { ?>
                        <div class="small_circle_grey" id="home_town_hidden">
                            <a href="javascript:hide_profile('home_town')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <div class="editBioDataDiv">

                        <div id="get_home_town_value" style="float: left;">
                            <?php

                            if ($profile_data->home_town_1 != "" && $profile_data->home_town_2 != "") {
                                echo substr($profile_data->home_town_1, 0, 10);
                                if (strlen($profile_data->home_town_1) > 10) {
                                    echo '...';
                                }
                                echo ' & ';
                                echo substr($profile_data->home_town_2, 0, 10);
                                if (strlen($profile_data->home_town_2) > 10) {
                                    echo '...';
                                }
                            } elseif ($profile_data->home_town_1 != "") {
                                echo substr($profile_data->home_town_1, 0, 25);
                                if (strlen($profile_data->home_town_1) > 10) {
                                    echo '...';
                                }
                            } elseif ($profile_data->home_town_2 != "") {
                                echo substr($profile_data->home_town_1, 0, 25);
                                if (strlen($profile_data->home_town_1) > 10) {
                                    echo '...';
                                }
                            }
                            ?>

                        </div>
                        <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_home_town_anchor"
                           href="javascript:load_content_of_user_profile_data('get_home_town')">
                            <img id="get_home_town_loader" style="width:10px;height:10px;"
                                 src="<?php echo base_url() . 'images/edit.png'; ?>"/>
                        </a>
                        <img class="bio_data_process" id="get_home_town_process"
                             style="width:10px;height:10px;float:right;display:none;"
                             src="<?php echo base_url() . 'images/process.gif'; ?>"/>
                    </div>
                </div>
            </div>
            <div class="bio_info">
                <div class="bi_span">
                    <span class="span_bi">High School:</span>
                </div>
                <div class="bi_input">
                    <?php if ($high_school == 0) { ?>
                        <div class="small_circle" id="high_school_hidden">
                            <a href="javascript:hide_profile('high_school')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <?php if ($high_school == 1) { ?>
                        <div class="small_circle_grey" id="high_school_hidden">
                            <a href="javascript:hide_profile('high_school')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <div class="editBioDataDiv">

                        <div id="get_high_school_value" style="float: left;">
                            <?php echo substr($profile_data->high_school, 0, 25);
                            if (strlen($profile_data->high_school) > 25) {
                                echo '....';
                            }
                            ?>

                        </div>
                        <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_high_school_anchor"
                           href="javascript:load_content_of_user_profile_data('get_high_school')">
                            <img id="get_high_school_loader" style="width:10px;height:10px;"
                                 src="<?php echo base_url() . 'images/edit.png'; ?>"/>
                        </a>
                        <img class="bio_data_process" id="get_high_school_process"
                             style="width:10px;height:10px;float:right;display:none;"
                             src="<?php echo base_url() . 'images/process.gif'; ?>"/>
                    </div>
                </div>
            </div>
            <div class="bio_info">
                <div class="bi_span">
                    <span class="span_bi">Higher Ed:</span>
                </div>
                <div class="bi_input">
                    <?php if ($higher_education == 0) { ?>
                        <div class="small_circle" id="higher_education_hidden">
                            <a href="javascript:hide_profile('higher_education')"><span
                                    class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <?php if ($higher_education == 1) { ?>
                        <div class="small_circle_grey" id="higher_education_hidden">
                            <a href="javascript:hide_profile('higher_education')"><span
                                    class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <div class="editBioDataDiv">

                        <div id="get_higher_education_value" style="float: left;">
                            <?php
                            if ($profile_data->higher_education_1 != "" && $profile_data->higher_education_2 != "") {
                                echo substr($profile_data->higher_education_1, 0, 10);
                                if (strlen($profile_data->higher_education_1) > 10) {
                                    echo '...';
                                }
                                echo ' & ';
                                echo substr($profile_data->higher_education_2, 0, 10);
                                if (strlen($profile_data->higher_education_2) > 10) {
                                    echo '...';
                                }
                            } elseif ($profile_data->higher_education_1 != "") {
                                echo $profile_data->higher_education_1;
                            } elseif ($profile_data->higher_education_2 != "") {
                                echo $profile_data->higher_education_2;
                            }
                            ?>

                        </div>
                        <a class="bio_data_edit_anchor" style="float:right;display:none;"
                           id="get_higher_education_anchor"
                           href="javascript:load_content_of_user_profile_data('get_higher_education')">
                            <img id="get_higher_education_loader" style="width:10px;height:10px;"
                                 src="<?php echo base_url() . 'images/edit.png'; ?>"/>
                        </a>
                        <img class="bio_data_process" id="get_higher_education_process"
                             style="width:10px;height:10px;float:right;display:none;"
                             src="<?php echo base_url() . 'images/process.gif'; ?>"/>
                    </div>
                </div>
            </div>
            <div class="bio_info">
                <div class="bi_span">
                    <span class="span_bi">Work Place:</span>
                </div>
                <div class="bi_input">
                    <?php if ($work_place == 0) { ?>
                        <div class="small_circle" id="work_place_hidden">
                            <a href="javascript:hide_profile('work_place')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <?php if ($work_place == 1) { ?>
                        <div class="small_circle_grey" id="work_place_hidden">
                            <a href="javascript:hide_profile('work_place')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <div class="editBioDataDiv">

                        <div id="get_workplace_value" style="float: left;">
                            <?php
                            if ($profile_data->workplace_1 != "" && $profile_data->workplace_2 != "") {
                                echo substr($profile_data->workplace_1, 0, 10);
                                if (strlen($profile_data->workplace_1) > 10) {
                                    echo '...';
                                }
                                echo ' & ';
                                echo substr($profile_data->workplace_2, 0, 10);
                                if (strlen($profile_data->workplace_2) > 10) {
                                    echo '...';
                                }
                            } elseif ($profile_data->workplace_1 != "") {
                                echo substr($profile_data->workplace_1, 0, 10);
                                if (strlen($profile_data->workplace_1) > 10) {
                                    echo '...';
                                }
                            } elseif ($profile_data->workplace_2 != "") {
                                echo substr($profile_data->workplace_2, 0, 10);
                                if (strlen($profile_data->workplace_2) > 10) {
                                    echo '...';
                                }
                            }
                            ?>

                        </div>
                        <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_workplace_anchor"
                           href="javascript:load_content_of_user_profile_data('get_workplace')">
                            <img id="get_workplace_loader" style="width:10px;height:10px;"
                                 src="<?php echo base_url() . 'images/edit.png'; ?>"/>
                        </a>
                        <img class="bio_data_process" id="get_workplace_process"
                             style="width:10px;height:10px;float:right;display:none;"
                             src="<?php echo base_url() . 'images/process.gif'; ?>"/>
                    </div>
                </div>
            </div>
            <div class="bio_info">
                <div class="bi_span">
                    <span class="span_bi">Organization:</span>
                </div>
                <div class="bi_input">
                    <?php if ($organization == 0) { ?>
                        <div class="small_circle" id="organzation_hidden">
                            <a href="javascript:hide_profile('organzation')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <?php if ($organization == 1) { ?>
                        <div class="small_circle_grey" id="organzation_hidden">
                            <a href="javascript:hide_profile('organzation')"><span class="span_scircle">H</span></a>
                        </div>
                    <?php } ?>
                    <div class="editBioDataDiv">

                        <div id="get_organization_value" style="float: left;">
                            <?php
                            if ($profile_data->organization_1 != "" && $profile_data->organization_2 != "") {
                                echo substr($profile_data->organization_1, 0, 10);
                                if (strlen($profile_data->organization_1) > 10) {
                                    echo '...';
                                }
                                echo ' & ';
                                echo substr($profile_data->organization_2, 0, 10);
                                if (strlen($profile_data->organization_2) > 10) {
                                    echo '...';
                                }
                            } elseif ($profile_data->organization_1 != "") {
                                echo substr($profile_data->organization_1, 0, 10);
                                if (strlen($profile_data->organization_1) > 10) {
                                    echo '...';
                                }
                            } elseif ($profile_data->organization_2 != "") {
                                echo substr($profile_data->organization_2, 0, 10);
                                if (strlen($profile_data->organization_2) > 10) {
                                    echo '...';
                                }
                            }
                            ?>

                        </div>
                        <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_home_town_anchor"
                           href="javascript:load_content_of_user_profile_data('get_organization')">
                            <img id="get_organization_town_loader" style="width:10px;height:10px;"
                                 src="<?php echo base_url() . 'images/edit.png'; ?>"/>
                        </a>
                        <img class="bio_data_process" id="get_organization_town_process"
                             style="width:10px;height:10px;float:right;display:none;"
                             src="<?php echo base_url() . 'images/process.gif'; ?>"/>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
        <?php $user_about_all_count = 0;
        foreach ($user_about_all as $about_me_data) { ?>
            <div class="about_me">
                <span>About Me</span>
                <a href="javascript:load_user_about_me_update_view()" style="float:right;">Edit</a>

                <div id="user_about_me_content" style="
                                                                                                 color:black;
                                                                                                 background:white;
                                                                                                 width:277px;
                                                                                                 height:197px;
                                                                                                 margin: 5px 5px 0px ; 
                                                                                                 padding: 6px;
                                                                                                 border-radius: 5px 5px 5px 5px;"
                    ><?php echo $about_me_data->about_me; ?></div>

            </div>
            <?php $user_about_all_count++;
        } ?>
        <?php if ($user_about_all_count == 0) { ?>
            <div class="about_me">
                <span>About Me</span>
                <a href="javascript:load_user_about_me_update_view()" style="float:right;">Edit</a>

                <div id="user_about_me_content" style="
                                                                     color:black;
                                                                     background:white;
                                                                     width:277px;
                                                                     height:197px;
                                                                     margin: 5px 5px 0px ; 
                                                                     padding: 6px;
                                                                     border-radius: 5px 5px 5px 5px;"
                    >

                </div>


            </div>
        <?php } ?>
        <div class="stats">
            <span>Stats</span><br>

            <div class="progressbar" style="margin:10px 0;"><!--Blue-->
                <div class="bottom_bar"></div>
                <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span
                        class="inside-middle"></span></div>
                <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span
                            class="span_score">85</span></span></div>
            </div>
            <div class="progressbar" style="margin:10px 0;"><!--Blue-->
                <div class="bottom_bar"></div>
                <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span
                        class="inside-middle"></span></div>
                <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span
                            class="span_score">85</span></span></div>
            </div>
            <div class="progressbar" style="margin:10px 0;"><!--Blue-->
                <div class="bottom_bar"></div>
                <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span
                        class="inside-middle"></span></div>
                <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span
                            class="span_score">85</span></span></div>
            </div>
            <div class="progressbar" style="margin:10px 0;"><!--Blue-->
                <div class="bottom_bar"></div>
                <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span
                        class="inside-middle"></span></div>
                <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span
                            class="span_score">85</span></span></div>
            </div>
            <div class="progressbar" style="margin:10px 0;"><!--Blue-->
                <div class="bottom_bar"></div>
                <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span
                        class="inside-middle"></span></div>
                <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span
                            class="span_score">85</span></span></div>
            </div>
        </div>
    </div>

    <div class="top3_container" style="position:relative;">
        <div class="quality">
            <span class="ag_span">Aggrigates</span><br>

            <div class="round_div_violet">
                <p class="round_diff">84%</p>
            </div>
            <div class="progressbar_l" style="background:#5E2590;"><!--violet-->
                <div class="bottom_bar_l"></div>
                <div id="t" class="i_bar_l" style="border-right:1px solid #111;background:#5E2590;width:70%;"><span
                        class="inside-middle"></span></div>
                <div class="top_inf_l"><span class="span_name">Rank Score</span><span class="span_score"><span
                            class="span_score">750</span></span></div>
            </div>
            <br>

            <div class="round_div_purple">
                <p class="round_diff">70%</p>
            </div>
            <div class="progressbar_l" style="background:#EC008C;"><!--pink-->
                <div class="bottom_bar_l"></div>
                <div id="t" class="i_bar_l" style="border-right:1px solid #111;background:#EC008C;width:75%;"><span
                        class="inside-middle"></span></div>
                <div class="top_inf_l"><span class="span_name">Reputation</span><span class="span_score"><span
                            class="span_score">75</span></span></div>
            </div>
            <br>

            <div class="round_div_orange">
                <p class="round_diff">75%</p>
            </div>
            <div class="progressbar_l" style="background:#EF2E32;"><!--orange-->
                <div class="bottom_bar_l"></div>
                <div id="t" class="i_bar_l" style="border-right:1px solid #111;background:#EF2E32;width:85%"><span
                        class="inside-middle"></span></div>
                <div class="top_inf_l"><span class="span_name">Popularity</span><span class="span_score"><span
                            class="span_score">100</span></span></div>
            </div>
        </div>
        <div class="quality"> <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
            <span class="vi_span">Virtues</span><br>

            <div class="block1">
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:85%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Reliable</span><span class="span_score"><span
                                class="span_score">85</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:75%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">kind</span><span class="span_score"><span
                                class="span_score">75</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:60%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Honest</span><span class="span_score"><span
                                class="span_score">60</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:85%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Generous</span><span class="span_score"><span
                                class="span_score">85</span></span></div>
                </div>
            </div>
            <div id="head_slide" class="block2" style="display:none;">
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:85%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span
                                class="span_score">85</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:85%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span
                                class="span_score">85</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:85%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span
                                class="span_score">85</span></span></div>
                </div>
            </div>
            <div class="block3" id="toggle">
                <img id="show_img" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" width="25"
                     height="25"/>
            </div>
        </div>
        <div class="quality">
            <span class="tr_span">Traits</span><br>

            <div class="block1">
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:85%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span
                                class="span_score">85</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:75%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Funny</span><span class="span_score"><span
                                class="span_score">75</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:60%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Creative</span><span class="span_score"><span
                                class="span_score">60</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:55%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Wise</span><span class="span_score"><span
                                class="span_score">55</span></span></div>
                </div>
            </div>
            <div id="head_slide1" class="block2" style="display:none;">
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:50%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span
                                class="span_score">50</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:50%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span
                                class="span_score">50</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:50%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span
                                class="span_score">50</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:50%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span
                                class="span_score">50</span></span></div>
                </div>
            </div>
            <div class="block3" id="toggle1">
                <img id="show_img1" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" width="25"
                     height="25"/>
            </div>
        </div>
        <div class="quality">
            <span class="sk_span">Skills</span><br>

            <div class="block1">
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                    <div class="bottom_bar"></div>
                    <div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:75%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span
                                class="span_score">75</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                    <div class="bottom_bar"></div>
                    <div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:90%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Maths</span><span class="span_score"><span
                                class="span_score">90</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                    <div class="bottom_bar"></div>
                    <div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:70%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span
                                class="span_score">70</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                    <div class="bottom_bar"></div>
                    <div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:10%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span
                                class="span_score">10</span></span></div>
                </div>
            </div>
            <div id="head_slide2" class="block2" style="display:none;">
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                    <div class="bottom_bar"></div>
                    <div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:70%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span
                                class="span_score">70</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                    <div class="bottom_bar"></div>
                    <div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:10%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span
                                class="span_score">10</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                    <div class="bottom_bar"></div>
                    <div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:70%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span
                                class="span_score">70</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                    <div class="bottom_bar"></div>
                    <div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:10%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span
                                class="span_score">10</span></span></div>
                </div>
            </div>
            <div class="block3" id="toggle2">
                <img id="show_img2" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" width="25"
                     height="25"/>
            </div>

        </div>
        <div class="quality">
            <span class="re_span">Regard</span><br>

            <div class="block1">
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:85%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span
                                class="span_score">85</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:75%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Close friend</span><span class="span_score"><span
                                class="span_score">75</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:80%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span
                                class="span_score">80</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:80%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span
                                class="span_score">80</span></span></div>
                </div>
            </div>
            <div id="head_slide3" class="block2" style="display:none;">
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:85%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span
                                class="span_score">85</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:75%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Close friend</span><span class="span_score"><span
                                class="span_score">75</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:80%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span
                                class="span_score">80</span></span></div>
                </div>
                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                    <div class="bottom_bar"></div>
                    <div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:80%;"><span
                            class="inside-middle"></span></div>
                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span
                                class="span_score">80</span></span></div>
                </div>
            </div>
            <div class="block3" id="toggle3">
                <img id="show_img3" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" width="25"
                     height="25"/>
            </div>
        </div>

    </div>
    <div class="center">
        <p>&nbsp;</p>
        <!-- Tabs -->
        <div id="tabsholder">

            <ul class="tabs">
                <li id="tab1"><span>Gossip For Me</span><span>(25)</span></li>
                <li id="tab2"><span>Gossip From Me</span><span>(35)</span></li>
                <li id="tab3"><span>My Chat room</span></li>
            </ul>
            <div class="contents marginbot">

                <div id="content1" class="tabscontent">

                </div>
                <div id="content2" class="tabscontent">
                    <div class="select_area">
                        <div class="mp_selectbox1">
                            <span class="sbox_span">Traits</span><br>
                            <select>
                                <option>Hardworking</option>
                            </select>
                        </div>
                        <div class="mp_selectbox2">
                            <span class="sbox_span">Relationship</span><br>
                            <select>
                                <option>Highest</option>
                            </select>
                        </div>
                        <div class="mp_selectbox3">
                            <span class="sbox_span">Order</span><br>
                            <select>
                                <option></option>
                            </select>
                        </div>
                        <div class="mp_selectbox2">
                            <span class="sbox_span">Person Search</span><br>
                            <select>
                                <option></option>
                            </select>
                        </div>
                        <span class="anchor_span"><a href="#" target="_blank">
                                <div class="btn_div">Submit</div>
                            </a></span>
                    </div>
                    <div class="graph_ver_wrap">
                        <div class="hof_trait">
                        </div>
                        <div class="dof_score">
                        </div>
                    </div>
                    <div class="my_gossip_container">
                        <div class="spec_circle_sky" style=" margin: 50px 0 0 2px;">
                            <p class="p_sky">3</p>
                        </div>
                        <div class="my_gossip">
                            <div class="my_pic">
                                <img src="<?php echo base_url(); ?>images/neil_p_harris.png" height="130" width="85"/>
                            </div>
                            <div class="gossip_score">
                                <span class="plarge_span" style="margin:0 0 0 5px">Neil P. Harris</span><br>
                                <span class="psmall_span" style="margin:0 0 0 5px">New York &nbsp 1/15/11</span>

                                <div class="progressbar" style="margin:15px 0 10px 12px;"><!--Green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%">
                                        <span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span
                                            class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                                <div class="progressbar" style="margin:0 0 0 12px;"><!--violet-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%">
                                        <span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Rank</span><span
                                            class="span_score"><span class="span_score">1875</span></span></div>
                                </div>
                            </div>
                        </div>
                        <span class="arrow" style="margin: 55px 0 0 125px;"></span>

                        <div class="gossip_topic" style="margin:0 15px 0 0;">
                            <div style="width:335px;height:125px;float:left;">
                                <div class="gossip_thread">
                                    <span class="head_large_span">Gossip Thread:</span>
                                    <input type="text"/>
                                    <textarea></textarea>
                                </div>
                            </div>
                            <div style="width:25px;height:125px;float:left;">
                                <div id="like_div" style="cursor:pointer;"><img
                                        src="<?php echo base_url(); ?>images/tup.png" style="margin-top:2px;"></div>
                                <div class="progressbar_h">
                                    <div class="bottom_bar_h"></div>
                                    <div id="like_val" class="i_bar_h" style="border-top:2px solid #111;"><span
                                            class="inside-middle_h"></span></div>
                                    <div class="top_info_h"></div>
                                </div>
                                <div id="dislike_div" style="cursor:pointer;"><img
                                        src="<?php echo base_url(); ?>images/tdown.png"></div>
                            </div>
                        </div>
                        <span class="arrow2" style="margin:55px 0 0 684px;"></span>

                        <div class="gossiper">
                            <img src="<?php echo base_url(); ?>images/boy_george.png" height="100" width="70"/>

                            <div class="gossiper_info">
                                <span class="plarge_span">Boy George</span>
                                <span class="psmall_span">New York &nbsp 1/15/11</span>

                                <div class="progressbar"><!--Green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%">
                                        <span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span
                                            class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                                <div class="progressbar"><!--violet-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%">
                                        <span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Rank</span><span
                                            class="span_score"><span class="span_score">1875</span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="m_btn_wrap">
                            <div class="gossip_replies">
                                <span>Gossip Replies:</span><span>5</span>
                            </div>
                            <div class="gossip_btn">
                                <span>View all gossip</span>
                            </div>
                            <div class="gossip_btn">
                                <span>Reply all gossip</span>
                            </div>
                            <div class="gossip_btn">
                                <span>Hide gossip</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="content3" class="tabscontent">

                </div>
            </div>
        </div>
        <!-- /Tabs -->
    </div>
    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>"</input>
</div>

<!--</div>-->
<!--Footer>-->
<?php include 'footer.php' ?>
<script type="text/javascript">
    (function () {
        var input = document.getElementById("change_profile_picture"),
            formdata = false;

        function showUploadedItem(source) {
            $('#user_profile_picture').hide();
            var img = document.getElementById("user_profile_picture");
            img.src = source;
            $('#user_profile_picture').fadeIn(1000, function () {
            });

        }

        if (window.FormData) {
            formdata = new FormData();
            //document.getElementById("btn").style.display = "none";
        }

        input.addEventListener("change", function (evt) {
            //var img = document.getElementById("profile_uploaded_pic");
            //img.src = $('#base_url').attr("value")+"images/upload.gif";
            load_notification_bar("Uploading Profile Picture....");
            $('#user_profile_picture').fadeOut(100, function () {
            });
            $('#uploadbtn').attr("disabled", "disabled");
            $('#submit_basic_info_btn').attr("disabled", "disabled");
            $('input:file').attr('disabled', 'disabled')
            var i = 0, len = document.getElementById("change_profile_picture").files.length, img, reader, file;

            for (; i < len; i++) {
                file = document.getElementById("change_profile_picture").files[i];

                if (!!file.type.match(/image.*/)) {
                    if (window.FileReader) {
                        reader = new FileReader();
                        reader.onloadend = function (e) {

                        };
                        reader.readAsDataURL(file);
                    }
                    if (formdata) {
                        formdata.append("change_profile_picture", file);
                    }
                }
            }
            if ($('#change_profile_picture').val() != "") {


                if (formdata) {

//					var img = document.getElementById("profile_uploaded_pic");
//					
//				
//					
//					$('#profile_uploaded_pic').fadeIn(1000,function(){
//						img.src = $('#base_url').attr("value")+"images/upload_file.gif";
//					});
//			  		

                    $.ajax({
                        url: $('#site_url').val() + "frank_upload_file/upload_profile_picture",
                        type: "POST",
                        data: formdata,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            //	document.getElementById("response").innerHTML = res;
                            var resp = data.split(";");
                            if (resp[1] == "True") {
                                $('input:file').removeAttr('disabled');
                                load_notification_bar("Successfully Updated");
                                $('#all_notification_loading_img').fadeOut(100, function () {
                                    $('#all_notification_notify_done_img').fadeIn(100);
                                    delay_and_hide_notification_bar(2000);
                                });
                                var profile_picture_path = resp[2];

                                upload_profile_pic_path_url(profile_picture_path);  // Uploading Profile Picture path to update

                                for (i = 0; i < len; i++) {
                                    file = document.getElementById("change_profile_picture").files[i];

                                    if (!!file.type.match(/image.*/)) {
                                        if (window.FileReader) {
                                            reader = new FileReader();
                                            reader.onloadend = function (e) {
                                                showUploadedItem(e.target.result, file.fileName);
                                            };
                                            reader.readAsDataURL(file);
                                        }
                                        if (formdata) {
                                            formdata.append("change_profile_picture", file);
                                        }
                                    }
                                }
                            } else if (resp[1] == "False") {
                                $('input:file').removeAttr('disabled');
                                $('#user_profile_picture').fadeIn(100, function () {
                                });
                                $('#all_notification_loading_img').fadeOut(500, function () {
                                    $('#all_notification_error_img').fadeIn(500);
                                    chage_notification_content(resp[2]);
                                    delay_and_hide_notification_bar(10000);
                                });

                            }


                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            $('input:file').removeAttr('disabled');
                            $('#all_notification_loading_img').fadeOut(500, function () {
                                $('#all_notification_error_img').fadeIn(500);
                                chage_notification_content("Internal Server Error,Please Try Again Later");
                                delay_and_hide_notification_bar(10000);
                            });
                            console.log('error');
                            console.log(errorThrown);
                            console.log(jqXHR);

                        }
                    });
                }
            } else {


            }
        }, false);
    }());
    function upload_profile_pic_path_url(profile_picture_path) {

        $.ajax({
            url: $('#site_url').val() + "my_profile/change_profile_picture_by_u_id",
            type: "POST",
            data: {profile_picture: profile_picture_path},

            success: function (data) {

            }
        });
    }
</script>
 