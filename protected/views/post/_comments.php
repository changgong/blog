<?php foreach($comments as $comment): ?>
    <li class="comment" id="">
        <div class="" id="comment">
            <div class="comment-meta">
                <div class="comment-author">
                    <img src="" alt="">
                    <span><?php echo $comment->author; ?></span>
                    <?php echo date('Y-m-j h:i',$comment->create_time); ?>
                    <span>says:</span>
                </div>
            </div>
            <div class="comment-content">
               <?php echo $comment->content; ?> 
            </div>
        </div>
    </li>
<?php endforeach; ?>
