<?php
ob_start();
?>
<section class="blog-home">
    <h2>📝 Chào mừng đến với Blog Mini!</h2>
    <p>Khám phá những bài viết mới nhất từ cộng đồng.</p>
    <div class="post-list">
        <?php if (!empty($post)): ?>
            <?php foreach ($post as $item): ?>
                <article class="post-card">
                    <h3 class="post-title">
                        <a href="/post/<?php echo $item['id']; ?>">
                            <?php echo htmlspecialchars($item['title']); ?>
                        </a>
                    </h3>
                    <p class="post-excerpt">
                        <?php echo htmlspecialchars($item['excerpt']); ?>
                    </p>
                    <div class="post-meta">
                        <span>Ngày đăng: <?php echo htmlspecialchars($item['created_at']); ?></span>
                    </div>
                </article>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Chưa có bài viết nào.</p>
        <?php endif; ?>
    </div>
</section>
<?php
$content = ob_get_clean();
require_once 'layout/main.php';
?>