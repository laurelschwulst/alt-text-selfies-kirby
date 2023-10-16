<div>
  <button class="open-filters-button">
    <span class="underline">Everyone sorted in ABC order</span>
    <span class="ats-button">Change</span>
  </button>
  <div class="filter-modal w-full h-full fixed inset-0 justify-center items-center bg-white">
    <div class="text-center flex flex-col items-center gap-4">
      <div class="flex flex-col items-center">
        <div aria-label="three cascading sparkles" class="flex justify-center items-start">
          <img class="w-[23px]" src="<?= $site->url() ?>/assets/images/star01.svg" alt="" />
          <img class="w-[30px] mt-[20px]" src="<?= $site->url() ?>/assets/images/star02.svg" alt="" />
          <img class="w-[32px] mt-[60px]" src="<?= $site->url() ?>/assets/images/star03.svg" alt="" />
        </div>
        <h3 class="italic mt-2">Sort</h3>
        <button class="hover:underline">By ABC</button>
        <button class="hover:underline">By Length</button>
        <button class="hover:underline">By Random</button>
      </div>
      <div class="flex flex-col items-center">
        <div aria-label="three sparkles with one raised in the center" class="flex justify-center items-end">
          <img class="w-[23px]" src="<?= $site->url() ?>/assets/images/star01.svg" alt="" />
          <img class="w-[30px] mb-[20px]" src="<?= $site->url() ?>/assets/images/star02.svg" alt="" />
          <img class="w-[32px]" src="<?= $site->url() ?>/assets/images/star03.svg" alt="" />
        </div>
        <h3 class="italic mt-2">Filter</h3>
        <button class="hover:underline">Only those in the chapbook</button>
        <button class="hover:underline">Only those with audio</button>
      </div>
    </div>
  </div>
  <script>
    document.querySelector('.open-filters-button').addEventListener('click', () => {
      document.querySelector('.filter-modal').classList.add('open')
    })
  </script>
</div>