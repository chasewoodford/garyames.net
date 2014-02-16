<aside class="oc" id="menu" role="navigation">
    <div class="container">

        <ul>
            <li><a href="/">About</a></li>
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
                <a href="#">Download Free e-book</a>
            </li>
            <li>
                <a href="mailto:GaryAmes@comcast.net">Contact</a>
            </li>
        </ul>

    </div>
</aside>