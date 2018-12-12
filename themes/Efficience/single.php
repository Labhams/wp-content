<?php get_header();?>
<?php get_sidebar();?>
<?php get_footer(); ?>
<style>
<?php include 'css/default.css';?>
<link href="https://fonts.googleapis.com/css?family=Diplomata" rel="stylesheet"> ;
</style>
<?php the_post(); ?>
  <article>
    <p> <?php the_content();?> </p>
     Publié le <?php the_time('j F Y à G \h i');?>
     Par <?php the_author_posts_link();?>
     <br/>
     <?php if(comments_open() && get_comments_number()):
         comments_template();
         endif?>
     <?php comments_number();?>
  </article>
