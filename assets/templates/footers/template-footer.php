<footer id="colophon" class="footer pb-5">
    <div class="container">
        <div>
            <div class="footer-bottom text-center">
            
            <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
                <?php dynamic_sidebar( 'footer_1' ); ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="credits pt-3">
      <?php include get_template_directory() . '/assets/templates/footers/footer-creditos.php'; ?>  
    </div>
</footer>