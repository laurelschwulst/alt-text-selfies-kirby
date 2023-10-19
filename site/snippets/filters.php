<div id="filter-snippet">
  <!-- TODO: When modal is open, underlying page elements (behind the modal) should be hidden from screen-reader using aria-hidden -->
  <button class="open-filters-button" v-on:click="openFilterModal">
    <span class="underline"><?= $filterText ?></span>
    <span class="ats-button">Change</span>
  </button>
  <div class="filter-modal w-full h-full fixed inset-0 justify-center items-center leading-6" v-bind:class="{open: filterModalIsOpen}">
    <button class="close-filters-button ats-button absolute top-4 left-4" v-on:click="closeFilterModal">Close</button>
    <div class="text-center flex flex-col items-center gap-4">
      <div class="ats__sorting-options flex flex-col items-center">
        <div aria-label="three cascading sparkles" class="flex justify-center items-start">
          <img class="w-[23px]" src="<?= $site->url() ?>/assets/images/star01.svg" alt="" />
          <img class="w-[30px] mt-[20px]" src="<?= $site->url() ?>/assets/images/star02.svg" alt="" />
          <img class="w-[32px] mt-[60px]" src="<?= $site->url() ?>/assets/images/star03.svg" alt="" />
        </div>
        <h3 class="italic mt-2">Sort</h3>
        <button class="hover:underline" v-bind:class="{underline: !newSort}" v-on:click="applySort()">By ABC</button>
        <button class="hover:underline" v-bind:class="{underline: newSort === 'length'}" v-on:click="applySort('length')">By Length</button>
        <button class="hover:underline" v-bind:class="{underline: newSort === 'random'}" v-on:click="applySort('random')">By Random</button>
      </div>
      <div class="ats__filtering-options flex flex-col items-center">
        <div aria-label="three sparkles with one raised in the center" class="flex justify-center items-end">
          <img class="w-[23px]" src="<?= $site->url() ?>/assets/images/star01.svg" alt="" />
          <img class="w-[30px] mb-[20px]" src="<?= $site->url() ?>/assets/images/star02.svg" alt="" />
          <img class="w-[32px]" src="<?= $site->url() ?>/assets/images/star03.svg" alt="" />
        </div>
        <h3 class="italic mt-2">Filter</h3>
        <button class="hover:underline" v-bind:class="{underline: !newFilter}" v-on:click="applyFilter()">All selfies</button>
        <button class="hover:underline" v-bind:class="{underline: newFilter === 'chapbook'}" v-on:click="applyFilter('chapbook')">Only those in the chapbook</button>
        <button class="hover:underline" v-bind:class="{underline: newFilter === 'audio'}" v-on:click="applyFilter('audio')">Only those with audio</button>
      </div>
    </div>
  </div>
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script>
    let currentSort = '<?= param('sort') ?>'
    let currentFilter = '<?= param('filter') ?>'
    const { createApp, ref } = Vue
    createApp({
      data() {
        return {
          newSort: currentSort,
          newFilter: currentFilter,
          filterModalIsOpen: false,
        }
      },
      methods: {
        applySort: function(sort) {
          this.newSort = sort
        },
        applyFilter: function(filter) {
          this.newFilter = filter
        },
        redirectToNewUrl: function() {
          const sortParam = this.newSort ? `/sort:${this.newSort}` : ''
          const filterParam = this.newFilter ? `/filter:${this.newFilter}` : ''
          window.location.href = `<?= $page->url() ?>${sortParam}${filterParam}`
        },
        openFilterModal: function() {
          this.filterModalIsOpen = true
        },
        closeFilterModal: function() {
          if (this.newSort !== currentSort || this.newFilter !== currentFilter) {
            this.redirectToNewUrl()
          } else {
            this.filterModalIsOpen = false
          }
        }
      },
      // listen for escape key
      mounted() {
        document.addEventListener('keydown', (e) => {
          if (e.key === 'Escape') {
            this.closeFilterModal()
          }
        })
      },
    }).mount('#filter-snippet')
  </script>