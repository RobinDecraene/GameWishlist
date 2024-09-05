<nav>
    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <!-- iterate over categories -->
        <?php foreach($categories as $category): ?>
            <li>
                <!-- link to category -->
                <a 
                    href="/<?= $category->slug ?>"
                    <?php if($category->slug === $categorySlug): ?>
                        style="font-weight: bold; color: #02733E;"
                    <?php endif; ?>
                >
                    <?= $category->title ?>
                </a> 
            </li>
        <?php endforeach; ?>
    </ul>
</nav>