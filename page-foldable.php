<?php
/**
 * Template Name: Foldable Sections Page
 * Description: A page template where titles are foldable/collapsible
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>

                <div class="entry-content">
                    <?php
                    // Get the content and split it by h2 tags
                    $content = get_the_content();
                    $sections = preg_split('/<h2[^>]*>/i', $content);
                    
                    // Output the first part (before any h2)
                    echo array_shift($sections);
                    
                    // Process remaining sections
                    foreach ($sections as $section) {
                        // Split the section into title and content
                        $parts = preg_split('/<\/h2>/i', $section, 2);
                        if (count($parts) == 2) {
                            ?>
                            <div class="foldable-section">
                                <h2 class="foldable-title"><?php echo strip_tags($parts[0]); ?></h2>
                                <div class="foldable-content">
                                    <?php echo $parts[1]; ?>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </article>
        <?php endwhile; ?>
    </main>
</div>

<?php get_footer(); ?> 