<?php get_header(); ?>

<style>
    .error-404 {
        min-height: 80vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-family: sans-serif;
        color: #333;
    }

    .error-404 h1 {
        font-size: 6rem;
        margin: 0;
    }

    .error-404 h2 {
        font-size: 2rem;
        margin: 1rem 0;
    }

    .error-404 p {
        font-size: 1.2rem;
    }

    .error-404 a {
        color: #0073aa;
        text-decoration: none;
        font-weight: bold;
    }

    .error-404 a:hover {
        text-decoration: underline;
    }
</style>

<main class="error-404">
    <h1>404</h1>
    <h2>Không tìm thấy trang</h2>
    <p>Trang bạn đang tìm không tồn tại hoặc đã bị xóa.</p>
    <p><a href="<?php echo home_url(); ?>">← Quay về trang chủ</a></p>
</main>

<?php get_footer(); ?>
