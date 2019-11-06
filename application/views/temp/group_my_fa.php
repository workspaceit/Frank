<div class="pe_container" style="height: 74px;float: left;margin-left:5px;width: 460px;">

    <input type="hidden" name="user_id" value="<?php echo $encryptObj->get_encrypted_code($userData->u_id); ?>">

    <div class="pe_circle_purple">

        <p class="p_multi"><?php echo $key+1; ?></p>

    </div>

    <div class="progress_extended" style="width: 415px;">

        <a href="<?php echo base_url().'profile/view/'.$userData->u_id;?>">

            <img src="<?php echo $userImage; ?>" height="50" width="50" />

        </a>

        <div class="pe_details">

            <a href="<?php echo base_url().'profile/view/'.$userData->u_id;?>">

                <span class="pe_span_large"><?php echo str_truncate_words($userData->f_name.' '.$userData->l_name, 10)?></span>

            </a>

            <span class="pe_span_small"><?php echo $userData->current_location_1; ?></span>

            <span class="pe_span_small"><?php echo date('m/d/Y',strtotime($userData->birthday));?></span>

        </div>

        <div class="pe_progress_container">

            <div class="progressbar"

                 style="float: right; margin: 5px 5px 0 0px;">

                <!--Violet-->

                <div class="bottom_bar"></div>
                <?php
                $userAggrigates = $c_Aggrigates_obj->getAggrigatesInPercentages($userData->u_id);

                ?>

                <div class="i_bar_p"

                     style="border-right: 1px solid #111; width: <?php echo $userAggrigates['rankPercantage']; ?>%;">

                    <span class="inside-middle"></span>

                </div>

                <div class="top_inf">

                    <span class="span_name">Rank</span>

									<span class="span_score">

										<span class="span_score"><?php echo $userData->rank; ?></span>

									</span>

                </div>

            </div>

            <?php

            $w = 0;

            $avgPoint = $userData->sub_category_avg_point;

            $w = abs($avgPoint).'%';

            if($avgPoint < 0) {

                $cname = 'i_bar_red';

            }else {

                $cname = 'i_bar_g';

            }

            ?>

            <div class="progressbar" style="float: right; margin: 5px 5px 0 0px;">

                <!--green-->

                <div class="bottom_bar"></div>

                <div class="<?php echo $cname; ?>" style="border-right: 1px solid #111; width: <?php echo $w; ?>;">

                    <span class="inside-middle"></span>

                </div>

                <div class="top_inf">

                    <span class="span_name"><?php echo $userData->sub_category_value; ?></span>

                    <span class="span_score"><span class="span_score"><?php echo $avgPoint; ?></span> </span>

                </div>

            </div>

        </div>

        <div class="pe_button_container">

            <button type="button" class="pe_btn remove_group_member">Remove</button>

            <button class="pe_btn" style="margin-left: 40px;" onclick="redirectForNewGossip(<?php echo $userData->u_id; ?>)">

                <a href="javascript:void(0)"><span>New Gossip</span></a>

            </button>

            <!-- <button class="pe_btn">

                <span>New Gossip</span>

            </button> -->



        </div>

    </div>

</div>


<!-- My Group -->
<div class="pe_container" style="height: 74px;float: left;margin-left:5px;width: 460px;display: none; ">

    <input type="hidden" name="user_id" value="<?php echo $encryptObj->get_encrypted_code($userData->u_id); ?>">

    <div class="pe_circle_purple">

        <p class="p_multi"><?php echo $key+1; ?></p>

    </div>

    <div class="progress_extended" style="width: 415px;">

        <a href="<?php echo base_url().'profile/view/'.$userData->u_id;?>">

            <img src="<?php echo $userImage; ?>" height="50" width="50" />

        </a>

        <div class="pe_details">

            <a href="<?php echo base_url().'profile/view/'.$userData->u_id;?>">

                <span class="pe_span_large"><?php echo str_truncate_words($userData->f_name.' '.$userData->l_name, 10)?></span>

            </a>

            <span class="pe_span_small"><?php echo $userData->current_location_1; ?></span>

            <span class="pe_span_small"><?php echo date('m/d/Y',strtotime($userData->birthday));?></span>

        </div>

        <div class="pe_progress_container">

            <div class="progressbar"

                 style="float: right; margin: 5px 5px 0 0px;">

                <!--Violet-->

                <div class="bottom_bar"></div>

                <?php
                $userAggrigates = $c_Aggrigates_obj->getAggrigatesInPercentages($top2finest[0]->u_id);

                ?>


                <div class="i_bar_p" style="border-right: 1px solid #111;width:  <?php echo $userAggrigates['rankPercantage']; ?>%;">

                    <span class="inside-middle"></span>

                </div>

                <div class="top_inf">



                    <span class="span_name">Rank</span>

                                        <span class="span_score">

										<span class="span_score"><?php echo $userData->rank; ?></span>

									</span>


                </div>

            </div>

            <?php

            $w = 0;

            $avgPoint = $userData->sub_category_avg_point;

            $w = abs($avgPoint).'%';

            if($avgPoint < 0) {

                $cname = 'i_bar_red';

            }else {

                $cname = 'i_bar_g';

            }

            ?>

            <div class="progressbar" style="float: right; margin: 5px 5px 0 0px;">

                <!--green-->

                <div class="bottom_bar"></div>

                <div class="<?php echo $cname; ?>" style="border-right: 1px solid #111; width: <?php echo $w; ?>;">

                    <span class="inside-middle"></span>

                </div>

                <div class="top_inf">

                    <span class="span_name"><?php echo $userData->sub_category_value; ?></span>

                    <span class="span_score"><span class="span_score"><?php echo $avgPoint; ?></span> </span>

                </div>

            </div>

        </div>

        <div class="pe_button_container">

            <button class="pe_btn" style="margin-left: 40px;" onclick="add_to_favourite(this,'<?php echo $userData->u_email; ?>')">

                <span>Add Favourites</span>

            </button>

            <!-- <button class="pe_btn">

                <span>New Gossip</span>

            </button> -->

            <button type="button" class="pe_btn remove_group_member">Remove</button>

        </div>

    </div>

</div>

<!-- Group Comparison -->
<div class="pe_container" style="height: 74px;float: left;margin-left:5px;width: 460px;display:none;">

    <input type="hidden" name="user_id"
           value="<?php echo $encryptObj->get_encrypted_code($userData->u_id); ?>">

    <div class="pe_circle_purple">

        <p class="p_multi"><?php echo $key + 1; ?></p>

    </div>

    <div class="progress_extended" style="width: 415px;">

        <a href="<?php echo base_url() . 'profile/view/' . $userData->u_id; ?>">

            <img src="<?php echo $userImage; ?>" height="50" width="50"/>

        </a>

        <div class="pe_details">

            <a href="<?php echo base_url() . 'profile/view/' . $userData->u_id; ?>">

                            <span
                                class="pe_span_large"><?php echo str_truncate_words($userData->f_name . ' ' . $userData->l_name, 14) ?></span>

            </a>

            <span class="pe_span_small"><?php echo $userData->current_location_1; ?></span>

            <span class="pe_span_small"><?php echo date('m/d/Y', strtotime($userData->birthday)); ?></span>

        </div>

        <div class="pe_progress_container">

            <div class="progressbar"

                 style="float: right; margin: 5px 5px 0 0px;">

                <!--Violet-->

                <div class="bottom_bar"></div>
                <?php
                $userAggrigates = $c_Aggrigates_obj->getAggrigatesInPercentages($userData->u_id);

                ?>

                <div class="i_bar_p"

                     style="border-right: 1px solid #111; width: <?php echo $userAggrigates['rankPercantage']; ?>%;">

                    <span class="inside-middle"></span>

                </div>



                <div class="top_inf">

                    <span class="span_name">Rank</span><span class="span_score"><span

                            class="span_score"><?php echo $userData->rank; ?></span> </span>

                </div>

            </div>

            <?php

            $w = 0;

            $avgPoint = $userData->sub_category_avg_point;

            $w = abs($avgPoint) . '%';

            if ($avgPoint < 0) {

                $cname = 'i_bar_red';

            } else {

                $cname = $userData->color_class;

            }

            ?>

            <div class="progressbar" style="float: right; margin: 5px 5px 0 0px;">

                <!--green-->

                <div class="bottom_bar"></div>

                <div class="<?php echo $cname; ?>"
                     style="border-right: 1px solid #111; width: <?php echo $w; ?>;">

                    <span class="inside-middle"></span>

                </div>

                <div class="top_inf">

                    <span class="span_name"><?php echo $userData->sub_category_value; ?></span>

                                <span class="span_score"><span
                                        class="span_score"><?php echo $avgPoint; ?></span> </span>

                </div>

            </div>

        </div>

        <div class="pe_button_container">

            <button class="pe_btn" style="margin-left: 40px;">

                <span>Add Favourites</span>

            </button>

            <button class="pe_btn">

                <span>New Gossip</span>

            </button>

        </div>

    </div>

</div>