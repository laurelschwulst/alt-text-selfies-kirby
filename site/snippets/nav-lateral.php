<?= $filterParams = getFilterParams() ?> 
<nav id="lateral">
    <div class="next-container">
        <a href="<?= $nextSelfie->url() . $filterParams ?>" class="next ats-button">→</a>
    </div>
    <div class="prev-container">
        <a href="<?= $previousSelfie->url() . $filterParams ?>" class="prev ats-button">←</a>
    </div>
</nav>