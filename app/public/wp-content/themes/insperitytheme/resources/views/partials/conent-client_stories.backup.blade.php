<?php
                $taxonomy = get_the_terms(get_the_ID(), 'content_type');
                ?>
                <?php if ( $taxonomy ) : ?>
                    <ul>
                        <?php foreach ( $taxonomy as $term ) : ?>
                            <li><?php echo $term->name; ?>test</li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            <?php
            $termsArray = get_the_terms($post->ID, 'content_type');
            $termsSlug = '';
            foreach ($termsArray as $term) {
                $termsSlug .= $term->name . ' ';
            }
            ?>
            <?php echo $termsSlug; ?>