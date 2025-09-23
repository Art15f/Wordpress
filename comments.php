<?php

if(post_password_required()){
    return;
}
?>
<div class="comemnts-area" id="comments">
    <?php
    if(have_comemnts()):
        ?>
        <h2 class="comments-title">
            <?php
            $comments_number=get_comments_number();
            if('1'=== $comments_number){
                printf(_x("Ont througt on &ldqup;%s&rdquo;",'comments title','twentusixteen'),get_the_title());


            }else{
                printf(
                    printf(
                        _nx(
                            '%1$s througt on &ldqup;%s&rdquo;',
                            '%1$s througt on &ldqup;%s&rdquo;',
                            $comments_number,
                            'comments title',
                            'twentysixteen'
                        )
                    )

                )
            }

            ?>
            </h2>
            <?php the comments_navigation();?>

            <ol class="comment-list">
                <?php
                wp_list_comments(
                    arry(
                        'style'=>'ol',
                        'short_ping'=>true,
                        'avatar_size'=>42,
                    )
                    );
                ?>
                </ol>
                
                <?php endif;?>

                <?php
                if(!comments_open() && get_comments_number() && post_type_supports(get_post_type (), 'comments')):?>

                <p class="no-commets"><?php _e('Comments are closed.','twentysixteen');?></p>
                <?php endif;?>

                <?php

                comment_form(
                    array(
                       ='< 'title_reply_before'h2 id="reply-title" class="comment-reply-title">',
                        
                    )
                )
        </div>