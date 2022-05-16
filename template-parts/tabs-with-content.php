<?php 
$args = [
    'Elantra-main.jpg',
    'interior-1.webp',
    'Elantra-main.jpg',
    'interior-1.webp',
    'Elantra-main.jpg',
    'Elantra-main.jpg',
    
];

?>

<div class="tabs-with-content">
		<nav>
			<?php foreach ( $args as $key => $block ) : ?>
				<button type="button" class="btn" data-tab="#tab-<?php echo $key; ?>">
					<?php //echo esc_html( $block  ); ?>
					<?php echo $block ?>
				</button>
			<?php endforeach; ?>
		</nav>

		<div class="tabs-content">
			<?php foreach ( $args as $key => $block ) : ?>
				<div class="tab-content" id="tab-<?php echo $key; ?>">
					<div class="col">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/<?php echo $block ; ?>">
					</div><!-- .col -->
				</div><!-- .tab-content -->
			<?php endforeach; ?>
		</div><!-- .tabs-content -->
	</div><!-- .tabs-with-content -->


<script>
/**
 * Elements
 */

 const tabsSections = document.querySelectorAll(".tabs-with-content");
 const tabsNavBtns = document.querySelectorAll(".tabs-with-content nav .btn");
 
 
 /**
  * Init
  */
 
 tabsSections.forEach((section) => {
     section.querySelector("nav .btn:first-child").classList.add("active");
 
     section.querySelectorAll(".tab-content:nth-child(n + 2)").forEach((tabContent) => {
         tabContent.style.display = "none";
     });
 });
 
 
 /**
  * Change
  */
 
 tabsNavBtns.forEach((btn) => {
     btn.addEventListener("click", (e) => {
         if (btn.classList.contains("active")) {
             return;
         }
 
         [...btn.parentNode.children].forEach((sibling) => sibling.classList.remove("active"));
         btn.classList.add("active");
 
         const tab = document.querySelector(btn.dataset.tab);
         [...tab.parentNode.children].forEach((sibling) => sibling.style.display = "none");
         tab.style.display = "";
     });
 });
</script>
