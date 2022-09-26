<div>
    <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="tc_aside">
        <!--begin::Brand-->
        <div class="brand flex-column-auto" id="tc_brand">
            <!--begin::Logo-->
            <a href="/admin" class="brand-logo">
                <img class="brand-image" style="height: 25px;" alt="Logo" src="<?php echo FAVICON; ?>" />
                <span class="brand-text"><img style="height: 25px;" alt="Logo" src="<?php echo INFO_LOGO_2; ?>" /></span>
            </a>
            <!--end::Logo-->
        </div>
        <!--end::Brand-->
        <!--begin::Aside Menu-->
        <div class="aside-menu-wrapper flex-column-fluid overflow-auto h-100" id="tc_aside_menu_wrapper">
            <!--begin::Menu Container-->
            <div id="tc_aside_menu" class="aside-menu  mb-5" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                <!--begin::Menu Nav-->
                <div id="accordion">
                    <ul class="nav flex-column">
                        <?php if(count($sidebar)){ 
                            $ts_count =  count($sidebar);
                            for($a = 0; $a < $ts_count; $a++){
                                $ts_a_value = $sidebar[$a];
                                if(isset($ts_a_value->subs) && count($ts_a_value->subs)){
                                    ?>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="collapse" href="javascript:void(0)" data-target="#<?php echo $ts_a_value->uid; ?>" role="button" aria-expanded="false" aria-controls="media">
                                                <?php if($ts_a_value->icon == 'default'){ ?>
                                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        </svg>
                                                    </span>
                                                <?php }else{ ?>
                                                    <span class="svg-icon nav-icon">
                                                        <i class="<?php echo $ts_a_value->icon; ?> font-size-h4"></i>
                                                    </span>
                                                <?php } ?>
                                                <span class="nav-text"><?php echo $ts_a_value->name; ?></span>
                                                <i class="fas fa-chevron-right fa-rotate-90"></i>
                                            </a>
                                            <div class="collapse nav-collapse" id="<?php echo $ts_a_value->uid; ?>" data-parent="#accordion">
                                                <ul class="nav flex-column">
                                                <?php
                                                    $ts_b_count =  count($ts_a_value->subs);
                                                    for($b = 0; $b < $ts_b_count; $b++){
                                                        $ts_b_value = $ts_a_value->subs[$b];
                                                ?>
                                                    <li class="nav-item">
                                                        <a href="<?php echo $ts_b_value->url; ?>" class="nav-link sub-nav-link">
                                                            <span class="svg-icon nav-icon d-flex justify-content-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                </svg>
                                                            </span>
                                                            <span class="nav-text"><?php echo $ts_b_value->name; ?></span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php
                                }else{
                                    ?>
                                        <li class="nav-item active">
                                            <a href="<?php echo $ts_a_value->url; ?>" class="nav-link">
                                                <?php if($ts_a_value->icon == 'default'){ ?>
                                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        </svg>
                                                    </span>
                                                <?php }else{ ?>
                                                    <span class="svg-icon nav-icon">
                                                        <i class="<?php echo $ts_a_value->icon; ?> font-size-h4"></i>
                                                    </span>
                                                <?php } ?>
                                                <span class="nav-text">
                                                    Dashboard
                                                </span>
                                            </a>
                                        </li>
                                    <?php
                                }
                            }
                        ?>
                        <?php } ?>
                    </ul>
                </div>
                <!--end::Menu Nav-->
            </div>
            <!--end::Menu Container-->
        </div>
        <!--end::Aside Menu-->
    </div>
</div>