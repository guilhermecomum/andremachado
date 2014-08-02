<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['wp_title'] .= ' - ' . $post->title();
$context['comment_form'] = TimberHelper::get_comment_form();
$context['widgets'] = Timber::get_widgets('sidebar');
$blog_args = 'post_type=colunistas';
$context['colunistas'] = Timber::get_posts($blog_args);
Timber::render(array('single-' . $post->ID . '.twig', 'single-' . $post->post_type . '.twig', 'single.twig'), $context);