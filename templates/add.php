<div class="page-header">
    <h2><?= t('New subscription') ?></h2>
    <ul>
        <li><a href="?action=feeds"><?= t('feeds') ?></a></li>
<!--         <li><a href="?action=import"><?= t('import') ?></a></li> <!-- not needed for now 
        <li><a href="?action=export"><?= t('export') ?></a></li> -->
    </ul>
</div>

<form method="post" action="?action=add" autocomplete="off">
    <label for="url"><?= t('Website or Feed URL') ?></label>
    <input type="text" name="url" id="url" placeholder="<?= t('http://website/') ?>" autofocus required/>
    <div class="form-actions">
        <button type="submit" class="btn btn-blue"><?= t('Add') ?></button>
    </div>
</form>

<p> 

    Configure:
    <dl>
      <dt>Pandora</dt>
        <dd> Favorited Songs: http://feeds.pandora.com/feeds/people/<a href="http://www.pandora.com/feeds">[profile-name]</a>/favorites.xml?max=100[op_when]</dd>
        <dd> Activity: http://feeds.pandora.com/feeds/people/<a href="http://www.pandora.com/feeds">[profile-name]</a>/recentactivity.xml</dd>
        <dd> Now Playing: http://feeds.pandora.com/feeds/people/<a href="http://www.pandora.com/feeds">[profile-name]</a>/nowplaying.xml</dd>
        <dd> Current Station: http://feeds.pandora.com/feeds/people/<a href="http://www.pandora.com/feeds">[profile-name]</a>/stations.xml?max=100</dd>
        <dd> Activity: http://feeds.pandora.com/feeds/people/<a href="http://www.pandora.com/feeds">[profile-name]</a>/recentactivity.xml</dd>
        <dd> Favorited Artists: http://feeds.pandora.com/feeds/people/<a href="http://www.pandora.com/feeds">[profile-name]</a>/favoriteartists.xml?max=100[op_when]</dd>  
        <dd> op_when:when=today,when=thisweek,when=thismonth,when=thisyear.</dd>
      <dt>Vimeo</dt>
        <dd> http://www.github.com/[<a href="https://vimeo.com/settings/account">vimeo-id-number</a>].atom</dd>
      <dt>Quora</dt>
        <dd>Answers: http://www.quora.com/[quora-username]/answers/rss</dd>
        <dd>Questions: http://www.quora.com/[quora-username]/quesions/rss</dd>
      <dt>Github Account</dt>
        <dd>Everything: http://www.github.com/[github-username].atom</dd>
        <dd>Specific Repo: https://github.com/[github-username]/[github-repo-name]/commits/master.atom
      <dt>Readability Account(HN)</dt>
        <dd>Everything: http://www.readability.com/[readability-username]/latest/feed</dd>
      <dt>StackExchange Account</dt>
        <dd>Everything: http://api.stackoverflow.com/1.1/users/[user-id-number]/timeline</dd>
        <dd>Questions: http://stack2rss.stackexchange.com/stackoverflow/users/[user-id-number]/questions?body=true</dd>
      <dt>Wordrpress Website</dt>
        <dd>http://[wordpress-url]/?feed=rss2</dd>
      <dt>Tumblr </dt>
        <dd>http://[wordpress-url]/rss</dd>
      <dt> Flickr </dt>
        <dd>Public Photoes: http://ycpi.api.flickr.com/services/feeds/photos_public.gne?id=[your_flickr_id]</dd>
        <dd>Photo Favorites: http://ycpi.api.flickr.com/services/feeds/photos_faves.gne?[your_flickr_id]</dd>
        <dd>[your_flickr_id] is the string of values(numerical,alphabetical or other characters) that's in the url of your 'you' page</dd>
      <dt> Pocket </dt>
        <dd>All: http://getpocket.com/users/[pocket-username]/feed/all</dd>
        <dd>Unread: http://getpocket.com/users/[pocket-username]/feed/unread</dd>
        <dd>Read: http://getpocket.com/users/[pocket-username]/feed/unread</dd>
      <dt> Pintrest </dt>
        <dd>Everything: http://pinterest.com/[pintrest-username]/feed.rss</dd>
        <dd>Specific Board: http://pinterest.com/[pintrest-username]/[board-name].rss

    Otherwise there's a hack for that:
    </dl>
      <dt> Mix Cloud </dt>
        <dd>http://bits.meloncholy.com/mixcloud-rss</dd> 
      <dt> Instagram </dt>
        <dd>cond figure and rss feed through http://web.stagram.com/ or IFTT to a tumblr blog(recommended).</dd>
    </dl>
<p>