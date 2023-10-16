<div class="w-[519px] grow shrink-0 flex justify-center items-center mt-24 mb-24">
    <div>

        <div class="italic">
            <?= $selfie->title() ?>
        </div>

        <?php if ($selfie->selfie_audio()->isNotEmpty()): ?>

        <div class="mt-4 mb-5">
            <audio id="selfie-audio">
                <source src="<?= $selfie->selfie_audio()->toFiles()->first()->url()?>" type="<?= $selfie->selfie_audio()->toFiles()->first()->mime() ?>" />
            </audio>
            <button class="ats-button audio-button listen">Listen</button>
            <script>
                const audioButton = document.querySelector('.audio-button');
                var audio = document.getElementById('selfie-audio');
                const audioIsPlaying = () => { return audio.duration > 0 && !audio.paused };
                audioButton.addEventListener('click', () => {
                    if (!audioIsPlaying()) {
                      audio.play();
                      audioButton.innerText = 'Pause';
                    } else {
                      audio.pause();
                      audioButton.innerText = 'Listen';
                    }
                });
            </script>
        </div>

        <?php endif ?>

        <?= $selfie->selfie_content()->kt() ?>

    </div>
</div>