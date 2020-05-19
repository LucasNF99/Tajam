<footer class="s-footer">
  <div class="t-container">
    <div class="c-footer_text">
      <img class="o-footer_logo" src="/assets/images/Logo.png" alt="tajam">
      <p class="o-footer-text">
        lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh elit. Duis sed odio sit amet auctror a ornare odio non mauris vitae erat in elit
      </p>
    </div>
    <div class="c-footer_address">
      <h2 class="o-footer_our-studio">
        OUR STUDIO
      </h2>
      <address class="o-footer_addres_info">
          Ruko curuk, Jl. Radio luar dalem jos
          No.12 - 13, Kalideres - Jakarta Barat
          1148 - indonesia
            <a class="fone" href="tel:(+62) 21-2224 3333">(+62) 21-2224 3333</a>
      </address>
    </div>

    <div class="c-footer_stay-in-touch">
      <h3 class="o-footer_stay-in-touch">
        STAY IN TOUCH
      </h3>
      <form action="c-footer_form">
        <input name="form-input" class="o-form_input" type="text" placeholder="Subscribe our newsletter">
        <button name="btn-form" type="submit"  class="o-form_button"> <img class="form_button_img" src="/assets/images/btn-footer.png" alt=""> </button>
      </form>
      <ul class="o-list-social">
      @for ($i = 1; $i < 7; $i++)
        <li class="list-social_item">
          <a href="#"><img src="assets/images/social-{{$i}}.png" alt=""></a>
        </li>
      @endfor
      </ul>
    </div>
    <nav class="c-nav-footer">
      <ul class="c-nav-footer_list">
        <li class="o-nav-footer_list-item"> <a href="#"> HELP </a> </li>
        <li class="o-nav-footer_list-item"> <a href="#">TERMS & CONDITION</a> </li>
        <li class="o-nav-footer_list-item"> <a href="#">PRIVACY</a> </li>
      </ul>
    </nav>

    <p class="o-footer_cp">
      Copyright © 2015 - Tajem Creative
    </p>

  </div>

</footer>
