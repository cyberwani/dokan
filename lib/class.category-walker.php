<?php

use WeDevs\Dokan\Walkers\CategoryDropdownSingle;

class DokanCategoryWalker extends CategoryDropdownSingle {

    public function __construct( $post_id )  {
        dokan_doing_it_wrong( self::class, __( 'Use `WeDevs\Dokan\Walkers\CategoryDropdownSingle` instead.', 'dokan-lite' ), 'Dokan:DOKAN_LITE_SINCE' );
        parent::__construct( $post_id );
    }
}
