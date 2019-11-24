<style>
.banner_lg_1 { grid-area: banner_large_1; background: url('https://www.cosmicktechnologies.com/wp-content/uploads/2015/12/seo-wide-banner.png');}
.banner_sm_1 { grid-area: banner_small_1; background: url('http://sd-displays.co.uk/images/roller-banner-header-img.jpg');}
.banner_sm_2 { grid-area: banner_small_2; background: url('http://sd-displays.co.uk/images/roller-banner-header-img.jpg');}
.banner_mid_1 { grid-area: banner_mid_1; background: url('https://i.signazon.com/i/splashs12w/banner-stands-splash.jpg?v=4');}

.banner_grid_container {
  width: 100%;
  box-sizing: border-box;

  display: grid;
  grid-template-areas:
    'banner_large_1 banner_large_1 banner_large_1 banner_large_1 banner_large_1 banner_small_1 banner_small_1 banner_small_2 banner_small_2'
    'banner_large_1 banner_large_1 banner_large_1 banner_large_1 banner_large_1 banner_small_1 banner_small_1 banner_small_2 banner_small_2'
    'banner_large_1 banner_large_1 banner_large_1 banner_large_1 banner_large_1 banner_mid_1 banner_mid_1 banner_mid_1 banner_mid_1'
    'banner_large_1 banner_large_1 banner_large_1 banner_large_1 banner_large_1 banner_mid_1 banner_mid_1 banner_mid_1 banner_mid_1';
  grid-gap: 10px;
  /*place-items: start;*/
  padding: 10px;
}
.banner_grid_container > div {
  background-size: 100% 100%;
  background-repeat: no-repeat;
  text-align: center;
  font-size: 30px;
  width: 100%;
  box-sizing: border-box;
  overflow: hidden;
}

.banner_grid_container > [style^='--aspect-ratio']::before {
  content: "";
  display: inline-block;
  width: 1px;
  height: 0;
  padding-bottom: calc(50% / (var(--aspect-ratio)));
  padding-left: calc(50% / (var(--aspect-ratio)));
  padding-right: calc(50% / (var(--aspect-ratio)));
  padding-top: calc(50% / (var(--aspect-ratio)));
}

@media screen and (max-width: 768px){
	.banner_grid_container {
      grid-template-areas:
        'banner_large_1 banner_large_1 banner_large_1 banner_large_1 banner_large_1 banner_large_1'
        'banner_small_1 banner_small_1 banner_small_1 banner_small_2 banner_small_2 banner_small_2'
        'banner_mid_1 banner_mid_1 banner_mid_1 banner_mid_1 banner_mid_1 banner_mid_1';

        width: 100%;
    }
}
</style>

<div class="banner_grid_container">
  <div class="banner_lg_1" style="--aspect-ratio: 3/1;"></div>
  <div class="banner_sm_1" style="--aspect-ratio: 3/1;"></div>
  <div class="banner_sm_2" style="--aspect-ratio: 3/1;"></div>
  <div class="banner_mid_1" style="--aspect-ratio: 3/1;"></div>
</div>
