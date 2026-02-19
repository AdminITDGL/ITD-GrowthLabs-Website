<style>
    .country-flags-header {
        background: #f8f9fa;
        padding: 8px 0;
        border-bottom: 1px solid #e0e0e0;
    }
    .country-flags-container {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .country-flag-item {
        display: flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        color: #333;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
        padding: 4px 8px;
        border-radius: 4px;
    }
    .country-flag-item:hover {
        background: #e9ecef;
        color: #0069ff;
        text-decoration: none;
    }
    .country-flag-item img {
        width: 24px;
        height: 18px;
        object-fit: cover;
        border-radius: 2px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    @media (max-width: 768px) {
        .country-flags-container {
            gap: 12px;
        }
        .country-flag-item {
            font-size: 12px;
            gap: 6px;
        }
        .country-flag-item img {
            width: 20px;
            height: 15px;
        }
    }
</style>
<div class="country-flags-header">
    <div class="container">
        <div class="country-flags-container">
            <a href="../uae/index.php" class="country-flag-item">
                <img src="../assets/img/uae.png" alt="UAE Flag">
                <span>UAE</span>
            </a>
            <a href="../africa/index.php" class="country-flag-item">
                <img src="../assets/img/africa.png" alt="Africa Flag">
                <span>Africa</span>
            </a>
            <a href="../australia/index.php" class="country-flag-item">
                <img src="../assets/img/australia.png" alt="Australia Flag">
                <span>Australia</span>
            </a>
        </div>
    </div>
</div>

