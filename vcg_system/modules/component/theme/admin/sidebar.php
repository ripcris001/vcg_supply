<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo main-logo">
        <a href="#" class="header-logo">
            <img src="<?php echo INFO_LOGO_2; ?>" class="img-fluid light-logo"
                alt="logo">
        </a>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <?php if(count($sidebar)){ 
                        $ts_count =  count($sidebar);
                        for($a = 0; $a < $ts_count; $a++){
                            $ts_a_value = $sidebar[$a];
                            if(isset($ts_a_value->subs) && count($ts_a_value->subs)){  ?>

                <li class=" ">
                    <a href="#<?php echo $ts_a_value->uid; ?>" class="collapsed" data-toggle="collapse" aria-expanded="false">
                    <object class="svg-icon-manual" data="<?php echo $theme->assetPath; ?>/icons/<?php echo $ts_a_value->icon; ?>.svg" width="20" height="20"> </object>
                        <span class="ml-4"><?php echo $ts_a_value->name; ?></span>
                        <svg class="svg-icon-manual iq-arrow-right arrow-active" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="<?php echo $ts_a_value->uid; ?>" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <?php
                            $ts_b_count =  count($ts_a_value->subs);
                            for($b = 0; $b < $ts_b_count; $b++){
                                $ts_b_value = $ts_a_value->subs[$b]; ?>

                        <li class="">
                            <a href="<?php echo $ts_b_value->url; ?>">
                                <i class="las la-minus"></i><span><?php echo $ts_b_value->name; ?></span>
                            </a>
                        </li>
                        <?php   } ?>
                    </ul>
                </li>

                <?php       } else { ?>

                <li class="">
                    <a href="<?php echo $ts_a_value->url; ?>" class="svg-icon">
                        <object class="svg-icon-manual" data="<?php echo $theme->assetPath; ?>/icons/<?php echo $ts_a_value->icon; ?>.svg" width="20" height="20"> </object>
                        <span class="ml-4"><?php echo $ts_a_value->name; ?></span>
                    </a>
                </li>

                <?php       } ?>
                <?php   } ?>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>