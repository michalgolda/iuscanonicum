<div class="team-member">
    <div class="team-member__details">
        <div class="team-member__heading">
            <h3><?php echo $args['fullname']; ?></h3>
            <p class="team-member__profession"><?php echo $args['career-title']; ?></p>
        </div>
        <div class="team-member__contact">
            <div class="team-member__contact-box">
                <div class="icon">
                    <img class="icon__img" src="<?php echo iuscanonicum_get_image_src('email-icon.svg') ?>" alt="email icon" />
                </div>
                <p><?php echo $args['email']; ?></p>
            </div>
            <div class="team-member__contact-box">
                <div class="icon">
                    <img class="icon__img" src="<?php echo iuscanonicum_get_image_src('phone-icon.svg') ?>" alt="email icon" />
                </div>
                <p><?php echo $args['phone-number']; ?></p>
            </div>
            <div class="team-member__contact-box">
                <div class="icon">
                    <img class="icon__img" src="<?php echo iuscanonicum_get_image_src('document-icon.svg') ?>" alt="email icon" />
                </div>
                <a href="<?php echo $args['skill-prove-document-url']; ?>">Potwierdzenie uprawnień</a>
            </div>
        </div>
        <div class="post-content">
            <?php echo $args['description']; ?>
        </div>
    </div>
</div>