<aside class="oc" id="menu" role="navigation">
    <div class="container">
        <ul class="ca-menu">
            <li>
                <a class="nav-link" href="/">
                    <div class="ca-content">
                        <h2 class="ca-main">About</h2>
                        <h3 class="ca-sub">Gary Ames</h3>
                    </div>
                </a>
            </li>

            <?php
            $args = array('orderby' => 'term_group','parent' => 0);
            $categories = get_categories( $args );
            $chapterNumber = array('One','Two','Three','Four','Five','Six','Seven','Eight');
            $i = 0;
            foreach ( $categories as $category ) {
                echo
                    '<li>
                        <a class="nav-link" href="' . get_category_link( $category->term_id ) . '">
                            <div class="ca-content">
                                <h2 class="ca-main">Chapter ' . $chapterNumber[$i++] . '</h2>
                                <h3 class="ca-sub">' . $category->name . '</h3>
                            </div>
                        </a>
                    </li>'
                ;
            }
            ?>

            <li>
                <a class="nav-link" href="#">
                    <div class="ca-content">
                        <h2 class="ca-main">Download</h2>
                        <h3 class="ca-sub">Free e-book</h3>
                    </div>
                </a>
            </li>
            <li>
                <a class="nav-link" href="mailto:GaryAmes@comcast.net">
                    <div class="ca-content">
                        <h2 class="ca-main">Contact</h2>
                        <h3 class="ca-sub">Send Gary a message</h3>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</aside>