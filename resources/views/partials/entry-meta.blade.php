<div class="entry-meta">

<div class="entry-meta__inner">

 <p><?php echo do_shortcode('[rt_reading_time label="Reading Time:" postfix="minutes" postfix_singular="minute"]') ?> </p>

 
 <p class="entry-meta__right"> <?php $u_time = get_the_time('U');
$u_modified_time = get_the_modified_time('U');
if ($u_modified_time >= $u_time + 86400) {
echo "Last updated on ";
the_modified_time('F jS, Y'); }
else {echo the_time('F jS, Y');} ?> </p>


</div>



</div>

