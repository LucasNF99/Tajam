<section class="s-our-works" id="works">
  <div>
  <div class="c-our-works_top-bar t-container">
    <h2 class="our-works_title o-title">
      OUR WORKS
    </h2>
    <a href="https://dribbble.com/" class="our-works_link">See All Project in dribbble </a>
  </div>
    <div class="c-our-works_projects"  data-flickity='{ "pageDots": false, 
      "prevNextButtons": false,"watchCSS": true }'>
    @for ($i = 1; $i < 16; $i++)
    <div class="o-projects_item">
      <img class="projects-it" src="/assets/images/works/w-{{$i}}.png" alt="">
    </div>
    @endfor
    </div>
    <button name="our-works_button" class="o-btn o-btn_our-works">LOAD MORE</button>
  </div>
</section>