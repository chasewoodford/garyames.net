<aside class="oc" id="menu" role="navigation">
    <div class="container">
        <ul class="ca-menu">
            <li>
                <a href="/about">About Gary Ames</a>
            </li>

            <?php
            $args = array('orderby' => 'term_group','parent' => 0);
            $categories = get_categories( $args );
            foreach ( $categories as $category ) {
                echo
                    '<li>
                        <a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a>
                    </li>'
                ;
            }
            ?>

            <li>
                <a href="mailto:gary@garyames.net">Contact Gary Ames</a>
            </li>
        </ul>
    </div>
</aside>