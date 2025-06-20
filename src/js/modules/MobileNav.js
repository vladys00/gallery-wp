const $ = require('jquery');

class MobileNav {
  constructor(){
    this.openButton = $('.header__toggle');
    this.navigationMenu = $('.header__nav');
    this.closeButton = $('.header__nav-close');
    this.events();
  }
     // 2. events
    events(){
        this.openButton.on("click",  this.openMobileNav.bind(this));
        this.closeButton.on("click", this.closeMobileNav.bind(this));

    }
    // 3. methods
    openMobileNav(){
        this.navigationMenu.addClass('active');
        this.closeButton.removeClass('rotate');
    
    }
    closeMobileNav(){
        this.navigationMenu.removeClass('active');
        this.closeButton.addClass('rotate');
    }
}

module.exports =  MobileNav;
