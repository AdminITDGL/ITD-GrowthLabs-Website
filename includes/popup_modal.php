<style>
    .btn-close:after {
        display: none;
    }
</style>
<div class="modal fade" id="imagePopupModal" tabindex="-1" aria-labelledby="imagePopupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background: transparent; border: none; position: relative;">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: -15px; right: -15px; z-index: 1051; background: #fff; border-radius: 50%; width: 40px; height: 40px; opacity: 1; box-shadow: 0 2px 8px rgba(0,0,0,0.3); padding: 8px; font-size: 20px; line-height: 1; display: flex; align-items: center; justify-content: center;">
                <span style="color: #000; font-weight: bold;">&times;</span>
            </button>
            <div class="modal-body" style="padding: 0;">
                <a href="<?php echo (strpos($_SERVER['PHP_SELF'], '/services/') !== false) ? '../contact-us.php' : 'contact-us.php'; ?>">
                <img src="<?php echo (strpos($_SERVER['PHP_SELF'], '/services/') !== false) ? '../assets/img/BlackBlueBizBanner.jpg' : 'assets/img/BlackBlueBizBanner.jpg'; ?>" alt="Business Banner" class="img-fluid" style="width: 100%; height: auto; border-radius: 8px;">
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var popupModal = new bootstrap.Modal(document.getElementById('imagePopupModal'), {
            backdrop: true,
            keyboard: true
        });
        popupModal.show();
    });
</script>

