<?php if (empty($items)): ?>

    <p class="alert alert-info"><?= t('No bookmark') ?></p>

<?php else: ?>

    <div class="page-header">
        <h2><?= t('Bookmarks') ?> (<?= $nb_items ?>)</h2>
    </div>

    <section class="items" id="listing">
    <?php foreach ($items as $item): ?>
        <?php $item_id = Model\encode_item_id($item['id']) ?>
        <article id="item-<?= $item_id ?>" data-item-id="<?= $item_id ?>">
            <h2>
                <a
                    href="?action=show&amp;id=<?= $item_id ?>"
                    data-item-id="<?= $item_id ?>"
                    id="open-<?= $item_id ?>"
                >
                    <?= Helper\escape($item['title']) ?>
                </a>
            </h2>
            <p>
                <?= Helper\escape($item['feed_title']) ?> |
                <?= dt('%e %B %Y %k:%M', $item['updated']) ?> |

                <span class="hide-mobile">
                    <a href="?action=bookmark&amp;value=0&amp;id=<?= $item_id ?>&amp;redirect=bookmarks&amp;offset=<?= $offset ?>">
                        <?= t('remove bookmark') ?>
                    </a> |
                </span>

                <a
                    href="<?= $item['url'] ?>"
                    id="original-<?= $item_id ?>"
                    rel="noreferrer"
                    target="_blank"
                    data-item-id="<?= $item_id ?>"
                >
                    <?= t('original link') ?>
                </a>
            </p>
        </article>
    <?php endforeach ?>

    <nav id="items-paging">
    <?php if ($offset > 0): ?>
        <a id="previous-page" href="?action=bookmarks&amp;offset=<?= ($offset - $items_per_page) ?>">⇽ <?= t('Previous page') ?></a>
    <?php endif ?>
    &nbsp;
    <?php if (($nb_items - $offset) > $items_per_page): ?>
        <a id="next-page" href="?action=bookmarks&amp;offset=<?= ($offset + $items_per_page) ?>"><?= t('Next page') ?> ⇾</a>
    <?php endif ?>
    </nav>

    </section>

<?php endif ?>